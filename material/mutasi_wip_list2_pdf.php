<?php
require_once('../models/tcpdf/config/lang/eng.php');
require_once('../models/tcpdf/tcpdf.php');
require_once "../models/abspath.php";
require_once "pdocon.php";
require_once "function.php";


$NmMenu=$_REQUEST["NmMenu"];
$title=$NmMenu." List Report";

// extend TCPF with custom functions
class MYPDF extends TCPDF {
	// create custom Header and Footer
	// Page footer
	public function Footer() {
		// Position at 15 mm from bottom
		$this->SetY(-15);
		// Set font
		$this->SetFont('helvetica', 'I', 8);
		// Page number
		$this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
	}

	// Load table data from file
	public function LoadData($file) {
		// Read file lines
		$lines = file($file);
		$data = array();
		foreach($lines as $line) {
			$data[] = explode(';', chop($line));
		}
		return $data;
	}

	// Colored table
	public function ColoredTable($header,$data) {
		// Colors, line width and bold font
		$this->SetFillColor(255);
		$this->SetTextColor(0);
		$this->SetDrawColor(0);
		$this->SetLineWidth(0.3);
		$this->SetFont('', 'B');
		// Header
		$w = array(40, 35, 40, 45);
		$num_headers = count($header);
		for($i = 0; $i < $num_headers; ++$i) {
			$this->Cell($w[$i], 7, $header[$i], 1, 0, 'C', 1);
		}
		$this->Ln();
		// Color and font restoration
		$this->SetFillColor(255);
		$this->SetTextColor(0);
		$this->SetFont('');
		// Data
		$fill = 0;
		foreach($data as $row) {
			$this->Cell($w[0], 6, $row[0], 'LR', 0, 'L', $fill);
			$this->Cell($w[1], 6, $row[1], 'LR', 0, 'L', $fill);
			$this->Cell($w[2], 6, number_format($row[2]), 'LR', 0, 'R', $fill);
			$this->Cell($w[3], 6, number_format($row[3]), 'LR', 0, 'R', $fill);
			$this->Ln();
			$fill=!$fill;
		}
		$this->Cell(array_sum($w), 0, '', 'T');
	}
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Kikin Kusumah (022-7353 7575)');
$pdf->SetTitle($title);
$pdf->SetSubject($subject);
$pdf->SetKeywords($keywords);

$pdf->setPrintHeader(false);

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 011', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

//set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

//set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

//set some language-dependent strings
$pdf->setLanguageArray($l);

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', '', 8);

// add a page
$pdf->AddPage('L');

//Data loading
$mat_type = $_REQUEST["mat_type"];	
$date1 = dmys2ymd($_REQUEST["date1"]);
$date2 = dmys2ymd($_REQUEST["date2"]);

$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 200;
$offset = ($page-1)*$rows;
$result = array();

$q = "SELECT KdBarang,NmBarang,HsNo,Sat,
	  (
	  (SELECT IF(SUM(qty)>0,SUM(qty),0) FROM mat_stockcard s WHERE date < '".$date1."' AND s.mat_id = a.KdBarang AND type IN ('B','I'))	  
	  -
	  (SELECT IF(SUM(qty)>0,SUM(qty),0) FROM mkt_dodet da LEFT JOIN mkt_dohdr db ON db.do_id=da.do_id WHERE do_date < '".$date1."' AND da.fg_id = a.KdBarang)
	  +
	  (SELECT IF(SUM(qty_in)>0,SUM(qty_in),0) FROM mat_opnamedet oa LEFT JOIN mat_opnamehdr ob ON ob.opname_id=oa.opname_id WHERE opname_date < '".$date1."' AND oa.mat_id = a.KdBarang)
	  -
	  (SELECT IF(SUM(qty_out)>0,SUM(qty_out),0) FROM mat_opnamedet oa LEFT JOIN mat_opnamehdr ob ON ob.opname_id=oa.opname_id WHERE opname_date < '".$date1."' AND oa.mat_id = a.KdBarang)
	  ) AS qty_beg, 
	  
	  (
	  (SELECT IF(SUM(weight)>0,SUM(weight),0) FROM mat_stockcard s WHERE date < '".$date1."' AND s.mat_id = a.KdBarang AND type IN ('B','I'))	  
	  -
	  (SELECT IF(SUM(weight)>0,SUM(weight),0) FROM mkt_dodet da LEFT JOIN mkt_dohdr db ON db.do_id=da.do_id WHERE do_date < '".$date1."' AND da.fg_id = a.KdBarang)
	  +
	  (SELECT IF(SUM(weight_in)>0,SUM(weight_in),0) FROM mat_opnamedet oa LEFT JOIN mat_opnamehdr ob ON ob.opname_id=oa.opname_id WHERE opname_date < '".$date1."' AND oa.mat_id = a.KdBarang)
	  -
	  (SELECT IF(SUM(weight_out)>0,SUM(weight_out),0) FROM mat_opnamedet oa LEFT JOIN mat_opnamehdr ob ON ob.opname_id=oa.opname_id WHERE opname_date < '".$date1."' AND oa.mat_id = a.KdBarang)
	  ) AS qty_beg2, 
	  
	  (
	  (SELECT IF(SUM(qty)>0,SUM(qty),0) FROM mat_stockcard s WHERE s.mat_id = a.KdBarang AND type = 'I' AND date  BETWEEN '".$date1."' AND '".$date2."')
	  ) AS qty_in,
	  
	  (
	  (SELECT IF(SUM(weight)>0,SUM(weight),0) FROM mat_stockcard s WHERE s.mat_id = a.KdBarang AND type = 'I' AND date  BETWEEN '".$date1."' AND '".$date2."')
	  ) AS qty_in2,
	  
	  (
	  (SELECT IF(SUM(qty)>0,SUM(qty),0) FROM mat_stockcard s WHERE s.mat_id = a.KdBarang AND type IN ('O') AND date  BETWEEN '".$date1."' AND '".$date2."' )
	  ) AS qty_out,
	  
	  (
	  (SELECT IF(SUM(weight)>0,SUM(weight),0) FROM mat_stockcard s WHERE s.mat_id = a.KdBarang AND type IN ('O') AND date  BETWEEN '".$date1."' AND '".$date2."' )
	  ) AS qty_out2,
	  
	  (
	  (SELECT IF(SUM(qty_in)>0,SUM(qty_in),0) FROM mat_opnamedet oa LEFT JOIN mat_opnamehdr ob ON ob.opname_id=oa.opname_id WHERE oa.mat_id = a.KdBarang AND opname_date BETWEEN '".$date1."' AND '".$date2."')
	  +
	  (SELECT IF(SUM(qty_out)>0,SUM(qty_out),0) FROM mat_opnamedet oa LEFT JOIN mat_opnamehdr ob ON ob.opname_id=oa.opname_id WHERE oa.mat_id = a.KdBarang AND opname_date BETWEEN '".$date1."' AND '".$date2."')
	  ) AS qty_bal,
	  
	  (
	  (SELECT IF(SUM(weight_in)>0,SUM(weight_in),0) FROM mat_opnamedet oa LEFT JOIN mat_opnamehdr ob ON ob.opname_id=oa.opname_id WHERE oa.mat_id = a.KdBarang AND opname_date BETWEEN '".$date1."' AND '".$date2."')
	  +
	  (SELECT IF(SUM(weight_out)>0,SUM(weight_out),0) FROM mat_opnamedet oa LEFT JOIN mat_opnamehdr ob ON ob.opname_id=oa.opname_id WHERE oa.mat_id = a.KdBarang AND opname_date BETWEEN '".$date1."' AND '".$date2."')
	  ) AS qty_bal2
	   ";
$q .= "FROM mst_barang a 
	  WHERE a.TpBarang='$mat_type' 
	  ORDER BY KdBarang ASC";

$q .= " LIMIT $offset,$rows";

$run=$pdo->query($q);	
$rs=$run->fetchAll(PDO::FETCH_ASSOC);

// create some HTML content
$html = '<h2>'.$NmMenu.'</h2>'.	
		'<b>Period : '.$_REQUEST['date1'] .' - '.$_REQUEST['date2'].'</b><br>'.				
		'<table cellspacing="0" cellpadding="2" border="1">
		<thead>
		<tr>
		  <th align="center" width="25" rowspan="2"><b>No.</b></th>
		  <th width="80" rowspan="2"><b>Part Code</b></th>
		  <th width="80" rowspan="2"><b>Part No.</b></th>
		  <th align="right" colspan="2"><b>Previous Balance</b></th>
		  <th align="right" colspan="2"><b>Incoming</b></th>
		  <th align="right" colspan="2"><b>Outgoing</b></th>
		  <th align="right" colspan="2"><b>Ending Balance</b></th>
		  <th rowspan="2"><b>Remarks</b></th>
		</tr>
		<tr>
		  <th align="right"><b>Pcs</b></th>
		  <th align="right"><b>Kg</b></th>
		  <th align="right"><b>Pcs</b></th>
		  <th align="right"><b>Kg</b></th>
		  <th align="right"><b>Pcs</b></th>
		  <th align="right"><b>Kg</b></th>
		  <th align="right"><b>Pcs</b></th>
		  <th align="right"><b>Kg</b></th>
		</tr>
		</thead>
		<tbody>';
$no=1;
foreach ($rs as $r){
$qty_end=$r['qty_beg']+$r['qty_in']-$r['qty_out'];
$qty_end2=$r['qty_beg2']+$r['qty_in2']-$r['qty_out2'];

$html .= '<tr>'.
	  	 '<td align="center" width="25">'.$no.'</td>'.
		 '<td width="80">'.$r['KdBarang'].'</td>'.
		 '<td width="80">'.$r['NmBarang'].'</td>'.
		 '<td align="right">'.$r['qty_beg'].'</td>'.
		 '<td align="right">'.$r['qty_beg2'].'</td>'.
		 '<td align="right">'.$r['qty_in'].'</td>'.
 		 '<td align="right">'.$r['qty_in2'].'</td>'.
		 '<td align="right">'.$r['qty_out'].'</td>'.
 		 '<td align="right">'.$r['qty_out2'].'</td>'.
		 '<td align="right">'.$qty_end.'</td>'.
		 '<td align="right">'.$qty_end2.'</td>'.		 
		 '<td></td>'.
		 '</tr>';
$no+=1;	
}

$html .= '</tbody></table>';

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');
// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output($NmMenu.'.pdf', 'I');