<div class="row">
    <div class="col-lg-12">
        @include('backend.layouts.alert')

        <form action="{{ url('admin/portfolio-services'); }}/{{ $portfolio_details->id; }}" method="POST" autocomplete="off" enctype="multipart/form-data" >
        @csrf
            <div class="card h-auto">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Portfolio</label>
                            <select class="form-control js-example-basic-single" name="portfolio_id">
                                <option value="" selected disabled > -- Select -- </option>
                                @foreach($portfolio as $p)
                                    <option value="{{ $p['id']; }}" {{ ($portfolio_details->portfolio_id == $p['id']) ? 'selected': ""; }} >{{ $p['name']; }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Service Title</label>
                            <input type="text" class="form-control" name="service_title" onkeypress="return /[A-Za-z ]/i.test(event.key)" required value="{{ $portfolio_details->service_title; }}" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Service Icon</label>
                            <textarea class="form-control" name="service_icon" required value="{{ $portfolio_details->service_icon; }}">{{ $portfolio_details->service_icon; }}</textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Service Details</label>
                            <textarea class="form-control" name="service_details" required>{{ $portfolio_details->service_details; }}</textarea>
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn web-btn w-50 mt-3" id="submit_btn" >
                                Update Portfolio Services
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>