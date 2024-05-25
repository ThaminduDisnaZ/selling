<?php

include "../connection.php";

$uid = $_POST["u"];

if (empty ($uid)) {
   echo ("Pleace Enter User ID");
} else {
  
   $rs = Database::search("SELECT * FROM `user` WHERE `user_id` = '".$uid."'  ");
   $num = $rs->num_rows;

   
   if ($num == 1) {
    $rs2 = Database::search("SELECT * FROM `user` ");
    $d = $rs->fetch_assoc();
   
   



    ?>

<div class="modal-header">
                                            <h5 class="modal-title">User Details.. (ID:-<?php echo( $d ["user_id" ]);  ?>)</h5>
                                            <button class="close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body" id="udm3">
                                           



<h5>User Name</h5>
<p id="luname"><?php echo( $d ["fname" ]);  ?> <?php echo( $d ["lname" ]);  ?></p>
<hr>
<h5>User Email</h5>
<p id="lemail"><?php echo( $d ["email" ]);  ?></p>
<hr>
<h5>User Mobile Number</h5>
<p id="lmobile"><?php echo( $d ["mobile" ]);  ?></p>
<hr>
<h5>User Adress</h5>
<p id="lno"><?php 

if (empty( $d ["no" ])) {
    echo( "<br><b> User Not Added Adress </b>" );
} else {
    echo( $d ["no" ]);
}


?></p>
<p id="lstreet"><?php 

if (empty( $d ["street" ])) {
    echo( "" );
} else {
    echo( $d ["street" ]);
}


?></p>
<p id="ldistrict"><?php 

if (empty( $d ["city_id" ])) {
    echo( "" );
} else {
    $cityId = $d["city_id"];

    $rs3 = Database::search("SELECT `name` FROM `city` WHERE `city_id` = '$cityId' ");
    $e = $rs3->fetch_assoc();
    echo( $e ["name" ]);
}


?></p>
<hr>
<h5 >User Status</h5>

<button class="button button-round button-danger" id="uub" onclick="ubb();"><span id="uub2"></span>Active or Block</button>







<?php
   
   
   
   
   

   } else {
    echo("Invalid User Id");
   }
   


}



?>