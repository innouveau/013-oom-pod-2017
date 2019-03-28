<?php
/*
 * 	Template Name: Test
 */?>

 <?php
    get_header();
    if(have_posts()): while(have_posts()) : the_post();
        $post_id = $post->ID;
endwhile; endif
?>

<div id="page-top">
    <div id="page-top-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/patterns/pod-pattern-home.png);"></div>


    <div id="page-top-content">
        <div class="pagewrap">
            <div id="pod-identity-container" class="grid-row">
                <div class="grid-60">
                    <div class="home-intro__video">
                        <iframe src="https://player.vimeo.com/video/277406487" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                    <div id="home-intro">
                        <?php the_content(); ?>
                    </div>
                </div>

                <div id="pod-identity" class="grid-40">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/identity/pod-logo-2018-black.svg">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of page top -->


<div id="page-body">

    <div class="module">
         <div class="pagewrap">
            <div class="module-header">
                <h3>
                    Agenda
                </h3>
            </div>

            <div class="module-content">
                <div class="grid-row">
                    <?php include('php/elements/calendar.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="module">
         <div class="pagewrap">
            <div class="module-header">
                <h3>
                    Sponsors
                </h3>
            </div>

            <div class="module-content">
                <div class="grid-row">
                    <?php include('php/elements/sponsors.php'); ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>
