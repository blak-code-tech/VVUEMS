<?php require_once 'require/header.php'; ?>
    
    <div class="login-dark" id="admins">
        <form class="mt-4" method="post" action="admin_login.php">
            <?php require 'require/admin_login_processing.php';?>
            <div class="illustration">
                <i class="icon ion-ios-locked-outline"></i><h5 style="margin: 12px 0 15px 0;">Admins Only</h5>
            </div>

            <div class="form-group">
                <input class="form-control" type="text" placeholder="ID" name="id" required="">
            </div>

            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password" required="">
            </div>

            <button class="btn btn-success btn-block" name="admin_btn" type="submit">Log In</button>
            <a class="forgot" style="padding: 15px;" href="index.php">Users</a>
        </form>
    </div>
    <?php ob_end_flush();?>
<?php require_once 'require/footer_links.php';?>