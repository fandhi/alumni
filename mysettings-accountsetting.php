<?php
$page = "account-setting";
include 'inc_header.php';
?>
<section id="middle">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-3 col-lg-3">
                <?php include 'inc_side-menu-settings.php'; ?>
            </div>
            <div class="col-sm-12 col-md-9 col-lg-9 well">
                <dl class="dl-horizontal">
                    <dt>Username</dt>
                    <dd>abc123</dd>
                    <dt>Email</dt>
                    <dd>abc123</dd>
                    <dt>Password</dt>
                    <dd><a href="">change password</a></dd>
                </dl>
                <fieldset>
                    <legend>Info Privacy Settings</legend>
                    <form class="form-horizontal" method="" action="" role="form">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Show my birthday
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Show All My Post
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Indeterminate
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" disabled> Disabled
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" checked disabled> Disabled Selected
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="indeterminate" type="checkbox" disabled> Disabled Indeterminate
                            </label>
                        </div>
                        <p>&nbsp;</p>
                    </form>
                </fieldset>

                <fieldset>
                    <legend>Email Alert Settings</legend>
                    <form class="form-horizontal" method="" action="" role="form">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Friend Request
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Post From Friends
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Post Of Me
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" disabled> Comments
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" checked disabled> Disabled Selected
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="indeterminate" type="checkbox" disabled> Disabled Indeterminate
                            </label>
                        </div>
                        <p>&nbsp;</p>
                    </form>
                </fieldset>
            </div>
        </div>
    </div>
</section>
<?php include 'inc_footer.php'; ?>