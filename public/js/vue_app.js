/**
 * Created by Bless on 4/23/2017.
 */
Vue.component('locations', {
    template:'#locations-template',
    data: function () {
        return {
            // location1: [],
            locations: [],
            location_array: ''
        }
    },
    created: function () {
        this.getLocations();
        this.initMap();
    },
    methods: {
        getLocations: function () {
            var location_array = '';
            $.getJSON("/api/viewLocation", function (locations) {
                $.each(locations.runnerlocations, function(key, value) {
                    var arr=[value.user_id,value.lat,value.lng,value.event_id];
                    if (location_array==''){
                        location_array= "["+arr.toString()+"]," ;
                    }
                    else {
                        location_array= location_array+"["+arr.toString ()+"],";
                    }
                    $('#markers').val(location_array);

                });
                $('#markers').val(location_array);
                this.locations = locations.runnerlocations;
                // console.log(location_array);

            }.bind(this));

            setTimeout(this.getLocations, 1000);
        }
        // ,
        // initMap: function() {
        //     console.log("I'm In");
        //     var locations = this.location1;
        //
        //     var map = new google.maps.Map(document.getElementById('map'), {
        //         zoom: 10,
        //         center: new google.maps.LatLng(-33.92, 151.25),
        //         mapTypeId: google.maps.MapTypeId.ROADMAP
        //     });
        //
        //     var infowindow = new google.maps.InfoWindow();
        //
        //     var marker, i;
        //
        //     for (i = 0; i < locations.length; i++) {
        //         marker = new google.maps.Marker({
        //             position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        //             map: map
        //         });
        //
        //         google.maps.event.addListener(marker, 'click', (function(marker, i) {
        //             return function() {
        //                 infowindow.setContent(locations[i][0]);
        //                 infowindow.open(map, marker);
        //             }
        //         })(marker, i));
        //     }
        // }
    }

});
new Vue({
    el: '#app',
});