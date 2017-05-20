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
                                <img src="<?php echo get_template_directory_uri(); ?>/img/identity/pod-logo-2017.svg">
                            </div>
                        </div>

                        <div id="meeting-header" class="grid-row">
                            <?php
                                if ($meeting_status == 'x') {
                            ?>

                            <div class="grid-50 grid-left grid-col"></div>
                            <div id="meeting-header-review" class="grid-50 grid-right grid-col">
                                Terugblik
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
            ?>
            <!-- gallery -->
            <div class="module">
                <div class="pagewrap">
                    <div class="module-header">
                        <h3>
                            <?php echo $meeting_date; ?>
                        </h3>
                    </div>
                </div>

                <div class="pagewrap">
                    <div class="module-content">
                        <div class="grid-row">
                            <div class="grid-50 grid-left grid-col">
                                <div class="module-intro">
                                    <?php echo $meeting_location; ?><br>
                                    <?php echo $meeting_city; ?>
                                </div>
                            </div>
                            <div class="grid-50 grid-right grid-col">
                                <?php echo $review_text; ?>
                            </div>
                        </div>

                        <div class="grid-row">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>

            <?php
                } else {
            ?>

            <!-- programma -->
            <div class="module">
                <div class="pagewrap">
                    <div class="module-header">
                        <h3>
                            programma
                        </h3>
                    </div>
                </div>

                <div class="pagewrap">
                    <div id="workshop-module" class="module-content">
                        <div class="module-absolute">
                            <div class="meeting-city">
                                <img src="<?php echo $location_image; ?>">
                            </div>
                         </div>
                        <?php getPrograms($post_id); ?>
                    </div>
                </div>
            </div>


            <?php
            }
            if ($meeting_status != '0') {
            ?>

            <!-- workshops -->
            <div class="module">
                <div class="pagewrap">
                    <div class="module-header">
                        <h3>
                            workshops
                        </h3>
                    </div>
                </div>

                <div class="pagewrap">
                    <div class="module-content">
                        <div class="grid-row">
                            <div class="grid-50 grid-left grid-col">
                                <div class="module-intro">
                                    <?php echo $workshop_quote; ?>
                                </div>
                            </div>
                            <div class="grid-50 grid-right grid-col">
                                <?php echo $workshop_intro; ?>
                                <br><br>
                                <button class="yellow" id="show-workshops">toon workshops</button>
                            </div>
                        </div>

                        <div id="meeting-workshops">
                            <?php getWorkshops($post_id); ?>

                            <div class="grid-row meeting-program-row">
                                <div class="grid-50 grid-left grid-col"></div>
                                <div class="grid-50 grid-right grid-col">
                                    <button class="yellow" id="hide-workshops">verberg</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="module">
                <div class="pagewrap">
                    <div class="module-header module-header-solo">
                        <h3>
                            aanmelden
                        </h3>
                    </div>
                </div>

                <div class="module-content background-pattern">
                    <div class="pagewrap">
                        <div class="grid-row">
                            <div class="grid-50 grid-left grid-col">
                                <div class="module-intro">
                                    Ja, ik neem graag deel aan de dag en meld mij aan
                                </div>
                            </div>
                            <div class="grid-50 grid-right grid-col">
                                Ga naar het online inschrijfformulier van OTIB en de organiserende partijen om je aan te melden
                                <br><br>
                                <a class="button white" target="_blank" href="<?php echo $meeting_form_link; ?>">aanmelden</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="meeting-location" class="module">
                <div id="meeting-location-map"></div>

                <div id="meeting-location-content">
                    <div class="module-header">
                        <h3>
                            Locatie
                        </h3>
                    </div>
                    <div class="module-content">
                        <div class="module-intro">
                            <?php echo $meeting_address; ?><br>
                            <?php echo $meeting_zipcode; ?><br>
                            <?php echo $meeting_city ?>
                        </div>
                    </div>

                </div>

                <a href="http://maps.google.com/?q=<?php echo $meeting_address; ?>, <?php echo $meeting_zipcode; ?>, <?php echo $meeting_city ?>" class="plan-route" target="_blank">
                    <div class="plan-route-circle"></div>
                    <div class="plan-route-text">
                        plan route
                    </div>
                </a>


            </div>

            <!-- google maps -->
            <script>
                var meetingCoordinates = {
                    lat: <?php echo $meeting_lat; ?>,
                    lng: <?php echo $meeting_lng; ?>
                }
            </script>
            <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwtBMZCa2IYtCuY6pqpupaO2igtDAa-rQ&callback=initMap"></script>

            <?php
                }
            ?>


        </div>
        <!-- end of page body -->

        <?php endwhile; endif; ?>


<?php get_footer(); ?>
