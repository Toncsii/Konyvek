<?php 
require_once 'db.php';
$sql = "select * from kiado";
$stmt = $db -> query($sql);
echo json_encode($stmt -> fetchAll());

?>