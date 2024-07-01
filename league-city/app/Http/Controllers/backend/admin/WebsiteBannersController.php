<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WebsiteBanners;
use Illuminate\Support\Str;

class WebsiteBannersController extends Controller
{
    public function index()
    {
        $page_name = "website-banner/list";
        
        $page_title = "Manage Website Banner";
        
        $current_page = "website-banner";

        $portfolio = WebsiteBanners::where(array('status'=>1))->orderBy('id','desc')->paginate(20);

        return view('backend/admin/main', compact('page_name','page_title','current_page','portfolio'));

    }

    public function create()
    {
        $page_name = "website-banner/add";
        
        $page_title = "Manage Website Banner";
        
        $current_page = "website-banner";

        return view('backend/admin/main', compact('page_name','page_title','current_page'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'page_name' => 'required|string',
            'page_title' => 'required|string',
            'heading' => 'required|string',
            'sub_heading' => 'required|string',
            'details' => 'required|string',
            'banner_image' => 'mimes:webp|max:150'
        ]);

        if(!empty($request->banner_image)){
                
            $imageName = time().'-image.'.$request->banner_image->extension();

            $request->banner_image->move(public_path('uploads/banner'), $imageName);

            $image = "uploads/banner/".$imageName;

            $data += array('banner_image'=>$image);
        }

        $result = WebsiteBanners::create($data);
        
        if($result->id > 0){
            return redirect()->back()->with('success', 'WebsiteBanners Added successfully');
        }else{
            return redirect()->back()->with('error', 'Something went Wrong');
        }
    }

    public function edit($id)
    {
        $page_name = "website-banner/edit";
        
        $page_title = "Manage Website Banner";
        
        $current_page = "website-banner";
        
        $banner = WebsiteBanners::where(array('status'=>1,'id'=>$id))->get()->first();
        
        return view('backend/admin/main', compact('page_name','page_title','current_page','banner'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'page_name' => 'required|string',
            'page_title' => 'required|string',
            'heading' => 'required|string',
            'sub_heading' => 'required|string',
            'details' => 'required|string',
        ]);
          
        if(!empty($request->banner_image)){
            
            $image_path = WebsiteBanners::where(array('id'=>$id))->first();

            @unlink($image_path->banner_image);

            $imageName = time().'-image.'.$request->banner_image->extension();

            $request->banner_image->move(public_path('uploads/banner'), $imageName);

            $image = "uploads/banner/".$imageName;

            $data += array('banner_image'=>$image);
        }
          
        $result = WebsiteBanners::where(array('status'=>1,'id'=>$id))->update($data);
        
        if($result > 0){
            return redirect()->route('website-banner')->with('success', 'WebsiteBanners updated successfully.');
        }else{
            return redirect()->back()->with('error', 'Something went Wrong');
        }

    }

    public function destroy($id)
    {
        $data = array('status' =>0);

        $result = WebsiteBanners::where(array('id'=>$id))->update($data);

        if($result > 0){
            return redirect()->route('website-banner')->with('success', 'WebsiteBanners deleted successfully.');
        }else{
            return redirect()->back()->with('error', 'Something went Wrong');
        }
        
    }
    
}
