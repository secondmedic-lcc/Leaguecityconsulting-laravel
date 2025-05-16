<?php

namespace App\Http\Controllers\backend\admin;


use App\Models\Sector;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SectorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $page_name = "sector/add";
        $page_title = "Manage Sectors";
        $current_page = "sector";

        return view('backend.admin.main', compact('page_name', 'page_title', 'current_page'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'subtitle' => 'nullable|string',
            'description' => 'required|string',
            'button_text' => 'nullable|string',
            'button_link' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = [
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'button_text' => $request->button_text,
            'button_link' => $request->button_link,
            'slug' => Str::slug($request->title),
        ];

        if ($request->hasFile('image')) {
            $imageName = time() . '_sector.' . $request->image->extension();
            $request->image->move(public_path('uploads/sectors'), $imageName);
            $data['image'] = 'uploads/sectors/' . $imageName;
        }

        $response = Sector::create($data);

        if ($response->id > 0) {
            return redirect()->route('sector.list')->with('success', 'Sector Added Successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function list()
    {
        $page_name = "sector/list";
        $page_title = "Manage Sectors";
        $current_page = "sector";
        $list = Sector::orderBy('id', 'desc')->paginate(20);

        return view('backend.admin.main', compact('page_name', 'page_title', 'current_page', 'list'));
    }

    public function edit($id)
    {
        $page_name = "sector/edit";
        $page_title = "Manage Sectors";
        $current_page = "sector";
        $sector = Sector::findOrFail($id);

        return view('backend.admin.main', compact('page_name', 'page_title', 'current_page', 'sector'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'subtitle' => 'nullable|string',
            'description' => 'required|string',
            'button_text' => 'nullable|string',
            'button_link' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $sector = Sector::findOrFail($id);

        $data = [
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'button_text' => $request->button_text,
            'button_link' => $request->button_link,
            'slug' => Str::slug($request->title),
        ];

        if ($request->hasFile('image')) {
            if ($sector->image && file_exists(public_path($sector->image))) {
                @unlink(public_path($sector->image));
            }

            $imageName = time() . '_sector.' . $request->image->extension();
            $request->image->move(public_path('uploads/sectors'), $imageName);
            $data['image'] = 'uploads/sectors/' . $imageName;
        }

        $result = $sector->update($data);

        if ($result) {
            return redirect()->route('sector.list')->with('success', 'Sector Updated Successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function destroy($id)
    {
        $result = Sector::where('id', $id)->delete();

        if ($result) {
            return redirect()->back()->with('success', 'Sector Deleted Successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
