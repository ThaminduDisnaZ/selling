<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Adomx - Responsive Bootstrap 4 Admin Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/vendor/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/vendor/themify-icons.css">
    <link rel="stylesheet" href="assets/css/vendor/cryptocurrency-icons.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins/plugins.css">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="assets/css/helper.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Custom Style CSS Only For Demo Purpose -->
    <link id="cus-style" rel="stylesheet" href="assets/css/style-primary.css">

</head>

<body class="skin-dark">

    <div class="main-wrapper">

    <?php
require "adminHeader.php";
?>

       
        <?php
require "sideheader.php";
?>


        <!-- Content Body Start -->
        <div class="content-body">

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>eCommerce <span>/ Manage Product</span></h3>
                    </div>
                </div><!-- Page Heading End -->

            </div><!-- Page Headings End -->

            <div class="row">

                <!--Manage Product List Start-->
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-vertical-middle">
                            <thead>
                                <tr>
                                    <th>Product ID</th>
                                    <th>Photo</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Sales</th>
                                    <th>In Stock</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#MSP40022</td>
                                    <td><img src="assets/images/product/list-product-1.jpg" alt="" class="product-image rounded-circle"></td>
                                    <td><a href="#">Spro 4 Laptop</a></td>
                                    <td>$600.00</td>
                                    <td>03</td>
                                    <td>12</td>
                                    <td>13 Feb 2018</td>
                                    <td><span class="badge badge-danger">Out of stock</span></td>
                                    <td>
                                        <div class="table-action-buttons">
                                            <a class="view button button-box button-xs button-primary" href="invoice-details.html"><i class="zmdi zmdi-more"></i></a>
                                            <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                            <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#MSP40023</td>
                                    <td><img src="assets/images/product/list-product-2.jpg" alt="" class="product-image rounded-circle"></td>
                                    <td><a href="#">Spro 4 Laptop</a></td>
                                    <td>$600.00</td>
                                    <td>03</td>
                                    <td>12</td>
                                    <td>13 Feb 2018</td>
                                    <td><span class="badge badge-success">Published</span></td>
                                    <td>
                                        <div class="table-action-buttons">
                                            <a class="view button button-box button-xs button-primary" href="invoice-details.html"><i class="zmdi zmdi-more"></i></a>
                                            <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                            <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#MSP40024</td>
                                    <td><img src="assets/images/product/list-product-3.jpg" alt="" class="product-image rounded-circle"></td>
                                    <td><a href="#">Spro 4 Laptop</a></td>
                                    <td>$600.00</td>
                                    <td>03</td>
                                    <td>12</td>
                                    <td>13 Feb 2018</td>
                                    <td><span class="badge badge-danger">Out of stock</span></td>
                                    <td>
                                        <div class="table-action-buttons">
                                            <a class="view button button-box button-xs button-primary" href="invoice-details.html"><i class="zmdi zmdi-more"></i></a>
                                            <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                            <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#MSP40025</td>
                                    <td><img src="assets/images/product/list-product-4.jpg" alt="" class="product-image rounded-circle"></td>
                                    <td><a href="#">Spro 4 Laptop</a></td>
                                    <td>$600.00</td>
                                    <td>03</td>
                                    <td>12</td>
                                    <td>13 Feb 2018</td>
                                    <td><span class="badge badge-success">Published</span></td>
                                    <td>
                                        <div class="table-action-buttons">
                                            <a class="view button button-box button-xs button-primary" href="invoice-details.html"><i class="zmdi zmdi-more"></i></a>
                                            <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                            <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#MSP40026</td>
                                    <td><img src="assets/images/product/list-product-5.jpg" alt="" class="product-image rounded-circle"></td>
                                    <td><a href="#">Spro 4 Laptop</a></td>
                                    <td>$600.00</td>
                                    <td>03</td>
                                    <td>12</td>
                                    <td>13 Feb 2018</td>
                                    <td><span class="badge badge-success">Published</span></td>
                                    <td>
                                        <div class="table-action-buttons">
                                            <a class="view button button-box button-xs button-primary" href="invoice-details.html"><i class="zmdi zmdi-more"></i></a>
                                            <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                            <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--Manage Product List End-->

            </div>

        </div><!-- Content Body End -->

        <!-- Footer Section Start -->
        <div class="footer-section">
            <div class="container-fluid">

                <div class="footer-copyright text-center">
                    <p class="text-body-light">2022 &copy; <a href="https://themeforest.net/user/codecarnival">Codecarnival</a></p>
                </div>

            </div>
        </div><!-- Footer Section End -->

    </div>

    <!-- JS
============================================ -->

    <!-- Global Vendor, plugins & Activation JS -->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <!--Plugins JS-->
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/js/plugins/tippy4.min.js.js"></script>
    <!--Main JS-->
    <script src="assets/js/main.js"></script>

</body>

</html>