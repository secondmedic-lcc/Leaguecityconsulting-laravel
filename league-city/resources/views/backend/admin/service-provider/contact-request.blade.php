<div class="row">
    <div class="col-sm-12">
        @include('backend.layouts.alert')

        <div class="card member-statistics h-auto billing-table">
            <div class="card-body">
                <!-- <div class="table-responsive web-overflow">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="table-id">ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Budget</th>
                                <th>Enquiry At</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $a = 1; @endphp
                            @foreach($request as $s)
                            <tr>
                                <td>{{ $a++; }}</td>
                                <td>{{ $s['name']; }}</td>
                                <td>{{ $s['email'] ; }}</td>
                                <td>{{ $s['contact']; }}</td>
                                <td>₹{{ $s['budget']; }}</td>
                                <td>{{ date('d M, Y', strtotime($s['created_at'])); }}</td>
                                <td class="text-end">
                                    <a href="javascript:void(0);" class="btn btn-info btn-xs text-white btn-view" message="{{ $s['message']; }}" data-bs-toggle="modal" data-bs-target="#viewModel">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="javascript:void(0);" url={{ url('admin/contact-request-delete/'.$s['id']) }} class="btn btn-danger btn-xs text-white btn-delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> -->
                <table id="tableDrop" class="table dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="table-id">ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Budget</th>
                            <th>Enquiry At </th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $a = 1; @endphp
                        @foreach($request as $s)
                        @php $deleteUrl = url('admin/contact-request-delete/'.$s['id']); @endphp
                        <tr>
                            <td>{{ $a++; }}</td>
                            <td>{{ $s['name']; }}</td>
                            <td>{{ $s['email'] ; }}</td>
                            <td>{{ $s['contact']; }}</td>
                            <td>₹{{ $s['budget']; }}</td>
                            <td>{{ date('d M, Y', strtotime($s['created_at'])); }} <br>
                                {{ date('h:i A', strtotime($s['created_at'])); }}</td>
                            <td class="text-end">
                                <div class="table-action-btns">
                                    <a href="javascript:void(0);" class="btn btn-info btn-xs text-white btn-view"
                                            message="{{ $s->message; }}"
                                            data-bs-toggle="modal"
                                            data-bs-target="#viewModel{{$s->id}}">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="javascript:void(0);" onclick="deleteData('<?= $deleteUrl; ?>')" class="btn btn-danger btn-xs text-white btn-delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <div class="modal fade" id="viewModel{{$s->id}}" tabindex="-1" aria-labelledby="viewModelLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="modal-title">Enquiry</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <p>Message <br><b id="message">{{ $s->message; }}</b></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                        </div>
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




