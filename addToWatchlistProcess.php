<?php


session_start();
require "connection.php";


if(isset($_SESSION["u"])){

    if(isset($_GET["id"])){


        
        $uid = $_SESSION["u"]["user_id"];
        $pid = $_GET["id"];

      echo($pid);

        $watchlist_rs = Database::search("SELECT*FROM `watchlist`WHERE `product_id`='".$pid."'AND `user_id`='".$uid."'");
        $list_num =$watchlist_rs->num_rows;

        $product_rs = Database::search("SELECT*FROM `product` WHERE`product_id`='".$pid."'");
        $product_data = $product_rs->fetch_assoc();
        $product_qty = $product_data["qty"];


        if( $list_num > 1){

          echo("already added to watchlist");
        }else{
             Database::iud("INSERT INTO `watchlist`(`product_id`,`user_id`)VALUES ('".$pid."','".$uid."')");
             echo ("Product added successfully"); 
        }

    }else{
        echo("Something Went Wrong");
    }

}else{
    echo ("Please Sign In or Register.");
}

?>