<?php

session_start();

if (isset($_SESSION["a"])) {
?>






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
                        <h3>eCommerce <span>/ Add Product</span></h3>
                    </div>
                </div><!-- Page Heading End -->

                <!-- Page Button Group Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="buttons-group">
                        <button class="button button-outline button-primary">Save & Publish</button>
                        <button class="button button-outline button-info">Save to Draft</button>
                        <button class="button button-outline button-danger">Delete Product</button>
                    </div>
                </div><!-- Page Button Group End -->

            </div><!-- Page Headings End -->

            <!-- Add or Edit Product Start -->
            <div class="add-edit-product-wrap col-12">

                <div class="add-edit-product-form">

                    <div class="row align-items-center mb-25">
                        <label for="formLayoutUsername1">Add New Category</label>
                        <div class="col-9 ">
                            <input type="text" class="form-control secondary" placeholder="Input New Category Name" id="addcategory">
                        </div>
                        <div class="col-2 ">
                            <button class="button button-outline button-secondary  "  onclick="addcategory();"><span>Add</span></button>
                        </div>
                    </div>

                    <div class="row align-items-center mb-25">
                        <label for="formLayoutUsername1">Add New Model</label>
                        <div class="col-9 ">
                            <input type="text" class="form-control secondary" placeholder="Input New Model Name" id="addmodal">
                        </div>
                        <div class="col-2 ">
                            <button class="button button-outline button-secondary  "  onclick="addmodal();"><span>Add</span></button>
                        </div>
                    </div>

                    <div class="row align-items-center mb-25">
                        <label for="formLayoutUsername1">Add New Storage Type</label>
                        <div class="col-9 ">
                            <input type="text" class="form-control secondary" placeholder="Input New Storage Type"id="addstorage">
                        </div>
                        <div class="col-2 ">
                            <button class="button button-outline button-secondary  "onclick="addstorage();"><span>Add</span></button>
                        </div>
                    </div>

                    <div class="row align-items-center mb-25">
                        <label for="formLayoutUsername1">Add New GPU</label>
                        <div class="col-9 ">
                            <input type="text" class="form-control secondary" placeholder="Input New GPU Type" id="addgpu">
                        </div>
                        <div class="col-2 ">
                            <button class="button button-outline button-secondary  " onclick="addgpu();"><span>Add</span></button>
                        </div>
                    </div>

                    <div class="row align-items-center mb-25">
                        <label for="formLayoutUsername1">Add New RAM</label>
                        <div class="col-9 ">
                            <input type="text" class="form-control secondary" placeholder="Input New RAM Capacity" id="addram">
                        </div>
                        <div class="col-2 ">
                            <button class="button button-outline button-secondary  " onclick="addram();"><span>Add</span></button>
                        </div>
                    </div>

                    <div class="row align-items-center mb-25">
                        <label for="formLayoutUsername1">Add New CPU</label>
                        <div class="col-9 ">
                            <input type="text" class="form-control secondary" placeholder="Input New CPU" id="addcpu">
                        </div>
                        <div class="col-2 ">
                            <button class="button button-outline button-secondary  " onclick="addcpu();"><span>Add</span></button>
                        </div>
                    </div>

                    <div class="row align-items-center mb-25">
                        <label for="formLayoutUsername1">Add New Brand</label>
                        <div class="col-9 ">
                            <input type="text" class="form-control secondary" placeholder="Input New Brand" id="addbrand">
                        </div>
                        <div class="col-2 ">
                            <button class="button button-outline button-secondary  " onclick="addbrand();"><span>Add</span></button>
                        </div>
                    </div>

                    <div class="row align-items-center mb-25">
                        <label for="formLayoutUsername1 ">Add New Display Type</label>
                        <div class="col-9 ">
                            <input type="text" class="form-control secondary" placeholder="Input New Display Type" id="adddisplay">
                        </div>
                        <div class="col-2 ">
                            <button class="button button-outline button-secondary" onclick="adddisplay();"><span>Add</span></button>
                        </div>
                    </div>

                    <div class="row align-items-center mb-25">
                        <label for="formLayoutUsername1">Add Size</label>
                        <div class="col-9 ">
                            <input type="text" class="form-control secondary" placeholder="Input New Size" id="addsize">
                        </div>
                        <div class="col-2 ">
                            <button class="button button-outline button-secondary  "onclick="addsize();"><span>Add</span></button>
                        </div>
                    </div>





                </div>

            </div><!-- Add or Edit Product End -->

        </div><!-- Content Body End -->

        <!-- Footer Section Start -->
        <div class="footer-section">
            <div class="container-fluid">

                <div class="footer-copyright text-center">
                    <p class="text-body-light">2022 &copy; <a
                            href="https://themeforest.net/user/codecarnival">Codecarnival</a></p>
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

    <!-- Plugins & Activation JS For Only This Page -->
    <script src="assets/js/plugins/nice-select/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugins/nice-select/niceSelect.active.js"></script>
    <script src="assets/js/plugins/filepond/filepond.min.js"></script>
    <script src="assets/js/plugins/filepond/filepond-plugin-image-exif-orientation.min.js"></script>
    <script src="assets/js/plugins/filepond/filepond-plugin-image-preview.min.js"></script>
    <script src="assets/js/plugins/filepond/filepond.active.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="admin.js"></script>
</body>

</html>


<?php
} else {
    
    header("Location: ./adminlogin.php");
}


?>