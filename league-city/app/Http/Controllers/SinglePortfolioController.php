<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinglePortfolioController extends Controller
{
    public function index()
    {

        $page_name = "singleportfolio";

        $page_title = "singleportfolio";

        $current_page = "singleportfolio";

        return view('frontend/main', compact('page_name', 'page_title', 'current_page'));
    }
}
