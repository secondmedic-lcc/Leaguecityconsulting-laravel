<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customers;
use App\Models\PartnerType;
use Illuminate\Support\Facades\Validator;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\CustomerAddress;
use Illuminate\Support\Facades\Crypt;

class CustomersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $page_name = "customers/add";
        
        $page_title = "Manage Customers";
        
        $current_page = "customers";

        $country = Country::all();

        // $state = State::all();

        // $city = City::all();

        return view('backend/admin/main', compact('page_name','page_title','current_page','country'));
    }


    public function create(){ }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50',
            'dob' => 'required',
            'contact' => 'required|unique:customers|min:10|max:10',
            'email' => 'required|email|min:8|max:50',
            'password' => 'required|min:5|max:10',
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();

        } else{

            $data['name'] = $request->name;
            $data['dob'] = $request->dob;
            $data['email'] = $request->email;
            $data['contact'] = $request->contact;
            $data['password'] = md5($request->password);
            $data['current_status'] = $request->current_status;

            $result = Customers::create($data);

            $customer_id = $result->id;

            $data2['name'] = $request->name;
            $data2['email'] = $request->email;
            $data2['contact'] = $request->contact;
            $data2['customer_id'] = $customer_id;
            $data2['house_no'] = $request->house_no;
            $data2['address'] = $request->address;
            $data2['landmark'] = $request->landmark;
            $data2['pincode'] = $request->pincode;
            $data2['country'] = $request->country;
            $data2['state'] = $request->state;
            $data2['city'] = $request->city;
            $data2['default_address'] = 1;

            $result2 = CustomerAddress::create($data2);

            if($result2->id > 0){
                return redirect()->back()->with('success', 'Customer Added successfully');
            }else{
                return redirect()->back()->with('error', 'Something went Wrong');
            }
        }
    }

    public function show($id){
        
    }

   
    public function list()
    {
        $page_name = "customers/list";
        
        $page_title = "Manage customers";
        
        $current_page = "customers";

        $list = Customers::where(array('status'=>1))->orderBy('id','desc')->get();

        return view('backend/admin/main', compact('page_name','page_title','current_page','list'));
    }

    public function edit($id)
    {
        $page_name = "customers/edit";
        
        $page_title = "Manage customers";
        
        $current_page = "customers";

        $customer = Customers::where(array('id'=>$id))->get()->first();

        return view('backend/admin/main', compact('page_name','page_title','current_page','customer'));
    }

    
    public function update(Request $request, $id){
       
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50',
            'dob' => 'required',
            'contact' => 'required|min:10|max:10',
            'email' => 'required|min:8|max:50',
            'password' => 'max:20',
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();

        } else{

            $data['name'] = $request->name;
            $data['dob'] = $request->dob;
            $data['email'] = $request->email;
            $data['contact'] = $request->contact;
            
            if($request->password != ""){
                $data['password'] = md5($request->password);
            }

            $data['current_status'] = $request->current_status;

            $result = Customers::where(array('id'=>$id))->update($data);

            if($result > 0){
                return redirect()->back()->with('success', 'Customer Updated successfully');
            }else{
                return redirect()->back()->with('error', 'Something went Wrong');
            }
        }
    }

    
    public function destroy($id){
      
        $data = array('status' =>0);

        $result = Customers::where(array('id'=>$id))->update($data);

        if($result > 0){
            return redirect()->back()->with('success', 'Customer Deleted successfully');
        }else{
            return redirect()->back()->with('error', 'Something went Wrong');
        }
    }
}
