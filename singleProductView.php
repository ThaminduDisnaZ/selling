<?php
require "connection.php";




if (isset($_GET["id"])) {

    $pid = $_GET["id"];
    $product_rsz = Database::search("SELECT
     * FROM `product` WHERE 
     product_id='" . $pid . "'");
    $product_dataz = $product_rsz->fetch_assoc();





?>


    <!doctype html>
    <html class="no-js" lang="zxx">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $product_dataz["name"]; ?> | Net Pixel</title>
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
                                            <?php echo $product_dataz["name"]; ?></li>
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
                                <ul class="nav nav-tabs flex-sm-column justify-content-between mr-20" id="productThumbTab" role="tablist">



                                    <?php

                                    $image_rs = Database::search("SELECT * 
                                    FROM `images` WHERE
                                     `product_id`='" . $pid . "'");
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
                                                <button class="m-3 nav-link border-bottom border-warning <?php echo ($class); ?>" id="<?php echo ($thumb); ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo ($thumb); ?>" type="button" role="tab" aria-controls="thumbOne" aria-selected="<?php echo ($aria); ?>">
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



                                            <div class="tab-pane fade<?php echo ($class2); ?>" id="<?php echo ($thumb); ?>" role="tabpanel" aria-labelledby="<?php echo ($thumb); ?>-tab">
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
                                        <a href="product-details.html"><?php echo ($product_dataz["name"]); ?></a>
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
                                        if ($product_dataz["discount"] > 0) {
                                        ?>
                                            <span class="new">Rs.<?php echo ($product_dataz["dprice"])  ?>.00</span>
                                            <span class="old">Rs.<?php echo ($product_dataz["price"])  ?>.00</span>
                                        <?php
                                        } else {
                                        ?> <span class="new">Rs.<?php echo ($product_dataz["price"])  ?>.00</span><?php
                                                                                                                }

                                                                                                                    ?>



                                    </div>
                                    <div class="product__stock">
                                        <span>Availability :</span>

                                        <?php

                                        if ($product_dataz["qty"] > 0) {
                                        ?> <span class="text-success">In Stock</span> <?php
                                                                                    } else {
                                                                                        ?> <span class="text-danger">Out Of Stock</span> <?php
                                                                                                                                        }


                                                                                                                                            ?>



                                    </div>
                                    <div class="product__stock sku mb-30">
                                        <span>SKU:</span>
                                        <span><a href="#"><?php echo ($product_dataz["stitle"]); ?></a></span>
                                    </div>
                                    <div class="product__details-des mb-30">

                                        <p></p>

                                        <div class="product__details-stock">
                                            <h3>



                                                <?php

                                                if ($product_dataz["qty"] > 0) {
                                                ?> <span>Hurry Up!</span> Only <?php echo ($product_dataz["qty"]); ?> products
                                                    left in stock.</h3><?php
                                                                    } else {
                                                                        ?> <span>How Sad</span> This Laptop is Sold out</h3><?php
                                                                                                    }


                                                                                                        ?>


                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" data-width="100%"></div>
                                        </div>
                                        </div>
                                        <div class="product__details-quantity mb-20">

                                            <div class="pro-quan-area d-lg-flex align-items-center">
                                                <div class="product-quantity mr-20 mb-25">
                                                    <div class="cart-plus-minus p-relative"><input id="pqty" type="text" value="1" />
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


                        <div class="container table-responsive py-5">
                            <table class="table table-bordered table-hover">

                                <tbody>

                                    <?php

                                    $brsss = Database::search(" SELECT
                                     * FROM `brand` WHERE
                                      `brand_id` = 
                                      '" . $product_dataz["brand_id"] . "' ");
                                    $bfass = $brsss->fetch_assoc();

                                    ?>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Brand</td>
                                        <td><?php echo ($bfass["brand"]) ?></td>


                                    </tr>
                                    <?php

                                    $model = Database::search(" SELECT
                                     * FROM `model` WHERE 
                                     `model_id` = '" . $product_dataz["model_id"] . "' ");
                                    $modeld = $model->fetch_assoc();

                                    ?>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Model</td>
                                        <td><?php echo ($modeld["model"]) ?></td>

                                    </tr>
                                    <?php

                                    $categoryz = Database::search(" SELECT
                                     * FROM `category` WHERE
                                      `category_id` = '" . $product_dataz["category_id"] . "' ");
                                    $categoryd = $categoryz->fetch_assoc();

                                    ?>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Category</td>
                                        <td><?php echo ($categoryd["category"]) ?></td>

                                    </tr>
                                    <?php

                                    $cpuz = Database::search(" SELECT
                                     * FROM `cpu` WHERE
                                      `cpu_id` = '" . $product_dataz["cpu_id"] . "' ");
                                    $cpud = $cpuz->fetch_assoc();

                                    ?>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>CPU</td>
                                        <td><?php echo ($cpud["cpu"]) ?></td>

                                    </tr>

                                    <?php

                                    $displayz = Database::search(" SELECT
                                     * FROM `display` WHERE
                                      `display_id` = '" . $product_dataz["display_id"] . "' ");
                                    $displayd = $displayz->fetch_assoc();

                                    ?>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Display</td>
                                        <td><?php echo ($displayd["display"]) ?></td>

                                    </tr>

                                    <?php

                                    $gpuz = Database::search(" SELECT
                                     * FROM `gpu` WHERE `gpu_id`
                                      = '" . $product_dataz["gpu_id"] . "' ");
                                    $gpud = $gpuz->fetch_assoc();

                                    ?>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>GPU</td>
                                        <td><?php echo ($gpud["gpu"]) ?></td>

                                    </tr>

                                    <?php

                                    $ramz = Database::search(" SELECT
                                     * FROM `ram` WHERE `ram_id`
                                      = '" . $product_dataz["ram_id"] . "' ");
                                    $ramd = $ramz->fetch_assoc();

                                    ?>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td>Ram</td>
                                        <td><?php echo ($ramd["ram"]) ?></td>

                                    </tr>

                                    <?php

                                    $sizez = Database::search(" SELECT* FROM `size` WHERE `size_id` = '" . $product_dataz["size_id"] . "' ");
                                    $sized = $sizez->fetch_assoc();

                                    ?>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td>Size</td>
                                        <td><?php echo ($sized["size"]) ?></td>

                                    </tr>

                                    <?php

                                    $storagez = Database::search(" SELECT
                                     * FROM `storage` WHERE 
                                     `storage_id` = '" . $product_dataz["storage_id"] . "' ");
                                    $storaged = $storagez->fetch_assoc();

                                    ?>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td>Storage</td>
                                        <td><?php echo ($storaged["storage"]) ?></td>

                                    </tr>

                                    <?php

                                    $warrantyz = Database::search(" SELECT
                                     * FROM `warranty` WHERE
                                      `warranty_id` = '" . $product_dataz["warranty_id"] . "' ");
                                    $warrantyd = $warrantyz->fetch_assoc();

                                    ?>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td>Warranty</td>
                                        <td><?php echo ($warrantyd["warranty"]) ?></td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>



                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="product__details-des-tab mb-40 mt-110">
                                    <ul class="nav nav-tabs" id="productDesTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="des-tab" data-bs-toggle="tab" data-bs-target="#des" type="button" role="tab" aria-controls="des" aria-selected="true">Details</button>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="tab-content" id="prodductDesTaContent">
                                    <div class="tab-pane fade show active" id="des" role="tabpanel" aria-labelledby="des-tab">
                                        <div class="product__details-des-wrapper">
                                            <div class="product__details-des mb-20">

                                                <?php echo ($product_dataz["discription"]) ?>


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

                                $product_rs = Database::search("SELECT*FROM `product`WHERE 
`bestsell_id`='1'ORDER BY `date`");
                                $product_num = $product_rs->num_rows;

                                for ($z = 0; $z < $product_num; $z++) {
                                    $product_dataz = $product_rs->fetch_assoc();



                                    $image_rs = Database::search("SELECT*FROM `images`WHERE `product_id`='" . $product_dataz["product_id"] . "'");
                                    $image_data = $image_rs->fetch_assoc();

                                ?>

                                    <div class="product__item white-bg">
                                        <div class="product__thumb p-relative">
                                            <a href="<?php echo "singleProductView.php?id=" . $product_dataz["product_id"]; ?>" class="w-img">
                                                <img src="admin/<?php echo $image_data["code"]; ?>" alt="product">

                                            </a>
                                            <div class="product__action p-absolute">
                                                <ul>
                                                    <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                    <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>

                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__content text-center">
                                            <span class="price"><?php echo $product_dataz["name"]; ?>
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.html">#<?php echo $product_dataz["stitle"]; ?></a>
                                                </h6>



                                                <?php

                                                if ($product_dataz["qty"] > 0) {
                                                ?>

                                                    <p class="text-success"><?php echo $product_dataz["qty"] ?> In Stock</p>

                                                <?php
                                                } else {
                                                ?>
                                                    <p class="text-danger">Out of Stock</p>
                                                <?php
                                                }



                                                ?>


                                                <?php
                                                if ($product_dataz["discount"] > 0) {
                                                ?>
                                                    <p>
                                                        <span class="price ">Rs.<s>
                                                                <?php echo $product_dataz["price"]; ?>.00</s></span>
                                                    </p>
                                                    <span class="price">Rs.<?php echo $product_dataz["dprice"]; ?>.00</span>
                                                <?php
                                                } else {
                                                ?>
                                                    <br>
                                                    <span class="price">Rs.<?php echo $product_dataz["price"]; ?>.00</span>

                                                <?php
                                                }
                                                ?>

                                        </div>
                                        <div class="product__add-btn">
                                            <button type="button" onclick="addToCart(<?php echo $product_dataz['product_id']; ?>);">Add to
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



        </main>

        <!-- footer area start -->
        <?php include "footer.php" ?>
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


?>