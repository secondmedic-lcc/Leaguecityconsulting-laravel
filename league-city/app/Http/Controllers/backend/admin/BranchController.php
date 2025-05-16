<?php

namespace App\Http\Controllers\backend\admin;

use App\Models\Branch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BranchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $page_name = "branch/add";
        $page_title = "Manage Branch";
        $current_page = "branch";

        return view('backend.admin.main', compact('page_name', 'page_title', 'current_page'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'branch_name' => 'required',
            'branch_address' => 'required',
            'branch_image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = [
            'branch_name' => $request->branch_name,
            'branch_address' => $request->branch_address,
        ];

        if ($request->hasFile('branch_image')) {
            $imageName = time() . '_branch.' . $request->branch_image->extension();
            $request->branch_image->move(public_path('uploads/branches'), $imageName);
            $data['branch_image'] = 'uploads/branches/' . $imageName;
        }

        $response = Branch::create($data);

        if ($response->id > 0) {
            return redirect()->route('branch.list')->with('success', 'Branch Added Successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function list()
    {
        $page_name = "branch/list";
        $page_title = "Manage Branch";
        $current_page = "branch";
        $list = Branch::where('status', 1)->orderBy('id', 'desc')->paginate(20);

        return view('backend.admin.main', compact('page_name', 'page_title', 'current_page', 'list'));
    }

    public function edit($id)
    {
        $page_name = "branch/edit";
        $page_title = "Manage Branch";
        $current_page = "branch";
        $branch = Branch::findOrFail($id);

        return view('backend.admin.main', compact('page_name', 'page_title', 'current_page', 'branch'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'branch_name' => 'required',
            'branch_address' => 'required',
            'branch_image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $branch = Branch::findOrFail($id);

        $data = [
            'branch_name' => $request->branch_name,
            'branch_address' => $request->branch_address,
        ];

        if ($request->hasFile('branch_image')) {
            if ($branch->branch_image && file_exists(public_path($branch->branch_image))) {
                @unlink(public_path($branch->branch_image));
            }

            $imageName = time() . '_branch.' . $request->branch_image->extension();
            $request->branch_image->move(public_path('uploads/branches'), $imageName);
            $data['branch_image'] = 'uploads/branches/' . $imageName;
        }

        $result = $branch->update($data);

        if ($result) {
            return redirect()->route('branch.list')->with('success', 'Branch Updated Successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function destroy($id)
    {
        $result = Branch::where('id', $id)->update(['status' => 0]);

        if ($result) {
            return redirect()->back()->with('success', 'Branch Deleted Successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
