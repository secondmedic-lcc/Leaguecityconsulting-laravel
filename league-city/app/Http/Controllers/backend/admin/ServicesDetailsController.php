<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServicesDetails;
use App\Models\Services;
use App\Models\ServicesIcons;
use App\Models\ServicesImages;

class ServicesDetailsController extends Controller
{

    public function index()
    {
        $page_name = "services/services-details";
        
        $page_title = "Manage services";
        
        $current_page = "services";

        $services = Services::where(array('status'=>1))->orderBy('name','asc')->get();

        $where = array('services_details.status'=>1);

        if(isset($_GET['services_id']) && $_GET['services_id'] != ""){

            $where += array('services_details.services_id'=>$_GET['services_id']);
        }       
        $services_details = ServicesDetails::select('services.name','services.sub_heading','services.desc_heading','services.description','services_details.*')->leftJoin('services','services.id','services_details.services_id')->where($where)->orderBy('services_details.id','desc')->paginate(20);

        $services_sec = Services::where(array('status'=>1,'id'=>$_GET['services_id']))->first();

        $services_images = ServicesImages::where(array('status' => 1,'services_id'=>$_GET['services_id']))->get();

        $services_icons = ServicesIcons::where(array('status' => 1,'services_id'=>$_GET['services_id']))->get();

        return view('backend/admin/main', compact('page_name','page_title','current_page','services','services_details','services_sec','services_images','services_icons'));

    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'services_id' => 'required|string',
            'service_icon' => 'required|string',
            'service_title' => 'required|string',
            'service_details' => 'required|string',
             'data_for' => 'required|string',
        ]);
          
  
        ServicesDetails::create($data);

        return redirect()->back()->with('success', ' Services Details created successfully.');
    }

    public function edit($id)
    {
        $page_name = "services/services-details-edit";
        
        $page_title = "Manage services";
        
        $current_page = "services";

        $services = Services::where(array('status'=>1))->orderBy('name','asc')->get();

        $services_details = ServicesDetails::where(array('status'=>1,'id'=>$id))->first();

        return view('backend/admin/main', compact('page_name','page_title','current_page','services','services_details'));
    }

    public function update(Request $request, $id)
    {
     
        $data = $request->validate([
            'services_id' => 'required|string',
            'service_icon' => 'required|string',
            'service_title' => 'required|string',
            'service_details' => 'required|string',
         
        ]);

     

        ServicesDetails::where(array('status'=>1,'id'=>$id))->update($data);

        return redirect(url('admin/services-details?services_id='.$request->services_id))->with('success', 'Services updated successfully.');
    }

    public function destroy($id)
    {
        $data = array('status' =>0);

        $result = ServicesDetails::where(array('id'=>$id))->update($data);

        return redirect()->back()->with('success', 'Services deleted successfully.');
    }

 

}
