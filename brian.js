function DisableSunday(date) {

    var day = date.getDay();
    if (day === 0) {
        return [false];
    } else {
        return [true];
    }
}

function doSomething() {

    var date1 = $("#dateofbirth").datepicker('getDate');
    var day = date1.getDay();
    if (day === 6) {
        alert("You're born on Saturday! Congrats!");
    }
}

$(function () {

    $("#dateofbirth").datepicker({
        beforeShowDay: DisableSunday,
        onSelect: doSomething,
        yearRange: "-100:+0",
        dateFormat: "dd-mm-yy",
        changeMonth: true,
        changeYear: true
    });
});