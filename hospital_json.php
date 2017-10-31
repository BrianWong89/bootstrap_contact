<?php

require_once("vendor/autoload.php");

$data = json_decode(file_get_contents('php://input'), true);
DB::debugMode();
print_r($data);
//$results = DB::query("SELECT * FROM `security`");
//$results = DB::query("SELECT * FROM `security` WHERE age BETWEEN %i AND %i", $("#minAge").val(), $("#maxAge").val());
//$results = DB::query("SELECT * FROM `security` WHERE ethnicity=%s AND age <=%i", $("#race").val(), $("#maxAge").val());
if ($data['race'] == "Any Race" && $data['minAge'] == "Any Age" && $data['maxAge'] == "Any Age") {
    $results = DB::query("SELECT * FROM `security`");
}
if ($data['race'] != "Any Race" && $data['minAge'] != "Any Age" && $data['maxAge'] != "Any Age") {
    $results = DB::query("SELECT * FROM `security` WHERE age BETWEEN %i AND %i", $data['minAge'], $data['maxAge']);
}
if ($data['race'] != "Any Race" && $data['minAge'] != "Any Age" && $data['maxAge'] != "Any Age") {
    $results = DB::query("SELECT * FROM `security` WHERE ethnicity=%s AND age <=%i", $data['race'], $data['maxAge']);
}

echo json_encode($results, JSON_PRETTY_PRINT);