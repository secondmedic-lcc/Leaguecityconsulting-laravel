<?php

namespace App\Http\Controllers;
use App\Models\City;
use App\Models\State;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Models\ContactRequest;

class HomeController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $page_name = "dashboard/dashboard";
        
        $page_title = "Admin Dashboard";
        
        $current_page = "dashboard";

        $contact_request = ContactRequest::where(array('status'=>1))->count();
        

        return view('backend/admin/main', compact('page_name','page_title','current_page','contact_request'));
    }

    public function state($country_id){
        
        $state = State::where(array('country_id'=>$country_id))->get();

        return $state;
    }

    public function city($state_id){
        
        $city = City::where(array('state_id'=>$state_id))->get();

        return $city;
    }
}
