<?php



if (isset($_SESSION["a"])) {
?>



  
  
  <!-- Side Header Start -->
  <div class="side-header show">
      <button class="side-header-close"><i class="zmdi zmdi-close"></i></button>
      <!-- Side Header Inner Start -->
      <div class="side-header-inner custom-scroll">

          <nav class="side-header-menu" id="side-header-menu">
              <ul>
                  <li><a href="index.php"><i class="ti-home"></i><span>Dashboard</span></a></li>
                  <li><a href="addDetails.php"><i class="ti-plus"></i><span>Add Details</span></a></li>
                  <li><a href="addProduct.php"><i class="ti-shopping-cart"></i> <span>Add Product</span></a></li>
                  <li><a href="editProduct.php"><i class="ti-pencil"></i><span>Edit Product</span></a></li>
                  <li><a href="invoiceList.php"><i class="ti-book"></i><span>Invoice List</span></a></li>
                  <li><a href="invoiceDetails.php"><i class="ti-bookmark"></i><span>Invoice Details</span></a></li>
                  <li><a href="orderList.php"><i class="ti-bag"></i><span>Order List</span></a></li>
                  <li><a href="odrderDetails.php"><i class="ti-menu"></i><span>Order Details</span></a></li>
                  <li><a href="manageProduct.php"><i class="ti-desktop"></i><span>Manage Product</span></a></li>




                  
              </ul>
          </nav>

      </div><!-- Side Header Inner End -->
  </div><!-- Side Header End -->


  <?php
} else {
    
    header("Location: ./adminlogin.php");
}


?>