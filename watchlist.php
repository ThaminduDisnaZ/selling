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

                      $watch_rs = Database::search("SELECT * FROM `watchlist` WHERE `user_id`='" . $id . "' ");
                      $watch_num = $watch_rs->num_rows;

                      if ($watch_num == 0) {
                      ?>
                        <section class="error__area pt-60 pb-100">
                          <div class="container">
                            <div class="col-xl-8 offset-xl-2 col-lg-8 offset-lg-2">
                              <div class="error__content text-center">
                                <div class="error__number">
                                  <h1></h1>
                                </div>
                               
                                <h2>Not Item in Watchlist</h2>

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
                                   
                                 
                                    <th class="product-remove">Remove</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php

                                  for ($x = 0; $x < $watch_num; $x++) {
                                    $watch_data = $watch_rs->fetch_assoc();

                                    $product_rs = Database::search("SELECT * FROM `product` WHERE `product_id`='" . $watch_data["product_id"] . "'");
                                    $product_data = $product_rs->fetch_assoc();


                                   

                                    $image_rs = Database::search("SELECT * FROM `images` WHERE `product_id`='" . $product_data["product_id"] . "'");
                                    $image_data = $image_rs->fetch_assoc();

                               




                                  ?>


                                    <tr class=" border-2 border-warning ">
                                      <td class="product-thumbnail"><a href="<?php echo "singleProductView.php?id=" . $product_data["product_id"]; ?>"><img src="admin/<?php echo ($image_data["code"]) ?> " alt=""></a></td>
                                      <td class="product-name"><a href="<?php echo "singleProductView.php?id=" . $product_data["product_id"]; ?>"><?php echo ($product_data["name"]) ?></a>
                                      </td>
                                      <td class="product-price"><span class="amount">Rs.<?php echo ($product_data["dprice"]) ?>.00</span>
                                      </td>
                                     
                                      
                                      <td class="product-remove"><button onclick="deleteFromWatchlist(<?php echo $watch_data['watchlist_id']; ?>);"><i class="fa fa-times"></i></button></td>
                                    </tr>

                                  <?php

                                  }

                                  ?>



                                </tbody>
                              </table>
                            </div>
                          </form>
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
   
      <!--End Back To Top Button-->

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
              <span>Please Login First and View your watchlist</span>


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