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
    },
    methods: {
        getLocations: function () {
            var location_array = '';
            var api= "/api" + window.location.pathname;
            $.getJSON(api, function (locations) {
                $.each(locations.runnerlocations, function(key, value) {
                    var arr=['"'+ value.fname +'"' ,value.lat, value.lng, '"'+ value.name+'"'];
                    if (location_array==''){
                        location_array= "["+arr.toString()+"]," ;
                    }
                    else {
                        location_array= location_array+"["+arr.toString()+"],";
                    }

                    // $('#markers').val(location_array);

                });
                $('#markers').val(location_array);
                this.locations = locations.runnerlocations;


            }.bind(this));

            setTimeout(this.getLocations, 1000);
        }
    }

});
new Vue({
    el: '#app',
});