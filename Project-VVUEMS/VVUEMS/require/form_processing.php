<?php
 require_once 'core.php';

    if(isset($_POST['submit'])){
        $event_type;
        $whether_chair; 
        $whether_sound;
        $venue_type;
        $best_time;

       /* function bring_value($Where){
            foreach ($where as $value) {
            # code...
                $value;
            }
            return $value;
        }*/

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

        $rand = rand(1000000000,9999999999);
        $eid = 'E'.$rand;
        require_once 'require/connectDB.php'; 

        $query = "INSERT INTO events(EventID, Event, Num_Guest, Chairs, Sound, Date, Time, Venue, Description, Best_Time, Customer_ID) VALUES ('$eid','$event_type','$numGuest','$whether_chair','$whether_sound','$date','$time','$venue_type','$coms','$best_time', '$customer_id')";
        $check = mysqli_query($conn, $query);

        if (!$check) {
            die('Query failed'.mysqli_error($conn));   
        }else{
            $msg = "Code: ".$eid;
            mail($email, "Your Event Code for VVUEMS #".$eid, $msg);
            header("location: form_success.php");
        }
    }

?>