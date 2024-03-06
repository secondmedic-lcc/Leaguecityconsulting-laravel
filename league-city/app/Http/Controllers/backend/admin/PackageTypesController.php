<?php
namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PackageTypes;

class PackageTypesController extends Controller
{
    
    public function index()
    {
        $page_name = "package-types/list";
        
        $page_title = "Manage Package Type";
        
        $current_page = "package-types";

        $packageTypes = PackageTypes::where('status',1)->orderBy('id','desc')->get();

        return view('backend/admin/main', compact('page_name','page_title','current_page','packageTypes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'package_name' => 'required|string|max:255',
            'package_slug' => 'required|string|max:255|unique:package_types',
        ]);

        PackageTypes::create($request->all());

        return redirect()->route('package.types')->with('success', 'Package type created successfully.');
    }

    public function edit(PackageTypes $packageType)
    {
        $page_name = "package-types/edit";
        
        $page_title = "Manage Package Type";
        
        $current_page = "package-types";

        return view('backend/admin/main', compact('page_name','page_title','current_page','packageType'));
    }

    public function update(Request $request, PackageTypes $packageType)
    {
        $request->validate([
            'package_name' => 'required|string|max:255',
            'package_slug' => 'required|string|max:255|unique:package_types,package_slug,' . $packageType->id,
        ]);

        $packageType->update($request->all());

        return redirect()->route('package.types')->with('success', 'Package type updated successfully.');
    }

   
    public function destroy($id)
    {
        $data = array('status' =>0);

        $result = PackageTypes::where(array('id'=>$id))->update($data);

        return redirect()->route('package.types')->with('success', 'Package type deleted successfully.');
    }
}


