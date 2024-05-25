<?php
session_start();
include "../connection.php";

$username = $_POST["u"];
$password = $_POST["p"];

if (empty($username)) {

   echo ("Please Enter Your Email");
   
}else if(empty($password)){

   echo ("Please Enter Your Password");
} else {
   
$rs = Database::search("SELECT * FROM `admin` WHERE `email` = '". $username ."' AND `password` = '". $password ."'" );
$num = $rs->num_rows;

if($num == 1){
   $d = $rs->fetch_assoc();

   echo ("Success");

$_SESSION["a"] = $d ;

}else{
    
   echo ("Invalid Username Or Password");
}

   
}



?>