<?php
require_once("vendor/autoload.php");

/* PHP homework 7 Apr  2018 */

// Question b: Add in all the timings for Bedok Clinic for Monday
$rows = array();

// For Start Time
$start1 = new DateTime("00:00:00");
$start2   = new DateTime("23:00:00");

// For End Time
$end1 = new DateTime("00:59:59");
$end2   = new DateTime("23:59:59");

$interval = DateInterval::createFromDateString('1 hour');

$time1 = new DatePeriod($start1, $interval, $end1);
$time2 = new DatePeriod($start2, $interval, $end2);

foreach ($times as $time) {
    $rows[] = array(
        'outlet_id' => 1,
        'day' => 1,
        'status' => 'testing',
        'startTime' =>  $time1->add($interval)->format('H:i:s'),
        'endTime' => $time2->add($interval)->format('H:i:s'),
    );
}

DB::insert('outlet_timing', $rows);