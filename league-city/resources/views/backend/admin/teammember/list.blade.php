<div class="row">
    <div class="col-sm-12">
        @include('backend.layouts.alert')
        <div class="card member-statistics h-auto billing-table">
            <div class="card-header bg-white">
                <div class="d-flex align-items-center justify-content-between">
                    <h6 class="mb-1">Team Members List</h6>
                    <div class="dropdown filter-dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class='bx bx-menu-alt-right'></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <h6>Quick Actions</h6>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('team-members.create') }}">Add Team Member</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table id="tableDrop" class="table dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="table-id">ID</th>
                            <th>Name</th>
                            <th>User Name</th>
                            <th>Designation</th>
                            <th>Image</th>
                            {{-- <th>Status</th> --}}
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $a = 1; @endphp
                        @foreach ($teamMembers as $member)
                            @php
                                $deleteUrl = route('team-members.destroy', $member->id);
                                $toggleStatusUrl = url('/admin/team-member/toggle-status/' . $member->id);
                            @endphp
                            <tr>
                                <td>{{ $a++ }}</td>
                                <td>{{ $member->name }}</td>
                                <td>{{ $member->username }}</td>
                                <td>{{ $member->designation }}</td>
                                <td>
                                    <img src="{{ asset($member->image) }}" width="80" height="auto"
                                        alt="Member Image">
                                </td>
                                {{-- <td>
                                    <a href="javascript:void(0);" onclick="toggleStatus('{{ $toggleStatusUrl }}')"
                                        class="btn btn-sm {{ $member->status == 1 ? 'btn-success' : 'btn-danger' }}">
                                        {{ $member->status == 1 ? 'Active' : 'Inactive' }}
                                    </a>
                                </td> --}}
                                {{-- <td>{{ date('d M, Y', strtotime($member->created_at)) }}</td> --}}
                                <td class="text-end">
                                    <div class="table-action-btns">
                                        <a href="{{ route('team-members.edit', $member->id) }}"
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
                <div class="pagination mt-3">
                    {{ $teamMembers->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

