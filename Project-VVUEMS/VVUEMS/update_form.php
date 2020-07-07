<?php session_start(); ?>

<?php if (isset($_SESSION["id"])) {?>

<?php require_once 'require/core.php';?>
<?php require_once 'require/header.php'; ?>
    <nav class="navbar navbar-dark navbar-expand-md fixed-top" id="myNavbar">
        <?php require_once 'require/update_form_nav.php'; ?>
    </nav>
    <div class="my-form">
        <h1 class="text-center" data-aos="zoom-in" data-aos-duration="800">EVENT BOOKING FORM</h1>
        <h3 class="text-center" data-aos="zoom-in" data-aos-duration="800">UPDATING FORM</h3>
        <hr>
        
        <form action="require/update_form_processing.php" method="post">
            <?php require 'require/deleteUpdate.php';?>
            <div class="form-row" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
                <?php $_SESSION['eid'] = $eid; ?>
                <div class="col-12">
                    <div class="form-group"><label for="from-calltime">Event</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <select class="custom-select" id="from-calltime" name="event">
                                <optgroup label="What type of event do you wish to organize?">
                                    <?php
                                    if ($event === "Wedding") {
                                        # code...
                                        echo '<option value="Wedding" selected="">Wedding</option>';
                                    }
                                    else{
                                        echo '<option value="Wedding">Wedding</option>';
                                    }

                                    if ($event === "Conference") {
                                        # code...
                                        echo '<option value="Conference" selected="">Conference</option>';
                                    }
                                    else{
                                        echo '<option value="Conference">Conference</option>';
                                    } 

                                    if ($event === "Meeting") {
                                        # code...
                                        echo '<option value="Meeting" selected="">Meeting</option>';
                                    }
                                    else{
                                        echo '<option value="Meeting">Meeting</option>';
                                    }

                                    if ($event === "Sports") {
                                        # code...
                                        echo '<option value="Sports" selected="">Sports</option>';
                                    }
                                    else{
                                        echo '<option value="Sports">Sports</option>';
                                    }

                                    if ($event === "Reunion") {
                                        # code...
                                        echo '<option value="Reunion" selected="">Reunion</option>';
                                    }
                                    else{
                                        echo '<option value="Reunion">Reunion</option>';
                                    }

                                    if ($event === "Celebrations") {
                                        # code...
                                        echo '<option value="Celebrations" selected="">Celebrations</option>';
                                    }
                                    else{
                                        echo '<option value="Celebrations">Celebrations</option>';
                                    }

                                    if ($event === "Funeral") {
                                        # code...
                                        echo '<option value="Funeral" selected="">Funeral</option>';
                                    }
                                    else{
                                        echo '<option value="Funeral">Funeral</option>';
                                    }
                                    ?>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="800" class="form-row">
                <div class="col">
                    <div class="form-group"><label for="from-name">Number of guests</label><span class="required-input">*</span>
                        <div class="input-group">
                            <div class="input-group-prepend"></div><input class="form-control" value="<?php echo $num_guest;?>" type="text" id="numGuest" name="numGuest" required="" placeholder="Expected Guests" maxlength="4"></div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="form-group"><label for="from-calltime">Are we to provide chairs?</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <select class="custom-select" id="from-calltime" name="chairs">
                                <?php
                                if ($chairs === "Yes") {
                                    # code...
                                    echo '<option value="Yes" selected="">Yes</option>';
                                }
                                else{
                                    echo '<option value="Yes">Yes</option>';
                                }

                                if ($chairs === "No") {
                                    # code...
                                    echo '<option value="No" selected="">No</option>';
                                }
                                else{
                                    echo '<option value="No">No</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="form-group"><label for="from-calltime">Are we to provide sound system?</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <select class="custom-select" id="from-calltime" name="sound">
                                <?php
                                if ($sound === "Yes") {
                                    # code...
                                    echo '<option value="Yes" selected="">Yes</option>';
                                }
                                else{
                                    echo '<option value="Yes">Yes</option>';
                                }

                                if ($sound === "No") {
                                    # code...
                                    echo '<option value="No" selected="">No</option>';
                                }
                                else{
                                    echo '<option value="No">No</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group"><label class="from-name">Date of Event</label><span class="required-input">*</span><input class="form-control" value="<?php echo $date;?>" type="date" required="" name="deDate"></div>
                </div>
                <div class="col-3">
                    <div class="form-group"><label class="from-name">Time of Event</label><span class="required-input">*</span><input class="form-control" value="<?php echo $time;?>" type="time" required="" name="deTime"></div>
                </div>
                <div class="col-auto">
                    <div class="form-group"><label for="from-calltime">Venue</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <select class="custom-select visible" id="from-calltime" name="venue" required="">
                                <optgroup label="Where would you like to host the event?">
                                    <?php
                                    if ($venue === "Wedding") {
                                        # code...
                                        echo '<option value="Classroom" selected="">Classroom</option>';
                                    }
                                    else{
                                        echo '<option value="Classroom">Classroom</option>';
                                    }

                                    if ($venue === "Boluwatife Hall") {
                                        # code...
                                        echo '<option value="Boluwatife Hall" selected="">Boluwatife Hall (70 to 100)</option>';
                                    }
                                    else{
                                        echo '<option value="Boluwatife Hall">Boluwatife Hall (70 to 100)</option>';
                                    }

                                    if ($venue === "Women Center") {
                                        # code...
                                        echo '<option value="Women Center" selected="">Women Center (100 to 200)</option>';
                                    }
                                    else{
                                        echo '<option value="Women Center">Women Center (100 to 200)</option>';
                                    }

                                    if ($venue === "Columbia Hall") {
                                        # code...
                                        echo '<option value="Columbia Hall" selected="">Columbia Hall (200 to 500)</option>';
                                    }
                                    else{
                                        echo '<option value="Columbia Hall">Columbia Hall (200 to 500)</option>';
                                    }

                                    if ($venue === "Park") {
                                        # code...
                                        echo '<option value="Park" selected="">Park ( 500 - 700)</option>';
                                    }
                                    else{
                                        echo '<option value="Park">Park ( 500 - 700)</option>';
                                    }

                                    if ($venue === "Seth Laryea Multipurpose center") {
                                        # code...
                                        echo '<option value="Seth Laryea Multipurpose center" selected="">Seth Laryea Multipurpose center(700 to 1000)</option>';
                                    }
                                    else{
                                        echo '<option value="Seth Laryea Multipurpose center">Seth Laryea Multipurpose center(700 to 1000)</option>';
                                    }
                                    ?>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group"><label for="from-comments">Describe the event</label><textarea class="form-control" id="from-comments"name="comments" placeholder="Enter Description" rows="8" spellcheck="true" wrap="soft"><?php echo $description?></textarea></div>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-duration="800" class="form-row">
                <div class="col-sm-6 col-md-12 col-lg-12">
                    <div class="form-group"><label for="from-calltime">Best Time to Call</label>
                        <div class="input-group">
                            <div class="input-group-prepend"></div>
                            <select class="custom-select" id="from-calltime" name="call_time">
                                <optgroup label="Best Time to Call">

                                    <?php if ($best_time === "Morning"): ?>
                                        <option value="Morning" selected="">Morning</option>
                                    <?php else: ?>
                                        <option value="Morning">Morning</option>
                                    <?php endif ?>

                                    <?php if ($best_time === "Afternoon"): ?>
                                        <option value="Afternoon" selected="">Afternoon</option>
                                    <?php else: ?>
                                        <option value="Afternoon">Afternoon</option>
                                    <?php endif ?>

                                    <?php if ($best_time === "Evening"): ?>
                                        <option value="Evening" selected="">Evening</option>
                                    <?php else: ?>
                                        <option value="Evening">Evening</option>
                                    <?php endif ?>

                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos-duration="800" data-aos="zoom-in-left" data-aos-delay="200" class="form-row justify-content-end pt-3">
                <div class="col-3"><button class="btn btn-info btn-block" type="reset"> Reset Form</button></div>
                <div class="col-3"><input class="btn btn-success btn-block" type="submit" name="CustomerUpdate" value="Update Form"></div>
            </div>
        </form>
    </div>
<?php require_once 'require/footer_links.php'; ?>

<?php
}else header("Location: index.php");?>