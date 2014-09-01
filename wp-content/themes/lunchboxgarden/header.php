<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php
        $coreTitle = "The Lunchbox Garden Project";
        $title = trim(wp_title("", false));
        echo $coreTitle . " - ";

        if ($title != "") {
            echo $title;
        } else {
            echo "Home";
        }
    ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="icon" sizes="16x16 32x32 64x64" href="/favicon.ico">
    <link rel="icon" type="image/png" sizes="196x196" href="/favicon-196.png">
    <link rel="icon" type="image/png" sizes="160x160" href="/favicon-160.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96.png">
    <link rel="icon" type="image/png" sizes="64x64" href="/favicon-64.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon-152.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon-144.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon-120.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon-114.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon-76.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon-72.png">
    <link rel="apple-touch-icon" href="/favicon-57.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="/favicon-144.png">
    <meta name="msapplication-config" content="/browserconfig.xml">
    <link href='http://fonts.googleapis.com/css?family=Amethysta|Crimson+Text' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?= get_stylesheet_uri() ?>" />
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.0.min.js"></script>
    <?php if(is_home()){ ?>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/responsiveslides.min.js"></script>
    <?php } ?>
    <script type="text/javascript">
    $(document).ready(function() {
    <?php if(is_home()){ ?>
        var $shortestImage,
            shortestImageRatio;

        var updateSlidesMaxHeight = function() {
            if ($shortestImage === undefined) {
                return;
            }

            $shortestImage.css("width", $(".rslides").css("width"));
            var newHeight = $shortestImage.width() * shortestImageRatio;

            $(".rslides, .rslides li").css("height", newHeight + "px");
        };

        var findShortestImage = function() {
            var smallestHeight = Math.pow(2, 32) - 1, // largest int possible
                $images = $(".rslides img");

            if ($images.length !== 0) {
                $images.each(function() {
                    if ($(this).height() < smallestHeight) {
                        smallestHeight = $(this).height();
                        $shortestImage = $(this);
                        shortestImageRatio = $shortestImage.height() / $shortestImage.width();
                    }
                });
            } else {
                $shortestImage = undefined;
            }
        };

        $(window).load(function() {
            findShortestImage();
            updateSlidesMaxHeight();
        });

        $(window).resize(function() {
            updateSlidesMaxHeight();
        });

        $("#slideshow").responsiveSlides({
            auto: false,
            pager: true,
            speed: 300,
            nav:true
        });
    <?php } ?>
        var navItem;

        switch (window.location.pathname) {
            case "/":
                navItem = 0;
                break;
            case "/about/":
                navItem = 1;
                break;
            case "/where-we-are/":
                navItem = 2;
                break;
            case "/get-involved/":
                navItem = 3;
                break;
        }

        $("nav ul li:eq(" + navItem + ")").addClass("active");

        $(".menu-button").click(function() {
            $(".navigation").toggleClass("rolledUp");
        });
    });
    </script>
    <?php wp_head(); ?>
</head>
<body ontouchstart="">
<div class="content">
    <h1><?= $coreTitle ?></h1>
    <div class="menu-button"></div>
    <div class="headerWrapper">
        <?php wp_nav_menu( array(
            "menu" => "Main Menu",
            "theme_location" => "primary",
            "container" => false,
            "menu_class" => "navigation rolledUp",
            "fallback_cb" => false,
            "menu_id" => "",
            "container" => "nav")
        );?>
        <ul class="social">
            <li><a href="https://www.facebook.com/TheLunchboxGardenProject" title="Facebook" class="facebook">Facebook</a></li>
            <li><a href="https://www.twitter.com/LunchboxGarden" title="Twitter" class="twitter">Twitter</a></li>
            <li><a href="http://www.instagram.com/lunchboxgarden" title="Instagram" class="instagram">Instagram</a></li>
        </ul>
        <div class="banner"
        style= "background-image: url(<?php
            $url = get_field('banner_photo', get_the_ID());
            if ($url != '') {
                echo $url;
            } else {
                $args = array('post_type' => 'home_page_banner');
                $loop = new WP_Query($args);
                while ($loop->have_posts()) : $loop->the_post();
                    echo get_field('banner_photo');
                endwhile;
            }
        ?>);
        background-repeat: no-repeat;
        background-position: center;
        background-size: auto 100%;"
        >
        </div>
    </div>