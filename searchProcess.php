



<?php

require "connection.php";

$txt = $_POST["si"];
$select = $_POST["sc"];

$query = "SELECT * FROM `product`";



if(!empty($txt) && $select == 0)
{

   $query .= " WHERE `stitle` LIKE '%".$txt."%'"; 

}else if(empty($txt) && $select != 0)
{

   $query .= " WHERE `category_id`='".$select."'";
   
}else if(!empty($txt) && $select != 0)
{

   $query .= " WHERE `stitle` LIKE '%".$txt."%' AND `category_id`='".$select."'";

}


$product_rs = Database::search($query);
$product_num = $product_rs->num_rows;


if ($product_num == "0") {
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




for ($x = 0; $x < $product_num; $x++) {




  $product_data=$product_rs->fetch_assoc();

  

   $image_rs= Database::search("SELECT*FROM `images`WHERE `product_id`='".$product_data["product_id"]."'");
   $image_data=$image_rs->fetch_assoc();



?>
<div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4">
    <div class="product__item white-bg mb-30">
        <div class="product__thumb p-relative">
            <a href="<?php echo "singleProductView.php?id=" . $product_data["product_id"]; ?>" class="w-img">
                <img src="admin/<?php echo $image_data["code"];?>" alt="product">
                
            </a>
            <div class="product__action p-absolute">
                <ul>
                    <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                    <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i
                                class="fal fa-search"></i></a></li>
                
                </ul>
            </div>
        </div>
        <div class="product__content text-center">
        <span class="price"><?php echo $product_data["name"];?>
            <h6 class="product-name">
                <a class="product-item-link" href="<?php echo "singleProductView.php?id=" . $product_data["product_id"]; ?>">
                #<?php echo $product_data["stitle"];?> </a>
            </h6>
          

<?php

if ($product_data["qty"] > 0) {
?>

<p class="text-success"><?php echo $product_data["qty"] ?> In Stock</p>

<?php
} else {
?>
<p class="text-danger">Out of Stock</p>
<?php
}



?>


<?php
if ($product_data["discount"] > 0) {
?>
<p>
    <span class="price ">Rs.<s>
            <?php echo $product_data["price"];?>.00</s></span>
</p>
<span class="price">Rs.<?php echo $product_data["dprice"];?>.00</span>
<?php
}else {
?>
<br>
<span class="price">Rs.<?php echo $product_data["price"];?>.00</span>

<?php
}
?>

</div>
<div class="product__add-btn">
<button type="button"
onclick="addToCart(<?php echo $product_data['product_id']; ?>);">Add to
Cart</button>
</div>
    </div>
</div>

<?php
}
?>