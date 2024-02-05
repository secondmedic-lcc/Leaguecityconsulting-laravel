<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function index()
    {
        $page_name = "products/list";
        
        $page_title = "Manage Products";
        
        $current_page = "products";

        $portfolio = Products::where(array('status'=>1))->orderBy('id','desc')->paginate(20);

        return view('backend/admin/main', compact('page_name','page_title','current_page','portfolio'));

    }

    public function create()
    {
        $page_name = "products/add";
        
        $page_title = "Manage Products";
        
        $current_page = "products";

        return view('backend/admin/main', compact('page_name','page_title','current_page'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'product_url' => 'required|string',
            'heading' => 'required|string',
            'sub_heading' => 'required|string',
            'description' => 'required|string',
        ]);
          
        if(!empty($request->product_image)){
                
            $imageName = time().'-image.'.$request->product_image->extension();

            $request->product_image->move(public_path('uploads/products'), $imageName);

            $image = "uploads/products/".$imageName;

            $data += array('product_image'=>$image);
        }

        $result = Products::create($data);
        
        if($result->id > 0){
            return redirect()->back()->with('success', 'Product Added successfully');
        }else{
            return redirect()->back()->with('error', 'Something went Wrong');
        }
    }

    public function edit($id)
    {
        $page_name = "products/edit";
        
        $page_title = "Manage Products";
        
        $current_page = "products";

        $products = Products::where(array('status'=>1,'id'=>$id))->first();

        return view('backend/admin/main', compact('page_name','page_title','current_page','products'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'product_url' => 'required|string',
            'heading' => 'required|string',
            'sub_heading' => 'required|string',
            'description' => 'required|string',
        ]);
          
        if(!empty($request->product_image)){
                
            $imageName = time().'-image.'.$request->product_image->extension();

            $request->product_image->move(public_path('uploads/products'), $imageName);

            $image = "uploads/products/".$imageName;

            $data += array('product_image'=>$image);
        }
          
        $result = Products::where(array('status'=>1,'id'=>$id))->update($data);
        
        if($result > 0){
            return redirect()->route('products')->with('success', 'Products updated successfully.');
        }else{
            return redirect()->back()->with('error', 'Something went Wrong');
        }

    }

    public function destroy($id)
    {
        $data = array('status' =>0);

        $result = Products::where(array('id'=>$id))->update($data);

        if($result > 0){
            return redirect()->route('products')->with('success', 'Products deleted successfully.');
        }else{
            return redirect()->back()->with('error', 'Something went Wrong');
        }
        
    }
    
}
