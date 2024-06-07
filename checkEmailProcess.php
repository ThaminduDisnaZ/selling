<?php

require "./connection.php";

$email = $_POST["pw"];

$urs = Database::search("SELECT * FROM `user` WHERE `email` = '".$email."' ");

$enum = $urs->num_rows;

if ($email == "") {
    
    echo("Please Enter Your Email.");
}else if($enum == 1){

    echo("ok");

}else{
    echo("Incorrect Email");
}
?>