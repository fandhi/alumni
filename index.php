<?php
$page = "page0";
include 'inc_header.php';
?>
<section id="middle">
    <div class="wrapper_12">
        <div id="profile_sett" class="grid_3">
            <a class="img" href="profile.php">
                <img src="http://<?php echo $url ?>images/content/profile-1.jpg" alt="" />
            </a>
            <ul class="menu_profile">
                <li><a href="inbox.php">Inbox</a></li>
                <li><a href="notifications.phpd">Notifications</a></li>
                <li><a href="follower.php">Follower</a></li>
                <li><a href="follow.php">Follow</a></li>
                <li><a href="group.php">Group</a></li>
                <li><a href="http://<?php echo $url ?>settings.php">Settings</a></li>
            </ul>
        </div>
        <!--end profile_sett-->
        <div id="newsFeed" class="grid_5">
            <div class="nf_title">News Feed</div>
            <div class="nf_list">
                <form action="" method="">
                    <textarea placeholder="Whats going on + REPLY"></textarea>
                </form>
            </div>
            <div class="nf_list"></div>
            <div class="nf_list"></div>
            <div class="nf_list"></div>
            <div class="nf_list"></div>
        </div>
        <div id="ajax-status"></div>
        <!--end newsFeed-->
        <div id="trendPost" class="grid_4 omega">
            <form class="tp_search search" action="" method="">
                <input type="text" placeholder="Search" />
                <input type="image" src="http://<?php echo $url ?>images/material/searchButton.png" />
            </form>
            <div class="trend_post">
                <div class="tp_title">Trend Post</div>
                <div class="list_trend"></div>
                <div class="list_trend"></div>
                <div class="list_trend"></div>
                <div class="list_trend"></div>
            </div>
        </div>
        <!--end trendPost-->

        <div id="sugest">
            <ul class="mytabs" id="tabs">
                <li class="current"><a href="people-you-may-know.php">People you may know</a></li>
                <li><a href="promote.php">Promote your self</a></li>
            </ul>
            <div class="mytabs-container" id="tabs-container">
                Loading. Please Wait...
            </div>
        </div>
    </div>
    <!--end wrapper_12-->
</section>
<!--end middle-->
<?php include 'inc_footer.php'; ?>
