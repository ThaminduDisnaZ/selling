 
 
 <?php



if (isset($_SESSION["a"])) {
    require "../connection.php";
    $email = $_SESSION["a"]["email"];
    $details_rs=Database::search("SELECT*FROM `admin` ");
    $data = $details_rs->fetch_assoc();
?>



 
 
 <div class="header-section">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center">

                    
                    <div class="header-logo col-auto">
                        <a href="index.php">
                        <h2>Net Pixel</h2>
                        </a>
                    </div>

                    
                    <div class="header-right flex-grow-1 col-auto">
                        <div class="row justify-content-between align-items-center">

                            
                            <div class="col-auto">
                                <div class="row align-items-center">

                                    
                                    <div class="col-auto"><button class="side-header-toggle"><i class="zmdi zmdi-menu"></i></button></div>

                                  

                                </div>
                            </div>

                            
                            <div class="col-auto">

                                <ul class="header-notification-area">

                                  
                                    
                                    
                                    
                                    
                                    <li class="adomx-dropdown col-auto  ml-10">
                                        <a class="toggle" href="#">
                                            <span class="user">
                                        <span class="avatar">
                                            <h5>TD</h5>
                                            <span class="status"></span>
                                            </span>
                                            <span class="name"><?php echo $data["fname"]." ". $data["lname"];?></span>
                                            </span>
                                        </a>

                                        
                                        <div class="adomx-dropdown-menu dropdown-menu-user">
                                            <div class="head">
                                                <h5 class="name"><a href="#"><?php echo $data["fname"]." ". $data["lname"];?></a></h5>
                                                <a class="mail" href="#"><?php echo $email;?></a>
                                            </div>
                                            <div class="body">
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-account"></i>Profile</a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-email-open"></i>Inbox</a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-wallpaper"></i>Activity</a></li>
                                                </ul>
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-settings"></i>Setting</a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-lock-open"></i>Sing out</a></li>
                                                </ul>
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-paypal"></i>Payment</a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-google-pages"></i>Invoice</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                    </li>

                                </ul>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>


        <?php
} else {
    
    header("Location: ./adminlogin.php");
}


?>