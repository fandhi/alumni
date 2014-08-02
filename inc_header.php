<?php
$url = $_SERVER['SERVER_NAME'] . "/alumni/";

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keyword" content=""/>
        <meta name="description" content=""/>
        <meta name="google-site-verification" content=""/>
        <meta name="robots" content="all,index,follow"/>
        <meta name="googlebot" content="all,index,follow"/>
        <meta name="allow-search" content="yes"/>
        <meta name="revisit-after" content="3 days" />
        <meta name="copyright" content=""/>
        <meta name="author" content=""/>
        <meta name="distribution" content="global"/>
        <title>Alumni</title>
        <link rel="stylesheet" type="text/css" href="http://<?php echo $url ?>css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="http://<?php echo $url ?>css/reset.css">	
        <link rel="stylesheet" type="text/css" href="http://<?php echo $url ?>css/style.css"/>
    </head>
    <body>
        <section id="container">
            <header id="header"class="navbar navbar-inverse">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".header_bottom">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Brand</a>
                    </div>
                    <div class="header_top"></div>
                    <div class="collapse navbar-collapse header_bottom">
                        <?php if($page == "page1") {echo '
                            <ul id="profileMenu" class="nav navbar-nav">
                                <li><a href="http://'.$url.'">Home</a></li>
                                <li><a href="http://'.$url.'">Profile</a></li>
                                <li><a href="http://'.$url.'">Alumni Networks</a></li>
                                <li><a href="http://'.$url.'">Post</a></li>
                                <li><a href="http://'.$url.'">Groups</a></li>
                                <li><a href="http://'.$url.'">Promotions Area</a></li>
                            </ul>
                            <!--end profileMenu-->
                            <form class="hm_search search navbar-form navbar-left" action="" method="" role="search">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Search" />
                                    <input type="image" src="http://'.$url.'images/material/searchButton.png" />
                                </div>
                            </form>';}
                        ?>
                    </div>
                </div>
                
            </header>
    
