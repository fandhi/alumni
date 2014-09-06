<?php
$page = "home";
include 'inc_header.php';
?>
<section id="middle">
    <div class="container">
        <div class="row">
            <div id="profile_sett" class="col-sm-4 col-md-3 col-lg-2">
                <div class="well">
                    <div class="col-xs-4 col-sm-12 prefix-0 pasfix-0">
                    <a class="img" href="profile.php">
                        <img src="<?php echo $url ?>images/content/profile-1.jpg" data-src="<?php echo $url ?>js/holder.js/100%x125" alt="100%x125" />
                    </a>
                    </div>
                    <div class="col-xs-8 col-sm-12 prefix-0 pasfix-0">
                    <ul class="menu_profile list-group">
                        <li><a class="list-group-item ajax-menu" href="inbox.php">My Message<span class="badge">42</span></a></li>
                        <li><a class="list-group-item ajax-menu" href="notifications.php">My Notifications<span class="badge">18</span></a></li>
                        <li><a class="list-group-item" href="<?php echo $url ?>mysettings-profilesetting.php">My Settings</a></li>
                    </ul>
                    </div>
                </div>
            </div>

            <!--end profile_sett-->
            <div id="newsFeed" class="col-sm-8 col-md-6 col-lg-7">
                <div class="nf_title">News Feed</div>
                <div class="nf_list well">
                    <form class="form-horizontal" action="" method="" role="form">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <textarea class="form-control" placeholder="Whats going on + REPLY"></textarea>
                                <div class="">
                                    <input class="btn btn-primary pull-right append-top-1" type="submit" value="Post">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <ul id="mediaUpdates" class="media-list">
                    <li class="media well">
                        <a class="pull-left" href="#">
                            <img class="media-object img-rounded" data-src="holder.js/64x64" alt="64x64" src="images/content/person-2.jpg">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="">User 1</a></h4>
                            <span class="date-update">25 Agustus 2014</span>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                        </div>
                    </li>
                    <li class="media well">
                        <a class="pull-left" href="#">
                            <img class="media-object img-rounded" data-src="holder.js/64x64" alt="64x64" src="images/content/person-1.jpg">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="">User 2</a></h4>
                            <span class="date-update">25 Agustus 2014</span>
                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                        </div>
                    </li>
                    <li class="media well">
                        <a class="pull-left" href="#">
                            <img class="media-object img-rounded" data-src="holder.js/64x64" alt="64x64" src="images/content/profile-1.jpg">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="">User 3</a></h4>
                            <span class="date-update">25 Agustus 2014</span>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                        </div>
                    </li>
                </ul>
            </div>
            <div id="ajax-status"></div>

            <!--end newsFeed-->
            <div id="trendPost" class="col-sm-12 col-md-3 col-lg-3 omega">
                <div class="trend_post panel panel-primary">
                    <div class="tp_title panel-heading">
                        <h3 class="panel-title">Trend Post</h3>
                    </div>
                    <div class="panel-body">
                        <div class="list_trend">
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                        </div>
                        <div class="list_trend">
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                        </div>
                        <div class="list_trend">
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.
                        </div>
                        <div class="list_trend">
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                        </div>
                        <button class="btn btn-primary" type="button">Load More</button>
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
    <!--end container-->
</section>
<!--end middle-->
<?php include 'inc_footer.php'; ?>
