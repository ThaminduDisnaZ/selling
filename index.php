<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Topico - Clean, Minimal E-commerce HTML5 Template </title>
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
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div id="object"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->


    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->





    <?php
      include "heder.php" ;

      $b10_rs = Database::search("SELECT * FROM `banner` WHERE `b_id` = '0' AND `banner_type_id` = '1' ");
      $b10_data = $b10_rs->fetch_assoc();

 $img10 = $b10_data["path"];


 $b11_rs = Database::search("SELECT * FROM `banner` WHERE `b_id` = '1'  AND `banner_type_id` = '1'");
 $b11_data = $b11_rs->fetch_assoc();

$img11 = $b11_data["path"];


$b12_rs = Database::search("SELECT * FROM `banner` WHERE `b_id` = '2'  AND `banner_type_id` = '1'");
$b12_data = $b12_rs->fetch_assoc();

$img12 = $b12_data["path"];




$b20_rs = Database::search("SELECT * FROM `banner` WHERE `b_id` = '0' AND `banner_type_id` = '2' ");
$b20_data = $b20_rs->fetch_assoc();

$img20 = $b20_data["path"];



$b30_rs = Database::search("SELECT * FROM `banner` WHERE `b_id` = '0' AND `banner_type_id` = '3' ");
$b30_data = $b30_rs->fetch_assoc();

$img30 = $b30_data["path"];

$b31_rs = Database::search("SELECT * FROM `banner` WHERE `b_id` = '1' AND `banner_type_id` = '3' ");
$b31_data = $b31_rs->fetch_assoc();

$img31 = $b31_data["path"];





$b60_rs = Database::search("SELECT * FROM `banner` WHERE `b_id` = '0' AND `banner_type_id` = '4' ");
$b60_data = $b60_rs->fetch_assoc();

$img60 = $b60_data["path"];

$b61_rs = Database::search("SELECT * FROM `banner` WHERE `b_id` = '1' AND `banner_type_id` = '4' ");
$b61_data = $b61_rs->fetch_assoc();

$img61 = $b61_data["path"];

$b62_rs = Database::search("SELECT * FROM `banner` WHERE `b_id` = '2' AND `banner_type_id` = '4' ");
$b62_data = $b62_rs->fetch_assoc();

$img62 = $b62_data["path"];







$b40_rs = Database::search("SELECT * FROM `banner` WHERE `b_id` = '0' AND `banner_type_id` = '5' ");
$b40_data = $b40_rs->fetch_assoc();

$img40 = $b40_data["path"];

$b41_rs = Database::search("SELECT * FROM `banner` WHERE `b_id` = '1' AND `banner_type_id` = '5' ");
$b41_data = $b41_rs->fetch_assoc();

$img41 = $b41_data["path"];







$b50_rs = Database::search("SELECT * FROM `banner` WHERE `b_id` = '0' AND `banner_type_id` = '6' ");
$b50_data = $b50_rs->fetch_assoc();

$img50 = $b50_data["path"];



$b51_rs = Database::search("SELECT * FROM `banner` WHERE `b_id` = '1' AND `banner_type_id` = '6' ");
$b51_data = $b51_rs->fetch_assoc();

$img51 = $b51_data["path"];



$b52_rs = Database::search("SELECT * FROM `banner` WHERE `b_id` = '2' AND `banner_type_id` = '6' ");
$b52_data = $b52_rs->fetch_assoc();

$img52 = $b52_data["path"];



     ?>



    <main>
        <!-- slider area satrt -->
        <section class="slider__area pt-50 pb-50" id="banners" data-background="admin/<?php echo $img20; ?>"
            style="background-image: url(&quot; admin/<?php echo $img20; ?>  &quot;);">
            <div class="container">
                <div class="row">

                    <div class="col-xl-10 custom-col-10 col-lg-12">
                        <div class="row">
                            <div class="col-xl-9 custom-col-9 col-lg-8">
                                <div class="slider__inner slider-active">





                                    <div class="single-slider w-img">
                                        <img src="admin/<?php echo $img10; ?>" alt="slider">
                                    </div>
                                    <div class="single-slider w-img">
                                        <img src="admin/<?php echo $img11; ?>" alt="slider">
                                    </div>
                                    <div class="single-slider w-img">
                                        <img src="admin/<?php echo $img12; ?>" alt="slider">
                                    </div>







                                </div>
                            </div>
                            <div class="col-xl-3 custom-col-3 col-lg-4 d-none d-md-block">
                                <div class="banner__area">
                                    <div class="banner__item mb-20 w-img">
                                        <a
                                            href="<?php echo "singleProductView.php?id=" . $product_data["product_id"]; ?>"><img
                                                src="admin/<?php echo $img30; ?>" alt=""></a>
                                    </div>
                                    <div class="banner__item w-img">
                                        <a
                                            href="<?php echo "singleProductView.php?id=" . $product_data["product_id"]; ?>"><img
                                                src="admin/<?php echo $img31; ?>" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider area end -->

        <!-- features area start -->
        <section class="features__area grey-bg-2 pt-40 pb-20 pl-10 pr-10">
            <div class="container">
                <div class="row row-cols-xxl-5 row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 gx-0">
                    <div class="col">
                        <div class="features__item d-flex white-bg">
                            <div class="features__icon mr-15">
                                <i class="fal fa-rocket-launch"></i>
                            </div>
                            <div class="features__content">
                                <h6>Free Shipping</h6>
                                <p>Free Shipping On All Order</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="features__item d-flex white-bg">
                            <div class="features__icon mr-15">
                                <i class="fal fa-sync"></i>
                            </div>
                            <div class="features__content">
                                <h6>Money Guarantee</h6>
                                <p>30 Day Money Back Guarantee</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="features__item d-flex white-bg">
                            <div class="features__icon mr-15">
                                <i class="fal fa-user-headset"></i>
                            </div>
                            <div class="features__content">
                                <h6>Online Support 24/7</h6>
                                <p>Technical Support Stand By</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="features__item d-flex white-bg">
                            <div class="features__icon mr-15">
                                <i class="fal fa-thumbs-up"></i>
                            </div>
                            <div class="features__content">
                                <h6>Secure Payment</h6>
                                <p>All Payment Method are accepted</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="features__item features__item-last d-flex white-bg">
                            <div class="features__icon mr-15">
                                <i class="fal fa-badge-dollar"></i>
                            </div>
                            <div class="features__content">
                                <h6>Member Discount</h6>
                                <p>Upto 40% Discount All Products</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- features area end -->

        <!-- banner area start -->
        <section class="banner__area pt-20 pb-10 grey-bg-2" id="banners2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="banner__item w-img mb-30">
                            <a href="<?php echo "singleProductView.php?id=" . $product_data["product_id"]; ?>"><img
                                    src="admin/<?php echo $img60; ?>" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="banner__item mb-30 w-img">
                            <a href="<?php echo "singleProductView.php?id=" . $product_data["product_id"]; ?>"><img
                                    src="admin/<?php echo $img61; ?>" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="banner__item mb-30 w-img">
                            <a href="<?php echo "singleProductView.php?id=" . $product_data["product_id"]; ?>"><img
                                    src="admin/<?php echo $img62; ?>" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner area end -->


        <!-- best selling area start -->




        <section class="best__sell pt-15 pb-40 grey-bg-2" id="hp1">
            <div class="container">
                <div class="row">

                    <?php
$c_rs=Database::search("SELECT*FROM `category`");
$c_num=$c_rs->num_rows;

for($y=0;$y<$c_num;$y++){
  $cdata= $c_rs->fetch_assoc();


?>
                    <div class="col-xl-12">
                        <div class="section__head d-md-flex justify-content-between mb-40">
                            <div class="section__title">
                                <h3><?php echo $cdata["category"];?></h3>
                            </div>
                        </div>

                    </div>










                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tab-content" id="best-sell">
                            <div class="tab-pane fade show active" id="new" role="tabpanel" aria-labelledby="new-tab">
                                <div class="product__slider owl-carousel">

                                    <?php

$product_rs=Database::search("SELECT*FROM `product`WHERE `category_id`='".$cdata["category_id"]."'AND
`produt_status_id`='1'ORDER BY `date`");
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
                                                        href="<?php echo "singleProductView.php?id=" . $product_data["product_id"]; ?>">#<?php echo $product_data["stitle"];?></a>
                                                </h6>

                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>

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
                    <?php
}
 ?>
                </div>


            </div>


        </section>
        <!-- best selling area end -->



        <!-- banner area start -->
        <section class="banner__area pt-20 grey-bg-2 border-danger border-top-100" id="banners3">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="banner__item mb-30 w-img">
                            <a href="<?php echo "singleProductView.php?id=" . $product_data["product_id"]; ?>"><img
                                    src="admin/<?php echo $img40; ?>" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="banner__item mb-30 w-img">
                            <a href="<?php echo "singleProductView.php?id=" . $product_data["product_id"]; ?>"><img
                                    src="admin/<?php echo $img41; ?>" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner area end -->

        <!-- Flash sell area start -->
        <div class="container" id="hp2">
            <div class="row">


                <div class="col-xl-12">
                    <div class="section__head d-md-flex justify-content-between mb-40">
                        <div class="section__title">
                            <h3>Top Flash DEELS</h3>
                        </div>
                    </div>

                </div>










            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="tab-content" id="best-sell">
                        <div class="tab-pane fade show active" id="new" role="tabpanel" aria-labelledby="new-tab">
                            <div class="product__slider owl-carousel">

                                <?php

$product_rs=Database::search("SELECT*FROM `product`WHERE 
`flashsell_id`='1'ORDER BY `date`");
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
                                                <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a>
                                                </li>
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
                                                    href="<?php echo "singleProductView.php?id=" . $product_data["product_id"]; ?>">#<?php echo $product_data["stitle"];?></a>
                                            </h6>

                                            <div class="rating">
                                                <ul>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                </ul>
                                            </div>

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
                <?php

 ?>
            </div>


        </div>


        </section>
        <!-- Flash sell area end -->

        <!-- banner area start -->
        <section class="banner__area pb-10 grey-bg-2" id="banners4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="banner__item mb-30 w-img">
                            <a href="<?php echo "singleProductView.php?id=" . $product_data["product_id"]; ?>"><img
                                    src="admin/<?php echo $img50; ?>" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="banner__item mb-30 w-img">
                            <a href="<?php echo "singleProductView.php?id=" . $product_data["product_id"]; ?>"><img
                                    src="admin/<?php echo $img51; ?>" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="banner__item mb-30 w-img">
                            <a href="<?php echo "singleProductView.php?id=" . $product_data["product_id"]; ?>"><img
                                    src="admin/<?php echo $img52; ?>" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner area end -->

        <!-- onsale product area start -->
        <section class="onsell__area pt-15 pb-35 grey-bg-2" id="hp3">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__head d-flex justify-content-between mb-40">
                            <div class="section__title">
                                <h3>On Sale<span>Products</span></h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="sale__slider owl-carousel">
                            <div class="product__item-wrapper">
                                <div class="product__item white-bg d-flex mb-20">
                                    <?php

$product_rs=Database::search("SELECT*FROM `product`WHERE 
`bestsell_id`='1'ORDER BY `date`");
 $product_num = $product_rs->num_rows;

 for($z=0;$z<$product_num;$z++){
  $product_data=$product_rs->fetch_assoc();

  

   $image_rs= Database::search("SELECT*FROM `images`WHERE `product_id`='".$product_data["product_id"]."'");
   $image_data=$image_rs->fetch_assoc();

  ?>

                                    <div class="product__thumb product__thumb-sale p-relative">
                                        <a href="<?php echo "singleProductView.php?id=" . $product_data["product_id"]; ?>"
                                            class="w-img">
                                            <img src="admin/<?php echo $image_data["code"];?>" alt="product">

                                        </a>
                                    </div>
                                    <div class="product__content">
                                        <h6 class="product-name">
                                            <a class="product-item-link"
                                                href="<?php echo "singleProductView.php?id=" . $product_data["product_id"]; ?>"><?php echo $product_data["name"];?></a>
                                        </h6>

                                        <?php
                                            if ($product_data["discount"] > 0) {
                                                ?>
                                        <span class="price-old">Rs. <del><?php echo $product_data["price"];?>.00</del>
                                        </span>


                                        <span class="new new-2">Rs.<?php echo $product_data["price"];?>.00</span>
                                        <?php
                                            }else {
                                                ?>
                                        <span class="new new-2">Rs.<?php echo $product_data["price"];?>.00</span>


                                        <?php
                                            }
                                            ?>


                                    </div>
                                </div>





                                <?php

 }

?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- onsale product area end -->

        <!-- blog area start -->
        <!-- <section class="blog__area pb-40 grey-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__head d-flex justify-content-between mb-40">
                            <div class="section__title">
                                <h3>From The<span>Blog</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="blog__slider owl-carousel">
                            <div class="blog__item mb-30">
                                <div class="blog__thumb fix">
                                    <a href="blog-details.html">
                                        <img src="assets/img/blog/blog-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog__content white-bg">
                                    <h3><a href="blog-details.html">Curabitur Lobortis News</a></h3>
                                    <div class="blog__meta">
                                        <span>Post Date:</span>
                                        <span class="date"> 01-Jul-2020</span>
                                    </div>
                                    <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim
                                        vitae lorem non mollis. </p>
                                </div>
                            </div>
                            <div class="blog__item mb-30">
                                <div class="blog__thumb fix">
                                    <a href="blog-details.html">
                                        <img src="assets/img/blog/blog-2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog__content white-bg">
                                    <h3><a href="blog-details.html">The Brushed Steel</a></h3>
                                    <div class="blog__meta">
                                        <span>Post Date:</span>
                                        <span class="date"> 05-Aug-2020</span>
                                    </div>
                                    <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim
                                        vitae lorem non mollis. </p>
                                </div>
                            </div>
                            <div class="blog__item mb-30">
                                <div class="blog__thumb fix">
                                    <a href="blog-details.html">
                                        <img src="assets/img/blog/blog-3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog__content white-bg">
                                    <h3><a href="blog-details.html">Koma and Torus</a></h3>
                                    <div class="blog__meta">
                                        <span>Post Date:</span>
                                        <span class="date"> 15-Aug-2020</span>
                                    </div>
                                    <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim
                                        vitae lorem non mollis. </p>
                                </div>
                            </div>
                            <div class="blog__item mb-30">
                                <div class="blog__thumb fix">
                                    <a href="blog-details.html">
                                        <img src="assets/img/blog/blog-4.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog__content white-bg">
                                    <h3><a href="blog-details.html">Grip and Allows</a></h3>
                                    <div class="blog__meta">
                                        <span>Post Date:</span>
                                        <span class="date"> 20-Aug-2020</span>
                                    </div>
                                    <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim
                                        vitae lorem non mollis. </p>
                                </div>
                            </div>
                            <div class="blog__item mb-30">
                                <div class="blog__thumb fix">
                                    <a href="blog-details.html">
                                        <img src="assets/img/blog/blog-5.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog__content white-bg">
                                    <h3><a href="blog-details.html">Pitterarum Formas</a></h3>
                                    <div class="blog__meta">
                                        <span>Post Date:</span>
                                        <span class="date"> 25-Aug-2020</span>
                                    </div>
                                    <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim
                                        vitae lorem non mollis. </p>
                                </div>
                            </div>
                            <div class="blog__item mb-30">
                                <div class="blog__thumb fix">
                                    <a href="blog-details.html">
                                        <img src="assets/img/blog/blog-6.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog__content white-bg">
                                    <h3><a href="blog-details.html">Shelving Burgundy</a></h3>
                                    <div class="blog__meta">
                                        <span>Post Date:</span>
                                        <span class="date"> 02-Sep-2020</span>
                                    </div>
                                    <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim
                                        vitae lorem non mollis. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- blog area end -->



























        <!-- product area start -->
        <section class="product__area box-plr-75 pb-70 d-none" id="searcharia">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xxl-2 col-xl-3 col-lg-4">
                        <div class="product__widget">
                            
                        
                        <div class="product__widget-item mb-15">
                                <div class="accordion" id="productWidgetAccordion1">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button product__widget-title" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="true" aria-controls="collapseTwo">
                                                Price
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse show"
                                            aria-labelledby="headingTwo" data-bs-parent="#productWidgetAccordion1">
                                            <div class="accordion-body">
                                                <div class="product__widget-content">
                                                    <div class="product__price-slider">
                                                        <div>
                                                            <form action="#">
                                                                <input type="text" id="amount" readonly>
                                                            </form>
                                                        </div>
                                                        <div id="slider-range"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        <div class="product__widget-item mb-15">
                                <div class="accordion" id="productWidgetAccordion">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button product__widget-title" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                               By Categories
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="product__widget-content">
                                                    <div class="product__color pt-10">
                                                 

                                                    <?php
                                                  $crs=Database::search("SELECT*FROM `category`");
                                                  $cnum=$crs->num_rows;
                                                  
                                                  for($y=0;$y<$c_num;$y++){
                                                    $c_data= $crs->fetch_assoc();
                                                        ?>
                                                        

<li>
                                                             
                                                             <input id="remember" type="checkbox">
                                                             <label for="remember"><?php  echo($c_data["category"]) ?></label>
                                                             <br>
                                                         </li>
                                                        <?php

                                                    }
                                                    ?>
                                                          
                                                          
                                                     
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            



                            <div class="product__widget-item mb-15">
                                <div class="accordion" id="productWidgetAccordion2">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button product__widget-title" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="true" aria-controls="collapseThree">
                                                Price
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse show"
                                            aria-labelledby="headingThree" data-bs-parent="#productWidgetAccordion2">
                                            <div class="accordion-body">
                                                <div class="product__widget-content">
                                                    <div class="product__size pt-10">
                                                    <?php
                                                  $crs=Database::search("SELECT*FROM `category`");
                                                  $cnum=$crs->num_rows;
                                                  
                                                  for($y=0;$y<$c_num;$y++){
                                                    $c_data= $crs->fetch_assoc();
                                                        ?>
                                                        

<li>
                                                             
                                                             <input id="remember" type="checkbox">
                                                             <label for="remember"><?php  echo($c_data["category"]) ?></label>
                                                             <br>
                                                         </li>
                                                        <?php

                                                    }
                                                    ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="product__widget-item mb-15">
                                <div class="accordion" id="productWidgetAccordion2">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button product__widget-title" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                aria-expanded="true" aria-controls="collapseFour">
                                                Price
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse show"
                                            aria-labelledby="headingThree" data-bs-parent="#productWidgetAccordion2">
                                            <div class="accordion-body">
                                                <div class="product__widget-content">
                                                    <div class="product__size pt-10">
                                                    <?php
                                                  $crs=Database::search("SELECT*FROM `category`");
                                                  $cnum=$crs->num_rows;
                                                  
                                                  for($y=0;$y<$c_num;$y++){
                                                    $c_data= $crs->fetch_assoc();
                                                        ?>
                                                        

<li>
                                                             
                                                             <input id="remember" type="checkbox">
                                                             <label for="remember"><?php  echo($c_data["category"]) ?></label>
                                                             <br>
                                                         </li>
                                                        <?php

                                                    }
                                                    ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="product__widget-item mb-15">
                                <div class="accordion" id="productWidgetAccordion2">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button product__widget-title" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                aria-expanded="true" aria-controls="collapseFive">
                                                Price
                                            </button>
                                        </h2>
                                        <div id="collapseFive" class="accordion-collapse collapse show"
                                            aria-labelledby="headingThree" data-bs-parent="#productWidgetAccordion2">
                                            <div class="accordion-body">
                                                <div class="product__widget-content">
                                                    <div class="product__size pt-10">
                                                    <?php
                                                  $crs=Database::search("SELECT*FROM `category`");
                                                  $cnum=$crs->num_rows;
                                                  
                                                  for($y=0;$y<$c_num;$y++){
                                                    $c_data= $crs->fetch_assoc();
                                                        ?>
                                                        

<li>
                                                             
                                                             <input id="remember" type="checkbox">
                                                             <label for="remember"><?php  echo($c_data["category"]) ?></label>
                                                             <br>
                                                         </li>
                                                        <?php

                                                    }
                                                    ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="product__widget-item mb-15">
                                <div class="accordion" id="productWidgetAccordion2">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button product__widget-title" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                                aria-expanded="true" aria-controls="collapseSix">
                                                Price
                                            </button>
                                        </h2>
                                        <div id="collapseSix" class="accordion-collapse collapse show"
                                            aria-labelledby="headingThree" data-bs-parent="#productWidgetAccordion2">
                                            <div class="accordion-body">
                                                <div class="product__widget-content">
                                                    <div class="product__size pt-10">
                                                    <?php
                                                  $crs=Database::search("SELECT*FROM `category`");
                                                  $cnum=$crs->num_rows;
                                                  
                                                  for($y=0;$y<$c_num;$y++){
                                                    $c_data= $crs->fetch_assoc();
                                                        ?>
                                                        

<li>
                                                             
                                                             <input id="remember" type="checkbox">
                                                             <label for="remember"><?php  echo($c_data["category"]) ?></label>
                                                             <br>
                                                         </li>
                                                        <?php

                                                    }
                                                    ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>










                            <div class="product__widget-item mb-15">
                                <div class="accordion" id="productWidgetAccordion2">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button product__widget-title" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                                aria-expanded="true" aria-controls="collapseSeven">
                                                Price
                                            </button>
                                        </h2>
                                        <div id="collapseSeven" class="accordion-collapse collapse show"
                                            aria-labelledby="headingThree" data-bs-parent="#productWidgetAccordion2">
                                            <div class="accordion-body">
                                                <div class="product__widget-content">
                                                    <div class="product__size pt-10">
                                                    <?php
                                                  $crs=Database::search("SELECT*FROM `category`");
                                                  $cnum=$crs->num_rows;
                                                  
                                                  for($y=0;$y<$c_num;$y++){
                                                    $c_data= $crs->fetch_assoc();
                                                        ?>
                                                        

<li>
                                                             
                                                             <input id="remember" type="checkbox">
                                                             <label for="remember"><?php  echo($c_data["category"]) ?></label>
                                                             <br>
                                                         </li>
                                                        <?php

                                                    }
                                                    ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>











                            <div class="product__widget-item mb-15">
                                <div class="accordion" id="productWidgetAccordion2">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button product__widget-title" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseEight"
                                                aria-expanded="true" aria-controls="collapseEight">
                                                Price
                                            </button>
                                        </h2>
                                        <div id="collapseEight" class="accordion-collapse collapse show"
                                            aria-labelledby="headingThree" data-bs-parent="#productWidgetAccordion2">
                                            <div class="accordion-body">
                                                <div class="product__widget-content">
                                                    <div class="product__size pt-10">
                                                    <?php
                                                  $crs=Database::search("SELECT*FROM `category`");
                                                  $cnum=$crs->num_rows;
                                                  
                                                  for($y=0;$y<$c_num;$y++){
                                                    $c_data= $crs->fetch_assoc();
                                                        ?>
                                                        

<li>
                                                             
                                                             <input id="remember" type="checkbox">
                                                             <label for="remember"><?php  echo($c_data["category"]) ?></label>
                                                             <br>
                                                         </li>
                                                        <?php

                                                    }
                                                    ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>










                            <div class="product__widget-item mb-15">
                                <div class="accordion" id="productWidgetAccordion2">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button product__widget-title" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseNine"
                                                aria-expanded="true" aria-controls="collapseNine">
                                                Price
                                            </button>
                                        </h2>
                                        <div id="collapseNine" class="accordion-collapse collapse show"
                                            aria-labelledby="headingThree" data-bs-parent="#productWidgetAccordion2">
                                            <div class="accordion-body">
                                                <div class="product__widget-content">
                                                    <div class="product__size pt-10">
                                                    <?php
                                                  $crs=Database::search("SELECT*FROM `category`");
                                                  $cnum=$crs->num_rows;
                                                  
                                                  for($y=0;$y<$c_num;$y++){
                                                    $c_data= $crs->fetch_assoc();
                                                        ?>
                                                        

<li>
                                                             
                                                             <input id="remember" type="checkbox">
                                                             <label for="remember"><?php  echo($c_data["category"]) ?></label>
                                                             <br>
                                                         </li>
                                                        <?php

                                                    }
                                                    ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>








                            <div class="product__widget-item mb-15">
                                <div class="accordion" id="productWidgetAccordion2">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button product__widget-title" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTen"
                                                aria-expanded="true" aria-controls="collapseTen">
                                                Price
                                            </button>
                                        </h2>
                                        <div id="collapseTen" class="accordion-collapse collapse show"
                                            aria-labelledby="headingThree" data-bs-parent="#productWidgetAccordion2">
                                            <div class="accordion-body">
                                                <div class="product__widget-content">
                                                    <div class="product__size pt-10">
                                                    <?php
                                                  $crs=Database::search("SELECT*FROM `category`");
                                                  $cnum=$crs->num_rows;
                                                  
                                                  for($y=0;$y<$c_num;$y++){
                                                    $c_data= $crs->fetch_assoc();
                                                        ?>
                                                        

<li>
                                                             
                                                             <input id="remember" type="checkbox">
                                                             <label for="remember"><?php  echo($c_data["category"]) ?></label>
                                                             <br>
                                                         </li>
                                                        <?php

                                                    }
                                                    ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>







                            






                            
                        </div>
                    </div>
                    <div class="col-xxl-10 col-xl-9 col-lg-8 order-first order-lg-last">
                        <div class="product__grid-wrapper">
                            
                            <div class="product__grid-item-wrapper pt-70">
                                <div class="product__filter mb-50">
                                    <div class="row align-items-center">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                            <div class="product__filter-left d-sm-flex align-items-center">
                                                <div class="product__col">
                                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link active" id="FourCol-tab"
                                                                data-bs-toggle="tab" data-bs-target="#FourCol"
                                                                type="button" role="tab" aria-controls="FourCol"
                                                                aria-selected="true">
                                                                <i class="fal fa-border-all"></i>
                                                            </button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="FiveCol-tab"
                                                                data-bs-toggle="tab" data-bs-target="#FiveCol"
                                                                type="button" role="tab" aria-controls="FiveCol"
                                                                aria-selected="false">
                                                                <i class="fal fa-th"></i>
                                                            </button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="list-tab" data-bs-toggle="tab"
                                                                data-bs-target="#list" type="button" role="tab"
                                                                aria-controls="list" aria-selected="false">
                                                                <i class="fal fa-list"></i>
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product__result pl-60">

                                                <?php
                                               
                                                ?>
                                                    <p>Showing 1-20 of 29 relults</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                            <div
                                                class="product__filter-right d-flex align-items-center justify-content-md-end">
                                                <div class="product__sorting product__show-no">
                                                    <select>
                                                        <option>10</option>
                                                        <option>20</option>
                                                        <option>30</option>
                                                        <option>40</option>
                                                    </select>
                                                </div>
                                                <div class="product__sorting product__show-position ml-20">
                                                    <select>
                                                        <option>Position</option>
                                                        <option>Poduct Name</option>
                                                        <option>Price</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content" id="productGridTabContent">
                                    <div class="tab-pane fade  show active" id="FourCol" role="tabpanel"
                                        aria-labelledby="FourCol-tab">
                                        <div class="row" id="searchru">                                      
                                          







                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="FiveCol" role="tabpanel"
                                        aria-labelledby="FiveCol-tab">
                                        <div class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-md-4">
                                            <div class="col">
                                                <div class="product__item white-bg mb-30">
                                                    <div class="product__thumb p-relative">
                                                        <a href="product-details.html" class="w-img">
                                                            <img src="assets/img/shop/product/product-1.jpg"
                                                                alt="product">
                                                            <img class="second-img"
                                                                src="assets/img/shop/product/product-2.jpg"
                                                                alt="product">
                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="#" title="Add to Wishlist"><i
                                                                            class="fal fa-heart"></i></a></li>
                                                                <li><a href="#" title="Quick View"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#productModalId"><i
                                                                            class="fal fa-search"></i></a></li>
                                                                <li><a href="#" title="Compare"><i
                                                                            class="far fa-sliders-h"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link" href="product-details.html">
                                                                High Quality Glass Ultra-Thin Kitchen Scale</a>
                                                        </h6>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <span class="price">$500.00</span>
                                                    </div>
                                                    <div class="product__add-btn">
                                                        <button type="button">Add to Cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item white-bg mb-30">
                                                    <div class="product__thumb p-relative">
                                                        <a href="product-details.html" class="w-img">
                                                            <img src="assets/img/shop/product/product-3.jpg"
                                                                alt="product">
                                                            <img class="second-img"
                                                                src="assets/img/shop/product/product-4.jpg"
                                                                alt="product">
                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="#" title="Add to Wishlist"><i
                                                                            class="fal fa-heart"></i></a></li>
                                                                <li><a href="#" title="Quick View"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#productModalId"><i
                                                                            class="fal fa-search"></i></a></li>
                                                                <li><a href="#" title="Compare"><i
                                                                            class="far fa-sliders-h"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link" href="product-details.html"> LG
                                                                27UD58: £347.21, Ebuyer.com </a>
                                                        </h6>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <span class="price">$560.00</span>
                                                    </div>
                                                    <div class="product__add-btn">
                                                        <button type="button">Add to Cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item white-bg mb-30">
                                                    <div class="product__thumb p-relative">
                                                        <a href="product-details.html" class="w-img">
                                                            <img src="assets/img/shop/product/product-5.jpg"
                                                                alt="product">
                                                            <img class="second-img"
                                                                src="assets/img/shop/product/product-6.jpg"
                                                                alt="product">
                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="#" title="Add to Wishlist"><i
                                                                            class="fal fa-heart"></i></a></li>
                                                                <li><a href="#" title="Quick View"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#productModalId"><i
                                                                            class="fal fa-search"></i></a></li>
                                                                <li><a href="#" title="Compare"><i
                                                                            class="far fa-sliders-h"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link" href="product-details.html">
                                                                Samsung C49J89: £875, Debenhams Plus </a>
                                                        </h6>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <span class="price">$450.00</span>
                                                    </div>
                                                    <div class="product__add-btn">
                                                        <button type="button">Add to Cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item white-bg mb-30">
                                                    <div class="product__thumb p-relative">
                                                        <a href="product-details.html" class="w-img">
                                                            <img src="assets/img/shop/product/product-7.jpg"
                                                                alt="product">
                                                            <img class="second-img"
                                                                src="assets/img/shop/product/product-8.jpg"
                                                                alt="product">
                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="#" title="Add to Wishlist"><i
                                                                            class="fal fa-heart"></i></a></li>
                                                                <li><a href="#" title="Quick View"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#productModalId"><i
                                                                            class="fal fa-search"></i></a></li>
                                                                <li><a href="#" title="Compare"><i
                                                                            class="far fa-sliders-h"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link" href="product-details.html">
                                                                Blink Home Security Camera System 01 </a>
                                                        </h6>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <span class="price">$720.00</span>
                                                    </div>
                                                    <div class="product__add-btn">
                                                        <button type="button">Add to Cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item white-bg mb-30">
                                                    <div class="product__thumb p-relative">
                                                        <a href="product-details.html" class="w-img">
                                                            <img src="assets/img/shop/product/product-9.jpg"
                                                                alt="product">
                                                            <img class="second-img"
                                                                src="assets/img/shop/product/product-10.jpg"
                                                                alt="product">
                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="#" title="Add to Wishlist"><i
                                                                            class="fal fa-heart"></i></a></li>
                                                                <li><a href="#" title="Quick View"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#productModalId"><i
                                                                            class="fal fa-search"></i></a></li>
                                                                <li><a href="#" title="Compare"><i
                                                                            class="far fa-sliders-h"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link" href="product-details.html">
                                                                Blue t-shir for men (X, M, XL, XXL) </a>
                                                        </h6>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <span class="price">$720.00</span>
                                                    </div>
                                                    <div class="product__add-btn">
                                                        <button type="button">Add to Cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item white-bg mb-30">
                                                    <div class="product__thumb p-relative">
                                                        <a href="product-details.html" class="w-img">
                                                            <img src="assets/img/shop/product/product-11.jpg"
                                                                alt="product">
                                                            <img class="second-img"
                                                                src="assets/img/shop/product/product-12.jpg"
                                                                alt="product">
                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="#" title="Add to Wishlist"><i
                                                                            class="fal fa-heart"></i></a></li>
                                                                <li><a href="#" title="Quick View"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#productModalId"><i
                                                                            class="fal fa-search"></i></a></li>
                                                                <li><a href="#" title="Compare"><i
                                                                            class="far fa-sliders-h"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link" href="product-details.html">
                                                                Samsung A20 Pro Ultra CPU 4/64 GB </a>
                                                        </h6>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <span class="price">$720.00</span>
                                                    </div>
                                                    <div class="product__add-btn">
                                                        <button type="button">Add to Cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item white-bg mb-30">
                                                    <div class="product__thumb p-relative">
                                                        <a href="product-details.html" class="w-img">
                                                            <img src="assets/img/shop/product/product-24.jpg"
                                                                alt="product">
                                                            <img class="second-img"
                                                                src="assets/img/shop/product/product-13.jpg"
                                                                alt="product">
                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="#" title="Add to Wishlist"><i
                                                                            class="fal fa-heart"></i></a></li>
                                                                <li><a href="#" title="Quick View"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#productModalId"><i
                                                                            class="fal fa-search"></i></a></li>
                                                                <li><a href="#" title="Compare"><i
                                                                            class="far fa-sliders-h"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link" href="product-details.html">
                                                                Capacitive Touch Screen 22 Inch LCD Display </a>
                                                        </h6>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <span class="price">$70.00</span>
                                                    </div>
                                                    <div class="product__add-btn">
                                                        <button type="button">Add to Cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item white-bg mb-30">
                                                    <div class="product__thumb p-relative">
                                                        <a href="product-details.html" class="w-img">
                                                            <img src="assets/img/shop/product/product-14.jpg"
                                                                alt="product">
                                                            <img class="second-img"
                                                                src="assets/img/shop/product/product-15.jpg"
                                                                alt="product">
                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="#" title="Add to Wishlist"><i
                                                                            class="fal fa-heart"></i></a></li>
                                                                <li><a href="#" title="Quick View"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#productModalId"><i
                                                                            class="fal fa-search"></i></a></li>
                                                                <li><a href="#" title="Compare"><i
                                                                            class="far fa-sliders-h"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link" href="product-details.html">
                                                                New Model Watch Mobile with Bpm Function </a>
                                                        </h6>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <span class="price">$120.00</span>
                                                    </div>
                                                    <div class="product__add-btn">
                                                        <button type="button">Add to Cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item white-bg mb-30">
                                                    <div class="product__thumb p-relative">
                                                        <a href="product-details.html" class="w-img">
                                                            <img src="assets/img/shop/product/product-16.jpg"
                                                                alt="product">
                                                            <img class="second-img"
                                                                src="assets/img/shop/product/product-17.jpg"
                                                                alt="product">
                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="#" title="Add to Wishlist"><i
                                                                            class="fal fa-heart"></i></a></li>
                                                                <li><a href="#" title="Quick View"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#productModalId"><i
                                                                            class="fal fa-search"></i></a></li>
                                                                <li><a href="#" title="Compare"><i
                                                                            class="far fa-sliders-h"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link" href="product-details.html">
                                                                Original Smart Phone for Original for iPhone 6s</a>
                                                        </h6>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <span class="price">$89.99</span>
                                                    </div>
                                                    <div class="product__add-btn">
                                                        <button type="button">Add to Cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item white-bg mb-30">
                                                    <div class="product__thumb p-relative">
                                                        <a href="product-details.html" class="w-img">
                                                            <img src="assets/img/shop/product/product-18.jpg"
                                                                alt="product">
                                                            <img class="second-img"
                                                                src="assets/img/shop/product/product-19.jpg"
                                                                alt="product">
                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="#" title="Add to Wishlist"><i
                                                                            class="fal fa-heart"></i></a></li>
                                                                <li><a href="#" title="Quick View"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#productModalId"><i
                                                                            class="fal fa-search"></i></a></li>
                                                                <li><a href="#" title="Compare"><i
                                                                            class="far fa-sliders-h"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link"
                                                                href="product-details.html">Original Mobile Android Dual
                                                                SIM Smart Phone </a>
                                                        </h6>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <span class="price">$56.00</span>
                                                    </div>
                                                    <div class="product__add-btn">
                                                        <button type="button">Add to Cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item white-bg mb-30">
                                                    <div class="product__thumb p-relative">
                                                        <a href="product-details.html" class="w-img">
                                                            <img src="assets/img/shop/product/product-20.jpg"
                                                                alt="product">
                                                            <img class="second-img"
                                                                src="assets/img/shop/product/product-21.jpg"
                                                                alt="product">
                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="#" title="Add to Wishlist"><i
                                                                            class="fal fa-heart"></i></a></li>
                                                                <li><a href="#" title="Quick View"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#productModalId"><i
                                                                            class="fal fa-search"></i></a></li>
                                                                <li><a href="#" title="Compare"><i
                                                                            class="far fa-sliders-h"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link" href="product-details.html">TF
                                                                Camera Clock Support Bt 4.0 for Ios </a>
                                                        </h6>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <span class="price">$320.00</span>
                                                    </div>
                                                    <div class="product__add-btn">
                                                        <button type="button">Add to Cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item white-bg mb-30">
                                                    <div class="product__thumb p-relative">
                                                        <a href="product-details.html" class="w-img">
                                                            <img src="assets/img/shop/product/product-22.jpg"
                                                                alt="product">
                                                            <img class="second-img"
                                                                src="assets/img/shop/product/product-23.jpg"
                                                                alt="product">
                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="#" title="Add to Wishlist"><i
                                                                            class="fal fa-heart"></i></a></li>
                                                                <li><a href="#" title="Quick View"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#productModalId"><i
                                                                            class="fal fa-search"></i></a></li>
                                                                <li><a href="#" title="Compare"><i
                                                                            class="far fa-sliders-h"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link" href="product-details.html">
                                                                Ipad 2019 6th Gen 64GB Memory </a>
                                                        </h6>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <span class="price">$250.00</span>
                                                    </div>
                                                    <div class="product__add-btn">
                                                        <button type="button">Add to Cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item white-bg mb-30">
                                                    <div class="product__thumb p-relative">
                                                        <a href="product-details.html" class="w-img">
                                                            <img src="assets/img/shop/product/product-2.jpg"
                                                                alt="product">
                                                            <img class="second-img"
                                                                src="assets/img/shop/product/product-1.jpg"
                                                                alt="product">
                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="#" title="Add to Wishlist"><i
                                                                            class="fal fa-heart"></i></a></li>
                                                                <li><a href="#" title="Quick View"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#productModalId"><i
                                                                            class="fal fa-search"></i></a></li>
                                                                <li><a href="#" title="Compare"><i
                                                                            class="far fa-sliders-h"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link" href="product-details.html">
                                                                Ipad 2019 6th Gen 64GB Memory </a>
                                                        </h6>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <span class="price">$250.00</span>
                                                    </div>
                                                    <div class="product__add-btn">
                                                        <button type="button">Add to Cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item white-bg mb-30">
                                                    <div class="product__thumb p-relative">
                                                        <a href="product-details.html" class="w-img">
                                                            <img src="assets/img/shop/product/product-23.jpg"
                                                                alt="product">
                                                            <img class="second-img"
                                                                src="assets/img/shop/product/product-7.jpg"
                                                                alt="product">
                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="#" title="Add to Wishlist"><i
                                                                            class="fal fa-heart"></i></a></li>
                                                                <li><a href="#" title="Quick View"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#productModalId"><i
                                                                            class="fal fa-search"></i></a></li>
                                                                <li><a href="#" title="Compare"><i
                                                                            class="far fa-sliders-h"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link" href="product-details.html">
                                                                Ipad 2019 6th Gen 64GB Memory </a>
                                                        </h6>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <span class="price">$250.00</span>
                                                    </div>
                                                    <div class="product__add-btn">
                                                        <button type="button">Add to Cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item white-bg mb-30">
                                                    <div class="product__thumb p-relative">
                                                        <a href="product-details.html" class="w-img">
                                                            <img src="assets/img/shop/product/product-4.jpg"
                                                                alt="product">
                                                            <img class="second-img"
                                                                src="assets/img/shop/product/product-23.jpg"
                                                                alt="product">
                                                        </a>
                                                        <div class="product__action p-absolute">
                                                            <ul>
                                                                <li><a href="#" title="Add to Wishlist"><i
                                                                            class="fal fa-heart"></i></a></li>
                                                                <li><a href="#" title="Quick View"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#productModalId"><i
                                                                            class="fal fa-search"></i></a></li>
                                                                <li><a href="#" title="Compare"><i
                                                                            class="far fa-sliders-h"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link" href="product-details.html">
                                                                Ipad 2019 6th Gen 64GB Memory </a>
                                                        </h6>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <span class="price">$250.00</span>
                                                    </div>
                                                    <div class="product__add-btn">
                                                        <button type="button">Add to Cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
                                        <div class="row">
                                            <div class="col-xxl-12">
                                                <div class="product__item product__list white-bg mb-30 d-md-flex">
                                                    <div class="product__thumb p-relative mr-20">
                                                        <a href="product-details.html" class="w-img">
                                                            <img src="assets/img/shop/product/product-1.jpg"
                                                                alt="product">
                                                            <img class="second-img"
                                                                src="assets/img/shop/product/product-2.jpg"
                                                                alt="product">
                                                        </a>
                                                    </div>
                                                    <div class="product__content">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link"
                                                                href="product-details.html">Ipad 2019 6th Gen 64GB
                                                                Memory</a>
                                                        </h6>
                                                        <div
                                                            class="rating d-sm-flex d-lg-block d-xl-flex align-items-center">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                            <div class="product-review-action ml-30">
                                                                <span><a href="#">2 Reviews</a></span>
                                                                <span><a href="#">Add Your Review</a></span>
                                                            </div>
                                                        </div>
                                                        <span class="price">$500.00</span>
                                                        <p class="product-text">Typi non habent claritatem insitam, est
                                                            usus legentis in iis qui facit eorum claritatem.
                                                            Investigationes demonstraverunt lectores legere me lius quod
                                                            ii legunt saepius. Claritas est etiam processus. Lorem Ipsum
                                                            has been the industry's standard dummy text ever since the
                                                            1500s, when anunknown printer took a galley </p>
                                                        <div class="product__list-features">
                                                            <ul>
                                                                <li>Light green crewneck sweatshirt.</li>
                                                                <li>Hand pockets.</li>
                                                                <li>Relaxed fit.</li>
                                                                <li>Machine wash/dry.</li>
                                                            </ul>
                                                        </div>
                                                        <div
                                                            class="product__action product__action-list d-sm-flex d-lg-block d-xl-flex align-items-center">
                                                            <button class="t-y-btn mr-10">add to cart</button>
                                                            <ul>
                                                                <li><a href="#" title="Add to Wishlist"><i
                                                                            class="fal fa-heart"></i></a></li>
                                                                <li><a href="#" title="Compare"><i
                                                                            class="far fa-sliders-h"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product__item product__list white-bg mb-30 d-md-flex">
                                                    <div class="product__thumb p-relative mr-20">
                                                        <a href="product-details.html" class="w-img">
                                                            <img src="assets/img/shop/product/product-3.jpg"
                                                                alt="product">
                                                            <img class="second-img"
                                                                src="assets/img/shop/product/product-4.jpg"
                                                                alt="product">
                                                        </a>
                                                    </div>
                                                    <div class="product__content">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link"
                                                                href="product-details.html">Samsung Note 5 Pro, 4.5Ghz
                                                                CPU </a>
                                                        </h6>
                                                        <div
                                                            class="rating d-sm-flex d-lg-block d-xl-flex align-items-center">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                            <div class="product-review-action ml-30">
                                                                <span><a href="#">2 Reviews</a></span>
                                                                <span><a href="#">Add Your Review</a></span>
                                                            </div>
                                                        </div>
                                                        <span class="price">$240.00</span>
                                                        <p class="product-text">Typi non habent claritatem insitam, est
                                                            usus legentis in iis qui facit eorum claritatem.
                                                            Investigationes demonstraverunt lectores legere me lius quod
                                                            ii legunt saepius. Claritas est etiam processus. Lorem Ipsum
                                                            has been the industry's standard dummy text ever since the
                                                            1500s, when anunknown printer took a galley </p>
                                                        <div class="product__list-features">
                                                            <ul>
                                                                <li>Light green crewneck sweatshirt.</li>
                                                                <li>Hand pockets.</li>
                                                                <li>Relaxed fit.</li>
                                                                <li>Machine wash/dry.</li>
                                                            </ul>
                                                        </div>
                                                        <div
                                                            class="product__action product__action-list d-sm-flex d-lg-block d-xl-flex align-items-center">
                                                            <button class="t-y-btn mr-10">add to cart</button>
                                                            <ul>
                                                                <li><a href="#" title="Add to Wishlist"><i
                                                                            class="fal fa-heart"></i></a></li>
                                                                <li><a href="#" title="Compare"><i
                                                                            class="far fa-sliders-h"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product__item product__list white-bg mb-30 d-md-flex">
                                                    <div class="product__thumb p-relative mr-20">
                                                        <a href="product-details.html" class="w-img">
                                                            <img src="assets/img/shop/product/product-5.jpg"
                                                                alt="product">
                                                            <img class="second-img"
                                                                src="assets/img/shop/product/product-6.jpg"
                                                                alt="product">
                                                        </a>
                                                    </div>
                                                    <div class="product__content">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link" href="product-details.html">TF
                                                                Camera Clock Support Bt 4.0 for Ios</a>
                                                        </h6>
                                                        <div
                                                            class="rating d-sm-flex d-lg-block d-xl-flex align-items-center">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                            <div class="product-review-action ml-30">
                                                                <span><a href="#">2 Reviews</a></span>
                                                                <span><a href="#">Add Your Review</a></span>
                                                            </div>
                                                        </div>
                                                        <span class="price">$120.00</span>
                                                        <p class="product-text">Typi non habent claritatem insitam, est
                                                            usus legentis in iis qui facit eorum claritatem.
                                                            Investigationes demonstraverunt lectores legere me lius quod
                                                            ii legunt saepius. Claritas est etiam processus. Lorem Ipsum
                                                            has been the industry's standard dummy text ever since the
                                                            1500s, when anunknown printer took a galley </p>
                                                        <div class="product__list-features">
                                                            <ul>
                                                                <li>Light green crewneck sweatshirt.</li>
                                                                <li>Hand pockets.</li>
                                                                <li>Relaxed fit.</li>
                                                                <li>Machine wash/dry.</li>
                                                            </ul>
                                                        </div>
                                                        <div
                                                            class="product__action product__action-list d-sm-flex d-lg-block d-xl-flex align-items-center">
                                                            <button class="t-y-btn mr-10">add to cart</button>
                                                            <ul>
                                                                <li><a href="#" title="Add to Wishlist"><i
                                                                            class="fal fa-heart"></i></a></li>
                                                                <li><a href="#" title="Compare"><i
                                                                            class="far fa-sliders-h"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product__item product__list white-bg mb-30 d-md-flex">
                                                    <div class="product__thumb p-relative mr-20">
                                                        <a href="product-details.html" class="w-img">
                                                            <img src="assets/img/shop/product/product-7.jpg"
                                                                alt="product">
                                                            <img class="second-img"
                                                                src="assets/img/shop/product/product-8.jpg"
                                                                alt="product">
                                                        </a>
                                                    </div>
                                                    <div class="product__content">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link"
                                                                href="product-details.html">Original Mobile Android Dual
                                                                SIM Smart Phone</a>
                                                        </h6>
                                                        <div
                                                            class="rating d-sm-flex d-lg-block d-xl-flex align-items-center">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                            <div class="product-review-action ml-30">
                                                                <span><a href="#">2 Reviews</a></span>
                                                                <span><a href="#">Add Your Review</a></span>
                                                            </div>
                                                        </div>
                                                        <span class="price">$90.00</span>
                                                        <p class="product-text">Typi non habent claritatem insitam, est
                                                            usus legentis in iis qui facit eorum claritatem.
                                                            Investigationes demonstraverunt lectores legere me lius quod
                                                            ii legunt saepius. Claritas est etiam processus. Lorem Ipsum
                                                            has been the industry's standard dummy text ever since the
                                                            1500s, when anunknown printer took a galley </p>
                                                        <div class="product__list-features">
                                                            <ul>
                                                                <li>Light green crewneck sweatshirt.</li>
                                                                <li>Hand pockets.</li>
                                                                <li>Relaxed fit.</li>
                                                                <li>Machine wash/dry.</li>
                                                            </ul>
                                                        </div>
                                                        <div
                                                            class="product__action product__action-list d-sm-flex d-lg-block d-xl-flex align-items-center">
                                                            <button class="t-y-btn mr-10">add to cart</button>
                                                            <ul>
                                                                <li><a href="#" title="Add to Wishlist"><i
                                                                            class="fal fa-heart"></i></a></li>
                                                                <li><a href="#" title="Compare"><i
                                                                            class="far fa-sliders-h"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product__item product__list white-bg mb-30 d-md-flex">
                                                    <div class="product__thumb p-relative mr-20">
                                                        <a href="product-details.html" class="w-img">
                                                            <img src="assets/img/shop/product/product-9.jpg"
                                                                alt="product">
                                                            <img class="second-img"
                                                                src="assets/img/shop/product/product-8.jpg"
                                                                alt="product">
                                                        </a>
                                                    </div>
                                                    <div class="product__content">
                                                        <h6 class="product-name">
                                                            <a class="product-item-link"
                                                                href="product-details.html">Original Smart Phone for
                                                                Original for iPhone 6s</a>
                                                        </h6>
                                                        <div
                                                            class="rating d-sm-flex d-lg-block d-xl-flex align-items-center">
                                                            <ul>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                            <div class="product-review-action ml-30">
                                                                <span><a href="#">2 Reviews</a></span>
                                                                <span><a href="#">Add Your Review</a></span>
                                                            </div>
                                                        </div>
                                                        <span class="price">$59.00</span>
                                                        <p class="product-text">Typi non habent claritatem insitam, est
                                                            usus legentis in iis qui facit eorum claritatem.
                                                            Investigationes demonstraverunt lectores legere me lius quod
                                                            ii legunt saepius. Claritas est etiam processus. Lorem Ipsum
                                                            has been the industry's standard dummy text ever since the
                                                            1500s, when anunknown printer took a galley </p>
                                                        <div class="product__list-features">
                                                            <ul>
                                                                <li>Light green crewneck sweatshirt.</li>
                                                                <li>Hand pockets.</li>
                                                                <li>Relaxed fit.</li>
                                                                <li>Machine wash/dry.</li>
                                                            </ul>
                                                        </div>
                                                        <div
                                                            class="product__action product__action-list d-sm-flex d-lg-block d-xl-flex align-items-center">
                                                            <button class="t-y-btn mr-10">add to cart</button>
                                                            <ul>
                                                                <li><a href="#" title="Add to Wishlist"><i
                                                                            class="fal fa-heart"></i></a></li>
                                                                <li><a href="#" title="Compare"><i
                                                                            class="far fa-sliders-h"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xxl-12">
                                        <div class="basic-pagination pt-30 pb-30">
                                            <nav>
                                                <ul>
                                                    <li>
                                                        <a href="blog.html">
                                                            <i class="fal fa-chevron-double-left"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="blog.html">1</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog.html" class="active">2</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog.html">3</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog.html">
                                                            <i class="fal fa-chevron-double-right"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
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













        <!-- subscribe area start -->
        <section class="subscribe__area pt-35 pb-30">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="subscribe__content d-sm-flex align-items-center">
                            <div class="subscribe__icon mr-25">
                                <img src="assets/img/icon/icon_email.png" alt="">
                            </div>
                            <div class="subscribe__text">
                                <h4>Sign up to Newsletter</h4>
                                <p>Get email updates about our latest shop...and receive <span>$30 Coupon For First
                                        Shopping</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="subscribe__form f-right">
                            <form action="#">
                                <input type="email" placeholder="Enter your email here...">
                                <button class="t-y-btn t-y-btn-sub">subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subscribe area end -->

        <!-- back to top btn area start -->
        <section class="back-btn-top">
            <div class="container-fluid p-0">
                <div class="row gx-0">
                    <div class="col-xl-12">
                        <div id="scroll" class="back-to-top-btn text-center">
                            <a href="javascript:void(0);">back to top</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- back to top btn area end -->



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
                                        <h4><a
                                                href="<?php echo "singleProductView.php?id=" . $product_data["product_id"]; ?>"><?php echo $product_data["name"];?></a>
                                        </h4>
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
        <div class="footer__area footer-bg">
            <div class="footer__top pt-80 pb-40">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-12">
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
                                                <div class="footer__hotline d-flex align-items-center mb-30">
                                                    <div class="icon mr-15">
                                                        <i class="fal fa-headset"></i>
                                                    </div>
                                                    <div class="text">
                                                        <h4>Hotline Free 24/24:</h4>
                                                        <span><a href="tel:100-123-456-7890">(+100) 123 456
                                                                7890</a></span>
                                                    </div>
                                                </div>
                                                <div class="footer__info">
                                                    <ul>
                                                        <li>
                                                            <span>Add: <a target="_blank"
                                                                    href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">Walls
                                                                    Street 68, Mahattan, New York, USA</a></span>
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
                                                    <div class="footer__widget-title">
                                                        <h4>Information</h4>
                                                    </div>
                                                    <div class="footer__widget-content">
                                                        <div class="footer__link">
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
                                                    <div class="footer__widget-title">
                                                        <h4>Our Services</h4>
                                                    </div>
                                                    <div class="footer__widget-content">
                                                        <div class="footer__link">
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
                        <div class="col-xl-5 col-lg-12">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="footer__widget">
                                        <div class="footer__widget-title">
                                            <h4>My Account</h4>
                                        </div>
                                        <div class="footer__widget-content">
                                            <div class="footer__link">
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
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="footer__widget">
                                        <div class="footer__widget-title">
                                            <h4>Payment & Shipping</h4>
                                        </div>
                                        <div class="footer__widget-content">
                                            <div class="footer__link">
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
                    </div>
                </div>
            </div>
            <div class="footer__bottom pt-60 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="footer__links text-center">
                                <p>
                                    <a href="#">Air Conditioners</a>
                                    <a href="#">Audios & Theaters</a>
                                    <a href="#">Car Electronics</a>
                                    <a href="#">Office Electronics</a>
                                    <a href="#">TV Televisions</a>
                                    <a href="#">Washing Machines</a>
                                </p>
                                <p>
                                    <a href="#">Cookware</a>
                                    <a href="#">Decoration</a>
                                    <a href="#">Furniture </a>
                                    <a href="#">Garden Tools</a>
                                    <a href="#">Garden Equipments</a>
                                    <a href="#">Powers And Hand Tools </a>
                                    <a href="#">Utensil & Gadget </a>
                                    <a href="#">Printers</a>
                                    <a href="#">Projectors</a>
                                    <a href="#">Scanners</a>
                                    <a href="#">Store</a>
                                    <a href="#">Business</a>
                                </p>
                                <p>
                                    <a href="#">4K Ultra</a>
                                    <a href="#"> HD TVs </a>
                                    <a href="#">LED TVs</a>
                                    <a href="#">OLED TVs</a>
                                    <a href="#">Desktop</a>
                                    <a href="#">PC</a>
                                    <a href="#">Laptop</a>
                                    <a href="#">Smartphones</a>
                                    <a href="#">Tablet</a>
                                    <a href="#">Game Controller</a>
                                    <a href="#">Audio & Video</a>
                                    <a href="#"> Wireless Speaker</a>
                                    <a href="#">Drone</a>
                                </p>
                            </div>
                            <div class="footer__download text-center">
                                <h4>Download The App - Get 30% Sale Coupon</h4>
                                <a href="#" class="m-img"><img src="assets/img/icon/app-store.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__copyright pt-30 pb-35 footer-bottom-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6">
                            <div class="footer__copyright-text">
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
    <script src="assets/js/jquery-ui-slider-range.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="script.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>