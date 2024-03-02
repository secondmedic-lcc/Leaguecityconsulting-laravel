<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Packages;
use App\Models\SeoData;
use Illuminate\Support\Str;

class PackagesController extends Controller
{
    public function index()
    {
        $page_name = "packages/list";
        
        $page_title = "Manage packages";
        
        $current_page = "packages";

        $packages = Packages::where(array('status'=>1))->orderBy('id','desc')->paginate(20);

        return view('backend/admin/main', compact('page_name','page_title','current_page','packages'));

    }

    public function create()
    {
        $page_name = "packages/add";
        
        $page_title = "Manage packages";
        
        $current_page = "packages";

        return view('backend/admin/main', compact('page_name','page_title','current_page'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'package_for' => 'required|string',
            'name' => 'required|string',
            'url_slug' => 'required|unique',
            'heading' => 'required|string',
            'monthly_inr' => 'required|number',
            'monthly_usd' => 'required|number',
            'yearly_inr' => 'required|number',
            'yearly_usd' => 'required|number',
            'description' => 'string',
        ]);
          
        $url_slug = Str::slug($request->name."-");
        
        $check = Packages::where(array('url_slug'=>$url_slug))->first();

        if(empty($check)){

            $data['package_for'] = $request->package_for;
            $data['name'] = $request->name;
            $data['url_slug'] = $url_slug;
            $data['heading'] = $request->heading;
            $data['monthly_inr'] = $request->monthly_inr;
            $data['monthly_usd'] = $request->monthly_usd;
            $data['yearly_inr'] = $request->yearly_inr;
            $data['yearly_usd'] = $request->yearly_usd;
            $data['description'] = $request->description;
            $data['show_front'] = $request->show_front;

            $result = Packages::create($data);

            $page_link = "packages/". $url_slug;
            $data2['page_link'] = $page_link;
            $data2['page_name'] = "packages-details";
            $data2['meta_title'] = $request->meta_title;
            $data2['meta_key'] = $request->meta_key;
            $data2['meta_description'] = $request->meta_description;
            $data2['canonical'] = $page_link;
            $data2['service_id'] = $result->id;

            $result2 = SeoData::create($data2);

            return redirect()->route('packages')->with('success', 'Packages created successfully.');
        
        }else{
        
            return redirect()->back()->with('error', 'Another Product Already Exist From this Name')->withInput();
        
        }
    }

    public function edit($id)
    {
        $page_name = "packages/edit";
        
        $page_title = "Manage packages";
        
        $current_page = "packages";
        
        $packages = Packages::where(array('status'=>1,'id'=>$id))->get()->first();
        
        $seo_data = SeoData::where(array('service_id'=>$id,'page_name'=>'packages-details'))->get()->first();

        return view('backend/admin/main', compact('page_name','page_title','current_page','packages','seo_data'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'package_for' => 'required|string',
            'name' => 'required|string',
            'url_slug' => 'required|unique',
            'heading' => 'required|string',
            'monthly_inr' => 'required|number',
            'monthly_usd' => 'required|number',
            'yearly_inr' => 'required|number',
            'yearly_usd' => 'required|number',
            'description' => 'string',
        ]);
          
        $data['package_for'] = $request->package_for;
        $data['name'] = $request->name;
        $data['heading'] = $request->heading;
        $data['monthly_inr'] = $request->monthly_inr;
        $data['monthly_usd'] = $request->monthly_usd;
        $data['yearly_inr'] = $request->yearly_inr;
        $data['yearly_usd'] = $request->yearly_usd;
        $data['description'] = $request->description;
        $data['show_front'] = $request->show_front;

        $url_slug = Str::slug($request->name."-");
        $data['url_slug'] = $url_slug;

        Packages::where(array('status'=>1,'id'=>$id))->update($data);

        $page_link = "packages/".Str::slug($request->name."-".$id);
        $data2['page_link'] = $page_link;
        $data2['service_id'] = $id;
        $data2['page_name'] = "package-details";
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

        return redirect()->route('packages')->with('success', 'Packages updated successfully.');
    }

    public function destroy($id)
    {
        $data = array('status' =>0);

        $result = Packages::where(array('id'=>$id))->update($data);

        return redirect()->route('packages')->with('success', 'Packages deleted successfully.');
    }
    
}
