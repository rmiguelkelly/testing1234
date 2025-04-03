<?php


function send_message($message)
{
    $botToken = '7808093823:AAHN5yTlK6OH05mDnODdn3H1zQUpB3I49OA';
    $chatId = '8022130214';

    // Telegram API URL
    $url = "https://api.telegram.org/bot{$botToken}/sendMessage?chat_id={$chatId}&text={$message}";

    // Send request
    $response = file_get_contents($url);
}

function retrieve_ip_details($ip)
{
    $url = "https://ipwho.is/{$ip}";

    $response = file_get_contents($url);
    $data = json_decode($response, true);

    if ($data['success']) {
        $message = '';
        $message .= "IP: {$data['ip']}\n";
        $message .= "Country: {$data['country']}\n";
        $message .= "Region: {$data['region']}\n";
        $message .= "City: {$data['city']}\n";
        $message .= "ISP: {$data['connection']['isp']}\n";
        return $message;
    } else {
        return "Error getting ip details for {$ip}";
    }
}

function get_ip()
{
    $ip_name = $_SERVER['REMOTE_ADDR'];

    if ($ip_name == "::1") {
        $ip_name = "localhost";
    }

    return $ip_name;
}
