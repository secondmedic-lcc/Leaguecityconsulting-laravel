<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;
use App\Models\ServicesDetails;
use App\Models\SeoData;
use Illuminate\Support\Str;

class ServicesController extends Controller
{
    public function index()
    {
        $page_name = "services/list";
        
        $page_title = "Manage Services";
        
        $current_page = "Services";

        $services = Services::where(array('status'=>1))->orderBy('id','desc')->paginate(20);

        return view('backend/admin/main', compact('page_name','page_title','current_page','services'));

    }

    public function create()
    {
        $page_name = "services/add";
        
        $page_title = "Manage Services";
        
        $current_page = "services";

        return view('backend/admin/main', compact('page_name','page_title','current_page'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'heading' => 'required|string',
            'description' => 'required|string',
            'services_image' => 'mimes:webp|max:150'
        ]);
          
        if(!empty($request->services_image)){
                
            $imageName = time().'-image.'.$request->services_image->extension();

            $request->services_image->move(public_path('uploads/services'), $imageName);

            $image = "uploads/services/".$imageName;

            $data += array('image'=>$image);

            $data2['meta_image'] = $image;
        }
          
        if(!empty($request->logo)){
                
            $imageName = time().'-logo.'.$request->logo->extension();

            $request->logo->move(public_path('uploads/services'), $imageName);

            $image = "uploads/services/".$imageName;

            $data += array('logo'=>$image);
        }
        
        $url_slug = Str::slug($request->name."-");
        
        $check = Services::where(array('url_slug'=>$url_slug))->first();

        if(empty($check)){

            $data['url_slug'] = $url_slug;


            $result = Services::create($data);

            $page_link = "services/". $url_slug;
            $data2['page_link'] = $page_link;
            $data2['page_name'] = "services-details";
            $data2['meta_title'] = $request->meta_title;
            $data2['meta_key'] = $request->meta_key;
            $data2['meta_description'] = $request->meta_description;
            $data2['canonical'] = $page_link;
            $data2['service_id'] = $result->id;

            $result2 = SeoData::create($data2);

            return redirect()->route('services')->with('success', 'services created successfully.');
        
        }else{
        
            return redirect()->back()->with('error', 'Another services Already Exist From this Name')->withInput();
        
        }
    }

    public function edit($id)
    {
        $page_name = "services/edit";
        
        $page_title = "Manage services";
        
        $current_page = "services";
        
        $services = Services::where(array('status'=>1,'id'=>$id))->get()->first();
        
        $seo_data = SeoData::where(array('service_id'=>$id,'page_name'=>'services-details'))->get()->first();

        return view('backend/admin/main', compact('page_name','page_title','current_page','services','seo_data'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'heading' => 'required|string',
            'description' => 'required|string',
            'services_image' => 'mimes:webp|max:150'
        ]);
          
        if(!empty($request->services_image)){
                
            $imageName = time().'-image.'.$request->services_image->extension();

            $request->services_image->move(public_path('uploads/services'), $imageName);

            $image = "uploads/services/".$imageName;

            $data += array('image'=>$image);
            $data2['meta_image'] = $image;
        }
          
        if(!empty($request->logo)){
                
            $imageName = time().'-logo.'.$request->logo->extension();

            $request->logo->move(public_path('uploads/services'), $imageName);

            $image = "uploads/services/".$imageName;

            $data += array('logo'=>$image);
        }

        $url_slug = Str::slug($request->name."-");
        $data['url_slug'] = $url_slug;

        // $data['category'] = implode(",", $request->category);

        Services::where(array('status'=>1,'id'=>$id))->update($data);

        $page_link = "services/".Str::slug($request->name."-".$id);
        $data2['page_link'] = $page_link;
        $data2['service_id'] = $id;
        $data2['page_name'] = "services-details";
        $data2['meta_title'] = $request->meta_title;
        $data2['meta_key'] = $request->meta_key;
        $data2['meta_description'] = $request->meta_description;
        $data2['canonical'] = $page_link;

        $check = SeoData::where(array('page_name'=>$data2['page_name'],'service_id'=>$id))->first();

        if(empty($check)){
            SeoData::insert($data2);
        }else{
            SeoData::where(array('page_name'=>$data2['page_name'],'service_id'=>$id))->update($data2);
        }

        return redirect()->route('services')->with('success', 'Services updated successfully.');
    }

    public function delete($id)
    {
        
        $data = array('status' =>0);

        $result = Services::where(array('id'=>$id))->update($data);

        return redirect()->route('services')->with('success', 'Services deleted successfully.');
    }
  

}
