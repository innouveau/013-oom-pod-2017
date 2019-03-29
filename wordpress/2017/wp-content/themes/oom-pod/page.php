<?php
    get_header();
?>



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
            <div class="module">
                <div class="pagewrap">
                    <div class="module-header">
                        <h3>
                            aanbieders
                        </h3>
                    </div>
                </div>

                <div class="pagewrap">
                    <div class="module-content">
                        <div class="sponsors">
                            <div class="sponsor">
                                <div class="sponsor__logo">
                                    <svg width="183" height="40">
                                        <?php getLogoAO(); ?>
                                    </svg>
                                </div>
                                <div class="sponsor__text">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Sed vitae finibus leo.
                                    Integer vitae massa dui. Sed urna dolor,
                                    ullamcorper facilisis tristique nec, porta
                                    nec est. Vivamus accumsan elit vel lectus
                                    gravida volutpat. Vivamus id porta mauris.
                                    Nulla leo dolor, posuere nec ornare ut,
                                    suscipit in lectus.
                                </div>
                                <div class="sponsor__link">
                                    <a class="stronglink" href="https://www.ao-metalektro.nl/" target="_blank">
                                        Ga naar de website
                                    </a>
                                </div>
                            </div>

                            <div class="sponsor">
                                <div class="sponsor__logo">
                                    <svg width="148" height="40">
                                        <?php getLogoOom(); ?>
                                    </svg>
                                </div>
                                <div class="sponsor__text">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Sed vitae finibus leo.
                                    Integer vitae massa dui. Sed urna dolor,
                                    ullamcorper facilisis tristique nec, porta
                                    nec est. Vivamus accumsan elit vel lectus
                                    gravida volutpat. Vivamus id porta mauris.
                                    Nulla leo dolor, posuere nec ornare ut,
                                    suscipit in lectus. Quisque varius, enim non
                                    euismod cursus, lacus libero tempor purus, a
                                    tincidunt ipsum odio id elit. Proin egestas
                                    nunc accumsan leo faucibus, ut imperdiet
                                    turpis malesuada.
                                </div>
                                <div class="sponsor__link">
                                    <a class="stronglink" href="https://www.oom.nl/" target="_blank">
                                        Ga naar de website
                                    </a>
                                </div>
                            </div>

                            <div class="sponsor">
                                <div class="sponsor__logo">
                                    <svg width="114" height="40">
                                        <?php getLogoOtib();?>
                                    </svg>
                                </div>
                                <div class="sponsor__text">
                                    Sed urna dolor,
                                    ullamcorper facilisis tristique nec, porta
                                    nec est. Vivamus accumsan elit vel lectus
                                    gravida volutpat. Vivamus id porta mauris.
                                    Nulla leo dolor, posuere nec ornare ut,
                                    suscipit in lectus. Quisque varius, enim non
                                    euismod cursus, lacus libero tempor purus, a
                                    tincidunt ipsum odio id elit. Proin egestas
                                    nunc accumsan leo faucibus, ut imperdiet
                                    turpis malesuada.
                                </div>
                                <div class="sponsor__link">
                                    <a class="stronglink" href="https://www.otib.nl/" target="_blank">
                                        Ga naar de website
                                    </a>
                                </div>
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
