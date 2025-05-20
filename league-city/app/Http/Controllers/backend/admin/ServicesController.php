<?php

namespace App\Http\Controllers\backend\admin;

use App\Models\SeoData;
use App\Models\Services;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ServicesDetails;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    public function index()
    {
        $page_name = "services/list";

        $page_title = "Manage Services";

        $current_page = "services";

        $services = Services::where(array('status' => 1))->orderBy('id', 'desc')->paginate(20);

        return view('backend/admin/main', compact('page_name', 'page_title', 'current_page', 'services'));
    }

    public function create()
    {
        $page_name = "services/add";

        $page_title = "Manage Services";

        $current_page = "services";

        return view('backend/admin/main', compact('page_name', 'page_title', 'current_page'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'heading' => 'required|string',
            'sub_heading' => 'nullable|string',
            'min_description' => 'nullable|string',
            'description' => 'required|string',
            'services_image' => 'mimes:webp|max:150'
        ]);

        if (!empty($request->services_image)) {

            $imageName = time() . '-image.' . $request->services_image->extension();

            $request->services_image->move(public_path('uploads/services'), $imageName);

            $image = "uploads/services/" . $imageName;

            $data += array('image' => $image);

            $data2['meta_image'] = $image;
        }

        $url_slug = Str::slug($request->name . "-");

        $check = Services::where(array('url_slug' => $url_slug))->first();

        if (empty($check)) {

            $data['url_slug'] = $url_slug;


            $result = Services::create($data);

            $page_link = "services/" . $url_slug;
            $data2['page_link'] = $page_link;
            $data2['page_name'] = "services-details";
            $data2['meta_title'] = $request->meta_title;
            $data2['meta_key'] = $request->meta_key;
            $data2['meta_description'] = $request->meta_description;
            $data2['canonical'] = $page_link;
            $data2['service_id'] = $result->id;

            $result2 = SeoData::create($data2);

            return redirect()->route('services')->with('success', 'services created successfully.');
        } else {

            return redirect()->back()->with('error', 'Another services Already Exist From this Name')->withInput();
        }
    }

    public function edit($id)
    {
        $page_name = "services/edit";

        $page_title = "Manage services";

        $current_page = "services";

        $services = Services::where(array('status' => 1, 'id' => $id))->get()->first();

        $seo_data = SeoData::where(array('service_id' => $id, 'page_name' => 'services-details'))->get()->first();

        return view('backend/admin/main', compact('page_name', 'page_title', 'current_page', 'services', 'seo_data'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'heading' => 'required|string',
            'sub_heading' => 'nullable|string',
            'min_description' => 'nullable|string',
            'description' => 'required|string',
            'banner_heading' => 'nullable|string',
            'banner_sub_heading' => 'nullable|string',
            'banner_details' => 'nullable|string',
        ]);

        if (!empty($request->image)) {

            $imageName = time() . '-image.' . $request->image->extension();

            $request->image->move(public_path('uploads/services'), $imageName);

            $image = "uploads/services/" . $imageName;

            $data += array('image' => $image);
            $data2['meta_image'] = $image;
        }

        $url_slug = Str::slug($request->name . "-");
        $data['url_slug'] = $url_slug;

        Services::where(array('status' => 1, 'id' => $id))->update($data);

        $page_link = "services/" . Str::slug($request->name . "-" . $id);
        $data2['page_link'] = $page_link;
        $data2['service_id'] = $id;
        $data2['page_name'] = "services-details";
        $data2['meta_title'] = $request->meta_title;
        $data2['meta_key'] = $request->meta_key;
        $data2['meta_description'] = $request->meta_description;
        $data2['canonical'] = $page_link;

        $check = SeoData::where(array('page_name' => $data2['page_name'], 'service_id' => $id))->first();

        if (empty($check)) {
            SeoData::insert($data2);
        } else {
            SeoData::where(array('page_name' => $data2['page_name'], 'service_id' => $id))->update($data2);
        }

        return redirect()->route('services')->with('success', 'Services updated successfully.');
    }

    public function delete($id)
    {

        $data = array('status' => 0);

        $result = Services::where(array('id' => $id))->update($data);

        return redirect()->route('services')->with('success', 'Services deleted successfully.');
    }

    public function update_description(Request $request, $id)
    {
        $data = $request->validate([
            'sub_heading' => 'required|string',
            'banner_heading' => 'required|string',
            'banner_sub_heading' => 'required|string',
            'banner_details' => 'required|string',
        ]);

        $data['sub_heading'] = $request->sub_heading;

        $check = Services::where(array('status' => 1, 'id' => $id))->update($data);

        if ($check > 0) {
            return redirect()->back()->with('success', 'services Data updated successfully.');
        } else {

            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function update_section(Request $request, $id)
    {
        $data = $request->validate([
            'section_heading' => 'required|string',
            'desc_heading' => 'required|string',
        ]);

        $data['section_heading'] = $request->section_heading;
        $data['desc_heading'] = $request->desc_heading;


        $check = Services::where(array('status' => 1, 'id' => $id))->update($data);

        if ($check > 0) {
            return redirect()->back()->with('success', 'services Data updated successfully.');
        } else {

            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function update_sub_section(Request $request, $id)
    {
        $data = $request->validate([
            'section_heading1' => 'required|string',
            'section_sub_heading1' => 'required|string',
        ]);
        $data['section_heading1'] = $request->section_heading1;
        $data['section_sub_heading1'] = $request->section_sub_heading1;


        $check = Services::where(array('status' => 1, 'id' => $id))->update($data);

        if ($check > 0) {
            return redirect()->back()->with('success', 'services Data updated successfully.');
        } else {

            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
