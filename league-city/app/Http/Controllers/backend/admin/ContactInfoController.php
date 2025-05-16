<?php

namespace App\Http\Controllers\backend\admin;

use App\Models\ContactInfo;
use App\Models\SocialLinks;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ContactInfoController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit()
    {
        $page_name = "contact-info/add-contact-info";
        $page_title = "Manage Contact Info";
        $current_page = "contact-info";

        $contactInfo = ContactInfo::first() ?? new ContactInfo(); // Fetch first record

        return view('backend/admin/main', compact('page_name', 'page_title', 'current_page', 'contactInfo'));
    }

    // Store or Update Contact Info
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'required|string',
            'email' => 'required|email',
            'address' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        ContactInfo::updateOrCreate(
            ['id' => 1], // Always update the first row
            [
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
            ]
        );

        return redirect()->back()->with('success', 'Contact information updated successfully!');
    }


    // Show the Social Links Edit Page

    public function add_social_links()
    {
        $page_name = 'contact-info/add-social-links';
        $page_title = 'Manage Social Links';
        $current_page = 'social-links';
        $links = SocialLinks::find(1); // Fetch first row

        return view('backend.admin.main', compact('page_name', 'page_title', 'current_page', 'links'));
    }

    public function updateSocialLinks(Request $request)
    {
        SocialLinks::updateOrCreate(
            ['id' => 1],
            [
                'facebook_url' => $request->input('facebook_url', ''),
                'twitter_url' => $request->input('twitter_url', ''),
                'linkedin_url' => $request->input('linkedin_url', ''),
                'instagram_url' => $request->input('instagram_url', ''), // Add this line
                'pinterest_url' => $request->input('pinterest_url', ''),   // Add this line
                'footer_message' => $request->input('footer_message', ''),
            ]
        );

        return redirect()->back()->with('success', 'Social links updated successfully!');
    }


}
