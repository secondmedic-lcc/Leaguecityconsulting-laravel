<div class="row">
    <div class="col-sm-12">
        @include('backend.layouts.alert')
        
        <div class="card member-statistics h-auto billing-table">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <h6 class="mb-1">Blogs List</h6>
                    </div>
                    <div class="dropdown  filter-dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class='bx bx-menu-alt-right'></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><h6>Quick Actions</h6></li>
                            <li><a class="dropdown-item" href="{{ url('/admin/blogs/create'); }}">Add Blogs</a></li>
                        </ul>
                    </div>
                </div>
                <div class="table-responsive web-overflow mt-4">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Image</th>
                                <th width="30%">Name</th>
                                <th width="30%">Details</th>
                                <th>Created At</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @php $a = 1; @endphp

                            @foreach($blog as $s)
                                <tr>
                                    <td>{{ $a++; }}</td>
                                    <td>
                                        <img src="{{ asset($s['blog_image']); }}" width="100" height="auto" alt="Blog Image">
                                    </td>
                                    <td width="30%">{{ $s['blog_title']; }}</td>
                                    <td width="30%">{{ $s['blog_details']; }}</td>
                                    <td>{{ date('d M, Y', strtotime($s['created_at'])); }}</td>
                                    <td class="text-end">
                                        <a href={{ url('/admin/blogs/'.$s['id']) }} class="btn btn-warning btn-xs text-white">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="javascript:void(0);" url={{ url('/admin/blogs-delete/'.$s['id']) }} class="btn btn-danger btn-xs text-white btn-delete">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination-all mt-3">
                        {{ $blog->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>