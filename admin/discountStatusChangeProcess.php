<?php

require "../connection.php";

$id = $_POST["id"];

$drs = Database::search(" SELECT * FROM `discode` WHERE `discode_id`='" . $id . "' ");
$d = $drs->fetch_assoc();


if ($d["discode_status_id"] == 1) {
    Database::iud("UPDATE`discode` SET `discode_status_id`='2'WHERE `discode_id`='" . $id . "'");
    echo("ok");
} else {
    Database::iud("UPDATE`discode` SET `discode_status_id`='1'WHERE `discode_id`='" . $id . "'");
    echo("ok");
}



?>