<?php

namespace App\Http\Controllers\backend\admin;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class TestimonialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $page_name = "testimonial/list";

        $page_title = "Manage Testimonials";

        $current_page = "testimonials";

        $testimonials = Testimonial::where('status','1')->orderBy('id', 'desc')->paginate(10);

        return view('backend/admin/main', compact('page_name', 'page_title', 'current_page', 'testimonials'));
    }
    public function create()
    {
        $page_name = "testimonial/add";

        $page_title = "Add Testimonial";

        $current_page = "testimonials";

        return view('backend/admin/main', compact('page_name', 'page_title', 'current_page'));
    }



    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Prepare data for updateOrCreate
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'status'           => $request->input('status', 1), // from select (default Active)
            'show_at_homepage' => $request->has('show_at_homepage'),
        ];

        // Handle Image Upload
        if ($request->hasFile('image')) {
            $imageName = time() . '-' . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/testimonials'), $imageName);
            $data['image'] = "uploads/testimonials/" . $imageName;
        }

        // Update or Create About Us record
        Testimonial::create($data);

        return redirect()->route('testimonials.index')->with('success', 'Testimonial saved successfully');
    }
    public function edit($id)
    {
        $page_name = "testimonial/edit";

        $page_title = "Edit Testimonial";

        $current_page = "testimonials";

        $testimonial = Testimonial::find($id);

        return view('backend/admin/main', compact('page_name', 'page_title', 'current_page', 'testimonial'));
    }

    public function update(Request $request, $id)  // Update Testimonial
    {
        $testimonial = Testimonial::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'status'           => $request->input('status', $testimonial->status), // from select (default Active)
            'show_at_homepage' => $request->input('show_at_homepage', $testimonial->show_at_homepage),
        ];

        if ($request->hasFile('image')) {
            if ($testimonial->image && File::exists(public_path($testimonial->image))) {
                File::delete(public_path($testimonial->image)); // Delete old image
            }

            $imageName = time() . '-' . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/testimonials'), $imageName);
            $data['image'] = "uploads/testimonials/" . $imageName;
        }

        $testimonial->update($data);

        return redirect()->route('testimonials.index')->with('success', 'Testimonial updated successfully');
    }
    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);
        if ($testimonial) {
            $testimonial->status = $testimonial->status == 1 ? 0 : 1;
            $testimonial->save();

            return redirect()->back()->with('success', 'Testimonial deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Testimonial not found');
        }
    }

}
