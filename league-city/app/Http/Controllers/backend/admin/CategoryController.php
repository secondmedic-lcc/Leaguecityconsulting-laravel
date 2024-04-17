<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $page_name = "category/add";
        
        $page_title = "Manage category";
        
        $current_page = "category";

        return view('backend/admin/main', compact('page_name','page_title','current_page'));
    }


    public function create(){ }

    public function store(Request $request){
        
        $validator = Validator::make($request->all(), [
            'category_name' => 'required',
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();

        } else{

            $slug = Str::slug($request->category_name);

            $data['category_name'] = $request->category_name;
            $data['category_slug'] = $slug;

            if(!empty($request->category_img)){
                
                $imageName = time().'_category_img.'.$request->category_img->extension();
                
                $request->category_img->move(public_path('uploads/category'), $imageName);    
                
                $full_path = "uploads/category/".$imageName;                

                $data['category_img'] = $full_path;
            }

            $check = Category::where(array('category_slug'=>$slug))->first();

            if(!empty($check)) {
                $data['status'] = 1;
                $result = Category::where(array('id'=>$check->id))->update($data);
            } else { $response = Category::create($data); $result = $response->id; }

            if($result > 0){
                return redirect()->back()->with('success', 'Category Added successfully');
            }else{
                return redirect()->back()->with('error', 'Something went Wrong');
            }
        }
    }
   
    public function list()
    {
        $page_name = "category/list";
        
        $page_title = "Manage category";
        
        $current_page = "category";

        $list = Category::where(array('status'=>1))->orderBy('id','desc')->paginate(20);

        return view('backend/admin/main', compact('page_name','page_title','current_page','list'));
    }

    public function edit($id)
    {
        $page_name = "category/edit";
        
        $page_title = "Manage category";
        
        $current_page = "category";

        $category = Category::where(array('id'=>$id))->get()->first();

        return view('backend/admin/main', compact('page_name','page_title','current_page','category'));
    }
    
    public function update(Request $request, $id){
       
        $validator = Validator::make($request->all(), [
            'category_name' => 'required',
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();

        } else{

            $data['category_name'] = $request->category_name;
            $data['category_slug'] = Str::slug($request->category_name);

            if(!empty($request->category_img)){
                
                $imgLink = Category::where(array('id'=>$id))->first();

                if($imgLink->category_img != "" && $imgLink->category_img != null){ 
                    @unlink($imgLink->category_img);
                }
                
                $imageName = time().'_category_img.'.$request->category_img->extension();
                
                $request->category_img->move(public_path('uploads/category'), $imageName);    
                
                $full_path = "uploads/category/".$imageName;                

                $data['category_img'] = $full_path;
            }

            $result = Category::where(array('id'=>$id))->update($data);

            if($result > 0){
                return redirect()->route('category')->with('success', 'Category Updated successfully');
            }else{
                return redirect()->back()->with('error', 'Something went Wrong');
            }
        }
    }

    
    public function destroy($id){
      
        $data = array('status' =>0);

        $result = Category::where(array('id'=>$id))->update($data);

        if($result > 0){
            return redirect()->back()->with('success', 'Category Deleted successfully');
        }else{
            return redirect()->back()->with('error', 'Something went Wrong');
        }
    }
}
