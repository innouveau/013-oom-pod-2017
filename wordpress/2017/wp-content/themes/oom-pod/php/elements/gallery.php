<div class="module">
    <div class="pagewrap">
        <div class="module-header">
            <h3>
                Fotoverslag <?php echo $meeting_date; ?>
            </h3>
        </div>
    </div>

    <div class="pagewrap">
        <div class="module-content">
            <div class="grid-row">
                <div class="grid-50">
                    <div class="module-intro">
                        <?php echo $meeting_location; ?><br>
                        <?php echo $meeting_city; ?>
                    </div>
                </div>
                <div class="grid-50">
                    <?php echo $review_text; ?>
                </div>
            </div>

            <div class="grid-row">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>