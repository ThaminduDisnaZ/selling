<?php
include "../connection.php";

$modal = $_POST["m"];
   
if(empty($modal)){

    echo("Please Enter New Model Name...");
}elseif (strlen($modal) > 50) {
    echo("Your Model Name Should be less than 50 characters");
}else {
    $rs = Database::search("SELECT * FROM `model` WHERE `model` = '".$modal."' ");
    $num = $rs->num_rows;

    if ($num > 0) {
        echo("Your Category Name is Already Exists");
    }else{

        Database::iud("INSERT INTO `model` (`model`) VALUES ('".$modal."') ");
        echo("Success");

    }


}


?>