//INTIALIZATION
$(document).ready(function() {
    $('.sidenav').sidenav();
});

//OPEN

var map;
var geocoder;

function geocodeAddress(geocoder, address) {
    geocoder.geocode({ 'address': address }, function(results, status) {
        if (status === 'OK') {
            map.setCenter(results[0].geometry.location);

            var marker = new google.maps.Marker({
                map: map,
                position: results[0].geometry.location
            });


            marker.addListener('click', function() {
                map.panTo(marker.getPosition());
                map.setZoom(18);
                map.setCenter(marker.getPosition());
            });
        } else {
            alert('Geocode was not successful for the following reason: ' + status);
        }
    });
}

function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: -23.5489, lng: -46.6388 },
        streetViewControl: false,
        mapTypeControl: false,
        fullscreenControl: false,
        zoomControlOptions: {
            position: google.maps.ControlPosition.LEFT_BOTTOM
        },
        zoom: 7
    });

    geocoder = new google.maps.Geocoder();

    geocodeAddress(geocoder, `Rua Atílio Piffer, 745
    Casa Verde – SP`);
}