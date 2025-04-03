
<?php

class Telemetry {

    public static function log($extra = NULL) {
        // $line = date('Y-m-d H:i:s') . " - $_SERVER[REMOTE_ADDR]" . " path: $_SERVER[REQUEST_URI]";

        $values = [
            'date' => date('Y-m-d H:i:s'),
            'ip' => $_SERVER['REMOTE_ADDR'],
            'path' => $_SERVER['REQUEST_URI'],
            'user-agent' => $_SERVER['HTTP_USER_AGENT'],
            'extra' => $extra
        ];

        $ip_name = $_SERVER['REMOTE_ADDR'];

        if ($ip_name == "::1") {
            $ip_name = "localhost";
        }

        file_put_contents('visitors.log', json_encode($values) . PHP_EOL, FILE_APPEND);
        file_put_contents(urlencode($ip_name) . '.log', json_encode($values) . PHP_EOL, FILE_APPEND);
    }

}

?>