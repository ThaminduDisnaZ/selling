<?php

include "../connection.php";

$gpu = $_POST["g"];

if (empty($gpu)) {
    echo("Please Enter New gpu Name...");
}else if(strlen($gpu) > 50){
    echo("Your gpu Name Should be less than 50 characters");
}else{
    $rs = Database::search("SELECT * FROM `gpu` WHERE `gpu` = '".$gpu."' ");
    $num = $rs->num_rows;

    if ($num > 0) {
        echo("Your gpu Name is Already Exists");
    } else {
        Database::iud("INSERT INTO `gpu` (`gpu`) VALUES ('".$gpu."') ");
        echo("Success");
    }
    
}

?>