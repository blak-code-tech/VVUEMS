<?php session_start(); ?>

<?php if (isset($_SESSION["id"])) {?>

<?php require_once 'require/header.php'; ?>
    <nav class="navbar navbar-dark navbar-expand-md fixed-top" id="myNavbar">
        <?php require_once 'require/nav.php'; ?>
    </nav>
    
    <div class="my-form">
        <h1 class="text-center" data-aos="zoom-in" data-aos-duration="800">EVENT BOOKING FORM</h1>
        <?php require_once 'require/form_processing.php'; ?>
        <hr>
        <form action="form.php" method="post">
            <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="800" class="form-row">
                
                <div class="col-12">
                    <div class="form-group"><label for="from-calltime">Event</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div><select class="custom-select" id="from-calltime" name="event"><optgroup label="What type of event do you wish to organize?"><option value="Wedding" selected="">Wedding</option><option value="Conference">Conference</option><option value="Meeting">Meeting</option><option value="Sports">Sports</option><option value="Reunion">Reunion</option><option value="Celebrations">Celebrations</option><option value="Funeral">Funeral</option></optgroup></select></div>
                    </div>
                </div>
                
            </div>

            <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="800" class="form-row">
                <div class="col">
                    <div class="form-group"><label for="from-name">Number of guests</label><span class="required-input">*</span>
                        <div class="input-group">
                            <div class="input-group-prepend"></div><input class="form-control" type="text" id="numGuest" name="numGuest" required="" placeholder="Expected Guests" max="2500"></div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="form-group"><label for="from-calltime">Are we to provide chairs?</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div><select class="custom-select" id="from-calltime" name="chairs"><option value="Yes" selected="">Yes</option><option value="No">No</option></select></div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="form-group"><label for="from-calltime">Are we to provide sound system?</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div><select class="custom-select" id="from-calltime" name="sound"><option value="Yes" selected="">Yes</option><option value="No">No</option></select></div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group"><label class="from-name">Date Of Event</label><span class="required-input">*</span><input class="form-control" type="date" required="" name="deDate"></div>
                </div>
                <div class="col-3">
                    <div class="form-group"><label class="from-name">Time Of Event</label><span class="required-input">*</span><input class="form-control" type="time" required="" name="deTime"></div>
                </div>
                <div class="col-auto">
                    <div class="form-group"><label for="from-calltime">Venue</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div><select class="custom-select visible" id="from-calltime" name="venue" required=""><option value="Classroom">Classroom</option><option value="Boluwatife Hall">Boluwatife Hall (70 to 100)</option><option value="Women Center">Women Center (100 to 200)</option><option value="Columbia Hall">Columbia Hall (200 to 500)</option><option value="Park">Park ( 500 - 700)</option><option value="Seth Laryea Multipurpose center">Seth Laryea Multipurpose center (700 to 1000)</option></select></div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group"><label for="from-comments">Describe the event</label><textarea class="form-control" id="from-comments" name="comments" placeholder="Enter Description" rows="8" spellcheck="true" wrap="soft"></textarea></div>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-duration="800" class="form-row">
                
                <div class="col-sm-6 col-md-12 col-lg-12">
                    <div class="form-group"><label for="from-calltime">Best Time to Call</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div><select class="custom-select" id="from-calltime" name="call_time"><optgroup label="Best Time to Call"><option value="Morning" selected="">Morning</option><option value="Afternoon">Afternoon</option><option value="Evening">Evening</option></optgroup></select></div>
                    </div>
                </div>
                
            </div>
          
            <div data-aos-duration="800" data-aos="zoom-in-left" data-aos-delay="200" class="form-row justify-content-end pt-3">
                <div class="col-3"><button class="btn btn-info btn-block" type="reset"> Reset Form</button></div>
                <div class="col-3"><input class="btn btn-success btn-block" type="submit" name="submit" value="Submit Form"></div>
            </div>
        </form>
    </div>

<?php require_once 'require/main_footer.php'; ?>

<?php
}else header("Location: index.php");?>