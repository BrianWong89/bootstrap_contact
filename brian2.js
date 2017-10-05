$(document).ready(function () {
    jQuery("#dateFrom").datepicker({
        dateFormat: 'dd/mm/yy',
        changeMonth: true,
        changeYear: true,
        maxDate: '0',
        onClose: function (selectedDate) {
            jQuery("#dateTo").datepicker("option", "minDate", selectedDate);
        }
    });
    jQuery("#dateTo").datepicker({
        dateFormat: 'dd/mm/yy',
        changeMonth: true,
        changeYear: true,
        maxDate: '0',
        onClose: function (selectedDate) {
            jQuery("#dateFrom").datepicker("option", "maxDate", selectedDate);
        }
    });
});

$.getJSON("enrolment.php?startDate=25-12-2017&endDate=25-12-2017", data,
    function (data) {
        //console.log(data);
        //console.log(data.members);
        for (i = 0; i < data.members.length; i++) {
            console.log(data.members[i]);
            $('#myTable tr:last').after("<tr><td>" + data.members[i].name + "</td><td>" + data.members[i].enrolmentDate + "</td></tr>");
        }
    }
);