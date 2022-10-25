<?php
    require "db-connect.php";
    $db = new DbConnect();

    if($db->getDB()){
        echo "database connected";
    }else{
        echo "database not connected";
    }

?>

