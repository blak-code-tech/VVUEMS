<?php

require_once 'connectDB.php';
require_once 'form_processing.php';

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    if ($id) {
        # code...
        $edit_query = ("SELECT * FROM events WHERE id=$id");
        $check_edit = mysqli_query($conn, $edit_query);
        if (!$check_edit) {
            # code...
            die("Cannot connect");
        }else{
                $row = mysqli_fetch_array($check_edit);
                $eid = $row["ID"];
                $date = $row["Date"];
                $time = $row["Time"];
                $num_guest = $row["Num_Guest"];
                $chairs = $row["Chairs"];
                $sound = $row["Sound"];
                $venue = $row["Venue"];
                $event = $row["Event"];
                $best_time = $row["Best_Time"];
                $description = $row["Description"];
                $cus_id = $row['Customer_ID'];  
        
        }
    }
}


if (isset($_GET['delete_customer_event'])) {
    # code...
    $id = $_GET['delete_customer_event'];
    $delete_query = ("DELETE FROM events WHERE id=$id");
    $check_delete = mysqli_query($conn, $delete_query);
    if (!$check_delete) {

        die(mysqli_error($conn));
    }else{
        echo("Record Deleted Successfully.");   
        header("location: listEvents.php"); 
    }                        
}


if (isset($_GET['admin_delete_event'])) {
    # code...
    $id = $_GET['admin_delete_event'];
    $delete_query = ("DELETE FROM events WHERE id=$id");
    $check_delete = mysqli_query($conn, $delete_query);
    if (!$check_delete) {

        die(mysqli_error($conn));
    }else{
        echo("Record Deleted Successfully.");   
        header("location:admin_events.php"); 
    }
                           
}


if (isset($_GET['admin_delete_customer'])) {
    # code...
    $id = $_GET['admin_delete_customer'];
    $delete_query = ("DELETE FROM customers WHERE Username='$id'");
    $check_delete = mysqli_query($conn, $delete_query);
    if (!$check_delete) {

        die(mysqli_error($conn));
    }else{
        echo("Record Deleted Successfully.");   
        header("location:admin_customers.php"); 
    }
                           
}


if (isset($_GET['delete_contact'])) {
    # code...
    $id = $_GET['delete_contact'];
    $delete_query = ("DELETE FROM `messages` WHERE id=$id");
    $check_ = mysqli_query($conn, $delete_query);
    
    if (!$check_) {

        die(mysqli_error($conn));
    }else{

        echo("Record Deleted Successfully."); 
        header("location: admin_contacts.php"); 
         
    }
                           
}


?>