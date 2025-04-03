<?php

    require_once('util/config.php');
    
    $inputJSON = file_get_contents('php://input');
    $input = json_decode($inputJSON, TRUE); //convert JSON into array

    $values = [
        'date' => date('Y-m-d H:i:s'),
        'ip' => $_SERVER['REMOTE_ADDR'],
        'path' => $_SERVER['REQUEST_URI'],
        'user-agent' => $_SERVER['HTTP_USER_AGENT'],
        'extra' => $input
    ];

    $ip_name = $_SERVER['REMOTE_ADDR'];

    if ($ip_name == "::1") {
        $ip_name = "localhost";
    }

    file_put_contents($ip_name, json_encode($values) . PHP_EOL, FILE_APPEND);
    file_put_contents(urlencode($ip_name) . '.log', json_encode($values) . PHP_EOL, FILE_APPEND);
?>