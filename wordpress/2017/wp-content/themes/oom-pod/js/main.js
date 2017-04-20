$(window).ready(function(){

    listenToScroll();
    listenToWorkshop();
    listenToHamburger();
});

function listenToHamburger() {
    $('#hamburger-content').hide();

    $('#hamburger').click(function(){
        $('body').addClass('menu-active');
        $('#hamburger-content').fadeIn(200);
    });

    $('#hamburger-close').click(function(){
        $('body').removeClass('menu-active');
        $('#hamburger-content').fadeOut(200);
    })
}

function listenToScroll() {
    var timer = null;

    $(window).scroll(function() {

        // do set element at end of scrolling
        clearTimeout(timer);
        timer = setTimeout(function(){
            setElements();
        }, 50);


        setElements();
    });

    function setElements() {
        var top = Math.floor(0.7 * $(window).scrollTop());
        if (top >= 0) {
            $('#page-top-image').css('top', top);
        }

        if (top > 160) {
            $('#top-bar').addClass('scrolled');
            $('#top-bar-mini-logo').fadeIn(200);
        } else {
            $('#top-bar').removeClass('scrolled');
            $('#top-bar-mini-logo').fadeOut(200);
        }
    }
}

function listenToWorkshop() {
    var showButton = $('#show-workshops'),
        hideButton = $('#hide-workshops'),
        frame = $('#meeting-workshops');

    hideButton.click(function(){
        showButton.show();
        frame.hide();
    });

    showButton.click(function(){
        showButton.hide();
        frame.show();
    });
}

function initMap(l) {
    var map;

    map = new google.maps.Map(document.getElementById('meeting-location-map'), {
        mapTypeControl: false,
        streetViewControl: false,
        scrollwheel: false,
        zoom: 15,
        center: meetingCoordinates,
        styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
    });



}
