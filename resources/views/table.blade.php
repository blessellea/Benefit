@extends('layout')
@section('content')
    <div id="map" style="height: 700px; width: 1200px;">

    </div>

    <div id="app">
        <locations></locations>
    </div>
    <template id="locations-template">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <td>ID</td>
                <td>Event ID</td>
                <td>User ID</td>
                <td>Latitude</td>
                <td>Longitude</td>

            </tr>
            </thead>
            <tbody>

            <tr v-for="location in locations">
                <td>@{{ location.id }}</td>
                <td>@{{ location.event_id }}</td>
                <td>@{{ location.user_id }}</td>
                <td>@{{ location.lat }}</td>
                <td>@{{ location.lng }}</td>
            </tr>
            </tbody>
        </table>
    </template>
    <input type="hidden" id="markers">
    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="js/vue_2.2.6.js"></script>
    <script src="js/vue_app.js"></script>
    <script type="text/javascript">

        var s=$('#markers').val();
        //    console.log(s);
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 17,
                center: new google.maps.LatLng(10.2898, 123.8617),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });
            var image = 'img/favicon.png';
            var infowindow = new google.maps.InfoWindow();

            var marker, i;console.log(location);
            window.setInterval(function () {
                var string = $('#markers').val();
                string = string.slice(0, -1);
                console.log(string);
                var location = JSON.parse("[" + string + "]");
                for (i = 0; i < location.length; i++) {
//                    if(i > location.length){
//                        location[i].setMap(map);
//                        console.log(location.length);
//                    }

                    var Latlng_0 = new google.maps.LatLng(location[i][1] , location[i][2]);
                    marker = new google.maps.Marker({
                        position: Latlng_0,
                        title: 'user     1',
//                        icon: image,
                        map: map
                    });

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

@endsection