  <?php ?>
   

    <!--- Event Code Modal---->
    <div class="modal fade" role="dialog" tabindex="-1" id="update">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Enter Your Event Code</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body"><?php require_once 'require/admin_login_processing.php';    ?>
                    <form action="require/admin_login_processing.php" method="POST">
                        <input class="border rounded" type="text" id="code" name="code" placeholder="Event Code" required minlength="11" maxlength="11">
                        <button class="btn btn-success m-1" type="submit" name="verify">Verify Code</button></div>
                    </form>           
            </div>
        </div>
    </div>

<!--- Admin form update modal---->
    
    <div class="modal fade" role="dialog" tabindex="-1" id="mod">

        <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="text-center">EVENT UPDATE FORM</h3><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <div class="">
                        <form>
                            <div class="form-row">
                                <div class="col-8 d-inline">
                                    <div class="form-group"><label for="from-name">Name</label><span class="required-input">*</span>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div><input class="form-control" type="text" id="Fname" value="love" name="fname" required="" placeholder="First Name" maxlength="30"><input class="form-control" type="text" id="Mname" name="mname" required="" placeholder="Middle Name"
                                                maxlength="30"><input class="form-control" type="text" id="Lname" name="lname" required="" placeholder="Last Name" maxlength="30"></div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group"><label for="from-calltime">Event</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div><select class="custom-select" id="from-calltime" name="call time"><optgroup label="What type of event do you wish to organize?"><option value="Wedding" selected="">Wedding</option><option value="Conference">Conference</option><option value="Meeting">Meeting</option><option value="Sports">Sports</option><option value="Reunion">Reunion</option><option value="Celebrations">Celebrations</option><option value="Funeral">Funeral</option></optgroup></select></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-auto">
                                    <div class="form-group"><label for="from-name">Number of guests</label><span class="required-input">*</span>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div><input class="form-control" type="text" id="numGuest" name="numGuest" required="" placeholder="Expected Guests" maxlength="4"></div>
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
                                <div class="col-auto">
                                    <div class="form-group"><label class="from-name">Date Of Event</label><span class="required-input">*</span><input class="form-control" type="date" required="" name="deData"></div>
                                </div>
                                <div class="col-auto">
                                    <div class="form-group"><label class="from-name">TIme Of Event</label><span class="required-input">*</span><input class="form-control" type="time" required="" name="deTime"></div>
                                </div>
                                <div class="col-auto">
                                    <div class="form-group"><label for="from-calltime">Venue</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div><select class="custom-select visible" id="from-calltime" name="size" required=""><option value="Classroom">Classroom (2 to 70)</option><option value="Boluwatife Hall">Boluwatife Hall (70 to 100)</option><option value="Women Center">Women Center (100 to 200)</option><option value="Columbia Hall">Columbia Hall (200 to 500)</option><option value="Park">Park ( 500 - 700)</option><option value="Seth Laryea Multipurpose center">Seth Laryea Multipurpose center (700 to 1000)</option></select></div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group"><label for="from-comments">Describe the event</label><textarea class="form-control" id="from-comments" name="comments" placeholder="Enter Description" rows="8" spellcheck="true" wrap="soft"></textarea></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-4 col-sm-6 col-md-12 col-lg-6">
                                    <div class="form-group"><label for="from-phone">Phone</label><span class="required-input">*</span>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div><input class="form-control" type="text" id="from-phone" name="phone" required="" placeholder="Primary Phone"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-12 col-lg-6">
                                    <div class="form-group"><label for="from-calltime">Best Time to Call</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"></div><select class="custom-select" id="from-calltime" name="call time"><optgroup label="Best Time to Call"><option value="Morning" selected="">Morning</option><option value="Afternoon">Afternoon</option><option value="Evening">Evening</option></optgroup></select></div>
                                    </div>
                                </div>
                                <div class="col"><input class="form-control" type="email" placeholder="Email" name="email"></div>
                            </div>
                            <div class="form-row justify-content-end pt-3">
                                <div class="col-3"><button class="btn btn-info btn-block" type="reset"> Reset Form</button></div>
                                <div class="col-3"><button class="btn btn-success btn-block" type="submit">Update Form</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
