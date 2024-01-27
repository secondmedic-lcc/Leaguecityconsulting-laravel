<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index()
    {

        $page_name = "blogs";

        $page_title = "blogs";

        $current_page = "blogs";

        return view('frontend/main', compact('page_name', 'page_title', 'current_page'));
    }
}
