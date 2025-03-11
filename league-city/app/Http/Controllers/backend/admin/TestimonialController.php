<?php

namespace App\Http\Controllers\backend\admin;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator; // Debugging ke liye

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

        // $testimonials = Testimonial::where('status','1')->orderBy('id', 'desc')->paginate(10);
        $testimonials = Testimonial::where('status', '1')->orderBy('position', 'asc')->paginate(10);


        return view('backend/admin/main', compact('page_name', 'page_title', 'current_page', 'testimonials'));
    }
    public function create()
    {
        $page_name = "testimonial/add";

        $page_title = "Add Testimonial";

        $current_page = "addtestimonials";

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
        // Get the last position and set new position
        $lastPosition = Testimonial::max('position') ?? 0;
        $newPosition = $lastPosition + 1;
        // Prepare data for updateOrCreate
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'status'           => $request->input('status', 1), // from select (default Active)
            'show_at_homepage' => $request->has('show_at_homepage'),
            'position' => $newPosition, // Assign new position
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
    // public function destroy($id)
    // {
    //     $testimonial = Testimonial::find($id);
    //     if ($testimonial) {
    //         $testimonial->status = $testimonial->status == 1 ? 0 : 1;
    //         $testimonial->save();

    //         return redirect()->back()->with('success', 'Testimonial deleted successfully');
    //     } else {
    //         return redirect()->back()->with('error', 'Testimonial not found');
    //     }
    // }
    // public function sort(Request $request)
    // {
    //     $order = $request->input('order'); // Array of ID & position

    //     if (!$order || !is_array($order)) {
    //         return response()->json(['error' => 'Invalid order data'], 400);
    //     }

    //     // Get all testimonials sorted by existing position
    //     $testimonials = Testimonial::orderBy('position')->get()->keyBy('id');

    //     // Step 1: Clear old positions
    //     foreach ($testimonials as $testimonial) {
    //         $testimonial->position = null;
    //     }

    //     // Step 2: Assign new positions sequentially
    //     foreach ($order as $index => $item) {
    //         if (isset($testimonials[$item['id']])) {
    //             $testimonials[$item['id']]->position = $item['position'];
    //         }
    //     }

    //     // Step 3: Sort again and reassign positions from 1 to N
    //     $sortedTestimonials = $testimonials->sortBy('position')->values();
    //     foreach ($sortedTestimonials as $index => $testimonial) {
    //         $testimonial->position = $index + 1;
    //         $testimonial->save();
    //     }

    //     return response()->json(['message' => 'Order updated successfully']);
    // }


    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);
        if ($testimonial) {
            $testimonial->status = $testimonial->status == 1 ? 0 : 1;
            $testimonial->save();

            // Reorder positions
            $this->reorderPositions();

            return redirect()->back()->with('success', 'Testimonial status updated successfully');
        } else {
            return redirect()->back()->with('error', 'Testimonial not found');
        }
    }

    private function reorderPositions()
    {
        $testimonials = Testimonial::where('status', 1)->orderBy('position')->get();
        foreach ($testimonials as $index => $testimonial) {
            $testimonial->position = $index + 1;
            $testimonial->save();
        }
    }

    // //duplicate no
    // public function sort(Request $request)
    // {
    //     Log::info('Received Position Update:', ['order' => $request->all()]); // Debugging

    //     if (!$request->has('order')) {
    //         Log::error('Order data missing in request.');
    //         return response()->json(['message' => 'Invalid Data Received'], 400);
    //     }

    //     $order = $request->input('order', []);

    //     if (empty($order)) {
    //         Log::error('Empty order array received.');
    //         return response()->json(['message' => 'Invalid Data Received'], 400);
    //     }

    //     // Extract all positions from input
    //     $positions = array_column($order, 'position');

    //     // Check for duplicate positions
    //     if (count($positions) !== count(array_unique($positions))) {
    //         Log::error('Duplicate positions detected.', ['positions' => $positions]);
    //         return response()->json(['message' => 'Duplicate positions are not allowed!'], 400);
    //     }

    //     // Update positions if valid
    //     foreach ($order as $item) {
    //         Testimonial::where('id', $item['id'])->update(['position' => $item['position']]);
    //         Log::info("Updated ID: {$item['id']} => Position: {$item['position']}"); // Debugging
    //     }

    //     return response()->json(['message' => 'Positions updated successfully.']);
    // }


    public function sort(Request $request)
    {
        Log::info('Received Position Update:', ['order' => $request->all()]); // Debugging

        if (!$request->has('order')) {
            return response()->json(['message' => 'Invalid Data Received'], 400);
        }

        $order = $request->input('order', []);

        if (empty($order)) {
            return response()->json(['message' => 'Invalid Data Received'], 400);
        }

        $positions = array_column($order, 'position');

        // Prevent duplicate positions
        if (count($positions) !== count(array_unique($positions))) {
            return response()->json(['message' => 'Duplicate Orders are not allowed!'], 400);
        }

        foreach ($order as $item) {
            Testimonial::where('id', $item['id'])->update(['position' => $item['position']]);
        }

        return response()->json(['message' => 'Order updated successfully.']);
    }
}
