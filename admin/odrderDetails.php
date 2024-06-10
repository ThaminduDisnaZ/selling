<?php

session_start();

if (isset($_SESSION["a"])) {
?>




    <!doctype html>
    <html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Order Details | Net Pixel </title>
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
                            <h3>eCommerce <span>/ Order Details</span></h3>
                        </div>
                    </div>
                    <div class="col-12 col-lg-auto mb-20">
                    <div class="buttons-group">
                        <button id="download-button" class="button button-outline button-primary">Download Report</button>
                        
                    </div>
                </div>
                </div>
              
                <div id="invoice" class="row mbn-30">



                    
                    <div class="col-12 mb-30" >
                        <div class="table-responsive">
                            <table class="table table-bordered table-vertical-middle">
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Photo</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>User</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <?php

                                    $ors = Database::search("SELECT * FROM `orders` ORDER BY `date` ");


                                    while ($oda = $ors->fetch_assoc()) {

                                        $oprs = Database::search("SELECT * FROM `product` WHERE `product_id` = '" . $oda["product_id"] . "' ");
                                        $opda = $oprs->fetch_assoc();
                                        $opimg = Database::search("SELECT * FROM `images` WHERE `product_id` = '" . $oda["product_id"] . "' ");
                                        $opimgdata = $opimg->fetch_assoc();
                                        $urs = Database::search("SELECT * FROM `user` WHERE `user_id` = '" . $oda["user_id"] . "' ");
                                        $udata = $urs->fetch_assoc();

                                    ?>

                                        <tr>
                                            <td><?php echo ($oda["order_id"]) ?></td>
                                            <td><img width="55px" src="<?php echo ($opimgdata["code"]) ?>" alt="" class="product-image rounded-circle"></td>
                                            <td><a href="invoiceDetails.php?id=<?php echo $oda["order_id"]?> "><?php echo ($opda["stitle"]) ?></a></td>
                                            <td>Rs.<?php echo ($oda["total"]) ?>.00</td>
                                            <td><?php echo ($udata["fname"]) ?></td>

                                            <td><?php echo ($oda["date"]) ?></td>
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
        <script>
			const button = document.getElementById('download-button');

			function generatePDF() {
				// Choose the element that your content will be rendered to.
				const element = document.getElementById('invoice');
				// Choose the element and save the PDF for your user.
				html2pdf().from(element).save();
			}

			button.addEventListener('click', generatePDF);
		</script>
    </body>

    </html>


<?php
} else {

    header("Location: ./adminlogin.php");
}


?>