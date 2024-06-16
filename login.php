<!doctype html>
<html lang="en" class="light-theme">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Login | Net Pixel </title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet" />
  <script src="assets/js/pace.min.js"></script>

  <!--plugins-->
  <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />

  <!-- CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
  <title>LOGIN | Net Pixel</title>
</head>

<body>




  <?php

  $email = "";
  $password = "";

  if (isset($_COOKIE["email"])) {
    $email = $_COOKIE["email"];
  }

  if (isset($_COOKIE["password"])) {
    $password = $_COOKIE["password"];
  }

  ?>


  <!--start wrapper-->
  <div class="wrapper">
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-transparent p-3">
        <div class="container-fluid">
          <a href="javascript:;"><img src="assets/images/logo-icon-3.png" alt="" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-3">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:;">About Us</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="javascript:;">Contact</a>
              </li>
            </ul>

          </div>
        </div>
      </nav>
    </header>
    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto mt-5">
          <div class="card radius-10">
            <div class="card-body p-4">
              <div class="text-center">
                <h4>Sign In</h4>
                <p>Sign In to your account</p>
              </div>
              <form class="form-body row g-3">
                <div class="col-12">
                  <label for="inputEmail" class="form-label">Email</label>
                  <input type="email" class="form-control" id="em" value="<?php echo ($email) ?>">
                </div>
                <div class="col-12">
                  <label for="inputPassword" class="form-label">Password</label>
                  <input type="password" class="form-control" id="pw" value="<?php echo ($password) ?>">
                </div>
                <div class="col-12 col-lg-6">
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="rm">
                    <label class="form-check-label" for="flexSwitchCheckRemember">Remember Me</label>
                  </div>
                </div>
                <div class="col-12 col-lg-6 text-end">
                  <a data-bs-toggle="modal" style="cursor: pointer;" data-bs-target="#exampleVerticallycenteredModal">Forgot Password?</a>

                  <div class="modal fade" id="exampleVerticallycenteredModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Frogot Password</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                          <input type="text" class="form-control m-100" id="fpw" placeholder="Enter Your Email" id="fpem">
                          <br>
                          <input type="text" class="form-control m-100 d-none" id="otp" placeholder="Enter Your OTP" id="otp">


                          <div id="npwdiv">

                          </div>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" id="seb" class="btn btn-primary d-block" onclick="frogotpw();">Send Email</button>
                          <button type="button" id="otpb" class="btn btn-primary d-none" onclick="otpconfirm();">Confirm OTP</button>




                          <button type="button" id="cpb" class="btn btn-primary d-none" onclick="changepw();">Change Password</button>


                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="col-12 col-lg-12">
                  <div class="d-grid">
                    <button type="button" class="btn btn-primary" onclick="signin();">Sign In</button>
                  </div>
                </div>

                <div class="alert alert-dismissible fade show py-2 bg-info d-none" id="msgdiv2">
                  <div class="d-flex align-items-center">
                    <div class="fs-3 text-dark"><ion-icon name="information-circle-sharp"></ion-icon>
                    </div>
                    <div class="ms-3">
                      <div class="text-dark" id="msg2"></div>
                    </div>
                  </div>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>


                <div class="col-12 col-lg-12">
                  <div class="position-relative border-bottom my-3">
                    <div class="position-absolute seperator translate-middle-y">or continue with</div>
                  </div>
                </div>
                <div class="col-12 col-lg-12">
                  <div class="social-login d-flex flex-row align-items-center justify-content-center gap-2 my-2">
                    <a href="javascript:;" class=""><img src="assets/images/icons/facebook.png" alt=""></a>
                    <a href="javascript:;" class=""><img src="assets/images/icons/apple-black-logo.png" alt=""></a>
                    <a href="javascript:;" class=""><img src="assets/images/icons/google.png" alt=""></a>
                  </div>
                </div>
                <div class="col-12 col-lg-12 text-center">
                  <p class="mb-0">Don't have an account? <a href="register.php">Sign up</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="my-5">
      <div class="container">
        <div class="d-flex align-items-center gap-4 fs-5 justify-content-center social-login-footer">
          <a href="javascript:;">
            <ion-icon name="logo-twitter"></ion-icon>
          </a>
          <a href="javascript:;">
            <ion-icon name="logo-linkedin"></ion-icon>
          </a>
          <a href="javascript:;">
            <ion-icon name="logo-github"></ion-icon>
          </a>
          <a href="javascript:;">
            <ion-icon name="logo-facebook"></ion-icon>
          </a>
          <a href="javascript:;">
            <ion-icon name="logo-pinterest"></ion-icon>
          </a>
        </div>
        <div class="text-center">
          <p class="my-4">Copyright © 2024 Net Pixel LK.</p>
        </div>
      </div>
    </footer>
  </div>
  <!--end wrapper-->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
</body>

</html>