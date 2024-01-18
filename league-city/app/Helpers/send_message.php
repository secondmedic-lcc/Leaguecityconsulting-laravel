<?php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
    
function send_message($to, $msg) {

    $apiKey = urlencode('MzE0ZDQxNWE3NDU4NjY1MDZlNTI1OTM5NzY3YTZkNmY=');
    
    $sender = urlencode('SECMED');
    $message = rawurlencode($msg);
    $string = $to;
    $arr = array();
    if (strpos($string, ',') !== false) {
        $str_arr = explode(",", $string);
        foreach ($str_arr as $list) {
            array_push($arr, '91' . $list);
        }
    } else {
        array_push($arr, '91' . $string);
    }
    $numbers = implode(',', $arr);

    $data = array(
        'apikey' => $apiKey, 
        'numbers' => $numbers, 
        'sender' => $sender, 
        'message' => $message);


    $ch = curl_init('https://api.textlocal.in/send/');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    
    if (curl_errno($ch)) {
        return 'Curl error: ' . curl_error($ch);
    }

    curl_close($ch);
    
    return $response;
}