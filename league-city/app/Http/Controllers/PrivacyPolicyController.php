<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebsiteBanners;

class PrivacyPolicyController extends Controller
{

    public function index()
    {

        $page_name = "privacypolicy";

        $page_title = "Privacy Policy";

        $current_page = "privacy-policy";

        $web_banner = WebsiteBanners::where(array('status'=>1,'page_name'=>$current_page))->orderBy('id','desc')->get()->first();

        return view('frontend/main', compact('page_name', 'page_title', 'current_page','web_banner'));
    }
}
