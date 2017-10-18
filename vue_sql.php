<?php

require_once("vendor/autoload.php");

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];

$results = DB::insert('message', array(
'name' => $name,
'email' => $email,
'message'=> $message
));

echo json_encode($results, JSON_PRETTY_PRINT);