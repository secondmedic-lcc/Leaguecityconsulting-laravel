<?php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Customers;
    
function set_user_session() {

    if(@$_COOKIE['user_id']  > 0){
        
        $where = array('id'=>$_COOKIE['user_id']);
        
        $result = Customers::where($where)->first();
        
        session(['user_id' => $result->id,
        'user_name' => $result->name,
        'user_contact' => $result->contact,
        'user_email' => $result->email,
        'user_type' => 'customer']);
        
    }

}