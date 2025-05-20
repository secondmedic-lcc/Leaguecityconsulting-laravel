@empty(!$banner)
    <div class="row">
        <div class="col-lg-12">
            @include('backend.layouts.alert')

            <form action="{{ url('admin/website-banner') }}/{{ $banner->id }}" method="POST" autocomplete="off"
                enctype="multipart/form-data">
                @csrf
                <div class="card h-auto">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="">Page</label>
                                <select class="form-control js-example-basic-single" required name="page_name">
                                    <option value="">-- Select Page --</option>
                                    <option value="home" {{ $banner->page_name == 'home' ? 'selected' : '' }}>Home Page
                                    </option>
                                    <option value="about-us" {{ $banner->page_name == 'about-us' ? 'selected' : '' }}>
                                        About Us</option>
                                    <option value="services" {{ $banner->page_name == 'services' ? 'selected' : '' }}>
                                        Service Listing</option>
                                    <option value="blogs" {{ $banner->page_name == 'blogs' ? 'selected' : '' }}>Blogs
                                        Listing</option>
                                    <option value="products" {{ $banner->page_name == 'products' ? 'selected' : '' }}>
                                        Products
                                    </option>
                                    <option value="terms-and-conditions"
                                        {{ $banner->page_name == 'terms-and-conditions' ? 'selected' : '' }}>Terms And
                                        Conditions</option>
                                    <option value="privacy-policy"
                                        {{ $banner->page_name == 'privacy-policy' ? 'selected' : '' }}>Privacy Policy
                                    </option>
                                    <option value="portfolio-details"
                                        {{ $banner->page_name == 'portfolio-details' ? 'selected' : '' }}>Portfolio
                                        Details</option>
                                    <option value="industry-details"
                                        {{ $banner->page_name == 'industry-details' ? 'selected' : '' }}>Industry Details
                                    </option>
                                    <option value="products-details"
                                        {{ $banner->page_name == 'products-details' ? 'selected' : '' }}>Products Details
                                    </option>
                                    <option value="singleservice"
                                        {{ $banner->page_name == 'singleservice' ? 'selected' : '' }}>Services Details
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="">Page Title</label>
                                <input type="text" class="form-control" name="page_title"
                                    onkeypress="return /[A-Za-z ]/i.test(event.key)" required
                                    value="{{ $banner->page_title }}" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="">Banner Heading</label>
                                <input type="text" class="form-control" name="heading" value="{{ $banner->heading }}" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="">Banner Sub Heading</label>
                                <input type="text" class="form-control" name="sub_heading" required
                                    value="{{ $banner->sub_heading }}" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="">Banner Details</label>
                                <input type="text" class="form-control" name="details" required
                                    value="{{ $banner->details }}" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="">Button Text</label>
                                <input type="text" class="form-control" name="button_text"
                                    value="{{ $banner->button_text }}" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="">Button Url</label>
                                <input type="url" class="form-control" name="button_url"
                                    value="{{ $banner->button_url }}" />
                            </div>
                            <div class="col-md-3 mb-2 col-8">
                                <label class="form-label" for="">Banner Image</label>
                                <input type="file" class="form-control" name="banner_image" onchange="readURL(this);"
                                    accept="image/webp" />
                                <small class="text-danger">(Upload only WEBP image format less than 150 KB)</small>
                            </div>
                            <div class="col-md-2 col-4">
                                <img alt="banner Image"
                                    src="{{ $banner->banner_image && $banner->banner_image != '' ? asset($banner->banner_image) : asset('uploads/default.jpg') }}"
                                    class="img-responsive mt-2 rounded w-100" width="100" height="auto"
                                    id="img_preview" />
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn web-btn w-50 mt-3" id="submit_btn">
                                    Update Banner
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endempty
