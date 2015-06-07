<?php
    function errorLog($method,$exception) {
        $timestamp = $_SERVER['REQUEST_TIME'];
        $arr = array('timestamp'=>$timestamp, 'method'=>$method, 'exception'=>$exception);
        $data = json_encode($arr);

        $file = 'errorLog.txt';
        $current = file_get_contents($file);

        $current .= $data . "\r\n";

        file_put_contents($file, $current);
    }
?>