<?php

function getPrograms($post_id) {
    for ($i = 1; $i < 13; $i++) {
        $time = get_post_meta($post_id, 'program_' . $i . '_time_value', true);
        $title = get_post_meta($post_id, 'program_' . $i . '_name_value', true);
        $description = get_post_meta($post_id, 'program_' . $i . '_description_value', true);
        if ($title != '') { ?>
            <div class="grid-row meeting-program-row">
                <div class="meeting-program-time grid-50 grid-left grid-col">
                    <?php echo $time; ?>
                </div>
                <div class="meeting-program-description grid-50 grid-right grid-col">
                    <span class="meeting-program-title"><?php echo $title; ?></span>
                    <?php echo $description; ?>
                </div>
            </div>
        <?php }
    }
}

function getWorkshops($post_id) {
    for ($i = 1; $i < 13; $i++) {
        $code = get_post_meta($post_id, 'workshop_' . $i . '_time_value', true);
        $title = get_post_meta($post_id, 'workshop_' . $i . '_name_value', true);
        $description = get_post_meta($post_id, 'workshop_' . $i . '_description_value', true);
        if ($title != '') { ?>
            <div class="grid-row meeting-workshop-row">
                <div class="meeting-workshop-time grid-50 grid-left grid-col">
                    <?php echo $code; ?>
                </div>
                <div class="meeting-workshop-description grid-50 grid-right grid-col">
                    <span class="meeting-workshop-title"><?php echo $title; ?></span>
                    <?php echo $description; ?>
                </div>
            </div>
        <?php }
    }
}

function getMenu() {
    $args = array(
        'posts_per_page' => 10,
    );
    $q = new WP_Query($args);
    if($q->have_posts()) : while($q->have_posts()) : $q->the_post();
        $post_id = get_the_ID();
        echo $post_id;
        $url = get_the_permalink();
        $meeting_date = get_post_meta($post_id, 'meeting_date_value', true);
        $meeting_location = get_post_meta($post_id, 'meeting_location_value', true);
        echo '<li><a href="'. $url . '">';
        echo '<span class="menu-date">' . $meeting_date . '</span>';
        echo '<span class="menu-location">' . $meeting_location . '</span>';
        echo '</a></li>';
    endwhile;
    wp_reset_postdata();
    endif;
}