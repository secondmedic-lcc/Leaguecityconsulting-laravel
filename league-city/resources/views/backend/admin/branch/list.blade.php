<div class="row">
    <div class="col-sm-12">
        @include('backend.layouts.alert')

        <div class="card h-auto billing-table">
            <div class="card-header bg-white">
                <div class="d-flex align-items-center justify-content-between">
                    <h6 class="mb-1">Branch List</h6>
                    <div class="dropdown filter-dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class='bx bx-menu-alt-right'></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <h6>Quick Actions</h6>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('branch') }}">Add Branch</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table id="" class="table dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="table-id">ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $a = 1; @endphp
                            @foreach ($list as $branch)
                                @php
                                    $imgUrl =
                                        $branch->branch_image != '' ? $branch->branch_image : 'uploads/default.jpg';
                                    $deleteUrl = route('branch.delete', $branch->id);
                                @endphp
                                <tr>
                                    <td>{{ $a++ }}</td>
                                    <td>
                                        <img src="{{ asset($branch->branch_image) }}" alt="Branch Image" width="100px" height="0px"
                                            class="rounded" />
                                    </td>
                                    <td>{{ Str::ucfirst($branch->branch_name) }}</td>

                                    <td>{{ $branch->branch_address }}</td>
                                    {{-- <td>{{ date('d M, Y', strtotime($branch->created_at)) }}</td> --}}

                                    <td class="text-end">
                                        <div class="table-action-btns">
                                            <a href="{{ route('branch.edit', $branch->id) }}"
                                                class="btn btn-warning btn-xs text-white">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="javascript:void(0);" onclick="deleteData('{{ $deleteUrl }}')"
                                                class="btn btn-danger btn-xs text-white btn-delete">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination-all">
                        {{ $list->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
