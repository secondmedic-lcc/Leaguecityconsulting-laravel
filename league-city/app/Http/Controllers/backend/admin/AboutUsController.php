<?php

namespace App\Http\Controllers\backend\admin;

use App\Models\AboutUs;
use App\Models\SeoData;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AboutUsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function edit()
    {
        $page_name = "about_us";

        $page_title = "Manage About Us Page";

        $current_page = "about-us";

        $pageDetails = AboutUs::first();

        return view('backend/admin/main', compact('page_name', 'page_title', 'current_page', 'pageDetails'));
    }

    public function updateOrCreate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        // Prepare data for updateOrCreate
        $data = [
            'title' => $request->title,
            'description' => $request->description,
        ];
    
        // Handle Image Upload
        if ($request->hasFile('image')) {
            $imageName = time() . '-' . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/about_us'), $imageName);
            $data['image'] = "uploads/about_us/" . $imageName;
        }
    
        // Update or Create About Us record
        $aboutUs = AboutUs::updateOrCreate(['id' => 1], $data);
    
        if ($aboutUs) {
            // Store or Update SEO data
           
                [
                    'page_title' => $aboutUs->title,
                    'meta_keywords' => json_encode([$aboutUs->title, $aboutUs->description]),
                ];
            
    
            return redirect()->back()->with('success', 'About Us Page Updated Successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
    
}
