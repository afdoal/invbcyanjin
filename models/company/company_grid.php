<?php
require_once "../abspath.php";
require_once "pdocon.php";

$TpPrshn=$_REQUEST["TpPrshn"];

$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 200;
$offset = ($page-1)*$rows;
$result = array();

$q = "SELECT *,NmPrshn AS NmPrshn0,DATE_FORMAT(TgPokokPpjk,'%d/%m/%Y') AS TgPokokPpjk FROM mst_perusahaan WHERE TpPrshn='$TpPrshn' ORDER BY NmPrshn ASC";

$runtot=$pdo->query($q);
$rstot=$runtot->fetchAll(PDO::FETCH_ASSOC);

$q .= " LIMIT $offset,$rows";
$run=$pdo->query($q);
$rs=$run->fetchAll(PDO::FETCH_ASSOC);

$result["total"] = count($rstot);
$result["rows"] = $rs;

echo json_encode($result);
?>