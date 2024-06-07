<?php
 require_once "./connection.php";
 session_start();
 ?>


<!-- header area start -->
<header>
    <div class="header__area mt-50">
        <div class="header__top d-none d-sm-block">
            <div class="container">
                <div class="row align-items-center bg-light fixed-top">
                    <div class="col-xl-6 col-lg-6 col-md-5 d-none d-md-block">
                        <div class="header__welcome">
                            <span>Welcome to Net Pixel Store</span>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-7">
                        <div class="header__action d-flex justify-content-center justify-content-md-end">
                            <ul>
                                <li><a href="userprofile.php">My Account</a></li>
                                <li><a href="#">My Wishlist</a></li>
                                <li><a href="#">Compare</a></li>

                                <?php if (isset($_SESSION["u"])) {

                                     $data = $_SESSION["u"];
                                     $u_id = $data["user_id"];
                                     ?>
                                <li><button onclick="signout();"><a>Sign Out</a></button></li>

                                <li>
                                    <p><?php echo $data["fname"]; ?></p>
                                </li>



                                <?php
                                 } else {
                                    $u_id = "";
                                      ?>

                                <li><a href="login.php">Sign In</a></li>

                                <?php
                                 } ?>



                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__info">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-3">
                        <div
                            class="header__info-left d-flex justify-content-center justify-content-sm-between align-items-center">
                            <div class="logo">
                                <a href="index.php">
                                    <h1>Net Pixel</h1>
                                </a>
                            </div>
                            <div class="header__hotline align-items-center d-none d-sm-flex  d-lg-none d-xl-flex">
                                <div class="header__hotline-icon">
                                    <i class="fal fa-headset"></i>
                                </div>
                                <div class="header__hotline-info">
                                    <span>Hotline:</span>
                                    <h6><a href="tel:06-900-6789-00">0764501212</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-9">
                        <div class="header__info-right">
                            <div class="header__search f-left d-none d-sm-block">
                         
                                    <div class="header__search-box">
                                        <input type="text" id="searchinput" placeholder="Search For Products...">
                                        <button onclick="basicsearch(0);">Search</button>
                                    </div>
                                    <div class="header__search-cat">
                                        <select id="searchcat">
                                            <option value="0">All Categories</option>
                                            <?php
                                             $category_rs = Database::search(
                                                 "SELECT*FROM `category`"
                                             );
                                             $category_num =
                                                 $category_rs->num_rows;

                                             for (
                                                 $x = 0;
                                                 $x < $category_num;
                                                 $x++
                                             ) {
                                                 $category_data = $category_rs->fetch_assoc(); ?>

                                            <option  value="<?php echo $category_data["category_id"]; ?>">
                                                <?php echo $category_data[
                                                     "category"
                                                 ]; ?></option>

                                            <?php
                                             }
                                             ?>



                                        </select>
                                    </div>
                        
                            </div>

                            <?php
                             $cart_rs = Database::search(
                                 "SELECT * FROM `cart` WHERE cart.user_id='" .
                                     $u_id .
                                     "' "
                             );
                             $cart_num = $cart_rs->num_rows;
                             ?>


                            <div class="cart__mini-wrapper d-none d-md-flex f-right p-relative">
                                <a href="javascript:void(0);" class="cart__toggle">
                                    <span class="cart__total-item"><?php echo $cart_num; ?></span>
                                </a>



                                <div class="cart__mini">
                                    <div class="cart__close"><button type="button" class="cart__close-btn"><i
                                                class="fal fa-times"></i></button></div>
                                    <ul>
                                        <li>
                                            <div class="cart__title border-bottom">
                                                <h4 class="">My Cart</h4>


                                                <span>(<?php echo $cart_num; ?> Item in Cart)</span>

                                            </div>

                                            <?php if ($cart_num == 0) { ?>
                                            <br><br><br>
                                            <h3 class="text-center">No Item</h3>


                                            <?php } else {
                                                 $total = 0;
                                                 $subtotal = 0;
                                                 $shipping = 0;
                                                 ?>




                                        </li>



                                        <?php for (
                                             $x = 0;
                                             $x < $cart_num;
                                             $x++
                                         ) {

                                             $cart_data = $cart_rs->fetch_assoc();

                                             $product_rs = Database::search(
                                                 "SELECT * FROM `product` WHERE `product_id`='" .
                                                     $cart_data["product_id"] .
                                                     "'"
                                             );
                                             $product_data = $product_rs->fetch_assoc();

                                             $total =
                                                 $total +
                                                 $product_data["dprice"] *
                                                     $cart_data["qty"];

                                             $data_rs = Database::search(
                                                 "SELECT * FROM `user`  WHERE `user_id`='" .
                                                     $u_id .
                                                     "' "
                                             );

                                             $address_data = $data_rs->fetch_assoc();

                                             $ship =
                                                 $product_data["delivery_fee"];

                                             $image_rs = Database::search(
                                                 "SELECT * FROM `images` WHERE `product_id`='" .
                                                     $product_data[
                                                         "product_id"
                                                     ] .
                                                     "'"
                                             );
                                             $image_data = $image_rs->fetch_assoc();
                                             ?>


                                        <li>
                                            <div class="cart__item d-flex justify-content-between align-items-center">
                                                <div class="cart__inner d-flex">
                                                    <div class="cart__thumb">
                                                        <a href="<?php echo "singleProductView.php?id=" . $product_data["product_id"]; ?>">
                                                            <img src="admin/<?php echo $image_data[
                                                                 "code"
                                                             ]; ?>" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="cart__details">
                                                        <h6><a href="<?php echo "singleProductView.php?id=" . $product_data["product_id"]; ?>">
                                                                <?php echo $product_data[
                                                                     "name"
                                                                 ]; ?> </a></h6>
                                                        <div class="cart__price">
                                                            <span>Rs.<?php echo $product_data[
                                                                 "dprice"
                                                             ]; ?>.00 x <?php echo $cart_data[
                                                                "qty"
                                                            ]; ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cart__del">

                                                <??>

                                                    <button onclick="deleteFromCart(<?php echo ($cart_data["id"]) ?>) ">
                                                        <i class="fal fa-trash-alt"></i></button>
                                                </div>
                                            </div>
                                        </li>



                                        <?php
                                         } ?>

                                        <li>
                                            <div class="cart__sub d-flex justify-content-between align-items-center">
                                                <h6>Car Subtotal</h6>
                                                <span class="cart__sub-total">Rs.<?php echo $total; ?>.00</span>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="cart.php" class="t-y-btn w-100 mb-10">Proceed to checkout</a>
                                            <a href="cart.php" class="t-y-btn t-y-btn-border w-100 mb-10">view add edit
                                                cart</a>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-6 col-6">
                        <div class="header__bottom-left d-flex d-xl-block align-items-center">
                            <div class="side-menu d-xl-none mr-20">
                                <button type="button" class="side-menu-btn offcanvas-toggle-btn"><i
                                        class="fas fa-bars"></i></button>
                            </div>
                            <div class="main-menu d-none d-md-block">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="index.php">Home <i class="far fa-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="index.php">Home Style 1</a></li>
                                                <li><a href="index-2.html">Home Style 2</a></li>
                                                <li><a href="index-3.html">Home Style 3</a></li>
                                                <li><a href="index-4.html">Home Style 4</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="product.html">Features <i class="far fa-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="product.html">Product Type</a></li>
                                                <li><a href="product.html">Product Features <i
                                                            class="far fa-angle-down"></i></a>
                                                    <ul class="submenu">
                                                        <li><a href="product-details.html">Simple Product</a></li>
                                                        <li><a href="product-details-config.html">Configurable
                                                                Product</a></li>
                                                        <li><a href="product-details-group.html">Group Product</a></li>
                                                        <li><a href="product-details-download.html">Downloadable
                                                                Product</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="product.html">Shop By Brand</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="blog.html">Blog <i class="far fa-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-detaills.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">about us</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                        <li>
                                            <a href="about.html">pages <i class="far fa-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="register.html">Register</a></li>
                                                <li><a href="cart.php">Cart</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="error.html">404 Error</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3  col-sm-6  col-6 d-md-none d-lg-block">
                        <div class="header__bottom-right d-flex justify-content-end">
                            <div class="header__currency">
                                <select>
                                    <option>USD</option>
                                    <option>USD</option>
                                    <option>USD</option>
                                    <option>USD</option>
                                    <option>USD</option>
                                </select>
                            </div>
                            <div class="header__lang d-md-none d-lg-block">
                                <select>
                                    <option>English</option>
                                    <option>Bangla</option>
                                    <option>Arabic</option>
                                    <option>Hindi</option>
                                    <option>Urdu</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area end -->


    <!-- offcanvas area start -->
    <div class="offcanvas__area">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__close">
                <button class="offcanvas__close-btn" id="offcanvas__close-btn">
                    <i class="fal fa-times"></i>
                </button>
            </div>
            <div class="offcanvas__content">
                <div class="offcanvas__logo mb-40">
                    <a href="index.html">
                        <img src="assets/img/logo/logo-black.png" alt="logo">
                    </a>
                </div>
                <div class="offcanvas__search mb-25">
                    <form action="#">
                        <input type="text" placeholder="What are you searching for?">
                        <button type="submit"><i class="far fa-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu fix"></div>
                <div class="offcanvas__action">

                </div>
            </div>
        </div>
    </div>
    <!-- offcanvas area end -->
    <div class="body-overlay"></div>
    <!-- offcanvas area end -->
