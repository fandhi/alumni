<?php
$page = "profile-setting";
include 'inc_header.php';
?>
<section id="middle">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-3 col-lg-3">
                <?php include 'inc_side-menu-settings.php';?>
            </div>
            <div class="col-sm-12 col-md-9 col-lg-9">
                <div class="row well">
                    <div class="col-sm-4 col-md-4 col-lg-3 relative">
                        <div id="cropContainerModal">
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-8 col-lg-9">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-lg-4">Full Name</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-4">Nick Name</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-4">Date Of Birth</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text">
                                    <fieldset>
                                        <legend>UIN Group Class Information</legend>
                                        <div class="form-group">
                                            <label class="control-label col-lg-5">Majority</label>
                                            <div class="col-lg-5">
                                                <select class="form-control">
                                                    <option value="aaa">aaa</option>
                                                    <option value="aaa">bbb</option>
                                                    <option value="aaa">ccc</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-5">Start Year</label>
                                            <div class="col-lg-5">
                                                <select class="form-control">
                                                    <option value="aaa">aaa</option>
                                                    <option value="aaa">bbb</option>
                                                    <option value="aaa">ccc</option>
                                                </select>
                                            </div>
                                        </div>
                                        <a class="pull-right" href="">Add more uin class</a>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-4">Status</label>
                                <div class="col-lg-8">
                                    <label class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Single
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Married
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-4">Phone Number</label>
                                <div id="InputsWrapper" class="col-lg-8">
                                    <input id="phone-no_1" class="form-control append-bottom-1" type="text">
                                    <a id="AddMoreFileBox" class="btn-add glyphicon glyphicon-plus-sign" href="">&nbsp;</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-4">Address</label>
                                <div class="col-lg-8">
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-4">Educational</label>
                                <div class="col-lg-8">
                                    <div class="row append-bottom-1">
                                        <div class="col-lg-4">School *</div>
                                        <div class="col-lg-8"><input class="form-control" type="text"></div>
                                    </div>
                                    <div class="row append-bottom-1">
                                        <div class="col-lg-4">Dates Attended</div>
                                        <div class="col-lg-8">
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <select class="form-control ">
                                                        <option value="aaa">aaa</option>
                                                        <option value="aaa">bbb</option>
                                                        <option value="aaa">ccc</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-5">
                                                    <select class="form-control ">
                                                        <option value="aaa">aaa</option>
                                                        <option value="aaa">bbb</option>
                                                        <option value="aaa">ccc</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row append-bottom-1">
                                        <div class="col-lg-4">Degree</div>
                                        <div class="col-lg-8"><input class="form-control" type="text"></div>
                                    </div>
                                    <div class="row append-bottom-1">
                                        <div class="col-lg-4">Field of study</div>
                                        <div class="col-lg-8"><input class="form-control" type="text"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-4">Experience</label>
                                <div class="col-lg-8">
                                    <div class="row append-bottom-1">
                                        <div class="col-lg-4">Company Name *</div>
                                        <div class="col-lg-8"><input class="form-control" type="text"></div>
                                    </div>
                                    <div class="row append-bottom-1">
                                        <div class="col-lg-4">Title *</div>
                                        <div class="col-lg-8"><input class="form-control" type="text"></div>
                                    </div>
                                    <div class="row append-bottom-1">
                                        <div class="col-lg-4">Location</div>
                                        <div class="col-lg-8"><input class="form-control" type="text"></div>
                                    </div>
                                    <div class="row append-bottom-1">
                                        <div class="col-lg-4">Time Period</div>
                                        <div class="col-lg-8">
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <select class="form-control ">
                                                        <option value="aaa">aaa</option>
                                                        <option value="aaa">bbb</option>
                                                        <option value="aaa">ccc</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-5">
                                                    <select class="form-control ">
                                                        <option value="aaa">aaa</option>
                                                        <option value="aaa">bbb</option>
                                                        <option value="aaa">ccc</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-4">Biography</label>
                                <div class="col-lg-8">
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-4">Social Media</label>
                                <div class="col-lg-8 icon-social-input">
                                    <div class="relative">
                                        <input class="form-control append-bottom-1" type="url" placeholder="Enter URL of your personal site">
                                        <label class="typcn typcn-user"></label>
                                    </div>
                                    <div class="relative">
                                        <input class="form-control  append-bottom-1" type="url" placeholder="Enter URL of your Facebook profile">
                                        <label class="typcn typcn-social-facebook"></label>
                                    </div>
                                    <div class="relative">
                                        <input class="form-control append-bottom-1" type="url" placeholder="Enter URL of your Twitter">
                                        <label class="typcn typcn-social-twitter"></label>
                                    </div>
                                    <div class="relative">
                                        <input class="form-control append-bottom-1" type="url" placeholder="Enter URL of your Linkedin">
                                        <label class="typcn typcn-social-linkedin"></label>
                                    </div>
                                    <div class="relative">
                                        <input class="form-control append-bottom-1" type="url" placeholder="Enter URL of your Youtube channel">
                                        <label class="typcn typcn-social-youtube"></label>
                                    </div>
                                    <div class="relative">
                                        <input class="form-control append-bottom-1" type="url" placeholder="Enter URL of your Google Plus">
                                        <label class="typcn typcn-social-google-plus"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary pull-right append-right-2" type="submit" value="Save">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/middle-->
<?php include 'inc_footer.php'; ?>