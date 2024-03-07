<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PackageIncludes;
use App\Models\PackageTypes;

class PackageIncludesController extends Controller
{
    public function index()
    {
        $page_name = "package-includes/list";
        
        $page_title = "Manage Package Includes";
        
        $current_page = "package-includes";

        $includes = PackageIncludes::where(array('status'=>1))->orderBy('id','desc')->paginate(20);

        return view('backend/admin/main', compact('page_name','page_title','current_page','includes'));

    }

    public function create()
    {
        $page_name = "package-includes/add";
        
        $page_title = "Manage Package Includes";
        
        $current_page = "package-includes";
        
        $package_types = PackageTypes::where(array('status'=>1,'id'=>@$_GET['package_id']))->orderBy('package_name','asc')->first();

        return view('backend/admin/main', compact('page_name','page_title','current_page','package_types'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'package_for' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string',
        ]);
          
        if(!empty($request->includes_image)){
                
            $imageName = time().'-image.'.$request->includes_image->extension();

            $request->includes_image->move(public_path('uploads/includes-image'), $imageName);

            $image = "uploads/includes-image/".$imageName;

            $data += array('includes_image'=>$image);
        }

        $result = PackageIncludes::create($data);

        return redirect()->back()->with('success', 'Package Includes created successfully.');
    }

    public function edit($id)
    {
        $page_name = "package-includes/edit";
        
        $page_title = "Manage Package Includes";
        
        $current_page = "package-includes";
        
        $includes = PackageIncludes::where(array('status'=>1,'id'=>$id))->get()->first();

        $package_types = PackageTypes::where(array('status'=>1,'id'=>$includes->package_for))->orderBy('package_name','asc')->first();

        return view('backend/admin/main', compact('page_name','page_title','current_page','includes','package_types'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'package_for' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string',
        ]);
          
        if(!empty($request->includes_image)){
                
            $imageName = time().'-image.'.$request->includes_image->extension();

            $request->includes_image->move(public_path('uploads/includes-image'), $imageName);

            $image = "uploads/includes-image/".$imageName;

            $data += array('includes_image'=>$image);
        }

        PackageIncludes::where(array('status'=>1,'id'=>$id))->update($data);

        return redirect()->back()->with('success', 'Package Includes updated successfully.');
    }

    public function destroy($id)
    {
        $data = array('status' =>0);

        $result = PackageIncludes::where(array('id'=>$id))->update($data);

        return redirect()->back()->with('success', 'Package Includes deleted successfully.');
    }
    
}
