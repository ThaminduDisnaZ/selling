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
    <?php $titlewindow = "Cart"; ?>
    <title>Cart</title>
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

             <!--start breadcrumb-->
            <?php
                require "breadcrumb.php";
            ?>

            <!--end breadcrumb-->


            <!--start shop cart-->
            <section class="shop-page">
              <div class="shop-container">

                <div class="card shadow-sm border-0">
                  <div class="card-body">
                    <div class="shop-cart">
                      <div class="row">
                        <div class="col-12 col-xl-8">
                          <div class="shop-cart-list">
                            <div class="card">
                              <div class="card-body">
                                <div class="row align-items-center g-3">
                                  <div class="col-12 col-lg-6">
                                    <div class="d-lg-flex align-items-start gap-3">
                                      <div class="cart-img text-center text-lg-start">
                                        <img src="assets/images/products/01.png" class="rounded" width="130" alt="">
                                      </div>
                                      <div class="cart-detail text-center text-lg-start">
                                        <h6 class="mb-2">Regular Fit Polo T-Shirt</h6>
                                        <p class="mb-0">Size: <span>Regular</span>
                                        </p>
                                        <p class="mb-2">Color: <span>White & Blue</span>
                                        </p>
                                        <h5 class="mb-0">$19.00</h5>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-12 col-lg-3">
                                    <div class="cart-action text-center">
                                      <input type="number" class="form-control" value="2" min="1">
                                    </div>
                                  </div>
                                  <div class="col-12 col-lg-3">
                                    <div class="text-center">
                                      <div class="d-flex gap-2 justify-content-center justify-content-lg-end">
                                        <a href="javascript:;" class="btn btn-primary btn-ecomm"><i class='bx bx-x-circle'></i>Remove</a>
                                        <a href="javascript:;" class="btn btn-outline-primary btn-ecomm"><i class='bx bx-heart mx-0'></i></a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="card">
                              <div class="card-body">
                                <div class="row align-items-center g-3">
                                  <div class="col-12 col-lg-6">
                                    <div class="d-lg-flex align-items-start gap-3">
                                      <div class="cart-img text-center text-lg-start">
                                        <img src="assets/images/products/02.png" class="rounded" width="130" alt="">
                                      </div>
                                      <div class="cart-detail text-center text-lg-start">
                                        <h6 class="mb-2">Regular Fit Polo T-Shirt</h6>
                                        <p class="mb-0">Size: <span>Regular</span>
                                        </p>
                                        <p class="mb-2">Color: <span>White & Blue</span>
                                        </p>
                                        <h5 class="mb-0">$19.00</h5>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-12 col-lg-3">
                                    <div class="cart-action text-center">
                                      <input type="number" class="form-control" value="2" min="1">
                                    </div>
                                  </div>
                                  <div class="col-12 col-lg-3">
                                    <div class="text-center">
                                      <div class="d-flex gap-2 justify-content-center justify-content-lg-end">
                                        <a href="javascript:;" class="btn btn-primary btn-ecomm"><i class='bx bx-x-circle'></i>Remove</a>
                                        <a href="javascript:;" class="btn btn-outline-primary btn-ecomm"><i class='bx bx-heart mx-0'></i></a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
							
                            <div class="card">
                              <div class="card-body">
                                <div class="row align-items-center g-3">
                                  <div class="col-12 col-lg-6">
                                    <div class="d-lg-flex align-items-start gap-3">
                                      <div class="cart-img text-center text-lg-start">
                                        <img src="assets/images/products/03.png" class="rounded" width="130" alt="">
                                      </div>
                                      <div class="cart-detail text-center text-lg-start">
                                        <h6 class="mb-2">Regular Fit Polo T-Shirt</h6>
                                        <p class="mb-0">Size: <span>Regular</span>
                                        </p>
                                        <p class="mb-2">Color: <span>White & Blue</span>
                                        </p>
                                        <h5 class="mb-0">$19.00</h5>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-12 col-lg-3">
                                    <div class="cart-action text-center">
                                      <input type="number" class="form-control" value="2" min="1">
                                    </div>
                                  </div>
                                  <div class="col-12 col-lg-3">
                                    <div class="text-center">
                                      <div class="d-flex gap-2 justify-content-center justify-content-lg-end">
                                        <a href="javascript:;" class="btn btn-primary btn-ecomm"><i class='bx bx-x-circle'></i>Remove</a>
                                        <a href="javascript:;" class="btn btn-outline-primary btn-ecomm"><i class='bx bx-heart mx-0'></i></a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
							
                            <div class="card">
                              <div class="card-body">
                                <div class="row align-items-center g-3">
                                  <div class="col-12 col-lg-6">
                                    <div class="d-lg-flex align-items-start gap-3">
                                      <div class="cart-img text-center text-lg-start">
                                        <img src="assets/images/products/04.png" class="rounded" width="130" alt="">
                                      </div>
                                      <div class="cart-detail text-center text-lg-start">
                                        <h6 class="mb-2">Regular Fit Polo T-Shirt</h6>
                                        <p class="mb-0">Size: <span>Regular</span>
                                        </p>
                                        <p class="mb-2">Color: <span>White & Blue</span>
                                        </p>
                                        <h5 class="mb-0">$19.00</h5>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-12 col-lg-3">
                                    <div class="cart-action text-center">
                                      <input type="number" class="form-control" value="2" min="1">
                                    </div>
                                  </div>
                                  <div class="col-12 col-lg-3">
                                    <div class="text-center">
                                      <div class="d-flex gap-2 justify-content-center justify-content-lg-end">
                                        <a href="javascript:;" class="btn btn-primary btn-ecomm"><i class='bx bx-x-circle'></i>Remove</a>
                                        <a href="javascript:;" class="btn btn-outline-primary btn-ecomm"><i class='bx bx-heart mx-0'></i></a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
							
                           <div class="card">
                              <div class="card-body">
                                <div class="row align-items-center g-3">
                                  <div class="col-12 col-lg-6">
                                    <div class="d-lg-flex align-items-start gap-3">
                                      <div class="cart-img text-center text-lg-start">
                                        <img src="assets/images/products/05.png" class="rounded" width="130" alt="">
                                      </div>
                                      <div class="cart-detail text-center text-lg-start">
                                        <h6 class="mb-2">Regular Fit Polo T-Shirt</h6>
                                        <p class="mb-0">Size: <span>Regular</span>
                                        </p>
                                        <p class="mb-2">Color: <span>White & Blue</span>
                                        </p>
                                        <h5 class="mb-0">$19.00</h5>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-12 col-lg-3">
                                    <div class="cart-action text-center">
                                      <input type="number" class="form-control" value="2" min="1">
                                    </div>
                                  </div>
                                  <div class="col-12 col-lg-3">
                                    <div class="text-center">
                                      <div class="d-flex gap-2 justify-content-center justify-content-lg-end">
                                        <a href="javascript:;" class="btn btn-primary btn-ecomm"><i class='bx bx-x-circle'></i>Remove</a>
                                        <a href="javascript:;" class="btn btn-outline-primary btn-ecomm"><i class='bx bx-heart mx-0'></i></a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
							
                            <div class="card">
                              <div class="card-body">
                                <div class="d-lg-flex align-items-center gap-3">
                                  <a href="javascript:;" class="btn btn-primary btn-ecomm"><i class='bx bx-shopping-bag'></i> Continue Shoping</a>
                                  <a href="javascript:;" class="btn btn-light btn-ecomm ms-auto"><i class='bx bx-x-circle'></i> Clear Cart</a>
                                  <a href="javascript:;" class="btn btn-white btn-ecomm"><i class='bx bx-refresh'></i> Update Cart</a>
                                </div>
                              </div>
                            </div>
							
                          </div>
                        </div>
                        <div class="col-12 col-xl-4">
                          <div class="card">
                            <div class="card-body">
                             <div class="card">
                              <div class="card-body">
                                <p class="fs-5">Apply Discount Code</p>
                                <div class="input-group">
                                  <input type="text" class="form-control" placeholder="Enter discount code">
                                  <button class="btn btn-primary btn-ecomm" type="button">Apply</button>
                                </div>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-body">
                                <p class="fs-5">Estimate Shipping and Tax</p>
                                <div class="my-3 border-top"></div>
                                <div class="mb-3">
                                  <label class="form-label">Country Name</label>
                                  <select class="form-select">
                                    <option selected>United States</option>
                                    <option value="1">Australia</option>
                                    <option value="2">India</option>
                                    <option value="3">Canada</option>
                                  </select>
                                </div>
                                <div class="mb-3">
                                  <label class="form-label">State/Province</label>
                                  <select class="form-select">
                                    <option selected>California</option>
                                    <option value="1">Texas</option>
                                    <option value="2">Canada</option>
                                  </select>
                                </div>
                                <div class="mb-0">
                                  <label class="form-label">Zip/Postal Code</label>
                                  <input type="email" class="form-control">
                                </div>
                              </div>
                            </div>
                            <div class="card mb-0">
                              <div class="card-body">
                                <p class="mb-2">Subtotal: <span class="float-end">$198.00</span>
                                </p>
                                <p class="mb-2">Shipping: <span class="float-end">--</span>
                                </p>
                                <p class="mb-2">Taxes: <span class="float-end">$14.00</span>
                                </p>
                                <p class="mb-0">Discount: <span class="float-end">--</span>
                                </p>
                                <div class="my-3 border-top"></div>
                                <h5 class="mb-0">Order Total: <span class="float-end">212.00</span></h5>
                                <div class="my-4"></div>
                                <div class="d-grid"> <a href="javascript:;" class="btn btn-primary btn-ecomm">Proceed to Checkout</a>
                                </div>
                              </div>
                             </div>
                           </div>
                          </div>
                        </div>
                      </div>
                      <!--end row-->
                    </div>
                  </div>
                 </div>

              </div>
            </section>
            <!--end shop cart-->


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