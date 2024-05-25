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
                        <h3>eCommerce <span>/ Invoice Details</span></h3>
                    </div>
                </div><!-- Page Heading End -->

            </div><!-- Page Headings End -->

            <div class="row mbn-30">

                <!--Invoice Head Start-->
                <div class="col-12 mb-30">
                    <div class="invoice-head">
                        <h2 class="fw-700 mb-15">Invoice #IAD-101</h2>
                        <hr>
                        <div class="d-flex justify-content-between row mbn-20">
                            <!--Invoice Form-->
                            <div class="text-left col-12 col-sm-auto mb-20">
                                <h4 class="fw-600">Adomx</h4>
                                <p>77 seventh south center <br>USA North Road -2455. <br>
                            +112 666 4558 99 <br>
                            info@adomx.com</p>
                            </div>
                            <!--Invoice To-->
                            <div class="text-left text-sm-right col-12 col-sm-auto mb-20">
                                <h4 class="fw-600">Tyler Meyer</h4>
                                <p>25 seventh North center <br>USA South Road -3125. <br>
                            +112 666 4558 99 <br>
                            info@adomx.com</p>
                                <p><span class="text-heading fw-600">Invoice Date:</span> 11 March 2022 <br>
                                    <span class="text-heading fw-600">Due Date:</span> 20 April 2022
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Invoice Head End-->

                <!--Invoice Details Table Start-->
                <div class="col-12 mb-30">
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th><span>Description</span></th>
                                    <th class="text-right"><span>Quantity</span></th>
                                    <th class="text-right"><span>Unit Cost</span></th>
                                    <th class="text-right"><span>Total</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#01</td>
                                    <td>Latst Gaming Laptop</td>
                                    <td class="text-right">5</td>
                                    <td class="text-right">$1000</td>
                                    <td class="text-right">$5000</td>
                                </tr>
                                <tr>
                                    <td>#02</td>
                                    <td>Gaming Mouse Set</td>
                                    <td class="text-right">5</td>
                                    <td class="text-right">$100</td>
                                    <td class="text-right">$500</td>
                                </tr>
                                <tr>
                                    <td>#01</td>
                                    <td>Gaming Headset</td>
                                    <td class="text-right">5</td>
                                    <td class="text-right">$100</td>
                                    <td class="text-right">$500</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--Invoice Details Table End-->

                <!--Invoice Total Start-->
                <div class="col-12 d-flex justify-content-end mb-15">
                    <div class="text-right">
                        <h6>Sub Total: $6000</h6>
                        <h6>Tax(10%): $600</h6>
                        <hr class="mb-10">
                        <h3 class="fw-600 mb-0">Total: $6600</h3>
                    </div>
                </div>
                <!--Invoice Total Start-->

                <div class="col-12 mb-15">
                    <hr>
                </div>

                <!--Invoice Action Button Start-->
                <div class="col-12 d-flex justify-content-end mb-30">
                    <div class="buttons-group">
                        <button class="button button-outline button-primary">Download PDF</button>
                        <button class="button button-outline button-info">Send Print</button>
                        <button class="button button-outline button-secondary">Payment Process</button>
                    </div>
                </div>
                <!--Invoice Action Button Start-->

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