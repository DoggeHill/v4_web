<!DOCTYPE html>
<html lang="en" style="margin-top:0 !important;">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Samuel Slávik, Patrik Hyll">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>V4 Web App</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous">
    </script>
    <?php //wp_head(); ?>
</head>
<body>
    <!-- ---------------------- NAVIGATION ________________________________________-->
    <div class="video-wrapper">
        <div class="navigation">
            <nav class="navbar">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class=" navProfile">
                            <div class="displayFlex">
                                <a href="#"><img class="navProfileImg" alt="" src="https://hackernoon.com/hn-images/1*EntHChgUyirgbZ9A3zTxkA.png" /></a>
                                <div class="navProfileText">
                                    <a href="#">Samuel Slavik </a><br />
                                    <a class="logOut" href="#">Log out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-collapse">
                       <?php
$defaults = array(
    'menu' => '',
    'container' => 'ul',
    'container_class' => 'menu',
    'container_id' => '',
    'menu_class' => 'nav navbar-nav',
    'menu_id' => '',
    'echo' => true,
    'fallback_cb' => 'wp_page_menu',
    'before' => '',
    'after' => '',
    'link_before' => '',
    'link_after' => '',
    'items_wrap' => '<ul id="%1$s" class="nav navbar-nav">%3$s</ul>',
    'item_spacing' => 'preserve',
    'depth' => 0,
    'walker' => '',
    'theme_location' => 'menu',
);
?>
                        <?php wp_nav_menu($defaults);?>
                            <!-- tu nemôže byť li toto musí byť niečo iné
                        !  -->
                            <div class="screenDisplay navProfile">
                                <div class="displayFlex">
                                    <a href="#"><img class="navProfileImg" alt="" src="https://hackernoon.com/hn-images/1*EntHChgUyirgbZ9A3zTxkA.png" /></a>
                                    <div class="navProfileText">
                                        <a href="#">Samuel Slavik </a><br />
                                        <a class="logOut" href="#">Log out</a>
                                    </div>
                                </div>
                            </div>

                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </div>