<a class="home-meeting" href="<?php echo $url; ?>">
    <div class="home-meeting-img" style="background-image: url(<?php echo $image;?>);">
        <div class="home-meeting-title">
            <div class="home-meeting-title-date">
                <h5>
                    <?php echo $meeting_date_set[0]; ?>
                </h5>
                <h6>
                    <?php echo $meeting_date_set[1]; ?>
                </h6>
            </div>
            <div class="home-meeting-title-location">
                <h4>
                    <?php the_title(); ?>
                </h4>
            </div>
        </div>
        <div class="home-meeting-footer">
            <?php
                if ($meeting_status == 'x') {
                    echo 'Fotoverslag';
                } else {
                    echo 'Programma';
                }
            ?>
        </div>
    </div>
</a>