<?php

function getPrograms($post_id) {
    for ($i = 1; $i < 13; $i++) {
        $time = get_post_meta($post_id, 'program_' . $i . '_time_value', true);
        $title = get_post_meta($post_id, 'program_' . $i . '_name_value', true);
        $description = get_post_meta($post_id, 'program_' . $i . '_description_value', true);
        if ($title != '') { ?>
            <div class="grid-row meeting-program-row">
                <div class="meeting-program-time grid-50">
                    <?php echo $time; ?>
                </div>
                <div class="meeting-program-description grid-50">
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
                <div class="meeting-workshop-time grid-50">
                    <?php echo $code; ?>
                </div>
                <div class="meeting-workshop-description grid-50">
                    <span class="meeting-workshop-title"><?php echo $title; ?></span>
                    <?php echo $description; ?>
                </div>
            </div>
        <?php }
    }
}