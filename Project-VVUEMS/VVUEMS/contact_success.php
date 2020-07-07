<?php session_start(); ?>

<?php if (isset($_SESSION["id"])) {?>

<?php require_once 'require/header.php';?>

    <nav class="navbar navbar-dark navbar-expand-md fixed-top" id="myNavbar">
        <?php require_once 'require/nav.php'; ?>
    </nav>
    <div id="contact_">
        <div style="background-color: rgba(0,0,0,0.8); height: 100vh; width: 100%;">
        <div class="jumbotron" id="msg" style="padding: 0; background-color: transparent;">
            <h1 class="text-center">Message Sent Successfully.</h1>
            <p class="lead text-center">A member from the support team will contact you shortly.</p>
            <p class="text-center">Thank you for sharing your thoughts/problems with us.</p>
        </div>
    </div>
    </div>
  <?php require_once 'require/main_footer.php'; ?>
    <?php
}else header("Location: home.php");?>