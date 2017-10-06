<?php
require("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
$mail = new PHPMailer();
//Enable SMTP debugging.
$mail->SMTPDebug = 2;
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "brian.alphis@gmail.com";
$mail->Password = "samada12";
$mail->SMTPSecure = "tls";
$mail->Port = 587;

$mail->setFrom('brian.alphis@gmail.com', 'Brian\'s Testing Email');
$mail->addAddress('darkness3nity@yahoo.com.sg', 'Brian Wong');
$mail->addAddress('kenneth@alphis.net', 'Kenneth Lee');
$name = $_POST['name'];
$dob = $_POST['dateofbirth'];
$email = $_POST['email'];
$message = $_POST['message'];
$mail->Body = nl2br("Name: " . $name . "\n Date of Birth: " . $dob . "\n Email Address: " . $email . "\n Message: " . $message . "");
$mail->IsHTML(true);
if (!$mail->send()) {
    echo 'Message was not sent.';
    echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent.';
}