
<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Topico - Clean, Minimal E-commerce HTML5 Template </title>
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
                                                                                  ?><p><?php echo ($udata["no"]); ?>,</p><?php
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
          <!--end shop cart-->


        </div>
        <!-- end page content-->
      </div>



      <!--Start Back To Top Button-->
      <a href="javaScript:;" class="back-to-top">
        <ion-icon name="arrow-up-outline"></ion-icon>
      </a>
      <!--End Back To Top Button-->

      <!--start switcher-->
      <div class="switcher-body">
        <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
          <ion-icon name="color-palette-sharp" class="me-0"></ion-icon>
        </button>
        <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
          <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
          </div>
          <div class="offcanvas-body">
            <h6 class="mb-0">Theme Variation</h6>
            <hr>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1" checked>
              <label class="form-check-label" for="LightTheme">Light</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2">
              <label class="form-check-label" for="DarkTheme">Dark</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDark" value="option3">
              <label class="form-check-label" for="SemiDark">Semi Dark</label>
            </div>
            <hr />
            <h6 class="mb-0">Header Colors</h6>
            <hr />
            <div class="header-colors-indigators">
              <div class="row row-cols-auto g-3">
                <div class="col">
                  <div class="indigator headercolor1" id="headercolor1"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor2" id="headercolor2"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor3" id="headercolor3"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor4" id="headercolor4"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor5" id="headercolor5"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor6" id="headercolor6"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor7" id="headercolor7"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor8" id="headercolor8"></div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <!--end switcher-->


      <!--start overlay-->
      <div class="overlay nav-toggle-icon"></div>
      <!--end overlay-->
    <?php

    } else {
      header("Location:error.html");
    }

    ?>
  </div>
  <!--end wrapper-->





  <!-- JS Files-->
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
</body>

</html>