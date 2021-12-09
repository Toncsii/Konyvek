<?php 
require_once 'db.php';
$sql = "select * from konyvek order by id";
$stmt = $db -> query($sql);
echo json_encode($stmt -> fetchAll());

?>