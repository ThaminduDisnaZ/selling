<?php

require "./connection.php";
$uid = uniqid();

$otp = $_POST["otp"];
$e = $_POST["e"];
$f = $_POST["f"];

$otpr = Database::search("SELECT `otp` FROM `user` WHERE `email` = '".$e."' ");

$otp_data = $otpr->fetch_assoc();

if ($otp == $otp_data["otp"]) {
    echo("Success");
    Database::iud("UPDATE `user` SET `uev_id` = '1' WHERE `email` = '".$e."'");
}else if ($otp == "") {
    echo("Please Enter OTP");
    Database::iud("UPDATE `user` SET `uev_id` = '2' WHERE `email` = '".$e."'");
}else if ($otp != $otp_data["otp"]) {
    echo("Invalid OTP");
   
}else {
    echo("fail  :- "); 
    Database::iud("DELETE FROM `user` WHERE `email` = '".$e."'");
   Database::iud("UPDATE `user` SET `otp` = '".$uid."' WHERE `email` = '".$e."'");
   Database::iud("UPDATE `user` SET `uev_id` = '2' WHERE `email` = '".$e."'");

   $email = $e;
   $subject = "OTP Verify";
   $body = "
   </head>
   <body>
   <div class='container'>
   <h1>Verify Your Account - OTP Verification</h1>
   <p>Dear ".$f.",</p>
   <p>Thank you for registering with Net Pixel! To ensure the security of your account, we need to verify your email address.</p>
   <p>Please use the following one-time password (OTP) to complete your registration:</p>
   <div class='otp-code'><h3><b>". $uid ."</b></h3></div>
   <p>If you did not request this OTP, please disregard this email.</p>
   <p>Thank you for choosing Net Pixel! If you have any questions or need assistance, please don't hesitate to contact our support team at [Your Support Email Address].</p>
   <p class='footer-text'>Best regards,<br>Thamindu Disna<br>Net Pixel<br></p>
   </div>
   </body>
   ";
   
   
   
   $altbody = "Net Pixel";
   
   
   
   require "admin/mailler.php";
   

}


?>