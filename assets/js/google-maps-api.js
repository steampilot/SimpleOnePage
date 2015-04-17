/**
 * Created by jerome.roethlisberge on 17.04.2015.
 */
$(document).ready(function(){
    initialize();
});

var directionDisplay;
var home = new google.maps.LatLng(51.764696,5.526042);

var directionsService = new google.maps.DirectionsService();
function initialize() {

    var infowindow = new google.maps.InfoWindow({
    });
    infowindow.setContent('<img src="assets/img/logo.png" >');

    directionsDisplay = new google.maps.DirectionsRenderer();

    var myOptions = {
        scrollwheel:false,
        zoom: 12,
        center: home,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        mapTypeControl: false,
        zoomControl: true,
        zoomControlOptions: {
            style: google.maps.ZoomControlStyle.LARGE
        }
    };
    var map = new google.maps.Map(document.getElementById("map_canvas"),myOptions);
    directionsDisplay.setMap(map);
    directionsDisplay.setPanel(document.getElementById("directionsPanel"));
    var marker = new google.maps.Marker({
        position: home,
        map: map,
        animation: google.maps.Animation.DROP,
        title:"ORCA Services AG"
    });
    google.maps.event.addListener(marker, 'click', markerBounce);
    function markerBounce() {
        map.setZoom(16);
        map.setCenter(home);
        marker.setAnimation(google.maps.Animation.DROP);
        infowindow.open(map,marker);
    }
    google.maps.event.addListener(map,'center_changed',function() {
        window.setTimeout(function() {
            map.panTo(marker.getPosition());
            map.setZoom(14);
        },20000);
        window.setTimeout(function() {
            infowindow.close();
        },25000);
    });


}
function calcRoute() {
    var start = document.getElementById("routeStart").value;
    var end = home;
    var request = {
        origin:start,
        destination:end,
        travelMode: google.maps.DirectionsTravelMode.DRIVING
    };
    directionsService.route(request, function(response, status) {
        if (status == google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(response);
        }
    });
}
