<?php

require "./connection.php";

$password = $_POST["npw"];
$email = $_POST["email"];

$urs = Database::search("SELECT * FROM `user` WHERE `email` = '" . $email . "' ");
$udata = $urs->fetch_assoc();

   

if ($udata["password"] != $password ) {
    Database::iud("UPDATE`user` SET `password`='" .$password. "'WHERE `email`='" . $email . "'");
    echo("Success");
}else{

    echo("You Are Enterd old password.. Please Enter new password");
}



?>