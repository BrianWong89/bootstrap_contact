<?php

require_once("vendor/autoload.php");

$data = json_decode(file_get_contents('php://input'), true);
print_r($data);
//$results = DB::query("SELECT * FROM `security`");
//$results = DB::query("SELECT * FROM `security` WHERE age BETWEEN %i AND %i", $("#maxAge").selectpicker('val', '30'), $("#maxAge").selectpicker('val', '90'));
//$results = DB::query("SELECT * FROM `security` WHERE ethnicity=%s AND age <=%i", $("#race").selectpicker('val', 'Chinese'), $("#maxAge").selectpicker('val', '80'));
//if ($data[''] == "Any Race") {
  //
//}

//Possible solution
//
if ($data['scenario'] == 1) {
    $results = DB::query("SELECT * FROM `security`");

} else if ($data    ) {
    $results = DB::query("SELECT * FROM `security`");

}
echo json_encode($results, JSON_PRETTY_PRINT);