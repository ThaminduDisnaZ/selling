<?php

include "../connection.php";

$warranty = $_POST["addwarranty"];

if (empty($warranty)) {
    echo("Please Enter New Warranty Name...");
}else if(strlen($warranty) > 50){
    echo("Your Warranty Name Should be less than 50 characters");
}else{
    $rs = Database::search("SELECT * FROM `warranty` WHERE `warranty` = '".$warranty."' ");
    $num = $rs->num_rows;

    if ($num > 0) {
        echo("Your Warranty Name is Already Exists");
    } else {
        Database::iud("INSERT INTO `warranty` (`warranty`) VALUES ('".$warranty."') ");
        echo("Success");
    }
    
}

?>