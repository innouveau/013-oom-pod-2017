<?php
    $post_id = $post->ID;
    $images = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'full' );
?>




<div class="agenda-single">
    <div class="pagewrap">
        <div class="agenda-single__topbar">

            <div class="agenda-single__back">
                <a href="<?php echo get_bloginfo('home'); ?>#kalender">
                    terug naar kalender
                </a>
            </div>
            <div class="agenda-single__date">
                <?php echo get_field('datum'); ?>
            </div>
        </div>
    </div>

    <div class="module">
        <div class="pagewrap">
            <div class="module-content">
                <div class="grid-row">
                    <div class="grid-50">
                        <div class="module-intro">
                            <?php the_title(); ?>
                        </div>
                    </div>
                    <div class="grid-50">
                        <?php
                            if ($images) {
                        ?>
                        <div class="agenda-single__image">
                            <img src="<?php echo $images[0]; ?>">
                        </div>
                        <?php
                            }
                            the_content();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
