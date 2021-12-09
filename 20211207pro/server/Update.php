<?php 
require_once "db.php";
$id = $_GET['id'];
$leiras = $_GET['tema'];
$sql = "update konyvek set tema='{$leiras}' where id={$id}";
$stmt = $db->exec($sql);
if($stmt)
    echo "sikeres modositas";
else
    echo "nem sikerult";
?>