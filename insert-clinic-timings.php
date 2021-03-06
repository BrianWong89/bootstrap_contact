<?php
require("vendor/autoload.php");

// Add in timings for Bedok clinic for Monday.
$rows = array();
$timeStamp = date_create('00:00:00');
while (date_format($timeStamp, "H:i:s") < "23:59:59") {
    $hr = date_format($timeStamp, "H");
    $clinicStatus = "";
    switch ($hr) {
        case "00":
        case "01":
        case "02":
        case "03":
        case "04":
        case "05":
        case "10":
        case "11":
        case "12":
        case "13":
        case "14":
        case "15":
        case "16":
        case "17":
        case "18":
        case "19":
        case "20":
            $clinicStatus = "Light";
            break;
        case "06":
        case "07":
        case "08":
        case "09":
        case "21":
        case "22":
        case "23":
            $clinicStatus = "Moderate";
            break;
    }
    if (date_format($timeStamp, "H:i:s") === "00:00:00")
        $startTime = "00:00:00";
    else
        $startTime = date_format(date_modify($timeStamp, "+1 second"), "H:i:s");
    $rows[] = array(
        'outlet_id' => 1,
        'day' => 1,
        'status' => $clinicStatus,
        'startTime' => $startTime,
        'endTime' => date_format(date_modify($timeStamp, "+3599 second"), "H:i:s"),
    );
    $color = "";
    if ($clinicStatus == "Light") {
        $color = "#008000";
    } else {
        $color = "#FFA500";
    }
    echo "Status for Bedok Clinic on Monday from " . $startTime . " to " . date_format($timeStamp, "H:i:s") . " is <span style='color: $color'><strong>" . $clinicStatus . "</strong></span>.<br>";
}
DB::insert('outlet_timing', $rows);