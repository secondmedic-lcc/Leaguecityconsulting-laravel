<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\Country;
use App\Models\Campaign;
use Illuminate\Support\Facades\Validator;

class IndiaSaasCampaignController extends Controller
{
    public function index()
    {

        $page_name = "india-saas-campaign";

        $page_title = "India Saas Campaign";

        $current_page = "india-saas-campaign";

        $schema_image = "includes-frontend/images/logo-white.webp";

        $portfolio = Portfolio::where(array('status' => 1))->orderBy('id', 'desc')->limit(5)->get();

        $country = Country::get();

        return view('frontend/campaign-main', compact('page_name', 'page_title', 'current_page', 'schema_image', 'portfolio', 'country'));
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50',
            'email' => 'required|max:50',
            'contact' => 'required|min:8|max:12',
            'country' => 'required',
            'message' => 'required',
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();
        } else {

            $data['name'] = $request->name;
            $data['email'] = $request->email;
            $data['contact'] = $request->contact;
            $data['country'] = $request->country;
            $data['message'] = $request->message;

            $result = Campaign::create($data);

            if ($result->id > 0) {
                return redirect()->route('thankyou');
            } else {
                return redirect()->back()->with('error', 'Something went Wrong');
            }
        }
    }
}
