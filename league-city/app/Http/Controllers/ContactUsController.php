<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\GrowthMetric;
use Illuminate\Http\Request;
use App\Models\ContactRequest;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends Controller
{
    public function index()
    {

        $page_name = "contact-us";

        $page_title = "contact-us";

        $current_page = "contact-us";

        $schema_image = "includes-frontend/images/logo-white.webp";
        $branches = Branch::where('status', 1)->orderBy('id', 'asc')->get();
        $growthmetrics = GrowthMetric::where('status', 1)->orderBy('id', 'asc')->get();

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
                        "name": "Contact Us"
                    }
                ]
            }
        </script>';

        return view('frontend/main', compact('page_name', 'page_title', 'current_page', 'schema_image', 'seo_data_breadcrumb','branches','growthmetrics'));
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50',
            'email' => 'required|email|max:50',
            'contact' => [
                'required',
                'numeric',
                'digits_between:7,15',
                'regex:/^[5-9][0-9]*$/'
            ],
            'budget' => [
                'required',
                'numeric',
                'digits_between:4,15',
                'regex:/^[1-9][0-9]*$/'
            ],
            'message' => 'required',
        ]);

        if ($validator->fails()) {

            return response()->json(['status' => false, 'error' => $validator->errors()], 400);

        } else {

            $data['name'] = $request->name;
            $data['email'] = $request->email;
            $data['contact'] = $request->contact;
            $data['budget'] = $request->budget;
            $data['message'] = $request->message;

            $result = ContactRequest::create($data);

            $mail_var = array(
                'var1' => $request->name,
                'var2' => $request->email,
                'var3' => $request->contact,
                'var4' => $request->budget,
                'var5' => $request->message,
                'var6' => "",
                'var7' => "",
                'var8' => "",
            );

            send_mail($request->email, '1901CR', $mail_var);

            if ($result->id > 0) {
                return response()->json(['status' => true, 'message' => 'Thank you for your request'], 200);
            } else {
                return response()->json(['status' => false,'message' => 'Something went wrong'], 500);
            }
        }
    }
}
