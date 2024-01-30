<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleBlogController extends Controller
{
    public function index()
    {

        $page_name = "singleblog";

        $page_title = "singleblog";

        $current_page = "singleblog";

        return view('frontend/main', compact('page_name', 'page_title', 'current_page'));
    }
}
