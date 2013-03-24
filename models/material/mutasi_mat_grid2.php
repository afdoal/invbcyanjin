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
	  (SELECT IF(SUM(qty)>0,SUM(qty),0) FROM mat_stockcard s WHERE date < '".$date1."' AND s.mat_id = a.KdBarang AND type = 'B')
	  +
	  (SELECT IF(SUM(qty)>0,SUM(qty),0) FROM mat_incdet ia LEFT JOIN mat_inchdr ib ON ib.matin_id=ia.matin_id WHERE matin_type <> '3' AND matin_date < '".$date1."' AND ia.mat_id = a.KdBarang)
	  -
	  (SELECT IF(SUM(qty)>0,SUM(qty),0) FROM mat_outdet oa LEFT JOIN mat_outhdr ob ON ob.matout_id=oa.matout_id WHERE matout_type <> '3' AND matout_date < '".$date1."' AND oa.mat_id = a.KdBarang)
	  +
	  (SELECT IF(SUM(qty_in)>0,SUM(qty_in),0) FROM mat_opnamedet oa LEFT JOIN mat_opnamehdr ob ON ob.opname_id=oa.opname_id WHERE opname_date < '".$date1."' AND oa.mat_id = a.KdBarang)
	  -
	  (SELECT IF(SUM(qty_out)>0,SUM(qty_out),0) FROM mat_opnamedet oa LEFT JOIN mat_opnamehdr ob ON ob.opname_id=oa.opname_id WHERE opname_date < '".$date1."' AND oa.mat_id = a.KdBarang)
	  ) AS qty_beg, 
	  
	  (
	  (SELECT IF(SUM(weight)>0,SUM(weight),0) FROM mat_stockcard s WHERE date < '".$date1."' AND s.mat_id = a.KdBarang AND type = 'B')
	  +
	  (SELECT IF(SUM(weight)>0,SUM(weight),0) FROM mat_incdet ia LEFT JOIN mat_inchdr ib ON ib.matin_id=ia.matin_id WHERE matin_type <> '3' AND matin_date < '".$date1."' AND ia.mat_id = a.KdBarang)
	  -
	  (SELECT IF(SUM(weight)>0,SUM(weight),0) FROM mat_outdet oa LEFT JOIN mat_outhdr ob ON ob.matout_id=oa.matout_id WHERE matout_type <> '3' AND matout_date < '".$date1."' AND oa.mat_id = a.KdBarang)
	  +
	  (SELECT IF(SUM(weight_in)>0,SUM(weight_in),0) FROM mat_opnamedet oa LEFT JOIN mat_opnamehdr ob ON ob.opname_id=oa.opname_id WHERE opname_date < '".$date1."' AND oa.mat_id = a.KdBarang)
	  -
	  (SELECT IF(SUM(weight_out)>0,SUM(weight_out),0) FROM mat_opnamedet oa LEFT JOIN mat_opnamehdr ob ON ob.opname_id=oa.opname_id WHERE opname_date < '".$date1."' AND oa.mat_id = a.KdBarang)
	  ) AS qty_beg2, 
	  
	  (
	  (SELECT IF(SUM(qty)>0,SUM(qty),0) FROM mat_incdet ia LEFT JOIN mat_inchdr ib ON ib.matin_id=ia.matin_id WHERE matin_type = '0' AND ia.mat_id = a.KdBarang AND matin_date BETWEEN '".$date1."' AND '".$date2."')
	  ) AS qty_in01,
	  
	  (
	  (SELECT IF(SUM(weight)>0,SUM(weight),0) FROM mat_incdet ia LEFT JOIN mat_inchdr ib ON ib.matin_id=ia.matin_id WHERE matin_type = '0' AND ia.mat_id = a.KdBarang AND matin_date BETWEEN '".$date1."' AND '".$date2."')
	  ) AS qty_in02,
	  
	  (
	  (SELECT IF(SUM(qty)>0,SUM(qty),0) FROM mat_incdet ia LEFT JOIN mat_inchdr ib ON ib.matin_id=ia.matin_id WHERE matin_type = '1' AND ia.mat_id = a.KdBarang AND matin_date BETWEEN '".$date1."' AND '".$date2."')
	  ) AS qty_in11,
	  
	  (
	  (SELECT IF(SUM(weight)>0,SUM(weight),0) FROM mat_incdet ia LEFT JOIN mat_inchdr ib ON ib.matin_id=ia.matin_id WHERE matin_type = '1' AND ia.mat_id = a.KdBarang AND matin_date BETWEEN '".$date1."' AND '".$date2."')
	  ) AS qty_in12,
	  
	  (
	  (SELECT IF(SUM(qty)>0,SUM(qty),0) FROM mat_incdet ia LEFT JOIN mat_inchdr ib ON ib.matin_id=ia.matin_id WHERE matin_type = '2' AND ia.mat_id = a.KdBarang AND matin_date BETWEEN '".$date1."' AND '".$date2."')
	  ) AS qty_in21,
	  
	  (
	  (SELECT IF(SUM(weight)>0,SUM(weight),0) FROM mat_incdet ia LEFT JOIN mat_inchdr ib ON ib.matin_id=ia.matin_id WHERE matin_type = '2' AND ia.mat_id = a.KdBarang AND matin_date BETWEEN '".$date1."' AND '".$date2."')
	  ) AS qty_in22,
	  
	  (
	  (SELECT IF(SUM(qty)>0,SUM(qty),0) FROM mat_outdet oa LEFT JOIN mat_outhdr ob ON ob.matout_id=oa.matout_id WHERE matout_type = '0' AND oa.mat_id = a.KdBarang AND matout_date BETWEEN '".$date1."' AND '".$date2."')
	  ) AS qty_out01,
	  
	  (
	  (SELECT IF(SUM(weight)>0,SUM(weight),0) FROM mat_outdet oa LEFT JOIN mat_outhdr ob ON ob.matout_id=oa.matout_id WHERE matout_type = '0' AND oa.mat_id = a.KdBarang AND matout_date BETWEEN '".$date1."' AND '".$date2."')
	  ) AS qty_out02,
	  
	  (
	  (SELECT IF(SUM(qty)>0,SUM(qty),0) FROM mat_outdet oa LEFT JOIN mat_outhdr ob ON ob.matout_id=oa.matout_id WHERE matout_type = '1' AND oa.mat_id = a.KdBarang AND matout_date BETWEEN '".$date1."' AND '".$date2."')
	  ) AS qty_out11,
	  
	  (
	  (SELECT IF(SUM(weight)>0,SUM(weight),0) FROM mat_outdet oa LEFT JOIN mat_outhdr ob ON ob.matout_id=oa.matout_id WHERE matout_type = '1' AND oa.mat_id = a.KdBarang AND matout_date BETWEEN '".$date1."' AND '".$date2."')
	  ) AS qty_out12,
	  
	  (
	  (SELECT IF(SUM(qty)>0,SUM(qty),0) FROM mat_outdet oa LEFT JOIN mat_outhdr ob ON ob.matout_id=oa.matout_id WHERE matout_type = '2' AND oa.mat_id = a.KdBarang AND matout_date BETWEEN '".$date1."' AND '".$date2."')
	  ) AS qty_out21,
	  
	  (
	  (SELECT IF(SUM(weight)>0,SUM(weight),0) FROM mat_outdet oa LEFT JOIN mat_outhdr ob ON ob.matout_id=oa.matout_id WHERE matout_type = '2' AND oa.mat_id = a.KdBarang AND matout_date BETWEEN '".$date1."' AND '".$date2."')
	  ) AS qty_out22
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