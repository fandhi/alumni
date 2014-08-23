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
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <a href="">
                            <img class="img-thumbnail" src="images/content/profile-1.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-sm-8 col-md-8 col-lg-8">
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
                                            <label class="control-label col-lg-5">Nick Name</label>
                                            <div class="col-lg-5">
                                                <select class="form-control">
                                                    <option value="aaa">aaa</option>
                                                    <option value="aaa">bbb</option>
                                                    <option value="aaa">ccc</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-5">Nick Name</label>
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
                                <div class="col-lg-8">
                                    <input class="form-control" type="text">
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
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-4">Experience</label>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text">
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
                                <div class="col-lg-8">
                                    <input class="form-control append-bottom-1" type="text" placeholder="Enter URL of your personal site">
                                    <input class="form-control append-bottom-1" type="text" placeholder="Enter URL of your facebook profile">
                                    <input class="form-control append-bottom-1" type="text" placeholder="Enter URL of your ">
                                    <input class="form-control append-bottom-1" type="text" placeholder="Enter URL of your ">
                                    <input class="form-control append-bottom-1" type="text" placeholder="Enter URL of your ">
                                    <input class="form-control append-bottom-1" type="text" placeholder="Enter URL of your ">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/middle-->
<?php include 'inc_footer.php'; ?>