<?php 
require_once 'db.php';
if(isset($_GET['kod'])){
    $sql = "delete from kiado where kod={$_GET['kod']}";
    $stmt = $db -> exec($sql);
    if($stmt)
        echo "sikeres torles";
    else
        echo "nem sikerult";    
}
   
?>