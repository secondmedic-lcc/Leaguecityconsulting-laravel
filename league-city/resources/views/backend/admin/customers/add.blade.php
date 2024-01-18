<div class="row">
    <div class="col-lg-12">
        @include('backend.layouts.alert')

        <form action="{{ url()->current(); }}" method="POST" autocomplete="off" >
        @csrf
            <div class="card h-auto">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="">Name</label>
                            <input type="text" class="form-control" name="name" onkeypress="return /[A-Za-z ]/i.test(event.key)" required value="{{ old('name') }}" />
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="">Date Of Birth</label>
                            <input type="date" class="form-control" name="dob"  required value="{{ old('dob') }}" min="{{  date("Y-m-d", strtotime("-80 years")); }}" max="{{ date("Y-m-d", strtotime("-10 years")); }}" />
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="">Email</label>
                            <input type="email" class="form-control" name="email"  required value="{{ old('email') }}" />
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="">Mobile</label>
                            <input type="text" class="form-control" name="contact" onkeypress="return /[0-9]/i.test(event.key)" minlength="10" maxlength="10" pattern="[6-9]{1}[0-9]{9}" required value="{{ old('contact') }}" />
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="">Password</label>
                            <input type="text" class="form-control" name="password" required value="{{ old('password') }}" />
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="">Current Status</label>
                            <input type="text" class="form-control" name="current_status" required value="Active" readonly />
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="">House No</label>
                            <input type="text" class="form-control" name="house_no" required value="{{ old('house_no'); }}" />
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="">Street Address</label>
                            <input type="text" class="form-control" name="address" required value="{{ old('address'); }}" />
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="">Landmark</label>
                            <input type="text" class="form-control" name="landmark" required value="{{ old('landmark'); }}" />
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="">Pincode</label>
                            <input type="text" class="form-control" name="pincode" required value="{{ old('pincode') }}" onkeypress="return /[0-9]/i.test(event.key)" minlength="6" maxlength="6"  />
                        </div>
                        <div class="col-md-4 mb-2">
                            <label class="form-label" for="">Country</label>
                            <select class="form-control js-example-basic-single" name="country" id="country" >
                                <option value="" selected disabled> </option>
                                @foreach($country as $c)
                                    <option value="{{ $c->country_id }}" {{ (old('country') == $c->country_id) ? 'selected' : ''; }} >{{ $c->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 mb-2">
                            <label class="form-label" for="">State</label>
                            <select class="form-control js-example-basic-single" name="state" id="state" >
                                <option value="" selected disabled> </option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-2">
                            <label class="form-label" for="">City</label>
                            <select class="form-control js-example-basic-single" name="city" id="city" >
                                <option value="" selected disabled> </option>
                            </select>
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn web-btn w-50 mt-3" id="submit_btn" >
                                Register Customer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>