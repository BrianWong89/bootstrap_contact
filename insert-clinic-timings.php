<?php
require_once("vendor/autoload.php");

$rows = array();
for ($i = 1; $i < 9; $i++) {
    $rows[] = array(
        'outlet_id' => 1,
    );
    for ($i = 1; $i < 8; $i++) {
        $rows[] = array(
            'day' => 1,
        );
    }
    for ($i = 1; $i < 8; $i++) {
        $rows[] = array(
            'startTime' => 1,
            'endTime' => 2,
        );
    }
}

DB::insert('outlet_timings', $rows);