<thead style="font-size: 16px;">

    <tr>
        
        <th data-field="Username" data-filter-control="input" data-sortable="true">Username</th>
        <th data-field="Fname" data-filter-control="select" data-sortable="true">First Name</th>
        <th data-field="Mname" data-filter-control="select" data-sortable="true">Middle Names</th>
        <th data-field="Lname" data-filter-control="input" data-sortable="true">Last Names</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>
</thead>
<tbody style="font-size: 15px;">
    
        <?php
            ob_start();
        
            $num = 0;
            require_once 'require/connectDB.php'; 

            $query = "SELECT * FROM customers";
            $check = mysqli_query($conn, $query);

            if (!$check) {
                die('Query failed'.mysqli_error());
            }else {

                if ($check-> num_rows > 0){
                    # code...
                    ?>
                    <?php while ($row = mysqli_fetch_assoc($check)): ?>
                        
                
                    <tr class="p-1">
                        
                            <td class="p-2"><?php echo $row["Username"];?></td>
                            <td class="p-2"><?php echo $row["Fname"];?></td>
                            <td class="p-2"><?php echo $row["Mname"];?></td>
                            <td class="p-2"><?php echo $row["Lname"];?></td>
                            <td class="p-2"><?php echo $row["Phone"];?></td>
                            <td class="p-2"><?php echo $row["Email"];?></td>  
                            <td class="p-2">
                                <div class="col pt-2">
                                    <div class="btn-group btn-group-sm" role="group">
                                        <a href="admin_customers.php?admin_delete_customer=<?php echo $row["Username"];?>" class="btn btn-danger btn-md" style="margin: 5px">Delete</a>
                                    </div>
                                </div>

                            </td>
                    </tr>

                            <?php $num += 1;?>
                    <?php endwhile ?>
                    <?php
                    echo '<caption>Number of customers: <span class="badge badge-success">'.$num.'</span></caption>';

                }else{
                    echo '<div class="alert alert-info">No Records to Show</div>';
                }
            }

            require 'deleteUpdate.php';
           
        ?>
</tbody>