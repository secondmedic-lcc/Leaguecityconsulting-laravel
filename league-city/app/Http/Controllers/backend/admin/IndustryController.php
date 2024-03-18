<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Industry;
use App\Models\SeoData;
use Illuminate\Support\Str;

class IndustryController extends Controller
{
    public function index()
    {
        $page_name = "industry/list";
        
        $page_title = "Manage Industry";
        
        $current_page = "industry";

        $portfolio = Industry::where(array('status'=>1))->orderBy('id','desc')->paginate(20);

        return view('backend/admin/main', compact('page_name','page_title','current_page','portfolio'));

    }

    public function create()
    {
        $page_name = "industry/add";
        
        $page_title = "Manage Industry";
        
        $current_page = "industry";

        return view('backend/admin/main', compact('page_name','page_title','current_page'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'industry_url' => 'string',
            'heading' => 'required|string',
            'sub_heading' => 'required|string',
            'description' => 'required|string',
            'industry_image' => 'mimes:webp|max:150'
        ]);

        $url_slug = Str::slug($request->name."-");
        
        $check = Industry::where(array('url_slug'=>$url_slug))->first();

        if(empty($check)){
          
            if(!empty($request->industry_image)){
                    
                $imageName = time().'-image.'.$request->industry_image->extension();

                $request->industry_image->move(public_path('uploads/industry'), $imageName);

                $image = "uploads/industry/".$imageName;

                $data += array('industry_image'=>$image);
                $data2['meta_image'] = $image;
            }

            $data['url_slug'] = $url_slug;

            $result = Industry::create($data);

            $page_link = "industry/". $url_slug;
            $data2['page_link'] = $page_link;
            $data2['page_name'] = "industry-details";
            $data2['meta_title'] = $request->meta_title;
            $data2['meta_key'] = $request->meta_key;
            $data2['meta_description'] = $request->meta_description;
            $data2['canonical'] = $page_link;
            $data2['service_id'] = $result->id;

            $result2 = SeoData::create($data2);
            
            if($result->id > 0){
                return redirect()->back()->with('success', 'Industry Added successfully');
            }else{
                return redirect()->back()->with('error', 'Something went Wrong');
            }
        }else{
            return redirect()->back()->with('error', 'Another Industry Already Exist From this Name');
        }
    }

    public function edit($id)
    {
        $page_name = "industry/edit";
        
        $page_title = "Manage Industry";
        
        $current_page = "industry";
        
        $industry = Industry::where(array('status'=>1,'id'=>$id))->get()->first();
        
        $seo_data = SeoData::where(array('service_id'=>$id,'page_name'=>'industry-details'))->get()->first();

        return view('backend/admin/main', compact('page_name','page_title','current_page','industry','seo_data'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'industry_url' => 'string',
            'heading' => 'required|string',
            'sub_heading' => 'required|string',
            'description' => 'required|string',
            'industry_image' => 'mimes:webp|max:150'
        ]);
          
        if(!empty($request->industry_image)){
                
            $imageName = time().'-image.'.$request->industry_image->extension();

            $request->industry_image->move(public_path('uploads/industry'), $imageName);

            $image = "uploads/industry/".$imageName;

            $data += array('industry_image'=>$image);
            $data2['meta_image'] = $image;
        }
          
        $result = Industry::where(array('status'=>1,'id'=>$id))->update($data);
        
        $page_link = "industry/".Str::slug($request->name."-");
        $data2['page_link'] = $page_link;
        $data2['service_id'] = $id;
        $data2['page_name'] = "industry-details";
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
        
        if($result > 0){
            return redirect()->route('industry')->with('success', 'Industry updated successfully.');
        }else{
            return redirect()->back()->with('error', 'Something went Wrong');
        }

    }

    public function destroy($id)
    {
        $data = array('status' =>0);

        $result = Industry::where(array('id'=>$id))->update($data);

        if($result > 0){
            return redirect()->route('industry')->with('success', 'Industry deleted successfully.');
        }else{
            return redirect()->back()->with('error', 'Something went Wrong');
        }
        
    }
    
}
