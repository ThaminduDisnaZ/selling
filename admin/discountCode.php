<?php

session_start();

if (isset($_SESSION["a"])) {
?>






<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Promo Code | Net Pixel </title>
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
                        <h3>eCommerce <span>/ Discount Code</span></h3>
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

                    <div class="row align-items-center mb-25">
                        <label for="formLayoutUsername1">Add New Discount Code</label>
                        <div class="col-4 ">
                            <input type="text" class="form-control secondary" placeholder="Input New Discount Code" id="dcode">
                        </div>
                        <div class="col-3 ">
                            <input type="number" class="form-control secondary" placeholder="Presentage (%)" id="dnum">
                        </div>
                        <div class="col-2 ">
                            <button class="button button-outline button-secondary  "  onclick="addDisCode();"><span>Add</span></button>
                        </div>
                    </div>

                    





 
 <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-vertical-middle">
                            <thead>
                                <tr>
                                    <th>Discount Code ID</th>                                   
                                    <th>Code</th>
                                    <th>Presentage</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>


                                <?php

$dis_rs = Database::search("SELECT * FROM `discode`");


while  ($dis = $dis_rs->fetch_assoc()) {
    $did = $dis["discode_id"];


?>
                                <tr>
                                    <td><?php echo($dis["discode_id"]); ?></td>
                                    <td><?php echo($dis["code"]); ?></td>
                                    <td><?php echo($dis["dis"]); ?>%</td>
                                    


<?php


if ($dis["discode_status_id"] == 1) {
    ?>  <td><span class="badge badge-success">Active</span></td> <?php
} else {
   ?>   <td><span class="badge badge-danger">Inactive</span></td>  <?php 
}


?>
                                   



                                    <td>
                                        <div class="">
                                            <button class="button button-xs button-primary" onclick="disStatusChange(<?php echo $did ?>);">Change Status</button>
                                        
                                        </div>
                                    </td>
                                </tr>
                                <?php
}

?>


                             


                            </tbody>
                        </table>
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