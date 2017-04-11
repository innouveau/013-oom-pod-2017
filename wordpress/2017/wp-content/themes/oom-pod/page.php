<?php
    get_header();

    if(have_posts()): while(have_posts()) : the_post();

        // metabox variables
        $meeting_date = get_post_meta($post->ID, 'meeting_date', true);
        $meeting_location = get_post_meta($post->ID, 'meeting_location', true);
        $meeting_city = get_post_meta($post->ID, 'meeting_city', true);
        $meeting_address = get_post_meta($post->ID, 'meeting_address', true);
        $meeting_zipcode = get_post_meta($post->ID, 'meeting_zipcode', true);
        $meeting_lat = get_post_meta($post->ID, 'meeting_lat', true);
        $meeting_lng = get_post_meta($post->ID, 'meeting_lng', true);
        $meeting_form_link = get_post_meta($post->ID, 'meeting_form_link', true);
        $program_intro = get_post_meta($post->ID, 'program_intro', true);
        $workshop_quote = get_post_meta($post->ID, 'workshop_quote', true);
        $workshop_intro = get_post_meta($post->ID, 'workshop_intro', true);

?>

<div id="page-top">
            <div id="page-top-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/placeholder-header.jpg);"></div>


            <div id="page-top-content">
                    <div class="pagewrap">
                        <div id="pod-identity-container" class="grid-row">
                            <div class="grid-50 grid-right grid-col">&nbsp;</div>

                            <div id="pod-identity" class="grid-50 grid-right grid-col">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/pod-logo-2017.svg">
                               </div>
                        </div>

                        <div id="meeting-header" class="grid-row">
                            <div id="meeting-header-date" class="grid-50 grid-left grid-col">
                                <?php echo $meeting_date; ?>
                            </div>
                            <div id="meeting-header-location" class="grid-50 grid-right grid-col">
                                <?php echo $meeting_location; ?><br>
                                <?php echo $meeting_city; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of page top -->


        <div id="page-body">

            <!-- programma -->
            <div class="meeting-module">
                <div class="pagewrap">
                    <div class="meeting-module-header">
                        <h3>
                            programma
                        </h3>
                    </div>
                </div>

                <div class="pagewrap">
                    <div class="meeting-module-content">
                        <div class="meeting-module-absolute">
                            <div class="meeting-module-intro">
                                Een inspirerende dag met collega’s onder elkaar
                            </div>
                        </div>
                        <div class="grid-row meeting-program-row">
                            <div class="meeting-program-time grid-50 grid-left grid-col">
                                13:00
                            </div>
                            <div class="meeting-program-description grid-50 grid-right grid-col">
                                <span class="meeting-program-title">Rondleiding</span> Em invenim est, unt volenes
                                cipsanti aborem- pos millo cus, anis audis que
                                dolorporum, coreptas re que voloreius dis et
                                landus, is etures aliquis ent ea as soluptatiunt.
                            </div>
                        </div>

                        <div class="grid-row meeting-program-row">
                            <div class="meeting-program-time grid-50 grid-left grid-col">
                                15:00
                            </div>
                            <div class="meeting-program-description grid-50 grid-right grid-col">
                                <span class="meeting-program-title">Rondleiding</span> Em invenim est, unt volenes
                                cipsanti aborem- pos millo cus, anis audis que
                                dolorporum, coreptas re que voloreius dis et
                                landus, is etures aliquis ent ea as soluptatiunt.
                            </div>
                        </div>

                        <div class="grid-row meeting-program-row">
                            <div class="meeting-program-time grid-50 grid-left grid-col">
                                17:00
                            </div>
                            <div class="meeting-program-description grid-50 grid-right grid-col">
                                <span class="meeting-program-title">Rondleiding</span> Em invenim est, unt volenes
                                cipsanti aborem- pos millo cus, anis audis que
                                dolorporum, coreptas re que voloreius dis et
                                landus, is etures aliquis ent ea as soluptatiunt.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- workshops -->
            <div class="meeting-module">
                <div class="pagewrap">
                    <div class="meeting-module-header">
                        <h3>
                            workshops
                        </h3>
                    </div>
                </div>

                <div class="pagewrap">
                    <div class="meeting-module-content">
                        <div class="grid-row">
                            <div class="grid-50 grid-left grid-col">
                                <div class="meeting-module-intro">
                                    Keuze uit een gevarieerd aanbod aan workshops
                                </div>
                            </div>
                            <div class="grid-50 grid-right grid-col">
                                Er wordt de gelegenheid geboden om twee
                                workshops te volgen; één in het ochtend en één
                                in het middag deel van het programma. In het
                                onderstaand overzicht kunt u zien waar de
                                workshops over gaan, kies voor ieder dagdeel één
                                uit. Daarnaast vragen wij u een reserve keuze
                                te maken in- dien een door u gekozen workshop
                                vol zit.
                                <br><br>
                                <button class="yellow" id="show-workshops">toon workshops</button>
                            </div>
                        </div>

                        <div id="meeting-workshops">
                            <div class="grid-row meeting-workshop-row">
                                <div class="meeting-workshop-time grid-50 grid-left grid-col">
                                    A
                                </div>
                                <div class="meeting-workshop-description grid-50 grid-right grid-col">
                                    <span class="meeting-workshop-title">Titel van de workshop</span> Em invenim est, unt volenes
                                    cipsanti aborem- pos millo cus, anis audis que
                                    dolorporum, coreptas re que voloreius dis et
                                    landus, is etures aliquis ent ea as soluptatiunt.
                                </div>
                            </div>

                            <div class="grid-row meeting-workshop-row">
                                <div class="meeting-workshop-time grid-50 grid-left grid-col">
                                    B
                                </div>
                                <div class="meeting-workshop-description grid-50 grid-right grid-col">
                                    <span class="meeting-workshop-title">Titel van de workshop</span> Em invenim est, unt volenes
                                    cipsanti aborem- pos millo cus, anis audis que
                                    dolorporum, coreptas re que voloreius dis et
                                    landus, is etures aliquis ent ea as soluptatiunt.
                                </div>
                            </div>

                            <div class="grid-row meeting-workshop-row">
                                <div class="meeting-workshop-time grid-50 grid-left grid-col">
                                    C
                                </div>
                                <div class="meeting-workshop-description grid-50 grid-right grid-col">
                                    <span class="meeting-workshop-title">Titel van de workshop</span> Em invenim est, unt volenes
                                    cipsanti aborem- pos millo cus, anis audis que
                                    dolorporum, coreptas re que voloreius dis et
                                    landus, is etures aliquis ent ea as soluptatiunt.
                                </div>
                            </div>

                            <div class="grid-row meeting-program-row">
                                <div class="grid-50 grid-left grid-col"></div>
                                <div class="grid-50 grid-right grid-col">
                                    <button class="yellow" id="hide-workshops">verberg</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="meeting-module">
                <div class="pagewrap">
                    <div class="meeting-module-header meeting-module-header-solo">
                        <h3>
                            aanmelden
                        </h3>
                    </div>
                </div>

                <div class="meeting-module-content background-pattern">
                    <div class="pagewrap">
                        <div class="grid-row">
                            <div class="grid-50 grid-left grid-col">
                                <div class="meeting-module-intro">
                                    Ja, ik neem graag deel aan de dag en meld mij aan
                                </div>
                            </div>
                            <div class="grid-50 grid-right grid-col">
                                Ga naar het online inschrijfformulier van OTIB en de organiserende partijen om je aan te melden
                                <br><br>
                                <a class="button white" href="">aanmelden</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="meeting-location" class="meeting-module">
                <div id="meeting-location-map"></div>

                <div id="meeting-location-content">
                    <div class="meeting-module-header">
                        <h3>
                            Locatie
                        </h3>
                    </div>
                    <div class="meeting-module-content">
                        <div class="meeting-module-intro">
                            Willemsoord 47<br>
                            1780 AD<br>
                            Den Helder
                        </div>
                    </div>

                </div>

                <a href="http://maps.google.com/?q=willemsoord 47, 1780 AD, Den Helder" class="plan-route" target="_blank">
                    <div class="plan-route-circle"></div>
                    <div class="plan-route-text">
                        plan route
                    </div>
                </a>


            </div>




        </div>
        <!-- end of page body -->

        <?php endwhile; endif; ?>


<?php get_footer(); ?>
