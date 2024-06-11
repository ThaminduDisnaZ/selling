<?php
session_start();
include "../connection.php";
$username = $_POST["u"];
$password = $_POST["p"];
$otp = $_POST["otp"];
if (empty($username)) {
   echo ("Please Enter Your Email");   
}else if(empty($password)){
   echo ("Please Enter Your Password");
}else if(empty($otp)){
   echo ("Please Enter OTP");
} else {   
$rs = Database::search("SELECT * FROM `admin`
 WHERE `email` = '". $username ."' 
 AND `password` = '". $password ."' 
 AND `otp` = '". $otp ."' " );
$num = $rs->num_rows;
if($num == 1){
   $d = $rs->fetch_assoc();
   echo ("Success");
$_SESSION["a"] = $d ;
}else{    
   echo ("Invalid Admin Details");
}   
}
?>