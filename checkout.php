<?php

session_start();
require "./connection.php";

if (isset($_SESSION["u"])) {
    $id = $_SESSION["u"]["user_id"];

    $cart_rs = Database::search("SELECT * FROM `cart` WHERE `user_id`='" . $id . "' ");
    $cart_num = $cart_rs->num_rows;

    require __DIR__ . "/vendor/autoload.php";

    $stripe_secret_key = 'sk_test_51PMVJjKomaepQbdRcPaXnfDZ7v9lqFFRxphuBAYPi1J4TQhDpntjzuNkhDYpn9XhXY0DCp8hSAp5v0O6OCO7697R00LrWlOKx0';

    \Stripe\Stripe::setApiKey($stripe_secret_key);

    $line_items = [];

    while ($cart_data = $cart_rs->fetch_assoc()) {
        $product_rs = Database::search("SELECT * FROM `product` WHERE `product_id`='" . $cart_data["product_id"] . "'");
        $product_data = $product_rs->fetch_assoc();


        $order_rs = Database::search("SELECT * FROM `orders` WHERE `user_id`='" . $id . "' ");
        $order_data = $order_rs->fetch_assoc();


        $unit_amount = isset($order_data["total"]) ? $order_data["total"] : 0;
        
        $unit_amount *=   100;
      

        $line_items[] = [
            "quantity" => $cart_data["qty"],
            "price_data" => [
                "currency" => "lkr",
                "unit_amount" => $unit_amount,
                "product_data" => [
                    "name" => $product_data["stitle"]
                ]
            ]
        ];
    }

    $checkout_session = \Stripe\Checkout\Session::create([
        "payment_method_types" => ["card"], 
        "mode" => "payment",
        "success_url" => "http://localhost/selling%20v1.5/selling/paymentSuccess.php",
        "cancel_url" => "http://localhost/index.php",
        "locale" => "auto",
        "line_items" => $line_items
    ]);
echo("success");

    http_response_code(303);
    header("Location: " . $checkout_session->url);
} else {
    echo "Error";
}
?>
