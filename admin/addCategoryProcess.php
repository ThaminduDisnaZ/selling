<?php

include "../connection.php";

$category = $_POST["c"];

if (empty($category)) {
    echo("Please Enter New Category Name...");
}else if(strlen($category) > 50){
    echo("Your Category Name Should be less than 50 characters");
}else{
    $rs = Database::search("SELECT * FROM `category` WHERE `category` = '".$category."' ");
    $num = $rs->num_rows;

    if ($num > 0) {
        echo("Your Category Name is Already Exists");
    } else {
        Database::iud("INSERT INTO `category` (`category`) VALUES ('".$category."') ");
        echo("Success");
    }
    
}

?>