<?php

namespace App\Http\Controllers\backend\admin;


use App\Models\Technology;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class TechnologyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $page_name = 'technology/list';
        $page_title = 'Manage Technology';
        $current_page = 'technology';
        $list = Technology::where('status', 1)->orderBy('order')->paginate(20);

        return view('backend.admin.main', compact('page_name', 'page_title', 'current_page', 'list'));
    }

    public function create()
    {
        $page_name = 'technology/add';
        $page_title = 'Add Technology';
        $current_page = 'technology';

        return view('backend.admin.main', compact('page_name', 'page_title', 'current_page'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
            'features' => 'nullable|array',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $imageName = time() . '_tech.' . $request->image->extension();
        $request->image->move(public_path('uploads/technologies'), $imageName);

        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'image' => 'uploads/technologies/' . $imageName,
            'features' => json_encode($request->features),
            'order' => $request->order ?? 0,
            'status' => 1,
        ];

        $result = Technology::create($data);

        if ($result->id > 0) {
            return redirect()->route('technology.list')->with('success', 'Technology Added Successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function edit($id)
    {
        $technology = Technology::findOrFail($id);

        $page_name = 'technology/edit';
        $page_title = 'Edit Technology';
        $current_page = 'technology';

        return view('backend.admin.main', compact('page_name', 'page_title', 'current_page', 'technology'));
    }

    public function update(Request $request, $id)
    {
        $technology = Technology::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,sv,webp|max:2048',
            'features' => 'nullable|array',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'features' => json_encode($request->features),
            'order' => $request->order ?? 0,
        ];

        if ($request->hasFile('image')) {
            // Delete old image
            if ($technology->image && file_exists(public_path($technology->image))) {
                @unlink(public_path($technology->image));
            }

            $imageName = time() . '_tech.' . $request->image->extension();
            $request->image->move(public_path('uploads/technologies'), $imageName);
            $data['image'] = 'uploads/technologies/' . $imageName;
        }

        $result = $technology->update($data);

        if ($result) {
            return redirect()->route('technology.list')->with('success', 'Technology Updated Successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function destroy($id)
    {
        $result = Technology::where('id', $id)->update(['status' => 0]);

        if ($result) {
            return redirect()->back()->with('success', 'Technology Deleted Successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
