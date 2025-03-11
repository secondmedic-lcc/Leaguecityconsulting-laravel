<div class="row">
    <div class="col-sm-12">
        @include('backend.layouts.alert')
        <div class="card member-statistics h-auto billing-table">
            <div class="card-header bg-white">
                <div class="d-flex align-items-center justify-content-between">
                    <h6 class="mt-2 mb-2">Team Members List</h6>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table id="" class="table dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="table-id">ID</th>
                            <th>Name</th>
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
                               
                            @endphp
                            <tr>
                                <td>{{ $a++ }}</td>
                                <td>{{ $member->name }}</td>
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
            </div>
                <div class="pagination mt-3">
                    {{ $teamMembers->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

