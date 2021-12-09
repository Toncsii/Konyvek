<?php 
require_once 'db.php';
$nev = $_GET['nev'];
//echo "szerver oldalon meg van az adat ".$nev;
$sql = "insert into kiado values (null,'{$nev}')";
$stmt = $db -> exec($sql);
echo $stmt;
   
?>