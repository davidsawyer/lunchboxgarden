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
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    <?php wp_head(); ?>
</head>
<body>
<div class="content">
    <h1><?= $coreTitle ?></h1>
    <?php wp_nav_menu( array(
        "menu" => "Main Menu",
        "theme_location" => "primary",
        "container" => false,
        "menu_class" => "navigation rolledUp",
        "fallback_cb" => false,
        "menu_id" => "",
        container => "nav")
    );?>
    <ul class="social">
        <li><a href="https://www.facebook.com/TheLunchboxGardenProject" title="Facebook" class="facebook">Facebook</a></li>
        <li><a href="https://www.twitter.com/LunchboxGarden" title="Twitter" class="twitter">Twitter</a></li>
        <li><a href="http://www.instagram.com/lunchboxgarden" title="Instagram" class="instagram">Instagram</a></li>
    </ul>