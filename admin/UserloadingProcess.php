<?php

include "../connection.php";
$rs = Database::search("SELECT * FROM `user`");
while ($d = $rs->fetch_assoc()) {
    $uid = $d["user_id"];
?>
    <tr>
        <th><?php echo $d["user_id"] ?></th>
        <td><a class="state_hover" 
        href="<?php echo "userDetails.php?id=" .  $uid; ?>">
        <?php echo $d["fname"] ?></a></td>
        <td><a class="state_hover"
         href="<?php echo "userDetails.php?id=" . $uid; ?>">
          <?php echo $d["lname"] ?></a> </td>
        <td><?php echo $d["email"] ?></td>
        <td><?php echo $d["mobile"] ?></td>
        <?php
        if ($d["status_id"] == 1) {

        ?> <td class=" bg-success text-white"> 
            <?php echo "Active"; ?>
     </td><?php
            }
            if ($d["status_id"] == 2) {
                ?> <td class=" bg-danger text-white">
                     <?php echo "Blocked"; ?>
             </td><?php
            }
?>
    </tr>
<?php
}
?>