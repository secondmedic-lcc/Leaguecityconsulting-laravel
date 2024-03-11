<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PotfolioImage;
use Illuminate\Support\Facades\Validator;

class PotfolioImageController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'portfolio_id' => 'required|max:50',
            'images' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();
        
        } else{

            $data = [
                'portfolio_id' => $request->portfolio_id,
                'heading' => $request->heading,
                'description' => $request->description,
            ];
          
            if(!empty($request->images)){
                    
                $imageName = time().'-portfolio.'.$request->images->extension();

                $request->images->move(public_path('uploads/portfolio-screenshot'), $imageName);

                $image = "uploads/portfolio-screenshot/".$imageName;

                $data += ['image'=>$image];
            }

            $check = PotfolioImage::create($data);

            if($check->id > 0){
                return redirect()->back()->with('success', 'Portfolio Added successfully');
            }else{
                return redirect()->back()->with('error', 'Something went Wrong');
            }
        }
    }


    public function update(Request $request, $id){

        $validator = Validator::make($request->all(), [
            'portfolio_id' => 'required|max:50',
            'images' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();
        
        } else{

            $data = [
                'portfolio_id' => $request->portfolio_id,
                'heading' => $request->heading,
                'description' => $request->description,
            ];
          
            if(!empty($request->images)){
                    
                $imageName = time().'-portfolio.'.$request->images->extension();

                $request->images->move(public_path('uploads/portfolio-screenshot'), $imageName);

                $image = "uploads/portfolio-screenshot/".$imageName;

                $data += ['image'=>$image];
            }

            $check = PotfolioImage::where(array('id'=>$id))->update($data);

            if($check > 0){
                return redirect()->back()->with('success', 'Portfolio Updated successfully');
            }else{
                return redirect()->back()->with('error', 'Something went Wrong');
            }
        }
    }
    
    public function destroy($id){
      
        $image = PotfolioImage::where(array('id'=>$id))->get()->first();

        @unlink($image->image);

        $result = PotfolioImage::where(array('id'=>$id))->delete();

        if($result > 0){
            return redirect()->back()->with('success', 'Portfolio Deleted successfully');
        }else{
            return redirect()->back()->with('error', 'Something went Wrong');
        }
    }
}
