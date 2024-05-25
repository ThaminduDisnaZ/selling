<?php

include "../connection.php";

$cpu = $_POST["c"];

if (empty($cpu)) {
    echo("Please Enter New cpu Name...");
}else if(strlen($cpu) > 20){
    echo("Your cpu Name Should be less than 20 characters");
}else{
    $rs = Database::search("SELECT * FROM `cpu` WHERE `cpu` = '".$cpu."' ");
    $num = $rs->num_rows;

    if ($num > 0) {
        echo("Your cpu Name is Already Exists");
    } else {
        Database::iud("INSERT INTO `cpu` (`cpu`) VALUES ('".$cpu."') ");
        echo("Success");
    }
    
}

?>