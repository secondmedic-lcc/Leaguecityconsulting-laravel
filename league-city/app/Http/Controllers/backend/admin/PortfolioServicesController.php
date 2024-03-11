<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PortfolioServices;
use App\Models\Portfolio;
use App\Models\PotfolioImage;

class PortfolioServicesController extends Controller
{
    public function index()
    {
        $page_name = "portfolio/portfolio-services";
        
        $page_title = "Manage Portfolio";
        
        $current_page = "portfolio";

        $portfolio = Portfolio::where(array('status'=>1))->orderBy('name','asc')->get();

        $where = array('portfolio_services.status'=>1);

        if(isset($_GET['portfolio_id']) && $_GET['portfolio_id'] != ""){

            $where += array('portfolio_services.portfolio_id'=>$_GET['portfolio_id']);

        }

        $portfolio_service = PortfolioServices::select('portfolio.name','portfolio.sub_heading','portfolio.desc_heading','portfolio.description','portfolio_services.*')->leftJoin('portfolio','portfolio.id','portfolio_services.portfolio_id')->where($where)->orderBy('portfolio_services.id','desc')->paginate(20);


        $portfolio_details = Portfolio::where(array('status'=>1,'id'=>$_GET['portfolio_id']))->first();
        
        $portfolio_images = PotfolioImage::where(array('status' => 1,'portfolio_id'=>$_GET['portfolio_id']))->get();

        return view('backend/admin/main', compact('page_name','page_title','current_page','portfolio','portfolio_service','portfolio_images','portfolio_details'));

    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'portfolio_id' => 'required|string',
            'service_icon' => 'required|string',
            'service_title' => 'required|string',
            'service_details' => 'required|string'
        ]);
          
        PortfolioServices::create($data);

        return redirect()->back()->with('success', 'Portfolio Services created successfully.');
    }

    public function edit($id)
    {
        $page_name = "portfolio/portfolio-services-edit";
        
        $page_title = "Manage Portfolio";
        
        $current_page = "portfolio";

        $portfolio = Portfolio::where(array('status'=>1))->orderBy('name','asc')->get();

        $portfolio_details = PortfolioServices::where(array('status'=>1,'id'=>$id))->first();

        return view('backend/admin/main', compact('page_name','page_title','current_page','portfolio','portfolio_details'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'portfolio_id' => 'required|string',
            'service_icon' => 'required|string',
            'service_title' => 'required|string',
            'service_details' => 'required|string'
        ]);

        PortfolioServices::where(array('status'=>1,'id'=>$id))->update($data);

        return redirect(url('admin/portfolio-services?portfolio_id='.$request->portfolio_id))->with('success', 'Portfolio updated successfully.');
    }

    public function destroy($id)
    {
        $data = array('status' =>0);

        $result = PortfolioServices::where(array('id'=>$id))->update($data);

        return redirect()->back()->with('success', 'Portfolio deleted successfully.');
    }
}
