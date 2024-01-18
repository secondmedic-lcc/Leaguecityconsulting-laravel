<div class="row">
    <div class="col-lg-12">
        @include('backend.layouts.alert')
        
        @empty(!$agent)
            <form action="{{ url()->current(); }}" method="POST" autocomplete="off" >
            @csrf
                <div class="card h-auto">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <label class="form-label" for="">Agent Id</label>
                                <input type="text" class="form-control" name="agent_id" required value="{{ $agent->agent_id }}" readonly />
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="form-label" for="">Name</label>
                                <input type="text" class="form-control" name="agent_name" onkeypress="return /[A-Za-z ]/i.test(event.key)" required value="{{ $agent->agent_name }}" />
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="form-label" for="">Email</label>
                                <input type="email" class="form-control" name="agent_email"  required value="{{ $agent->agent_email }}" />
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="form-label" for="">Mobile</label>
                                <input type="text" class="form-control" name="agent_contact" onkeypress="return /[0-9]/i.test(event.key)" minlength="10" maxlength="10" pattern="[6-9]{1}[0-9]{9}" required value="{{ $agent->agent_contact }}" />
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn web-btn w-50 mt-3" id="submit_btn" >
                                    Update Agent
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        @endempty
    </div>
</div>