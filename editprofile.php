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
    <?php $titlewindow = "Edit Profile"; ?>
    <title>Edit Profile</title>
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
            <div class="col-lg-8 mx-auto">
              <div class="card radius-10">
                <div class="card-body">
                  <form>
                  <h5 class="mb-3">Edit Profile</h5>
                  <div class="mb-4 d-flex flex-column gap-3 align-items-center justify-content-center">
                    <div class="user-change-photo shadow">
                      <img src="assets/images/avatars/06.png" alt="...">
                    </div>
                    <button type="button" class="btn btn-outline-primary btn-sm radius-30 px-4"><ion-icon name="image-sharp"></ion-icon>Change Photo</button>
                  </div>
                  <h5 class="mb-0 mt-4">User Information</h5>
                  <hr>
                  <div class="row g-3">
                    <div class="col-6">
                       <label class="form-label">Username</label>
                       <input type="text" class="form-control" value="@jhon">
                    </div>
                    <div class="col-6">
                     <label class="form-label">Email address</label>
                     <input type="text" class="form-control" value="xyz@example.com">
                   </div>
                     <div class="col-6">
                       <label class="form-label">First Name</label>
                       <input type="text" class="form-control" value="jhon">
                   </div>
                   <div class="col-6">
                       <label class="form-label">Last Name</label>
                       <input type="text" class="form-control" value="">
                   </div>
                 </div>
    
                 <h5 class="mb-0 mt-4">Contact Information</h5>
                 <hr>
                 <div class="row g-3">
                  <div class="col-12">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" value="47-A, city name, United States">
                   </div>
                   <div class="col-6">
                      <label class="form-label">City</label>
                      <input type="text" class="form-control" value="@jhon">
                   </div>
                   <div class="col-6">
                    <label class="form-label">Country</label>
                    <input type="text" class="form-control" value="xyz@example.com">
                  </div>
                    <div class="col-6">
                      <label class="form-label">Pin Code</label>
                      <input type="text" class="form-control" value="jhon">
                  </div>
                  <div class="col-6">
                      <label class="form-label">Last Name</label>
                      <input type="text" class="form-control" value="Deo">
                  </div>
                  <div class="col-12">
                    <label class="form-label">About Me</label>
                    <textarea class="form-control" rows="4" cols="4" placeholder="Describe yourself..."></textarea>
                   </div>
                  </div>
                  <div class="text-start mt-3">
                    <button type="button" class="btn btn-primary px-4">Save Changes</button>
                  </div>
                </div>
               </form>
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