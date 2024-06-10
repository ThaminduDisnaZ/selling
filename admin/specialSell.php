<?php

session_start();

if (isset($_SESSION["a"])) {
?>






<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Special Sell | Net Pixel </title>
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
                        <h3>eCommerce <span>/ Special Product Sell</span></h3>
                    </div>
                </div>

             

            </div>

            
            <div class="add-edit-product-wrap col-12">

                <div class="add-edit-product-form">

          





 
 <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-vertical-middle">
                            <thead>
                                <tr>
                                    <th>Product ID</th>                                   
                                    <th>Product Name</th>
                                    <th>Change Best Sell Status</th>
                                    <th>Change Flash Sell Status</th>
                                
                                    
                                </tr>
                            </thead>
                            <tbody>


                                <?php

$pro_rs = Database::search("SELECT * FROM `product`");


while  ($pro = $pro_rs->fetch_assoc()) {
    $pid = $pro["product_id"];


?>
                                <tr>
                                    <td><?php echo($pro["product_id"]); ?></td>
                                    <td><?php echo($pro["stitle"]); ?></td>
                                   
                                    


<?php


if ($pro["bestsell_id"] == 1) {
    ?>  <td><span> <button onclick="changeBestsellStatus(<?php echo ($pid) ?>);" class="badge badge-success">Active</button></span></td><?php
} else {
   ?>  <td><span> <button onclick="changeBestsellStatus(<?php echo ($pid) ?>);" class="badge badge-danger">Inactive</button></span></td>  <?php 
}


?>
                                   




                                   <?php


if ($pro["flashsell_id"] == 1) {
    ?>  <td><span> <button onclick="changeFlashsellStatus(<?php echo ($pid) ?>);" class="badge badge-success">Active</button></span></td> <?php
} else {
   ?>   <td><span> <button onclick="changeFlashsellStatus(<?php echo ($pid) ?>);" class="badge badge-danger">Inactive</button></span></td>  <?php 
}


?>
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