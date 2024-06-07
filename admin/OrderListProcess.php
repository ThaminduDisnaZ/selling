<?php
include "../connection.php";

$rs = Database::search("SELECT * FROM `orders` ");


if ($rs) {
    while ($d = $rs->fetch_assoc()) {

        $prs = Database::search(" SELECT * FROM `product` WHERE `product_id` = '".$d["product_id"]."' ");
        $pd = $prs->fetch_assoc();
        $urs = Database::search(" SELECT * FROM `user` WHERE `user_id` = '".$d["user_id"]."' ");
        $ud = $urs->fetch_assoc();

        ?>
        <tr>
            <td><?php echo $d["order_id"] ?></td>
            <td><?php echo $pd["name"] ?></td>
            <td><?php echo  $ud["fname"] ?> <?php echo  $ud["lname"] ?></td>
           
            <td>Rs.<?php echo $pd["dprice"] ?>.00</td>

            <?php
            if ($d["payment_status_id"] == 1) {
               ?> <td><span class="badge badge-success">Paid</span></td><?php
            } else {
                ?> <td><span class="badge badge-danger">Not Pay</span></td><?php
            }
            
            ?>
           
        </tr>
        <?php
    }
} else {
    // Error handling if the query fails
    echo "Error: Failed to fetch data from the database.";
}
?>
