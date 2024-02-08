<div class="row">
    <div class="col-sm-12">
        @include('backend.layouts.alert')

        <div class="card member-statistics h-auto billing-table">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <h6 class="mb-1">Service List</h6>
                    </div>
                    <div class="dropdown  filter-dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class='bx bx-menu-alt-right'></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <h6>Quick Actions</h6>
                            </li>
                            <li><a class="dropdown-item" href="{{ url('/admin/seo-data/create') }}">Add Seo Data</a></li>
                        </ul>
                    </div>
                </div>
                <div class="table-responsive web-overflow mt-4">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Page</th>
                                <th>Service</th>
                                <th>Meta Title</th>
                                <th>Meta Key</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php $a = 1; @endphp

                            @foreach ($seo_data as $s)
                                <tr>
                                    <td>{{ $a++ }}</td>
                                    <td>{{ $s['page_name'] }}</td>
                                    <td>{{ ($s['provide_name'] != "") ? $s['provide_name'] : "Normal Page" }}</td>
                                    <td>{{ $s['meta_title'] }}</td>
                                    <td>{{ $s['meta_key'] }}</td>
                                    <td class="text-end">
                                        <a href={{ url('/admin/seo-data/edit/' . $s['id']) }}
                                            class="btn btn-warning btn-xs text-white">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="javascript:void(0);" url={{ url('/admin/seo-data-delete/' . $s['id']) }}
                                            class="btn btn-danger btn-xs text-white btn-delete">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="pagination s-p-center pagination-all">
                  {{ $seo_data->links(); }}
                </div>     
            </div>
        </div>
    </div>
</div>
