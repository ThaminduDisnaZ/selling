<?php

require "./connection.php";
session_start();


$total = $_POST["total"];

$code = $_POST["code"];




$d = new DateTime();
$tz = new DateTimeZone("Asia/Colombo");
$d->setTimezone($tz);
$date = $d->format("Y-m-d H:i:s");

if (isset($_SESSION["u"])) {
    $id = $_SESSION["u"]["user_id"];


    $urs = Database::search("SELECT * FROM `user` WHERE `user_id` = '" . $id . "' ");
    $udata = $urs->fetch_assoc();

    if ($udata["uev_id"] != 1) {
        echo ("uev");
    } else if ($udata["city_id"] == "" || $udata["street"] == "" || $udata["no"] == "") {
        echo ("ua");
    } else {

        $cart_rs = Database::search("SELECT * FROM `cart` WHERE `user_id`='" . $id . "' ");
        $cart_num = $cart_rs->num_rows;

        for ($x = 0; $x < $cart_num; $x++) {
            $cart_data = $cart_rs->fetch_assoc();

            $product_rs = Database::search("SELECT * FROM `product` WHERE `product_id`='" . $cart_data["product_id"] . "'");
            $product_data = $product_rs->fetch_assoc();



            $data_rs = Database::search("SELECT * FROM `user`  WHERE `user_id`='" . $id . "' ");

            $address_data = $data_rs->fetch_assoc();

            $ship = $product_data["delivery_fee"];

            $image_rs = Database::search("SELECT * FROM `images` WHERE `product_id`='" . $product_data["product_id"] . "'");
            $image_data = $image_rs->fetch_assoc();

            $order_total = $total;


            $drs = Database::search(" SELECT * FROM `discode` WHERE `code` = '" . $code . "' ");
            $ddata = $drs->fetch_assoc();
            $pid = $product_data["product_id"];

            $dnr = $drs->num_rows;





            if ($dnr == 1) {
                $codeid = $ddata["discode_id"];
                Database::iud("INSERT INTO `orders` (`user_id`,`date`,`payment_status_id`, `product_id`,`total`,`discode_id`) VALUES 
    ('" . $id . "','" . $date . "','2' ,'" . $pid . "','" . $total . "' ,'" . $codeid . "' ) ");
            }
          
        }


        echo ("success");
    }
} else {
    echo ("sww");
}
