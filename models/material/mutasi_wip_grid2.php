<?php
require_once "../abspath.php";
require_once "pdocon.php";
require_once "function.php";

$req = $_REQUEST["req"];
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
	  ) AS qty_out2
	   ";
$q .= "FROM mst_barang a 
	  WHERE a.TpBarang='$mat_type' 
	  ORDER BY KdBarang ASC";

$runtot=$pdo->query($q);
$rstot=$runtot->fetchAll(PDO::FETCH_ASSOC);

$q .= " LIMIT $offset,$rows";
$run=$pdo->query($q);
$rs=$run->fetchAll(PDO::FETCH_ASSOC);

$result["total"] = count($rstot);
$result["rows"] = $rs;

echo json_encode($result);
?>