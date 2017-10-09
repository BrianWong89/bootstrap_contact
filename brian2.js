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

    $("#searchBtn").click(function () {
        $("#myTable tbody").empty();
        var jsonData = {
            "startDate": $("#dateFrom").val(),
            "endDate": $("#dateTo").val()
        };
        $.getJSON("enrolment_sql.php", jsonData,
            function (data) {
                //console.log(data);
                //console.log(data.members);
                for (i = 0; i < data.length; i++) {
                    console.log(data[i]);
                    $('#myTable tbody').append("<tr><td>" + data[i].name + "</td><td>" + data[i].enrolmentDate + "</td></tr>");
                }
            });
    });
});