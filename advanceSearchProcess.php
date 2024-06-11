<?php

require "./connection.php";

$ca = $_POST["ca"];
$br = $_POST["br"];
$cp = $_POST["cp"];
$di = $_POST["di"];
$gp = $_POST["gp"];
$ra = $_POST["ra"];
$mo = $_POST["mo"];

?>
<?php
$q = "SELECT * 
FROM product
INNER JOIN brand ON product.brand_id = brand.brand_id
INNER JOIN ram ON product.ram_id = ram.ram_id
INNER JOIN category ON product.category_id = category.category_id
INNER JOIN cpu ON product.cpu_id = cpu.cpu_id
INNER JOIN display ON product.display_id = display.display_id
INNER JOIN gpu ON product.gpu_id = gpu.gpu_id
INNER JOIN model ON product.model_id = model.model_id
WHERE product.produt_status_id = '1'";
if ($ca != 0) {
    $q .= " AND product.category_id='" . $ca . "'";
}

if ($br != 0) {
    $q .= " AND product.brand_id='" . $br . "'";
}
if ($cp != 0) {
    $q .= " AND product.cpu_id='" . $cp . "'";
}
if ($di != 0) {
    $q .= " AND product.display_id='" . $di . "'";
}
if ($gp != 0) {
    $q .= " AND product.gpu_id='" . $gp . "'";
}
if ($ra != 0) {
    $q .= " AND product.ram_id='" . $ra . "'";
}
if ($mo != 0) {
    $q .= " AND product.model_id='" . $mo . "'";
}
$ru_q = Database::search($q);
$ru_num = $ru_q->num_rows;
if ($ru_num > 0) {
   for ($x = 0; $x < $ru_num; $x++) {
        $ru_data = $ru_q->fetch_assoc();
$image_rs= Database::search("SELECT*FROM `images
`WHERE
 `product_id`='".$ru_data["product_id"]."'");
   $image_data=$image_rs->fetch_assoc();
?>
<div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4">
    <div class="product__item white-bg mb-30">
        <div class="product__thumb p-relative">
            <a href="<?php echo "singleProductView.php?id=" .
             $ru_data["product_id"]; ?>" class="w-img">
                <img src="admin/<?php echo $image_data["code"];?>
                " alt="product">
                
            </a>
            <div class="product__action p-absolute">
                <ul>
                    <li><a href="#" title="Add to Wishlist">
                        <i class="fal fa-heart"></i></a></li>
                    <li><a href="#" title="Quick View" data-bs-toggle="modal"
                     data-bs-target="#productModalId"><i
                                class="fal fa-search"></i></a></li>
                
                </ul>
            </div>
        </div>
        <div class="product__content text-center">
        <span class="price"><?php echo $ru_data["name"];?>
            <h6 class="product-name">
                <a class="product-item-link" href="<?php echo 
                "singleProductView.php?id=" . $ru_data["product_id"]; ?>">
                #<?php echo $ru_data["stitle"];?> </a>
            </h6>
          
<?php
if ($ru_data["qty"] > 0) {
?>
<p class="text-success"><?php echo $ru_data["qty"] ?> In Stock</p>
<?php
} else {
?>
<p class="text-danger">Out of Stock</p>
<?php
}
?>

<?php
if ($ru_data["discount"] > 0) {
?>
<p>
    <span class="price ">Rs.<s>
            <?php echo $ru_data["price"];?>.00</s></span>
</p>
<span class="price">Rs.<?php echo $ru_data["dprice"];?>.00</span>
<?php
}else {
?>
<br>
<span class="price">Rs.<?php echo $ru_data["price"];?>.00</span>

<?php
}
?>

</div>
<div class="product__add-btn">
<button type="button"
onclick="addToCart(<?php echo $ru_data['product_id']; ?>);">Add to
Cart</button>
</div>
    </div>
</div>

<?php
    }

} else {
   ?>
    <section class="error__area pt-60 pb-100">
                <div class="container">
                    <div class="col-xl-8 offset-xl-2 col-lg-8 offset-lg-2">
                        <div class="error__content text-center">
                            <div class="error__number">         
                            </div>
                            <span>not found</span>
                            <h2>Product NOT FOUND</h2>
                            <p>Search Another Key Word</p>                           
                        </div>
                    </div>
                </div>
            </section>
   <?php
}


?>