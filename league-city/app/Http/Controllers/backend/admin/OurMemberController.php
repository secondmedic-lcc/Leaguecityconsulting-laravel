<?php

namespace App\Http\Controllers\backend\admin;

use App\Models\SeoData;
use App\Models\TeamMember;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class OurMemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
        $page_name = "teammember/list";

        $page_title = "Manage Team Member";

        $current_page = "member";

        $teamMembers = TeamMember::where(array('status' => 1))->orderBy('id', 'desc')->paginate(20);

        return view('backend/admin/main', compact('page_name', 'page_title', 'current_page', 'teamMembers'));
    }



    public function create()
    {
        $page_name = "teammember/add";

        $page_title = "Add Team Member";

        $current_page = "addmember";

        return view('backend/admin/main', compact('page_name', 'page_title', 'current_page'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'designation' => 'required|string',
            'username' => 'nullable|string|unique:team_members,username',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create a new Team Member
        $teamMember = new TeamMember();
        $teamMember->name = $request->name;
        $teamMember->designation = $request->designation;
        $teamMember->username = $request->username;

        // Handle Image Upload
        if ($request->hasFile('image')) {
            $imageName = time() . '-' . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/member'), $imageName);
            $teamMember->image = "uploads/member/" . $imageName;
        }

        if ($teamMember->save()) {
            // Store SEO data
            SeoData::create([
                'page_title' => $teamMember->name,
                'slug' => Str::slug($teamMember->name),
                'meta_keywords' => json_encode([$teamMember->name, $teamMember->designation]),
            ]);

            return redirect()->route('team-members.index')->with('success', 'Team Member Added Successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }


    public function edit($id)
    {
        $page_name = "teammember/edit";

        $page_title = "Edit Team Member";

        $current_page = "member";

        $team_member = TeamMember::where(array('status' => 1, 'id' => $id))->get()->first();

        return view('backend/admin/main', compact('page_name', 'page_title', 'current_page', 'team_member',));
    }


    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'designation' => 'required|string',
            'username' => 'nullable|string|unique:team_members,username,' . $id,
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $teamMember = TeamMember::findOrFail($id);
        $teamMember->name = $request->name;
        $teamMember->designation = $request->designation;
        $teamMember->username = $request->username;

        // Handle Image Upload
        if ($request->hasFile('image')) {
            $imageName = time() . '-' . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/member'), $imageName);
            $teamMember->image = "uploads/member/" . $imageName;
        }

        if ($teamMember->save()) {
            // Update SEO Data
            SeoData::updateOrCreate(
                ['service_id' => $id, 'page_name' => 'team-member'],
                [
                    'page_title' => $teamMember->name,
                    'slug' => Str::slug($teamMember->name),
                    'meta_keywords' => json_encode([$teamMember->name, $teamMember->designation]),
                ]
            );

            return redirect()->route('team-members.index')->with('success', 'Team Member Details Updated Successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function destroy($id)
    {

        $data = array('status' => 0);

        $result = TeamMember::where(array('id' => $id))->update($data);

        if ($result > 0) {
            return redirect()->back()->with('success', 'Team Member Deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Something went Wrong');
        }
    }
}
