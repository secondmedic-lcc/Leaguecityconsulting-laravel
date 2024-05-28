<div class="row">
    <div class="col-sm-12">
        @include('backend.layouts.alert')
        
        <div class="card member-statistics h-auto billing-table">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <h6 class="mb-1">Customers List</h6>
                    </div>
                    <div class="dropdown  filter-dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class='bx bx-menu-alt-right'></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><h6>Quick Actions</h6></li>
                            <li><a class="dropdown-item" href="{{ url('/admin/customers'); }}">Add Customers</a></li>
                        </ul>
                    </div>
                </div>
                <div class="table-responsive web-overflow">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="table-id">ID</th>
                                <th>Name</th>
                                <th>DOB</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @php $a = 1; @endphp

                            @foreach($list as $s)
                                <tr>
                                    <td>{{ $a++; }}</td>
                                    <td>{{ $s['name']; }}</td>
                                    <td>{{ date('d M, Y', strtotime($s['dob'])); }}</td>
                                    <td>{{ $s['email']; }}</td>
                                    <td>{{ $s['contact']; }}</td>
                                    <td class="text-end">
                                        <a href={{ url('/admin/customers/'.$s['id']) }} class="btn btn-warning btn-xs text-white">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="javascript:void(0);" url={{ url('/admin/customers-delete/'.$s['id']) }} class="btn btn-danger btn-xs text-white btn-delete">
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