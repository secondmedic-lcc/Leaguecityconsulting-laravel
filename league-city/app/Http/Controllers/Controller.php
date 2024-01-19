<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
/* use App\Models\ServiceProvider; */

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function __construct(){ }

    public function index(){
        
        $page_name = "index";
        
        $page_title = "home";
        
        $current_page = "home";

        return view('frontend/main', compact('page_name','page_title','current_page'));
    }
}
