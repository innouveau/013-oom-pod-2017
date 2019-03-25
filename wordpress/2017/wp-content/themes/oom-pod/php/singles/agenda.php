<?php
    $post_id = $post->ID;
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'full' )[0];
?>


<div id="page-top">
    <div id="page-top-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/patterns/pod-pattern-home.png);"></div>


    <div id="page-top-content">
        <div class="pagewrap">
            <div id="pod-identity-container" class="grid-row">
                <div class="grid-60"></div>

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
                    <?php the_title(); ?>
                </h3>
            </div>
        </div>

        <div class="pagewrap">
            <div class="module-content">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>
