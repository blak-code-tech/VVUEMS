
 <?php  require_once 'require/connectDB.php'; 
        require_once 'require/modals.php'; ?>
        
<thead style="font-size: 16px;">

    <tr>
        
        <th data-field="EventID" data-filter-control="input" data-sortable="true">Event ID</th>
        <th>Type Of Event</th>
        <th data-field="Date" data-filter-control="select" data-sortable="true">Date</th>
        <th data-field="Time" data-filter-control="select" data-sortable="true">Time</th>
        <th data-field="Num_Guest" data-filter-control="input" data-sortable="true">No. Of Guests</th>
        <th>Chairs</th>
        <th>Sound System</th>
        <th>Venue</th>
        <th>Best Time To Call</th>
        <th>Event Description</th>
        <th>Actions</th>
    </tr>
</thead>
<tbody style="font-size: 15px;">
    
        <?php
            ob_start();
        
            $num = 0;


            $query = "SELECT * FROM events where Customer_ID = '{$_SESSION['id']}'";

            $check = mysqli_query($conn, $query);

            if (!$check) {
                die('Query failed'.mysqli_error());
            }else {

                if ($check-> num_rows > 0){
                    # code...

                    ?>
                    <?php while ($row = mysqli_fetch_assoc($check)): 

                        $_SESSION['EID'] = $row['ID'];

                        ?>

                    <tr class="p-1">
                        
                            <td class="p-2"><?php echo $row["EventID"];?></td>
                            <td class="p-2"><?php echo $row["Event"];?></td>
                            <td class="p-2"><?php echo $row["Date"];?></td>
                            <td class="p-2"><?php echo $row["Time"];?></td>
                            <td class="p-2"><?php echo $row["Num_Guest"];?></td>
                            <td class="p-2"><?php echo $row["Chairs"];?></td>
                            <td class="p-2"><?php echo $row["Sound"];?></td>
                            <td class="p-2"><?php echo $row["Venue"];?></td>
                            <td class="p-2"><?php echo $row["Best_Time"];?></td>
                            <td class="p-2"><?php echo $row["Description"];?></td>    
                            <td class="p-2">
                                <div class="col pt-2">
                                    <div class="btn-group btn-group-md" role="group">
                                        <a href="update_form.php?edit=<?php echo $row["ID"];?>"class="btn btn-info btn-md" style="margin: 5px">Edit</a>
                                        <a href="listEvents.php?delete_customer_event=<?php echo $row["ID"];?>"style="margin: 5px"class="btn btn-danger btn-md" >Delete</a>
                                    
                                    </div>
                                </div>

                            </td>
                    </tr>

                            <?php $num += 1;?>
                    <?php endwhile ?>
                    <?php
                    echo '<caption>Number of events: <span class="badge badge-success">'.$num.'</span></caption>';

                }else{
                    echo '<div class="alert alert-info">No Records to Show</div>';
                }
            }

            require 'deleteUpdate.php';

        ?>
</tbody>