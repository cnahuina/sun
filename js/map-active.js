
https://www.google.com/maps/d/embed?mid=1h7NtiS5tYQrPiTFzVie5M22bwnQ9o-r_

var map;
var latlng = new google.maps.LatLng(-12.0834619, -77.0268521);
var stylez = [{
    featureType: "all",
    elementType: "all",
    stylers: [{
        saturation: 0
            }]
        }];
var mapOptions = {
    zoom: 13,
    center: latlng,
    scrollwheel: false,
    scaleControl: false,
    disableDefaultUI: true,
    mapTypeControlOptions: {
        mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'gMap']
    }
};
map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);
var geocoder_map = new google.maps.Geocoder();
var address = 'Av. paseo de la republica 1984 lince';
geocoder_map.geocode({
    'address': address
}, function (results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
        map.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({
            map: map,
            icon: '',
            position: map.getCenter(),
            animation: google.maps.Animation.BOUNCE,
        });
    } else {
        alert("Geocode was not successful for the following reason: " + status);
    }
});
var mapType = new google.maps.StyledMapType(stylez, {
    name: "Grayscale"
});
map.mapTypes.set('gMap', mapType);
map.setMapTypeId('gMap');