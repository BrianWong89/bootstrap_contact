<?php

require_once("vendor/autoload.php");

$data = json_decode(file_get_contents('php://input'), true);

$results = DB::query("SELECT * FROM `security`");
//$results = DB::query("SELECT * FROM `security` WHERE age BETWEEN %i AND %i", 30, 90);
//$results = DB::query("SELECT * FROM `security` WHERE ethnicity=%s AND age <=%i", $("#race").selectpicker('val', 'Chinese'), 80);

echo json_encode($results, JSON_PRETTY_PRINT);