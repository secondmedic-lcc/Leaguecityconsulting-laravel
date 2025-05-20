<div class="row">
    <div class="col-sm-12">
        @include('backend.layouts.alert')

        <div class="card h-auto billing-table">
            <div class="card-header bg-white">
                <div class="d-flex align-items-center justify-content-between">
                    <h6 class="mb-1">Growth Metrics Title and Description</h6>
                </div>

                <form action="{{ route('growthmetrictitle.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="1">
                    <div class="card h-auto">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="title">Title</label>
                                    <input type="text" class="form-control" name="title" id="title"
                                        value="{{ old('title',$pagetitle->title) }}" />
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="description">Description</label>
                                    <input type="text" class="form-control" name="description" id="description"
                                        value="{{ old('description', $pagetitle->description) }}" />
                                </div>
                                <div class="col-md-12 mt-4 text-left">
                                    <button type="submit" class="btn web-btn">
                                        Update Title and Description
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="card h-auto billing-table">
                    <div class="card-header bg-white">
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="mb-1">Growth Metrics List</h6>
                            <div class="dropdown filter-dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class='bx bx-menu-alt-right'></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li>
                                        <h6>Quick Actions</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="{{ route('growthmetric.index') }}">Add Growth
                                            Metric</a>
                                    </li>
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
                                        <th>Icon</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $counter = 1; @endphp
                                    @foreach ($list as $metric)
                                        <tr>
                                            <td>{{ $counter++ }}</td>
                                            <td>
                                                <i class="{{ $metric->icon_class }}" style="font-size: 24px;"></i>
                                            </td>
                                            <td>{{ $metric->title }}</td>
                                            <td>{{ $metric->description }}</td>
                                            <td class="text-end">
                                                <div class="table-action-btns">
                                                    <a href="{{ route('growthmetric.edit', $metric->id) }}"
                                                        class="btn btn-warning btn-xs text-white">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="javascript:void(0);"
                                                        onclick="deleteData('{{ route('growthmetric.delete', $metric->id) }}')"
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
