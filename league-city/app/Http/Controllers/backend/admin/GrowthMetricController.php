<?php

namespace App\Http\Controllers\backend\admin;

use App\Models\GrowthMetric;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class GrowthMetricController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $page_name = "growthmetric/add";
        $page_title = "Manage Growth Metric";
        $current_page = "growthmetric";

        return view('backend.admin.main', compact('page_name', 'page_title', 'current_page'));
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:500',
            'icon_class' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'icon_class' => $request->icon_class,
            'status' => 1,
        ];

        $response = GrowthMetric::create($data);

        if ($response->id > 0) {
            return redirect()->route('growthmetric.list')->with('success', 'Growth Metric Added Successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }


    public function list()
    {
        $page_name = "growthmetric/list";
        $page_title = "Manage Growth Metric";
        $current_page = "growthmetric";
        $list = GrowthMetric::where('status', 1)->orderBy('id', 'desc')->paginate(20);

        return view('backend.admin.main', compact('page_name', 'page_title', 'current_page', 'list'));
    }


    public function edit($id)
    {
        $page_name = "growthmetric/edit";
        $page_title = "Manage Growth Metric";
        $current_page = "growthmetric";
        $growthmetric = GrowthMetric::findOrFail($id);

        return view('backend.admin.main', compact('page_name', 'page_title', 'current_page', 'growthmetric'));
    }


    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:500',
            'icon_class' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $growthmetric = GrowthMetric::findOrFail($id);

        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'icon_class' => $request->icon_class,
        ];

        $result = $growthmetric->update($data);

        if ($result) {
            return redirect()->route('growthmetric.list')->with('success', 'Growth Metric Updated Successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }


    public function destroy($id)
    {
        $result = GrowthMetric::where('id', $id)->update(['status' => 0]);

        if ($result) {
            return redirect()->back()->with('success', 'Growth Metric Deleted Successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
