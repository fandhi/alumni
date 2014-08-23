<?php
$page = "page0";
include 'inc_header.php';
?>
<section id="middle">
    <div class="container">
        <div class="row">
            <div id="profile_sett" class="col-lg-3">
                <div class="well">
                <a class="img" href="profile.php">
                    <img class="img-thumbnail" src="http://<?php echo $url ?>images/content/profile-1.jpg" alt="" />
                </a>
                <ul class="menu_profile list-group">
                    <li><a class="list-group-item" href="inbox.php">Inbox<span class="badge pull-right">42</span></a></li>
                    <li><a class="list-group-item" href="notifications.phpd">Notifications<span class="badge pull-right">18</span></a></li>
                    <li><a class="list-group-item" href="follower.php">Follower<span class="badge pull-right">4382</span></a></li>
                    <li><a class="list-group-item" href="follow.php">Follow<span class="badge pull-right">24</span></a></li>
                    <li><a class="list-group-item" href="group.php">Group</a></li>
                    <li><a class="list-group-item" href="http://<?php echo $url ?>settings.php">Settings</a></li>
                </ul>
                </div>
            </div>

        <!--end profile_sett-->
            <div id="newsFeed" class="col-lg-6">
                <div class="nf_title">News Feed</div>
                <div class="nf_list well">
                    <form class="form-horizontal" action="" method="" role="form">
                        <div class="row">
                            <div class="col-lg-12">
                        <textarea class="form-control" placeholder="Whats going on + REPLY"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="nf_list well"></div>
                <div class="nf_list well"></div>
                <div class="nf_list well"></div>
                <div class="nf_list well"></div>
            </div>
            <div id="ajax-status"></div>

        <!--end newsFeed-->
            <div id="trendPost" class="col-lg-3 omega">
                <form class="form-inline tp_search search" action="" method="" role="form">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Search" />
                    <input type="image" src="http://<?php echo $url ?>images/material/searchButton.png" />
                    </div>
                </form>
                <div class="trend_post panel panel-primary">
                    <div class="tp_title panel-heading">
                        <h3 class="panel-title">Trend Post</h3>
                    </div>
                    <div class="panel-body">
                        <div class="list_trend"></div>
                        <div class="list_trend"></div>
                        <div class="list_trend"></div>
                        <div class="list_trend"></div>
                    </div>
                    
                </div>
            </div><!--end trendPost-->
        </div><!--/ row -->
        
        <div class="row">
            <div id="sugest" class="col-lg-12">
                <ul class="mytabs" id="tabs">
                    <li class="current"><a href="people-you-may-know.php">People you may know</a></li>
                    <li><a href="promote.php">Promote your self</a></li>
                </ul>
                <div class="mytabs-container well" id="tabs-container">
                    Loading. Please Wait...
                </div>
            </div>
        </div>
    </div>
    <!--end wrapper_12-->
</section>
<!--end middle-->
<?php include 'inc_footer.php'; ?>