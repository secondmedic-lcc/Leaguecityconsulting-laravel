<?php

namespace App\Http\Controllers\backend\admin;

use Illuminate\Http\Request;
use App\Models\TermsAndConditions;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class TermsAndConditionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function edit()
    {
        $page_name = "policy/terms-conditions";
        $page_title = "Manage Terms & Conditions";
        $current_page = "terms-conditions";

        $terms = TermsAndConditions::first();

        return view('backend.admin.main', compact('page_name', 'page_title', 'current_page', 'terms'));
    }

    // Store or update "Terms & Conditions" section
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'content' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        TermsAndConditions::updateOrCreate(
            ['id' => 1], // Always update the first row
            [
                'title' => $request->title,
                'content' => $request->content,
            ]
        );

        return redirect()->back()->with('success', 'Updated successfully!');
    }
}
