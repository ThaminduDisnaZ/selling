<?php

require "../connection.php";


$pid = $_POST["pid"];

$prs = Database::search("SELECT * FROM `product` WHERE `product_id` = '".$pid."' ");
$pdata = $prs->fetch_assoc();

if ($pdata["bestsell_id"] == 2) {
    Database::iud("UPDATE`product` SET `bestsell_id`='1'WHERE `product_id`='" . $pid . "'");
    echo("ok");
}else {
    Database::iud("UPDATE`product` SET `bestsell_id`='2'WHERE `product_id`='" . $pid . "'");
    echo("ok");

}


?>