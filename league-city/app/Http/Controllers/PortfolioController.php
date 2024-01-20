<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {

        $page_name = "portfolio";

        $page_title = "portfolio";

        $current_page = "portfolio";

        return view('frontend/main', compact('page_name', 'page_title', 'current_page'));
    }
}
