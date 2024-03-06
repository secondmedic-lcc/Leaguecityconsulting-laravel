<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Packages;
use App\Models\PackageKeyPoint;
use App\Models\SeoData;
use App\Models\PackageSubKeyPoint;
use App\Models\PackageTypes;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

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

        $package_types = PackageTypes::where('status',1)->orderBy('package_name','asc')->get();

        return view('backend/admin/main', compact('page_name','page_title','current_page','package_types'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'package_for' => 'required|string',
            'name' => 'required|string',
            'heading' => 'required|string',
            'monthly_inr' => 'required',
            'monthly_usd' => 'required',
            'yearly_inr' => 'required',
            'yearly_usd' => 'required',
            'description' => 'string',
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();

        } else{
          
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
        
                if(count($request->key_point) > 0){
                
                    foreach($request->key_point as $key => $k){

                        $key_data['package_id'] = $result->id;

                        $key_data['key_point'] = $k;

                        PackageKeyPoint::create($key_data);
                    }
                }

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
    }

    public function edit($id)
    {
        $page_name = "packages/edit";
        
        $page_title = "Manage packages";
        
        $current_page = "packages";
        
        $packages = Packages::where(array('status'=>1,'id'=>$id))->get()->first();
        
        $packagesKeyPoint = PackageKeyPoint::where(array('status'=>1,'package_id'=>$id))->get();
        
        $seo_data = SeoData::where(array('service_id'=>$id,'page_name'=>'packages-details'))->get()->first();

        $package_types = PackageTypes::where('status',1)->orderBy('package_name','asc')->get();

        return view('backend/admin/main', compact('page_name','page_title','current_page','packages','seo_data','packagesKeyPoint','package_types'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'package_for' => 'required|string',
            'name' => 'required|string',
            'heading' => 'required|string',
            'monthly_inr' => 'required',
            'monthly_usd' => 'required',
            'yearly_inr' => 'required',
            'yearly_usd' => 'required',
            'description' => 'string',
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();

        } else{
          
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

            if(count($request->key_point) > 0 && $request->key_point[0] != "" ){

                foreach($request->key_point as $key => $k){

                    $key_data['package_id'] = $id;

                    $key_data['key_point'] = $k;
                    
                    PackageKeyPoint::create($key_data);
                }
            }

            $page_link = "packages/".Str::slug($request->name."-".$id);
            $data2['page_link'] = $page_link;
            $data2['service_id'] = $id;
            $data2['page_name'] = "packages-details";
            $data2['meta_title'] = $request->meta_title;
            $data2['meta_key'] = $request->meta_key;
            $data2['meta_description'] = $request->meta_description;
            $data2['canonical'] = $page_link;

            SeoData::where(array('page_name'=>$data2['page_name'],'service_id'=>$id))->update($data2);

            return redirect()->back()->with('success', 'Packages updated successfully.');
        }
    }

    public function destroy($id)
    {
        $data = array('status' =>0);

        $result = Packages::where(array('id'=>$id))->update($data);

        return redirect()->route('packages')->with('success', 'Packages deleted successfully.');
    }
    

    public function updateKeyPoint(Request $request, $id)
    {
        $data['key_point'] = $request->key_point;

        PackageKeyPoint::where(array('status'=>1,'id'=>$id))->update($data);

        return redirect()->back()->with('success', 'Package Key Point Updated Successfully.');
    }

    public function deleteKeyPoint($id)
    {
        $data = array('status' =>0);

        $result = PackageKeyPoint::where(array('id'=>$id))->update($data);

        return redirect()->back()->with('success', 'Package Key Point  deleted successfully.');
    }
    

    public function subKeyPoints($id)
    {
        $page_name = "packages/sub-keypoints";
        
        $page_title = "Manage Package Sub Key Points";
        
        $current_page = "sub-keypoints";
        
        $packages = Packages::where(array('status'=>1,'id'=>$id))->get()->first();
        
        $packagesKeyPoint = PackageKeyPoint::where(array('status'=>1,'package_id'=>$id))->get();
        
        $packageSubKeyPoint = PackageSubKeyPoint::where(array('status'=>1,'package_id'=>$id))->orderBy('id','desc')->get();
        
        return view('backend/admin/main', compact('page_name','page_title','current_page','packages','packagesKeyPoint','packageSubKeyPoint'));
    }
    

    public function subKeyPoints_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'package_id' => 'required',
            'keypoint_id' => 'required',
            'sub_keypoint' => 'required|string',
            'includes' => 'required',
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();

        } else{
          
            $data['package_id'] = $request->package_id;
            $data['keypoint_id'] = $request->keypoint_id;
            $data['sub_keypoint'] = $request->sub_keypoint;
            $data['includes'] = $request->includes;

            $result = PackageSubKeyPoint::create($data);
        
            return redirect()->back()->with('success', 'Package Sub Key Point created successfully.');
            
        }
    }

        

    public function subKeyPoints_update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'keypoint_id' => 'required',
            'sub_keypoint' => 'required',
            'includes' => 'required',
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();

        } else{
          
            $data['keypoint_id'] = $request->keypoint_id;
            $data['sub_keypoint'] = $request->sub_keypoint;
            $data['includes'] = $request->includes;

            PackageSubKeyPoint::where(array('id'=>$id))->update($data);
        
            return redirect()->back()->with('success', 'Package Sub Key Point Updated successfully.');
            
        }
    }

    public function deleteSubKeyPoint($id)
    {
        $data = array('status' =>0);

        PackageSubKeyPoint::where(array('id'=>$id))->update($data);

        return redirect()->back()->with('success', 'Package Key Point  deleted successfully.');
    }
}
