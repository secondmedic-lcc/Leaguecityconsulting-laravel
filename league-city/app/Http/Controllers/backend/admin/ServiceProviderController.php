<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\ContactRequest;
use App\Models\PackageRequest;

class ServiceProviderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {

        $page_name = "service-provider/contact-request";
        
        $page_title = "Manage Contact Requests";
        
        $current_page = "leads";

        $request = ContactRequest::where(array('status'=>1))->orderBy('id','desc')->paginate(20);

        return view('backend/admin/main', compact('page_name','page_title','current_page','request'));
    }

    public function package_request() {

        $page_name = "service-provider/package-request";
        
        $page_title = "Manage Plan Requests";
        
        $current_page = "package-request";

        $request = PackageRequest::where(array('status'=>1))->orderBy('id','desc')->paginate(20);

        return view('backend/admin/main', compact('page_name','page_title','current_page','request'));
    }

    public function destroy($id) {
       
        /* $result = ServiceProvider::where(array('id'=>$id))->delete(); */
        $data = array('status' =>0);

        $result = ContactRequest::where(array('id'=>$id))->update($data);
        
        if($result > 0){
            return redirect()->back()->with('success', 'Contact Request Leads Deleted successfully');
        }else{
            return redirect()->back()->with('error', 'Something went Wrong');
        }
    }


    public function destroyPackageRequest($id) {
       
        $data = array('status' =>0);

        $result = PackageRequest::where(array('id'=>$id))->update($data);
        
        if($result > 0){
            return redirect()->back()->with('success', 'Package Request Leads Deleted successfully');
        }else{
            return redirect()->back()->with('error', 'Something went Wrong');
        }
    }
}
