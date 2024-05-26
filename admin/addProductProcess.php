<?php
require "../connection.php";

session_start();

$email =$_SESSION["a"]["email"];


$title = $_POST["ti"];
$stitle = $_POST["st"];
$price = $_POST["pr"];
$discount = $_POST["di"];
$desc = $_POST["de"];
$qty = $_POST["qt"];
$category = $_POST["ca"];
$brand = $_POST["br"];
$model = $_POST["mo"];
$display = $_POST["dis"];
$cpu = $_POST["cp"];
$ram = $_POST["ra"];
$gpu = $_POST["gp"];
$storage = $_POST["str"];
$size = $_POST["si"];
$pmkeyword = $_POST["pm"];
$delivery = $_POST["di"];


if (empty($title)) {
    echo ("Please Enter Product Title");
}else if (empty($stitle)) {
    echo ("Please Enter Product Sub-Title");
}else if (empty($delivery)) {
    echo ("Please Enter Delivery Price");
}else if (empty($price)) {
    echo ("Please Enter Product Price");
}else if ($desc < 20) {
    echo ("Please Enter Description more than character length 20");
}else if (empty($qty)) {
    echo ("Please Enter Product Qty");
}else if ($category == "status") {
    echo ("Please Select Caregory");
}else if ($brand == "status") {
    echo ("Please Select Brand");
}else if ($model == "status") {
    echo ("Please Select Model");
}else if ($display == "status") {
    echo ("Please Select Display");
}else if ($cpu == "status") {
    echo ("Please Select CPU");
}else if ($ram == "status") {
    echo ("Please Select RAM");
}else if ($gpu == "status") {
    echo ("Please Select GPU");
}else if ($storage == "status") {
    echo ("Please Select Storage");
}else if ($size == "status") {
    echo ("Please Select Size");
}else {

    $d = new DateTime();
    $tz = new DateTimeZone("Asia/Colombo");
    $d->setTimezone($tz);
    $date = $d->format("Y-m-d H:i:s");

    $status = 1;
    $new_or_old_id = 1;


    Database::iud("INSERT INTO `product`
    (`name`,`stitle`,`qty`,`price`,`discription`,`date`,`delivery_fee`,`display_id`,
    `brand_id`,`cpu_id`,`ram_id`,`gpu_id`,`storage_id`,`produt_status_id`,`model_id`,`category_id`,`size_id`) VALUES 
    ('".$title."','".$stitle."','".$qty."','".$price."','".$desc."','".$date."','".$delivery."','".$display."',
    '".$brand."','".$cpu."','".$ram."','".$gpu."','".$storage."','".$status."','".$model."','".$category."','".$size."')");



    $product_id = Database::$connection->insert_id;

    $length = sizeof($_FILES);




    if($length <= 3 && $length > 0){

        $allowed_img_extentions = array ("image/jpg","image/jpeg","image/png","image/svg+xml");

        for($x = 0; $x < $length;$x++){
            if(isset($_FILES["image".$x])){

                $img_file = $_FILES["image".$x];
                $file_extention = $img_file["type"];

                if(in_array($file_extention,$allowed_img_extentions)){

                    $new_img_extention;

                    if($file_extention == "image/jpg"){
                        $new_img_extention = ".jpg";
                    }else if($file_extention == "image/jpeg"){
                        $new_img_extention = ".jpeg";
                    }else if($file_extention == "image/png"){
                        $new_img_extention = ".png";
                    }else if($file_extention == "image/svg+xml"){
                        $new_img_extention = ".svg";
                    }

                    $file_name = "resource/laptop/".$title."".$x."".uniqid().$new_img_extention;
                    move_uploaded_file($img_file["tmp_name"],$file_name);

                    Database::iud("INSERT INTO `images`(`code`,`product_id`) VALUES ('".$file_name."','".$product_id."')");

                }else{
                    echo ("Invalid Image type");
                }

            }
        }

        echo ("Success");

    }else{
        echo ("Invalid image count");
    }




}




// else if () {
    
// }
?>