<?php 

require "../connection.php";

$code = $_POST["code"];
$num = $_POST["num"];

Database::iud("INSERT INTO discode (dis, code, discode_status_id) VALUES ('$num', '$code', '1')");

?>