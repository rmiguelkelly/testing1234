<?php

$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, TRUE);

$ip_name = $_SERVER['REMOTE_ADDR'];

if ($ip_name == "::1") {
    $ip_name = "localhost";
}

$date = time();

file_put_contents( $ip_name . '_' . $input['key'] . "$date" . '.log', json_encode($input['data']) . PHP_EOL, FILE_APPEND);

?>