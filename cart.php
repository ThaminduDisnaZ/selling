<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Cart | Net Pixel  </title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Place favicon.ico in the root directory -->
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

  <!-- CSS here -->
  <link rel="stylesheet" href="assets/css/preloader.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/slick.css">
  <link rel="stylesheet" href="assets/css/backToTop.css">
  <link rel="stylesheet" href="assets/css/meanmenu.css">
  <link rel="stylesheet" href="assets/css/nice-select.css">
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/animate.min.css">
  <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="assets/css/fontAwesome5Pro.css">
  <link rel="stylesheet" href="assets/css/ui-range-slider.css">
  <link rel="stylesheet" href="assets/css/default.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet" />
  <script src="assets/js/pace.min.js"></script>

  <!--plugins-->
  <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />

  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

  <!--Theme Styles-->
  <link href="assets/css/dark-theme.css" rel="stylesheet" />
  <link href="assets/css/semi-dark.css" rel="stylesheet" />
  <link href="assets/css/header-colors.css" rel="stylesheet" />
  <?php $titlewindow = "Cart"; ?>

</head>

<body>

  <!-- preloader area start -->
  <div id="loading">
    <div id="loading-center">
      <div id="loading-center-absolute">
        <div id="object"></div>
      </div>
    </div>
  </div>
  <!-- preloader area end -->


  <!-- back to top start -->
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <!-- back to top end -->
  <!--start wrapper-->
  <div class="wrapper"> <?php
                        require "heder.php";
                        ?>
    <?php

    if (isset($_SESSION["u"])) {

      $id = $_SESSION["u"]["user_id"];


      $total = 0;
      $subtotal = 0;
      $shipping = 0;
      $order_total = 0;


    ?>



      <!-- start page content wrapper-->
      <div class="page-content-wrapper">
        <!-- start page content-->
        <div class="page-content">

          <!--start breadcrumb-->
          <?php
          require "breadcrumb.php";
          ?>

          <!--end breadcrumb-->

          <!--start shop cart-->
          <section class="shop-page">
            <div class="shop-container">

              <div class="card shadow-sm border-0">
                <div class="card-body">
                  <div class="shop-cart">
                    <div class="row">

                      <?php

                      $cart_rs = Database::search("SELECT * FROM `cart` WHERE `user_id`='" . $id . "' ");
                      $cart_num = $cart_rs->num_rows;

                      if ($cart_num == 0) {
                      ?>
                        <section class="error__area pt-60 pb-100">
                          <div class="container">
                            <div class="col-xl-8 offset-xl-2 col-lg-8 offset-lg-2">
                              <div class="error__content text-center">
                                <div class="error__number">
                                  <h1></h1>
                                </div>
                                <span>Not Item in Cart</span>
                                <h2>Not Item in Cart</h2>

                                <div class="error__search">
                                  <form action="#">
                                    <input type="text" placeholder="Enter Your Text...">
                                    <button type="submit" class="t-y-btn t-y-btn-grey">Search</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </section>
                      <?php
                      } else {
                      ?>
                        <div class="col-12 col-lg-8">
                          <form action="#">
                            <div class="table-content table-responsive">
                              <table class="table bg-black border-5 border-warning ">
                                <thead>
                                  <tr>
                                    <th class="product-thumbnail ">Images</th>
                                    <th class="cart-product-name">Product</th>
                                    <th class="product-price">Unit Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-remove">Remove</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php

                                  for ($x = 0; $x < $cart_num; $x++) {
                                    $cart_data = $cart_rs->fetch_assoc();

                                    $product_rs = Database::search("SELECT * FROM `product` WHERE `product_id`='" . $cart_data["product_id"] . "'");
                                    $product_data = $product_rs->fetch_assoc();

                                    $total =  ($product_data["dprice"] * $cart_data["qty"]);

                                    $data_rs = Database::search("SELECT * FROM `user`  WHERE `user_id`='" . $id . "' ");

                                    $address_data = $data_rs->fetch_assoc();

                                    $ship = $product_data["delivery_fee"];

                                    $image_rs = Database::search("SELECT * FROM `images` WHERE `product_id`='" . $product_data["product_id"] . "'");
                                    $image_data = $image_rs->fetch_assoc();

                                    $order_total = $total +     $order_total;




                                  ?>


                                    <tr class=" border-2 border-warning ">
                                      <td class="product-thumbnail"><a href="<?php echo "singleProductView.php?id=" . $product_data["product_id"]; ?>"><img src="admin/<?php echo ($image_data["code"]) ?> " alt=""></a></td>
                                      <td class="product-name"><a href="<?php echo "singleProductView.php?id=" . $product_data["product_id"]; ?>"><?php echo ($product_data["name"]) ?></a>
                                      </td>
                                      <td class="product-price"><span class="amount">Rs.<?php echo ($product_data["dprice"]) ?>.00</span>
                                      </td>
                                      <td class="product-quantity">
                                        <?php echo ($cart_data["qty"]) ?>
                                      </td>
                                      <td class="product-subtotal"><span class="amount">Rs.<?php echo ($total) ?>.00</span>
                                      </td>
                                      <td class="product-remove"><button onclick="deleteFromCart(<?php echo $cart_data['id']; ?>);"><i class="fa fa-times"></i></button></td>
                                    </tr>

                                  <?php

                                  }

                                  ?>



                                </tbody>
                              </table>
                            </div>
                          </form>
                        </div>


                        <div class="col-12 col-xl-4">
                          <div class="card">
                            <div class="card-body">
                              <div class="card">
                                <div class="card-body">
                                  <p class="fs-5">Apply Discount Code</p>
                                  <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter discount code" id="discode">
                                    <button class="btn btn-primary btn-ecomm" type="button" id="discode" onclick="discode();">Apply</button>
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-body">

                                  <div class="mb-3">
                                    <p class="fs-5">Address Details</p>

                                    <?php
                                    $urs = Database::search("SELECT * FROM `user` WHERE `user_id` = '" .  $id . "' ");
                                    $udata = $urs->fetch_assoc();
                                    ?>
                                    <h5>Name</h5>
                                    <p><?php echo ($udata["fname"]) ?>
                                      <?php echo ($udata["lname"]) ?></p>

                                    <h5>Email</h5>
                                    <p><?php echo ($udata["email"]) ?></p>

                                    <h5>Mobile</h5>
                                    <p><?php echo ($udata["mobile"]) ?></p>

                                    <h5>Address</h5>
                                    <?php
                                    $adressnf = $udata["city_id"] < 1 || $udata["street"] == "";
                                    $cityrs = Database::search(" SELECT * FROM `city` WHERE `city_id` = '" . $udata["city_id"] . "' ");
                                    $citydata = $cityrs->fetch_assoc();
                                    if ($adressnf) {
                                    ?><p><?php echo ("Address Not Found"); ?></p><?php

                                                                                } else {
                                                                                  ?><p><?php echo ($udata["no"]); ?></p><?php
                                                                                                                        ?><p><?php echo ($udata["street"]); ?>,</p><?php
                                                                                                                                                                    ?><p><?php echo ($citydata["name"]); ?>,</p><?php
                                                                                                                                                                                                                }

                                                                                                                                                                                                                  ?>

                                  </div>

                                </div>
                              </div>
                              <div class="card mb-0">
                                <div class="card-body">
                                  <p class="mb-2">Subtotal: <span class="float-end">Rs.<input class="" disabled id="totalid" value="<?php echo ($order_total) ?>">.00</span>
                                  </p>
                                  <p class="mb-2">Shipping: <span class="float-end">Rs.<?php echo ($shipping) ?>.00</span>
                                  </p>

                                  <p class="mb-0">Discount: <span class="float-end" id="totalid"></span>
                                  </p>
                                  <div class="my-3 border-top"></div>
                                  <h5 class="mb-0">Order Total: <span class="float-end">Rs.<input type="text" disabled id="oto" value="<?php echo ($shipping + $order_total) ?>"></span>
                                  </h5>
                                  <div class="my-4"></div>
                                  <div class="d-grid"> <button onclick="checkout();" class="btn btn-primary btn-ecomm">Proceed to
                                      Checkout</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                      <?php
                      }

                      ?>


                    </div>
                    <!--end row-->
                  </div>
                </div>
              </div>

            </div>
          </section>
          <div class="container">


          <div class="row justify-content-center">
          <button class="btn col-8 col-lg-3 btn-warning fixed-bottom text-center" type="button" onclick="downloadPDF('Net Pixel LK | <?php echo ($udata["fname"]); ?>') | UID-<?php echo ($udata["user_id"]); ?> ">Download Your Quatation</button>
          </div>
          </div>
          
          <!--end shop cart-->
        <?php

      } else {

        ?>
 
          <section class="error__area pt-60 pb-100">
            <div class="container">
              <div class="col-xl-8 offset-xl-2 col-lg-8 offset-lg-2">
                <div class="error__content text-center">
                  <div class="error__number">
                    <h2>Please Login First</h2>
                  </div>
                  <span>Please Login First and add to cart products</span>


                  <div class="error__search">
                    <form action="#">
                      <input type="text" placeholder="Enter Your Text...">
                      <a href="login.php" class="t-y-btn t-y-btn-grey">Login Your Account</a>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </section>
         
        <?php


      }

        ?>



       <div class="d-none">    
      <div id="myBillingArea" class="col-12 col-lg-12">
          <div class="row">
            <div class="col-12">
              <div class="text-center text-150">
               <img width="350px" src="./assets/img/2.png" alt="">
              </div>
            </div>
          </div>
          <!-- .row -->

          <hr class="row brc-default-l1 mx-n1 mb-4" />

          <div class="row">
            <div class="col-sm-6">
              <div>
                <span class="text-sm text-grey-m2 align-middle">To:</span>
                <span class="text-600 text-110 text-blue align-middle"><?php echo ($udata["fname"]) ?>
                  <?php echo ($udata["lname"]) ?></span>
              </div>
              <div class="text-grey-m2">

              </div>
            </div>
            <!-- /.col -->

            <div class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end">
              <hr class="d-sm-none" />


            </div>
            <!-- /.col -->
          </div>

          <div class="mt-4">
            <div class="row text-600 text-white bgc-default-tp1 py-25">
              <div class="d-none d-sm-block col-1">#</div>
              <div class="col-9 col-sm-5">Description</div>
              <div class="d-none d-sm-block col-4 col-sm-2">Qty</div>
              <div class="d-none d-sm-block col-sm-2">Unit Price</div>
              <div class="col-2">Amount</div>
            </div>

            <div class="text-95 text-secondary-d3">

              <?php
              $cart_rs2 = Database::search("SELECT * FROM `cart` WHERE `user_id`='" . $id . "' ");
              $cart_num2 = $cart_rs2->num_rows;

              $order_total2 = 0;
              for ($x = 0; $x < $cart_num2; $x++) {

                $cart_data2 = $cart_rs2->fetch_assoc();





                $product_rs2 = Database::search("SELECT * FROM `product` WHERE `product_id`='" . $cart_data2["product_id"] . "'");

                $product_data2 = $product_rs2->fetch_assoc();

                $total2 =  ($product_data2["dprice"] * $cart_data2["qty"]);
                $order_total2 = $total2 +     $order_total2;


              ?>




                <div class="row mb-2 mb-sm-0 py-25">
                  <div class="d-none d-sm-block col-1"><?php echo ($x + 1) ?></div>
                  <div class="col-9 col-sm-5"><?php echo ($product_data2["stitle"]) ?></div>
                  <div class="d-none d-sm-block col-2"> <?php echo ($cart_data2["qty"]) ?></div>
                  <div class="d-none d-sm-block col-2 text-95">Rs.<?php echo ($product_data2["dprice"]) ?>.00</div>
                  <div class="col-2 text-secondary-d2">Rs.<?php echo ($total2) ?>.00</div>
                </div>



              <?php
              }
              ?>


            </div>

            <div class="row border-b-2 brc-default-l2"></div>

            <div class="row mt-3">


              <div class="col-12 col-sm-5 text-grey text-90 order-first order-sm-last">
                <div class="row my-2">
                  <div class="col-7 text-right">
                    SubTotal
                  </div>
                  <div class="col-5">
                    <span class="text-120 text-secondary-d1">Rs.<?php echo ($order_total2) ?>.00</span>
                  </div>
                </div>


                <div class="row my-2 align-items-center bgc-primary-l3 p-2">
                  <div class="col-7 text-right">
                    Total Amount
                  </div>
                  <div class="col-5">
                    <span class="text-150 text-success-d3 opacity-2">Rs.<?php echo ($order_total2) ?>.00</span>
                  </div>
                </div>
              </div>
            </div>

            <hr />

            <div>
              <span class="text-secondary-d1 text-105">Thank you for visiting <span class="text-warning">Net Pixel LK</span></span>

            </div>
          </div>
          </div>

        </div>
        </div>
      </div>
  </div>







  </div>
  <!-- end page content-->
  </div>

  <style>
    .text-secondary-d1 {
      color: #728299 !important;
    }

    .page-header {
      margin: 0 0 1rem;
      padding-bottom: 1rem;
      padding-top: .5rem;
      border-bottom: 1px dotted #e2e2e2;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-pack: justify;
      justify-content: space-between;
      -ms-flex-align: center;
      align-items: center;
    }

    .page-title {
      padding: 0;
      margin: 0;
      font-size: 1.75rem;
      font-weight: 300;
    }

    .brc-default-l1 {
      border-color: #dce9f0 !important;
    }

    .ml-n1,
    .mx-n1 {
      margin-left: -.25rem !important;
    }

    .mr-n1,
    .mx-n1 {
      margin-right: -.25rem !important;
    }

    .mb-4,
    .my-4 {
      margin-bottom: 1.5rem !important;
    }

    hr {
      margin-top: 1rem;
      margin-bottom: 1rem;
      border: 0;
      border-top: 1px solid rgba(0, 0, 0, .1);
    }

    .text-grey-m2 {
      color: #888a8d !important;
    }

    .text-success-m2 {
      color: #86bd68 !important;
    }

    .font-bolder,
    .text-600 {
      font-weight: 600 !important;
    }

    .text-110 {
      font-size: 110% !important;
    }

    .text-blue {
      color: #478fcc !important;
    }

    .pb-25,
    .py-25 {
      padding-bottom: .75rem !important;
    }

    .pt-25,
    .py-25 {
      padding-top: .75rem !important;
    }

    .bgc-default-tp1 {
      background-color: rgba(121, 169, 197, .92) !important;
    }

    .bgc-default-l4,
    .bgc-h-default-l4:hover {
      background-color: #f3f8fa !important;
    }

    .page-header .page-tools {
      -ms-flex-item-align: end;
      align-self: flex-end;
    }

    .btn-light {
      color: #757984;
      background-color: #f5f6f9;
      border-color: #dddfe4;
    }

    .w-2 {
      width: 1rem;
    }

    .text-120 {
      font-size: 120% !important;
    }

    .text-primary-m1 {
      color: #4087d4 !important;
    }

    .text-danger-m1 {
      color: #dd4949 !important;
    }

    .text-blue-m2 {
      color: #68a3d5 !important;
    }

    .text-150 {
      font-size: 150% !important;
    }

    .text-60 {
      font-size: 60% !important;
    }

    .text-grey-m1 {
      color: #7b7d81 !important;
    }

    .align-bottom {
      vertical-align: bottom !important;
    }
  </style>


  </div>
  <!--end wrapper-->





  <!-- JS Files-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js "></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
  <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <!--plugins-->
  <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
  <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
  <script src="assets/js/vendor/waypoints.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/meanmenu.js"></script>
  <script src="assets/js/slick.min.js"></script>
  <script src="assets/js/backToTop.js"></script>
  <script src="assets/js/jquery.fancybox.min.js"></script>
  <script src="assets/js/countdown.js"></script>
  <script src="assets/js/nice-select.min.js"></script>
  <script src="assets/js/isotope.pkgd.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/magnific-popup.min.js"></script>
  <script src="assets/js/jquery-ui-slider-range.js"></script>
  <script src="assets/js/ajax-form.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/imagesloaded.pkgd.min.js"></script>
  <script src="assets/js/main.js"></script>
  <!-- Main JS-->
  <script src="assets/js/main.js"></script>
  <script src="script.js"></script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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