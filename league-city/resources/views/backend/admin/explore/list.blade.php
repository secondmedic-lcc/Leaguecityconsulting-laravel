<div class="row">
    <div class="col-sm-12">
        @include('backend.layouts.alert')

        <div class="card h-auto billing-table">
            <div class="card-header bg-white">
                <div class="d-flex align-items-center justify-content-between">
                    <h6 class="mb-1">Explore Section List</h6>
                    <div class="dropdown filter-dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class='bx bx-menu-alt-right'></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><h6>Quick Actions</h6></li>
                            <li><a class="dropdown-item" href="{{ route('explore.index') }}">Add Explore</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Heading</th>
                                <th>Description</th>
                                <th>Button Text</th>
                                <th>Button URL</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = ($list->currentPage() - 1) * $list->perPage() + 1; @endphp
                            @foreach ($list as $explore)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ Str::limit($explore->heading, 40) }}</td>
                                    <td>{{ Str::limit($explore->description, 60) }}</td>
                                    <td>{{ $explore->button_text }}</td>
                                    <td>{{ $explore->button_url }}</td>
                                    <td class="text-end">
                                        <div class="table-action-btns">
                                            <a href="{{ route('explore.edit', $explore->id) }}"
                                                class="btn btn-warning btn-xs text-white">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="javascript:void(0);" onclick="deleteData('{{ route('explore.delete', $explore->id) }}')"
                                                class="btn btn-danger btn-xs text-white btn-delete">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="pagination-all mt-3">
                        {{ $list->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


