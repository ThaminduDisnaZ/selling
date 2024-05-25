<?php

include "../connection.php";

$ram = $_POST["r"];

if (empty($ram)) {
    echo("Please Enter New ram Name...");
}else if(strlen($ram) > 20){
    echo("Your ram Name Should be less than 20 characters");
}else{
    $rs = Database::search("SELECT * FROM `ram` WHERE `ram` = '".$ram."' ");
    $num = $rs->num_rows;

    if ($num > 0) {
        echo("Your ram Name is Already Exists");
    } else {
        Database::iud("INSERT INTO `ram` (`ram`) VALUES ('".$ram."') ");
        echo("Success");
    }
    
}

?>