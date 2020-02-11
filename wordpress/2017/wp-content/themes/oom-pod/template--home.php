<?php
/*
 * 	Template Name: Home
 */?>

 <?php get_header(); ?>

 <div id="top-bar">
     <?php include('php/elements/topbar.php'); ?>
 </div>


 <?php
    if(have_posts()): while(have_posts()) : the_post();
        $post_id = $post->ID;
    endwhile;
    endif
?>

<div id="page-top">
    <div id="page-top-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/patterns/pod-pattern-home.png);"></div>


    <div id="page-top-content">
        <div class="pagewrap">
            <div id="pod-identity-container" class="grid-row">
                <div class="grid-60">
                    <div class="home-intro__video">
                        <iframe src="https://player.vimeo.com/video/389940673" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                    <div id="home-intro">
                        <?php the_content(); ?>
                    </div>
                </div>

                <div id="pod-identity" class="grid-40">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/identity/pod-logo-black.svg">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of page top -->


<div id="page-body">
    <div class="pagewrap">

        <div class="module-header">
            <h3>
                bijeenkomsten in 2020
            </h3>
        </div>

        <div id="home-meeting-container">
            <?php include('php/elements/home-meetings.php'); ?>
        </div>
    </div>

    <div class="module">
        <div class="pagewrap">
            <div class="module-header">
                <h3>
                    organisatie
                </h3>
            </div>
        </div>

        <div class="pagewrap">
            <div class="module-content">
                <div class="grid-row">
                    <div class="grid-50">
                        <div class="module-intro">
                            Door wie zijn deze dagen mogelijk gemaakt?
                        </div>
                    </div>
                    <div class="grid-50">
                        <p>
                            <b>Omdat goede praktijkopleiders voor goed opgeleide leerlingen zorgen.</b>
                            Daarom organiseren de technische opleidingsfondsen
                            A+O-Metalektro, OOM en OTIB gezamenlijk praktijkopleidersdagen.
                            Het doel van deze dagen is om praktijkopleiders te informeren
                            en te inspireren, maar vooral ook om praktijkopleiders ervaringen
                            met elkaar uit te laten wisselen.
                        </p>
                        <p>
                            <br><br>
                            <a class="stronglink stronglink--big" href="<?php echo get_permalink($privacyPage); ?>">
                                Privacy Statement
                            </a>
                        </p>
                    </div>
                </div>

                <div class="grid-row">
                    <?php include('php/elements/sponsors.php'); ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>
