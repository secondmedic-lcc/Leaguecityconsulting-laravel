<div class="row">
    <div class="col-sm-12">
        @include('backend.layouts.alert')
        
        <div class="card member-statistics h-auto billing-table">
            <div class="card-body">
                <div class="table-responsive web-overflow mt-4">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Country</th>
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
                                    <td>{{ $s['country_name']; }}</td>
                                    <td>{{ date('d M, Y', strtotime($s['created_at'])); }}</td>
                                    <td class="text-end">
                                        <a href="javascript:void(0);" class="btn btn-info btn-xs text-white btn-view" message="{{ $s['message']; }}" data-bs-toggle="modal" data-bs-target="#viewModel" >
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="javascript:void(0);" url={{ route('campaign.destory',$s['id']) }} class="btn btn-danger btn-xs text-white btn-delete">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="pagination mt-3">
                    {{ $request->links() }}
                </div>
            </div>
        </div>
    </div>
</div>