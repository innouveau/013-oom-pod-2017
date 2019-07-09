<div id="menu" class="grid-50">
    <div id="hamburger">
        <div class="burger"></div>
        <div class="burger"></div>
        <div class="burger"></div>
    </div>

    <a href="<?php echo get_bloginfo('home'); ?>" id="home-button">
        <div class="home-button-arrow"></div>
        <div class="home-button-label">
            home
        </div>
    </a>
</div>

<div id="hamburger-content" style="display: none;">
    <div class="hamburger-container">
        <ul>
            <li>
                <a href="<?php echo get_bloginfo('home'); ?>">
                    Home
                </a>
            </li>
        </ul>

        <ul class="menu__events">
            <?php
            $args = array(
                'posts_per_page' => 10,
                'order' => 'ASC',
                'category_name' => 'meeting'
            );
            $q = new WP_Query($args);
            if($q->have_posts()) : while($q->have_posts()) : $q->the_post();
                $post_id = get_the_ID();
                $url = get_the_permalink();
                $meeting_date = get_post_meta($post_id, 'meeting_date_value', true);
                $meeting_city = get_post_meta($post_id, 'meeting_city_value', true);
                echo '<li><a href="'. $url . '">';
                echo '<span class="menu-date">' . $meeting_date . '</span>';
                echo '<span class="menu-location">' . $meeting_city . '</span>';
                echo '</a></li>';
            endwhile;
            wp_reset_postdata();
            endif;
            ?>
        </ul>

        <?php
        $defaults = array(
            'theme_location'  => 'main',
            'menu'            => 'main',
            'container'       => '',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => '',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul class="menu__standard-pages">%3$s</ul>',
            'depth'           => 0,
            'walker'          => ''
         );
        wp_nav_menu( $defaults );
        ?>
    </div>

    <div id="hamburger-close">
        <img src="<?php echo get_template_directory_uri(); ?>/img/lightbox/close.svg">
    </div>
</div>