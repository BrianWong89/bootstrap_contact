$(document).ready(function () {
    $("#dateFrom").datepicker({
        dateFormat: 'dd/mm/yy',
        changeMonth: true,
        changeYear: true,
        maxDate: '0',
        onClose: function (selectedDate) {
            $("#dateTo").datepicker("option", "minDate", selectedDate);
        }
    });
    $("#dateTo").datepicker({
        dateFormat: 'dd/mm/yy',
        changeMonth: true,
        changeYear: true,
        maxDate: '0',
        onClose: function (selectedDate) {
            $("#dateFrom").datepicker("option", "maxDate", selectedDate);
        }
    });
});

var vm = new Vue({
    //Second thing, make sure you define the container or row as app
    el: '#app',
    //First thing, mounted here executes whatever commands you want when Vue.js has been loaded.
    mounted: function () {
        // GET /someUrl
        this.$http.get('mail.php').then(response => {
            // success callback
        }, response => {
            // error callback
        });
    },
    data: {
        name: "",
        dateOfBirth: "",
        email: "",
        message: "",
        showWarningMessage: false,
        showSuccessMessage: false,
        showTable: false,
        members: [
            {"name": "Brian", "age": 25},
            {"name": "Kenneth", "age": 30}
        ],
        errorMessages: [

        ]
    },
    created: function () {
        // `this` points to the vm instance
    },
    methods: {
        pressSubmitBtn1: function () {
            this.showTable = true;
        },
        pressSubmitBtn2: function () {
            this.showTable = false;
        },
        pressSubmitBtn3: function () {
            this.members = [
                {"name": "Mollie", "age": 52},
                {"name": "Isiah", "age": 55}
            ];
        },
        pressSubmitBtn: function () {
            // GET /someUrl
            var post_fields = {
                "name":$("#name").val(),
                "email":$("#email").val(),
                "message":$("#message").val()
            };
            this.$http.post('mail.php',
                post_fields
                ).then(response => {
                // success callback
                console.log(response);
                if (response.data.is_valid == null){
                    this.showSuccessMessage = true;
                    this.showWarningMessage = false;
                } else {
                    this.showWarningMessage = true;
                    this.errorMessages = response.data.is_valid;
                    this.showSuccessMessage = false;
                }
            }, response => {
                // error callback
            })
        }
    },
    watch: {
        showSuccessMessage: function (value) {
            alert("Show Success Message has been changed to " + value);
        },
        name: function (value) {
            alert("Name has been changed to " + value);
        }
    }
});