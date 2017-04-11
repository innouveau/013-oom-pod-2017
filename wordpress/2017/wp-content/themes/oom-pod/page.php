<?php
    get_header();
    require 'php/uiElements.php';

    if(have_posts()): while(have_posts()) : the_post();

        $post_id = $post->ID;
    endwhile; endif
?>


        <div id="page-body">
            <div class="pagewrap">

            <div id="home-meeting-container">
                <?php
                $args = array(
                    'posts_per_page' => 9,
                );
                $q = new WP_Query($args);
                    if($q->have_posts()) : while($q->have_posts()) : $q->the_post();
                        $post_id = get_the_ID();
                        $url = get_the_permalink();
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'full' )[0];

                        // metabox variables
                        $meeting_date = get_post_meta($post_id, 'meeting_date_value', true);
                        $meeting_location = get_post_meta($post_id, 'meeting_location_value', true);
                        $meeting_city = get_post_meta($post_id, 'meeting_city_value', true);
                        ?>

                        <a class="home-meeting" href="<?php echo $url; ?>">
                            <div class="home-meeting-img" style="background-image: url(<?php echo $image; ?>);">
                                <div class="home-meeting-title">
                                    <h5>
                                        <?php echo $meeting_date; ?>
                                    </h5>
                                    <h4>
                                        <?php echo $meeting_city; ?>
                                    </h4>
                                </div>
                            </div>
                            <div class="home-meeting-footer">
                                Programma
                            </div>
                        </a>
                <?php
                    endwhile;
                    endif;
                ?>
                </div>
            </div>
        </div>


<?php get_footer(); ?>
