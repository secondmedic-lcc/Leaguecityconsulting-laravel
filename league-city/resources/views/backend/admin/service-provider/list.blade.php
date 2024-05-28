<div class="row">
    <div class="col-sm-12">
        @include('backend.layouts.alert')

        <div class="card member-statistics h-auto billing-table">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <h6 class="mb-1">Service Provider List</h6>
                    </div>
                    <div class="dropdown  filter-dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class='bx bx-menu-alt-right'></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <h6>Quick Actions</h6>
                            </li>
                            <li><a class="dropdown-item" href="{{ url('/admin/service-provider'); }}">Add Service Provider</a></li>
                        </ul>
                    </div>
                </div>
                <div class="table-responsive web-overflow">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Business Id</th>
                                <th>Registration</th>
                                <th>Name</th>
                                <th>Con. Per.</th>
                                <th>Contact</th>
                                <th>Website</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($service_provider as $s)
                            @php $url = Str::slug($s['shop_name']."-".$s['id']); @endphp
                            <tr>
                                <td>{{ $s['business_id']; }}</td>
                                <td>{{ $s['registration_no']; }}</td>
                                <td>{{ ($s['business_name'] != "") ? $s['business_name'] : $s['shop_name'] ; }}</td>
                                <td>{{ $s['user_name']; }}</td>
                                <td>{{ $s['user_contact']; }}</td>
                                <td>
                                    <a href={{ url('pharmacy/'.$url); }} class="border px-2 py-2 bg-primary text-white rounded">
                                        View
                                    </a>
                                </td>
                                <td class="text-end">
                                    <div class="table-action-btns">
                                        <a href={{ url('/admin/service-provider/'.$s['id']) }} class="btn btn-warning btn-xs text-white">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href={{ url('/admin/service-provider-details/'.$s['id']) }} class="btn btn-info btn-xs text-white">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href={{ url('/admin/sp-website-control?service_provider_id='.$s['id']) }} class="btn btn-primary btn-xs text-white">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <a href="javascript:void(0);" url={{ url('/admin/service-provider-delete/'.$s['id']) }} class="btn btn-danger btn-xs text-white btn-delete">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="pagination mt-3">
                    {{ $service_provider->links() }}
                </div>
            </div>
        </div>
    </div>
</div>