<?php
require_once "./connection.php";

?>
<?php $titlewindow = "User Profile";

?>






<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>User Profile</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link rel="stylesheet" href="assets/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/assets/css/vendor/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="assets/assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="assets/assets/css/vendor/themify-icons.css">
    <link rel="stylesheet" href="assets/assets/css/vendor/cryptocurrency-icons.css">
    <link rel="stylesheet" href="assets/assets/css/plugins/plugins.css">
    <link rel="stylesheet" href="assets/assets/css/helper.css">
    <link rel="stylesheet" href="assets/assets/css/style.css">
    <link id="cus-style" rel="stylesheet" href="assets/assets/css/style-primary.css">
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


    <style>
        @keyframes blink {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        h2.blink {
            animation: blink 1s infinite;
        }
    </style>

</head>

<div class="main-wrapper">

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
    require "heder.php";
    ?>

    <!-- Content Body Start -->
    <div class="content-body">
        <?php if (isset($_SESSION["u"])) {

            $uid = $_SESSION["u"]["user_id"];


        ?>
            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Your Profile</h3>
                    </div>
                </div><!-- Page Heading End -->

            </div><!-- Page Headings End -->

            <div class="row mbn-50">

                <!--Author Top Start-->
                <div class="col-12 mb-50">
                    <div class="author-top">
                        <div class="inner">
                            <div class="author-profile">
                                <div class="image">

                                    <?php

                                    $urs = Database::search(" SELECT * FROM `user` WHERE `user_id`  = '" . $uid . "' ");
                                    $udata = $urs->fetch_assoc();

                                    $irs = Database::search(" SELECT * FROM `user_img` WHERE `user_id` = '" . $uid . "' ");
                                    $idata = $irs->fetch_assoc();
                                    $inum = $irs->num_rows;



                                    if ($inum == NULL) {
                                    ?>
                                        <img src="resources\user-profile-images\user-image.jpg" class="" alt="" id="viewimg">
                                    <?php
                                    } else {
                                    ?>
                                        <img src="<?php echo $idata["path"]; ?>" class="" alt="" id="viewimg">
                                    <?php
                                    }
                                    ?>

                                    <label for="profileimg" onclick="changeImage();" class="edit">Change Profile
                                        Picture</label>
                                    <input type="file" id="profileimg" class="d-none" accept="image/*">

                                </div>
                                <div class="info">
                                    <h5><?php echo ($udata["fname"]) ?> <?php echo ($udata["lname"]) ?></h5>
                                    <span><b><?php echo ($udata["email"]) ?></b></span>
                                    <a href="#" class="edit"><i class="zmdi zmdi-edit"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Author Top End-->

                <!--Timeline / Activities Start-->
                <div class="col-xlg-8 col-12 mb-50">
                    <div class="box">

                        <div class="box-head">
                            <h3 class="title">Your Details</h3>
                        </div>

                        <div class="box-body">

                            <div class="timeline-wrap row mbn-50">


                                <div class="col-12 mb-50">
                                    <ul class="timeline-list">

                                        <li>
                                            <span class="icon"><i class="zmdi zmdi-email"></i></span>
                                            <div class="details">
                                                <h5 class="title"><a href="#">Your Email</a></h5>
                                                <div class="content">
                                                    <p><b><?php echo ($udata["email"]) ?></b></p>
                                                </div>

                                                <?php if ($udata["uev_id"] == 1) {
                                                ?> <span class="time text-success zmdi zmdi-check-square"> Your Email
                                                        is Verified</span>
                                                <?php
                                                } else {
                                                ?>
                                                    <span class="time text-danger zmdi zmdi-close-circle"> Your Email is Not
                                                        Verify</span> <br> <button onclick="emailverify();" class="t-y-btn t-y-btn-close">Verify Your Email</button>
                                                <?php
                                                }
                                                ?>
                                                <span class="time"></span>



                                            </div>
                                        </li>
                                        <?php
                                        $crs = Database::search("SELECT * FROM `city` WHERE `city_id` = '" . $udata["city_id"] . "' ");
                                        $cdata = $crs->fetch_assoc();
                                        ?>
                                        <li>
                                            <span class="icon"><i class="zmdi zmdi-home"></i></span>
                                            <div class="details">
                                                <h5 class="title"><a href="#">Your Addressing Details</a></h5>
                                                <div class="content">

                                                    <?php
                                                    if ($udata["no"] == null || $udata["street"] == null) {
                                                    ?><p><b>NO ADDRESS UPDATED. PLEASE UPDATE</b></p><?php
                                                                                                    } else {
                                                                                                        ?>

                                                        <p><b><?php echo ($udata["no"]) ?>,</b></p>
                                                        <p><b><?php echo ($udata["street"]) ?>,</b></p>
                                                        <p><b><?php echo ($cdata["name"]) ?>.</b></p>
                                                        <br>

                                                    <?php


                                                                                                    }

                                                    ?>


                                                    <p><b>T.P :-</b> <?php echo ($udata["mobile"]) ?></p>
                                                </div>

                                            </div>
                                        </li>

                                        <li>
                                            <span class="icon"><i class="zmdi zmdi-receipt"></i></span>
                                            <div class="details">
                                                <h5 class="title"><a href="#">Your Orders</a></h5>
                                                <div class="content">

                                                    <?php
                                                    $ors = Database::search("SELECT * FROM `orders` WHERE `user_id` = '" . $uid . "' ");
                                                    $onr = $ors->num_rows;
                                                    if ($onr >= 1) {
                                                        while ($odata = $ors->fetch_assoc()) {


                                                            $product_data1 = Database::search("SELECT * FROM `product` WHERE `product_id` = '" . $odata["product_id"] . "' ");
                                                            $prs = $product_data1->fetch_assoc();

                                                            $product_img = Database::search("SELECT * FROM `images` WHERE `product_id` = '" . $prs["product_id"] . "' ");
                                                            $pimg = $product_img->fetch_assoc();



                                                    ?>

                                                            <!--Basic Example Start-->
                                                            <div class="col-lg-6 col-12 mb-30">
                                                                <div class="box">

                                                                    <div class="box-body">
                                                                        <div class="d-flex">
                                                                            <div class="flex-shrink-0">
                                                                                <img width="45px" src="admin/<?php echo $pimg["code"] ?>" alt="...">
                                                                            </div>
                                                                            <div class="flex-grow-1 ms-3">
                                                                                <h6 class="mt-0"><?php echo $prs["stitle"] ?></h6>


                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--Basic Example End-->

                                                    <?php

                                                        }
                                                    } else {

                                                        echo ("Not Orders");
                                                    }



                                                    ?>







                                                </div>

                                            </div>
                                        </li>

                                    </ul>
                                </div>

                                

                            </div>

                        </div>

                    </div>
                </div>
                <!--Timeline / Activities End-->

                <!--Right Sidebar Start-->
                <div class="col-xlg-4 col-12 mb-50">
                    <div class="row mbn-30">

                        <!--Author Information Start-->
                        <div class="col-xlg-12 col-lg-6 col-12 mb-30">
                            <div class="box">
                                <div class="box-head">
                                    <h3 class="title">Your Information</h3>
                                </div>
                                <div class="box-body">
                                    <div class="form">
                                        <?php
                                        $crs = Database::search("SELECT * FROM `city` WHERE `city_id` = '" . $udata["city_id"] . "' ");
                                        $cdata = $crs->fetch_assoc();
                                        ?>
                                        <div class="row row-10 mbn-20">
                                            <p class="text-center"><b>Name</b></p>
                                            <div class="col-sm-6 col-12 mb-20"><input id="fname" type="text" class="form-control" value="<?php echo ($udata["fname"]) ?>"></div>
                                            <div class="col-sm-6 col-12 mb-20"><input id="lname" type="text" class="form-control" value="<?php echo ($udata["lname"]) ?>"></div>
                                            <p class="text-center"><b>Mobile</b></p>
                                            <div class=" col-12 mb-20"><input id="mobile" type="text" class="form-control input-date-single" value="<?php echo ($udata["mobile"]) ?>"></div>
                                            <p class="text-center"><b>Address</b></p>
                                            <div class=" col-12 mb-20"><input id="no" type="text" class="form-control input-date-single" value="<?php echo ($udata["no"]) ?>"></div>
                                            <div class=" col-12 mb-20"><input id="street" type="text" class="form-control input-date-single" value="<?php echo ($udata["street"]) ?>"></div>

                                            <div class=" col-12 mb-20"><select name="City" class="form-control input-date-single" id="city">

                                                    <?php

                                                    if ($cdata["city_id"] == NULL) {
                                                    ?><option value="0">Selet Your City</option><?php
                                                                                                } else {

                                                                                                    ?>



                                                        <option value="<?php echo ($cdata["city_id"]) ?>">
                                                            <?php echo ($cdata["name"]) ?></option>




                                                    <?php

                                                                                                }
                                                                                                $crs1 = Database::search("SELECT * FROM `city` ");

                                                                                                while ($cdata1 = $crs1->fetch_assoc()) {
                                                    ?>
                                                        <option value="<?php echo ($cdata1["city_id"]) ?>">
                                                            <?php echo ($cdata1["name"]) ?></option>
                                                    <?php
                                                                                                }

                                                    ?>


                                                </select></div>
                                            <p class="text-center"><b>Password</b></p>

                                            <div class="col-12 mb-20"><input id="opword" type="password" class="form-control" placeholder="Old Password"></div>
                                            <div class="col-12 mb-20"><input id="npword" type="password" class="form-control" placeholder="New Password"></div>
                                            <div class="col-12 mb-20"><input id="cpword" type="password" class="form-control" placeholder="Comfirm New Password"></div>
                                            <div class="col-12 mt-10 mb-20">


                                                <button onclick="updateProfile();" class="button button-primary button-outline">Save Changes</button>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--Author Information End-->

                       


                    </div>
                </div>
                <!--Right Sidebar End-->

            </div>



        <?php } else {

        ?>


            <section class="error__area pt-60 pb-100">
                <div class="container">
                    <div class="col-xl-8 offset-xl-2 col-lg-8 offset-lg-2">
                        <div class="error__content text-center">
                            <div class="error__number">

                            </div>
                            <span>user not found</span>
                            <h2>Please Login First</h2>

                            <div class="error__search">


                                <a href="login.php" class="t-y-btn t-y-btn-grey">Login</a>

                            </div>
                        </div>
                    </div>
                </div>
            </section>



        <?php

        } ?>
    </div><!-- Content Body End -->





</div>
<!--end wrapper-->



<!-- Global Vendor, plugins & Activation JS -->
<script src="assets/assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="assets/assets/js/vendor/jquery-3.3.1.min.js"></script>
<script src="assets/assets/js/vendor/popper.min.js"></script>
<script src="assets/assets/js/vendor/bootstrap.min.js"></script>
<!--Plugins JS-->
<script src="assets/assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="assets/assets/js/plugins/tippy4.min.js.js"></script>
<!--Main JS-->
<script src="assets/assets/js/main.js"></script>

<!-- Plugins & Activation JS For Only This Page -->
<script src="assets/assets/js/plugins/moment/moment.min.js"></script>
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