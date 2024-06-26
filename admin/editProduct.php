<?php

session_start();

if (isset($_SESSION["a"])) {
?>





<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Update Product | Net Pixel </title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->

    
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

<body class="skin-dark">

    <div class="main-wrapper">


    <?php
require "adminHeader.php";
?>

     

        
<?php
require "sideheader.php";
?>


        
        <div class="content-body">

            
            <div class="row justify-content-between align-items-center mb-10">

                
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>eCommerce <span>/ Edit Product</span></h3>
                    </div>
                </div>

                
                <div class="col-12 col-lg-auto mb-20">
                    <div class="buttons-group">
                        <button class="button button-outline button-primary">Save & Publish</button>
                        <button class="button button-outline button-info">Save to Draft</button>
                        <button class="button button-outline button-danger">Delete Product</button>
                    </div>
                </div>

            </div>

            
            <div class="add-edit-product-wrap col-12">

                <div class="add-edit-product-form">
                    <form action="#">

                        <h4 class="title">About Product</h4>

                        <div class="row">
                            <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" value="Product Name / Title*"></div>
                            <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" value="Product Sub-title"></div>
                            <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" value="Product Price*"></div>
                            <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" value="Product Discount"></div>
                            <div class="col-12 mb-30"><textarea class="form-control">Product Description</textarea></div>
                            <div class="col-lg-6 col-12 mb-30">
                                <select class="form-control nice-select">
                                    <option value="status">Status</option>
                                    <option value="publish">Publish</option>
                                    <option value="draft">Draft</option>
                                </select>
                            </div>
                            <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" value="Meta Title"></div>
                            <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" value="Meta Keyword"></div>
                            <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" value="Aditional Description Image Link"></div>
                        </div>

                        <h4 class="title">Product Gallery</h4>

                        <div class="product-upload-gallery row flex-wrap">
                            <div class="col-12 mb-30">
                                <p class="form-help-text mt-0">Upload Maximum 800 x 800 px & Max size 2mb.</p>
                                <input class="file-pond" type="file" multiple>
                            </div>
                        </div>

                        <h4 class="title">Additional Information</h4>

                        <div class="row">
                            <div class="col-lg-4 col-12 mb-30"><input class="form-control" type="text" value="Information 1"></div>
                            <div class="col-lg-4 col-12 mb-30"><input class="form-control" type="text" value="Information 2"></div>
                            <div class="col-lg-4 col-12 mb-30"><input class="form-control" type="text" value="Information 3"></div>
                            <div class="col-lg-4 col-12 mb-30"><input class="form-control" type="text" value="Information 4"></div>
                            <div class="col-lg-4 col-12 mb-30"><input class="form-control" type="text" value="Information 5"></div>
                            <div class="col-lg-4 col-12 mb-30"><input class="form-control" type="text" value="Information 6"></div>
                        </div>

                        
                        <div class="row">
                            <div class="d-flex flex-wrap justify-content-end col mbn-10">
                                <button class="button button-outline button-primary mb-10 ml-10 mr-0">Save & Publish</button>
                                <button class="button button-outline button-info mb-10 ml-10 mr-0">Save to Draft</button>
                                <button class="button button-outline button-danger mb-10 ml-10 mr-0">Delete Product</button>
                            </div>
                        </div>

                    </form>
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

    
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/js/plugins/tippy4.min.js.js"></script>
    
    <script src="assets/js/main.js"></script>

    
    <script src="assets/js/plugins/nice-select/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugins/nice-select/niceSelect.active.js"></script>
    <script src="assets/js/plugins/filepond/filepond.min.js"></script>
    <script src="assets/js/plugins/filepond/filepond-plugin-image-exif-orientation.min.js"></script>
    <script src="assets/js/plugins/filepond/filepond-plugin-image-preview.min.js"></script>
    <script src="assets/js/plugins/filepond/filepond.active.js"></script>

</body>

</html>


<?php
} else {
    
    header("Location: ./adminlogin.php");
}


?>