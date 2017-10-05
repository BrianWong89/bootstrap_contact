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