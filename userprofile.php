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
    <link href="assets/css/dark-theme.css" rel="stylesheet" />
    <link href="assets/css/semi-dark.css" rel="stylesheet" />
    <link href="assets/css/header-colors.css" rel="stylesheet" />
    <?php $titlewindow = "User Profile"; ?>
    <title>User Profile</title>
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

            <div class="row">
              <div class="col-12 col-lg-8 col-xl-9">
                <div class="card overflow-hidden radius-10">
                  <div class="profile-cover bg-dark position-relative mb-4">
                    <div class="user-profile-avatar shadow position-absolute top-50 start-0 translate-middle-x">
                      <img src="assets/images/avatars/06.png" alt="...">
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="mt-5 d-flex align-items-start justify-content-between">
                      <div class="">
                        <h3 class="mb-2">Jhon Deo</h3>
                        <p class="mb-1">Engineer at BB Agency Industry</p>
                        <p>New York, United States</p>
                        <div class="">
                          <span class="badge rounded-pill bg-primary">UX Research</span>
                          <span class="badge rounded-pill bg-primary">CX Strategy</span>
                          <span class="badge rounded-pill bg-primary">Project Management</span>
                        </div>
                      </div>
                      <div class="">
                         <a href="javascript:;" class="btn btn-primary"><ion-icon name="send-sharp"></ion-icon>Send Message</a>
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
              <hr/>
              <h6 class="mb-0">Header Colors</h6>
              <hr/>
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


  </body>
</html>