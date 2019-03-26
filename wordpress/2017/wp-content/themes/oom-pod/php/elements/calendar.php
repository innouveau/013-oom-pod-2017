
<script>
    window.datereaderEvents = [
    <?php
        $args = array(
            'posts_per_page' => 100,
            'category_name'    => 'agenda',
            'order' => 'ASC',
        );
        $q = new WP_Query($args);
        if($q->have_posts()) : while($q->have_posts()) : $q->the_post();
            $post_id = get_the_ID();
            $title = get_the_title();
            $url = get_the_permalink();
            $date = get_field('datum');
            $summary = get_field('samenvatting');
            echo '{ date: "' . $date .'", event: { title: "' . $title .'", description: "' . $summary . '", url: "' . $url . '" }}';
            echo ',';
        endwhile;
        endif;
    ?>
    ];
</script>



<div id="datereader"></div>
<script src="<?php echo get_template_directory_uri(); ?>/js/datereader.js"></script>