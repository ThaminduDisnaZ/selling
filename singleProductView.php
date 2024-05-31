<?php
require "connection.php";




if (isset($_GET["id"])  ) {

    $pid = $_GET["id"];



    $product_rs = Database::search("SELECT product.name, product.stitle, product.qty, product.price,
    product.discount,product.dprice, product.discription, product.date, product.delivery_fee,
    product.display_id, product.brand_id, product.cpu_id, product.ram_id, product.gpu_id, product.storage_id,
    product.produt_status_id, product.model_id, product.category_id, product.size_id, product.warranty_id,
    model.model AS model, brand.brand AS brand FROM `product`
    LEFT JOIN model ON product.model_id = model.model
    LEFT JOIN brand ON product.brand_id = brand.brand
    WHERE product.product_id='" . $pid . "'");


    $product_num = $product_rs->num_rows;

    if ($product_num == 1) {

        $product_data = $product_rs->fetch_assoc();
        // echo ($product_data["title"]);
   



    ?>


<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $product_data["name"]; ?> | Net Pixel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/preloader.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/backToTop.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/fontAwesome5Pro.css">
    <link rel="stylesheet" href="assets/css/ui-range-slider.css">
    <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- Add your site or application content here -->

    <!-- preloader area start -->
    <!-- <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div id="object"></div>
                </div>
            </div>
        </div> -->
    <!-- preloader area end -->

    <!-- back to top start -->
    <!-- <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div> -->
    <!-- back to top end -->

    <?php
        
        include "heder.php";
        
        ?>

    <!-- offcanvas area start -->
    <div class="offcanvas__area">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__close">
                <button class="offcanvas__close-btn" id="offcanvas__close-btn">
                    <i class="fal fa-times"></i>
                </button>
            </div>
            <div class="offcanvas__content">
                <div class="offcanvas__logo mb-40">
                    <a href="index.html">
                        <img src="assets/img/logo/logo-black.png" alt="logo">
                    </a>
                </div>
                <div class="offcanvas__search mb-25">
                    <form action="#">
                        <input type="text" placeholder="What are you searching for?">
                        <button type="submit"><i class="far fa-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-2 fix"></div>
                <div class="offcanvas__action">

                </div>
            </div>
        </div>
    </div>
    <!-- offcanvas area end -->
    <div class="body-overlay"></div>
    <!-- offcanvas area end -->

    <main>

        <!-- breadcrumb area start -->
        <section class="breadcrumb__area box-plr-75">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__wrapper">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Product Details ->
                                        <?php echo $product_data["name"]; ?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- product area start -->
        <section class="product__area box-plr-75 pb-70">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xxl-5 col-xl-5 col-lg-5">
                        <div class="product__details-nav d-sm-flex align-items-start">
                            <ul class="nav nav-tabs flex-sm-column justify-content-between mr-20" id="productThumbTab"
                                role="tablist">



                                <?php

                        $image_rs = Database::search("SELECT * FROM `images` WHERE `product_id`='" . $pid . "'");
                        $image_num = $image_rs->num_rows;
                        $img = array();

                        if ($image_num != 0) {

                         

                            for ($x = 0; $x < $image_num; $x++) {
                                if ($x == 0) {
                                    $thumb = "thumbOne";                                    
                                }
                                if ($x == 1) {
                                    $thumb = "thumbTwo";
                                }
                                if ($x == 2) {
                                    $thumb = "thumbThree";
                                }

                           
                           
                                if ($thumb == "thumbOne") {
                                    $aria = "true";
                                    $class = "active";

                                } else {
                                    $aria = "false";
                                    $class = "";
                                }

                                if ($thumb == "thumbTwo") {
                                    $aria = "true";
                                    $class = "active";

                                } else {
                                    $aria = "false";
                                    $class = "";
                                }

                                if ($thumb == "thumbThree") {
                                    $aria = "true";
                                    $class = "active";

                                } else {
                                    $aria = "false";
                                    $class = "";
                                }
                                
                                

                            

                                $image_data = $image_rs->fetch_assoc();
                                $img[$x] = $image_data["code"];
                           

                        ?>



                                <li class="nav-item" role="presentation">
                                    <button class="m-3 nav-link border-bottom border-warning <?php echo($class); ?>"
                                        id="<?php echo($thumb); ?>-tab" data-bs-toggle="tab"
                                        data-bs-target="#<?php echo($thumb); ?>" type="button" role="tab"
                                        aria-controls="thumbOne" aria-selected="<?php echo($aria); ?>">
                                        <img src="admin/<?php echo $img["$x"]; ?>" alt="">
                                    </button>
                                </li>



                                <?php
                            }
                        } else {
                            ?>


                                <?php
                        }
                        ?>








                            </ul>
                            <div class="product__details-thumb">
                                <div class="tab-content" id="productThumbContent">

                                    <?php

for ($x = 0; $x < $image_num; $x++) {
    if ($x == 0) {
        $thumb = "thumbOne";                                    
    }
    if ($x == 1) {
        $thumb = "thumbTwo";
    }
    if ($x == 2) {
        $thumb = "thumbThree";
    }

    if ($thumb == "thumbOne") {

 
        $class2 = "show active";

    } else {
    
        $class2 = "";
    }
    if ($thumb == "thumbTwo") {

 
        $class2 = "show active";

    } else {
    
        $class2 = "";
    }
    if ($thumb == "thumbThree") {

 
        $class2 = "fade show active";

    } else {
    
        $class2 = "";
    }



?>



                                    <div class="tab-pane fade<?php echo($class2); ?>" id="<?php echo($thumb); ?>"
                                        role="tabpanel" aria-labelledby="<?php echo($thumb); ?>-tab">
                                        <div class="product__details-nav-thumb">
                                            <img src="admin/<?php echo $img["$x"]; ?>" alt="">
                                        </div>
                                    </div>



                                    <?php


}

?>



                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-7 col-xl-7 col-lg-7">
                        <div class="product__details-wrapper">
                            <div class="product__details">
                                <h3 class="product__details-title">
                                    <a href="product-details.html"><?php echo($product_data["name"]); ?></a>
                                </h3>
                                <div class="product__review d-sm-flex">
                                    <!-- <div class="rating rating__shop mb-15 mr-35">
                                        <ul>
                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        </ul>
                                    </div> -->
                                    <!-- <div class="product__add-review mb-15">
                                        <span><a href="#">1 Review</a></span>
                                        <span><a href="#">Add Review</a></span>
                                    </div> -->
                                </div>
                                <div class="product__price">

                                <?php
                                if ($product_data["discount"] > 0) {
                                    ?>
                                     <span class="new">Rs.<?php echo ($product_data["dprice"])  ?>.00</span>
                                    <span class="old">Rs.<?php echo ($product_data["price"])  ?>.00</span>
                                    <?php
                                } else {
                                  ?> <span class="new">Rs.<?php echo ($product_data["price"])  ?>.00</span><?php
                                }
                                
                                ?>


                                  
                                </div>
                                <div class="product__stock">
                                    <span>Availability :</span>

                                    <?php 
                                    
                                    if ($product_data["qty"] > 0 ) {
                                       ?> <span class="text-success">In Stock</span> <?php
                                    } else {
                                        ?> <span class="text-danger">Out Of Stock</span> <?php
                                    }
                                    
                                    
                                    ?>



                                </div>
                                <div class="product__stock sku mb-30">
                                    <span>SKU:</span>
                                    <span><a href="#"><?php echo($product_data["stitle"]); ?></a></span>
                                </div>
                                <div class="product__details-des mb-30">

                                    <p></p>

                                    <div class="product__details-stock">
                                        <h3>
                                            
                                        
                                        
                                        <?php 
                                        
                                        if ($product_data["qty"] > 0) {
                                            ?> <span>Hurry Up!</span> Only <?php echo($product_data["qty"]); ?> products
                                            left in stock.</h3><?php
                                        } else {
                                           ?>  <span>How Sad</span> This Laptop is Sold out</h3><?php
                                        }
                                        

                                        ?>
                                        
                                       
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                aria-valuemax="100" data-width="100%"></div>
                                        </div>
                                    </div>
                                    <div class="product__details-quantity mb-20">
                                    
                                            <div class="pro-quan-area d-lg-flex align-items-center">
                                                <div class="product-quantity mr-20 mb-25">
                                                    <div class="cart-plus-minus p-relative"><input id="pqty" type="text"
                                                            value="1" />
                                                    </div>
                                                </div>
                                                <div class=" mb-25">
                                                
                                                    <button class="t-y-btn" onclick="addToCart(<?php echo ($pid) ?>);">Add to cart</button>
                                                </div>
                                            </div>
                                  
                                    </div>
                                    <div class="product__details-action">
                                        <ul>
                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a>
                                            </li>
                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                            <li><a href="#" title="Print"><i class="fal fa-print"></i></a></li>
                                            <li><a href="#" title="Print"><i class="fal fa-share-alt"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="product__details-des-tab mb-40 mt-110">
                                <ul class="nav nav-tabs" id="productDesTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="des-tab" data-bs-toggle="tab"
                                            data-bs-target="#des" type="button" role="tab" aria-controls="des"
                                            aria-selected="true">Details</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="review-tab" data-bs-toggle="tab"
                                            data-bs-target="#review" type="button" role="tab" aria-controls="review"
                                            aria-selected="false">Review 5</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="tab-content" id="prodductDesTaContent">
                                <div class="tab-pane fade show active" id="des" role="tabpanel"
                                    aria-labelledby="des-tab">
                                    <div class="product__details-des-wrapper">
                                        <div class="product__details-des mb-20">
                                            
                                        <?php echo ($product_data["discription"]) ?>


                                    </div>
                                </div>
                                <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                    <div class="product__details-review">
                                        <div class="row">
                                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                                <div class="review-wrapper">
                                                    <h3 class="block-title">Customer Reviews</h3>
                                                    <div class="review-item">
                                                        <h3 class="review-title">Awesome product</h3>
                                                        <div class="review-ratings mb-10">
                                                            <div
                                                                class="review-ratings-single d-flex align-items-center">
                                                                <span>Quality</span>
                                                                <ul>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div
                                                                class="review-ratings-single d-flex align-items-center">
                                                                <span>Price</span>
                                                                <ul>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div
                                                                class="review-ratings-single d-flex align-items-center">
                                                                <span>Value</span>
                                                                <ul>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="review-text">
                                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                                Corrupti quia eligendi molestias illum libero et.</p>
                                                        </div>
                                                        <div class="review-meta">
                                                            <div class="review-author">
                                                                <span>Review By </span>
                                                                <span>Shahnewaz Sakil</span>
                                                            </div>
                                                            <div class="review-date">
                                                                <span>Posted on</span>
                                                                <span>1/21/20</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="review-item">
                                                        <h3 class="review-title">Nice</h3>
                                                        <div class="review-ratings mb-10">
                                                            <div
                                                                class="review-ratings-single d-flex align-items-center">
                                                                <span>Quality</span>
                                                                <ul>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div
                                                                class="review-ratings-single d-flex align-items-center">
                                                                <span>Price</span>
                                                                <ul>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div
                                                                class="review-ratings-single d-flex align-items-center">
                                                                <span>Value</span>
                                                                <ul>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="review-text">
                                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                                Corrupti quia eligendi molestias illum libero et.</p>
                                                        </div>
                                                        <div class="review-meta">
                                                            <div class="review-author">
                                                                <span>Review By </span>
                                                                <span>Selena Gomz</span>
                                                            </div>
                                                            <div class="review-date">
                                                                <span>Posted on</span>
                                                                <span>1/21/20</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="review-item">
                                                        <h3 class="review-title">Best product</h3>
                                                        <div class="review-ratings mb-10">
                                                            <div
                                                                class="review-ratings-single d-flex align-items-center">
                                                                <span>Quality</span>
                                                                <ul>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div
                                                                class="review-ratings-single d-flex align-items-center">
                                                                <span>Price</span>
                                                                <ul>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div
                                                                class="review-ratings-single d-flex align-items-center">
                                                                <span>Value</span>
                                                                <ul>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="review-text">
                                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                                Corrupti quia eligendi molestias illum libero et.</p>
                                                        </div>
                                                        <div class="review-meta">
                                                            <div class="review-author">
                                                                <span>Review By </span>
                                                                <span>Jonson</span>
                                                            </div>
                                                            <div class="review-date">
                                                                <span>Posted on</span>
                                                                <span>1/21/20</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4">
                                                <div class="review-form">
                                                    <h3>Your Reviewing</h3>
                                                    <p>Australian Certified Organic Royal Gala Apples</p>
                                                    <form action="#">
                                                        <div class="review-input-box mb-15 d-flex align-items-start">
                                                            <h4 class="review-input-title">Your Rating</h4>
                                                            <div class="review-input">
                                                                <div class="review-ratings mb-10">
                                                                    <div
                                                                        class="review-ratings-single d-flex align-items-center">
                                                                        <span>Quality</span>
                                                                        <ul>
                                                                            <li><a href="#"><i
                                                                                        class="fas fa-star"></i></a>
                                                                            </li>
                                                                            <li><a href="#"><i
                                                                                        class="fas fa-star"></i></a>
                                                                            </li>
                                                                            <li><a href="#"><i
                                                                                        class="fas fa-star"></i></a>
                                                                            </li>
                                                                            <li><a href="#"><i
                                                                                        class="fas fa-star"></i></a>
                                                                            </li>
                                                                            <li><a href="#"><i
                                                                                        class="fas fa-star"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div
                                                                        class="review-ratings-single d-flex align-items-center">
                                                                        <span>Price</span>
                                                                        <ul>
                                                                            <li><a href="#"><i
                                                                                        class="fas fa-star"></i></a>
                                                                            </li>
                                                                            <li><a href="#"><i
                                                                                        class="fas fa-star"></i></a>
                                                                            </li>
                                                                            <li><a href="#"><i
                                                                                        class="fas fa-star"></i></a>
                                                                            </li>
                                                                            <li><a href="#"><i
                                                                                        class="fas fa-star"></i></a>
                                                                            </li>
                                                                            <li><a href="#"><i
                                                                                        class="fas fa-star"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div
                                                                        class="review-ratings-single d-flex align-items-center">
                                                                        <span>Value</span>
                                                                        <ul>
                                                                            <li><a href="#"><i
                                                                                        class="fas fa-star"></i></a>
                                                                            </li>
                                                                            <li><a href="#"><i
                                                                                        class="fas fa-star"></i></a>
                                                                            </li>
                                                                            <li><a href="#"><i
                                                                                        class="fas fa-star"></i></a>
                                                                            </li>
                                                                            <li><a href="#"><i
                                                                                        class="fas fa-star"></i></a>
                                                                            </li>
                                                                            <li><a href="#"><i
                                                                                        class="fas fa-star"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="review-input-box d-flex align-items-start">
                                                            <h4 class="review-input-title">Nickname</h4>
                                                            <div class="review-input">
                                                                <input type="text" required>
                                                            </div>
                                                        </div>
                                                        <div class="review-input-box d-flex align-items-start">
                                                            <h4 class="review-input-title">Summary</h4>
                                                            <div class="review-input">
                                                                <input type="text" required>
                                                            </div>
                                                        </div>
                                                        <div class="review-input-box d-flex align-items-start">
                                                            <h4 class="review-input-title">Review</h4>
                                                            <div class="review-input">
                                                                <textarea></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="review-sub-btn">
                                                            <button type="submit" class="t-y-btn t-y-btn-grey">submit
                                                                review</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
        </section>
        <!-- product area end -->

        <!-- product area start -->
        <section class="product__area box-plr-75 pb-20">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="section__head mb-40">
                            <div class="section__title">
                                <h3>Best Selling<span>Products</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="product__slider owl-carousel">


                        <?php

$product_rs=Database::search("SELECT*FROM `product`WHERE 
`bestsell_id`='1'ORDER BY `date`");
 $product_num = $product_rs->num_rows;

 for($z=0;$z<$product_num;$z++){
  $product_data=$product_rs->fetch_assoc();

  

   $image_rs= Database::search("SELECT*FROM `images`WHERE `product_id`='".$product_data["product_id"]."'");
   $image_data=$image_rs->fetch_assoc();

  ?>

                                    <div class="product__item white-bg">
                                        <div class="product__thumb p-relative">
                                            <a href="<?php echo "singleProductView.php?id=" . $product_data["product_id"]; ?>"
                                                class="w-img">
                                                <img src="admin/<?php echo $image_data["code"];?>" alt="product">

                                            </a>
                                            <div class="product__action p-absolute">
                                                <ul>
                                                    <li><a href="#" title="Add to Wishlist"><i
                                                                class="fal fa-heart"></i></a></li>
                                                    <li><a href="#" title="Quick View" data-bs-toggle="modal"
                                                            data-bs-target="#productModalId"><i
                                                                class="fal fa-search"></i></a></li>

                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__content text-center">
                                            <span class="price"><?php echo $product_data["name"];?>
                                                <h6 class="product-name">
                                                    <a class="product-item-link"
                                                        href="product-details.html">#<?php echo $product_data["stitle"];?></a>
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

                                    <?php
 }

?>


                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product area end -->

        <!-- brand area start -->
        <section class="brand__area">
            <div class="container custom-container">
                <div class="row align-items-center">
                    <div class="col-xl-12">
                        <div class="brand__slider owl-carousel">
                            <div class="brand__item">
                                <img src="assets/img/brand/brand-1.jpg" alt="">
                            </div>
                            <div class="brand__item">
                                <img src="assets/img/brand/brand-2.jpg" alt="">
                            </div>
                            <div class="brand__item">
                                <img src="assets/img/brand/brand-3.jpg" alt="">
                            </div>
                            <div class="brand__item">
                                <img src="assets/img/brand/brand-4.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- brand area end -->

        <!-- shop modal start -->
        <div class="modal fade" id="productModalId" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered product__modal" role="document">
                <div class="modal-content">
                    <div class="product__modal-wrapper p-relative">
                        <div class="product__modal-close p-absolute">
                            <button data-bs-dismiss="modal"><i class="fal fa-times"></i></button>
                        </div>
                        <div class="product__modal-inner">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product__modal-box">
                                        <div class="tab-content" id="modalTabContent">
                                            <div class="tab-pane fade show active" id="nav1" role="tabpanel"
                                                aria-labelledby="nav1-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="assets/img/shop/product/quick-view/quick-view-1.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav2" role="tabpanel"
                                                aria-labelledby="nav2-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="assets/img/shop/product/quick-view/quick-view-2.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav3" role="tabpanel"
                                                aria-labelledby="nav3-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="assets/img/shop/product/quick-view/quick-view-3.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav4" role="tabpanel"
                                                aria-labelledby="nav4-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="assets/img/shop/product/quick-view/quick-view-4.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="nav nav-tabs" id="modalTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="nav1-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav1" type="button" role="tab" aria-controls="nav1"
                                                    aria-selected="true">
                                                    <img src="assets/img/shop/product/quick-view/nav/quick-nav-1.jpg"
                                                        alt="">
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="nav2-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav2" type="button" role="tab" aria-controls="nav2"
                                                    aria-selected="false">
                                                    <img src="assets/img/shop/product/quick-view/nav/quick-nav-2.jpg"
                                                        alt="">
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="nav3-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav3" type="button" role="tab" aria-controls="nav3"
                                                    aria-selected="false">
                                                    <img src="assets/img/shop/product/quick-view/nav/quick-nav-3.jpg"
                                                        alt="">
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="nav4-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav4" type="button" role="tab" aria-controls="nav4"
                                                    aria-selected="false">
                                                    <img src="assets/img/shop/product/quick-view/nav/quick-nav-4.jpg"
                                                        alt="">
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product__modal-content">
                                        <h4><a href="product-details.html">Samsung C49J89: £875, Debenhams Plus</a></h4>
                                        <div class="product__modal-des mb-40">
                                            <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit
                                                eorum claritatem. Investigationes demonstraverunt </p>
                                        </div>
                                        <div class="product__stock">
                                            <span>Availability :</span>
                                            <span>In Stock</span>
                                        </div>
                                        <div class="product__stock sku mb-30">
                                            <span>SKU:</span>
                                            <span>Samsung C49J89: £875, Debenhams Plus</span>
                                        </div>
                                        <div class="product__review d-sm-flex">
                                            <div class="rating rating__shop mb-15 mr-35">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product__add-review mb-15">
                                                <span><a href="#">1 Review</a></span>
                                                <span><a href="#">Add Review</a></span>
                                            </div>
                                        </div>
                                        <div class="product__price">
                                            <span>$560.00</span>
                                        </div>
                                        <div class="product__modal-form mb-30">
                                            <form action="#">
                                                <div class="pro-quan-area d-lg-flex align-items-center">
                                                    <div class="product-quantity mr-20 mb-25">
                                                        <div class="cart-plus-minus p-relative"><input type="text"
                                                                value="1" /></div>
                                                    </div>
                                                    <div class="pro-cart-btn mb-25">
                                                        <button class="t-y-btn" type="submit">Add to cart</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="product__modal-links">
                                            <ul>
                                                <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a>
                                                </li>
                                                <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a>
                                                </li>
                                                <li><a href="#" title="Print"><i class="fal fa-print"></i></a></li>
                                                <li><a href="#" title="Print"><i class="fal fa-share-alt"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- shop modal end -->

    </main>

    <!-- footer area start -->
    <footer>
        <div class="footer__area footer-bg-2 yellow-footer">
            <div class="footer__top pt-80 pb-40">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-12">
                            <div class="footer__top-left">
                                <div class="row">
                                    <div class="col-xl-5 col-lg-6 col-md-6 col-sm-6">
                                        <div class="footer__widget">
                                            <div class="footer__widget-title mb-45">
                                                <div class="footer__logo">
                                                    <a href="index.html"><img src="assets/img/logo/logo-white.png"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="footer__widget-content">
                                                <div
                                                    class="footer__hotline footer__hotline-4 d-flex align-items-center mb-30">
                                                    <div class="icon mr-15">
                                                        <i class="fal fa-headset"></i>
                                                    </div>
                                                    <div class="text">
                                                        <h4>Hotline Free 24/24:</h4>
                                                        <span>(+100) 123 456 7890</span>
                                                    </div>
                                                </div>
                                                <div class="footer__info footer__info-4">
                                                    <ul>
                                                        <li>
                                                            <span>Add:
                                                                <a target="_blank"
                                                                    href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">Walls
                                                                    Street 68, Mahattan, New York, USA</a>
                                                            </span>
                                                        </li>
                                                        <li><span>Email: <a
                                                                    href="mailto:info@thebuesky.com">info@thebuesky.com</a>
                                                            </span></li>
                                                        <li><span>Fax: <a href="tel:123-456-7890">(+100) 123 456
                                                                    7890</a> - <a href="tel:-100-123-456-7891">(+100)
                                                                    123 456 7891</a> </span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-6 col-md-6 col-sm-6">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                <div class="footer__widget">
                                                    <div class="footer__widget-title footer__widget-title-4">
                                                        <h4>Information</h4>
                                                    </div>
                                                    <div class="footer__widget-content">
                                                        <div class="footer__link footer__link-4">
                                                            <ul>
                                                                <li><a href="#"> Custom Service </a></li>
                                                                <li><a href="#">F.A.Q.’s</a></li>
                                                                <li><a href="#">Ordering Tracking</a></li>
                                                                <li><a href="#"> Contacts</a></li>
                                                                <li><a href="#">Events</a></li>
                                                                <li><a href="#">Popular</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                <div class="footer__widget">
                                                    <div class="footer__widget-title footer__widget-title-4">
                                                        <h4>Our Services</h4>
                                                    </div>
                                                    <div class="footer__widget-content">
                                                        <div class="footer__link footer__link-4">
                                                            <ul>
                                                                <li><a href="#">Sitemap</a></li>
                                                                <li><a href="#">Privacy Policy</a></li>
                                                                <li><a href="#">Your Account</a></li>
                                                                <li><a href="#">Advanced Search</a></li>
                                                                <li><a href="#">Terms & Condition</a></li>
                                                                <li><a href="#"> Contact Us</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="row">
                                <div class="col-xl-7 col-lg-6 col-md-6 col-sm-6">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="footer__widget">
                                                <div class="footer__widget-title footer__widget-title-4">
                                                    <h4>My Account</h4>
                                                </div>
                                                <div class="footer__widget-content">
                                                    <div class="footer__link footer__link-4">
                                                        <ul>
                                                            <li><a href="#"> About us </a></li>
                                                            <li><a href="#">Delivery Information</a></li>
                                                            <li><a href="#">Privacy Policy</a></li>
                                                            <li><a href="#">Discount</a></li>
                                                            <li><a href="#">Custom Service</a></li>
                                                            <li><a href="#">Terms & Condition</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="footer__widget">
                                                <div class="footer__widget-title footer__widget-title-4">
                                                    <h4>Payment & Shipping</h4>
                                                </div>
                                                <div class="footer__widget-content">
                                                    <div class="footer__link footer__link-4">
                                                        <ul>
                                                            <li><a href="#">Terms Of Use</a></li>
                                                            <li><a href="#">Payment Methods</a></li>
                                                            <li><a href="#">Shipping Guide</a></li>
                                                            <li><a href="#">Locations We Ship To</a></li>
                                                            <li><a href="#">Estimated Delivery Time</a></li>
                                                            <li><a href="#">Express</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-6 col-md-6 col-sm-6">
                                    <div class="footer__widget">
                                        <div class="footer__widget-title">
                                            <h4>Sign Up For Newsletter</h4>
                                        </div>
                                        <div class="footer__widget-content">
                                            <div class="footer__subscribe">
                                                <p> <span>Join 40.00+ Subscribers</span> and get a new discount coupon
                                                    on every Saturday.</p>
                                                <div class="footer__subscribe-form">
                                                    <form action="#">
                                                        <input type="email" placeholder="Your Email Address...">
                                                        <button type="submit">subscribe</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__copyright footer__copyright-2 pt-30 pb-35 footer-bg-2">
                <div class="container custom-container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6">
                            <div class="footer__copyright-text footer__copyright-text-2">
                                <p>Copyright © <a href="index.html">Topico.</a> All Rights Reserved. <a
                                        href="#">ThemePure.</a></p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="footer__payment f-right">
                                <a href="#" class="m-img"><img src="assets/img/icon/payment.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

    <!-- JS here -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/waypoints.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/meanmenu.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/backToTop.js"></script>
    <script src="assets/js/jquery.fancybox.min.js"></script>
    <script src="assets/js/countdown.js"></script>
    <script src="assets/js/nice-select.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/jquery-ui-slider-range.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="script.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>



<?php
 } else {
    header("location:./error.html");
}

} else {
    header("location:./error.html");
}


?>