<?php session_start(); ?>

<?php if (isset($_SESSION["id"])) {?>


<?php require_once 'require/header.php'; ?>
<?php require_once 'require/modals.php'; ?>
    <nav class="navbar navbar-dark navbar-expand-md fixed-top" id="myNavbar">
        <?php require_once 'require/nav.php'; ?>
    </nav>
    <?php require_once 'require/modals.php'; ?>
    <div data-bs-parallax-bg="true" id="main">
        <div class="jumbotron" id="hero">
            <h1 class="text-center" data-aos="fade-up"
     data-aos-duration="1000">UPCOMING EVENT</h1>
            <h2 class="text-center" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="800">LEOLA CONFERENCE</h2>
        </div>
    </div>
    <h1 class="text-center pt-5" data-aos="zoom-in" data-aos-duration="800">WHAT WE ORGANIZE.</h1>
    <div data-bs-parallax-bg="true" class="features-clean" ">
        <div id="features">
            <div class="container" id="white_bg">
                <div class="row features">
                    <div data-aos="fade-up" data-aos-duration="800" class="col-sm-6 col-lg-4 item"><i class="fa fa-map-marker icon"></i>
                        <h3 class="name">Works everywhere</h3>
                        <p class="description">You can book or update the status of an event anywhere in the world</p>
                    </div>
                    <div data-aos="fade-down" data-aos-duration="800" class="col-sm-6 col-lg-4 item"><i class="fa fa-clock-o icon"></i>
                        <h3 class="name">Always available</h3>
                        <p class="description">VVU EMS systems are always online, all you need is an internet connection.</p>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="800" class="col-sm-6 col-lg-4 item"><i class="fa fa-list-alt icon"></i>
                        <h3 class="name">Customizable</h3>
                        <p class="description">You decide what we do for you.</p>
                    </div>
                    <div data-aos="fade-left" data-aos-duration="800" class="col-sm-6 col-lg-4 item"><i class="fa fa-leaf icon"></i>
                        <h3 class="name">Eco-friendly</h3>
                        <p class="description">Our locations are eco-friendly and full of nature's beauties.</p>
                    </div>
                    <div data-aos="fade-down" data-aos-duration="800" class="col-sm-6 col-lg-4 item"><i class="fa fa-plane icon"></i>
                        <h3 class="name">Fast</h3>
                        <p class="description">We work rapidly without delay for any reason.</p>
                    </div>
                    <div data-aos="fade-right" data-aos-duration="800" class="col-sm-6 col-lg-4 item"><i class="fa fa-phone icon"></i>
                        <h3 class="name">Customer Relations</h3>
                        <p class="description">We always try to get in touch with our customers to server them better.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="" style="padding-top: 40px;">
        <h1 class="text-center" data-aos="zoom-in" data-aos-duration="800">WHAT OUR CUSTOMERS SAY.</h1>
        <div class="container-fluid>
            <section id="carousel" class="pt-3" style="margin: 100px;">
                <div class="carousel slide" data-ride="carousel" id="carousel-1">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item">
                            <div class="jumbotron pulse animated hero-nature carousel-hero">
                                <h1 class="hero-title">Amanda Milton</h1>
                                <p class="lead hero-subtitle">I had a dream birthday celebration in mind, and a friend suggested VVUEMS to me OMG they made my dream come true.</p>
                            </div>
                        </div>
                        <div class="carousel-item active">
                            <div class="jumbotron pulse animated hero-photography carousel-hero">
                                <h1 class="hero-title">Angel Construction</h1>
                                <p class="lead hero-subtitle">The first week of planning our 50th anniversary coupled with our work was a headache, then we found VVU EMS, who took our problem of planning and working away. Our anniversary was wonderful.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="jumbotron pulse animated hero-technology carousel-hero">
                                <h1 class="hero-title">COSSA</h1>
                                <p class="lead hero-subtitle">We moved no finger, VVUEMS made our IT expo a success.</p>
                            </div>
                        </div>
                    </div>
                    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><i class="fa fa-chevron-left"></i><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><i class="fa fa-chevron-right"></i><span class="sr-only">Next</span></a></div>
                    <ol
                        class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0"></li>
                        <li data-target="#carousel-1" data-slide-to="1" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                        </ol>
                </div>
            </section>
        </div>
    </div>
        
    <?php require_once 'require/main_footer.php'; ?>

    <?php
}else header("Location: index.php");?>