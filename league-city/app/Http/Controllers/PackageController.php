<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebsiteBanners;
use App\Models\PackageTypes;
use App\Models\PackagePageDetails;
use App\Models\PackageIncludes;
use App\Models\Packages;
use App\Models\PackageKeyPoint;
use App\Models\PackageSubKeyPoint;
use App\Models\PackageRequest;
use Illuminate\Support\Facades\Validator;

class PackageController extends Controller
{

    public function index()
    {

        $page_name = "package";

        $page_title = "package";

        $current_page = "package-type";

        $web_banner = WebsiteBanners::where(array('status' => 1, 'page_name' => $current_page))->orderBy('id', 'desc')->get()->first();

        $schema_image = @$web_banner['banner_image'];

        $seo_data_breadcrumb =
            '<script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "BreadcrumbList",
                "itemListElement": 
                [
                    {
                        "@type": "ListItem",
                        "position": 1,
                        "name": "Home",
                        "item": "https://www.leaguecityconsulting.com"
                    },
                    {
                        "@type": "ListItem",
                        "position": 2,
                        "name": "About Us"
                    }
                ]
            }
        </script>';
        
		$url = $_SERVER['REQUEST_URI'];
        $this->path = pathinfo($url, PATHINFO_BASENAME);

        $package_types = PackageTypes::where(array('status'=>1,'package_slug'=>$this->path))->first();

        $details = PackagePageDetails::where(array('status'=>1,'package_id'=>$package_types->id))->first();

        $property = PackageIncludes::where(array('status'=>1,'package_for'=>$package_types->id))->get();

        $plans = Packages::where(array('status'=>1,'package_for'=>$package_types->id))->get();

        $plans_list = [];

        foreach ($plans as $p) {
            $keyPoints = PackageKeyPoint::where(['status' => 1, 'package_id' => $p->id])->get();

            $keyList = [];
            foreach ($keyPoints as $k) {
                $subKeyPoints = PackageSubKeyPoint::where(['status' => 1, 'keypoint_id' => $k->id])->get();
                $k->sub_key = $subKeyPoints;
                $keyList[] = $k;
            }

            $plans_list[$p->id] = [
                'package' => $p,
                'keypoints' => $keyList,
            ];
        }

        return view('frontend/main', compact('page_name', 'page_title', 'current_page', 'web_banner', 'schema_image', 'seo_data_breadcrumb','package_types','details','property','plans','plans_list'));
    }

    
    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50',
            'email' => 'required|max:50',
            'contact' => 'required|min:8|max:12',
            'location' => 'required|max:50',
            'about' => 'required',
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();

        } else{

            $data['name'] = $request->name;
            $data['email'] = $request->email;
            $data['mobile'] = $request->contact;
            $data['location'] = $request->location;
            $data['plan'] = $request->plan_name;
            $data['package'] = $request->package_type;
            $data['about'] = $request->about;

            $result = PackageRequest::create($data);
            
            $mail_var = array(
                'var1' => $request->name,
                'var2' => $request->email,
                'var3' => $request->contact,
                'var4' => $request->location,
                'var5' => $request->plan_name,
                'var6' =>  $request->package_type,
                'var7' =>  $request->about,
                'var8' => "",
            );
            
            send_mail($request->email, '0903PR', $mail_var);

            if($result->id > 0){
                return redirect()->back()->with('success', 'Thank you for requesting');
            }else{
                return redirect()->back()->with('error', 'Something went Wrong');
            }
        }
    }

    
    /* public function store(){

        extract($_POST);

        $data['name'] = $name;
        $data['email'] = $email;
        $data['mobile'] = $contact;
        $data['location'] = $location;
        $data['plan'] = $plan_name;
        $data['package'] = $package_type;
        $data['about'] = $about;

        $result = PackageRequest::create($data);

        $mail_var = array(
            'var1' => $name,
            'var2' => $email,
            'var3' => $contact,
            'var4' => $location,
            'var5' => $plan_name,
            'var6' => $package_type,
            'var7' => $about,
            'var8' => "",
        );

        send_mail($email, '0903PR', $mail_var);

        if ($result->id > 0) {
            
            return response()->json([
                'success' => true,
                'message' => 'Thank you for requesting',
            ]);

        } else {
            
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong',
            ], 500);
        
        }
    } */
}
