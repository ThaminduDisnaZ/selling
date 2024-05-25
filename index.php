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
   
<?php $titlewindow = "Net Pixel | Home"; ?>

    <title>Net Pixel | Home</title>
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


                <?php
                require "carousel.php";
                ?>



                <!--start shop area-->
                <section class="shop-page">
                    <div class="shop-container">
                        <div class="card shadow-sm border-0">
                            <div class="card-body">
                                <div class="row">




                                    <?php
require "shortmenu.php";
?>

                                    <?php
require "filtermenu.php";
?>











                                    <div class="col-12 col-xl-9">
                                        <div class="product-wrapper">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control ps-5"
                                                            placeholder="Search Product...">
                                                        <span
                                                            class="position-absolute top-50 product-show translate-middle-y">
                                                            <ion-icon name="search-sharp" class="ms-3 fs-6"></ion-icon>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-grid">
                                                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-3">
                                                   
                                                
                                                
                                                
                                                <div class="col">
                                                        <div class="card product-card">
                                                            <a href="javascript:;"
                                                                class="position-absolute end-0 top-0 m-3">
                                                                <div class="product-wishlist"> <i
                                                                        class="bx bx-heart"></i>
                                                                </div>
                                                            </a>
                                                            <img src="assets/images/products/01.png"
                                                                class="card-img-top" alt="...">
                                                            <div class="card-body">
                                                                <div class="product-info">
                                                                    <a href="javascript:;">
                                                                        <p class="product-catergory font-13 mb-1">
                                                                            Catergory Name</p>
                                                                    </a>
                                                                    <a href="ecommerce-product-details.html">
                                                                        <h6 class="product-name mb-2">Product Short Name
                                                                        </h6>
                                                                    </a>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="mb-1 product-price"> <span
                                                                                class="me-1 text-decoration-line-through">Rs.99.00</span>
                                                                            <span class="fs-5">Rs.49.00</span>
                                                                        </div>
                                                                        <div class="cursor-pointer ms-auto">
                                                                            <i class="bx bxs-star text-warning"></i>
                                                                            <i class="bx bxs-star text-warning"></i>
                                                                            <i class="bx bxs-star text-warning"></i>
                                                                            <i class="bx bxs-star text-warning"></i>
                                                                            <i class="bx bxs-star text-warning"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-action mt-2">
                                                                        <div class="d-grid">
                                                                            <a href="javascript:;"
                                                                                class="btn btn-primary"><i
                                                                                    class="bx bxs-cart-add"></i>Add to
                                                                                Cart</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>





                                                    <div class="col">
                                                        <div class="card product-card">
                                                            <a href="javascript:;"
                                                                class="position-absolute end-0 top-0 m-3">
                                                                <div class="product-wishlist"> <i
                                                                        class="bx bx-heart"></i>
                                                                </div>
                                                            </a>
                                                            <img src="assets/images/products/02.png"
                                                                class="card-img-top" alt="...">
                                                            <div class="card-body">
                                                                <div class="product-info">
                                                                    <a href="javascript:;">
                                                                        <p class="product-catergory font-13 mb-1">
                                                                            Catergory Name</p>
                                                                    </a>
                                                                    <a href="ecommerce-product-details.html">
                                                                        <h6 class="product-name mb-2">Product Short Name
                                                                        </h6>
                                                                    </a>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="mb-1 product-price"> <span
                                                                                class="me-1 text-decoration-line-through">Rs.99.00</span>
                                                                            <span class="fs-5">Rs.49.00</span>
                                                                        </div>
                                                                        <div class="cursor-pointer ms-auto">
                                                                            <i class="bx bxs-star text-warning"></i>
                                                                            <i class="bx bxs-star text-warning"></i>
                                                                            <i class="bx bxs-star text-warning"></i>
                                                                            <i class="bx bxs-star text-warning"></i>
                                                                            <i class="bx bxs-star text-warning"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-action mt-2">
                                                                        <div class="d-grid">
                                                                            <a href="javascript:;"
                                                                                class="btn btn-primary"><i
                                                                                    class="bx bxs-cart-add"></i>Add to
                                                                                Cart</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    <div class="col">
                                                        <div class="card product-card">
                                                            <a href="javascript:;"
                                                                class="position-absolute end-0 top-0 m-3">
                                                                <div class="product-wishlist"> <i
                                                                        class="bx bx-heart"></i>
                                                                </div>
                                                            </a>
                                                            <img src="assets/images/products/03.png"
                                                                class="card-img-top" alt="...">
                                                            <div class="card-body">
                                                                <div class="product-info">
                                                                    <a href="javascript:;">
                                                                        <p class="product-catergory font-13 mb-1">
                                                                            Catergory Name</p>
                                                                    </a>
                                                                    <a href="ecommerce-product-details.html">
                                                                        <h6 class="product-name mb-2">Product Short Name
                                                                        </h6>
                                                                    </a>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="mb-1 product-price"> <span
                                                                                class="me-1 text-decoration-line-through">Rs.99.00</span>
                                                                            <span class="fs-5">Rs.49.00</span>
                                                                        </div>
                                                                        <div class="cursor-pointer ms-auto">
                                                                            <i class="bx bxs-star text-warning"></i>
                                                                            <i class="bx bxs-star text-warning"></i>
                                                                            <i class="bx bxs-star text-warning"></i>
                                                                            <i class="bx bxs-star text-warning"></i>
                                                                            <i class="bx bxs-star text-warning"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-action mt-2">
                                                                        <div class="d-grid">
                                                                            <a href="javascript:;"
                                                                                class="btn btn-primary"><i
                                                                                    class="bx bxs-cart-add"></i>Add to
                                                                                Cart</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                <!--end row-->
                                            </div>
                                            <hr>
                                            <nav class="d-flex justify-content-between" aria-label="Page navigation">
                                                <ul class="pagination">
                                                    <li class="page-item"><a class="page-link" href="javascript:;"><i
                                                                class='bx bx-chevron-left'></i> Prev</a>
                                                    </li>
                                                </ul>
                                                <ul class="pagination">
                                                    <li class="page-item active d-none d-sm-block" aria-current="page">
                                                        <span class="page-link">1<span
                                                                class="visually-hidden">(current)</span></span>
                                                    </li>
                                                    <li class="page-item d-none d-sm-block"><a class="page-link"
                                                            href="javascript:;">2</a>
                                                    </li>
                                                    <li class="page-item d-none d-sm-block"><a class="page-link"
                                                            href="javascript:;">3</a>
                                                    </li>
                                                    <li class="page-item d-none d-sm-block"><a class="page-link"
                                                            href="javascript:;">4</a>
                                                    </li>
                                                    <li class="page-item d-none d-sm-block"><a class="page-link"
                                                            href="javascript:;">5</a>
                                                    </li>
                                                </ul>
                                                <ul class="pagination">
                                                    <li class="page-item"><a class="page-link" href="javascript:;"
                                                            aria-label="Next">Next <i
                                                                class='bx bx-chevron-right'></i></a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                    </div>
                </section>
                <!--end shop area-->

            </div>
            <!-- end page content-->
        </div>



        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top">
            <ion-icon name="arrow-up-outline"></ion-icon>
        </a>
        <!--End Back To Top Button-->

        <!--start switcher-->
        <div class="switcher-body">
            <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                <ion-icon name="color-palette-sharp" class="me-0"></ion-icon>
            </button>
            <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true"
                data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
                <div class="offcanvas-header border-bottom">
                    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
                </div>
                <div class="offcanvas-body">
                    <h6 class="mb-0">Theme Variation</h6>
                    <hr>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme"
                            value="option1" checked>
                        <label class="form-check-label" for="LightTheme">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme"
                            value="option2">
                        <label class="form-check-label" for="DarkTheme">Dark</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDark"
                            value="option3">
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
    <script src="assets/plugins/nouislider/nouislider.min.js"></script>
    <script src="assets/js/price-slider.js"></script>

    <!-- Main JS-->
    <script src="assets/js/main.js"></script>


</body>

</html>