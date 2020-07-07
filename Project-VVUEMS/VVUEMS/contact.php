<?php session_start(); ?>

<?php if (isset($_SESSION["id"])) {?>

<?php require_once 'require/contact_processing.php'; ?>

<?php require_once 'require/header.php'; ?>
    <nav class="navbar navbar-dark navbar-expand-md fixed-top" style="opacity: 1;height: 83px;">
        <?php require_once 'require/nav.php'; ?>
    </nav>

    <?php require_once 'require/modals.php'; ?>
    
    <div id="contact-bg">
        <div class="container">
            <div class="pt-8">
                <div class="container-fluid">
                    <h1 class="text-center text-white" data-aos="zoom-in" data-aos-duration="800" style="padding: 0 0 5px 0;margin: 30px 0 10px 0;">Talk To Us.</h1>

                    <form id="contactForm" action="contact.php" method="post"><input class="form-control" type="hidden" name="Introduction" value="This email was sent from www.vvuems.com"><input class="form-control" type="hidden" name="subject" value="Awebsite.com Contact Form"><input class="form-control"
                            type="hidden" name="to" value="email@vvuems.com">

                        <div class="form-row">
                            <div class="col-md-6">
                                <div id="successfail"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="500" class="col-12 col-md-6" id="message">
                                <h2 class="text-white h4"><i class="fa fa-envelope"></i>&nbsp; Contact Us<small><small class="text-danger required-input">&nbsp;(*required)</small></small>
                                </h2>
                                <div class="form-group"><label class="text-white" for="from-comments">Comments</label><textarea class="form-control" id="from-comments" required="" name="comments" placeholder="Enter Comments" rows="7"></textarea></div>
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col"><button class="btn btn-info btn-block" type="reset"> Reset Form</button></div>
                                        <div class="col"><input type="submit" name="submit" data-toggle="modal" data-target="cont" class="btn btn-success btn-block" value="Send"></div>
                                    </div>
                                </div>
                                <hr class="d-flex d-md-none">
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-row">
                                    <div data-aos="fade-down" data-aos-duration="800" data-aos-delay="500"  class="col-sm-6 col-md-12 col-lg-6">
                                        <h2 class="text-white h4"><i class="fa fa-user"></i> Our Info</h2>
                                        <div><span class="text-white"><strong>Valley View University</strong></span></div>
                                        <div><span class="text-light">ems@vvu.edu.gh</span></div>
                                        <div><span class="text-white">www.ems.vvu.edu.gh.com</span></div>
                                        <hr class="d-sm-none d-md-block d-lg-none">
                                    </div>

                                    <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="500" class="col-sm-6 col-md-12 col-lg-6">
                                        <h2 class="text-white h4"><i class="fa fa-location-arrow"></i> Our Address</h2>
                                        <div><span class="text-light"><strong>Valley View University - Receiption</strong><br></span></div>
                                        <div><span class="text-light">Mile 19 Off the Adenta-Dodowa Road</span></div>
                                        <div class="text-light"><span>P.O Box AF 595 Adentan&nbsp;</span></div>
                                        <div><span class="text-light">+233-307011832</span></div>
                                        <hr class="d-sm-none">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php require_once 'require/main_footer.php'; ?>

<?php
}else header("Location: index.php");?>