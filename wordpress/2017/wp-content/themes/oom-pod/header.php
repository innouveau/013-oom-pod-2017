<?php
    require 'php/svgLogos.php';
    require 'php/uiElements.php';
?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>
    <!--<![endif]-->
    <head>
    <script>console.log("start: " + new Date())</script>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Praktijk Opleiders Dagen 2017</title>

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/fonts/frutiger.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />


    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!-- assets -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/assets/jquery.js"></script>

    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>


        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

        <div id="top-bar">
            <div class="pagewrap">
                <div class="grid-row">
                    <div id="menu" class="grid-50">
                        <div id="hamburger">
                            <div class="burger"></div>
                            <div class="burger"></div>
                            <div class="burger"></div>
                        </div>

                        <a href="<?php echo get_bloginfo('home'); ?>" id="home-button">
                            <div class="home-button-arrow"></div>
                            <div class="home-button-label">
                                home
                            </div>
                        </a>
                    </div>

                    <div id="hamburger-content">
                        <ul>
                            <li>
                                <a href="<?php echo get_bloginfo('home'); ?>">
                                    <span class="menu-date">overzicht</span>
                                    <span class="menu-location">Home</span>
                                </a>
                            </li>
                            <?php getMenu(); ?>
                        </ul>

                        <div id="hamburger-close">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/lightbox/close.svg">
                        </div>
                    </div>



                    <div id="top-logos" class="grid-50">
                        <?php getLogos(); ?>
                    </div>
                </div>
            </div>
        </div>