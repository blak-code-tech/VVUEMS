<?php session_start(); ?>
<?php require_once 'require/form_processing.php';?>
<?php require_once 'require/header.php';?>

    <nav class="navbar navbar-dark navbar-expand-md fixed-top" id="myNavbar">
        <?php require_once 'require/nav.php'; ?>
    </nav>
    
    <div id="form_">
        <div style="background-color: rgba(0,0,0,0.8); height: 100vh; width: 100%;">
            <div class="jumbotron" id="msg" style="padding: 0; background-color: transparent;">
            <?php require 'require/deleteUpdate.php';?>
            <h1 class="text-center">Form Submitted Successfully.</h1>
            <p class="text-center lead">We will contact you soon for further verifications and means of payment.</p>
            <p class="text-center"><br>Thank You For Choosing Us!!</p>
        </div>
        </div>
    </div>
    
<?php require_once 'require/main_footer.php'; ?>

</html>