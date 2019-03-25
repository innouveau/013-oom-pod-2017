<?php
    get_header();

    if(have_posts()): while(have_posts()) : the_post();

        if (in_category('bijeenkomst')) {
            include ('php/singles/meeting.php');
        } else if (in_category('agenda')) {
            include ('php/singles/agenda.php');
        }
    endwhile; endif; ?>


<?php get_footer(); ?>
