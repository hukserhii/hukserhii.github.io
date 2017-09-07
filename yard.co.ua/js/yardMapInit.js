 google.maps.event.addDomListener(window, 'load', init);
        var map;


        function init() {
            var mapOptions = {
                center: new google.maps.LatLng(48.458195, 35.054751),
                zoom: 17,
                zoomControl: true,
                zoomControlOptions: {
                    style: google.maps.ZoomControlStyle.LARGE
                },
                disableDoubleClickZoom: true,
                mapTypeControl: false,
                scaleControl: true,
                scrollwheel: false,
                panControl: false,
                streetViewControl: true,
                draggable: true,
                overviewMapControl: true,
                overviewMapControlOptions: {
                    opened: false
                },
                 mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var mapElement = document.getElementById('Yard_design');
            var map = new google.maps.Map(mapElement, mapOptions);
            var locations = [
['Yard', 'undefined', 'undefined', 'undefined', 'undefined', 48.45803249999999, 35.05465049999998, 'img/icons/yard-map.png']
        ];
            for (i = 0; i < locations.length; i++) {
                if (locations[i][1] == 'undefined') {
                    description = '';
                } else {
                    description = locations[i][1];
                }
                if (locations[i][2] == 'undefined') {
                    telephone = '+38 056 788 65 63';
                } else {
                    telephone = locations[i][2];
                }
                if (locations[i][3] == 'undefined') {
                    email = '';
                } else {
                    email = locations[i][3];
                }
                if (locations[i][4] == 'undefined') {
                    web = '';
                } else {
                    web = locations[i][4];
                }
                if (locations[i][7] == 'undefined') {
                    markericon = '';
                } else {
                    markericon = locations[i][7];
                }
                marker = new google.maps.Marker({
                    icon: markericon,
                    position: new google.maps.LatLng(locations[i][5], locations[i][6]),
                    map: map,
                    title: locations[i][0],
                    desc: description,
                    tel: telephone,
                    email: email,
                    web: web
                });
                link = '';
            }
            var styles = [{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#e0efef"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"hue":"#1900ff"},{"color":"#c0e8e8"}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"visibility":"on"},{"lightness":700}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#00bfa5"}]}];

            map.setOptions({styles: styles});

        }
