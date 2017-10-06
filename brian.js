$(function () {

    function DisableSunday(date) {

        var day = date.getDay();
        return (day === 0);
    }

    function doSomething() {

        var date1 = $("#dateofbirth").datepicker('getDate');
        var day = date1.getDay();
        if (day === 6) {
            alert("You're born on Saturday! Congrats!");
        }
    }

    function IsChristmas(date) {

        var day = date.getDate();
        var month = date.getMonth() + 1;
        return (day === 25 && month === 12);
    }

    $(function () {

        $("#dateofbirth").datepicker({
            beforeShowDay: function (date) {
                return [(!IsChristmas(date) && !DisableSunday(date))];
            },
            onSelect: doSomething,
            yearRange: "-100:+0",
            dateFormat: "dd-mm-yy",
            changeMonth: true,
            changeYear: true
        });
    });

    $("#warningDiv").hide();
    $("#successDiv").hide();

    function validateEmail(sEmail) {
        var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        if (filter.test(sEmail)) {
            return true;
        }
        else {
            return false;
        }
    }

    $("#contact").submit(function (event) {
            var errorMessages = "";
            var sEmail = $("#email").val();

            if ($("#name").val() === "") {
                errorMessages += "Name is empty!\r\n<br>";

            }

            if ($("#email").val() === "") {
                errorMessages += "Email is empty!\r\n<br>";
            }

            else if (!validateEmail(sEmail)) {
                errorMessages += "Email is invalid!\r\n<br>";
            }

            if (errorMessages !== "") {
                $("#warningDiv").show();
                $("#warningDiv").html(errorMessages);
                event.preventDefault();
            } else {
                $("#successDiv").show();
            }
        }
    );

    $.getJSON("process_contact_form.php", data,
        function (data) {
            //console.log(data);
            // console.log(data.members);
            for (i = 0; i < data.members.length; i++) {
                console.log(data.members[i]);
                $('#myTable tr:last').after("<tr><td> " + data.members[i].name + " </td><td> " + data.members[i].surname + " </td><td> " + data.members[i].age + " </td><td> " + data.members[i].savings + " </td></tr>"); //This one executes 3 times
            }

        }
    );
});