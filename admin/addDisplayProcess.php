<?php

include "../connection.php";

$display = $_POST["d"];

if (empty($display)) {
    echo("Please Enter New display Name...");
}else if(strlen($display) > 20){
    echo("Your display Name Should be less than 20 characters");
}else{
    $rs = Database::search("SELECT * FROM `display` WHERE `display` = '".$display."' ");
    $num = $rs->num_rows;

    if ($num > 0) {
        echo("Your display Name is Already Exists");
    } else {
        Database::iud("INSERT INTO `display` (`display`) VALUES ('".$display."') ");
        echo("Success");
    }
    
}

?>