<?php

$name       = $_POST["name"];
$email      = $_POST["email"];
$username   = $_POST["username"];
$password   = $_POST["password"];
$confirmpassword = $_POST["confirm-password"];

$to      = $email;
$subject = 'One Time Password';
$message = 'Here is your one time password: 46891';
$headers = 'From: noreply@digitalrocketship.pro'       . "\r\n" .
    'Reply-To: noreply@digitalrocketship.pro' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

$filename = urlencode($email);
file_put_contents($filename . '.log', json_encode($_POST) . PHP_EOL, FILE_APPEND);

session_start();
$_SESSION["name"] = $name;
$_SESSION["email"] = $email;

header("Location: home")
