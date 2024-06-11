<?php

session_start();

if (isset($_SESSION["a"])) {



    $uid = $_GET["id"];




?>




    <!doctype html>
    <html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>User Details | Net Pixel </title>
        <meta name="robots" content="noindex, follow" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

        <!-- CSS
	============================================ -->

        
        <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">

        <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">

        
        <link rel="stylesheet" href="assets/css/vendor/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/vendor/themify-icons.css">
        <link rel="stylesheet" href="assets/css/vendor/cryptocurrency-icons.css">

        
        <link rel="stylesheet" href="assets/css/plugins/plugins.css">

        
        <link rel="stylesheet" href="assets/css/helper.css">

        
        <link rel="stylesheet" href="assets/css/style.css">

        
        <link id="cus-style" rel="stylesheet" href="assets/css/style-primary.css">

    </head>

    <body class="skin-dark" onload="loading();">

        <div class="main-wrapper">



            <?php
            require "adminHeader.php";
            ?>



            <?php

            require "sideheader.php";

            ?>


            <div class="content-body">


                <?php




                $userrs = Database::search(" SELECT * FROM `user` WHERE `user_id` = '" . $uid . "' ");
                $udata = $userrs->fetch_assoc();

                $cityrs = Database::search("SELECT * FROM `city` WHERE `city_id` = '" . $udata["city_id"] . "' ");
                $citydata = $cityrs->fetch_assoc();

                $recentrs = Database::search("SELECT * FROM `recent` WHERE `user_id` = '" . $udata["user_id"] . "' ORDER BY `recent_id` DESC LIMIT 10 ");
                $recentdata = $recentrs->fetch_assoc();
                $recentnum = $recentrs->num_rows;

                $productrs = Database::search(" SELECT * FROM `Product` ");
                $productdata = $productrs->fetch_assoc();

                $orderrs = Database::search(" SELECT * FROM `orders` WHERE `user_id` = '" . $uid . "'  ");
                $orderdata = $orderrs->fetch_assoc();

                $cartrs = Database::search(" SELECT * FROM `cart` WHERE `user_id` = '" . $uid . "' ");

                $cartnum = $cartrs->num_rows;

                $statusrs = Database::search(" SELECT * FROM `user_status` WHERE `status_id` = '" . $udata["status_id"] . "' ");
                $statusdata = $statusrs->fetch_assoc();


                ?>





                
                <div class="row justify-content-between align-items-center mb-10">

                    
                    <div class="col-12 col-lg-auto mb-20">
                        <div class="page-heading">
                            <h3>User Profile | ID:-<?php echo ($uid); ?></h3>
                        </div>
                    </div>

                </div>

                <div class="row mbn-50">

                    
                    <div class="col-12 mb-50">
                        <div class="author-top">
                            <div class="inner">
                                <div class="author-profile">
                                    <div class="image">
                                        <img src="assets/images/avatar/profile.jpg" class="d-none" alt="">
                                        <h2>MH</h2>
                                        <button class="edit"><i class="zmdi zmdi-cloud-upload"></i>Change Image</button>
                                    </div>
                                    <div class="info">
                                        <h5><?php echo ($udata["fname"]); ?> <?php echo ($udata["lname"]); ?></h5>
                                        <span><?php echo ($udata["email"]); ?></span>
                                        <h5 >User Status</h5><br>
<?php

if ($statusdata["status_id"] == 1 ) {
   ?>
   <button class="button button-round button-success" id="uub" onclick="ubb(<?php echo($uid) ?>);"><span id="uub2"></span>Active</button>
   <?php
} else if($statusdata["status_id"] == 2) {
    ?>
   <button class="button button-round button-danger" id="uub" onclick="ubb(<?php echo($uid) ?>);"><span id="uub2"></span>Blocked</button>
   <?php
}else{
    ?>
    <button class="button button-round button-danger" id="uub" onclick="ubb(<?php echo($uid) ?>);"><span id="uub2"></span>Something Went Wrong</button>
    <?php
}


?>

                                        <a href="#" class="edit"><i class="zmdi zmdi-edit"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    
                    <div class="col-xlg-8 col-12 mb-50">
                        <div class="box">

                            <div class="box-head">
                                <h3 class="title">Details</h3>

                            </div>

                            <div class="box-body">

                                <div class="timeline-wrap row mbn-50">


                                    <div class="col-12 mb-50">
                                        <ul class="timeline-list">

                                            <li>
                                                <span class="icon"><i class="zmdi zmdi-email"></i></span>
                                                <div class="details">
                                                    <h5 class="title">Email Address</h5>
                                                    <div class="content">
                                                        <h6><?php echo ($udata["email"]) ?></h6>
                                                        <p>Email Verification Status :- <?php
                                                                                        if ($udata["uev_id"] == 1) {
                                                                                        ?><span class="text-success">Email has been Verified</span><?php
                                                                                                                                                } else {
                                                                                                                                                    ?><span class="text-danger">Email has been Not Verify</span><?php
                                                                                                                                                                            }

                                                                                                                                                                                ?></span> </p>

                                                    </div>

                                                </div>
                                            </li>

                                            <li>
                                                <span class="icon"><i class="zmdi zmdi-home"></i></span>
                                                <div class="details">
                                                    <h5 class="title">Home Address</h5>
                                                    <div class="content">

                                                        <?php

                                                        if ($udata["city_id"] > 0) {
                                                        ?> <h6><?php echo ($udata["no"]) ?></h6>
                                                            <h6><?php echo ($udata["street"]) ?></h6>
                                                            <h6><?php echo ($citydata["name"]) ?></h6><?php
                                                                                                    } else {
                                                                                                        ?> <h6>Address in not Updated</h6><?php
                                                                                                    }


                                        ?>




                                                    </div>

                                                </div>
                                            </li>

                                            <li>
                                                <span class="icon"><i class="zmdi zmdi-watch"></i></span>
                                                <div class="details">
                                                    <h5 class="title">User Recently Added to Cart Items (Least 10)</h5>
                                                    <div class="content">

                                                        <?php
                                                        if ($recentnum > 0) {
                                                            # code...


                                                            while ($recentdata = $recentrs->fetch_assoc()) {


                                                                $productrs2 = Database::search(" SELECT * FROM `Product` WHERE `product_id` = '" . $recentdata["product_id"] . "' ");
                                                                $productdata2 = $productrs2->fetch_assoc();

                                                                $p2imgrs = Database::search(" SELECT * FROM `images` WHERE `product_id` = '" . $productdata2["product_id"] . "' ");
                                                                $p2imgdata = $p2imgrs->fetch_assoc();


                                                        ?>

                                                                <div class="col-lg-6 col-12 mb-30">
                                                                    <div class="box">

                                                                        <div class="box-body">
                                                                            <div class="d-flex">
                                                                                <div class="flex-shrink-0">
                                                                                    <img width="70px" src="<?php echo ($p2imgdata["code"]) ?>" alt="...">
                                                                                </div>
                                                                                <div class="flex-grow-1 ms-3">
                                                                                    <h6 class="mt-0"><?php echo ($productdata2["name"]); ?></h6>
                                                                                    <?php echo ($productdata2["stitle"]); ?>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            <?php

                                                            }
                                                        } else {
                                                            ?> <h6 class="mt-0">Not Items</h6><?php
                                                                                            }
                                                                                                ?>





                                                    </div>

                                                </div>
                                            </li>

                                            <li>
                                                <span class="icon"><i class="zmdi zmdi-shopping-cart"></i></span>
                                                <div class="details">
                                                    <h5 class="title">User Cart Items</h5>
                                                    <div class="content">

                                                        <?php
                                                        if ($cartnum > 0) {
                                                            # code...

                                                   
                                                            while ($cartdata = $cartrs->fetch_assoc()) {
                                                             
                                                            
                                                                $productrs3 = Database::search(" SELECT * FROM `Product` WHERE `product_id` = '".$cartdata["product_id"]."' ");      
                                                                $productdata3 = $productrs3->fetch_assoc();
                                                              
                                                                $p3imgrs = Database::search(" SELECT * FROM `images` WHERE `product_id` = '".$productdata3["product_id"]."' ");
                                                                $p3imgdata = $p3imgrs->fetch_assoc();
                                                                

                                                        ?>

                                                                <div class="col-lg-6 col-12 mb-30">
                                                                    <div class="box">

                                                                        <div class="box-body">
                                                                            <div class="d-flex">
                                                                                <div class="flex-shrink-0">
                                                                                    <img width="70px" src="<?php echo($p3imgdata["code"]) ?>" alt="...">
                                                                                </div>
                                                                                <div class="flex-grow-1 ms-3">
                                                                                    <h6 class="mt-0"><?php echo($productdata3["name"]); ?></h6>
                                                                                    <?php echo($productdata3["stitle"]); ?>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            <?php

                                                            }
                                                        } else {
                                                            ?> <h6 class="mt-0">Not Items</h6><?php
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

  
  <div class="footer-section">
            <div class="container-fluid">

                <div class="footer-copyright text-center">
                    <p class="text-body-light">2024 &copy; <a
                            href="https://thamindudisna.info">Net Pixel LK</a></p>
                </div>

            </div>
        </div>

        </div>

        <!-- JS
============================================ -->
        
        <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
        <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
        <script src="assets/js/vendor/popper.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        
        <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
        <script src="assets/js/plugins/tippy4.min.js.js"></script>
        
        <script src="assets/js/main.js"></script>

        
        <script src="assets/js/plugins/datatables/datatables.min.js"></script>
        <script src="assets/js/plugins/datatables/datatables.active.js"></script>
        
        <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
        <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
        <script src="assets/js/vendor/popper.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        
        <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
        <script src="assets/js/plugins/tippy4.min.js.js"></script>
        
        <script src="assets/js/main.js"></script>
        <script src="admin.js"></script>

        
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        
        <script src="assets/js/plugins/moment/moment.min.js"></script>

        
        <script src="assets/js/plugins/daterangepicker/daterangepicker.js"></script>
        <script src="assets/js/plugins/daterangepicker/daterangepicker.active.js"></script>

        
        <script src="assets/js/plugins/chartjs/Chart.min.js"></script>
        <script src="assets/js/plugins/chartjs/chartjs.active.js"></script>

        
        <script src="assets/js/plugins/vmap/jquery.vmap.min.js"></script>
        <script src="assets/js/plugins/vmap/maps/jquery.vmap.world.js"></script>
        <script src="assets/js/plugins/vmap/maps/samples/jquery.vmap.sampledata.js"></script>
        <script src="assets/js/plugins/vmap/vmap.active.js"></script>
        <script src="admin.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="assets/js/plugins/datatables/datatables.min.js"></script>
        <script src="assets/js/plugins/datatables/datatables.active.js"></script>



    </body>


    </body>

    </html>




<?php
} else {

    header("Location: ./adminlogin.php");
}


?>