
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

    <div class="main-wrapper">

        <?php
require "adminHeader.php";
?>



        <?php
require "sideheader.php";
if (isset($_GET["id"])  ) {

    $pid = $_GET["id"];

    $product_rs = Database::search("SELECT product.name, product.stitle, product.qty, product.price,
    product.discount,product.dprice, product.discription, product.date, product.delivery_fee,
    product.display_id, product.brand_id, product.cpu_id, product.ram_id, product.gpu_id, product.storage_id,
    product.produt_status_id, product.model_id, product.category_id, product.size_id, product.warranty_id,
    model.model AS model, brand.brand AS brand FROM `product`
    LEFT JOIN model ON product.model_id = model.model
    LEFT JOIN brand ON product.brand_id = brand.brand
    WHERE product.product_id='" . $pid . "'");


    $product_num = $product_rs->num_rows;
    $product_data = $product_rs->fetch_assoc();

?>




        <!-- Content Body Start -->
        <div class="content-body">

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>eCommerce <span>/ Add Product</span></h3>
                    </div>
                </div><!-- Page Heading End -->

                <!-- Page Button Group Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="buttons-group">
                        <button class="button button-outline button-primary">Save & Publish</button>
                        <button class="button button-outline button-info">Save to Draft</button>
                        <button class="button button-outline button-danger">Delete Product</button>
                    </div>
                </div><!-- Page Button Group End -->

            </div><!-- Page Headings End -->

            <!-- Add or Edit Product Start -->
            <div class="add-edit-product-wrap col-12">

                <div class="add-edit-product-form">
                

                        <h4 class="title">About Product</h4>

                        <div class="row">
                            <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text"
                                    placeholder="Product Name" id="pname" value="<?php echo ($product_data["name"]); ?>"></div>
                            <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text"
                                    placeholder="Product Sub-title" id="psname" value="<?php echo ($product_data["stitle"]); ?>"></div>
                            <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="number"
                                    placeholder="Product Price*" id="pprice" value="<?php echo ($product_data["price"]); ?>"></div>
                            <div class="col-lg-3 col-12 mb-30"><input class="form-control" type="number"
                                    placeholder="Product Discount (%)" id="pdiscount" value="<?php echo ($product_data["discount"]); ?>"></div>

                                    <div class="col-lg-3 col-12 mb-30"><button class="button button-outline button-primary" onclick="caldis();">Calculate Discount</button></div>


                                    <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="number"
                                    placeholder="Delivary Fee" id="delivery" value="<?php echo ($product_data["delivery_fee"]); ?>"></div>
                                    <div class="col-lg-6 col-12 mb-30 text-center"><h3 id="caldis" value="">Discount Price Now: Rs.<?php echo ($product_data["dprice"]); ?>.00
                                
                                  
                                </h3 ></div>
                            <div class="box-body">
                                
                               


                                <div class="quill">
                                <p>Hello World!</p>
                                <p>Some initial <strong>bold</strong> text</p>
                                <p><br></p>
                            </div>
                            </div>


                            



                            
                            <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="number"
                                    placeholder="Quantity" id="qty" value="<?php echo ($product_data["qty"]); ?>"></div>

                            <div class="col-lg-6 col-12 mb-30">
                            <select class="form-control select2" id="category">
    <?php
    $categoryi_rs = Database::search("SELECT * FROM `category` WHERE category_id ='" . $product_data["category_id"] . "'");
    $categoryi_data =  $categoryi_rs->fetch_assoc();
    ?>
    <option value="<?php echo $categoryi_data["category_id"] ?>"><?php echo ($categoryi_data["category"]) ?></option>

    <?php
    $category_rs = Database::search("SELECT * FROM `category`");
    $category_num = $category_rs->num_rows;
    for ($x = 0; $x < $category_num; $x++) {
        $category_data = $category_rs->fetch_assoc();
        ?>
        <option value="<?php echo $category_data["category_id"] ?>">
            <?php echo $category_data["category"] ?></option>
    <?php
    }
    ?>
</select>
                            </div>

                            <div class="col-lg-6 col-12 mb-30">
                                <select class="form-control select2" id="warranty">
                                   
                                <?php
                                    
                                    
                                    $warranty_rs = Database::search("SELECT * FROM `warranty` WHERE warranty_id ='" .$product_data["warranty_id"] . "'");
                                   
                                    $warranty_data =  $warranty_rs->fetch_assoc();
                                    ?>
                                    <option value="<?php echo $warranty_data["warranty_id"] ?>"><?php echo ($warranty_data["warranty"]) ?></option>




                                    <?php

                                        $warranty_rs = Database::search("SELECT * FROM `warranty`");
                                        $warranty_num = $warranty_rs->num_rows;

                                        for ($x = 0; $x < $warranty_num; $x++) {
                                            $warranty_data = $warranty_rs->fetch_assoc();
                                        ?>
                                    <option value="<?php echo $warranty_data["warranty_id"] ?>">
                                        <?php echo $warranty_data["warranty"] ?></option>
                                    <?php
                                        }

                                     ?>



                                </select>
                            </div>

                            <div class="col-lg-6 col-12 mb-30">
                                <select class="form-control select2" id="brand">
                                <?php
                                    
                                    
                                    $brand_rs = Database::search("SELECT * FROM `brand` WHERE brand_id ='" .$product_data["brand_id"] . "'");
                                   
                                    $brand_data =  $brand_rs->fetch_assoc();
                                    ?>
                                    <option value="<?php echo $brand_data["brand_id"] ?>"><?php echo ($brand_data["brand"]) ?></option>




                                    <?php

                                        $brand_rs = Database::search("SELECT * FROM `brand`");
                                        $brand_num = $brand_rs->num_rows;

                                        for ($x = 0; $x < $brand_num; $x++) {
                                            $brand_data = $brand_rs->fetch_assoc();
                                        ?>
                                    <option value="<?php echo $brand_data["brand_id"] ?>">
                                        <?php echo $brand_data["brand"] ?></option>
                                    <?php
                                        }

                                     ?>



                                </select>
                            </div>





                            <div class="col-lg-6 col-12 mb-30">
                                <select class="form-control select2" id="model">

                                <?php
                                    
                                    
                                    $model_rs = Database::search("SELECT * FROM `model` WHERE model_id ='" .$product_data["model_id"] . "'");
                                   
                                    $model_data =  $model_rs->fetch_assoc();
                                    ?>
                                    <option value="<?php echo $model_data["model_id"] ?>"><?php echo ($model_data["model"]) ?></option>






                                    <?php

                                        $model_rs = Database::search("SELECT * FROM `model`");
                                        $model_num = $model_rs->num_rows;

                                        for ($x = 0; $x < $model_num; $x++) {
                                            $model_data = $model_rs->fetch_assoc();
                                        ?>
                                    <option value="<?php echo $model_data["model_id"] ?>">
                                        <?php echo $model_data["model"] ?></option>
                                    <?php
                                        }

                                     ?>



                                </select>
                            </div>


                            <div class="col-lg-6 col-12 mb-30">
                                <select class="form-control select2" id="display">
                                <?php
                                    
                                    
                                    $display_rs = Database::search("SELECT * FROM `display` WHERE display_id ='" .$product_data["display_id"] . "'");
                                   
                                    $display_data =  $display_rs->fetch_assoc();
                                    ?>
                                    <option value="<?php echo $display_data["display_id"] ?>"><?php echo ($display_data["display"]) ?></option>






                                    <?php

                                        $display_rs = Database::search("SELECT * FROM `display`");
                                        $display_num = $display_rs->num_rows;

                                        for ($x = 0; $x < $display_num; $x++) {
                                            $display_data = $display_rs->fetch_assoc();
                                        ?>
                                    <option value="<?php echo $display_data["display_id"] ?>">
                                        <?php echo $display_data["display"] ?></option>
                                    <?php
                                        }

                                     ?>



                                </select>
                            </div>



                            <div class="col-lg-6 col-12 mb-30">
                                <select class="form-control select2" id="cpu">
                                <?php
                                    
                                    
                                    $cpu_rs = Database::search("SELECT * FROM `cpu` WHERE cpu_id ='" .$product_data["cpu_id"] . "'");
                                   
                                    $cpu_data =  $cpu_rs->fetch_assoc();
                                    ?>
                                    <option value="<?php echo $cpu_data["cpu_id"] ?>"><?php echo ($cpu_data["cpu"]) ?></option>








                                    <?php

                                        $cpu_rs = Database::search("SELECT * FROM `cpu`");
                                        $cpu_num = $cpu_rs->num_rows;

                                        for ($x = 0; $x < $cpu_num; $x++) {
                                            $cpu_data = $cpu_rs->fetch_assoc();
                                        ?>
                                    <option value="<?php echo $cpu_data["cpu_id"] ?>">
                                        <?php echo $cpu_data["cpu"] ?></option>
                                    <?php
                                        }

                                     ?>



                                </select>
                            </div>




                            <div class="col-lg-6 col-12 mb-30">
                                <select class="form-control select2" id="ram">
                                <?php
                                    
                                    
                                    $ram_rs = Database::search("SELECT * FROM `ram` WHERE ram_id ='" .$product_data["ram_id"] . "'");
                                   
                                    $ram_data =  $ram_rs->fetch_assoc();
                                    ?>
                                    <option value="<?php echo $ram_data["ram_id"] ?>"><?php echo ($ram_data["ram"]) ?></option>






                                    <?php

                                        $ram_rs = Database::search("SELECT * FROM `ram`");
                                        $ram_num = $ram_rs->num_rows;

                                        for ($x = 0; $x < $ram_num; $x++) {
                                            $ram_data = $ram_rs->fetch_assoc();
                                        ?>
                                    <option value="<?php echo $ram_data["ram_id"] ?>">
                                        <?php echo $ram_data["ram"] ?></option>
                                    <?php
                                        }

                                     ?>



                                </select>
                            </div>


                            <div class="col-lg-6 col-12 mb-30">
                                <select class="form-control select2" id="gpu">
                                <?php
                                    
                                    
                                    $gpu_rs = Database::search("SELECT * FROM `gpu` WHERE gpu_id ='" .$product_data["gpu_id"] . "'");
                                   
                                    $gpu_data =  $gpu_rs->fetch_assoc();
                                    ?>
                                    <option value="<?php echo $gpu_data["gpu_id"] ?>"><?php echo ($gpu_data["gpu"]) ?></option>





                                    <?php

                                        $gpu_rs = Database::search("SELECT * FROM `gpu`");
                                        $gpu_num = $gpu_rs->num_rows;

                                        for ($x = 0; $x < $gpu_num; $x++) {
                                            $gpu_data = $gpu_rs->fetch_assoc();
                                        ?>
                                    <option value="<?php echo $gpu_data["gpu_id"] ?>">
                                        <?php echo $gpu_data["gpu"] ?></option>
                                    <?php
                                        }

                                     ?>



                                </select>
                            </div>




                            <div class="col-lg-6 col-12 mb-30">
                                <select class="form-control select2" id="storage">
                              
                                <?php
                                    
                                    
                                    $storage_rs = Database::search("SELECT * FROM `storage` WHERE storage_id ='" .$product_data["storage_id"] . "'");
                                   
                                    $storage_data =  $storage_rs->fetch_assoc();
                                    ?>
                                    <option value="<?php echo $storage_data["storage_id"] ?>"><?php echo ($storage_data["storage"]) ?></option>





                                    <?php

                                        $storage_rs = Database::search("SELECT * FROM `storage`");
                                        $storage_num = $storage_rs->num_rows;

                                        for ($x = 0; $x < $storage_num; $x++) {
                                            $storage_data = $storage_rs->fetch_assoc();
                                        ?>
                                    <option value="<?php echo $storage_data["storage_id"] ?>">
                                        <?php echo $storage_data["storage"] ?></option>
                                    <?php
                                        }

                                     ?>



                                </select>
                            </div>



                            <div class="col-lg-6 col-12 mb-30">
                                <select class="form-control select2" id="size">
                                   
                                <?php
                                    
                                    
                                    $size_rs = Database::search("SELECT * FROM `size` WHERE size_id ='" .$product_data["size_id"] . "'");
                                   
                                    $size_data =  $size_rs->fetch_assoc();
                                    ?>
                                    <option value="<?php echo $size_data["size_id"] ?>"><?php echo ($size_data["size"]) ?></option>




                                    <?php

                                        $size_rs = Database::search("SELECT * FROM `size`");
                                        $size_num = $size_rs->num_rows;

                                        for ($x = 0; $x < $size_num; $x++) {
                                            $size_data = $size_rs->fetch_assoc();
                                        ?>
                                    <option value="<?php echo $size_data["size_id"] ?>">
                                        <?php echo $size_data["size"] ?></option>
                                    <?php
                                        }

                                     ?>



                                </select>
                            </div>











                            <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text"
                                    placeholder="Meta Keyword" id="pmkeyword"></div>
                        </div>

                        <h4 class="title">Product Gallery</h4>
                         <div class="col-12">
                                <div class="row">
                                
                                <?php
                              
                        $image_rs = Database::search("SELECT * FROM `images` WHERE `product_id`='"  .$pid  . "'");
                        $image_num = $image_rs->num_rows;
                        $img = array();
                        $img [0] = "resource/addproductimg.svg";
                        $img [1] = "resource/addproductimg.svg";
                        $img [2] = "resource/addproductimg.svg";
                 

?>
                                    <div class=" col-12 ">
                                        <div class="row">


    <div class="col-3 border border-warning rounded mr-10">
    <img src="<?php echo($img[0]); ?>" class="img-fluid" style="width: 250px;" id="i0" />
</div>
<div class="col-3 border border-warning rounded mr-10">
    <img src="<?php echo($img[1]); ?>" class="img-fluid" style="width: 250px;" id="i1" />
</div>
<div class="col-3 border border-warning rounded mr-10">
    <img src="<?php echo($img[2]); ?>" class="img-fluid" style="width: 250px;" id="i2" />
</div>

                                          

                                        </div>
                                    </div>
                                    <div class="col-6 d-grid mt-3 mb-50">
                                        <input type="file" class="d-none" id="imageuploader" multiple />
                                        <label for="imageuploader" onclick="changeProductImage();" class="button button-outline button-secondary"> Select Images <i class="ti-upload"></i></label>
                                    </div>
                                </div>
                            </div>



                        <!-- Button Group Start -->
                        <div class="row">
                            <div class="d-flex flex-wrap justify-content-end col mbn-10">
                                <button class="button button-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3" onclick="updateProduct(<?php echo ($pid) ?>)">Save &
                                    Update</button>

                                    <div class="modal fade" id="exampleModal3">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Update Status</h5>
                                            <button class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <p id="updatemsg"></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="button button-primary" data-bs-dismiss="modal">Ok</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <button class="button button-outline button-info mb-10 ml-10 mr-0"  onclick="cancelup();">Cancel</button>
                             
                            </div>
                        </div><!-- Button Group End -->

              
                </div>

            </div><!-- Add or Edit Product End -->

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
    <script src="assets/js/plugins/nice-select/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugins/nice-select/niceSelect.active.js"></script>
    <script src="assets/js/plugins/filepond/filepond.min.js"></script>
    <script src="assets/js/plugins/filepond/filepond-plugin-image-exif-orientation.min.js"></script>
    <script src="assets/js/plugins/filepond/filepond-plugin-image-preview.min.js"></script>
    <script src="assets/js/plugins/filepond/filepond.active.js"></script>
    <script src="assets/js/plugins/quill/quill.min2.js"></script>
    <script src="assets/js/plugins/quill/quill.active.js"></script>
    <script src="./admin.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>

<?php

} else {
    header("location:./error.html");
}
} else {
    
    header("Location: ./adminlogin.php");
}


?>