@empty(!$portfolio)
    
    <div class="row">
        <div class="col-lg-12">
            @include('backend.layouts.alert')

            <form action="{{ url('admin/portfolio'); }}/{{ $portfolio->id; }}" method="POST" autocomplete="off" enctype="multipart/form-data" >
            @csrf
                <div class="card h-auto">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="">Project Name</label>
                                <input type="text" class="form-control" name="name" onkeypress="return /[A-Za-z ]/i.test(event.key)" required value="{{ $portfolio->name }}" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="">Project URL</label>
                                <input type="text" class="form-control" name="project_url" required value="{{ $portfolio->project_url; }}" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="">Project Heading</label>
                                <input type="text" class="form-control" name="heading" required value="{{ $portfolio->heading; }}" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="">Project Sub Heading</label>
                                <input type="text" class="form-control" name="sub_heading" required value="{{ $portfolio->sub_heading; }}" />
                            </div>
                            <div class="col-md-4 mb-2">
                                <label class="form-label" for="">Portfolio Image</label>
                                <input type="file" class="form-control"  name="portfolio_image" onchange="readURL(this);" accept="image/webp" />
                                <small class="text-danger">(Upload only WEBP image format less than 150 KB)</small>
                            </div>
                            <div class="col-md-2">
                                <img alt="Portfolio Profile" src="{{ ($portfolio->image && $portfolio->image != "") ? asset($portfolio->image) : asset('uploads/default.jpg'); }}" class="img-responsive mt-2 rounded" width="100" height="auto" id="img_preview" />
                            </div>
                            <div class="col-md-4 mb-2">
                                <label class="form-label" for="">Portfolio Logo</label>
                                <input type="file" class="form-control" name="logo" onchange="readURL2(this);" accept="image/*" />
                            </div>
                            <div class="col-md-2">
                                <img alt="Portfolio Profile" src="{{ ($portfolio->logo && $portfolio->logo != "") ? asset($portfolio->logo) : asset('uploads/default.jpg'); }}" class="img-responsive mt-2 rounded bg-secondary p-2" width="100" height="auto" id="img_preview2" />
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
                                    Update Portfolio
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>   

@endempty