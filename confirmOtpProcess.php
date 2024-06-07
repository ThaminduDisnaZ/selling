<?php

require "./connection.php";

$otp = $_POST["otp"];
$email = $_POST["email"];


$otpr = Database::search("SELECT * FROM `user` WHERE `email` = '".$email."' ");
$otpdata = $otpr->fetch_assoc();



if ($otp == $otpdata["otp"]) {
   echo("ok");
} else {
    echo("OTP is incorrect");
}




?>