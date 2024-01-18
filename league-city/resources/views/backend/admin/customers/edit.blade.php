<div class="row">
    <div class="col-lg-12">
        @include('backend.layouts.alert')

        @empty(!$customer)
            <form action="{{ url()->current(); }}" method="POST" autocomplete="off" >
            @csrf
                <div class="card h-auto">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <label class="form-label" for="">Name</label>
                                <input type="text" class="form-control" name="name" onkeypress="return /[A-Za-z ]/i.test(event.key)" required value="{{ $customer->name }}" />
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="form-label" for="">Date Of Birth</label>
                                <input type="date" class="form-control" name="dob"  required value="{{ $customer->dob }}" min="{{  date("Y-m-d", strtotime("-80 years")); }}" max="{{ date("Y-m-d", strtotime("-10 years")); }}" />
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="form-label" for="">Email</label>
                                <input type="email" class="form-control" name="email"  required value="{{ $customer->email }}" />
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="form-label" for="">Mobile</label>
                                <input type="text" class="form-control" name="contact" onkeypress="return /[0-9]/i.test(event.key)" minlength="10" maxlength="10" pattern="[6-9]{1}[0-9]{9}" required value="{{ $customer->contact }}" />
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="form-label" for="">Password <small>(If you want to change)</small></label>
                                <input type="text" class="form-control" name="password" />
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="form-label" for="">Current Status</label>
                                <input type="text" class="form-control" name="current_status" required value="Active" readonly />
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn web-btn w-50 mt-3" id="submit_btn" >
                                    Update Customer
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        @endempty
    </div>
</div>