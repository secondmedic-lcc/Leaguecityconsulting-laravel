<?php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

function encrypt_data($password) {
    $CI = get_instance();
    $encryption_key = base64_decode("ShowCrisil#@2020");
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
    $encrypted = openssl_encrypt($password, 'aes-256-cbc', $encryption_key, 0, $iv);
    return base64_encode($encrypted . '::' . $iv);
}

function decrypt_data($password) {
    $CI = get_instance();
    $encryption_key = base64_decode("ShowCrisil#@2020");
    list($encrypted_data, $iv) = explode('::', base64_decode($password), 2);
    return openssl_decrypt($encrypted_data, 'aes-256-cbc', $encryption_key, 0, $iv);
}