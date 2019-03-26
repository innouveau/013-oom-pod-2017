<div class="sponsors">
    <?php
        $args = array(
            'posts_per_page' => 20,
            'order' => 'ASC',
            'category_name' => 'sponsor',
        );
        $q = new WP_Query($args);
        if($q->have_posts()) : while($q->have_posts()) : $q->the_post();
                $image = wp_get_attachment_image_src( get_post_thumbnail_id(  ), 'full' )[0];

    ?>

    <div class="sponsor">
        <div class="sponsor__image" style="background-image: url(<?php echo $image; ?>);"></div>
        <div class="sponsor__title">
            <?php the_title(); ?>
        </div>
        <div class="sponsor__content">
            <?php the_content(); ?>
        </div>
        <div class="sponsor__logo">
            <img src="<?php echo get_field('logo'); ?>">
        </div>
    </div>

    <?php
        endwhile;
        endif;
    ?>
</div>