<?php require_once 'require/header.php'; ?>

     <?php require_once 'require/modals.php'; ?>
     
    <div class="signup-dark">
        <div style="background-color: rgba(0,0,0,0.8); width: 100%; height: 100vh;">
        <div class="container">
        <form class="mt-4" method="post" action="SignUp.php">
            <?php require 'require/signup_processing.php';?>
            <h2 class="sr-only">Sign Up</h2>
            <div class="illustration">
                <i class="icon ion-ios-plus-outline"></i>
                <h5 style="margin: 12px 0 15px 0;">Sign Up</h5>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">       
                        <div class="Names">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="First Name" name="fname" required="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Middle Name" name="mname" >
                            </div>

                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Last Name" name="lname" required="">
                            </div>

                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Username" name="uname" required="">
                            </div>

                        </div>
                    </div> 
                    <div class="col-md-6">
                        <div class="others">
                            <div class="form-group">
                                <input class="form-control" type="email" placeholder="Email" name="email" required="">
                            </div>

                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Phone Number" name="phone" required="">
                            </div>

                             <div class="form-group">
                                <input class="form-control" type="password" name="password1" placeholder="Password" required="">
                            </div>

                            <div class="form-group">
                                <input class="form-control" type="password" name="password2" placeholder="ConfirmPassword" required="">
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="foot">
                <button class="btn btn-success btn-block" type="submit">Sign Up</button>
                <a class="forgot" style="padding: 15px;" href="index.php">Log In</a>
            </div>
        </form>
    </div>
        </div>

    </div>
<?php require_once 'require/footer_links.php'; ?>