<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{

    public function index()
    {

        $page_name = "privacypolicy";

        $page_title = "privacypolicy";

        $current_page = "privacypolicy";

        return view('frontend/main', compact('page_name', 'page_title', 'current_page'));
    }
}
