<div class="row">
    <div class="col-sm-12">
        @include('backend.layouts.alert')

        <div class="card h-auto billing-table">
            <div class="card-header bg-white">
                <div class="d-flex align-items-center justify-content-between">
                    <h6 class="mb-1">Technology List</h6>
                    <div class="dropdown filter-dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class='bx bx-menu-alt-right'></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <h6>Quick Actions</h6>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('technology.create') }}">Add Technology</a></li>
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
                                <th>Image</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Features</th>
                                <th>Status</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 1; @endphp
                            @foreach ($list as $tech)
                                @php
                                    $deleteUrl = route('technology.destroy', $tech->id);
                                @endphp
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>
                                        <img src="{{ asset( $tech->image) }}" width="80"
                                            height="80" class="rounded" alt="Image" />
                                    </td>
                                    <td>{{ Str::ucfirst($tech->title) }}</td>
                                    <td>{{ $tech->slug }}</td>
                                    <td>
                                        @php
                                            $features = json_decode($tech->features, true);
                                        @endphp
                                        @if ($features && is_array($features))
                                            <ul class="list-unstyled mb-0">
                                                @foreach ($features as $f)
                                                    <li><i class="fa fa-check text-success me-1"></i>{{ $f }}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @else
                                            <span class="text-muted">No features</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($tech->status)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td class="text-end">
                                        <div class="table-action-btns">
                                            <a href="{{ route('technology.edit', $tech->id) }}"
                                                class="btn btn-warning btn-xs text-white">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="javascript:void(0);" onclick="deleteData('{{ $deleteUrl }}')"
                                                class="btn btn-danger btn-xs text-white btn-delete">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                            {{-- Status Toggle Button (used as soft delete) --}}
                                            {{-- <a href="{{ route('technology.status', $tech->id) }}"
                                                class="btn btn-danger btn-xs text-white"
                                                onclick="return confirm('Are you sure you want to change status?')">
                                                <i class="fa fa-trash"></i>
                                            </a> --}}
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
