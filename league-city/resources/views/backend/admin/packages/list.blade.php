<div class="card mt-3">
    <div class="card-body">
        <h5 class="mb-0">{{ @$packageTypes->package_name; }}</h5>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        @include('backend.layouts.alert')
        <div class="card package-type-card">
            <div class="card-body">
                <form action="{{ url('admin/package/details/'.@$_GET['package_id']) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 form-group mb-2">
                            <label for="main_heading">Main Heading</label>
                            <input type="text" class="form-control" id="main_heading" name="main_heading" value="{{ @$packagePageDetails->main_heading }}" required>
                        </div>
                        <div class="col-md-8 form-group mb-2">
                            <label for="sub_heading">Sub Heading</label>
                            <textarea class="form-control" rows="3" id="sub_heading" name="sub_heading" required>{{ @$packagePageDetails->sub_heading }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('package.types') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-4">
        <div class="card package-type-card">
            <form action="{{ url('/admin/packages/store/'.@$_GET['package_id'].'/small'); }}" method="post">
                @csrf
                <input type="hidden" value="{{ $_GET['package_id'] }}" name="package_for" />
                <div class="card-body">
                    <div class="form-group mb-3">
                        <label for="includes_heading">Small Monthly Business Inr</label>
                        <input type="text" class="form-control" value="{{ @$small->monthly_inr }}" name="monthly_inr" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="includes_details">Small Monthly Business USD</label>
                        <input type="text" class="form-control" value="{{ @$small->monthly_usd }}" name="monthly_usd" required>
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-ceontent-between">
                            <button type="submit" class="btn btn-primary w-50 mx-2">Update</button>
                            <a href="{{ url('admin/packages/create?package_id='.@$_GET['package_id'].'&business_type=small') }}" target="_blank" class="btn btn-warning w-50 mx-2">Add Key</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card package-type-card">
            <form action="{{ url('/admin/packages/store/'.@$_GET['package_id'].'/mid'); }}" method="post">
                @csrf
                <input type="hidden" value="{{ $_GET['package_id'] }}" name="package_for" />
                <div class="card-body">
                    <div class="form-group mb-3">
                        <label for="includes_heading">Mid Size Monthly Business Inr</label>
                        <input type="text" class="form-control" value="{{ @$mid->monthly_inr }}" name="monthly_inr" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="includes_details">Mid Size Monthly Business USD</label>
                        <input type="text" class="form-control" value="{{ @$mid->monthly_usd }}" name="monthly_usd" required>
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-ceontent-between">
                            <button type="submit" class="btn btn-primary w-50 mx-2">Update</button>
                            <a href="{{ url('admin/packages/create?package_id='.@$_GET['package_id'].'&business_type=mid') }}" target="_blank" class="btn btn-warning w-50 mx-2">Add Key</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card package-type-card">
            <form action="{{ url('/admin/packages/store/'.@$_GET['package_id'].'/large'); }}" method="post">
                @csrf
                <input type="hidden" value="{{ $_GET['package_id'] }}" name="package_for" />
                <div class="card-body">
                    <div class="form-group mb-3">
                        <label for="includes_heading">Large Monthly Business Inr</label>
                        <input type="text" class="form-control" value="{{ @$large->monthly_inr }}" name="monthly_inr" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="includes_details">Large Monthly Business USD</label>
                        <input type="text" class="form-control" value="{{ @$large->monthly_usd }}" name="monthly_usd" required>
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-ceontent-between">
                            <button type="submit" class="btn btn-primary w-50 mx-2">Update</button>
                            <a href="{{ url('admin/packages/create?package_id='.@$_GET['package_id'].'&business_type=large') }}" target="_blank" class="btn btn-warning w-50 mx-2">Add Key</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card package-type-card">
            <div class="card-body">
                <form action="{{ url('admin/package/details/'.@$_GET['package_id']) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 form-group mb-2">
                            <label for="enterprise_title">Enterprise Title</label>
                            <input type="text" class="form-control" id="enterprise_title" name="enterprise_title" value="{{ @$packagePageDetails->enterprise_title }}" required>
                        </div>
                        <div class="col-md-8 form-group mb-2">
                            <label for="enterprise_details">Enterprise Details</label>
                            <textarea class="form-control" rows="3" id="enterprise_details" name="enterprise_details" required>{{ @$packagePageDetails->enterprise_details }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('package.types') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card package-type-card">
            <div class="card-body">
                <form action="{{ url('admin/package/details/'.@$_GET['package_id']) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 mb-2 form-group">
                            <label for="includes_heading">Property Heading</label>
                            <input type="text" class="form-control" id="includes_heading" name="includes_heading" value="{{ @$packagePageDetails->includes_heading }}" required>
                        </div>
                        <div class="col-md-8 mb-2 form-group">
                            <label for="includes_details">Property Details</label>
                            <textarea class="form-control" rows="3" id="includes_details" name="includes_details" required>{{ @$packagePageDetails->includes_details }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('package.types') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">

        <div class="card member-statistics h-auto billing-table">
            <div class="card-body">
                <div class="d-md-flex align-items-center justify-content-between">
                    <div>
                        <h6 class="mb-md-1 mb-4">Package Property List</h6>
                    </div>
                    <div class="dropdown filter-dropdown mb-md-0 mb-3">
                        <a class="btn btn-primary" href="{{ url('admin/package-includes/create?package_id='.@$_GET['package_id']); }}">Add Package Property</a>
                    </div>
                </div>
                <div class="table-responsive web-overflow">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="table-id">ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Created At</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php $a = 1; @endphp

                            @foreach($includes as $s)
                            @php $deleteUrl = route('package.includes.destroy',$s['id']); @endphp
                            <tr>
                                <td>{{ $a++; }}</td>
                                <td>
                                    <img src="{{ asset($s['includes_image']); }}" class="img rounded" alt="Includes Image">
                                </td>
                                <td>{{ $s['title']; }}</td>
                                <td>{{ date('d M, Y', strtotime($s['created_at'])); }}</td>
                                <td class="text-end">
                                    <a href={{ route('package.includes.edit',$s['id']) }} class="btn btn-warning btn-xs text-white">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <a href="javascript:void(0);" onclick="deleteData('<?= $deleteUrl; ?>')" class="btn btn-danger btn-xs text-white btn-delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="pagination mt-3">
                    {{ $includes->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

{{--
<div class="row">
    <div class="col-sm-12">
        <div class="card member-statistics h-auto billing-table">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <h6 class="mb-1">Manage Package Plans List</h6>
                    </div>
                    <div class="filter-dropdown">
                        <a class="btn btn-primary" href="{{ url('admin/packages/create?package_id='.@$_GET['package_id']); }}">Add Plans</a>
</div>
</div>
<div class="table-responsive web-overflow">
    <table class="table">
        <thead>
            <tr>
                <th class="table-id">ID</th>
                <th>Name</th>
                <th>Heading</th>
                <th>Monthly</th>
                <th>USD</th>
                <th>In Front</th>
                <th>Created At</th>
                <th class="text-end">Action</th>
            </tr>
        </thead>
        <tbody>

            @php $a = 1; @endphp

            @foreach($packages as $s)
            @php $deleteUrl = url('/admin/packages-delete/'.$s['id']); @endphp
            <tr>
                <td>{{ $a++; }}</td>
                <td>{{ $s['name']; }}</td>
                <td>{{ $s['heading']; }}</td>
                <td>{{ $s['monthly_inr']; }}</td>
                <td>{{ $s['monthly_usd']; }}</td>
                <td>{{ ($s['show_front'] == 1) ? "Show" : "Hide"; }}</td>
                <td>{{ date("d M, Y", strtotime($s['created_at'])); }}</td>
                <td class="text-end">
                    <a href="{{ route('packages.sub-keypoints', $s['id']); }}" class="btn btn-primary text-white" target="_blank">
                        <i class="fa fa-plus"></i>
                    </a>
                    <a href={{ url('/admin/packages/'.$s['id']) }} class="btn btn-warning btn-xs text-white">
                        <i class="fa fa-edit"></i>
                    </a>
                    <a href="javascript:void(0);" onclick="deleteData('<?= $deleteUrl; ?>')" class="btn btn-danger btn-xs text-white btn-delete">
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
</div> --}}