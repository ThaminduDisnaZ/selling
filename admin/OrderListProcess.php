<?php
include "../connection.php";

$rs = Database::search("SELECT * FROM `orders` ");

if ($rs) {
    while ($d = $rs->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $d["product_id"] ?></td>
            <td><?php echo $d["user_id"] ?></td>
            <td><?php echo $d["order_id"] ?></td>
           
            <td><?php echo $d["date"] ?></td>
            <td><span class="badge badge-success">Paid</span></td>
        </tr>
        <?php
    }
} else {
    // Error handling if the query fails
    echo "Error: Failed to fetch data from the database.";
}
?>
