<div class="row">
    <div class="col-sm-12">
        @include('backend.layouts.alert')

        <div class="card member-statistics h-auto billing-table">
            <div class="card-header bg-white">
                <div class="d-flex align-items-center justify-content-between">
                    <h6 class="mt-2">Edit Contact Info</h6>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.contact-info.update') }}" method="POST">
                    @csrf
                    <div class="table-responsive">
                        <table id="tableDrop" class="table nowrap" cellspacing="0" width="100%">
                            <tr>
                                <th class="text-center" width="20%">
                                    Phone Number
                                </th>
                                <td>
                                    <input type="text" name="phone" value="{{ optional($contactInfo)->phone }}"
                                        class="form-control bg-white" placeholder="Enter Mobile " />
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center"  width="20%">
                                    Email Address
                                </th>
                                <td>
                                    <input type="email" name="email" value="{{ optional($contactInfo)->email }}"
                                        class="form-control bg-white" placeholder="Enter Email Address" />
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center" width="20%">
                                    Address
                                </th>
                                <td>
                                    <input type="text" name="address" value="{{ optional($contactInfo)->address }}"
                                        class="form-control bg-white" placeholder="Enter Address" />
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="text-center mt-3">
                        <button type="submit" class="btn web-btn" id="submit_btn">
                            Update Contact Info
                        </button>
                    </div> {{-- <div class="row align-items-center">
                        <div class="col-lg-4 mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="text" class="form-control" name="phone" placeholder="Enter phone number"
                                value="{{ $contactInfo->phone ?? '' }}" required>
                        </div>

                        <div class="col-lg-4 mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter email address"
                                value="{{ $contactInfo->email ?? '' }}" required>
                        </div>

                        <div class="col-lg-4 mb-3">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" placeholder="Enter address"
                                value="{{ $contactInfo->address ?? '' }}" required>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Save Changes</button>
                        </div>
                    </div> --}}
                </form>
            </div>
        </div>
    </div>
</div>
