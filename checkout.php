<?php

session_start();
require "./connection.php";

if (isset($_SESSION["u"])) {
    $id = $_SESSION["u"]["user_id"];

    $udat=Database::search("SELECT * FROM `user` WHERE `user_id` = '".$id."' ");
    $udata = $udat->fetch_assoc();

    $cart_rs = Database::search("SELECT * FROM `cart` WHERE `user_id`='" . $id . "' ");
    $cart_num = $cart_rs->num_rows;

    $ors = Database::search(" SELECT * FROM `orders` WHERE `user_id` = '".$id."' ");
    $odata = $ors->fetch_assoc();

    $disrs = Database::search(" SELECT * FROM `discode` WHERE `discode_id` = '".$odata["discode_id"]."' ");
    $ddata = $disrs->fetch_assoc();

    require __DIR__ . "/vendor/autoload.php";

    $stripe_secret_key = 'sk_test_51PMVJjKomaepQbdRcPaXnfDZ7v9lqFFRxphuBAYPi1J4TQhDpntjzuNkhDYpn9XhXY0DCp8hSAp5v0O6OCO7697R00LrWlOKx0';

    \Stripe\Stripe::setApiKey($stripe_secret_key);

    $line_items = [];
  
    $discount_percentage = 0; 
        $discount_percentage = $ddata["dis"]; 
  




    $product1_rs = Database::search("SELECT * FROM `orders` WHERE `user_id` = '" . $id. "' AND  `product_id` = '".  $odata["product_id"]."'");

    $product1_data = $product1_rs->fetch_assoc();
    

    $total_price = $product1_data["total"] * 100;




  
    $line_items[] = [
        "quantity" => 1,
        "price_data" => [
            "currency" => "lkr",
            "unit_amount" => $total_price,
            "product_data" => [
                "name" => "Total Price" 
            ]
        ]
    ];

   
    $checkout_session = \Stripe\Checkout\Session::create([
        "payment_method_types" => ["card"], 
        "mode" => "payment",
        "success_url" => "http://localhost/selling/paymentSuccess.php",
        "cancel_url" => "http://localhost/index.php",
        "locale" => "auto",
        "line_items" => $line_items
    ]);


    session_start();
    $_SESSION["checkout"] = $udata;

    echo("success");
    $subject = "Your Item is Placed";
    $body = '<p style="text-align: center;"><strong>Product is Placed..</strong></p>
<p style="text-align: center;"><strong><img src="https://telegra.ph/file/14d1ee5212d0be6ea808b.png" alt="" width="443" height="110" /></strong></p>
<p style="text-align: center;"><strong>&nbsp;</strong></p>
<p style="text-align: center;">&nbsp;Hello '.$udata["fname"].' ,&nbsp;<br /><br /><span style="color: #00ff00;"><strong>Your Product has been Places Successfull</strong></span></p>';
    $email = $udata["email"];





    require  "./admin/mailler.php";
   
    http_response_code(303);
    header("Location: " . $checkout_session->url);
} else {
    echo "Error";
}
?>
