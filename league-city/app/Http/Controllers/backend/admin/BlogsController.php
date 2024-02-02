<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blogs;
use Illuminate\Support\Facades\Validator;


class BlogsController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $page_name = "blogs/list";
        
        $page_title = "Manage Blogs";
        
        $current_page = "blogs";

        $blog = Blogs::where(array('status'=>1))->orderBy('id','desc')->paginate(20);

        return view('backend/admin/main', compact('page_name','page_title','current_page','blog'));

    }
    

    public function create()
    {
        $page_name = "blogs/add";
        
        $page_title = "Manage Blogs";
        
        $current_page = "blogs";

        return view('backend/admin/main', compact('page_name','page_title','current_page'));
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'blog_title' => 'required|string',
            'blog_details' => 'required|string',
            'description' => 'required|string',
            'read_time' => 'string',
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();

        } else{

            $data['blog_title'] = $request->blog_title;
            $data['blog_details'] = $request->blog_details;
            $data['description'] = $request->description;
            $data['read_time'] = $request->read_time;
          
            if(!empty($request->blog_image)){
                    
                $imageName = time().'-image.'.$request->blog_image->extension();

                $request->blog_image->move(public_path('uploads/blogs'), $imageName);

                $image = "uploads/blogs/".$imageName;

                $data['blog_image'] = $image;
            }
            
            if(!empty($request->detail_image)){
                    
                $imageName = time().'-detail.'.$request->detail_image->extension();

                $request->detail_image->move(public_path('uploads/blogs'), $imageName);

                $image = "uploads/blogs/".$imageName;

                $data['detail_image'] = $image;
            }

            $result = Blogs::create($data);

            if($result->id > 0){
                return redirect()->back()->with('success', 'Blog Added successfully');
            }else{
                return redirect()->back()->with('error', 'Something went Wrong');
            }
        }
    }
    

    public function edit($id)
    {
        $page_name = "blogs/edit";
        
        $page_title = "Manage Blogs";
        
        $current_page = "blogs";

        $blog = Blogs::where(array('status'=>1,'id'=>$id))->first();

        return view('backend/admin/main', compact('page_name','page_title','current_page','blog'));
    }
    
    
    public function update(Request $request, $id){
       
        $validator = Validator::make($request->all(), [
            'blog_title' => 'required|string',
            'blog_details' => 'required|string',
            'description' => 'required|string',
            'read_time' => 'string',
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();

        } else{

            $data['blog_title'] = $request->blog_title;
            $data['blog_details'] = $request->blog_details;
            $data['description'] = $request->description;
            $data['read_time'] = $request->read_time;
          
            if(!empty($request->blog_image)){
                    
                $imageName = time().'-image.'.$request->blog_image->extension();

                $request->blog_image->move(public_path('uploads/blogs'), $imageName);

                $image = "uploads/blogs/".$imageName;

                $data['blog_image'] = $image;
            }
            
            if(!empty($request->detail_image)){
                    
                $imageName = time().'-detail.'.$request->detail_image->extension();

                $request->detail_image->move(public_path('uploads/blogs'), $imageName);

                $image = "uploads/blogs/".$imageName;

                $data['detail_image'] = $image;
            }

            $result = Blogs::where(array('id'=>$id))->update($data);

            if($result > 0){
                return redirect()->back()->with('success', 'Blog Updated successfully');
            }else{
                return redirect()->back()->with('error', 'Something went Wrong');
            }
        }
    }
    
    public function destroy($id){
      
        $data = array('status'=>0);

        $result = Blogs::where(array('id'=>$id))->update($data);

        if($result > 0){
            return redirect()->back()->with('success', 'Blog Deleted successfully');
        }else{
            return redirect()->back()->with('error', 'Something went Wrong');
        }
    }
}
