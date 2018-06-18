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
                                <iframe src="https://player.vimeo.com/video/274713351" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
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
            <div class="pagewrap">

                <div class="module-header">
                    <h3>
                        bijeenkomsten
                    </h3>
                </div>

                <div id="home-meeting-container">
                    <?php
                    $args = array(
                        'posts_per_page' => 20,
                        'order' => 'ASC',
                    );
                    $q = new WP_Query($args);
                        if($q->have_posts()) : while($q->have_posts()) : $q->the_post();
                            $post_id = get_the_ID();
                            $url = get_the_permalink();
                            $image = get_post_meta($post_id, 'city_picture_value', true);
                            // metabox variables
                            $meeting_date = get_post_meta($post_id, 'meeting_date_value', true);
                            $meeting_date_set = explode(' ', $meeting_date, 2);
                            $meeting_location = get_post_meta($post_id, 'meeting_location_value', true);
                            $meeting_city = get_post_meta($post_id, 'meeting_city_value', true);
                            $meeting_status = get_post_meta($post_id, 'meeting_finished_value', true);
                            if ($meeting_status == '0') {
                                include('php/elements/tile--still-unknown.php');
                            } else {
                                include('php/elements/tile.php');
                            }
                        endwhile;
                        endif;
                    ?>
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
                                <b>Omdat goede praktijkopleiders voor goed opgeleide leerlingen zorgen.</b>
                                Daarom organiseren de technische opleidingsfondsen
                                A+O-Metalektro, OOM en OTIB gezamenlijk praktijkopleidersdagen.
                                Het doel van deze dagen is om praktijkopleiders te informeren
                                en te inspireren, maar vooral ook om praktijkopleiders ervaringen
                                met elkaar uit te laten wisselen.
                            </div>
                        </div>

                        <div class="grid-row">
                            <div class="grid-50"></div>
                            <div class="grid-50">
                                <div id="footer-logos">
                                    <?php getLogos(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<?php get_footer(); ?>
