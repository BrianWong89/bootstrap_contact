<?php
require("vendor/autoload.php");

$data = json_decode(file_get_contents('php://input'), true);

use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

$is_valid = GUMP::is_valid($data, array(
    'name' => 'required|valid_name',
    'email' => 'required|valid_email',
    'message' => 'required|alpha_space|max_len,500|min_len,10'
));

$return = array();

if ($is_valid === true) {

} else {
    $return['is_valid'] = $is_valid;
}

echo json_encode($return);