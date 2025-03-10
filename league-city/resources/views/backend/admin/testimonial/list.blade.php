<div class="row">
    <div class="col-sm-12">
        @include('backend.layouts.alert')

        <div class="card member-statistics h-auto billing-table">
            <div class="card-header bg-white">
                <div class="d-flex align-items-center justify-content-between">
                    <h6 class="mb-1">Testimonials List</h6>
                    <div class="dropdown filter-dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class='bx bx-menu-alt-right'></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <h6>Quick Actions</h6>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('testimonials.create') }}">Add Testimonial</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive web-overflow">
                    <table id="" class="table dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="table-id">ID</th>
                                <th>Name</th>
                                <th>Company Logo</th>
                                <th>Description</th>
                                <th>Show at Homepage</th>
                                <th>Status</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i = 1;
                            @endphp
                            @foreach ($testimonials as $testimonial)
                                @php $deleteUrl = route('testimonials.destroy',$testimonial['id']); @endphp
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $testimonial->name }}</td>
                                    <td><img src="{{ asset($testimonial->image) }}" width="50"
                                            alt="{{ $testimonial->name }}"></td>
                                    <td>{{ Str::limit($testimonial->description, 50) }}</td>
                                    <td>
                                        {{ $testimonial->show_at_homepage ? 'Yes' : 'No' }}
                                    </td>
                                    <td>
                                        {{ $testimonial->status ? 'Active' : 'Inactive' }}
                                    </td>
                                    <td class="text-end">
                                        <div class="table-action-btns">
                                            <a href="{{ route('testimonials.edit', $testimonial->id) }}"
                                                class="btn btn-warning btn-xs text-white">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="javascript:void(0);" onclick="deleteData('<?= $deleteUrl ?>')"
                                                class="btn btn-danger btn-xs text-white btn-delete">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="pagination mt-3">
                    {{ $testimonials->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
