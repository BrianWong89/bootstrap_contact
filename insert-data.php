<?php

require_once("vendor/autoload.php");

DB::insert('guest', array(
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'website' => $_POST['website'],
    'image' => $_POST['file'],
    'resume' => $_POST['resume'],
    'comments' => $_POST['comments']
));