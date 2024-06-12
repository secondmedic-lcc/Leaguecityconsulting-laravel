<div class="row">
    <div class="col-sm-12">
        @include('backend.layouts.alert')

        <div class="card h-auto billing-table">
            <div class="card-header bg-white">
                <div class="d-flex align-items-center justify-content-between">
                    <h6 class="mb-1">Category List</h6>
                    <div class="dropdown  filter-dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class='bx bx-menu-alt-right'></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <h6>Quick Actions</h6>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('category.create'); }}">Add Category</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <!-- <div class="table-responsive web-overflow">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="table-id">ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Created At</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php $a = 1; @endphp

                            @foreach ($list as $s)
                            @php $imgUrl = ($s['category_img'] != "" && $s['category_img'] != null) ? $s['category_img'] : "uploads/default.jpg"; @endphp
                            <tr>
                                <td>{{ $a++ }}</td>
                                <td>
                                    <img src="{{ asset($imgUrl); }}" alt="Category Image" width="100" class="rounded" />
                                </td>
                                <td>{{ Str::ucfirst($s['category_name']); }}</td>
                                <td>{{ $s['category_slug'] }}</td>
                                <td>{{ date('d M, Y', strtotime($s['created_at'])) }}</td>
                                <td class="text-end">
                                    <a href={{ route('category.edit', $s['id']) }} class="btn btn-warning btn-xs text-white">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="javascript:void(0);" url={{ route('category.destory', $s['id']) }} class="btn btn-danger btn-xs text-white btn-delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> -->
                <table id="tableDrop" class="table dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="table-id">ID</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Created At</th>
                            <th>Image</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @php $a = 1; @endphp

                        @foreach ($list as $s)
                        @php $imgUrl = ($s['category_img'] != "" && $s['category_img'] != null) ? $s['category_img'] : "uploads/default.jpg"; @endphp
                        @php $deleteUrl = route('category.destory', $s['id']); @endphp
                        <tr>
                            <td>{{ $a++ }}</td>
                            <td>{{ Str::ucfirst($s['category_name']); }}</td>
                            <td>{{ $s['category_slug'] }}</td>
                            <td>{{ date('d M, Y', strtotime($s['created_at'])) }}</td>
                            <td>
                                <img src="{{ asset($imgUrl); }}" alt="Category Image" width="100" class="rounded" />
                            </td>
                            <td class="text-end">
                                <div class="table-action-btns">
                                    <a href={{ route('category.edit', $s['id']) }} class="btn btn-warning btn-xs text-white">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="javascript:void(0);" onclick="deleteData('<?= $deleteUrl; ?>')" class="btn btn-danger btn-xs text-white btn-delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pagination-all">
                    {{ $list->links(); }}
                </div>
            </div>
        </div>
    </div>
</div>