
<?php

include_once 'chat.php';

$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, TRUE);

$key = $input['key'];
$value = $input['value'];

$ip_name = $_SERVER['REMOTE_ADDR'];

if ($ip_name == "::1") {
    $ip_name = "localhost";
}

$key = $input['key'];
$value = $input['value'];
$ip = get_ip();

send_message($ip);
send_message($key);
send_message($value);

?>