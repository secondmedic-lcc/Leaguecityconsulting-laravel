
@include('backend.layouts.alert')


@if(isset($_GET['services_id']) && $_GET['services_id'] != "")

@if(!empty($services_sec))

<div class="row">
    <div class="col-lg-12">
        <div class="card h-auto">
            <div class="card-header">
                <h6>Services Details</h6>
            </div>
            <div class="card-body">
            <form action="{{ url('admin/services-details'); }}/{{ $services_sec['id']; }}" method="POST" autocomplete="off">
                @csrf
                    <input type="hidden" class="form-control" value="{{ $services_sec['id']; }}" name="services_id" />

                    <div class="row">
                        <div class="col-md-12">
                            <label> Heading</label>
                            <input type="text" class="form-control text-dark" name="heading" value="{{ $services_sec['heading']; }}" readonly disabled />
                        </div>

                        <div class="col-md-12 mt-3">
                            <label>Services Sub Heading</label>
                            <textarea name="sub_heading" class="form-control text-dark" cols="30" rows="5" required>{{ $services_sec['sub_heading']; }}</textarea>
                        </div>
        
                        <div class="col-md-6 mt-3">
                            <label>Section sub Heading</label>
                            <input type="text" class="form-control text-dark" name="section_heading" required value="{{ $services_sec['section_heading']; }}"  />
                        </div>
                        <div class="col-md-6 mt-3">
                            <label>Services Desc Heading</label>
                            <textarea name="desc_heading" class="form-control text-dark" cols="30" rows="5" required>{{ $services_sec['desc_heading']; }}</textarea>
                        </div>

                        <div class="col-md-6 mt-3">
                            <label>Services Sub Heading</label>
                            <input type="text" class="form-control text-dark" name="section_heading1" required value="{{ $services_sec['section_heading1']; }}"  />
                        </div>

                        
                        <div class="col-md-6 mt-3">
                            <label>Section Heading </label>
                            <textarea name="section_sub_heading1" class="form-control text-dark" cols="30" rows="5" required>{{ $services_sec['section_sub_heading1']; }}</textarea>
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
                <h6>Services Screen Shots</h6>
            </div>
            <div class="card-body pb-0">
                <form action="{{ url('admin/services-images'); }}" id="services-form" method="POST" autocomplete="off" enctype="multipart/form-data">
                @csrf
                    
                    <div class="row">
                        <div class="col-md-2">
                            <input type="text" class="form-control text-dark" name="heading" value="{{ $services_sec['heading']; }}" readonly disabled />
                            <input type="hidden" class="form-control" value="{{ $services_sec['id']; }}" name="services_id" />
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control text-dark" name="heading" id="heading" placeholder="Enter Heading" />
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control text-dark" name="description1" id="port-description" placeholder="Enter Description" />
                        </div>

                        <div class="col-md-2">
                            <input type="file" name="images" id="images" class="form-control"  accept="image/*" required />
                        </div>
                        <div class="col-md-4 mt-2">
                            <input type="text" class="form-control text-dark" name="project_url" id="project_url" placeholder="Project URL" />
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
                    @foreach($services_images as $g)
                        <div class="col-md-2">
                            <div class="card">
                                <div class="card-body">
                                    {{-- <small>{{ $g['heading']; }}</small> --}}
                                    <img src="{{ asset($g->image); }}" width="100%" alt="Gallery Image" />
                                </div>
                                <div class="card-footer p-0">
                                    <div class="d-flex justify-content-between">
                                        <a href="javascript:void(0);" heading="{{ $g['heading']; }}" description="{{ $g['description']; }}" project_url="{{ $g['project_url']; }}"  serviceId="{{ $g['id']; }}" class="btn btn-warning btn-edit w-100 m-1">Edit</a>
                                        
                                        <a href="javascript:void(0);" url={{ url('/admin/services-images-delete/'.$g['id']) }} class="btn btn-danger btn-delete w-100 m-1">Delete</a>
                                      
                                   
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

<div class="row">
    <div class="col-lg-12">
        <div class="card h-auto">
            <div class="card-header">
                <h6>Services Icons</h6>
            </div>
            <div class="card-body pb-0">
                <form action="{{ url('admin/services-icons'); }}" id="servicesIcons-form" method="POST" autocomplete="off" enctype="multipart/form-data">
                @csrf
                    
                    <div class="row">
                        <div class="col-md-2">
                            <input type="hidden" class="form-control" value="{{ $services_sec['id']; }}" name="services_id" />
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control text-dark" name="name" id="name" placeholder="Enter name" />
                        </div>
                        <div class="col-md-2">
                            <input type="file" name="icon" id="icon" class="form-control"  accept="image/*" required />
                        </div>

                     
                        <div class="col-md-2 text-center mt-2">
                            <button type="submit" class="btn web-btn w-100">
                             Icon Uplaod
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            
            <div class="card-body pt-0">
                <div class="row">
                    @foreach($services_icons as $g)

                        <div class="col-md-2">
                            <div class="card">
                                <div class="card-body">
                                    {{-- <small>{{ $g['name']; }}</small> --}}
                                    <img src="{{ asset($g->icon); }}" width="100%" alt="Gallery Image" />
                                </div>
                                <div class="card-footer p-0">
                                    <div class="d-flex justify-content-between">
                                        <a href="javascript:void(0);" url={{ url('/admin/services-icons-delete/'.$g['id']) }} class="btn btn-danger btn-delete w-100 m-1">Delete</a>
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

        <form action="{{ route('services-details'); }}" method="POST" autocomplete="off" enctype="multipart/form-data" >
        @csrf
            <div class="card h-auto">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label" for="">services details</label>
                            
                        @if(isset($_GET['services_id']) && $_GET['services_id'] != "")
                        
                            <input type="text" class="form-control text-dark" name="desc_heading" value="{{ $services_sec['name']; }}" readonly disabled />

                            <input type="hidden" class="form-control" value="{{ $services_sec['id']; }}" name="services_id" />
                        @else 
                        <select class="form-control js-example-basic-single" name="services_id">
                            <option value="" selected disabled > -- Select -- </option>
                            @foreach($services as $p)
                                <option value="{{ $p['id']; }}" {{ (isset($_GET['services_id']) && $_GET['services_id'] != "") ? ($_GET['services_id'] == $p['id']) ? 'selected' : "" : ""; }} >{{ $p['name']; }}</option>
                            @endforeach
                        </select>
                        @endif
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label" for="">services details</label>
                            <select class="form-control js-example-basic-single" name="data_for">
                                <option value="" selected disabled > -- Select -- </option>
                                <option value="main-details">Main Details</option>
                                <option value="sub-details">Sub Details</option>
                              
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
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
                                Add  Services
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
                        <h6 class="mb-1"> Services List</h6>
                    </div>
                </div>
                <div class="table-responsive web-overflow">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="table-id">ID</th>
                                <th>Project</th>
                                <th>Title</th>
                                <th width="50%">Details</th>
                                <th width="10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @php $a = 1; @endphp

                            @foreach($services_details as $s)
                                <tr>
                                    <td>{{ $a++; }}</td>
                                    <td>{{ $s['name']; }}</td>
                                    <td>{{ $s['service_title']; }}</td>
                                    <td>{{ $s['service_details']; }}</td>
                                    <td class="text-end">
                                        <a href={{ url('/admin/services-details/'.$s['id']) }} class="btn btn-warning btn-xs text-white">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="javascript:void(0);" url={{ url('/admin/services-details-delete/'.$s['id']) }} class="btn btn-danger btn-xs text-white btn-delete">
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