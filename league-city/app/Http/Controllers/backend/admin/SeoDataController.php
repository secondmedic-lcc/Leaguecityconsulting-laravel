<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SeoData;
use Illuminate\Support\Facades\Validator;

class SeoDataController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $page_name = "seo-data/list";
        
        $page_title = "Manage Seo Data";
        
        $current_page = "seo-data";

        $seo_data = SeoData::where(array('status'=>1))->orderBy('id','desc')->paginate(20);

        return view('backend/admin/main', compact('page_name','page_title','current_page','seo_data'));
    }


    public function create(){

        $page_name = "seo-data/add";
        
        $page_title = "Manage Seo Data";
        
        $current_page = "seo-data";

        return view('backend/admin/main', compact('page_name','page_title','current_page'));
    }

    public function store(Request $request){
        
        $validator = Validator::make($request->all(), [
            'page_name' => 'required',
            'page_link' => 'required',
            'meta_title' => 'required',
            'meta_key' => 'required',
            'meta_description' => 'required'
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();

        } else{
            
            $data['page_link'] = $request->page_link;
            $data['page_name'] = $request->page_name;
            $data['meta_title'] = $request->meta_title;
            $data['meta_key'] = $request->meta_key;
            $data['meta_description'] = $request->meta_description;
            $data['canonical'] = $request->canonical;
            $data['meta_schema'] = $request->meta_schema;

            $check = SeoData::where(array('page_name'=>$data['page_name'],'page_link'=>$data['page_link']))->first();

            if(!empty($request->meta_image)){
                
                $imageName = time().'_meta_image.'.$request->meta_image->extension();

                $request->meta_image->move(public_path('uploads/meta_image'), $imageName);

                $user_img = "uploads/meta_image/".$imageName;

                $data['meta_image'] = $user_img;
            }

            if(empty($check)){
                $result = SeoData::insert($data);
            }else{
                $result = SeoData::where(array('page_name'=>$request->page_name,'service_id'=>$request->service_id))->update($data);
            }

            if($result  > 0){
                return redirect()->back()->with('success', 'Seo Data Added successfully');
            }else{
                return redirect()->back()->with('error', 'Something went Wrong');
            }
        }
    }

    public function edit($id)
    {
        $page_name = "seo-data/edit";
        
        $page_title = "Manage Seo Data";
        
        $current_page = "seo-data";

        $seo_data = SeoData::where(array('id'=>$id))->get()->first();

        $seo_listing = SeoData::where(array('status'=>1))->orderBy('id','desc')->paginate(20);

        return view('backend/admin/main', compact('page_name','page_title','current_page','seo_data','seo_listing'));
    }

    
    public function update(Request $request, $id){
       
        $validator = Validator::make($request->all(), [
            'page_name' => 'required',
            'page_link' => 'required',
            'meta_title' => 'required',
            'meta_key' => 'required',
            'meta_description' => 'required'
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();

        } else{

            if($request->page_name > 0 && is_int($request->page_name)){
                $data['service_id'] = $request->page_name;
                $data['page_name'] = 'service-details';
            }else{
                $data['page_name'] = $request->page_name;
            }
            
            $data['page_link'] = $request->page_link;
            $data['meta_title'] = $request->meta_title;
            $data['meta_key'] = $request->meta_key;
            $data['meta_description'] = $request->meta_description;
            $data['canonical'] = $request->canonical;
            $data['meta_schema'] = $request->meta_schema;

            if(!empty($request->meta_image)){
                
                $imageName = time().'_meta_image.'.$request->meta_image->extension();

                $request->meta_image->move(public_path('uploads/meta_image'), $imageName);

                $user_img = "uploads/meta_image/".$imageName;

                $data['meta_image'] = $user_img;
            }
            
            $result = SeoData::where(array('id'=>$id))->update($data);

            if($result > 0){
                return redirect()->back()->with('success', 'Seo Data Updated successfully');
            }else{
                return redirect()->back()->with('error', 'Something went Wrong');
            }
        }
    }

    
    public function destroy($id){
      
        $data = array('status'=>0);

        $result = SeoData::where(array('id'=>$id))->update($data);

        if($result > 0){
            return redirect()->back()->with('success', 'Seo Data Deleted successfully');
        }else{
            return redirect()->back()->with('error', 'Something went Wrong');
        }
    }
}
