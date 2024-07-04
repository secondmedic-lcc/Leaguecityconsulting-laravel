@empty(!$blog)

<div class="row">
    <div class="col-lg-12">
        @include('backend.layouts.alert')

        <form action="{{ url()->current(); }}" method="POST" autocomplete="off" enctype="multipart/form-data">
            @csrf
            <div class="card h-auto">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Blog Title</label>
                            <input type="text" class="form-control text-dark" name="blog_title" onkeypress="return /[A-Za-z ]/i.test(event.key)" required value="{{ $blog->blog_title }}" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Blog Read Time</label>
                            <input type="text" class="form-control text-dark" name="read_time" onkeypress="return /[A-Za-z0-9 ]/i.test(event.key)" required value="{{ $blog->read_time }}" />
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label" for="">Blog Small Detail</label>
                            <input type="text" class="form-control text-dark" name="blog_details" required value="{{ $blog->blog_details }}" />
                        </div>
                        <div class="col-md-4 mb-3 col-8">
                            <label class="form-label" for="">Blog Image</label>
                            <input type="file" class="form-control" name="blog_image" onchange="readURL(this);" accept="image/webp" />
                            <small class="text-danger">(Upload only WEBP image format less than 100 KB)</small>
                        </div>
                        <div class="col-md-2 col-4">
                            <img alt="Portfolio Profile" src="{{  ($blog->blog_image != '' && $blog->blog_image != null) ? asset($blog->blog_image) : asset('uploads/default.jpg')}}" class="img-responsive mt-2 rounded w-100" height="auto" id="img_preview" />
                        </div>
                        <div class="col-md-4 mb-3 col-8">
                            <label class="form-label" for="">Blog Detail Image</label>
                            <input type="file" class="form-control" name="detail_image" onchange="readURL2(this);" accept="image/webp" value="{{ $blog->detail_image }}" />
                            <small class="text-danger">(Upload only WEBP image format less than 150 KB)</small>
                        </div>
                        <div class="col-md-2 col-4">
                            <img alt="Portfolio Profile" src="{{  ($blog->detail_image != '' && $blog->detail_image != null) ? asset($blog->detail_image) : asset('uploads/default.jpg')}}" class="img-responsive mt-2 rounded w-100" height="auto" id="img_preview2" />
                        </div>
                        <div class="col-m-md-12">
                            <label for="">Blog Description</label>
                            <textarea name="description" id="description" class="form-control">{{ $blog->description }}</textarea>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="col-md-12 mb-3">
                                <label class="form-label" for="">Meta Title</label>
                                <textarea class="form-control text-dark" name="meta_title" required value="{{ @$seo_data->meta_title; }}">{{ @$seo_data->meta_title; }}</textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label" for="">Meta Key</label>
                                <textarea class="form-control text-dark" name="meta_key" required value="{{ @$seo_data->meta_key; }}">{{ @$seo_data->meta_key; }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6  mt-3">
                            <label for="">Meta Description</label>
                            <textarea name="meta_description" class="form-control text-dark"  id="meta_description" rows="5" required>{{ @$seo_data->meta_description; }}</textarea>
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn web-btn w-50 mt-3" id="submit_btn">
                                Upload Blog
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endempty