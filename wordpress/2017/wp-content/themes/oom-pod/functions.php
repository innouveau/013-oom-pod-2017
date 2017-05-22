<?php
include('php/meeting-cms.php');

update_option('siteurl', 'http://praktijkopleidersdagen.azurewebsites.net' );
update_option('home', 'http://praktijkopleidersdagen.azurewebsites.net' );


add_theme_support('post-thumbnails');

register_nav_menu( 'main_nav', 'Main navigation');
