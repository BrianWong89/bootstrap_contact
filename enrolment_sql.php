<?php

require_once("vendor/autoload.php");
//print_r($_REQUEST);
$startDateObj = DateTime::createFromFormat("d/m/Y", $_REQUEST['startDate']);
$startDateObj->format('Y-m-d'); //Convert 27/12/2017 --> 2017-12-27
$endDateObj = DateTime::createFromFormat("d/m/Y", $_REQUEST['endDate']);
$endDateObj->format('Y-m-d'); //Showing the date object, in the string format that you want (2017-12-27)
//DB::debugMode();
//print_r($_REQUEST);
date_default_timezone_set('Asia/Singapore');
$results = DB::query("SELECT * FROM `enrolment` WHERE enrolmentDate BETWEEN %s AND %s", $startDateObj->format('Y-m-d'), $endDateObj->format('Y-m-d'));
$results2 = DB::insert('requests', array(
    'startDate' => $startDateObj->format('Y-m-d'),
    'endDate' => $endDateObj->format('Y-m-d'),
    'dateTime' => date('Y-m-d H:i:s')
));
//Mysql Format: 2017-12-27
//Javascript Format: 27/12/2017
//Convert 27/12/2017 --> 2017-12-27
//Best way to do this:
//1) Create a Date object
//2) Use the Date object's format method, to change it to 2017-12-27

echo json_encode($results, $results2, JSON_PRETTY_PRINT);