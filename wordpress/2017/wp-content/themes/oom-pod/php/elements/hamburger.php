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
                    <span class="menu-date">overzicht</span>
                    <span class="menu-location">Home</span>
                </a>
            </li>
            <?php getMenu(); ?>
            <li>
                <a href="<?php echo get_the_permalink($privacyPage); ?>">
                    <span class="menu-date">Privacy</span>
                    <span class="menu-location">Statement</span>
                </a>
            </li>
        </ul>
    </div>


    <div id="hamburger-close">
        <img src="<?php echo get_template_directory_uri(); ?>/img/lightbox/close.svg">
    </div>
</div>