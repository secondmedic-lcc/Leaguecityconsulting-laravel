@empty(!$industry)
    
    <div class="row">
        <div class="col-lg-12">
            @include('backend.layouts.alert')

            <form action="{{ url('admin/industry'); }}/{{ $industry->id; }}" method="POST" autocomplete="off" enctype="multipart/form-data" >
            @csrf
                <div class="card h-auto">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="">Product Name</label>
                                <input type="text" class="form-control" name="name" onkeypress="return /[A-Za-z ]/i.test(event.key)" required value="{{ $industry->name }}" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="">Product URL</label>
                                <input type="text" class="form-control" name="industry_url"  value="{{ $industry->industry_url; }}" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="">Product Heading</label>
                                <input type="text" class="form-control" name="heading" required value="{{ $industry->heading; }}" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="">Product Sub Heading</label>
                                <input type="text" class="form-control" name="sub_heading" required value="{{ $industry->sub_heading; }}" />
                            </div>
                            <div class="col-md-3 mb-4 col-8">
                                <label class="form-label" for="">Product Image</label>
                                <input type="file" class="form-control"  name="industry_image" onchange="readURL(this);" accept="image/webp" />
                                <small class="text-danger">(Upload only WEBP image format less than 150 KB)</small>
                            </div>
                            <div class="col-md-2 col-4">
                                <img alt="industry Profile" src="{{ ($industry->industry_image && $industry->industry_image != "") ? asset($industry->industry_image) : asset('uploads/default.jpg'); }}" class="img-responsive mt-2 rounded w-100" height="auto" id="img_preview" />
                            </div>
                            <div class="col-md-7">
                                <label class="form-label" for="">Product Description</label>
                                <textarea name="description" rows="5" class="form-control">{{ $industry->description; }}</textarea>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="">Meta Title</label>
                                    <textarea class="form-control text-dark" name="meta_title" required value="{{ @$seo_data->meta_title; }}" >{{ @$seo_data->meta_title; }}</textarea>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="">Meta Key</label>
                                    <textarea class="form-control text-dark" name="meta_key" required value="{{ @$seo_data->meta_key; }}" >{{ @$seo_data->meta_key; }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6  mt-3">
                                <label for="">Meta Description</label>
                                <textarea name="meta_description" class="form-control text-dark" rows="5" required>{{ @$seo_data->meta_description; }}</textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn web-btn w-50 mt-3" id="submit_btn" >
                                    Update industry
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>   

@endempty