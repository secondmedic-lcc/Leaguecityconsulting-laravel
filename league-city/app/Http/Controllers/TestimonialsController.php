<?php

namespace App\Http\Controllers;

class TestimonialsController extends Controller
{
    public function index()
    {

        $page_name = "testimonials";

        $page_title = "testimonials";

        $current_page = "testimonials";

        return view('frontend/main', compact('page_name', 'page_title', 'current_page'));
    }
}
