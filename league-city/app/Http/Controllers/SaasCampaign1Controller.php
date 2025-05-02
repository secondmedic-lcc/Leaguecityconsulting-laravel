<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\Country;
use App\Models\Campaign;
use App\Models\State;
use Illuminate\Support\Facades\Validator;

class SaasCampaign1Controller extends Controller
{
    public function index()
    {

        $page_name = "campaign/saas-campaign-1";

        $page_title = "Saas Campaign";

        $current_page = "saas-campaign";

        $schema_image = "includes-frontend/images/logo-white.webp";

        $portfolio = Portfolio::where(array('status' => 1))->orderBy('id', 'desc')->limit(5)->get();
        
        $country = Country::get();

        return view('frontend/campaign-main', compact('page_name', 'page_title', 'current_page', 'schema_image', 'portfolio','country'));
    }
    

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50',
            'email' => 'required|max:50',
            'contact' => [
                'required',
                'numeric',
                'digits_between:7,15',
                'regex:/^[5-9][0-9]*$/'
            ],
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
            $data['campaign_for'] = $request->campaign_for;
            $data['message'] = $request->message;

            $result = Campaign::create($data);

            session(['campaign_for'=>$request->campaign_for]);

            $mail_var = array(
                'var1' => $request->name,
                'var2' => $request->email,
                'var3' => $request->contact,
                'var4' => $request->campaign_for,
                'var5' => $request->message,
                'var6' => "",
                'var7' => "",
                'var8' => "",
            );

            send_mail($request->email, '2607CA', $mail_var);

            if ($result->id > 0) {
                return redirect()->route('thankyou');
            } else {
                return redirect()->back()->with('error', 'Something went Wrong');
            }
        }
    }

    
    public function indiaCampaign()
    {

        $page_name = "campaign/india-saas-campaign";

        $page_title = "India Saas Campaign";

        $current_page = "india-saas-campaign";

        $schema_image = "includes-frontend/images/logo-white.webp";

        $portfolio = Portfolio::where(array('status' => 1))->orderBy('id', 'desc')->limit(5)->get();

        $state = State::where(array('country_id'=>101))->get();

        return view('frontend/campaign-main', compact('page_name', 'page_title', 'current_page', 'schema_image', 'portfolio', 'state'));
    }
    
    public function singaporeCampaign()
    {

        $page_name = "campaign/singapore-saas-campaign";

        $page_title = "singapore Saas Campaign";

        $current_page = "singapore-saas-campaign";

        $schema_image = "includes-frontend/images/logo-white.webp";

        $portfolio = Portfolio::where(array('status' => 1))->orderBy('id', 'desc')->limit(5)->get();

        $state = State::where(array('country_id'=>101))->get();

        return view('frontend/campaign-main', compact('page_name', 'page_title', 'current_page', 'schema_image', 'portfolio', 'state'));
    }

    
    public function malaysiaCampaign()
    {

        $page_name = "campaign/malaysia-saas-campaign";

        $page_title = "Malaysia Saas Campaign";

        $current_page = "malaysia-saas-campaign";

        $schema_image = "includes-frontend/images/logo-white.webp";

        $portfolio = Portfolio::where(array('status' => 1))->orderBy('id', 'desc')->limit(5)->get();

        $state = State::where(array('country_id'=>132))->get();

        return view('frontend/campaign-main', compact('page_name', 'page_title', 'current_page', 'schema_image', 'portfolio', 'state'));
    }
}
