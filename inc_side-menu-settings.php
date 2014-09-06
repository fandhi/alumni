<div class="menu-settings panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title" href="#collapseSettings" data-toggle="collapse">My Settings</h5>
        </div>
        <div id="collapseSettings" class="panel-collapse collapse in">
            <div class="panel-body">
                <ul class="list-group ">
                    <li><a class="list-group-item <?php if ($page == "profile-setting") echo 'active'; ?>" href="<?php echo $url ?>mysettings-profilesetting.php">Profile Setting</a></li>
                    <li><a class="list-group-item <?php if ($page == "account-setting") echo 'active'; ?>" href="<?php echo $url ?>mysettings-accountsetting.php">Account Setting</a></li>
                </ul>
            </div>
        </div>
</div>
