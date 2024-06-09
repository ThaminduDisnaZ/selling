<?php



if (isset($_SESSION["a"])) {
?>



<script
			src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
			integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		></script>
  
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
         
                  <li><a href="odrderDetails.php"><i class="ti-book"></i><span>Invoice List</span></a></li>
                        <li><a href="odrderDetails.php"><i class="ti-menu"></i><span>Order Details</span></a></li>
                  <li><a href="manageProduct.php"><i class="ti-desktop"></i><span>Manage Product</span></a></li>
                  <li><a href="bannercustom.php"><i class="ti-pencil"></i><span>Banner Customizer</span></a></li>
                  <li><a href="userManage.php"><i class="ti-user"></i><span>User Manager</span></a></li>

                  <li><a href="discountCode.php"><i class="ti-pin"></i><span>Discount Code</span></a></li>

                  <li><a href="specialSell.php"><i class="ti-package"></i><span>Special Product Sell</span></a></li>


                  
              </ul>
          </nav>

      </div><!-- Side Header Inner End -->
  </div><!-- Side Header End -->


  <?php
} else {
    
    header("Location: ./adminlogin.php");
}


?>

