<?php

require "connection.php";

if(isset($_GET["id"])){

    $wid = $_GET["id"];

    $watch_rs = Database::search("SELECT * FROM `watchlist` WHERE `watchlist_id`='".$wid."'");
    $watch_data = $watch_rs->fetch_assoc();

    $user = $watch_data["user_id"];
    $product = $watch_data["product_id"];


    Database::iud("DELETE FROM `watchlist` WHERE `watchlist_id`='".$wid."'");

    echo ("success");

}else{
    echo ("Something went wrong");
}

?>