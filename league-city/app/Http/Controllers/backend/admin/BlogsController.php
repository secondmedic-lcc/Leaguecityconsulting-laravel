<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blogs;
use Illuminate\Support\Facades\Validator;
use App\Models\SeoData;
use Illuminate\Support\Str;


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
                $data2['meta_image'] = $image;
            }
        
            $url_slug = Str::slug($request->blog_title."-");
            
            $check = Blogs::where(array('url_slug'=>$url_slug))->first();

            if(empty($check)){
            
                $data['url_slug'] = $url_slug;

                $result = Blogs::create($data);

                $page_link = "blogs/". Str::slug($request->blog_title."-".$result->id);
                $data2['page_link'] = $page_link;
                $data2['page_name'] = "blog-details";
                $data2['meta_title'] = $request->meta_title;
                $data2['meta_key'] = $request->meta_key;
                $data2['meta_description'] = $request->meta_description;
                $data2['canonical'] = $page_link;
                $data2['service_id'] = $result->id;

                $result2 = SeoData::insert($data2);

                if($result->id > 0){
                    return redirect()->back()->with('success', 'Blog Added successfully');
                }else{
                    return redirect()->back()->with('error', 'Something went Wrong');
                }
            
            }else{
                return redirect()->back()->with('error', 'Another Product Already Exist From this Name');
            }
        }
    }
    

    public function edit($id)
    {
        $page_name = "blogs/edit";
        
        $page_title = "Manage Blogs";
        
        $current_page = "blogs";

        $blog = Blogs::where(array('status'=>1,'id'=>$id))->get()->first();
        
        $seo_data = SeoData::where(array('service_id'=>$id,'page_name'=>'blog-details'))->get()->first();

        return view('backend/admin/main', compact('page_name','page_title','current_page','blog','seo_data'));
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

                $data2['meta_image'] = $image;
            }

            $url_slug = Str::slug($request->blog_title."-");
            $data['url_slug'] = $url_slug;
            
            $result = Blogs::where(array('id'=>$id))->update($data);

            $page_link = "blogs/".$url_slug;
            $data2['page_link'] = $page_link;
            $data2['service_id'] = $id;
            $data2['page_name'] = "blog-details";
            $data2['meta_title'] = $request->meta_title;
            $data2['meta_key'] = $request->meta_key;
            $data2['meta_description'] = $request->meta_description;
            $data2['canonical'] = $page_link;

            $check = SeoData::where(array('page_name'=>$data2['page_name'],'service_id'=>$id))->first();

            if(empty($check)){
                $result = SeoData::insert($data2);
            }else{
                $result = SeoData::where(array('page_name'=>$data2['page_name'],'service_id'=>$id))->update($data2);
            }

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
