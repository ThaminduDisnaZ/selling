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
// }else if(strlen($mobile) == 10){
//     echo("Your Mobile Number must contain 10 Characters");
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
        VALUES ('".$fname."','".$lname."','".$email."','".$mobile."','".$password."','".$status."','".$uid."','2') ");
          echo("Success"); 
           
    }
}

$email = $email;
$subject = "OTP Verify";
$body = "

</head>
<body>
<div class='container'>
<h1>Verify Your Account - OTP Verification</h1>
<p>Dear ".$fname.",</p>
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



?>