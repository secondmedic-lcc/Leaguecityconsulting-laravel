<?php

namespace App\Http\Controllers\backend\admin;

use Illuminate\Http\Request;
use App\Models\ProcessWeFollow;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ProcessWeFollowController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');  // ensure user is authenticated
    }


    public function index()
    {
        $page_name = "process_we_follow/add";
        $page_title = "Manage Process We Follow";
        $current_page = "process_we_follow";

        return view('backend.admin.main', compact('page_name', 'page_title', 'current_page'));
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'order' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'order' => $request->order,
            'status' => 1,
        ];

        $response = ProcessWeFollow::create($data);

        if ($response->id > 0) {
            return redirect()->route('process_we_follow.list')->with('success', 'Process Step Added Successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }


    public function list()
    {
        $page_name = "process_we_follow/list";
        $page_title = "Manage Process We Follow";
        $current_page = "process_we_follow";

        $list = ProcessWeFollow::where('status', 1)->orderBy('order', 'asc')->paginate(20);

        return view('backend.admin.main', compact('page_name', 'page_title', 'current_page', 'list'));
    }


    public function edit($id)
    {
        $page_name = "process_we_follow/edit";
        $page_title = "Manage Process We Follow";
        $current_page = "process_we_follow";

        $processWeFollow = ProcessWeFollow::findOrFail($id);

        return view('backend.admin.main', compact('page_name', 'page_title', 'current_page', 'processWeFollow'));
    }


    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'order' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $process = ProcessWeFollow::findOrFail($id);

        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'order' => $request->order,
        ];

        $result = $process->update($data);

        if ($result) {
            return redirect()->route('process_we_follow.list')->with('success', 'Process Step Updated Successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function destroy($id)
    {
        $result = ProcessWeFollow::where('id', $id)->update(['status' => 0]);

        if ($result) {
            return redirect()->back()->with('success', 'Process Step Deleted Successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
