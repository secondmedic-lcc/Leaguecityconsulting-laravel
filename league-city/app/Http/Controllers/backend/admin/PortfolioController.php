<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\SeoData;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    public function index()
    {
        $page_name = "portfolio/list";
        
        $page_title = "Manage Portfolio";
        
        $current_page = "portfolio";

        $portfolio = Portfolio::where(array('status'=>1))->orderBy('id','desc')->paginate(20);

        return view('backend/admin/main', compact('page_name','page_title','current_page','portfolio'));

    }

    public function create()
    {
        $page_name = "portfolio/add";
        
        $page_title = "Manage Portfolio";
        
        $current_page = "portfolio";

        return view('backend/admin/main', compact('page_name','page_title','current_page'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'project_url' => 'required|string',
            'heading' => 'required|string',
            'sub_heading' => 'required|string',
        ]);
          
        if(!empty($request->portfolio_image)){
                
            $imageName = time().'-image.'.$request->portfolio_image->extension();

            $request->portfolio_image->move(public_path('uploads/portfolio'), $imageName);

            $image = "uploads/portfolio/".$imageName;

            $data += array('image'=>$image);

            $data2['meta_image'] = $image;
        }
          
        if(!empty($request->logo)){
                
            $imageName = time().'-logo.'.$request->logo->extension();

            $request->logo->move(public_path('uploads/portfolio'), $imageName);

            $image = "uploads/portfolio/".$imageName;

            $data += array('logo'=>$image);
        }
        
        $url_slug = Str::slug($request->name."-");
        
        $check = Portfolio::where(array('url_slug'=>$url_slug))->first();

        if(empty($check)){

            $data['url_slug'] = $url_slug;

            $result = Portfolio::create($data);

            $page_link = "portfolio/". Str::slug($request->name."-".$result->id);
            $data2['page_link'] = $page_link;
            $data2['page_name'] = "portfolio-details";
            $data2['meta_title'] = $request->meta_title;
            $data2['meta_key'] = $request->meta_key;
            $data2['meta_description'] = $request->meta_description;
            $data2['canonical'] = $page_link;
            $data2['service_id'] = $result->id;

            $result2 = SeoData::create($data2);

            return redirect()->route('portfolio')->with('success', 'Portfolio created successfully.');
        
        }else{
        
            return redirect()->back()->with('error', 'Another Product Already Exist From this Name');
        
        }
    }

    public function edit($id)
    {
        $page_name = "portfolio/edit";
        
        $page_title = "Manage Portfolio";
        
        $current_page = "portfolio";
        
        $portfolio = Portfolio::where(array('status'=>1,'id'=>$id))->get()->first();
        
        $seo_data = SeoData::where(array('service_id'=>$id,'page_name'=>'portfolio-details'))->get()->first();

        return view('backend/admin/main', compact('page_name','page_title','current_page','portfolio','seo_data'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'project_url' => 'required|string',
            'heading' => 'required|string',
            'sub_heading' => 'required|string',
        ]);
          
        if(!empty($request->portfolio_image)){
                
            $imageName = time().'-image.'.$request->portfolio_image->extension();

            $request->portfolio_image->move(public_path('uploads/portfolio'), $imageName);

            $image = "uploads/portfolio/".$imageName;

            $data += array('image'=>$image);
            $data2['meta_image'] = $image;
        }
          
        if(!empty($request->logo)){
                
            $imageName = time().'-logo.'.$request->logo->extension();

            $request->logo->move(public_path('uploads/portfolio'), $imageName);

            $image = "uploads/portfolio/".$imageName;

            $data += array('logo'=>$image);
        }

        $url_slug = Str::slug($request->name."-");
        $data['url_slug'] = $url_slug;

        Portfolio::where(array('status'=>1,'id'=>$id))->update($data);

        $page_link = "portfolio/".Str::slug($request->name."-".$id);
        $data2['page_link'] = $page_link;
        $data2['service_id'] = $id;
        $data2['page_name'] = "portfolio-details";
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

        return redirect()->route('portfolio')->with('success', 'Portfolio updated successfully.');
    }

    public function destroy($id)
    {
        $data = array('status' =>0);

        $result = Portfolio::where(array('id'=>$id))->update($data);

        return redirect()->route('portfolio')->with('success', 'Portfolio deleted successfully.');
    }
    

    public function update_description(Request $request, $id)
    {
        $data = $request->validate([
            'desc_heading' => 'required|string',
            'description' => 'required|string',
        ]);

        $check = Portfolio::where(array('status'=>1,'id'=>$id))->update($data);

        if($check > 0){

            return redirect()->back()->with('success', 'Portfolio updated successfully.');

        }else{
            
            return redirect()->back()->with('error', 'Something went wrong');

        }
    }
}
