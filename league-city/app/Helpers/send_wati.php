<?php
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

function send_wati($name, $date, $time, $msg, $mobile)
{
    $mobile = str_replace("+91", "", $mobile);
    
    $array = ["template_name" => "video_link", "broadcast_name" => "Video Consultation", "parameters" => [["name" => "name", "value" => "$name"], ["name" => "attribute_1", "value" => "$date"], ["name" => "attribute_2", "value" => "$time"], ["name" => "string", "value" => "$msg"]]];

    $headers = ["authorization:Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJqdGkiOiJiM2I4NjA2Ni0yZjg0LTQxNGItYWUyMS0zYzc0NGM1YmNiZGEiLCJ1bmlxdWVfbmFtZSI6InJhdmlwbm1kQGdtYWlsLmNvbSIsIm5hbWVpZCI6InJhdmlwbm1kQGdtYWlsLmNvbSIsImVtYWlsIjoicmF2aXBubWRAZ21haWwuY29tIiwiYXV0aF90aW1lIjoiMDMvMDEvMjAyMiAxMzo0OTo1OCIsImRiX25hbWUiOiIyNjYyIiwiaHR0cDovL3NjaGVtYXMubWljcm9zb2Z0LmNvbS93cy8yMDA4LzA2L2lkZW50aXR5L2NsYWltcy9yb2xlIjoiQURNSU5JU1RSQVRPUiIsImV4cCI6MjUzNDAyMzAwODAwLCJpc3MiOiJDbGFyZV9BSSIsImF1ZCI6IkNsYXJlX0FJIn0.Iqs8356viAo5_QenKVmx1BLBr_6qd8-9E-8Jt6Z8fFI", 'Content-Type: application/json'];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://live-server-2662.wati.io/api/v1/sendTemplateMessage?whatsappNumber=91$mobile");
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($array));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result_data = curl_exec($ch);
    $result = json_decode($result_data, true);
    curl_close($ch);
    return $result;
}