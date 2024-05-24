<div class="row">
    <div class="col-sm-12">
        @include('backend.layouts.alert')
        
        <div class="card member-statistics h-auto billing-table">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <h6 class="mb-1">Package Includes List</h6>
                    </div>
                    <div class="dropdown  filter-dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class='bx bx-menu-alt-right'></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><h6>Quick Actions</h6></li>
                            <li><a class="dropdown-item" href="{{ route('package.includes.create'); }}">Add Package Includes</a></li>
                        </ul>
                    </div>
                </div>
                <div class="table-responsive web-overflow">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Image</th>
                                <th>Package For</th>
                                <th>Name</th>
                                <th>Created At</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @php $a = 1; @endphp

                            @foreach($includes as $s)
                                <tr>
                                    <td>{{ $a++; }}</td>
                                    <td>
                                        <img src="{{ asset($s['includes_image']); }}" class="img rounded" alt="Includes Image">
                                    </td>
                                    <td>{{ $s['package_for']; }}</td>
                                    <td>{{ $s['title']; }}</td>
                                    <td>{{ date('d M, Y', strtotime($s['created_at'])); }}</td>
                                    <td class="text-end">
                                        <a href={{ route('package.includes.edit',$s['id']) }} class="btn btn-warning btn-xs text-white">
                                            <i class="fa fa-edit"></i>
                                        </a>

                                        <a href="javascript:void(0);" url={{ route('package.includes.destroy',$s['id']) }} class="btn btn-danger btn-xs text-white btn-delete">
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