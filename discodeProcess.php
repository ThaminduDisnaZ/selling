<?php

require "./connection.php";

$code = $_POST["code"];
$total = $_POST["total"];

$dcode_rs = Database::search("SELECT * FROM `discode` WHERE `code` = '".$code."' ");
$discode = $dcode_rs->fetch_assoc();
$disrnum = $dcode_rs->num_rows;

if ($code == "") {
   
    echo("ec");

}elseif($disrnum == 0){

    echo("wc");

} else if ($code == $discode["code"]) {
   
    $ftotal = $total * $discode["dis"] / 100;

    echo($ftotal);
    
}else{
    echo("sww");
}



?>