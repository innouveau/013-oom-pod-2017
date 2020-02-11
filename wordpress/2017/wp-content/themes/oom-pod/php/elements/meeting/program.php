<div class="module">
    <div class="pagewrap">
        <div class="module-header">
            <h3>
                programma
            </h3>
        </div>
    </div>

    <div class="pagewrap">
        <div id="workshop-module" class="module-content">
            <div class="module-absolute">
                <div class="meeting-city">
                    <?php
                        $keynote_speaker = get_field('keynote_speaker');

                        if ($keynote_speaker) {
                            echo '<img src="' . get_template_directory_uri() . '/img/keynote-speaker/keynote-speaker__2020.jpg">';
                        }
                    ?>
                </div>
            </div>
            <?php getPrograms($post_id); ?>
        </div>
    </div>
</div>