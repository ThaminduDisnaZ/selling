<?php
include "connection.php";
$fname = $_POST["f"];
$lname = $_POST["l"];
$email = $_POST["e"];
$mobile = $_POST["m"];
$password = $_POST["p"];
$status = "1";
$uid = uniqid();
if (empty($fname)) {
   echo("Please Enter Your First Name");
} else if(strlen($fname) > 20){
    echo("Your First Name  Shuld Be Less Than 20 Characters");
}else if(empty($lname)){
    echo("Please Enter Your Last Name");
}else if(strlen($lname) > 20){
    echo("Your Lirst Name  Shuld Be Less Than 20 Characters");
}else if(empty($email)){
    echo("Please Enter Your Email");
}else if(strlen($email) > 100){
    echo("Your Email  Shuld Be Less Than 100 Characters");
}else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo("Your Email Address is Invalid");
}else if(empty($mobile)){
    echo("Please Enter Your Mobile Number");
}else if(!preg_match("/07[0,1,2,4,5,6,7,8]{1}[0-9]{7}/" ,$mobile)){
    echo("Your Mobile Address is Invalid");
}elseif (empty($password)) {
    echo("Please Enter Your Password");
}elseif (strlen($password) < 5 || strlen($password) > 45) {
    echo("Your Password must contain 5 - 45 Characters");
}else{

    $rs = Database::search("SELECT * FROM `user` WHERE `email` = '".$email."' OR `mobile` = '".$mobile."' ");
    $num = $rs->num_rows;    
    if ($num > 0) {
        echo("Your Email or Mobile Number Already Exists");        
    } else {
        Database::iud("INSERT INTO `user` (`fname`,`lname`,`email`,`mobile`,`password`,`status_id`,`otp`,`uev_id`) 
        VALUES
         ('".$fname."','".$lname."','".$email."','".$mobile."','".$password."','".$status."','".$uid."','2') ");
          echo("Success");            
    }
}
$email = $email;
$subject = "OTP Verify";
$body = '<h1 style="text-align: center;">Verify Your Account - OTP Verification</h1>
<p style="text-align: center;"><strong><img src="https://telegra.ph/file/14d1ee5212d0be6ea808b.png" alt="" width="443" height="110" /></strong></p>
<p style="text-align: center;"><strong>&nbsp;</strong></p>
<p>Dear '.$fname.',</p>
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
?>