<?php
    require 'php/svgLogos.php';
    require 'php/uiElements.php';
    require 'php/page-ids.php';
?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>
    <!--<![endif]-->
    <head>
    <script>console.log("start: " + new Date())</script>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktijk Opleiders Dagen 2019-2020</title>

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/fonts/frutiger.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>?v=5" media="screen" />


    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!-- assets -->
    <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js" integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP" crossorigin="anonymous"></script>

    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/assets/jquery.js"></script>

    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>


        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>