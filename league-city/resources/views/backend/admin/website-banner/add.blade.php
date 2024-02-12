<div class="row">
    <div class="col-lg-12">
        @include('backend.layouts.alert')

        <form action="{{ route('website-banner'); }}" method="POST" autocomplete="off" enctype="multipart/form-data" >
        @csrf
            <div class="card h-auto">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Page</label>
                            <select class="form-control js-example-basic-single" required name="page_name">
                                <option value="">-- Select Page --</option>
                                <option value="about-us">About Us</option>
                                <option value="services">Service Listing</option>
                                <option value="blogs">Blogs Listing</option>
                                <option value="terms-and-conditions">Terms And Conditions</option>
                                <option value="privacy-policy">Privacy Policy</option>
                                <option value="portfolio-details">Portfolio Details</option>
                                <option value="industry-details">Industry Details</option>
                                <option value="products-details">Products Details</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Page Title</label>
                            <input type="text" class="form-control" name="page_title" onkeypress="return /[A-Za-z ]/i.test(event.key)" required value="{{ old('page_title') }}" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Banner Heading</label>
                            <input type="text" class="form-control" name="heading"  value="{{ old('heading') }}" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Banner Sub Heading</label>
                            <input type="text" class="form-control" name="sub_heading" required value="{{ old('sub_heading') }}" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Banner Details</label>
                            <input type="text" class="form-control" name="details" required value="{{ old('details') }}" />
                        </div>
                        <div class="col-md-3 mb-2">
                            <label class="form-label" for="">Banner Image</label>
                            <input type="file" class="form-control" required name="banner_image" onchange="readURL(this);"  value="{{ old('banner_image') }}"  accept="image/*" />
                        </div>
                        <div class="col-md-2">
                            <img alt="Portfolio Profile" src="{{ asset('uploads/default.jpg')}}" class="img-responsive mt-2 rounded" width="100" height="auto" id="img_preview" />
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn web-btn w-50 mt-3" id="submit_btn" >
                                Add Banner
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>