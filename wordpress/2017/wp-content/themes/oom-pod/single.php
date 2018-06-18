<?php
    get_header();

    if(have_posts()): while(have_posts()) : the_post();

        $post_id = $post->ID;
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'full' )[0];

        // metabox variables
        $meeting_status = get_post_meta($post_id, 'meeting_finished_value', true);
        $meeting_date = get_post_meta($post_id, 'meeting_date_value', true);
        $meeting_location = get_post_meta($post_id, 'meeting_location_value', true);
        $meeting_city = get_post_meta($post_id, 'meeting_city_value', true);
        $meeting_address = get_post_meta($post_id, 'meeting_address_value', true);
        $meeting_zipcode = get_post_meta($post_id, 'meeting_zipcode_value', true);
        $meeting_lat = get_post_meta($post_id, 'meeting_lat_value', true);
        $meeting_lng = get_post_meta($post_id, 'meeting_lng_value', true);
        $meeting_form_link = get_post_meta($post_id, 'meeting_form_link_value', true);
        $program_intro = get_post_meta($post_id, 'program_intro_value', true);
        $workshop_quote = get_post_meta($post_id, 'workshop_quote_value', true);
        $workshop_intro = get_post_meta($post_id, 'workshop_intro_value', true);
        $review_text = get_post_meta($post_id, 'review_text_value', true);
        $location_image = get_bloginfo('home') . '/' . get_post_meta($post_id, 'city_picture_value', true);

?>

        <div id="page-top">
            <div id="page-top-image" style="background-image: url(<?php echo $image; ?>);"></div>


            <div id="page-top-content">
                    <div class="pagewrap">
                        <div id="pod-identity-container" class="grid-row">
                            <div class="grid-50 grid-left grid-col">&nbsp;</div>

                            <div id="pod-identity" class="grid-50 grid-right grid-col">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/identity/pod-logo-2018.svg">
                            </div>
                        </div>

                        <div id="meeting-header" class="grid-row">
                            <?php
                                if ($meeting_status == 'x') {
                            ?>

                            <div class="grid-50 grid-left grid-col"></div>
                            <div id="meeting-header-review" class="grid-50 grid-right grid-col">

                            </div>

                            <?php
                                } else {
                            ?>

                            <div id="meeting-header-date" class="grid-50 grid-left grid-col">
                                <?php echo $meeting_date; ?>
                            </div>
                            <div id="meeting-header-location" class="grid-50 grid-right grid-col">
                                <?php echo $meeting_location; ?><br>
                                <?php echo $meeting_city; ?>
                            </div>

                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of page top -->


        <div id="page-body">
            <?php
                if ($meeting_status == 'x') {
                    include('php/elements/gallery.php');
                } else {
                    include('php/elements/program.php');
                }
                if ($meeting_status == '') {
                    include('php/elements/meeting-content.php');
                }
            ?>
        </div>
        <!-- end of page body -->

        <?php endwhile; endif; ?>


<?php get_footer(); ?>
