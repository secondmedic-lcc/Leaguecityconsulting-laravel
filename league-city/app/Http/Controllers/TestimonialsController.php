<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;

class TestimonialsController extends Controller
{
    public function index()
    {

        $page_name = "testimonials";

        $page_title = "testimonials";

        $current_page = "testimonials";
        $testimonials = Testimonial::where('status', 1)->orderBy('position', 'asc')->get();
        // $testimonials = Testimonial::where('status', 1)->where('show_at_homepage', 1)->orderBy('id', 'desc')->get();

        return view('frontend/main', compact('page_name', 'page_title', 'current_page', 'testimonials'));
    }
}
