<?php

include "../connection.php";

$brand = $_POST["b"];

if (empty($brand)) {
    echo("Please Enter New brand Name...");
}else if(strlen($brand) > 20){
    echo("Your brand Name Should be less than 20 characters");
}else{
    $rs = Database::search("SELECT * FROM `brand` WHERE `brand` = '".$brand."' ");
    $num = $rs->num_rows;

    if ($num > 0) {
        echo("Your brand Name is Already Exists");
    } else {
        Database::iud("INSERT INTO `brand` (`brand`) VALUES ('".$brand."') ");
        echo("Success");
    }
    
}

?>