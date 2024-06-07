<?php

require "./connection.php";

$email = $_POST["email"];

$otpr = Database::search("SELECT * FROM `user` WHERE `email` = '" . $email . "' ");
$otpdata = $otpr->fetch_assoc();


?>




<center>
    <br>
    <h6>Hi, Dear <?php echo ($otpdata["fname"]); ?>.. Please Set New Password</h6>
    <input type="text" class="form-control m-100 d-block" id="npw" placeholder="Enter Your New Password" >
    <br>
    <input type="text" class="form-control m-100 d-block" id="cnpw" placeholder="Confirm Your New Password" >
</center>