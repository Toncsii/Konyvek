<?php 
require_once 'db.php';
$sql = "select * from konyvek inner join kiado on konyvek.kiadokod = kiado.kod group by kiadokod order by id";
$stmt = $db -> query($sql);
echo json_encode($stmt -> fetchAll());

?>