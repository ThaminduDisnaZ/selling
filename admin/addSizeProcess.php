<?php

include "../connection.php";

$size = $_POST["s"];

if (empty($size)) {
    echo("Please Enter New size Name...");
}else if(strlen($size) > 20){
    echo("Your size Name Should be less than 20 characters");
}else{
    $rs = Database::search("SELECT * FROM `size` WHERE `size` = '".$size."' ");
    $num = $rs->num_rows;

    if ($num > 0) {
        echo("Your size Name is Already Exists");
    } else {
        Database::iud("INSERT INTO `size` (`size`) VALUES ('".$size."') ");
        echo("Success");
    }
    
}

?>