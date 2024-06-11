<?php

session_start();

if (isset($_SESSION["a"])) {
?>





    <!doctype html>
    <html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Invoice Details | Net Pixel LK</title>
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




            <?php
            $ors = Database::search("SELECT * FROM `orders` WHERE `order_id` = '" . $_GET["id"] . "' ");
            $oda = $ors->fetch_assoc();
            $onr = $ors->num_rows;
            if ($onr == 1) {
                $oprs = Database::search("SELECT * FROM `product` WHERE `product_id` = '" . $oda["product_id"] . "' ");
                $opda = $oprs->fetch_assoc();
                $opimg = Database::search("SELECT * FROM `images` WHERE `product_id` = '" . $oda["product_id"] . "' ");
                $opimgdata = $opimg->fetch_assoc();
                $urs = Database::search("SELECT * FROM `user` WHERE `user_id` = '" . $oda["user_id"] . "' ");
                $udata = $urs->fetch_assoc();
                $uars = Database::search("SELECT * FROM `city` WHERE `city_id` = '" . $udata["city_id"] . "'  ");
                $uadata = $uars->fetch_assoc();
                $drs = Database::search(" SELECT * FROM `discode` WHERE `discode_id` = '" . $oda["discode_id"] . "' ");
                $dda = $drs->fetch_assoc();


            ?>

                
                <div class="content-body">

                    
                    <div class="row justify-content-between align-items-center mb-10">

                        
                        <div class="col-12 col-lg-auto mb-20">
                            <div class="page-heading ">
                                <h3>eCommerce <span>/ Invoice Details</span></h3>

                                <button class="button button-outline button-primary" onclick="generatePrint();" id="download-button">Download Report</button>

                            </div>
                        </div>

                    </div>

                    <div class="row mbn-30"  id="invoice">

                        
                        <div class="col-12 mb-30" >
                            <div class="invoice-head">
                                <h2 class="fw-700 mb-15">Invoice #<?php echo ($_GET["id"]);
                                                                    ?></h2>
                                <hr>
                                <div class="d-flex justify-content-between row mbn-20">
                                    
                                    <div class="text-left col-12 col-sm-auto mb-20">
                                        <h4 class="fw-600"><?php echo $udata["fname"] ?> <?php echo $udata["lname"] ?></h4>
                                        <p> <?php echo $udata["no"] ?>,<br> <?php echo $udata["street"] ?> ,<br>
                                            <?php echo $uadata["name"] ?> .</p>
                                    </div>
                                    
                                    <div class="text-left text-sm-right col-12 col-sm-auto mb-20">
                                        <h4 class="fw-600">Contact</h4>
                                        <p><?php echo $udata["mobile"] ?> <br>
                                            <?php echo $udata["email"] ?>
                                        <p><span class="text-heading fw-600">Invoice Date:</span> <?php echo $oda["date"] ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        
                        <div class="col-12 mb-30">
                            <div class="table-responsive">
                                <table class="table table-bordered mb-0">
                                    <thead>
                                        <tr>

                                            <th><span>Description</span></th>
                                            <th class="text-right"><span>Quantity</span></th>
                                            <th class="text-right"><span>Price</span></th>

                                        </tr>
                                    </thead>
                                    <tbody>


                                        <?php

                                        while ($udata = $urs->fetch_assoc()) {

                                        ?>

                                            <tr>

                                                <td> <?php echo  $opda["stitle"] ?></td>
                                                <td class="text-right">1</td>
                                                <td class="text-right">Rs.<?php echo  $opda["price"] ?>.00</td>

                                            </tr>

                                        <?php



                                        }

                                        ?>


                                        <tr>

                                            <td> <?php echo  $opda["stitle"] ?></td>
                                            <td class="text-right">1</td>
                                            <td class="text-right">Rs.<?php echo  $opda["price"] ?>.00</td>

                                        </tr>







                                    </tbody>
                                </table>
                            </div>
                        </div>
                        

                        
                        <div class="col-12 d-flex justify-content-end mb-15">
                            <div class="text-right">
                                <h6>Sub Total: Rs.<?php echo  $opda["price"] ?>.00</h6>
                                <h6>Discount:




                                    <?php

                                    if ($dda["dis"] > 0) {
                                        echo ($dda["dis"]+"%");
                                    } else {
                                        echo ("Not Discount");
                                    }


                                    ?>

</h6>
                                <hr class="mb-10">
                                <h3 class="fw-600 mb-0">Total: Rs.<?php echo ($oda["total"]) ?>.00</h3>
                            </div>
                        </div>
                        

                        <div class="col-12 mb-15">
                            <hr>
                        </div>
                        <?php

                        $oid =  $_GET["id"];

                        ?>
                        






                        
                        <!-- <div class="col-12 d-flex justify-content-end mb-30">
                            <div class="buttons-group">
                               
                                <button class="button button-outline button-info">Send Print</button>
                                <button class="button button-outline button-warning" data-bs-toggle="modal" data-bs-target="#exampleModal3">Delivery Process</button>
                                <div class="modal fade" id="exampleModal3">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Delivery Process</h5>
                                                <button class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="adomx-radio-group">
                                                    <input id="ds1" type="radio" name="delivery_status" class="adomx-radio " checked>
                                                    <label for="ds1" id="ds11"><i class="icon "></i>Your Product is Checking Process</label><br>

                                                    <input id="ds2" type="radio" name="delivery_status" class="adomx-radio">
                                                    <label for="ds2"><i class="icon "></i>Your Product is Packing Process</label><br>

                                                    <input id="ds3" type="radio" name="delivery_status" class="adomx-radio ">
                                                    <label for="ds3"><i class="icon "></i>Your Product is Ready to Delivery</label><br>

                                                    <input id="ds4" type="radio" name="delivery_status" class="adomx-radio ">
                                                    <label for="ds4"><i class="icon "></i>Your Product is Delivery Process</label><br>

                                                    <input id="ds5" type="radio" name="delivery_status" class="adomx-radio ">
                                                    <label for="ds5"><i class="icon "></i>Your Product is Delivered</label><br>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button class="button button-danger">Close</button>
                                                <button class="button button-primary" onclick="delstatus(<?php echo $oid ?>);">Save changes</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        

                    </div>

                </div>


            <?php
            } else {
            ?>

                <div class="container">
                    <div class="row">
                        <div class="col-12 ">
                            <h1 class="justify-content-center align-content-center mt-100 text-center">INVOICE NOT FOUND</h1>
                        </div>
                    </div>

                </div>

            <?php
            }




            ?>


            
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
        <script src="admin.js"></script>
    
    </body>

    </html>


<?php
} else {

    header("Location: ./adminlogin.php");
}


?>