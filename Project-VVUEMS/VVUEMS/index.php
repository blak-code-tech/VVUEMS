<?php require_once 'require/header.php';?>

    <div id="users_" class="login-dark">
            <form class="mt-4" method="post" action="index.php">
            <?php require 'require/login_processing.php';?>
            <h2 class="sr-only">Sign In</h2>

            <div class="illustration"><i class="icon ion-ios-contact-outline"></i><h5 style="margin: 12px 0 15px 0;">Welcome to VVUEMS</h5></div>

            <div class="form-group"><input class="form-control" type="text" placeholder="Username" name="id" required=""></div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password" required="">
            </div>
            <button class="btn btn-success btn-block" type="submit" name="userbtn">Log In</button>
            <a class="forgot" style="padding: 15px;" href="Admin_login.php">Log In as Admin</a>
            <a class="forgot" style="padding: 15px;" href="SignUp.php">I don't have an account yet.</a>
        </form>
    </div>
<?php require_once 'require/footer_links.php'; ?>