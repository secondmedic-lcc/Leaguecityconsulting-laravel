<div class="row">
    <div class="col-sm-12">
        @include('backend.layouts.alert')
        
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
                <div class="table-responsive web-overflow mt-4">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
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
                                <tr>
                                    <td>{{ $a++; }}</td>
                                    <td>{{ $s['name']; }}</td>
                                    <td>{{ $s['heading']; }}</td>
                                    <td>{{ $s['monthly_inr']; }}</td>
                                    <td>{{ $s['monthly_usd']; }}</td>
                                    <td>{{ ($s['show_front'] == 1) ? "Show" : "Hide"; }}</td>
                                    <td>{{ date("d M, Y", strtotime($s['created_at'])); }}</td>
                                    <td class="text-end">
                                        <a href="{{ route('packages.sub-keypoints', $s['id']); }}" class="btn btn-primary text-white" target="_blank" >
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <a href={{ url('/admin/packages/'.$s['id']) }} class="btn btn-warning btn-xs text-white">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="javascript:void(0);" url={{ url('/admin/packages-delete/'.$s['id']) }} class="btn btn-danger btn-xs text-white btn-delete">
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