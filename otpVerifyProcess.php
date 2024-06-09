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

   echo("Invalid OTP ENTER NEW OTP");


   $email = $e;
   $subject = "OTP Verify";
   $body ='<h1 style="text-align: center;">Verify Your Account - OTP Verification</h1>
<p style="text-align: center;"><strong><img src="https://telegra.ph/file/14d1ee5212d0be6ea808b.png" alt="" width="443" height="110" /></strong></p>
<p style="text-align: center;"><strong>&nbsp;</strong></p>
<p>Dear '.$f.',</p>
<p>Please use the following one-time password (OTP) to complete your registration:</p>
<p>&nbsp;</p>
<table style="margin-left: auto; margin-right: auto; width: 369px;" border="2">
<tbody>
<tr style="height: 104.734px;">
<td style="width: 357px; height: 104.734px;">
<p style="text-align: center;">Your OTP code is</p>
<p style="text-align: center;"><strong>'.$uid.'</strong></p>
</td>
</tr>
</tbody>
</table>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;">Thank you for registering with Net Pixel! To ensure the security of your account, we need to verify your email address.</p>
<p>&nbsp;</p>';
   
   
   
   $altbody = "Net Pixel";
   
   
   
   require "admin/mailler.php";
   

}


?>