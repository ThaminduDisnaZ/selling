<?php
require "../connection.php";

$oid = $_POST["oid"];
$s1 = $_POST["s1"];
$s2 = $_POST["s2"];
$s3 = $_POST["s3"];
$s4 = $_POST["s4"];
$s5 = $_POST["s5"];

$rs = Database::search(" SELECT * FROM `delivery` WHERE `order_id` = '".$oid."' ") ;
$data = $rs->fetch_assoc();
$num = $rs->num_rows;




if ($num == 1) {
   


    if ($s1 == "true") {

        Database::iud("UPDATE `delivery` SET `delivery_status_id` = '1' WHERE `order_id` = '".$oid."'");
    }
    if ($s2 == "true") {

        Database::iud("UPDATE `delivery` SET `delivery_status_id` = '2' WHERE `order_id` = '".$oid."'");
    }
    if ($s3 == "true") {

        Database::iud("UPDATE `delivery` SET `delivery_status_id` = '3' WHERE `order_id` = '".$oid."'");
    }
    if ($s4 == "true") {

        Database::iud("UPDATE `delivery` SET `delivery_status_id` = '4' WHERE `order_id` = '".$oid."'");
    }
    if ($s5 == "true") {

        Database::iud("UPDATE `delivery` SET `delivery_status_id` = '5' WHERE `order_id` = '".$oid."'");
    }


} else {
    if ($s1 == "true") {

        Database::iud(" INSERT INTO `delivery` (`delivery_status_id`,`order_id`) VALUES ('1','".$oid."') ");  
    }
    if ($s2 == "true") {

        Database::iud(" INSERT INTO `delivery` (`delivery_status_id`,`order_id`) VALUES ('2','".$oid."') ");  
    }
    if ($s3 == "true") {

        Database::iud(" INSERT INTO `delivery` (`delivery_status_id`,`order_id`) VALUES ('3','".$oid."') ");  
    }
    if ($s4 == "true") {

        Database::iud(" INSERT INTO `delivery` (`delivery_status_id`,`order_id`) VALUES ('4','".$oid."') ");  
    }
    if ($s5 == "true") {

        Database::iud(" INSERT INTO `delivery` (`delivery_status_id`,`order_id`) VALUES ('5','".$oid."') ");  
    }
    
}






?>