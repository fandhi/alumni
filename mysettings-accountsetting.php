<?php

$page = "page1";
include 'inc_header.php';
?>
<section id="middle">
    <div class="col-md-3">
        <ul class="menu-settings">
            <li><a class="" href="">Cras justo odio</a>
                <ul class="">
                    <li><a class="" href="">Dapibus ac facilisis in</a></li>
                    <li><a class="" href="">Morbi leo risus</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="col-md-8 well">
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
</section>
<?php include 'inc_footer.php'; ?>