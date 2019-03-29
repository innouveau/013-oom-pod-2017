<?php get_header(); ?>





<?php
    if(have_posts()): while(have_posts()) : the_post();

        if (in_category('meeting')) {
            ?>

            <div id="top-bar">
                <?php include('php/elements/topbar.php'); ?>
            </div>

            <?php
            include ('php/singles/meeting.php');
        } else if (in_category('agenda')) {
            ?>

            <div id="top-bar" class="hamburger--black top-logos--black">
                <?php include('php/elements/topbar.php'); ?>
            </div>

            <?php
            include ('php/singles/agenda.php');
        }
    endwhile; endif;
?>


<?php get_footer(); ?>
