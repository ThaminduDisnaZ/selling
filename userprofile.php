
<?php
 require_once "./connection.php";

 ?>
<?php $titlewindow = "User Profile"; ?>






<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>User Profile</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/assets/css/vendor/bootstrap.min.css">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/assets/css/vendor/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="assets/assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="assets/assets/css/vendor/themify-icons.css">
    <link rel="stylesheet" href="assets/assets/css/vendor/cryptocurrency-icons.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/assets/css/plugins/plugins.css">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="assets/assets/css/helper.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/assets/css/style.css">

    <!-- Custom Style CSS Only For Demo Purpose -->
    <link id="cus-style" rel="stylesheet" href="assets/assets/css/style-primary.css">
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

</head>

<div class="main-wrapper">


    <?php
    require "heder.php";
    ?>

    <!-- Content Body Start -->
    <div class="content-body">
<?php     if (isset($_SESSION["u"])) {   ?>
<!-- Page Headings Start -->
<div class="row justify-content-between align-items-center mb-10">

    <!-- Page Heading Start -->
    <div class="col-12 col-lg-auto mb-20">
        <div class="page-heading">
            <h3>Your Profile</h3>
        </div>
    </div><!-- Page Heading End -->

</div><!-- Page Headings End -->

<div class="row mbn-50">

    <!--Author Top Start-->
    <div class="col-12 mb-50">
        <div class="author-top">
            <div class="inner">
                <div class="author-profile">
                    <div class="image">
                        <img src="resources\user-profile-images\user-image.jpg" class="" alt="">
                      
                        <button class="edit"><i class="zmdi zmdi-cloud-upload"></i>Change Image</button>
                    </div>
                    <div class="info">
                        <h5>Madison Howard</h5>
                        <span>UI UX Designer</span>
                        <a href="#" class="edit"><i class="zmdi zmdi-edit"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Author Top End-->

    <!--Timeline / Activities Start-->
    <div class="col-xlg-8 col-12 mb-50">
        <div class="box">

            <div class="box-head">
                <h3 class="title">Timeline / Activities</h3>
            </div>

            <div class="box-body">

                <div class="timeline-wrap row mbn-50">

                    <div class="col-12 mb-50"><span class="timeline-date">13 february 2018</span></div>

                    <div class="col-12 mb-50">
                        <ul class="timeline-list">

                            <li>
                                <span class="icon"><i class="zmdi zmdi-receipt"></i></span>
                                <div class="details">
                                    <h5 class="title"><a href="#">Create New Task for New Marketing</a></h5>
                                    <div class="content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id dolores, assumenda quaerat inventore atque dolore sapiente doloribus iusto quisquam ullam autem labore, laborum beatae repudiandae! Recusandae ullam cumque, non temporibus?</p>
                                    </div>
                                    <span class="time">5 min ago</span>
                                </div>
                            </li>

                            <li>
                                <span class="icon"><i class="zmdi zmdi-receipt"></i></span>
                                <div class="details">
                                    <h5 class="title"><a href="#">Create New Task for New Marketing</a></h5>
                                    <div class="gallery">
                                        <div class="row mbn-30">

                                            <div class="col-md-4 col-sm-6 col-12 mb-30"><a href="#"><img src="assets/images/gallery/profile-gallery-1.jpg" alt=""></a></div>
                                            <div class="col-md-4 col-sm-6 col-12 mb-30"><a href="#"><img src="assets/images/gallery/profile-gallery-2.jpg" alt=""></a></div>
                                            <div class="col-md-4 col-sm-6 col-12 mb-30"><a href="#"><img src="assets/images/gallery/profile-gallery-3.jpg" alt=""></a></div>

                                        </div>
                                    </div>
                                    <span class="time">65 min ago</span>
                                </div>
                            </li>

                            <li>
                                <span class="icon"><i class="zmdi zmdi-receipt"></i></span>
                                <div class="details">
                                    <h5 class="title"><a href="#">Create New Task for New Marketing</a></h5>
                                    <div class="video">
                                        <a href="#"><i class="zmdi zmdi-play"></i></a>
                                    </div>
                                    <span class="time">3 hour ago</span>
                                </div>
                            </li>

                            <li>
                                <span class="icon"><i class="zmdi zmdi-receipt"></i></span>
                                <div class="details">
                                    <h5 class="title"><a href="#">Create New Task for New Marketing</a></h5>
                                    <div class="content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id dolores, assumenda quaerat inventore atque dolore sapiente doloribus iusto quisquam ullam autem labore, laborum beatae repudiandae! Recusandae ullam cumque, non temporibus?</p>
                                    </div>
                                    <span class="time">17 hour ago</span>
                                </div>
                            </li>

                        </ul>
                    </div>

                    <div class="col-12 mb-50"><span class="timeline-date">12 february 2018</span></div>

                    <div class="col-12 mb-50">
                        <ul class="timeline-list">

                            <li>
                                <span class="icon"><i class="zmdi zmdi-receipt"></i></span>
                                <div class="details">
                                    <h5 class="title"><a href="#">Create New Task for New Marketing</a></h5>
                                    <div class="content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id dolores, assumenda quaerat inventore atque dolore sapiente doloribus iusto quisquam ullam autem labore, laborum beatae repudiandae! Recusandae ullam cumque, non temporibus?</p>
                                    </div>
                                    <span class="time">at 7pm</span>
                                </div>
                            </li>

                            <li>
                                <span class="icon"><i class="zmdi zmdi-receipt"></i></span>
                                <div class="details">
                                    <h5 class="title"><a href="#">Create New Task for New Marketing</a></h5>
                                    <div class="gallery">
                                        <div class="row mbn-30">

                                            <div class="col-12 mb-30"><a href="#"><img src="assets/images/gallery/profile-gallery-4.jpg" alt=""></a></div>

                                        </div>
                                    </div>
                                    <span class="time">at 12:30pm</span>
                                </div>
                            </li>

                        </ul>
                    </div>

                </div>

            </div>

        </div>
    </div>
    <!--Timeline / Activities End-->

    <!--Right Sidebar Start-->
    <div class="col-xlg-4 col-12 mb-50">
        <div class="row mbn-30">

            <!--Author Information Start-->
            <div class="col-xlg-12 col-lg-6 col-12 mb-30">
                <div class="box">
                    <div class="box-head">
                        <h3 class="title">Author Information</h3>
                    </div>
                    <div class="box-body">
                        <div class="form">
                            <form action="#">
                                <div class="row row-10 mbn-20">
                                    <div class="col-sm-6 col-12 mb-20"><input type="text" class="form-control" value="Madison"></div>
                                    <div class="col-sm-6 col-12 mb-20"><input type="text" class="form-control" value="Howard"></div>
                                    <div class="col-sm-6 col-12 mb-20"><input type="text" class="form-control input-date-single" value="02/13/2018"></div>
                                    <div class="col-sm-6 col-12 mb-20"><input type="text" class="form-control" value="(012) 345-6789" data-mask="(999) 999-9999"></div>
                                    <div class="col-12 mb-20"><input type="email" class="form-control" value="domain@mail.com"></div>
                                    <div class="col-12 mb-20"><input type="text" class="form-control" value="https//: www.domain.com"></div>
                                    <div class="col-sm-6 col-12 mb-20"><input type="password" class="form-control" value="password"></div>
                                    <div class="col-sm-6 col-12 mb-20"><input type="password" class="form-control" value="password"></div>
                                    <div class="col-12 mt-10 mb-20">
                                        <input type="submit" class="button button-primary button-outline" value="Save Changes">
                                        <input type="submit" class="button button-danger button-outline" value="Delete Changes">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <!--Author Information End-->

            <!-- To Do List Start -->
            <div class="col-xlg-12 col-lg-6 col-12 mb-30">
                <div class="box">

                    <div class="box-head">
                        <h3 class="title">To-do List</h3>
                    </div>

                    <div class="box-body p-0">

                        <!--Todo List Start-->
                        <ul class="todo-list">

                            <!--Todo Item Start-->
                            <li class="done">
                                <div class="list-action">
                                    <button class="status"><i class="zmdi zmdi-star-outline"></i></button>
                                    <label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label>
                                    <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                </div>
                                <div class="list-content">
                                    <p>Sed ut perspiciatis unde omnis iste natus error.</p>
                                </div>
                                <div class="list-action right">
                                    <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                </div>
                            </li>
                            <!--Todo Item End-->

                            <!--Todo Item Start-->
                            <li>
                                <div class="list-action">
                                    <button class="status"><i class="zmdi zmdi-star-outline"></i></button>
                                    <label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label>
                                    <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                </div>
                                <div class="list-content">
                                    <p>Mistaken idea of denouncing pleasure.</p>
                                </div>
                                <div class="list-action right">
                                    <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                </div>
                            </li>
                            <!--Todo Item End-->

                            <!--Todo Item Start-->
                            <li>
                                <div class="list-action">
                                    <button class="status"><i class="zmdi zmdi-star-outline"></i></button>
                                    <label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label>
                                    <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                </div>
                                <div class="list-content">
                                    <p>Encounter consequences that are.</p>
                                </div>
                                <div class="list-action right">
                                    <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                </div>
                            </li>
                            <!--Todo Item End-->

                            <!--Todo Item Start-->
                            <li>
                                <div class="list-action">
                                    <button class="status"><i class="zmdi zmdi-star-outline"></i></button>
                                    <label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label>
                                    <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                </div>
                                <div class="list-content">
                                    <p>Sed ut perspiciatis unde omnis iste natus error.</p>
                                </div>
                                <div class="list-action right">
                                    <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                </div>
                            </li>
                            <!--Todo Item End-->

                            <!--Todo Item Start-->
                            <li class="done">
                                <div class="list-action">
                                    <button class="status"><i class="zmdi zmdi-star-outline"></i></button>
                                    <label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label>
                                    <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                </div>
                                <div class="list-content">
                                    <p>Sed ut perspiciatis unde omnis iste natus error.</p>
                                </div>
                                <div class="list-action right">
                                    <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                </div>
                            </li>
                            <!--Todo Item End-->

                            <!--Todo Item Start-->
                            <li>
                                <div class="list-action">
                                    <button class="status"><i class="zmdi zmdi-star-outline"></i></button>
                                    <label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label>
                                    <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                </div>
                                <div class="list-content">
                                    <p>Nor again is there anyone who loves.</p>
                                </div>
                                <div class="list-action right">
                                    <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                </div>
                            </li>
                            <!--Todo Item End-->

                            <!--Todo Item Start-->
                            <li>
                                <div class="list-action">
                                    <button class="status"><i class="zmdi zmdi-star-outline"></i></button>
                                    <label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label>
                                    <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                </div>
                                <div class="list-content">
                                    <p>Sed ut perspiciatis unde omnis iste natus error.</p>
                                </div>
                                <div class="list-action right">
                                    <button class="remove"><i class="zmdi zmdi-delete"></i></button>
                                </div>
                            </li>
                            <!--Todo Item End-->

                        </ul>
                        <!--Todo List End-->

                        <!--Add Todo List Start-->
                        <form action="#" class="todo-list-add-new" data-date="false">
                            <label class="status"><input type="checkbox"><i class="icon zmdi zmdi-star-outline"></i></label>
                            <input class="content" type="text" placeholder="Type new Task">
                            <button class="submit"><i class="zmdi zmdi-plus-circle-o"></i></button>
                        </form>
                        <!--Add Todo List End-->

                    </div>
                </div>
            </div><!-- To Do List End -->

            <!-- Daily Sale Report Start -->
            <div class="col-xlg-12 col-lg-6 col-12 mb-30">

                <div class="box">
                    <div class="box-head">
                        <h3 class="title">Daily Sale Report</h3>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table">

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
                                        <td><span class="text-success d-flex justify-content-between fw-600">$500.00<span class="tippy ml-10" data-tippy-content="Sed do eiusmod tempor <br/> incididunt ut labore."><i class="zmdi zmdi-info-outline"></i></span></span></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-600">Linda</td>
                                        <td>
                                            <p>Sed do eiusmod tempor <br>incididunt ut labore.</p>
                                        </td>
                                        <td><span class="text-success d-flex justify-content-between fw-600">$20.00<span class="tippy ml-10" data-tippy-content="Sed do eiusmod tempor <br/> incididunt ut labore."><i class="zmdi zmdi-info-outline"></i></span></span></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-600">Patrick</td>
                                        <td>
                                            <p>Sed do eiusmod tempor <br>incididunt ut labore.</p>
                                        </td>
                                        <td><span class="text-danger d-flex justify-content-between fw-600">$120.00<span class="tippy ml-10" data-tippy-content="Sed do eiusmod tempor <br/> incididunt ut labore."><i class="zmdi zmdi-info-outline"></i></span></span></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-600">Jose</td>
                                        <td>
                                            <p>Sed do eiusmod tempor <br>incididunt ut labore.</p>
                                        </td>
                                        <td><span class="text-success d-flex justify-content-between fw-600">$1750.00<span class="tippy ml-10" data-tippy-content="Sed do eiusmod tempor <br/> incididunt ut labore."><i class="zmdi zmdi-info-outline"></i></span></span></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-600">Amber</td>
                                        <td>
                                            <p>Sed do eiusmod tempor <br>incididunt ut labore.</p>
                                        </td>
                                        <td><span class="text-warning d-flex justify-content-between fw-600">$165.00<span class="tippy ml-10" data-tippy-content="Sed do eiusmod tempor <br/> incididunt ut labore."><i class="zmdi zmdi-info-outline"></i></span></span></td>
                                    </tr>
                                </tbody><!-- Table Body End -->

                            </table>
                        </div>
                    </div>
                </div>

            </div><!-- Daily Sale Report End -->

        </div>
    </div>
    <!--Right Sidebar End-->

</div>



<?php }else{

?>


<section class="error__area pt-60 pb-100">
                <div class="container">
                    <div class="col-xl-8 offset-xl-2 col-lg-8 offset-lg-2">
                        <div class="error__content text-center">
                            <div class="error__number">
                                
                            </div>
                            <span>user not found</span>
                            <h2>Please Login First</h2>
                           
                            <div class="error__search">
                           
                                  
                                    <a href="login.php" class="t-y-btn t-y-btn-grey">Login</a>
                      
                            </div>
                        </div>
                    </div>
                </div>
            </section>



<?php

}?>
</div><!-- Content Body End -->





  </div>
  <!--end wrapper-->



 <!-- Global Vendor, plugins & Activation JS -->
 <script src="assets/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="assets/assets/js/vendor/popper.min.js"></script>
    <script src="assets/assets/js/vendor/bootstrap.min.js"></script>
    <!--Plugins JS-->
    <script src="assets/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/assets/js/plugins/tippy4.min.js.js"></script>
    <!--Main JS-->
    <script src="assets/assets/js/main.js"></script>

    <!-- Plugins & Activation JS For Only This Page -->
    <script src="assets/assets/js/plugins/moment/moment.min.js"></script>
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

</body>

</html>