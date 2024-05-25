<?php

include "../connection.php";



$rs = Database::search("SELECT * FROM `user`");

while ($d = $rs->fetch_assoc()){

?>
                                        <tr>
                                            <th><?php echo $d ["user_id"]?></th>
                                            <td><?php echo $d ["fname"]?></td>
                                            <td><?php echo $d ["lname"]?></td>
                                            <td><?php echo $d ["email"]?></td>
                                            <td><?php echo $d ["mobile"]?></td>
                                            <td><?php 
                                            
                                            if ($d["status_id"] == 1) {
                                                echo "Active";
                                            }  if ($d["status_id"] == 2) {
                                                echo "Blocked";
                                            }

                                              
                                            

                                            ?></td>
                                        
                                        </tr>
<?php
}




?>
