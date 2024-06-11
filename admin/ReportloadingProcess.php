<?php

include "../connection.php";
$urs = Database::search("SELECT *
 FROM `user`" );
$numu = $urs->num_rows;
?>
<h5>Already Registerd Users Count</h5>
<h2><?php echo ("$numu");  ?></h2>

