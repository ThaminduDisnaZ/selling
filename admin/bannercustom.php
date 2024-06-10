
<?php

session_start();

if (isset($_SESSION["a"])) {

?>




<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Edit Banner | Net Pixel </title>
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
                    <form action="#">

                        <h4 class="title">About Product</h4>

                        <div class="row">
                            

                           
                            <div class=" col-12 mb-30">
                                <select class="form-control select2" id="banner">
                                    <option value="status">Select Banner</option>



                                    <?php
 $banner_rs = Database::search("SELECT * FROM `banner`");
                                        $banner_type_rs = Database::search("SELECT * FROM `banner_type`");
                                        $banner_type_num = $banner_type_rs->num_rows;
                                        $banner_num = $banner_rs->num_rows;

                                        for ($x = 0; $x < $banner_type_num; $x++) {
                                            $banner_type_data = $banner_type_rs->fetch_assoc();
                                            $banner_data = $banner_rs->fetch_assoc();
                                        ?>
                                    <option value="<?php echo $banner_type_data["banner_type_id"] ?>">
                                        <?php echo $banner_type_data["type"] ?></option>
                                    <?php
                                        }

                                     ?>



                                </select>
                            </div>



                            </div>












                        <h4 class="title">Product Gallery</h4>
                         <div class="col-12">
                                <div class="row">
                                   
                                    <div class=" col-12 ">
                                        <div class="row">
                                            <div class="col-3 border border-warning rounded ">
                                                <img src="assets\images\gallery\profile-gallery-2.jpg" class="img-fluid" style="width: 250px;" id="i0" />
                                            </div>
                                            <div class="col-3 border border-warning rounded ml-10">
                                                <img src="assets\images\gallery\profile-gallery-2.jpg" class="img-fluid" style="width: 250px;" id="i1" />
                                            </div>
                                            <div class="col-3 border border-warning rounded ml-10">
                                                <img src="assets\images\gallery\profile-gallery-2.jpg" class="img-fluid" style="width: 250px;" id="i2" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 d-grid mt-3 mb-50">
                                        <input type="file" class="d-none" id="imageuploader" multiple />
                                        <label for="imageuploader" onclick="changeProductImage();" class="button button-outline button-secondary"> Select Images <i class="ti-upload"></i></label>
                                    </div>
                                </div>
                            </div>



                        <!-- Button Group Start -->
                        <div class="row">
                            <div class="d-flex flex-wrap justify-content-end col mbn-10">
                                <button class="button button-outline button-primary mb-10 ml-10 mr-0" onclick="updateBanner();">Save &
                                    Publish</button>
                                <button class="button button-outline button-info mb-10 ml-10 mr-0"  onclick="changeProductImage();">Upload Images</button>
                                <button class="button button-outline button-danger mb-10 ml-10 mr-0"  onclick="addProduct();">Delete
                                    Product</button>
                            </div>
                        </div><!-- Button Group End -->

                    </form>
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
    <script src="assets/js/plugins/quill/quill.min.js"></script>
    <script src="assets/js/plugins/quill/quill.active.js"></script>
    <script src="./admin.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>

<?php
} else {
    
    header("Location: ./adminlogin.php");
}


?>