<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Campaign;

class CampaignController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {

        $page_name = "campaign/index";
        
        $page_title = "Manage Campaign Requests";
        
        $current_page = "campaign";

        $request = Campaign::select('campaign.*','country.name as country_name')->leftJoin('country','country.country_id','campaign.country')->where(array('status'=>1))->orderBy('id','desc')->paginate(20);

        return view('backend/admin/main', compact('page_name','page_title','current_page','request'));
    }

    public function update(Request $request) {
       
        $data = array('request_status' =>$request->request_status,'remark' =>$request->remark);

        $result = Campaign::where(array('id'=>$request->campaign_id))->update($data);
        
        if($result > 0){
            return redirect()->back()->with('success', 'Campaign Status Updated successfully');
        }else{
            return redirect()->back()->with('error', 'Something went Wrong');
        }
    }

    public function destroy($id) {
       
        /* $result = ServiceProvider::where(array('id'=>$id))->delete(); */
        $data = array('status' =>0);

        $result = Campaign::where(array('id'=>$id))->update($data);
        
        if($result > 0){
            return redirect()->back()->with('success', 'Campaign Deleted successfully');
        }else{
            return redirect()->back()->with('error', 'Something went Wrong');
        }
    }
}
