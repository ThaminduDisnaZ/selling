<?php
require "../connection.php";
$type = $_POST["title"];

$banner_type_rs = Database::search("SELECT * FROM `banner_type` ");
$b_data = $banner_type_rs->fetch_assoc();


$title = $b_data["type"];
$lenght = sizeof($_FILES);
$allowed_img_extentions = array("image/jpg", "image/jpeg", "image/png", "image/svg+xml");

if ($type == "1") {


    if ($lenght <= 3 && $lenght > 0) {
        Database::iud("DELETE FROM `banner` WHERE `banner_type_id` = '" . $type . "'");
        for ($x = 0; $x < $lenght; $x++) {




            $img_file = $_FILES["i" . $x];
            $file_type  = $img_file["type"];

            if (in_array($file_type, $allowed_img_extentions)) {

                $new_img_extension;

                if ($file_type == "image/jpg") {
                    $new_img_extension = ".jpg";
                } else if ($file_type == "image/jpeg") {
                    $new_img_extension = ".jpeg";
                } else if ($file_type == "image/png") {
                    $new_img_extension = ".png";
                } else if ($file_type == "image/svg+xml") {
                    $new_img_extension = ".svg";
                }

                $file_name = "./resource/banner/" . $title . "_" . "_" . uniqid() . $new_img_extension;
                move_uploaded_file($img_file["tmp_name"], $file_name);


                Database::iud("INSERT INTO `banner`(`path`,`banner_type_id`,`b_id`)VALUES('" . $file_name . "','" . $type . "', '" . $x . "')");
            } else {
                echo ("File type not allowed!");
            }
        }
    }
}



if ($type == "2") {


    if ($lenght <= 3 && $lenght > 0) {
        Database::iud("DELETE FROM `banner` WHERE `banner_type_id` = '" . $type . "'");
        for ($x = 0; $x < $lenght; $x++) {




            $img_file = $_FILES["i" . $x];
            $file_type  = $img_file["type"];

            if (in_array($file_type, $allowed_img_extentions)) {

                $new_img_extension;

                if ($file_type == "image/jpg") {
                    $new_img_extension = ".jpg";
                } else if ($file_type == "image/jpeg") {
                    $new_img_extension = ".jpeg";
                } else if ($file_type == "image/png") {
                    $new_img_extension = ".png";
                } else if ($file_type == "image/svg+xml") {
                    $new_img_extension = ".svg";
                }

                $file_name = "./resource/banner/" . $title . "_" . "_" . uniqid() . $new_img_extension;
                move_uploaded_file($img_file["tmp_name"], $file_name);


                Database::iud("INSERT INTO `banner`(`path`,`banner_type_id`,`b_id`)VALUES('" . $file_name . "','" . $type . "', '" . $x . "')");
            } else {
                echo ("File type not allowed!");
            }
        }
    }
}

if ($type == "3") {


    if ($lenght <= 3 && $lenght > 0) {
        Database::iud("DELETE FROM `banner` WHERE `banner_type_id` = '" . $type . "'");
        for ($x = 0; $x < $lenght; $x++) {




            $img_file = $_FILES["i" . $x];
            $file_type  = $img_file["type"];

            if (in_array($file_type, $allowed_img_extentions)) {

                $new_img_extension;

                if ($file_type == "image/jpg") {
                    $new_img_extension = ".jpg";
                } else if ($file_type == "image/jpeg") {
                    $new_img_extension = ".jpeg";
                } else if ($file_type == "image/png") {
                    $new_img_extension = ".png";
                } else if ($file_type == "image/svg+xml") {
                    $new_img_extension = ".svg";
                }

                $file_name = "./resource/banner/" . $title . "_" . "_" . uniqid() . $new_img_extension;
                move_uploaded_file($img_file["tmp_name"], $file_name);


                Database::iud("INSERT INTO `banner`(`path`,`banner_type_id`,`b_id`)VALUES('" . $file_name . "','" . $type . "', '" . $x . "')");
            } else {
                echo ("File type not allowed!");
            }
        }
    }
}



if ($type == "4") {


    if ($lenght <= 3 && $lenght > 0) {
        Database::iud("DELETE FROM `banner` WHERE `banner_type_id` = '" . $type . "'");
        for ($x = 0; $x < $lenght; $x++) {




            $img_file = $_FILES["i" . $x];
            $file_type  = $img_file["type"];

            if (in_array($file_type, $allowed_img_extentions)) {

                $new_img_extension;

                if ($file_type == "image/jpg") {
                    $new_img_extension = ".jpg";
                } else if ($file_type == "image/jpeg") {
                    $new_img_extension = ".jpeg";
                } else if ($file_type == "image/png") {
                    $new_img_extension = ".png";
                } else if ($file_type == "image/svg+xml") {
                    $new_img_extension = ".svg";
                }

                $file_name = "./resource/banner/" . $title . "_" . "_" . uniqid() . $new_img_extension;
                move_uploaded_file($img_file["tmp_name"], $file_name);


                Database::iud("INSERT INTO `banner`(`path`,`banner_type_id`,`b_id`)VALUES('" . $file_name . "','" . $type . "', '" . $x . "')");
            } else {
                echo ("File type not allowed!");
            }
        }
    }
}




if ($type == "5") {


    if ($lenght <= 3 && $lenght > 0) {
        Database::iud("DELETE FROM `banner` WHERE `banner_type_id` = '" . $type . "'");
        for ($x = 0; $x < $lenght; $x++) {




            $img_file = $_FILES["i" . $x];
            $file_type  = $img_file["type"];

            if (in_array($file_type, $allowed_img_extentions)) {

                $new_img_extension;

                if ($file_type == "image/jpg") {
                    $new_img_extension = ".jpg";
                } else if ($file_type == "image/jpeg") {
                    $new_img_extension = ".jpeg";
                } else if ($file_type == "image/png") {
                    $new_img_extension = ".png";
                } else if ($file_type == "image/svg+xml") {
                    $new_img_extension = ".svg";
                }

                $file_name = "./resource/banner/" . $title . "_" . "_" . uniqid() . $new_img_extension;
                move_uploaded_file($img_file["tmp_name"], $file_name);


                Database::iud("INSERT INTO `banner`(`path`,`banner_type_id`,`b_id`)VALUES('" . $file_name . "','" . $type . "', '" . $x . "')");
            } else {
                echo ("File type not allowed!");
            }
        }
    }
}




if ($type == "6") {


    if ($lenght <= 3 && $lenght > 0) {
        Database::iud("DELETE FROM `banner` WHERE `banner_type_id` = '" . $type . "'");
        for ($x = 0; $x < $lenght; $x++) {




            $img_file = $_FILES["i" . $x];
            $file_type  = $img_file["type"];

            if (in_array($file_type, $allowed_img_extentions)) {

                $new_img_extension;

                if ($file_type == "image/jpg") {
                    $new_img_extension = ".jpg";
                } else if ($file_type == "image/jpeg") {
                    $new_img_extension = ".jpeg";
                } else if ($file_type == "image/png") {
                    $new_img_extension = ".png";
                } else if ($file_type == "image/svg+xml") {
                    $new_img_extension = ".svg";
                }
                $file_name = "./resource/banner/" . $title . "_" . "_" . uniqid() . $new_img_extension;
                move_uploaded_file($img_file["tmp_name"], $file_name);


                Database::iud("INSERT INTO `banner`(`path`,`banner_type_id`,`b_id`)VALUES('" . $file_name . "','" . $type . "', '" . $x . "')");
            } else {
                echo ("File type not allowed!");
            }
        }
    }
}
