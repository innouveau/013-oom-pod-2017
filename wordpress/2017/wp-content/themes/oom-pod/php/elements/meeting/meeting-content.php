<div class="module">
    <div class="pagewrap">
        <div class="module-header">
            <h3>
                workshops
            </h3>
        </div>
    </div>

    <div class="pagewrap">
        <div class="module-content">
            <div class="grid-row">
                <div class="grid-50">
                    <div class="module-intro">
                        <?php echo $workshop_quote; ?>
                    </div>
                </div>
                <div class="grid-50">
                    <?php echo $workshop_intro; ?>
                    <br><br>
                    <button class="yellow" id="show-workshops">toon workshops</button>
                </div>
            </div>

            <div id="meeting-workshops">
                <?php getWorkshops($post_id); ?>

                <div class="grid-row meeting-program-row">
                    <div class="grid-50"></div>
                    <div class="grid-50">
                        <button class="yellow" id="hide-workshops">verberg</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    $fullyBooked = get_field('fully_booked');

    if ($fullyBooked) {
        include(get_template_directory() . '/php/elements/meeting/fully-booked.php');
    } else {
        include(get_template_directory() . '/php/elements/meeting/sign-up.php');
    }
?>


<div id="meeting-location" class="module">
    <div id="meeting-location-map"></div>

    <div id="meeting-location-content">
        <div class="module-header">
            <h3>
                Locatie
            </h3>
        </div>
        <div class="module-content">
            <img src="<?php echo $location_image; ?>">
            <div class="module-intro">
                <?php echo $meeting_address; ?><br>
                <?php echo $meeting_zipcode; ?><br>
                <?php echo $meeting_city ?>
            </div>
        </div>

    </div>

    <a href="http://maps.google.com/?q=<?php echo $meeting_address; ?>, <?php echo $meeting_zipcode; ?>, <?php echo $meeting_city ?>" class="plan-route" target="_blank">
        <div class="plan-route-circle"></div>
        <div class="plan-route-text">
            plan route
        </div>
    </a>
</div>

<!-- google maps -->
<script>
    var meetingCoordinates = {
        lat: <?php echo $meeting_lat; ?>,
        lng: <?php echo $meeting_lng; ?>
    }
</script>
<script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwtBMZCa2IYtCuY6pqpupaO2igtDAa-rQ&callback=initMap"></script>