<?php
    require_once 'connectDB.php';
    if(isset($_POST['submit'])){

        if (isset($_SESSION['email']) AND isset($_POST['comments'])) {
            # code...
            
            $email = $_SESSION['email'];
            $coms = $_POST['comments'];
            $coms = addslashes($coms);
            $modal = '';
             
            $query = "INSERT INTO `messages`( `Email`, `Message`) VALUES ('$email','$coms')";
            $check = mysqli_query($conn, $query);

            if (!$check) {
                die('Query failed'.mysqli_error());
            }else{
                header("location: contact_success.php");
            }

            ob_end_flush();
        }
        else{

            echo "Its not set";

        }

    }

?>