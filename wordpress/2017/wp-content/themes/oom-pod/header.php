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

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">


    <!-- assets -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/assets/jquery.js"></script>

    <!-- models -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

    <!-- google maps -->
    <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwtBMZCa2IYtCuY6pqpupaO2igtDAa-rQ&callback=initMap">
    </script>


        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

        <div id="top-bar">
            <div class="pagewrap">
                <div id="menu" class="grid-50 grid-left grid-col">
                    <div id="hamburger">
                        <div class="burger"></div>
                        <div class="burger"></div>
                        <div class="burger"></div>
                    </div>
                </div>

                <div id="top-logos" class="grid-50 grid-right grid-col">

                </div>
            </div>
        </div>

        <div id="page-top">
            <div id="page-top-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/placeholder-header.jpg);"></div>


            <div id="page-top-content">




                    <div id="pod-identity-container" class="grid-row">
                        <div class="grid-50 grid-right grid-col">&nbsp;</div>

                        <div id="pod-identity" class="grid-50 grid-right grid-col">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/pod-logo-2017.svg">
                            <div id="pod-identity-side-text">
                                Voor praktijkopleiders en begeleiders metaal,
                                installatie-, koude- en electrotechniek
                            </div>
                        </div>
                    </div>

                    <div id="meeting-header" class="grid-row">
                        <div id="meeting-header-date" class="grid-50 grid-left grid-col">
                            29 juni
                        </div>
                        <div id="meeting-header-location" class="grid-50 grid-right grid-col">
                            Complex Willemsoord<br>
                            Den Helder
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end of page top -->