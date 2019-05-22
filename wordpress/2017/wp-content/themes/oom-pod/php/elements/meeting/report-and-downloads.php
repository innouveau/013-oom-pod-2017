<div class="module module--top">
    <div class="pagewrap">
        <div class="grid-row">
            <div class="grid-50">
                <div class="intro">
                    <?php
                        echo get_field('report_intro');
                    ?>
                </div>
            </div>
            <div class="grid-50">
                <?php
                    echo get_field('report_content');
                ?>
                <div class="downloads">
                    <h3>
                        downloads
                    </h3>
                    <?php
                        echo get_field('downloads');
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>