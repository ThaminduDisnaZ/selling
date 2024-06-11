<?php

include "../connection.php";
$urs = Database::search("SELECT * FROM `product`" );
$numu = $urs->num_rows;
?>
<h5>Active Product Count</h5>
<h2><?php echo ("$numu");  ?></h2>
