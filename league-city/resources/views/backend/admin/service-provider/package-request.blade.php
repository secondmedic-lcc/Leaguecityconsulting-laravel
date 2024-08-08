<div class="row">
    <div class="col-sm-12">
        @include('backend.layouts.alert')

        <div class="card member-statistics h-auto billing-table">
            <div class="card-body">
                <table id="tableDrop" class="table dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="table-id">ID</th>
                            <th>Package</th>
                            <th>Plan</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Location</th>
                            <th>Enquiry At</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $a = 1; @endphp
                        @foreach($request as $s)
                        @php $deleteUrl = url('admin/plan-requests-delete/'.$s['id']);
                             $message = $s['about']; @endphp
                        <tr>
                            <td>{{ $a++; }}</td>
                            <td>{{ $s['package']; }}</td>
                            <td>{{ $s['plan']; }}</td>
                            <td>{{ $s['name']; }}</td>
                            <td>{{ $s['email'] ; }}</td>
                            <td>{{ $s['mobile']; }}</td>
                            <td>{{ $s['location']; }}</td>
                            <td>{{ date('d M, Y', strtotime($s['created_at'])); }} <br>
                                {{ date('h:i A', strtotime($s['created_at'])); }}</td>
                            <td class="text-end">
                                <div class="table-action-btns">
                                    <a href="javascript:void(0);" class="btn btn-info btn-xs text-white btn-view" onclick="showMessage('{{ $message; }}')" data-bs-toggle="modal" data-bs-target="#viewModel">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="javascript:void(0);" onclick="deleteData('<?= $deleteUrl; ?>')"  class="btn btn-danger btn-xs text-white">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pagination mt-3">
                    {{ $request->links() }}
                </div>
            </div>
        </div>
    </div>
</div>