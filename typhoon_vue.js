var vm = new Vue({
    //Second thing, make sure you define the container or row as app
    el: '#app',
    //First thing, mounted here executes whatever commands you want when Vue.js has been loaded.
    mounted: function () {
        // GET /someUrl
        this.$http.get('weather.php').then(response => {
            // success callback
        }, response => {
            // error callback
        });
    },
    data: {
        showWarningMessage: false,
        showTyphoonImage: false,
        currentTemperature: [

        ]
    },
    created: function () {
        // `this` points to the vm instance
        this.typhoonAlert();
        this.timer = setInterval(this.typhoonAlert, 10000)
    },
    methods: {
        typhoonAlert: function () {
            // GET /someUrl
            this.$http.post('weather.php'
            ).then(response => {
                // success callback
                //console.log(response);
                this.currentTemperature = response.body.temperature;
            if (response.body.typhoonAlert === true){
                this.showTyphoonImage = true;
            } else {
                this.showTyphoonImage = false;
            }
        }, response => {
                // error callback
            })
        }
    },
    watch: {
    }
});