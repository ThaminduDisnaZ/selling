<?php

session_start();

if (isset($_SESSION["a"])) {
?>




<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Adomx - Responsive Bootstrap 4 Admin Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">

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

<body class="skin-dark" onload="loading();">

    <div class="main-wrapper">


        
    <?php
require "adminHeader.php";
?>



        <?php

require "sideheader.php";

?>


        <!-- Content Body Start -->
        <div class="content-body">

            





                <!--Responsive Table Start-->
                <div class="col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">Users List</h4>

                            <div class="col-auto">

                                <div class="header-search">

                                    <button class="header-search-open d-block d-xl-none"><i
                                            class="zmdi zmdi-search"></i></button>

                                    <div class="header-search-form">
                                       
                                            <input type="text" placeholder="Search Here" id="userid">
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal3"
                                                onclick="searchuserid();"><i class="zmdi zmdi-search"></i></button>
                                                <button class="button button-outline button-primary m-5" onclick="generatePrint();" id="download-button">Download Users Report</button>

                                        <button class="header-search-close d-block d-xl-none"><i
                                                class="zmdi zmdi-close"></i></button>
                                    </div>

                                </div>
                            </div>










                            <!--Vertically Centered Start-->




                            <!-- Modal -->
                            <div class="modal fade " id="exampleModal3">
                                <div class=" modal-dialog modal-dialog-centered" id="udm2">
                                    <div class="modal-content" >

                                        <div class="modal-body" id="udm3">
                                            <h5>User Name</h5>
                                            <p id="luname"></p>
                                            <hr>
                                            <h5>User Email</h5>
                                            <p id="lemail"></p>
                                            <hr>
                                            <h5>User Mobile Number</h5>
                                            <p id="lmobile"></p>
                                            <hr>
                                            <h5>User Adress</h5>
                                            <p id="lno"></p>
                                            <p id="lstreet"></p>
                                            <p id="ldistrict"></p>
                                            <hr>
                                            <h5>User Block</h5>
                                            <label class="adomx-switch danger"><input type="checkbox" id="lblock"> <i
                                                    class="lever"></i> <span class="text">Danger</span></label>
                                            <br>
                                            <div class="modal-footer">
                                                <button class="button button-danger"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button class="button button-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!--Vertically Centered End-->











                        </div>

                        <div class="box-body" id="invoice">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>User Id</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Status</th>

                                        </tr>
                                    </thead>
                                    <tbody id="tb">

                                        <!-- table body -->



                                        <!-- table body -->

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Responsive Table End-->





        </div><!-- Content Body End -->

        <!-- Footer Section Start -->
        <div class="footer-section">
            <div class="container-fluid">

                <div class="footer-copyright text-center">
                    <p class="text-body-light">2022 &copy; <a href="https://themeforest.net/user/codecarnival">Codecarnival</a></p>
                </div>

            </div>
        </div><!-- Footer Section End -->

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

    <!-- Plugins & Activation JS For Only This Page -->
    <script src="assets/js/plugins/datatables/datatables.min.js"></script>
    <script src="assets/js/plugins/datatables/datatables.active.js"></script>
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

    <!-- Plugins & Activation JS For Only This Page -->

    <!--Moment-->
    <script src="assets/js/plugins/moment/moment.min.js"></script>

    <!--Daterange Picker-->
    <script src="assets/js/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="assets/js/plugins/daterangepicker/daterangepicker.active.js"></script>

    <!--Echarts-->
    <script src="assets/js/plugins/chartjs/Chart.min.js"></script>
    <script src="assets/js/plugins/chartjs/chartjs.active.js"></script>

    <!--VMap-->
    <script src="assets/js/plugins/vmap/jquery.vmap.min.js"></script>
    <script src="assets/js/plugins/vmap/maps/jquery.vmap.world.js"></script>
    <script src="assets/js/plugins/vmap/maps/samples/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/plugins/vmap/vmap.active.js"></script>
    <script src="admin.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="assets/js/plugins/datatables/datatables.min.js"></script>
    <script src="assets/js/plugins/datatables/datatables.active.js"></script>



</body>


</body>

</html>




<?php
} else {
    
    header("Location: ./adminlogin.php");
}


?>