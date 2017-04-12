<?php
    require 'php/svgLogos.php';
?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>
    <!--<![endif]-->
    <head>
    <script>console.log("start: " + new Date())</script>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Praktijk Opleiders Dagen 2017</title>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />


    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!-- assets -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/assets/jquery.js"></script>

    <!-- models -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

    <!--<style>-->
        <!--@font-face {-->
            <!--font-family: 'Frutiger';-->
            <!--font-weight: 700;-->
            <!--src: url('<?php echo get_template_directory_uri(); ?>/fonts/FrutiBol');-->
        <!--}-->

        <!--@font-face {-->
            <!--font-family: 'Frutiger';-->
            <!--font-weight: 900;-->
            <!--src: url('<?php echo get_template_directory_uri(); ?>/fonts/FrutiBla');-->
        <!--}-->
    <!--</style>-->


        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

        <div id="top-bar">
            <div class="pagewrap">
                <div class="grid-row">
                    <div id="menu" class="grid-50 grid-left grid-col">
                        <a id="hamburger" href="<?php echo get_bloginfo('home'); ?>">
                            <div class="burger"></div>
                            <div class="burger"></div>
                            <div class="burger"></div>
                        </a>
                    </div>

                    <div id="top-logos" class="grid-50 grid-right grid-col">
                        <?php getLogos(); ?>
                    </div>
                </div>
            </div>
        </div>