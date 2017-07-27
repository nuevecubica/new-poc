<?php
$pagename = "Google Maps API Js";
include_once('../../poc_header.php');
?>
<style>
    #map {
        width: 100%;
        height: 500px;
        /*        filter: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg"><filter id="g"><feColorMatrix type="matrix" values="0.3 0.3 0.3 0 0 0.3 0.3 0.3 0 0 0.3 0.3 0.3 0 0 0 0 0 1 0"/></filter></svg>#g');
                -webkit-filter: grayscale(100%);
                filter: grayscale(100%);
                filter: progid:DXImageTransform.Microsoft.BasicImage(grayScale=1);*/
    }

    .infowindow {
        color: black;
    }
</style>
<div class="app-holder">
    <article>
        <h2>Embed Google Maps API Multiple Markers</h2>
        <main>
            <div id="map"></div>
        </main>
        <div class="spacer"></div>
        <h2>HTML</h2>
        <pre>
            <code class="html">
                &lt;div id="map"&gt;&lt;/div&gt;
                &lt;script&gt;
                //loading script
                &lt;script src='https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY=initMap' async defer&gt;&lt;/script&gt;
            </code>
        </pre>
        <div class="spacer"></div>
        <h2>Script</h2>
        <pre>
            <code class="js">

function initMap() {
var locations = [
['Torre Mayor', 19.424172, -99.1777447, "Av. Reforma 505, piso 51 Col. Cuauhtémoc 06500, Ciudad de México", "Lunes - Viernes"],
['Torre Diana', 19.4265043, -99.1742066, "Río Lerma 232, piso 7 (Sky Lobby) Col. Cuauhtémoc 06500, Ciudad de México", "Sabados"],
['Trading Room', 19.3245633, -99.2567895, 'Av. de las Torres No. 131, Alvaro Obregón, Olivar de los Padres, Torres de potrero, 01780 CDMX', 'Lunes - Sabado']

];

var imageIcon = {
url: '/assets/img/target_googlemaps.png',
size: new google.maps.Size(77, 50),
scaledSize: new google.maps.Size(77, 50),
labelOrigin: new google.maps.Point(9, -12),
};

var infowindow = new google.maps.InfoWindow(
{
size: new google.maps.Size(150, 50)
});

// Create a map object and specify the DOM element for display.
var map = new google.maps.Map(document.getElementById('map'), {
scrollwheel: true,
});


var bounds = new google.maps.LatLngBounds();

function setMarkers(map, locations) {
// Add markers to the map
for (var i = 0; i &lt; locations.length; i++) {
var sede = locations[i];
var myLatLng = new google.maps.LatLng(sede[1], sede[2]);
var marker = createMarker(map, myLatLng, sede[0], sede[3], sede[4]);
}
}

//--------------
function createMarker(map, latlng, label, direccion, horario) {
var contentString = '&lt;div class="infowindow"&gt;&lt;b&gt;' + label + '&lt;/b&gt;&lt;br&gt;&lt;p&gt;' + direccion + '&lt;/p&gt;&lt;p&gt;' + horario + '&lt;/p&gt;&lt;/div&gt;';
var marker = new google.maps.Marker({
position: latlng,
map: map,
icon: imageIcon,
title: label,
text: direccion,
horario: horario,
zIndex: Math.round(latlng.lat() * -100000) &lt;&lt; 5
});

bounds.extend(marker.position);

google.maps.event.addListener(marker, 'click', function () {
infowindow.setContent(contentString);
infowindow.open(map, marker);

return function () {
infowindow.setContent(locations[i][0]);
infowindow.open(map, marker);
}

});
}

setMarkers(map, locations);

map.fitBounds(bounds);
map.panToBounds(bounds);

var listener = google.maps.event.addListener(map, "idle", function () {
//map.setZoom(14);
google.maps.event.removeListener(listener);
});
}
            </code>
        </pre>
    </article>
</div>
<?php
include_once('../../poc_footer.php')
?>
<script>
    function initMap() {
        var locations = [
            ['Torre Mayor', 19.424172, -99.1777447, "Av. Reforma 505, piso 51 Col. Cuauhtémoc 06500, Ciudad de México", "Lunes - Viernes"],
           ['Torre Diana', 19.4265043, -99.1742066, "Río Lerma 232, piso 7 (Sky Lobby) Col. Cuauhtémoc 06500, Ciudad de México", "Sabados"],
            ['Trading Room', 19.3245633, -99.2567895, 'Av. de las Torres No. 131, Alvaro Obregón, Olivar de los Padres, Torres de potrero, 01780 CDMX', 'Lunes - Sabado']
        ];

        var imageIcon = {
            url: '/assets/img/target_googlemaps.png',
            size: new google.maps.Size(77, 50),
            scaledSize: new google.maps.Size(77, 50),
            labelOrigin: new google.maps.Point(9, -12),
        };

        var infowindow = new google.maps.InfoWindow(
            {
                size: new google.maps.Size(150, 50)
            });

        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
            scrollwheel: false,
        });


        var bounds = new google.maps.LatLngBounds();

        function setMarkers(map, locations) {
            // Add markers to the map
            for (var i = 0; i < locations.length; i++) {
                var sede = locations[i];
                var myLatLng = new google.maps.LatLng(sede[1], sede[2]);
                var marker = createMarker(map, myLatLng, sede[0], sede[3], sede[4]);
            }
        }

        //--------------
        function createMarker(map, latlng, label, direccion, horario) {
            var contentString = '<div class="infowindow"><b>' + label + '</b><br><p>' + direccion + '</p><p>' + horario + '</p></div>';
            var marker = new google.maps.Marker({
                position: latlng,
                map: map,
                icon: imageIcon,
                title: label,
                text: direccion,
                horario: horario,
                zIndex: Math.round(latlng.lat() * -100000) << 5
            });

            bounds.extend(marker.position);

            google.maps.event.addListener(marker, 'click', function () {
                infowindow.setContent(contentString);
                infowindow.open(map, marker);

                return function () {
                    infowindow.setContent(locations[i][0]);
                    infowindow.open(map, marker);
                }

            });
        }

        setMarkers(map, locations);

        map.fitBounds(bounds);
        map.panToBounds(bounds);

        var listener = google.maps.event.addListener(map, "idle", function () {

            if (locations.length > 1) {
            } else {
                map.setZoom(16);
            }

            google.maps.event.removeListener(listener);
        });


    }

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUifmC1LAVX3NuMTnesNX8lbLEUqjNIcQ&callback=initMap" async
        defer></script>
<script>
    $(document).ready(function () {
        $('pre code').each(function (i, block) {
            hljs.highlightBlock(block);
        });
    });
</script>

