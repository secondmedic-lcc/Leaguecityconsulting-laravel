<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServicesImages;
use Illuminate\Support\Facades\Validator;

class ServicesImagesController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'services_id' => 'required|max:50',
            'images' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();
        
        } else{

            $data = [
                'services_id' => $request->services_id,
                'heading' => $request->heading,
                'description' => $request->description,
                'project_url' => $request->project_url,
            ];
          
          
            if(!empty($request->images)){
                    
                $imageName = time().'-services.'.$request->images->extension();

                $request->images->move(public_path('uploads/services-screenshot'), $imageName);

                $image = "uploads/services-screenshot/".$imageName;

                $data += ['image'=>$image];
            }

            $check = ServicesImages::create($data);

            if($check->id > 0){
                return redirect()->back()->with('success', 'Services Added successfully');
            }else{
                return redirect()->back()->with('error', 'Something went Wrong');
            }
        }
    }


    public function update(Request $request, $id){

        $validator = Validator::make($request->all(), [
            'services_id' => 'required|max:50',
            'images' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();
        
        } else{

            $data = [
                'services_id' => $request->services_id,
                'heading' => $request->heading,
                'description' => $request->description,
                'project_url' => $request->project_url,
            ];
          
            if(!empty($request->images)){
                    
                $imageName = time().'-services.'.$request->images->extension();

                $request->images->move(public_path('uploads/services-screenshot'), $imageName);

                $image = "uploads/services-screenshot/".$imageName;

                $data += ['image'=>$image];
            }

            $check = ServicesImages::where(array('id'=>$id))->update($data);

            if($check > 0){
                return redirect()->back()->with('success', 'Services Updated successfully');
            }else{
                return redirect()->back()->with('error', 'Something went Wrong');
            }
        }
    }
    
    public function destroy($id){
      
        $image = ServicesImages::where(array('id'=>$id))->get()->first();

        @unlink($image->image);

        $result = ServicesImages::where(array('id'=>$id))->delete();

        if($result > 0){
            return redirect()->back()->with('success', 'Services Deleted successfully');
        }else{
            return redirect()->back()->with('error', 'Something went Wrong');
        }
    }
}
