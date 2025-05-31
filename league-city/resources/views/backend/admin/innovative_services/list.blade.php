<div class="row">
    <div class="col-sm-12">
        @include('backend.layouts.alert')

        <div class="card h-auto billing-table">
            <div class="card-header bg-white">
                <div class="d-flex align-items-center justify-content-between">
                    <h6 class="mb-1">Innovative Services List</h6>
                    <div class="dropdown filter-dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class='bx bx-menu-alt-right'></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <h6>Quick Actions</h6>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('innovative_services.create') }}">Add
                                    Service</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="table-id">ID</th>
                                <th>Icon</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Link</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $a = 1; @endphp


                            @foreach ($list as $service)
                                @php $deleteUrl = route('innovative_services.destroy', $service->id); @endphp
                                <tr>
                                    <td>{{ $a++ }}</td>
                                    <td><i class="{{ $service->icon }}"></i></td>
                                    <td>{{ Str::ucfirst($service->title) }}</td>
                                    <td>{{ $service->slug }}</td>
                                    <td><a href="{{ $service->link }}" target="_blank">{{ $service->link }}</a></td>
                                    <td>
                                        <a href="javascript:void(0);" data-bs-toggle="modal"
                                            data-bs-target="#descModal{{ $service->id }}" class="text-primary">
                                            View Description
                                        </a>
                                    </td>
                                    <td>
                                        @if ($service->status == 1)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td class="text-end">
                                        <div class="table-action-btns">
                                            <a href="{{ route('innovative_services.edit', $service->id) }}"
                                                class="btn btn-warning btn-xs text-white" title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            {{-- <form action="{{ route('innovative_services.destroy', $service->id) }}"
                                                method="POST" style="display:inline-block;"
                                                onsubmit="return confirm('Are you sure to delete this service?');">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-xs text-white" type="submit"
                                                    title="Delete">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form> --}}
                                            <a href="javascript:void(0);" onclick="deleteData('<?= $deleteUrl ?>')"
                                                class="btn btn-danger btn-xs text-white btn-delete">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                               
                                    <div class="modal fade" id="descModal{{ $service->id }}" tabindex="-1"
                                        aria-labelledby="descModalLabel{{ $service->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Service Description</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    {!! $service->description !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
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
