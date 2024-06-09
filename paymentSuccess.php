


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
    <link rel="shortcut icon" href="assets2/img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="assets2/css/style.css">

</head>

<body onload="downloadPDF('sdfsfsffdsdsf');">


<?php
$cart_rs = Database::search("SELECT * FROM `cart` WHERE `user_id`='" . $id . "' ");
$cart_num = $cart_rs->num_rows;
$cart_data = $cart_rs->fetch_assoc();
 $product_rs = Database::search("SELECT * FROM `product` WHERE `product_id`='" . $cart_data["product_id"] . "'");
 $product_data = $product_rs->fetch_assoc();


 $order_rs = Database::search("SELECT * FROM `orders` WHERE `product_id` = '". $cart_data["product_id"]."' ");
 $order_data = $order_rs->fetch_assoc();


 $unit_amount = isset($order_data["total"]) ? $order_data["total"] : 0;
 
 $unit_amount =   $unit_amount * 10;




$pqty = $product_data["qty"];
$nqty = $pqty - 1;

Database::iud("UPDATE product SET qty = '".$nqty."' WHERE  `product_id`='" .$cart_data["product_id"] . "' ");









?>







<!-- Invoice 1 start -->
<div class="invoice-1 invoice-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="invoice-inner clearfix">
                    <div class="invoice-info clearfix" id="invoice_wrapper">
                        <div class="invoice-headar">
                            <div class="row g-0">
                                <div class="col-sm-6">
                                    <div class="invoice-logo">
                                        <!-- logo started -->
                                        <div class="logo">
                                            <img src="assets/img/logos/logo.png" alt="logo">
                                        </div>
                                        <!-- logo ended -->
                                    </div>
                                </div>
                                <div class="col-sm-6 invoice-id">
                                    <div class="info">
                                        <h1 class="color-white inv-header-1">Invoice</h1>
                                        <p class="color-white mb-1">Invoice Number <span>#45613</span></p>
                                        <p class="color-white mb-0">Invoice Date <span>21 Sep 2021</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-top">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="invoice-number mb-30">
                                        <h4 class="inv-title-1">Invoice To</h4>
                                        <h2 class="name mb-10">Jhon Smith</h2>
                                        <p class="invo-addr-1">
                                            Theme Vessel <br/>
                                            info@themevessel.com <br/>
                                            21-12 Green Street, Meherpur, Bangladesh <br/>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="invoice-number mb-30">
                                        <div class="invoice-number-inner">
                                            <h4 class="inv-title-1">Invoice From</h4>
                                            <h2 class="name mb-10">Animas Roky</h2>
                                            <p class="invo-addr-1">
                                                Apexo Inc  <br/>
                                                billing@apexo.com <br/>
                                                169 Teroghoria, Bangladesh <br/>
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
                                    <tr class="tr">
                                        <td>
                                            <div class="item-desc-1">
                                                <span>01</span>
                                            </div>
                                        </td>
                                        <td class="pl0">Businesscard Design</td>
                                        <td class="text-center">$300</td>
                                        <td class="text-center">2</td>
                                        <td class="text-end">$600.00</td>
                                    </tr>
                                    <tr class="bg-grea">
                                        <td>
                                            <div class="item-desc-1">
                                                <span>02</span>

                                            </div>
                                        </td>
                                        <td class="pl0">Fruit Flayer Design</td>
                                        <td class="text-center">$400</td>
                                        <td class="text-center">1</td>
                                        <td class="text-end">$60.00</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="item-desc-1">
                                                <span>03</span>
                                            </div>
                                        </td>
                                        <td class="pl0">Application Interface Design</td>
                                        <td class="text-center">$240</td>
                                        <td class="text-center">3</td>
                                        <td class="text-end">$640.00</td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="item-desc-1">
                                                <span>04</span>
                                            </div>
                                        </td>
                                        <td class="pl0">Theme Development</td>
                                        <td class="text-center">$720</td>
                                        <td class="text-center">4</td>
                                        <td class="text-end">$640.00</td>
                                    </tr>
                                    <tr class="tr2">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center">SubTotal</td>
                                        <td class="text-end">$710.99</td>
                                    </tr>
                                    <tr class="tr2">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center">Tax</td>
                                        <td class="text-end">$85.99</td>
                                    </tr>
                                    <tr class="tr2">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center f-w-600 active-color">Grand Total</td>
                                        <td class="f-w-600 text-end active-color">$795.99</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="invoice-bottom">
                            <div class="row">
                                <div class="col-lg-6 col-md-8 col-sm-7">
                                    <div class="mb-30 dear-client">
                                        <h3 class="inv-title-1">Terms & Conditions</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been typesetting industry. Lorem Ipsum</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-4 col-sm-5">
                                    <div class="mb-30 payment-method">
                                        <h3 class="inv-title-1">Payment Method</h3>
                                        <ul class="payment-method-list-1 text-14">
                                            <li><strong>Account No:</strong> 00 123 647 840</li>
                                            <li><strong>Account Name:</strong> Jhon Doe</li>
                                            <li><strong>Branch Name:</strong> xyz</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-contact clearfix">
                            <div class="row g-0">
                                <div class="col-lg-9 col-md-11 col-sm-12">
                                    <div class="contact-info">
                                        <a href="tel:+55-4XX-634-7071"><i class="fa fa-phone"></i> +00 123 647 840</a>
                                        <a href="tel:info@themevessel.com"><i class="fa fa-envelope"></i> info@themevessel.com</a>
                                        <a href="tel:info@themevessel.com" class="mr-0 d-none-580"><i class="fa fa-map-marker"></i> 169 Teroghoria, Bangladesh</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="invoice-btn-section clearfix d-print-none">
                        <a href="javascript:window.print()" class="btn btn-lg btn-print">
                            <i class="fa fa-print"></i> Print Invoice
                        </a>
                        <a id="invoice_download_btn" class="btn btn-lg btn-download btn-theme">
                            <i class="fa fa-download"></i> Download Invoice
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Invoice 1 end -->

<script src="assets2/js/jquery.min.js"></script>
<script src="assets2/js/jspdf.min.js"></script>
<script src="assets2/js/html2canvas.js"></script>
<script src="assets2/js/app.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
    window.jsPDF = window.jspdf.jsPDF;
    var docPDF = new jsPDF();

    function downloadPDF(invoiceNo) {

      var elementHTML = document.querySelector("#myBillingArea");

      
      docPDF.html(elementHTML, { 
        callback: function(docPDF) {
          docPDF.save(invoiceNo + '.pdf');
        },
        x: 15,
        y: 15,
        width: 170,
        windowWidth: 650
      });
    }
  </script>
 
</body>




</html>

<?php





    // $_SESSION["checkout"] = null;






}else{
  header("Location: ./error.html");
}
?>