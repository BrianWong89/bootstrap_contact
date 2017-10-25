var vm = new Vue({
    //Second thing, make sure you define the container or row as app
    el: '#app',
    //First thing, mounted here executes whatever commands you want when Vue.js has been loaded.
    mounted: function () {
    },
    data: {

    },
    created: function () {
        // `this` points to the vm instance

    },
    methods: {
        pressSearchBtn: function () {
            // GET /someUrl
            //$("#minAge").val(),
            this.$http.post('hospital_json.php'
            ).then(response = > {
                // success callback
                //console.log(response);
            }, response => {
                // error callback
            })
        }
    },
    watch: {
    }
});