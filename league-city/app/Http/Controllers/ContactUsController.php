<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\ContactRequest;

class ContactUsController extends Controller
{
    public function index()
    {

        $page_name = "contact-us";

        $page_title = "contact-us";

        $current_page = "contact-us";

        $schema_image = "includes-frontend/images/logo-white.webp";

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

        return view('frontend/main', compact('page_name', 'page_title', 'current_page', 'schema_image', 'seo_data_breadcrumb'));
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50',
            'email' => 'required|email|max:50',
            'contact' => 'required|min:10|max:10',
            'budget' => 'required|max:50',
            'message' => 'required',
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();
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
                return redirect()->back()->with('success', 'Thank you for requesting');
            } else {
                return redirect()->back()->with('error', 'Something went Wrong');
            }
        }
    }
}
