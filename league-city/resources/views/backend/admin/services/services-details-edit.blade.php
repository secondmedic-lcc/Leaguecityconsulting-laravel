<div class="row">
    <div class="col-lg-12">
        @include('backend.layouts.alert')

        <form action="{{ url('admin/services-details-services'); }}/{{ $services_details->id; }}" method="POST" autocomplete="off" enctype="multipart/form-data" >
        @csrf
            <div class="card h-auto">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">services</label>

                            <select class="form-control js-example-basic-single" name="services_id">
                                <option value="" selected disabled > -- Select -- </option>
                                @foreach($services as $p)
                                    <option value="{{ $p['id']; }}" {{ ($services_details->services_id == $p['id']) ? 'selected': ""; }} >{{ $p['name']; }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Service Title</label>
                            <input type="text" class="form-control" name="service_title" onkeypress="return /[A-Za-z ]/i.test(event.key)" required value="{{ $services_details->service_title; }}" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Service Icon</label>
                            <textarea class="form-control" name="service_icon" required value="{{ $services_details->service_icon; }}">{{ $services_details->service_icon; }}</textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Service Details</label>
                            <textarea class="form-control" name="service_details" required>{{ $services_details->service_details; }}</textarea>
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn web-btn w-50 mt-3" id="submit_btn" >
                                Update Services
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>