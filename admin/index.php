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
    
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->

    
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">

    
    <link rel="stylesheet" href="assets/css/vendor/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/vendor/themify-icons.css">
    <link rel="stylesheet" href="assets/css/vendor/cryptocurrency-icons.css">

    
    <link rel="stylesheet" href="assets/css/plugins/plugins.css">

    
    <link rel="stylesheet" href="assets/css/helper.css">

    
    <link rel="stylesheet" href="assets/css/style.css">

    
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



        
        <div class="content-body">

            
            <div class="row justify-content-between align-items-center mb-10">

                
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Dashboard <span>/ eCommerce</span></h3>
                    </div>
                </div>

                
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-date-range">
                        <input type="text" class="form-control input-date-predefined">
                    </div>
                </div>

            </div>

            
            <div class="row">
                
                <div class="col-xlg-3 col-md-6 col-12 mb-30">
                    <div class="top-report">

                        
                        <div class="head">
                            <h4>Total Registerd Users</h4>
                            <a href="#" class="view"><i class="zmdi zmdi-eye"></i></a>
                        </div>

                        
                        <div class="content" id="report">
                            <div class="spinner-border">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>

                        
                        <div class="footer">
                            <div class="progess">
                                <div class="progess-bar" style="width: 100%;"></div>
                            </div>
                            
                        </div>

                    </div>
                </div>

                
                <div class="col-xlg-3 col-md-6 col-12 mb-30">
                    <div class="top-report">

                        
                        <div class="head">
                            <h4>Total Products</h4>
                            <a href="#" class="view"><i class="zmdi zmdi-eye"></i></a>
                        </div>

                        
                        <div class="content" id="PReport">
                            <div class="spinner-border">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>

                        
                        <div class="footer">
                            <div class="progess">
                                <div class="progess-bar" style="width: 100%;"></div>
                            </div>
                            
                        </div>

                    </div>
                </div>


            </div>

            <div class="row mbn-30">


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
                                      
                                        <button class="header-search-close d-block d-xl-none"><i
                                                class="zmdi zmdi-close"></i></button>
                                    </div>

                                </div>
                            </div>

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

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <div class="col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">Orders List</h4>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table table-vertical-middle table-selectable">

                                    
                                    <thead>
                                        <tr>
                                            
                                            
                                            <th><span>Order ID</span></th>
                                            <th><span>Product Name</span></th>
                                            <th><span>User Name</span></th>
                                            <th><span>Price</span></th>
                                            <th><span>Status</span></th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    
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
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="col-xlg-4 col-lg-6 col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">To-do List</h4>
                        </div>
                        <div class="box-body p-0">

                            
                            <ul class="todo-list">

                              

                            </ul>
                            

                            
                            <form action="#" class="todo-list-add-new" data-date="false">
                                <label class="status"><input type="checkbox"><i
                                        class="icon zmdi zmdi-star-outline"></i></label>
                                <input class="content" type="text" placeholder="Type new Task">
                                <button class="submit"><i class="zmdi zmdi-plus-circle-o"></i></button>
                            </form>
                            

                        </div>
                    </div>
                </div>

                


            </div>

        </div>

  
  <div class="footer-section">
            <div class="container-fluid">

                <div class="footer-copyright text-center">
                    <p class="text-body-light">2024 &copy; <a
                            href="https://thamindudisna.info">Net Pixel LK</a></p>
                </div>

            </div>
        </div>

    </div>

    
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>    
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/js/plugins/tippy4.min.js.js"></script>    
    <script src="assets/js/main.js"></script>    
    <script src="assets/js/plugins/moment/moment.min.js"></script>    
    <script src="assets/js/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="assets/js/plugins/daterangepicker/daterangepicker.active.js"></script>    
    <script src="assets/js/plugins/chartjs/Chart.min.js"></script>
    <script src="assets/js/plugins/chartjs/chartjs.active.js"></script>    
    <script src="assets/js/plugins/vmap/jquery.vmap.min.js"></script>
    <script src="assets/js/plugins/vmap/maps/jquery.vmap.world.js"></script>
    <script src="assets/js/plugins/vmap/maps/samples/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/plugins/vmap/vmap.active.js"></script>
    <script src="admin.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="assets/js/plugins/datatables/datatables.min.js"></script>
    <script src="assets/js/plugins/datatables/datatables.active.js"></script>



</body>

</html>






<?php
} else {
    
    header("Location: ./adminlogin.php");
}


?>