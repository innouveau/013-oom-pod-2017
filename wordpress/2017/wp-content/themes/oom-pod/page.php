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
                        <div class="grid-50 grid-left grid-col">
                            <div id="home-intro">
                                <?php the_content(); ?>
                            </div>
                        </div>

                        <div id="pod-identity" class="grid-50 grid-right grid-col">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/identity/pod-logo-2017-black.svg">
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
                            <div class="grid-50 grid-left grid-col">
                                <div class="module-intro">
                                    Door wie zijn deze dagen mogelijk gemaakt?
                                </div>
                            </div>
                            <div class="grid-50 grid-right grid-col">
                                Er wordt de gelegenheid geboden om twee workshops
                                te volgen; één in het ochtend en één in het middag
                                deel van het programma. In het onderstaand overzicht
                                kunt u zien waar de workshops over gaan, kies voor
                                ieder dagdeel één uit. Daarnaast vragen wij u een
                                reserve keuze te maken indien een door u gekozen
                                workshop vol zit.
                            </div>
                        </div>

                        <div class="grid-row">
                            <div class="grid-50 grid-left grid-col"></div>
                            <div class="grid-50 grid-right grid-col">
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
