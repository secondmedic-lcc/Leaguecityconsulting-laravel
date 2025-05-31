<div class="row">
    <div class="col-sm-12">
        @include('backend.layouts.alert')

        <div class="card h-auto billing-table">
            <div class="card-header bg-white">
                <div class="d-flex align-items-center justify-content-between">
                    <h6 class="mb-1">Sector List</h6>
                    <div class="dropdown filter-dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class='bx bx-menu-alt-right'></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <h6>Quick Actions</h6>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('sector.index') }}">Add Sector</a></li>
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
                                <th>Title</th>
                                <th>Sub Title</th>
                                <th>Description</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 1; @endphp
                            @foreach ($list as $sector)
                                @php
                                    $imgUrl = $sector->image ?? 'uploads/default.jpg';
                                    $deleteUrl = route('sector.destroy', $sector->id);
                                @endphp
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>
                                        <img src="{{ asset($imgUrl) }}" alt="Sector Image" class="rounded"
                                            width="100px" height="auto">
                                    </td>
                                    <td>{{ Str::ucfirst($sector->title) }}</td>
                                    <td>{{ $sector->subtitle ?? 'Null' }}</td>
                                    {{-- <td>{{ Str::limit(strip_tags($sector->description), 50) }}</td> --}}
                                    <td>
                                        <a href="javascript:void(0);" data-bs-toggle="modal"
                                            data-bs-target="#descModal{{ $sector->id }}" class="text-primary">
                                            View Description
                                        </a>
                                    </td>

                                    <td class="text-end">
                                        <div class="table-action-btns">
                                            <a href="{{ route('sector.edit', $sector->id) }}"
                                                class="btn btn-warning btn-xs text-white">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="javascript:void(0);" onclick="deleteData('{{ $deleteUrl }}')"
                                                class="btn btn-danger btn-xs text-white btn-delete">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>

                                    <div class="modal fade" id="descModal{{ $sector->id }}" tabindex="-1"
                                        aria-labelledby="descModalLabel{{ $sector->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Sector Description</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    {!! $sector->description !!}
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
