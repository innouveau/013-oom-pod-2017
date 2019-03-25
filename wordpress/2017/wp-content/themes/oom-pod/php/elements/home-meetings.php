<?php
    $args = array(
        'posts_per_page' => 20,
        'order' => 'ASC',
        'category_name' => 'bijeenkomst',
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
            include('tile--still-unknown.php');
        } else {
            include('tile.php');
        }
    endwhile;
    endif;
?>