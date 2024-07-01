<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServicesIcons;
use Illuminate\Support\Facades\Validator;

class ServicesIconsController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'services_id' => 'required|max:50',
            'icon' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();
        
        } else{

            $data = [
                'services_id' => $request->services_id,
                'name' => $request->name,
               
            ];
            if(!empty($request->icon)){
                    
                $imageName = time().'-services.'.$request->icon->extension();

                $request->icon->move(public_path('uploads/services-icons'), $imageName);

                $image = "uploads/services-icons/".$imageName;

                $data += ['icon'=>$image];
            }
          
          
            

            $check = ServicesIcons::create($data);

            if($check->id > 0){
                return redirect()->back()->with('success', 'ServicesIcons Added successfully');
            }else{
                return redirect()->back()->with('error', 'Something went Wrong');
            }
        }
    }


    public function update(Request $request, $id){

        $validator = Validator::make($request->all(), [
            'services_id' => 'required|max:50',
            'icon' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();
        
        } else{

            $data = [
                'services_id' => $request->services_id,
                'name' => $request->name,
                
            ];
          
            if(!empty($request->icon)){
                    
                $imageName = time().'-services.'.$request->icon->extension();

                $request->icon->move(public_path('uploads/services-icons'), $imageName);

                $image = "uploads/services-icons/".$imageName;

                $data += ['icon'=>$image];
            }
            $check = ServicesIcons::where(array('id'=>$id))->update($data);

            if($check > 0){
                return redirect()->back()->with('success', 'Services Updated successfully');
            }else{
                return redirect()->back()->with('error', 'Something went Wrong');
            }
        }
    }
    
    public function destroy($id){
      
        $image = ServicesIcons::where(array('id'=>$id))->get()->first();

        @unlink($image->image);

        $result = ServicesIcons::where(array('id'=>$id))->delete();

        if($result > 0){
            return redirect()->back()->with('success', 'Services Deleted successfully');
        }else{
            return redirect()->back()->with('error', 'Something went Wrong');
        }
    }
}
