<?php
namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PackageTypes;
use App\Models\SeoData;
use App\Models\PackagePageDetails;

class PackageTypesController extends Controller
{
    
    public function index()
    {
        $page_name = "package-types/list";
        
        $page_title = "Manage Package Type";
        
        $current_page = "package-types";

        $packageTypes = PackageTypes::where('status',1)->orderBy('id','desc')->get();

        return view('backend/admin/main', compact('page_name','page_title','current_page','packageTypes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'package_name' => 'required|string|max:255',
            'package_slug' => 'required|string|max:255|unique:package_types',
        ]);

        PackageTypes::create($request->all());

        return redirect()->route('package.types')->with('success', 'Package type created successfully.');
    }

    public function edit(PackageTypes $packageType)
    {
        $page_name = "package-types/edit";
        
        $page_title = "Manage Package Type";
        
        $current_page = "package-types";
        
        $seo_data = SeoData::where(array('service_id'=>$packageType->id,'page_name'=>'package-type'))->get()->first();

        return view('backend/admin/main', compact('page_name','page_title','current_page','packageType','seo_data'));
    }

    public function update(Request $request, PackageTypes $packageType)
    {
        $request->validate([
            'package_name' => 'required|string|max:255',
            'package_slug' => 'required|string|max:255|unique:package_types,package_slug,' . $packageType->id,
        ]);

        $packageType->update($request->all());

        $page_link = "packages/". $request->package_slug;
        $data2['page_link'] = $page_link;
        $data2['service_id'] = $packageType->id;
        $data2['page_name'] = "package-type";
        $data2['meta_title'] = $request->meta_title;
        $data2['meta_key'] = $request->meta_key;
        $data2['meta_description'] = $request->meta_description;
        $data2['canonical'] = $page_link;
        
        $check = SeoData::where(array('page_name'=>$data2['page_name'],'service_id'=>$packageType->id))->first();

        if(empty($check)){
            SeoData::insert($data2);
        }else{
            SeoData::where(array('page_name'=>$data2['page_name'],'service_id'=>$packageType->id))->update($data2);
        }

        return redirect()->route('package.types')->with('success', 'Package type updated successfully.');
    }

   
    public function destroy($id)
    {
        $data = array('status' =>0);

        $result = PackageTypes::where(array('id'=>$id))->update($data);

        return redirect()->route('package.types')->with('success', 'Package type deleted successfully.');
    }

    public function package_page_details(Request $request, $id) {
        

        $packagePageDetails = PackagePageDetails::where('package_id', $id)->first();

        if(@$request->main_heading != "" && @$request->sub_heading != ""){

            $data = [
                'package_id' => $id,
                'main_heading' => $request->main_heading,
                'sub_heading' => $request->sub_heading,
            ];
        }

        if(@$request->enterprise_title != "" && @$request->enterprise_details != ""){

            $data = [
                'package_id' => $id,
                'enterprise_title' => $request->enterprise_title,
                'enterprise_details' => $request->enterprise_details,
            ];
        }

        if(@$request->includes_heading != "" && @$request->includes_details != ""){

            $data = [
                'package_id' => $id,
                'includes_heading' => $request->includes_heading,
                'includes_details' => $request->includes_details,
            ];
        }
        

        if ($packagePageDetails) {
            $packagePageDetails->update($data);
        } else {
            PackagePageDetails::create($data);
        }

        return redirect()->back()->with('success', 'Package page details updated successfully.');

    }
}


