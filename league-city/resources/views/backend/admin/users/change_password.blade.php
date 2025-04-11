<div class="row">
    <div class="col-lg-12">
        @include('backend.layouts.alert')
        <form action="{{ url()->current() }}" method="POST">
            @csrf
            <div class="card h-auto">
                <div class="card-body">
                    <div class="row align-items-center">

                        <div class="col-md-4 mb-2">
                            <label class="form-label">Current Password</label>
                            <div class="position-relative">
                                <input type="password" class="form-control password-field" name="current_password"
                                    required />
                                <i class="fa fa-eye toggle-password" onclick="togglePassword(this)"
                                    style="position:absolute; top:50%; right:10px; transform:translateY(-50%); cursor:pointer;"></i>
                            </div>
                            @error('current_password')
                                <span style="color:red;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-4 mb-2">
                            <label class="form-label">New Password</label>
                            <div class="position-relative">
                                <input type="password" class="form-control password-field" name="new_password"
                                    required />
                                <i class="fa fa-eye toggle-password" onclick="togglePassword(this)"
                                    style="position:absolute; top:50%; right:10px; transform:translateY(-50%); cursor:pointer;"></i>
                            </div>
                            @error('new_password')
                                <span style="color:red;">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-2">
                            <label class="form-label">Confirm New Password</label>
                            <div class="position-relative">
                                <input type="password" class="form-control password-field"
                                    name="new_password_confirmation" required />
                                <i class="fa fa-eye toggle-password" onclick="togglePassword(this)"
                                    style="position:absolute; top:50%; right:10px; transform:translateY(-50%); cursor:pointer;"></i>
                            </div>
                        </div>

                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn web-btn mt-3" id="submit_btn">
                                Change Password
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


<script>
    function togglePassword(icon) {
        const input = icon.previousElementSibling;
        if (input.type === "password") {
            input.type = "text";
            icon.classList.remove("fa-eye");
            icon.classList.add("fa-eye-slash");
        } else {
            input.type = "password";
            icon.classList.remove("fa-eye-slash");
            icon.classList.add("fa-eye");
        }
    }
</script>
