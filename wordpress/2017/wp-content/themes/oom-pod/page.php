<?php
    get_header();
?>


<div id="top-bar" class="top-logos--black">
    <?php include('php/elements/topbar.php'); ?>
</div>


<?php
    if(have_posts()): while(have_posts()) : the_post();
        $post_id = $post->ID;
?>

        <div id="page-top">
            <div id="page-top-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/patterns/pod-pattern-home.png);"></div>


            <div id="page-top-content">
                <div class="pagewrap">
                    <div id="pod-identity-container" class="grid-row">
                        <div class="grid-60">
                            <h1>
                                <?php the_title(); ?>
                            </h1>
                            <div class="intro">

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
            <div class="module">
                <div class="pagewrap">
                    <div class="module-header">
                        <h3>
                            <?php the_title(); ?>
                        </h3>
                    </div>
                </div>
                <div class="pagewrap">
                    <div class="module-content">
                        <div class="grid-row">
                            <div class="grid-50"></div>
                            <div class="grid-50">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
<?php

endwhile; endif
?>

<?php get_footer(); ?>
