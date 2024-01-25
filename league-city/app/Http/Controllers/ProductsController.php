<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {

        $page_name = "products";

        $page_title = "products";

        $current_page = "products";

        return view('frontend/main', compact('page_name', 'page_title', 'current_page'));
    }
}
