<?php

session_start();

if (isset($_SESSION["a"])) {
?>











<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Dashboard</title>
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

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Dashboard <span>/ eCommerce</span></h3>
                    </div>
                </div><!-- Page Heading End -->

                <!-- Page Button Group Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-date-range">
                        <input type="text" class="form-control input-date-predefined">
                    </div>
                </div><!-- Page Button Group End -->

            </div><!-- Page Headings End -->

            <!-- Top Report Wrap Start -->
            <div class="row">
                <!-- Top Report Start -->
                <div class="col-xlg-3 col-md-6 col-12 mb-30">
                    <div class="top-report">

                        <!-- Head -->
                        <div class="head">
                            <h4>Total Registerd Users</h4>
                            <a href="#" class="view"><i class="zmdi zmdi-eye"></i></a>
                        </div>

                        <!-- Content -->
                        <div class="content" id="report">
                            <div class="spinner-border">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>

                        <!-- Footer -->
                        <div class="footer">
                            <div class="progess">
                                <div class="progess-bar" style="width: 100%;"></div>
                            </div>
                            <!-- <p>92% of unique visitor</p> -->
                        </div>

                    </div>
                </div><!-- Top Report End -->

                <!-- Top Report Start -->
                <div class="col-xlg-3 col-md-6 col-12 mb-30">
                    <div class="top-report">

                        <!-- Head -->
                        <div class="head">
                            <h4>Total Products</h4>
                            <a href="#" class="view"><i class="zmdi zmdi-eye"></i></a>
                        </div>

                        <!-- Content -->
                        <div class="content" id="PReport">
                            <div class="spinner-border">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>

                        <!-- Footer -->
                        <div class="footer">
                            <div class="progess">
                                <div class="progess-bar" style="width: 100%;"></div>
                            </div>
                            <!-- <p>98% of unique visitor</p> -->
                        </div>

                    </div>
                </div><!-- Top Report End -->


            </div><!-- Top Report Wrap End -->

            <div class="row mbn-30">

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
                                        <form action="#">
                                            <input type="text" placeholder="Search Here" id="userid">
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal3"
                                                onclick="searchuserid();"><i class="zmdi zmdi-search"></i></button>
                                        </form>
                                        <button class="header-search-close d-block d-xl-none"><i
                                                class="zmdi zmdi-close"></i></button>
                                    </div>

                                </div>
                            </div>





                            <!--Vertically Centered Start-->




                            <!-- Modal -->
                            <div class="modal fade " id="exampleModal3">
                                <div class=" modal-dialog modal-dialog-centered" id="udm2">
                                    <div class="modal-content">

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

                        <div class="box-body">
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
                <!-- Recent Transaction Start -->
                <div class="col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">Orders List</h4>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table table-vertical-middle table-selectable">

                                    <!-- Table Head Start -->
                                    <thead>
                                        <tr>
                                            <!-- <th class="selector"><label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label></th> -->
                                            <!--<th class="selector h5"><button class="button-check"></button></th>-->
                                            <th><span>Order ID</span></th>
                                            <th><span>Product Name</span></th>
                                            <th><span>User Name</span></th>
                                            <th><span>Price</span></th>
                                            <th><span>Status</span></th>
                                            <th></th>
                                        </tr>
                                    </thead><!-- Table Head End -->

                                    <!-- Table Body Start -->
                                    <tbody id="orderslist">
                                        <!-- <tr>
                                            <td class="selector"><label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label></td>
                                            <td><img src="assets/images/product/list-product-1.jpg" alt="" class="table-product-image rounded-circle"></td>
                                            <td><a href="#">Microsoft surface pro 4</a></td>
                                            <td>#MSP40022</td>
                                            <td>05 - Products</td>
                                            <td>$60000000.00</td>
                                            <td><span class="badge badge-success">Paid</span></td>
                                            <td><a class="h3" href="#"><i class="zmdi zmdi-more"></i></a></td>
                                        </tr> -->

                                        <!-- <tr>
                                            <td class="selector"><label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label></td>
                                            <td><img src="assets/images/product/list-product-3.jpg" alt="" class="table-product-image rounded-circle"></td>
                                            <td><a href="#">Microsoft surface pro 4</a></td>
                                            <td>#MSP40022</td>
                                            <td>05 - Products</td>
                                            <td>$60000000.00</td>
                                            <td><span class="badge badge-warning">Due</span></td>
                                            <td><a class="h3" href="#"><i class="zmdi zmdi-more"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="selector"><label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label></td>
                                            <td><img src="assets/images/product/list-product-4.jpg" alt="" class="table-product-image rounded-circle"></td>
                                            <td><a href="#">Microsoft surface pro 4</a></td>
                                            <td>#MSP40022</td>
                                            <td>05 - Products</td>
                                            <td>$60000000.00</td>
                                            <td><span class="badge badge-danger">Reject</span></td>
                                            <td><a class="h3" href="#"><i class="zmdi zmdi-more"></i></a></td>
                                        </tr> -->
                                    </tbody><!-- Table Body End -->

                                </table>
                            </div>
                        </div>
                    </div>
                </div><!-- Recent Transaction End -->

                <!-- Daily Sale Report Start -->
                <div class="col-xlg-4 col-lg-6 col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">Daily Sale Report</h4>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table daily-sale-report">

                                    <!-- Table Head Start -->
                                    <thead>
                                        <tr>
                                            <th>Client</th>
                                            <th>Detail</th>
                                            <th>Payment</th>
                                        </tr>
                                    </thead><!-- Table Head End -->

                                    <!-- Table Body Start -->
                                    <tbody>

                                        <tr>
                                            <td class="fw-600">Alexander</td>
                                            <td>
                                                <p>Sed do eiusmod tempor <br>incididunt ut labore.</p>
                                            </td>
                                            <td><span
                                                    class="text-success d-flex justify-content-between fw-600">$500.00<span
                                                        class="tippy"
                                                        data-tippy-content="Sed do eiusmod tempor <br/> incididunt ut labore."><i
                                                            class="zmdi zmdi-info-outline"></i></span></span></td>
                                        </tr>
                                        
                                    </tbody><!-- Table Body End -->

                                </table>
                            </div>
                        </div>
                    </div>
                </div><!-- Daily Sale Report End -->

                <!-- To Do List Start -->
                <div class="col-xlg-4 col-lg-6 col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">To-do List</h4>
                        </div>
                        <div class="box-body p-0">

                            <!--Todo List Start-->
                            <ul class="todo-list">

                              

                            </ul>
                            <!--Todo List End-->

                            <!--Add Todo List Start-->
                            <form action="#" class="todo-list-add-new" data-date="false">
                                <label class="status"><input type="checkbox"><i
                                        class="icon zmdi zmdi-star-outline"></i></label>
                                <input class="content" type="text" placeholder="Type new Task">
                                <button class="submit"><i class="zmdi zmdi-plus-circle-o"></i></button>
                            </form>
                            <!--Add Todo List End-->

                        </div>
                    </div>
                </div><!-- To Do List End -->

                


            </div>

        </div><!-- Content Body End -->

        <!-- Footer Section Start -->
        <div class="footer-section">
            <div class="container-fluid">

                <div class="footer-copyright text-center">
                    <p class="text-body-light">2022 &copy; <a
                            href="https://themeforest.net/user/codecarnival">Codecarnival</a></p>
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


</body>

</html>






<?php
} else {
    
    header("Location: ./adminlogin.php");
}


?>