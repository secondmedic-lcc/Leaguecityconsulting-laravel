<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;

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
        }
          
        if(!empty($request->logo)){
                
            $imageName = time().'-logo.'.$request->logo->extension();

            $request->logo->move(public_path('uploads/portfolio'), $imageName);

            $image = "uploads/portfolio/".$imageName;

            $data += array('logo'=>$image);
        }

        Portfolio::create($data);

        return redirect()->route('portfolio')->with('success', 'Portfolio created successfully.');
    }

    public function edit($id)
    {
        $page_name = "portfolio/edit";
        
        $page_title = "Manage Portfolio";
        
        $current_page = "portfolio";

        $portfolio = Portfolio::where(array('status'=>1,'id'=>$id))->first();

        return view('backend/admin/main', compact('page_name','page_title','current_page','portfolio'));
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
        }
          
        if(!empty($request->logo)){
                
            $imageName = time().'-logo.'.$request->logo->extension();

            $request->logo->move(public_path('uploads/portfolio'), $imageName);

            $image = "uploads/portfolio/".$imageName;

            $data += array('logo'=>$image);
        }

        Portfolio::where(array('status'=>1,'id'=>$id))->update($data);

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
