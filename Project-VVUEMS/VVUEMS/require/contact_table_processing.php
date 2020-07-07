<thead>
    <tr>
        <th>Email</th>
        <th>Message</th>
        <th>Actions</th>
        
    </tr>
</thead>
<tbody>
    <?php

            $num = 0;
            
            require_once 'require/connectDB.php'; 
       
            $query = "SELECT * FROM messages";
            $check = mysqli_query($conn, $query);

            if (!$check) {
                die('Query failed'.mysqli_error());
            }else {

                if ($check-> num_rows> 0){
                    # code...
                    ?>
                    <?php while ($row = mysqli_fetch_assoc($check)):?>
                
                            <tr class="p-1">
                                <td class="p-2"><?php echo $row["Email"];?></td>
                                <td class="p-2"><?php echo $row["Message"];?></td>
                                <td class="p-2">
                                <div class="col pt-2">
                                    <div class="btn-group btn-group-sm" role="group">
                                        <a href=""class="btn btn-info btn-sm" style="margin: 5px">Reply</a>
                                        <a href="admin_contacts.php?delete_contact=<?php echo $row["ID"];?>" class="btn btn-danger btn-sm" style="margin: 5px">Delete</a>

                                    </div>
                                </div>
                
                            </td>
                        </tr> 
                               <?php $num += 1;?>
                    <?php endwhile ?>
                    <?php
                    echo '<caption>Message <span class="badge badge-success">'.$num.'</span></caption>';

                }else{
                    echo '<div class="alert alert-info">No Records to Show</div>';
                }
            }

            require_once 'deleteUpdate.php';
           
        ?>

</tbody>