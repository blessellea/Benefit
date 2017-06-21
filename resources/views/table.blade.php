<html>
<head>

    <title>BeneFit.</title>
    <link rel="icon" type="image/png" href="/img/favicon.png">
    <style>
        #floating-panel {
            position: absolute;
            top: 10px;
            right: 2%;
            z-index: 5;
            background-color: #fff;
            padding: 5px;
            border: 1px solid #999;
            text-align: center;
            font-family: 'Roboto','sans-serif';
            line-height: 30px;
            padding-left: 10px;
        }
    </style>
</head>
<body>

<div id="map" style="height: 100%; width: 100%;">
</div>

<div id="app">
    <locations></locations>
</div>
<template id="locations-template">
    <div id="floating-panel">

        <table>
        {{--<h2>@{{ location.name }}</h2>--}}
            <thead>
            <tr>
                {{--<td>Marker</td>--}}
                <td style="color: darkblue;">Users</td>
                <td style="color: darkblue;">Events</td>
            </tr>
            </thead>
            <tbody>

            <tr v-for="location in locations">
                <td>@{{ location.fname }}</td>
                <td>@{{ location.name }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
<input type="hidden" id="markers">

<script src="/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="/js/vue_2.2.6.js"></script>
<script src="/js/vue_app.js"></script>
<script type="text/javascript">

    var s=$('#markers').val();
    //    console.log(s);
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 13,
            center: new google.maps.LatLng(10.2898, 123.8617),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });
    // Marker Color -> random
        var selecticon = ['http://maps.google.com/mapfiles/ms/icons/blue-dot.png',
                    'http://maps.google.com/mapfiles/ms/icons/purple-dot.png',
                    'http://maps.google.com/mapfiles/ms/icons/yellow-dot.png',
                    'http://maps.google.com/mapfiles/ms/icons/green-dot.png',
                    'http://maps.google.com/mapfiles/ms/icons/red-dot.png'
                    ];
        var marker, i;

        window.setInterval(function () {
            var string = $('#markers').val();
            string = string.slice(0, -1);

            var location = JSON.parse("[" + string + "]");

            for (i = 0; i < location.length; i++) {

                var icon = selecticon[i];
                var labels = location[i][0];
                var labelIndex = 0;
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(location[i][1],location[i][2]),
                    map: map,
                    label: labels[labelIndex++ % labels.length],
                    icon: icon
                });
                marker.setMap(map);

//                marker[i].setMap(null);

                var infowindow = new google.maps.InfoWindow();

                google.maps.event.addListener(marker, 'click', (function (marker, i) {
                    return function () {
                        infowindow.setContent(location[i][0]);
                        infowindow.open(map, marker);
                    }

                })(marker, i));
            }

        },5000);


    }

</script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBb7JDTKmm90ZD5snQN8OIZvaEoBq86ka8&callback=initMap" type="text/javascript"></script>

</body>
</html>