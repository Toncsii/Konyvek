<?php 
require_once 'db.php';
if(isset($_GET['kiadokod']))
    $sql = "select * from konyvek where kiadokod={$_GET['kiadokod']}";
$stmt = $db -> query($sql);
echo json_encode($stmt -> fetchAll());

?>