<?php
require_once "./connection.php";

?>








<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet" />
  <script src="assets/js/pace.min.js"></script>

  <!--plugins-->
  <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
  <link href="assets/plugins/nouislider/nouislider.min.css" rel="stylesheet" />

  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

  <!--Theme Styles-->
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

  <!-- CSS here -->
  <link rel="stylesheet" href="assets/css/preloader.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/slick.css">
  <link rel="stylesheet" href="assets/css/backToTop.css">
  <link rel="stylesheet" href="assets/css/meanmenu.css">
  <link rel="stylesheet" href="assets/css/nice-select.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/animate.min.css">
  <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="assets/css/fontAwesome5Pro.css">
  <link rel="stylesheet" href="assets/css/ui-range-slider.css">
  <link rel="stylesheet" href="assets/css/default.css">
  <link rel="stylesheet" href="assets/css/style.css">

  <link href="assets/css/dark-theme.css" rel="stylesheet" />
  <link href="assets/css/semi-dark.css" rel="stylesheet" />
  <link href="assets/css/header-colors.css" rel="stylesheet" />
  <?php $titlewindow = "User Profile"; ?>

  <title>User Profile</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.21.4/dist/css/uikit.min.css" />
</head>


</head>

<body>


  <!--start wrapper-->
  <div class="wrapper">

    <?php
    require "heder.php";
    ?>

    <!-- start page content wrapper-->
    <div class="page-content-wrapper">
      <!-- start page content-->
      <div class="page-content">

        <?php
        require "breadcrumb.php";
        ?>


        <?php if (isset($_SESSION["u"])) {

          $data = $_SESSION["u"];
          $u_id = $data["user_id"];
        ?>



          <div class="row">
            <div class="col-12 col-lg-8 col-xl-9">
              <div class="card overflow-hidden radius-10">
                <div class="profile-cover position-relative mb-4">


                
                  <div class="align-items-center"> <img src="resources\user-profile-images\user-image.jpg" width="120px" class="rounded float-center m-5" alt="...">
                 
                
                
                </div>



                </div>
                <div class="card-body">
                  <div class="mt-5 d-flex align-items-start justify-content-between">
                    <div class="">
                      <h3 class="mb-2"><?php echo ($data["fname"]) ?> <?php echo ($data["lname"]) ?></h3>
                      <p class="mb-1"><?php echo ($data["email"]) ?></p>


                    </div>

                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h4 class="mb-2">About Me</h4>
                  <p class="">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                  <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-4 col-xl-3">
              <div class="card radius-10">
                <div class="card-body">
                  <h5 class="mb-3">Location</h5>
                  <p class="mb-0"><ion-icon name="compass-sharp" class="me-2"></ion-icon>Kalkio Network</p>
                </div>
              </div>

              <div class="card radius-10">
                <div class="card-body">
                  <h5 class="mb-3">Connect</h5>
                  <p class=""><ion-icon name="globe-sharp" class="me-2"></ion-icon>www.example.com</p>
                  <p class=""><ion-icon name="logo-facebook" class="me-2"></ion-icon>Facebook</p>
                  <p class=""><ion-icon name="logo-twitter" class="me-2"></ion-icon>Twitter</p>
                  <p class="mb-0"><ion-icon name="logo-linkedin" class="me-2"></ion-icon>LinkedIn</p>
                </div>
              </div>

              <div class="card radius-10">
                <div class="card-body">
                  <h5 class="mb-3">Skills</h5>
                  <div class="mb-3">
                    <p class="mb-1">Web Design</p>
                    <div class="progress" style="height: 5px;">
                      <div class="progress-bar" role="progressbar" style="width: 45%"></div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <p class="mb-1">HTML5</p>
                    <div class="progress" style="height: 5px;">
                      <div class="progress-bar" role="progressbar" style="width: 55%"></div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <p class="mb-1">PHP7</p>
                    <div class="progress" style="height: 5px;">
                      <div class="progress-bar" role="progressbar" style="width: 65%"></div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <p class="mb-1">CSS3</p>
                    <div class="progress" style="height: 5px;">
                      <div class="progress-bar" role="progressbar" style="width: 75%"></div>
                    </div>
                  </div>
                  <div class="mb-0">
                    <p class="mb-1">Photoshop</p>
                    <div class="progress" style="height: 5px;">
                      <div class="progress-bar" role="progressbar" style="width: 85%"></div>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div><!--end row-->





      </div>
    <?php
        } else {
          $u_id = "";
    ?>

      <section class="error__area pt-60 pb-100">
        <div class="container">
          <div class="col-xl-8 offset-xl-2 col-lg-8 offset-lg-2">
            <div class="error__content text-center">
              <div class="error__number">

              </div>
              <span>user not found</span>
              <h2>Please Login Your Account</h2>

              <div class="error__search">


                <a href="login.php"><button type="submit" class="t-y-btn t-y-btn-grey">Login</button></a>

              </div>
            </div>
          </div>
        </div>
      </section>

    <?php
        } ?>

    <!-- end page content-->
    </div>



    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><ion-icon name="arrow-up-outline"></ion-icon></a>
    <!--End Back To Top Button-->

    <!--start switcher-->
    <div class="switcher-body">
      <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><ion-icon name="color-palette-sharp" class="me-0"></ion-icon></button>
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

  <!-- Main JS-->
  <script src="assets/js/main.js"></script>

  <!-- JS here -->
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
  <script src="assets/js/jquery-ui-slider-range.js"></script>
  <script src="assets/js/ajax-form.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/imagesloaded.pkgd.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="script.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.21.4/dist/js/uikit.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.21.4/dist/js/uikit-icons.min.js"></script>


</body>

</html>