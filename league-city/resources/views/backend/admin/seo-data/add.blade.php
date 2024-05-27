<div class="row">
    <div class="col-lg-12">
        @include('backend.layouts.alert')

        <form action="{{ url()->current() }}" method="POST" autocomplete="off" autocomplete="off" enctype="multipart/form-data">
            @csrf
            <div class="card h-auto">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="">Page Name</label>
                                    <select class="form-control js-example-basic-single" name="page_name" required>
                                        <option value="" selected disabled>- Select Service Provider</option>
                                        <option value="home">Home Page</option>
                                        <option value="about-us">About Us Page</option>
                                        <option value="contact-us">Contact Us Page</option>
                                        <option value="services">Service Listing</option>
                                        <option value="portfolio">Portfolio Listing</option>
                                        <option value="blogs">Blogs Listing</option>
                                        <option value="products">Products Listing</option>
                                        <option value="industry">Industry Listing</option>
                                    </select>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="">Page Link</label>
                                    <input type="text" class="form-control text-dark" name="page_link" required value="{{ old('page_link') }}" />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="">Canonical URL</label>
                                    <input type="text" class="form-control text-dark" name="canonical" value="{{ old('canonical') }}" />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="">Meta Title</label>
                                    <textarea class="form-control text-dark" name="meta_title" required value="{{ old('meta_title') }}"></textarea>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="">Meta Key</label>
                                    <input type="text" class="form-control text-dark" name="meta_key" required value="{{ old('meta_key') }}" />
                                </div>
                                <div class="col-md-6 mb-4 col-8">
                                    <label class="form-label" for="">Meta Image</label>
                                    <input type="file" class="form-control" name="meta_image" onchange="readURL(this);" accept="image/webp" />
                                    <small class="text-danger">(Upload only WEBP image format less than 150 KB)</small>
                                </div>
                                <div class="col-md-2 col-4">
                                    <img alt="User Profile" src="{{ asset('uploads/default.jpg')}}" class="img-responsive mt-2 rounded" width="100%" height="auto" id="img_preview" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="col-md-12 mb-3">
                                <label for="">Meta Description</label>
                                <textarea name="meta_description" class="form-control text-dark" rows="5" required>{{ old('meta_description') }}</textarea>
                            </div>
                            <label for="">Seo Schema</label>
                            <textarea name="meta_schema" class="form-control text-dark" rows="5">{{ old('meta_schema') }}</textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn web-btn w-10 mt-3" id="submit_btn">
                                Add Seo Data
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>