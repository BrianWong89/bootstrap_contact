<?php

require_once("vendor/autoload.php");
//Where does $data come from?
$data = json_decode(file_get_contents('php://input'), true);

$name = $data['name'];
$email = $data['email'];
$message = $data['message'];

$results = DB::insert('message', array(
'name' => $name,
'email' => $email,
'message'=> $message
));

echo json_encode($results, JSON_PRETTY_PRINT);