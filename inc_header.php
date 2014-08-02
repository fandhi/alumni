<?php
$url = $_SERVER['SERVER_NAME'] . "/alumni/";

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
        <link rel="stylesheet" type="text/css" href="http://<?php echo $url ?>css/reset.css">	
        <link rel="stylesheet" type="text/css" href="http://<?php echo $url ?>css/style.css"/>
    </head>
    <body>
        <section id="container">
            <header id="header"class="">
                <div class="header_top wrapper_12"></div>
                <div class="header_bottom wrapper_12">
                    <?php if($page == "page1") {echo '
                        <ul id="profileMenu">
                            <li><a href="http://'.$url.'">Home</a></li>
                            <li><a href="http://'.$url.'">Profile</a></li>
                            <li><a href="http://'.$url.'">Alumni Networks</a></li>
                            <li><a href="http://'.$url.'">Post</a></li>
                            <li><a href="http://'.$url.'">Groups</a></li>
                            <li><a href="http://'.$url.'">Promotions Area</a></li>
                        </ul>
                        <!--end profileMenu-->
                        <form class="hm_search search" action="" method="">
                            <input type="text" placeholder="Search" />
                            <input type="image" src="http://'.$url.'images/material/searchButton.png" />
                        </form>';}
                    ?>
                </div>
            </header>
    
