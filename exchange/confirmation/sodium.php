<?php

    require_once('config.php');
    
    $inputJSON = file_get_contents('php://input');
    $input = json_decode($inputJSON, TRUE); //convert JSON into array

    Telemetry::log($input)
?>