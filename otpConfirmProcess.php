<?php
require "./connection.php";
$email = $_POST["pw"];
$uid = uniqid();


$otpr = Database::search("SELECT `otp` FROM `user` WHERE `email` = '".$email."' ");

$otp_data = $otpr->fetch_assoc();

Database::iud("UPDATE `user` SET `otp` = '".$uid."' WHERE `email` = '".$email."'");
echo("ok");

$subject = "OTP Verify";
$body = "
</head>
<body>
<center>
<div class='container'>
<h1>Confirm Your Account - Forgot Password</h1>

<p>Thank you for registering with Net Pixel! To ensure the security of your account, we need to verify your email address.</p>
<p>Please use the following one-time password (OTP) to complete your forgot password process:</p>
<div class='otp-code'><h3><b>". $uid ."</b></h3></div>
<p>If you did not request this OTP, please disregard this email.</p>
<p>Thank you for choosing Net Pixel! If you have any questions or need assistance, please don't hesitate to contact our support team at [Your Support Email Address].</p>
<p class='footer-text'>Best regards,<br>Thamindu Disna<br>Net Pixel<br></p>
</div>
</center>
</body>
";



$altbody = "Net Pixel";



require "admin/mailler.php";

?>