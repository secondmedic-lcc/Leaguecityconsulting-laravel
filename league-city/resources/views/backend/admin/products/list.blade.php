<div class="row">
    <div class="col-sm-12">
        @include('backend.layouts.alert')

        <div class="card member-statistics h-auto billing-table">
            <div class="card-header bg-white">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <h6 class="mb-1">Product List</h6>
                    </div>
                    <div class="dropdown  filter-dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class='bx bx-menu-alt-right'></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <h6>Quick Actions</h6>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('products.create'); }}">Add Product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <!-- <div class="table-responsive web-overflow">
                    <table class="table table-list-mobile">
                        <thead>
                            <tr>
                                <th class="table-id">ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Details</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php $a = 1; @endphp

                            @foreach($portfolio as $s)
                            <tr>
                                <td>{{ $a++; }}</td>
                                <td>
                                    <img src="{{ asset($s['product_image']); }}" alt="Image" width="100" height="auto" />
                                </td>
                                <td>{{ $s['name']; }}</td>
                                <td class="table-list-detail">{{ $s['description']; }}</td>
                                <td class="text-end">
                                    <a href={{ url('/admin/products/'.$s['id']) }} class="btn btn-warning btn-xs text-white">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="javascript:void(0);" url={{ url('/admin/products-delete/'.$s['id']) }} class="btn btn-danger btn-xs text-white btn-delete">
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
                            <th>Image</th>
                            <th>Details</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @php $a = 1; @endphp

                        @foreach($portfolio as $s)
                        <tr>
                            <td>{{ $a++; }}</td>
                            <td>{{ $s['name']; }}</td>
                            <td>
                                <img src="{{ asset($s['product_image']); }}" alt="Image" width="100" height="auto" />
                            </td>
                            <td class="table-list-detail">{{ $s['description']; }}</td>
                            <td class="text-end">
                                <div class="table-action-btns">
                                    <a href={{ url('/admin/products/'.$s['id']) }} class="btn btn-warning btn-xs text-white">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="javascript:void(0);" url={{ url('/admin/products-delete/'.$s['id']) }} class="btn btn-danger btn-xs text-white btn-delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>