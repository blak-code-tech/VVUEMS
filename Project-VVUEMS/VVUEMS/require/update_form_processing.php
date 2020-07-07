<?php
session_start();
require_once 'connectDB.php';
    if (isset($_POST['CustomerUpdate'])) {
        # code...
        echo $_SESSION['eid'];
        $event_type;
        $whether_chair; 
        $whether_sound;
        $venue_type;
        $best_time;

        ## select tags
        $my_eve = $_POST['event'];
        $get_eve = explode(':', $my_eve);
        foreach ($get_eve as $value) {
            # code...
                $event_type = $value;
            }
            
        $numGuest = $_POST['numGuest'];

        $my_chair = $_POST['chairs'];
        $get_chair = explode(':', $my_chair);
        foreach ($get_chair as $value) {
            # code...
                $whether_chair = $value;
            }

        $my_sound = $_POST['sound'];
        $get_sound = explode(':', $my_sound);
        foreach ($get_sound as $value) {
            # code...
                $whether_sound = $value;
            }

        $my_venue = $_POST['venue'];
        $get_venue = explode(':', $my_venue);
        foreach ($get_venue as $value) {
            # code...
                $venue_type = $value;
            }

        $my_bt = $_POST['call_time'];
        $get_bt = explode(':', $my_bt);
        foreach ($get_bt as $value) {
            # code...
            $best_time = $value;
        }

        $time = $_POST['deTime'];
        $date = $_POST['deDate'];
        $coms = $_POST['comments'];
        $coms = addslashes($coms);
        $customer_id = $_SESSION['id'];
        $myId = $_SESSION['eid'];

        if ($myId) {
            # code...
            $query = "UPDATE `events` SET `Event`='$event_type',`Num_Guest`='$numGuest',`Chairs`='$whether_chair',`Sound`= '$whether_sound',`Date`='$date',`Time`='$time',`Venue`='$venue_type',`Description`='$coms',`Best_Time`='$best_time',`Customer_ID` = '$customer_id' WHERE `ID` = '$myId'";

            $check = mysqli_query($conn, $query);

            if (!$check) {
                die('Query failed'.mysqli_error($conn));   
            }else{
                header("location: ../listEvents.php");
            }
        }
    }

    if (isset($_POST['AdminUpdate'])) {
        # code...
        echo $_SESSION['eid'];
        $event_type;
        $whether_chair; 
        $whether_sound;
        $venue_type;
        $best_time;

        ## select tags
        $my_eve = $_POST['event'];
        $get_eve = explode(':', $my_eve);
        foreach ($get_eve as $value) {
            # code...
                $event_type = $value;
            }
            
        $numGuest = $_POST['numGuest'];

        $my_chair = $_POST['chairs'];
        $get_chair = explode(':', $my_chair);
        foreach ($get_chair as $value) {
            # code...
                $whether_chair = $value;
            }

        $my_sound = $_POST['sound'];
        $get_sound = explode(':', $my_sound);
        foreach ($get_sound as $value) {
            # code...
                $whether_sound = $value;
            }

        $my_venue = $_POST['venue'];
        $get_venue = explode(':', $my_venue);
        foreach ($get_venue as $value) {
            # code...
                $venue_type = $value;
            }

        $my_bt = $_POST['call_time'];
        $get_bt = explode(':', $my_bt);
        foreach ($get_bt as $value) {
            # code...
            $best_time = $value;
        }

        $time = $_POST['deTime'];
        $date = $_POST['deDate'];
        $coms = $_POST['comments'];
        $coms = addslashes($coms);
        $customer_id = $_SESSION['cus'];
        $myId = $_SESSION['eid'];

        if ($myId) {
            # code...
            $query = "UPDATE `events` SET `Event`='$event_type',`Num_Guest`='$numGuest',`Chairs`='$whether_chair',`Sound`= '$whether_sound',`Date`='$date',`Time`='$time',`Venue`='$venue_type',`Description`='$coms',`Best_Time`='$best_time',`Customer_ID` = '$customer_id' WHERE `ID` = '$myId'";

            $check = mysqli_query($conn, $query);

            if (!$check) {
                die('Query failed'.mysqli_error($conn));   
            }else{
                header("location: ../admin_events.php");
            }
        }
    }
?>