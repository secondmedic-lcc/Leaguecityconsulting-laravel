<?php

namespace App\Http\Controllers\backend\admin;


use Illuminate\Http\Request;
use App\Models\PrivacyPolicy;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PrivacyPolicyController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit()
    {
        $page_name = "policy/privacy-policy";
        $page_title = "Manage Privacy Policy";
        $current_page = "privacy-policy";

        $privacy = PrivacyPolicy::first();

        return view('backend.admin.main', compact('page_name', 'page_title', 'current_page', 'privacy'));
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'content' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        PrivacyPolicy::updateOrCreate(
            ['id' => 1], 
            [
                'title' => $request->title,
                'content' => $request->content,
            ]
        );

        return redirect()->back()->with('success', 'Updated successfully!');
    }
}
