<?php
session_start();
include "connection.php";

$email = $_POST["e"];
$password = $_POST["p"];
$rememberme = $_POST["r"];

// echo($username);


if (empty($email)) {
   echo("Please Enter Your Email");
} else if(empty($email)){
    echo("Please Enter Your Password");
}else {
   $rs = Database::search("SELECT * FROM `user` WHERE `email` = '".$email."' AND `password` = '".$password."' ");
    $num = $rs->num_rows;
    $d = $rs->fetch_assoc();


if ($num == 1) {
    
    if ($d["status_id"] == 1) {
       
        echo("Success");
$_SESSION["u"] = $d;

if ($rememberme == "true") {
    
    setcookie("username1" , $email, time()+(60 * 60 * 24 * 365));
    setcookie("password1" , $password, time()+(60 * 60 * 24 * 365));


} else {
 
    setcookie("username" ,"", -1);
    setcookie("password" ,"", -1);
}



    } else {
        echo("You Are Blocked.....!");
    }
    


}else{
    echo("Invalid Email or Password");
}



}


?>