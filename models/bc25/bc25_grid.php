<?php
require_once "../../models/abspath.php";
require_once "pdocon.php";
require_once "function.php";

$req = $_REQUEST["req"];
$CAR = $_REQUEST["CAR"];

if ($req=='dg'){
	$q = "SELECT *,DATE_FORMAT(DokTg,'%d/%m/%Y') AS DokTgDmy FROM dokumen ";
	$q .= "WHERE DokKdBc='3' AND CAR='$CAR' ORDER BY no";
	
	$run=$pdo->query($q);
	$rs=$run->fetchAll(PDO::FETCH_ASSOC);
	echo json_encode($rs);
	
} else if ($req=='dg2'){
	$q = "SELECT * FROM barang ";
	$q .= "WHERE DokKdBc='3' AND CAR='$CAR' ORDER BY no";
	
	$run=$pdo->query($q);
	$rs=$run->fetchAll(PDO::FETCH_ASSOC);
	echo json_encode($rs);
	
} else if ($req=='outhdr'){
	$NmTuj = $_REQUEST["NmTuj"];
	
	$key = $_REQUEST["q"];
	
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 200;
	$offset = ($page-1)*$rows;
	$result = array();
	
	$q = "SELECT *,DATE_FORMAT(matout_date,'%d/%m/%Y') AS matout_date, a.notes AS notes, matout_id AS ref_id
		  FROM mat_outhdr a
		  WHERE KdJnsDok='3' AND cust='$NmTuj' ";
	
	if ($key != ''){
		$q .= "AND matout_no LIKE '%$key%' ";
	}	 
	 
	$q .= "ORDER BY matout_no, matout_date ASC";
	
	$runtot=$pdo->query($q);
	$rstot=$runtot->fetchAll(PDO::FETCH_ASSOC);

	$q .= " LIMIT $offset,$rows";
	$run=$pdo->query($q);
	$rs=$run->fetchAll(PDO::FETCH_ASSOC);

	$result["total"] = count($rstot);
	$result["rows"] = $rs;

	echo json_encode($result);
	
} else if ($req=='outdet'){	
	$matout_id = $_REQUEST["matout_id"];
	$q = "SELECT KdBarang, NmBarang AS UrBarang, FORMAT(qty, 2) AS qty, FORMAT(weight, 2) AS NETTO, FORMAT((qty*price), 2) AS HrgSerah
		  FROM mat_outdet a
		  LEFT JOIN mst_barang b ON KdBarang = mat_id 
		  WHERE matout_id='$matout_id' 
		  ORDER BY child_no ASC";	
		  
	$run=$pdo->query($q);	
	$rs=$run->fetchAll(PDO::FETCH_ASSOC);
	echo json_encode($rs);	  

} else if ($req=='dg3'){
	$q = "SELECT * FROM penggunaanbarang ";
	$q .= "WHERE DokKdBc='3' AND CAR='$CAR' ORDER BY no";
	
	
	$run=$pdo->query($q);
	$rs=$run->fetchAll(PDO::FETCH_ASSOC);
	echo json_encode($rs);
	
} else if ($req=='dgCari'){
	$dtdari = $_REQUEST["dtdari"];
	$dtsampai = $_REQUEST["dtsampai"];
	$q = "SELECT *,
		CONCAT(LEFT(a.CAR,3),'.',RIGHT(a.CAR,3)) AS FCAR,
		CONCAT(LEFT(NoDaf,3),'.',RIGHT(NoDaf,3)) AS FNoDaf,
		DATE_FORMAT(TgDaf,'%d/%m/%Y') AS FTgDaf
		FROM header a 
		LEFT JOIN hdrtransaksi c ON c.DokKdBc=a.DokKdBc AND c.CAR=a.CAR
		WHERE a.DokKdBc='3'
		";
	if($dtdari != '' && $dtsampai != ''):
		$q .= "AND TgDaf BETWEEN '".dmys2ymd($dtdari)."' AND '".dmys2ymd($dtsampai)."' ";
	endif;
	$q .= "ORDER BY a.CAR DESC";		
	
	$run=$pdo->query($q);
	$rs=$run->fetchAll(PDO::FETCH_ASSOC);
	echo json_encode($rs);
}

?>