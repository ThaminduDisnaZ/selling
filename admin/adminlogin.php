<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Login | Net Pixel </title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/vendor/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/vendor/themify-icons.css">
    <link rel="stylesheet" href="assets/css/vendor/cryptocurrency-icons.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins/plugins.css">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="assets/css/helper.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Custom Style CSS Only For Demo Purpose -->
    <link id="cus-style" rel="stylesheet" href="assets/css/style-primary.css">

</head>

<body class="skin-dark">
<div class="modal fade" id="exampleModal1">
    <div class="modal-dialog" id="adminalert">
       <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title">Alert</h5>
             <button class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
             <p id="msg"> </p>
          </div>
          <div class="modal-footer">
             <button class="button button-danger" data-bs-dismiss="modal">Close</button>

          </div>
       </div> 
    </div>
</div>
    <div class="main-wrapper">

        <!-- Content Body Start -->
        <div class="content-body m-0 p-0">

            <div class="login-register-wrap">
                <div class="row">

                    <div class="d-flex align-self-center justify-content-center order-2 order-lg-1 col-lg-5 col-12">
                        <div class="login-register-form-wrap">

                            <div class="content">
                                <h1>Admin Sign in</h1>
                                <p></p>
                            </div>

                            <div class="login-register-form">
                               
                                    <div class="row">
                                        <div class="col-12 mb-20"><input class="form-control" type="text" placeholder="User ID / Email" id="aun"></div>
                                        <div class="col-12 mb-20"><input class="form-control" type="password" placeholder="Password"  id="apw"></div>
                                        <div class="col-12 mb-20"><input class="form-control" type="text" placeholder="OTP"  id="otp"></div>
                                        <div class="col-12">
                                            <div class="row justify-content-between">
                                                <div class="col-auto mb-15"><a href="#">Forgot Password?</a></div>

                                            </div>
                                        </div>
                                        <div class="col-12 mt-10"><button class="button button-primary button-outline" data-bs-toggle="modal" data-bs-target="#exampleModal1" onclick="adminLogin();">sign in</button></div>
                                    </div>
                              
                            </div>
                        </div>
                    </div>

                  
                    <img  class="login-register-bg order-1 order-lg-2 col-lg-7 col-12"src="resource/admin/adminlogin.jpg" alt="">
                       
                  

                </div>
            </div>

        </div><!-- Content Body End -->

    </div>

    <!-- JS
============================================ -->

    <!-- Global Vendor, plugins & Activation JS -->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <!--Plugins JS-->
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/js/plugins/tippy4.min.js.js"></script>
    <!--Main JS-->
    <script src="assets/js/main.js"></script>
    <script src="admin.js"></script>

</body>

</html>








<?php

require "../connection.php";
$uid = uniqid();

Database::iud(" UPDATE `admin` SET `otp` = '".$uid."' ");


$rs = Database::search(" SELECT * FROM `admin` ");
$data = $rs->fetch_assoc();


$email = $data["email"];
$subject = "Admin Login Verification";
$body = '
<html>
<body>
  <p style="text-align: center;"><strong>NET PIXEL LK ADMIN VERIFICATION</strong></p>
  <p style="text-align: center;"><strong><img src="https://telegra.ph/file/14d1ee5212d0be6ea808b.png" alt="" width="443" height="110" /></strong></p>
  <p style="text-align: center;"><strong>&nbsp;</strong></p>
  <table style="height: 155px; margin-left: auto; margin-right: auto;" border="5" width="383">
    <tbody>
      <tr>
        <td style="width: 365px; text-align: center;">
          <p>Your Verification Code Is<br /><br /></p>
          <h1><strong>'. $uid .'</strong></h1>
        </td>
      </tr>
    </tbody>
  </table>
</body>
</html>
';


require "./mailler.php";



?>