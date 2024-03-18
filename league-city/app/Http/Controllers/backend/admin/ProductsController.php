<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\SeoData;
use Illuminate\Support\Str;

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
            'product_image' => 'mimes:webp|max:150'
        ]);

        $url_slug = Str::slug($request->name."-");
        
        $check = Products::where(array('url_slug'=>$url_slug))->first();

        if(empty($check)){
          
            if(!empty($request->product_image)){
                    
                $imageName = time().'-image.'.$request->product_image->extension();

                $request->product_image->move(public_path('uploads/products'), $imageName);

                $image = "uploads/products/".$imageName;

                $data += array('product_image'=>$image);
                $data2['meta_image'] = $image;
            }

            $data['url_slug'] = $url_slug;

            $result = Products::create($data);

            $page_link = "products/". $url_slug;
            $data2['page_link'] = $page_link;
            $data2['page_name'] = "products-details";
            $data2['meta_title'] = $request->meta_title;
            $data2['meta_key'] = $request->meta_key;
            $data2['meta_description'] = $request->meta_description;
            $data2['canonical'] = $page_link;
            $data2['service_id'] = $result->id;

            $result2 = SeoData::create($data2);
            
            if($result->id > 0){
                return redirect()->back()->with('success', 'Product Added successfully');
            }else{
                return redirect()->back()->with('error', 'Something went Wrong');
            }
        }else{
            return redirect()->back()->with('error', 'Another Product Already Exist From this Name');
        }
    }

    public function edit($id)
    {
        $page_name = "products/edit";
        
        $page_title = "Manage Products";
        
        $current_page = "products";
        
        $products = Products::where(array('status'=>1,'id'=>$id))->get()->first();
        
        $seo_data = SeoData::where(array('service_id'=>$id,'page_name'=>'products-details'))->get()->first();

        return view('backend/admin/main', compact('page_name','page_title','current_page','products','seo_data'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'product_url' => 'required|string',
            'heading' => 'required|string',
            'sub_heading' => 'required|string',
            'description' => 'required|string',
            'product_image' => 'mimes:webp|max:150'
        ]);
          
        if(!empty($request->product_image)){
                
            $imageName = time().'-image.'.$request->product_image->extension();

            $request->product_image->move(public_path('uploads/products'), $imageName);

            $image = "uploads/products/".$imageName;

            $data += array('product_image'=>$image);
            $data2['meta_image'] = $image;
        }
          
        $result = Products::where(array('status'=>1,'id'=>$id))->update($data);
        
        $page_link = "products/".Str::slug($request->name."-".$id);
        $data2['page_link'] = $page_link;
        $data2['service_id'] = $id;
        $data2['page_name'] = "products-details";
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
