<?php

include "../connection.php";

$storage = $_POST["s"];

if (empty($storage)) {
    echo("Please Enter storage Name...");
}else if(strlen($storage) > 20){
    echo("Your storage Name Should be less than 20 characters");
}else{
    $rs = Database::search("SELECT * FROM `storage` WHERE `storage` = '".$storage."' ");
    $num = $rs->num_rows;

    if ($num > 0) {
        echo("Your storage Name is Already Exists");
    } else {
        Database::iud("INSERT INTO `storage` (`storage`) VALUES ('".$storage."') ");
        echo("Success");
    }
    
}

?>