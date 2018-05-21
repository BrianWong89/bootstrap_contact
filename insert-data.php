<?php

require_once("vendor/autoload.php");

DB::insert('guest', array(
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'website' => $_POST['website'],
    'comments' => $_POST['comments']
));