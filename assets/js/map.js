//INTIALIZATION
$(document).ready(function() {
    $('.sidenav').sidenav();
});

//OPEN

var map, heatmap, geocoder, test;
var markers;

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
            position: google.maps.ControlPosition.LEFT_CENTER
        },
        zoom: 7
    });

    geocoder = new google.maps.Geocoder();

    geocodeAddress(geocoder, `Grupo Promex - São Paulo
    Rua Atílio Piffer, 745 - Casa Verde
    São Paulo - SP
    02516-000
    Brasil`);

    heatmap = new google.maps.visualization.HeatmapLayer({
        data: getPoints(),
        radius: 20,
        map: map
    });
}

function getPoints() {
    return [
        new google.maps.LatLng(-23.5077364, -46.6593997),
        new google.maps.LatLng(-23.5077364, -46.65944),
        new google.maps.LatLng(-23.507736, -46.659400)
    ]
}

function toggleHeatmap() {
    heatmap.setMap(heatmap.getMap() ? null : map);
}

$(".fixed-action-btn").click(function() {
    toggleHeatmap();
})