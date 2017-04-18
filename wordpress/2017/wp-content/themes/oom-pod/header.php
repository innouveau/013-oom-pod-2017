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
                    <div id="menu" class="grid-50 grid-left grid-col">
                        <div id="hamburger">
                            <div class="burger"></div>
                            <div class="burger"></div>
                            <div class="burger"></div>
                            <?php
                        $defaults = array(
                            'theme_location'  => 'main',
                            'menu'            => 'hamburger',
                            'container'       => 'div',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => '',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '<div>',
                            'link_after'      => '</div>',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => ''
                            );
                            wp_nav_menu( $defaults );
                            ?>
                        </div>

                    </div>

                    <div id="top-logos" class="grid-50 grid-right grid-col">
                        <?php getLogos(); ?>
                    </div>
                </div>
            </div>
        </div>