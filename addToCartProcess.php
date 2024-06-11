<?php

session_start();
require "connection.php";
if(isset($_SESSION["u"])){
   if(isset($_GET["id"])){
       $qty = $_POST['qty'];
       $email = $_SESSION["u"]["user_id"];
        $pid = $_GET["id"];
       $cart_rs = Database::search("SELECT*FROM 
       `cart`WHERE `product_id`='".$pid."'
       AND `user_id`='".$email."'");
        $cart_num =$cart_rs->num_rows;
     $product_rs = Database::search("SELECT*FROM
      `product` WHERE`product_id`='".$pid."'");
        $product_data = $product_rs->fetch_assoc();
        $product_qty = $product_data["qty"];
    if($cart_num ==1){
     $cart_data = $cart_rs->fetch_assoc();
            $current_qty =$cart_data["qty"];
            $new_qty = (int)$current_qty+1;
            if($product_qty>=$new_qty){
               Database::iud("UPDATE `cart`SET
               `qty`='".$qty + $new_qty."'WHERE
                `product_id`='".$pid."' AND
                 `user_id`='".$email."'");
               echo ("Product added successfully"); 
            }else if($product_qty < $qty){
                echo("Sorry..! Please Select 0 -
                 ".$product_qty." Quantity" );
            }else{
                echo("iq");
            }
        }else{
             Database::iud("INSERT INTO
              `cart`(`product_id`,`user_id`,`qty`)
              VALUES ('".$pid."','".$email."','".$qty."')");
             echo ("Product added successfully"); 
        }
    }else{
        echo("Something Went Wrong");
    }
}else{
    echo ("Please Sign In or Register.");
}
?>