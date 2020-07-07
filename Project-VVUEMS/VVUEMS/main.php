<?php require_once 'require/header.php'; ?>
	<div class="main">
		<div class="login-dark">
        <form class="mt-4" method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i><h5 style="margin: 12px 0 15px 0;">Student / Staff</h5></div>

            <div class="form-group"><input class="form-control" type="text" placeholder="ID" name="id" required=""></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" required=""></div><button class="btn btn-success btn-block" type="submit">Log In</button><a class="forgot" href="#">Admin</a></form>
    </div>
	</div>
<?php require_once 'require/main_footer.php'; ?>