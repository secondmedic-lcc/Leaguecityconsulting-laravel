
@include('backend.layouts.alert')

@if(isset($_GET['portfolio_id']) && $_GET['portfolio_id'] != "")

@if(!empty($portfolio_details))

<div class="row">
    <div class="col-lg-12">
        <div class="card h-auto">
            <div class="card-header">
                <h6>Portfolio Details</h6>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/portfolio-details'); }}/{{ $portfolio_details['id']; }}" method="POST" autocomplete="off">
                @csrf
                    <input type="hidden" class="form-control" value="{{ $portfolio_details['id']; }}" name="portfolio_id" />

                    <div class="row">
                        <div class="col-md-6">
                            <label>Description Heading</label>
                            <input type="text" class="form-control text-dark" name="desc_heading" value="{{ $portfolio_details['name']; }}" readonly disabled />
                        </div>

                        {{-- <div class="col-md-6">
                            <label>Description Heading</label>
                            <input type="text" class="form-control text-dark" name="desc_heading" value="{{ ($portfolio_details['desc_heading'] != '' && $portfolio_details['desc_heading'] != null) ? $portfolio_details['desc_heading'] : $portfolio_details['sub_heading']; }}" />
                        </div> --}}
                        <div class="col-md-12 mt-3">
                            <label>Portfolio Description</label>
                            <textarea name="description" class="form-control text-dark" cols="30" rows="5">{{ $portfolio_details['description']; }}</textarea>
                        </div>

                        <div class="col-md-12 text-center mt-4">
                            <button type="submit" class="btn web-btn w-50">
                                Update Details
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card h-auto">
            <div class="card-header">
                <h6>Portfolio Screen Shots</h6>
            </div>
            <div class="card-body pb-0">
                <form action="{{ url('admin/portfolio-images'); }}" id="portfolio-form" method="POST" autocomplete="off" enctype="multipart/form-data">
                @csrf
                    
                    <div class="row">
                        <div class="col-md-2">
                            <input type="text" class="form-control text-dark" name="desc_heading" value="{{ $portfolio_details['name']; }}" readonly disabled />
                            <input type="hidden" class="form-control" value="{{ $portfolio_details['id']; }}" name="portfolio_id" />
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control text-dark" name="heading" id="heading" placeholder="Enter Heading" />
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control text-dark" name="description" id="port-description" placeholder="Enter Description" />
                        </div>

                        <div class="col-md-2">
                            <input type="file" name="images" id="images" class="form-control"  accept="image/*" required />
                        </div>
                        <div class="col-md-4 mt-2">
                            <input type="text" class="form-control text-dark" name="portfolio_url" id="portfolio-url" placeholder="Project URL" />
                        </div>
                        <div class="col-md-2 text-center mt-2">
                            <button type="submit" class="btn web-btn w-100">
                                Uplaod
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            
            <div class="card-body pt-0">
                <div class="row">
                    @foreach($portfolio_images as $g)
                        <div class="col-md-2">
                            <div class="card">
                                <div class="card-body">
                                    <small>{{ $g['heading']; }}</small>
                                    <img src="{{ asset($g->image); }}" width="100%" alt="Gallery Image" />
                                </div>
                                <div class="card-footer p-0">
                                    <div class="d-flex justify-content-between">
                                        <a href="javascript:void(0);" heading="{{ $g['heading']; }}" description="{{ $g['description']; }}" serviceId="{{ $g['id']; }}" class="btn btn-warning btn-edit w-100 m-1">Edit</a>
                                        <a href="javascript:void(0);" url={{ url('admin/portfolio-images-delete/'.$g['id']) }} class="btn btn-danger btn-delete w-100 m-1">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endif

<div class="row">
    <div class="col-lg-12">

        <form action="{{ route('portfolio-services'); }}" method="POST" autocomplete="off" enctype="multipart/form-data" >
        @csrf
            <div class="card h-auto">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Portfolio</label>
                            
                        @if(isset($_GET['portfolio_id']) && $_GET['portfolio_id'] != "")
                        
                            <input type="text" class="form-control text-dark" name="desc_heading" value="{{ $portfolio_details['name']; }}" readonly disabled />

                            <input type="hidden" class="form-control" value="{{ $portfolio_details['id']; }}" name="portfolio_id" />
                        @else 
                        <select class="form-control js-example-basic-single" name="portfolio_id">
                            <option value="" selected disabled > -- Select -- </option>
                            @foreach($portfolio as $p)
                                <option value="{{ $p['id']; }}" {{ (isset($_GET['portfolio_id']) && $_GET['portfolio_id'] != "") ? ($_GET['portfolio_id'] == $p['id']) ? 'selected' : "" : ""; }} >{{ $p['name']; }}</option>
                            @endforeach
                        </select>
                        @endif
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Service Title</label>
                            <input type="text" class="form-control" name="service_title" onkeypress="return /[A-Za-z ]/i.test(event.key)" required value="{{ old('service_title') }}" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Service Icon</label>
                            <textarea class="form-control" name="service_icon" required value="{{ old('service_icon') }}">{{ old('service_icon') }}</textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Service Details</label>
                            <textarea class="form-control" name="service_details" required value="{{ old('service_details') }}">{{ old('service_details') }}</textarea>
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn web-btn w-50 mt-3" id="submit_btn" >
                                Add Portfolio Services
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        
        <div class="card member-statistics h-auto billing-table">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <h6 class="mb-1">Portfolio Services List</h6>
                    </div>
                </div>
                <div class="table-responsive web-overflow">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Project</th>
                                <th>Title</th>
                                <th width="50%">Details</th>
                                <th width="10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @php $a = 1; @endphp

                            @foreach($portfolio_service as $s)
                                <tr>
                                    <td>{{ $a++; }}</td>
                                    <td>{{ $s['name']; }}</td>
                                    <td>{{ $s['service_title']; }}</td>
                                    <td>{{ $s['service_details']; }}</td>
                                    <td class="text-end">
                                        <a href={{ url('/admin/portfolio-services/'.$s['id']) }} class="btn btn-warning btn-xs text-white">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="javascript:void(0);" url={{ url('/admin/portfolio-services-delete/'.$s['id']) }} class="btn btn-danger btn-xs text-white btn-delete">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>