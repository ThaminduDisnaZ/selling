<?php
include "../connection.php";
$uid = $_POST["uid"];

$rs = Database::search("SELECT * FROM `user` WHERE `user_id` = '".$uid."'  ");
$num = $rs->num_rows;

if ($num == 1) {
    $d = $rs->fetch_assoc();

    if ($d["status_id"] == 1) {
        Database::iud("UPDATE `user` SET `status_id` = '2' WHERE `user_id` = '".$uid."' ");
       echo("block");
    }

    
    if ($d["status_id"] == 2) {
        Database::iud("UPDATE `user` SET `status_id` = '1' WHERE `user_id` = '".$uid."' ");
        echo("Active");
    }


}

?>