<?php
session_start();


require "../connection.php";

$pid = $_POST["id"];



if (isset($pid)) {
   

$title = $_POST['ti'];
$stitle = $_POST['st'];
$price = $_POST['pr'];
$discount = $_POST['di'];
$desc = $_POST['de'];
$qty = $_POST['qt'];
$category = $_POST['ca'];
$brand = $_POST['br'];
$model = $_POST['mo'];
$display = $_POST['dis'];
$cpu = $_POST['cp'];
$ram = $_POST['ra'];
$gpu = $_POST['gp'];
$storage = $_POST['str'];
$size = $_POST['si'];
$pmkeyword = $_POST['pm'];
$delivery = $_POST['del'];
$dprice = $_POST['dprice'];
$warranty = $_POST['war'];


$p_rs = Database::search("SELECT * FROM `product` ");
$p_data = $p_rs->fetch_assoc();

if ($p_data["name"] != $title) {
    Database::iud("UPDATE `product` SET `name` = '".$title."' WHERE `product_id` = '".$pid."'");
    echo ("New Title :- <b>".$title ."</b> <br/>");
}
if($p_data["stitle"] != $stitle){
    Database::iud("UPDATE `product` SET `stitle` = '".$stitle."' WHERE `product_id` = '".$pid."'");
    echo ("New Subtitle :- <b>".$stitle."</b> <br/>");
}
if($p_data["price"] != $price){
    Database::iud("UPDATE `product` SET `price` = '".$price."' WHERE `product_id` = '".$pid."'");
    echo ("New Price :- <b>".$price."</b> <br/>");
}
if($p_data["discount"] != $discount){
    Database::iud("UPDATE `product` SET `discount` = '".$discount."' WHERE `product_id` = '".$pid."'");
    echo ("New Discount :- <b>".$discount."</b> <br/>");
}
if($desc != "<p><br></p>"){   
    Database::iud("UPDATE `product` SET `discription` = '".$desc."' WHERE `product_id` = '".$pid."'");
    echo ("New Description :- <b>".$desc."</b> <br/>");
}

if($p_data["qty"] != $qty){
    Database::iud("UPDATE `product` SET `qty` = '".$qty."' WHERE `product_id` = '".$pid."'");
    echo ("New Quantity :- <b>".$qty."</b> <br/>");
}
if($p_data["category_id"] != $category){
    Database::iud("UPDATE `product` SET `category_id` = '".$category."' WHERE `product_id` = '".$pid."'");
 
    echo ("New Category Updated</b> <br/>");
}
if($p_data["brand_id"] != $brand){
    Database::iud("UPDATE `product` SET `brand_id` = '".$brand."' WHERE `product_id` = '".$pid."'");
   
    echo ("New Brand Updated</b> <br/>");
}
if($p_data["model_id"] != $model){
    Database::iud("UPDATE `product` SET `model_id` = '".$model."' WHERE `product_id` = '".$pid."'");
    echo ("New Model Updated</b> <br/>");
}
if($p_data["display_id"] != $display){
    Database::iud("UPDATE `product` SET `display_id` = '".$display."' WHERE `product_id` = '".$pid."'");
    echo ("New Display Updated</b> <br/>");
}
if($p_data["cpu_id"] != $cpu){
    Database::iud("UPDATE `product` SET `cpu_id` = '".$cpu."' WHERE `product_id` = '".$pid."'");
    echo ("New CPU Updated</b> <br/>");
}
if($p_data["ram_id"] != $ram){
    Database::iud("UPDATE `product` SET `ram_id` = '".$ram."' WHERE `product_id` = '".$pid."'");
    echo ("New RAM Updated</b> <br/>");
}
if($p_data["gpu_id"] != $gpu){
    Database::iud("UPDATE `product` SET `gpu_id` = '".$gpu."' WHERE `product_id` = '".$pid."'");
    echo ("New GPU Updated</b> <br/>");
}
if($p_data["storage_id"] != $storage){
    Database::iud("UPDATE `product` SET `storage_id` = '".$storage."' WHERE `product_id` = '".$pid."'");
    echo ("New Storage Updated</b> <br/>");
}
if($p_data["size_id"] != $size){
    Database::iud("UPDATE `product` SET `size_id` = '".$size."' WHERE `product_id` = '".$pid."'");
    echo ("New Size Updated</b> <br/>");
}
if($p_data["delivery_fee"] != $delivery){
    Database::iud("UPDATE `product` SET `delivery_fee` = '".$delivery."' WHERE `product_id` = '".$pid."'");
    echo ("New Delivery Updated</b> <br/>");
}
if($p_data["dprice"] != $dprice){
    Database::iud("UPDATE `product` SET `dprice` = '".$dprice."' WHERE `product_id` = '".$pid."'");
    echo ("New Delivery Price Updated</b> <br/>");
}
if($p_data["warranty_id"] != $warranty){
    Database::iud("UPDATE `product` SET `warranty_id` = '".$warranty."' WHERE `product_id` = '".$pid."'");
    echo ("New Warranty Updated</b> <br/>");
} 


Database::iud("DELETE FROM `images` WHERE `product_id` = '".$pid."'");

$lenght = sizeof($_FILES);
$allowed_img_extentions = array("image/jpg","image/jpeg","image/png","image/svg+xml");


if($lenght<=3 && $lenght > 0){
   
    for($x = 0; $x < $lenght;$x++){
   
        if(isset($_FILES)){         


            $img_file = $_FILES["i".$x];
            $file_type  = $img_file["type"];

            if(in_array($file_type,$allowed_img_extentions)){

                $new_img_extension;

                if($file_type =="image/jpg"){
                    $new_img_extension = ".jpg";

                }else if($file_type=="image/jpeg"){
                    $new_img_extension= ".jpeg";
                }else if($file_type =="image/png"){
                    $new_img_extension = ".png";
                }else if($file_type=="image/svg+xml"){
                    $new_img_extension =".svg";
                }

                $file_name ="./resource/laptop/".$title."_".$x."_".uniqid().$new_img_extension;
                move_uploaded_file($img_file["tmp_name"],$file_name);

                
                Database::iud("INSERT INTO `images`(`code`,`product_id`)VALUES('".$file_name."','".$pid."')");
            }else {
                echo ("File type not allowed!");
            }
        }
    }

}


}else{

    echo ("Unknown Product");

}
?>