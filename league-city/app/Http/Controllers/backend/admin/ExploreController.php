<?php
namespace App\Http\Controllers\backend\admin;

use Illuminate\Http\Request;
use App\Models\ExploreSection;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ExploreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Show add form
    public function index()
    {
        $page_name = 'explore/add';
        $page_title = 'Manage Explore Section';
        $current_page = 'explore';

        return view('backend.admin.main', compact('page_name', 'page_title', 'current_page'));
    }

    // Store new record
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'heading' => 'required|string|max:255',
            'description' => 'required',
            'position' => 'required|in:left,right',
            'button_text' => 'nullable|string|max:255',
            'button_url' => 'nullable|string|max:255',
            'status' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        ExploreSection::create($request->only([
            'heading', 'description', 'button_text', 'button_url', 'position', 'status'
        ]));

        return redirect()->route('explore.list')->with('success', 'Explore Section Created Successfully');
    }

    // List all records
    public function list()
    {
        $page_name = 'explore/list';
        $page_title = 'Explore Sections';
        $current_page = 'explore';
        $list = ExploreSection::orderBy('id', 'desc')->where('status', 1 )->paginate(20);

        return view('backend.admin.main', compact('page_name', 'page_title', 'current_page', 'list'));
    }

    // Show edit form
    public function edit($id)
    {
        $page_name = 'explore/add';
        $page_title = 'Edit Explore Section';
        $current_page = 'explore';
        $edit = ExploreSection::findOrFail($id);

        return view('backend.admin.main', compact('page_name', 'page_title', 'current_page', 'edit'));
    }

    // Update record
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'heading' => 'required|string|max:255',
            'description' => 'required',
            'position' => 'required|in:left,right',
            'button_text' => 'nullable|string|max:255',
            'button_url' => 'nullable|string|max:255',
            'status' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $explore = ExploreSection::findOrFail($id);
        $explore->update($request->only([
            'heading', 'description', 'button_text', 'button_url', 'position', 'status'
        ]));

        return redirect()->route('explore.list')->with('success', 'Explore Section Updated Successfully');
    }

    // Soft Delete
    public function destroy($id)
    {
        $result = ExploreSection::where('id', $id)->update(['status' => 0]);

        if ($result) {
            return redirect()->back()->with('success', 'Explore Section Deactivated');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
