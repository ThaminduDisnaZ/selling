<?php

require "connection.php";


session_start();
$uid =   $_SESSION["u"]["user_id"];

if (isset($_SESSION["u"])) {


    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $mobile = $_POST["mobile"];
    $opw = $_POST["opw"];
    $npw = $_POST["npw"];
    $cpw = $_POST["cpw"];
    $city = $_POST["city"];
    $no = $_POST["no"];
    $street = $_POST["street"];


    if (isset($_FILES["img"])) {
        $img = $_FILES["img"];


        $allowed_image_extentions = array("image/jpg", "image/jpeg", "image/png", "image/svg+xml");
        $file_ex = $img["type"];


        echo ($file_ex);

        if (!in_array($file_ex, $allowed_image_extentions)) {
            echo ("please select a valid image");
        } else {

            $new_file_extention;


            if ($file_ex == "image/jpg") {
                $new_file_extention = ".jpg";
            } else if ($file_ex == "image/jpeg") {
                $new_file_extention = ".jpeg";
            } else if ($file_ex == "image/png") {
                $new_file_extention = ".png";
            } else if ($file_ex == "image/svg+xml") {
                $new_file_extention = ".svg";
            }


            $file_name = "resources/user-profile-images/" . $_SESSION["u"]["fname"] . "_" . uniqid() . $new_file_extention;
            move_uploaded_file($img["tmp_name"], $file_name);


            $image_rs = Database::search("SELECT* FROM `user_img` WHERE
`user_id`='" . $uid . "'");
            $image_num = $image_rs->num_rows;


            if ($image_num == 1) {
                Database::iud("UPDATE`user_img` SET `path`='" . $file_name . "'WHERE
`user_id`='" . $uid . "'");
            } else {

                Database::iud("INSERT INTO`user_img`  (`path`,`user_id`)VALUES
('" . $file_name . "','" . $uid . "')");
            }
        }
    }


    $urs = Database::search("SELECT * FROM `user` WHERE `user_id` = '" . $uid . "' ");
    $udata = $urs->fetch_assoc();

    $vpw = $cpw;



    if ($npw != "" || $cpw != "") {
        if ($udata["password"] == $opw) {
            if ($vpw == $udata["password"]) {
                echo ("You are Enterd old password... Please Enter another Password");
            } else {
                if ($npw == $cpw) {

                    if (strlen($npw) > 4) {
                        Database::iud("UPDATE`user` SET `password`='" . $npw . "'WHERE
                    `user_id`='" . $uid . "'");
                    } else {
                        echo ("Your Password must contain 5 - 45 Characters");
                    }
                } else {
                    echo ("Don't match password");
                }
            }
        } else {
            echo ("Please Enter Correct old Password");
        }
    }




    Database::iud("UPDATE `user` SET`fname`='" . $fname . "',`lname`='" . $lname . "',`mobile`='" . $mobile . "',`no`='" . $no . "',`street`='" . $street . "'
 WHERE`user_id`='" . $uid . "'");


    $cityrs = Database::search("SELECT*FROM `city`WHERE
 `city_id`='" . $_SESSION["u"]["city_id"] . "'");
    $citynum = $cityrs->num_rows;


    if ($citynum == 1) {


        Database::iud("UPDATE`user`SET`city_id`='" . $city . "' WHERE `user_id`='" . $uid . "'");
    } else {
        Database::iud("INSERT INTO `user`
    (`city_id`)VALUES
    ('" . $city . "')WHERE `user_id`='" . $uid . "'");
    }


    echo ("success");
} else {
    echo ("Please login first");
}
