<div class="row">
    <div class="col-sm-12">
        @include('backend.layouts.alert')

        <div class="card member-statistics h-auto billing-table">
            <div class="card-body">
                <table id="tableDrop" class="table dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="table-id">ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Campaign</th>
                            <th>Location</th>
                            <th>Enquiry At</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $a = 1; @endphp
                        @foreach($request as $s)
                        @php $deleteUrl = route('campaign.destory',$s['id']); @endphp
                        <tr>
                            <td>{{ $a++; }}</td>
                            <td>{{ $s['name']; }}</td>
                            <td>{{ $s['email'] ; }}</td>
                            <td>{{ $s['contact']; }}</td>
                            <td>{{ $s['campaign_for']; }}</td>
                            <td>{{ $s['location_name']; }}</td>
                            <td>{{ date('d M, Y', strtotime($s['created_at'])); }}</td>
                            <td class="text-end">
                                <div class="table-action-btns">
                                    <a href="javascript:void(0);" class="btn btn-warning btn-xs text-white btn-edit" remark="{{ $s['remark'] }}"  campaign_id="{{ $s['id'] }}"  request_status="{{ $s['request_status'] }}" data-bs-toggle="modal" data-bs-target="#editModel">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-info btn-xs text-white btn-view" onclick="showMessage('{{ $s->message; }}')"  data-bs-toggle="modal" data-bs-target="#viewModel">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="javascript:void(0);" onclick="deleteData('<?= $deleteUrl; ?>')" class="btn btn-danger btn-xs text-white btn-delete">
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



<div class="modal fade" id="editModel" tabindex="-1" aria-labelledby="editModelLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-title">
            Edit Status
          </h5>
        </div>
        <form action="{{ route('campaign.update'); }}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <input type="hidden" class="form-control" required name="campaign_id" id="campaign_id" />
                </div>
                <div class="form-group mb-3">
                    <select name="request_status" required class="form-control " id="request_status">
                        <option value="">--Select Status--</option>
                        <option value="pending">Pending</option>
                        <option value="confirmed">Confirmed</option>
                        <option value="cancelled">Cancelled</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <textarea name="remark" required class="form-control text-dark" cols="30" rows="5" id="remark" ></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Update Status</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </form>
      </div>
    </div>
</div>