<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Packages;
use App\Models\PackageKeyPoint;
use App\Models\SeoData;
use App\Models\PackageSubKeyPoint;
use App\Models\PackageTypes;
use App\Models\PackagePageDetails;
use App\Models\PackageIncludes;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class PackagesController extends Controller
{
    public function index()
    {
        $page_name = "packages/list";
        
        $page_title = "Manage Package Plans";
        
        $current_page = "packages";

        $small = Packages::where(array('status'=>1,'package_for'=>$_GET['package_id'],'name'=>'small'))->first();
        
        $mid = Packages::where(array('status'=>1,'package_for'=>$_GET['package_id'],'name'=>'mid'))->first();
        
        $large = Packages::where(array('status'=>1,'package_for'=>$_GET['package_id'],'name'=>'large'))->first();
       
        $packagePageDetails = PackagePageDetails::where('package_id', $_GET['package_id'])->first();

        $includes = PackageIncludes::where(array('status'=>1,'package_for'=>$_GET['package_id']))->orderBy('id','desc')->paginate(20);

        return view('backend/admin/main', compact('page_name','page_title','current_page','small','mid','large','packagePageDetails','includes'));

    }

    public function create()
    {
        $page_name = "packages/add";
        
        $page_title = "Manage Package Plans";
        
        $current_page = "packages";

        $package = Packages::where(array('status'=>1,'package_for'=>$_GET['package_id'],'name'=>$_GET['business_type']))->first();
        
        $packagesKeyPoint = PackageKeyPoint::where(array('status'=>1,'package_id'=>$package->id))->get();

        return view('backend/admin/main', compact('page_name','page_title','current_page','package','packagesKeyPoint'));
    }


    public function store(Request $request, $id, $name)
    {
        $validator = Validator::make($request->all(), [
            'package_for' => 'required',
            'monthly_inr' => 'required',
            'monthly_usd' => 'required',
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();

        } else{
          
            $check = Packages::where(array('url_slug'=>$name,'package_for'=>$id))->first();

            if(empty($check)){

                $data['package_for'] = $request->package_for;
                $data['name'] = $name;
                $data['url_slug'] = $name;
                $data['monthly_inr'] = $request->monthly_inr;
                $data['monthly_usd'] = $request->monthly_usd;
                $data['yearly_inr'] = $request->yearly_inr;
                $data['yearly_usd'] = $request->yearly_usd;
                $data['show_front'] = 1;

                $result = Packages::create($data);

                if($request->key_point != ""){

                    if(count($request->key_point) > 0){
                    
                        foreach($request->key_point as $key => $k){

                            if($k != ""){

                                $key_data['package_id'] = $result->id;

                                $key_data['key_point'] = $k;

                                PackageKeyPoint::create($key_data);
                            }
                        }
                    }
                }

                return redirect()->back()->with('success', 'Packages created successfully.');
            
            }else{
                
                $data['package_for'] = $request->package_for;
                $data['name'] = $name;
                $data['url_slug'] = $name;
                $data['monthly_inr'] = $request->monthly_inr;
                $data['monthly_usd'] = $request->monthly_usd;
                $data['yearly_inr'] = $request->yearly_inr;
                $data['yearly_usd'] = $request->yearly_usd;
                $data['show_front'] = 1;

                Packages::where(array('name'=>$name,'package_for'=>$id))->update($data);

                if($request->key_point != ""){

                    if(count($request->key_point) > 0){

                        $da = Packages::where(array('name'=>$name,'package_for'=>$id))->first();
                    
                        foreach($request->key_point as $key => $k){

                            if($k != ""){

                                $key_data['package_id'] = $da->id;

                                $key_data['key_point'] = $k;

                                PackageKeyPoint::create($key_data);
                            }
                        }
                    }
                }

                return redirect()->back()->with('success', 'Packages created successfully.');
            
            }
        }
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
    

    public function subKeyPoints($pacakage_id, $keypoint)
    {
        $page_name = "packages/sub-keypoints";
        
        $page_title = "Manage Package Sub Key Points";
        
        $current_page = "sub-keypoints";
        
        $packages = Packages::where(array('status'=>1,'id'=>$pacakage_id))->get()->first();
        
        $packagesKeyPoint = PackageKeyPoint::where(array('status'=>1,'package_id'=>$pacakage_id,'id'=>$keypoint))->first();
        
        $packageSubKeyPoint = PackageSubKeyPoint::where(array('status'=>1,'package_id'=>$pacakage_id,'keypoint_id'=>$keypoint))->orderBy('id','desc')->get();
        
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
