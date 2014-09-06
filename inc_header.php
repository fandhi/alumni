<?php
$url = "http://".$_SERVER['SERVER_NAME'] . "/alumni/";

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keyword" content="">
        <meta name="description" content="">
        <meta name="google-site-verification" content="">
        <meta name="robots" content="all,index,follow">
        <meta name="googlebot" content="all,index,follow">
        <meta name="allow-search" content="yes">
        <meta name="revisit-after" content="3 days" >
        <meta name="copyright" content="">
        <meta name="author" content="">
        <meta name="distribution" content="global">
        <?php if($page === "register-success") {echo '<meta http-equiv="refresh" content="1;URL='.$url.'home.php">' ;}?>
        <title>Alumni</title>
        <link rel="stylesheet" type="text/css" href="<?php echo $url ?>css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $url ?>css/style-themes.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $url ?>css/green-theme.css">	
        <link rel="stylesheet" type="text/css" href="<?php echo $url ?>css/style.css"/>
    </head>
    <body class="green-theme">
        <section id="container">
            <header id="header"class="navbar navbar-inverse navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".header_bottom">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="./">Uiners</a>
                    </div>
                    <div class="header_top"></div>
                    <div class="collapse navbar-collapse header_bottom">
                            <ul id="profileMenu" class="nav navbar-nav">
                                <li <?php if($page == "home") echo 'class="open"';?>><a href="<?php echo $url;?>home.php">Home</a></li>
                                <li <?php if($page == "profile") echo 'class="open"';?>><a href="<?php echo $url;?>profile.php">Profile</a></li>
                                <li <?php if($page == "groups") echo 'class="open"';?>><a href="<?php echo $url;?>">Groups</a></li>
                                <li <?php if($page == "forums") echo 'class="open"';?>><a href="<?php echo $url;?>">Forums</a></li>
                                <li <?php if($page == "networks") echo 'class="open"';?>><a href="<?php echo $url;?>">Alumni Networks</a></li>
                            </ul>
                            <!--end profileMenu-->
                            <ul id="profileMenu" class="nav navbar-nav navbar-right">
                                <?php if($page == "index" || $page == "register") echo '<li><a href="'.$url.'log-in.php">Log In</a></li>';?>
                                <?php if($page == "index") echo '<li><a href="'.$url.'register.php">Register</a></li>';?>
                                <?php if($page == "home"|| $page == "profile") echo '<li><a href="'.$url.'profile.php">Nama User yang panjang</a></li>
                                    <li><a href="'.$url.'">Log Out</a></li>';?>
                            </ul>
                            <form class="hm_search search navbar-form navbar-right" action="" method="" role="search">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Find name, groups, forums" />
                                    <span class="glyphicon glyphicon-search"></span>
                                </div>
                            </form>
                    </div>
                </div>
                
            </header>
    
