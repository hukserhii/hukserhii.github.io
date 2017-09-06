'use strict';

jQuery(document).ready(function($){
    var latitude = 48.4664262,
        longitude = 35.0487849,
        map_zoom = 14;


    var is_internetExplorer11= navigator.userAgent.toLowerCase().indexOf('trident') > -1;
    var marker_url = ( is_internetExplorer11 ) ? 'images/viaron-map.png' : 'images/viaron-map.png';

    var main_color = '#f7f8fa',
        saturation_value= -70,
        brightness_value= 40;

    var style= [{"stylers":[{"hue":"#243444"},{"saturation":250}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":50},{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]}];

    var map_options = {
        center: new google.maps.LatLng(48.475992, 35.056490),
        zoom: map_zoom,
        panControl: false,
        zoomControl: true,
        mapTypeControl: false,
        streetViewControl: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false,
        styles: style
    };

    var map = new google.maps.Map(document.getElementById('viaron'), map_options);

    var contentString = '<div id="content">'+
        '<div id="siteNotice">'+
        '</div>'+
        '<h3 id="firstHeading" class="firstHeading">г. Днепр, ТРЦ "КУБОМЕТР"</h3>'+
        '<div id="bodyContent">'+
        '<p>ул. Харьковская, 15</p>'+
        '</div>'+
        '</div>';

    var contentStringTwo = '<div id="content">'+
        '<div id="siteNotice">'+
        '</div>'+
        '<h3 id="firstHeading" class="firstHeading">г. Днепр, ТРЦ "ВАВИЛОН"</h3>'+
        '<div id="bodyContent">'+
        '<p>ж/м Солнечный, ул. Маршала Малиновского, 2</p>'+
        '</div>'+
        '</div>';

    var infowindow = new google.maps.InfoWindow({
        content: contentString,
        maxWidth: 400
    });

    var infowindowTwo = new google.maps.InfoWindow({
        content: contentStringTwo,
        maxWidth: 400
    });

    //add a custom marker to the map
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(latitude, longitude),
        map: map,
        visible: true,
        icon: marker_url
    });

    var markerTwo = new google.maps.Marker({
        position: {lat: 48.484046, lng: 35.064699},
        map: map,
        visible: true,
        icon: marker_url
    });

    marker.addListener('click', function() {
        infowindow.open(map, marker);
    });
    markerTwo.addListener('click', function() {
        infowindowTwo.open(map, markerTwo);
    });
});