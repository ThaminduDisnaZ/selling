<?php
session_start();
require "./connection.php";

if (isset($_SESSION["checkout"])) {
    $id = $_SESSION["checkout"]["user_id"];
    Database::iud("UPDATE orders SET payment_status_id = '1' WHERE  `user_id`='" . $id . "' ");
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Payment Success</title>

        <!-- External CSS libraries -->
        <link type="text/css" rel="stylesheet" href="assets2/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="assets2/fonts/font-awesome/css/font-awesome.min.css">

        <!-- Favicon icon -->
        <link rel="shortcut icon" href="assets2/img/favicon.ico" type="image/x-icon">

        <!-- Google fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" type="text/css"
         href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900">

        <!-- Custom Stylesheet -->
        <link type="text/css" rel="stylesheet" href="assets2/css/style.css">

    </head>

    <?php
    $cart_rs = Database::search("SELECT * FROM `cart` WHERE `user_id`='" . $id . "' ");
    $cart_num = $cart_rs->num_rows;
    $cart_data = $cart_rs->fetch_assoc();
    $product_rs = Database::search("SELECT * FROM `product` WHERE `product_id`=
    '" . $cart_data["product_id"] . "'");
    $product_data = $product_rs->fetch_assoc();
    $user_rs = Database::search("SELECT * FROM `user` WHERE `user_id` = '" . $id . "' ");
    $user_data = $user_rs->fetch_assoc();
    $order_rs = Database::search("SELECT * FROM `orders` WHERE `product_id` =
     '" . $cart_data["product_id"] . "' ");
    $order_data = $order_rs->fetch_assoc();
    $unit_amount = isset($order_data["total"]) ? $order_data["total"] : 0;
    $unit_amount =   $unit_amount * 10;
    $city_rs = Database::search("SELECT * FROM `city` WHERE `city_id` = 
    '" . $user_data["city_id"] . "' ");
    $city_data = $city_rs->fetch_assoc();
    $pqty = $product_data["qty"];
    $nqty = $pqty - 1;
    Database::iud("UPDATE product SET qty = '" . $nqty . "' WHERE  `product_id`=
    '" . $cart_data["product_id"] . "' ");
    ?>

    <?php
    $fname = $user_data["fname"];
    $oid = $order_data["order_id"];
    ?>

    <body onload="downinv('Net Pixel LK | <?php echo ($fname) ?> Invoice_ID-#<?php echo ($oid)  ?> ');">

        <!-- Invoice 1 start -->
        <div class="invoice-1 invoice-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="invoice-inner clearfix" id="myBillingArea">
                            <div class="invoice-info clearfix" id="invoice_wrapper">
                                <div class="invoice-headar">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="">
                                                <!-- logo started -->
                                                <div class="logo">
                                                    <img width="250px" src="assets/img/2.png" alt="logo">
                                                </div>
                                                <!-- logo ended -->
                                            </div>
                                        </div>
                                        <div class="col-sm-6 invoice-id">
                                            <div class="info">
                                                <h1 class="color-white inv-header-1">Invoice</h1>
                                                <p class="color-white mb-1">Invoice Number
                                                     <span>#<?php echo ($order_data["order_id"])  ?></span></p>
                                                <p class="color-white mb-0">Invoice Date
                                                     <span><?php echo ($order_data["date"])  ?></span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="invoice-top">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="invoice-number mb-30">
                                                <h4 class="inv-title-1">Invoice To</h4>
                                                <h2 class="name mb-10">
                                                    <?php echo ($user_data["fname"]) ?> <?php echo ($user_data["lname"]) ?></h2>
                                                <p class="invo-addr-1">
                                                    <?php echo ($user_data["mobile"]) ?> <br />
                                                    <?php echo ($user_data["email"]) ?> <br />
                                                    <?php echo ($user_data["no"]) ?>, <?php echo ($user_data["street"]) ?>,
                                                     <?php echo ($city_data["name"]) ?><br />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="invoice-number mb-30">
                                                <div class="invoice-number-inner">
                                                    <h4 class="inv-title-1">Invoice From</h4>
                                                    <h2 class="name mb-10">Thamindu Disna</h2>
                                                    <p class="invo-addr-1">
                                                        Net Pixel LK <br />
                                                        info@netpixel.com <br />
                                                        Asgiriya, Gampaha. <br />
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="invoice-center">
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-striped invoice-table">
                                            <thead class="bg-active">
                                                <tr class="tr">
                                                    <th>No.</th>
                                                    <th class="pl0 text-start">Item Description</th>
                                                    <th class="text-center">Price</th>
                                                    <th class="text-center">Quantity</th>
                                                    <th class="text-end">Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                $cart_rs2 = Database::search("SELECT * FROM `cart` WHERE `user_id`='" . $id . "' ");
                                                $cart_num2 = $cart_rs2->num_rows;
                                                $order_total2 = 0;
                                                for ($i = 0; $i < $cart_num2; $i++) {
                                                    $cart_data2 = $cart_rs2->fetch_assoc();
                                                    $product_rs2 = Database::search("SELECT * FROM `product` 
                                                    WHERE `product_id`='" . $cart_data2["product_id"] . "'");
                                                    $product_data2 = $product_rs2->fetch_assoc();
                                                    $total2 =  ($product_data2["dprice"] * $cart_data2["qty"]);
                                                    $order_total2 = $total2 +     $order_total2;

                                                ?>
                                                    <tr class="tr">
                                                        <td>
                                                            <div class="item-desc-1">
                                                                <span><?php echo ($i + 1) ?></span>
                                                            </div>
                                                        </td>
                                                        <td class="pl0"><?php echo ($product_data2["name"]); ?></td>
                                                        <td class="text-center">Rs.<?php echo ($product_data2["dprice"]); ?>.00</td>
                                                        <td class="text-center"><?php echo ($cart_data2["qty"]); ?></td>
                                                        <td class="text-end">Rs.<?php echo ($total2) ?>.00</td>
                                                    </tr>

                                                <?php

                                                }

                                                ?>
                                                <thead class="bg-warning">
                                                    <tr class="tr">
                                                        <th>#</th>
                                                        <th class="pl0 text-start"></th>
                                                        <th class="text-center"></th>
                                                        <th class="text-center">Total :-</th>
                                                        <th class="text-end"><b>Rs.<?php echo ($order_total2) ?>.00</b></th>
                                                    </tr>
                                                </thead>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="invoice-bottom">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-8 col-sm-7">
                                            <div class="mb-30 dear-client">
                                                <h3 class="inv-title-1">Terms & Conditions</h3>
                                                <p>

                                                    Welcome to Net Pixel. By using 
                                                    this site, you agree to our terms: 
                                                    respect intellectual property, no 
                                                    republishing without consent, and be responsible
                                                     for your own content. Owner: Thamindu Disna.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-4 col-sm-5">
                                            <div class="mb-30 payment-method">
                                                <h3 class="inv-title-1">Payment Status</h3>
                                                <h3 class="name">Payment successful! Thank you for your purchase.</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="invoice-contact clearfix">
                                    <div class="row g-0">
                                        <div class="col-lg-9 col-md-11 col-sm-12">
                                            <div class="contact-info">
                                                <a href="tel:+94764501212"><i class="fa fa-phone"></i> +94 76 450 1212</a>
                                                <a href="tel:thamindudisna.se@gmail.com"><i class="fa fa-envelope">

                                                </i> thamindudisna.se@gmail.com</a>
                                                <a href="tel:thamindudisna.se@gmail.com" class="mr-0 d-none-580"><i class="fa fa-map-marker">
                                                    
                                                </i> Asgiriya, Gampaha</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-btn-section clearfix d-print-none">
                                <a href="javascript:window.print()" class="btn btn-lg btn-print">
                                    <i class="fa fa-print"></i> Print Invoice
                                </a>


                                <a onclick="downinv('<?php echo ($fname) ?> ID-#<?php echo ($oid)  ?> ');" class="btn btn-lg btn-download btn-theme">
                                    <i class="fa fa-download"></i> Download Invoice
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="assets2/js/jquery.min.js"></script>
        <script src="assets2/js/jspdf.min.js"></script>
        <script src="assets2/js/html2canvas.js"></script>
        <script src="assets2/js/app.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js "></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    </body>
    </html>
<?php

   $_SESSION["checkout"] = null;


} else {
    header("Location: ./error.html");
}
?>