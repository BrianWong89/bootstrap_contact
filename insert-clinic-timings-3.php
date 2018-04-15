<?php
require(__DIR__."/vendor/autoload.php");

// Add in timings for all clinics from Monday to Sunday
for ($x=1; $x<=8; $x++) {
    echo "Clinic ID: ".$x."<br>";
    for ($i=1; $i<=7; $i++) {
        echo "Day: ".$i."<br>";
        $rows = array();
        $time = date_create('00:00:00');
        while(date_format($time, "H:i:s") != "23:59:59") {
            $hour = date_format($time, "H");
            $status = "";
            switch($hour) {
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
                    $status = "light";
                    break;
                case "06":
                    if ($i==2 || $i==3 || $i==4 || $i==6 || $i==7) {
                        $status = "light";
                        break;
                    }
                case "07":
                    if ($i==2 || $i==3 || $i==4 || $i==6 || $i==7) {
                        $status = "light";
                        break;
                    }
                case "08":
                case "09":
                case "21":
                case "22":
                case "23":
                    $status = "moderate";
                    break;
            }
            if (date_format($time, "H:i:s")=="00:00:00")
                $stTime = "00:00:00";
            else
                $stTime = date_format(date_modify($time,"+1 second"), "H:i:s");
            $rows[] = array(
                'outlet_id' => $x,
                'day' => $i,
                'status' => $status,
                'startTime' => $stTime,
                'endTime' => date_format(date_modify($time,"+3599 second"), "H:i:s"),
            );
        }
        DB::insert('outlet_timing', $rows);
    }
}