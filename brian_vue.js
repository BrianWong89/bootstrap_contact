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
        //alert("Vue.js has been loaded");

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
    },
    created: function () {
        // `this` points to the vm instance
    },
    methods: {
        pressSubmitBtn: function () {
            this.showSuccessMessage = true;
        },
        pressSubmitBtn1: function () {
            this.showTable = true;
        },
        pressSubmitBtn2: function () {
            this.showTable = false;
        }

    },
    watch: {
        showSuccessMessage: function (value) {
            alert("Show Success Message has been changed to " + value);
        },
        name: function (value) {
            alert("Name has been changed to " + value);
        }

    },
});

$