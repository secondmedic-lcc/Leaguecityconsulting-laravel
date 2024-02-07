<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsController extends Controller
{

    public function index()
    {

        $page_name = "terms";

        $page_title = "terms";

        $current_page = "terms";

        return view('frontend/main', compact('page_name', 'page_title', 'current_page'));
    }
}
