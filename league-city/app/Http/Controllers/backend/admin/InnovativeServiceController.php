<?php

namespace App\Http\Controllers\backend\admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\InnovativeService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class InnovativeServiceController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $page_name = "innovative_services/add";
        $page_title = "Manage Innovative Services";
        $current_page = "innovative_services";

        return view('backend.admin.main', compact('page_name', 'page_title', 'current_page'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'description' => 'required',
            'link' => 'required|url',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'icon' => $request->icon,
            'description' => $request->description,
            'link' => $request->link,
            'status' => $request->status ?? '1',
        ];

        $response = InnovativeService::create($data);

        if ($response->id > 0) {
            return redirect()->route('innovative_services.list')->with('success', 'Service Added Successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function list()
    {
        $page_name = "innovative_services/list";
        $page_title = "Manage Innovative Services";
        $current_page = "innovative_services";
        $list = InnovativeService::where('status', '1')->orderBy('id', 'desc')->paginate(20);

        return view('backend.admin.main', compact('page_name', 'page_title', 'current_page', 'list'));
    }

    public function edit($id)
    {
        $page_name = "innovative_services/edit";
        $page_title = "Edit Innovative Service";
        $current_page = "innovative_services";
        $service = InnovativeService::findOrFail($id);

        return view('backend.admin.main', compact('page_name', 'page_title', 'current_page', 'service'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'description' => 'required',
            'link' => 'required|url',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $service = InnovativeService::findOrFail($id);

        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'icon' => $request->icon,
            'description' => $request->description,
            'link' => $request->link,
            'status' => $request->status ?? '1',
        ];

        $result = $service->update($data);

        if ($result) {
            return redirect()->route('innovative_services.list')->with('success', 'Service Updated Successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function destroy($id)
    {

        $result = InnovativeService::where('id', $id)->update(['status' => '0']);

        if ($result) {
            return redirect()->back()->with('success', 'Service Deleted Successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
