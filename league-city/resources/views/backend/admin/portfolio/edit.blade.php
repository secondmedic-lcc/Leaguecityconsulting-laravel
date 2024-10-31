@empty(!$portfolio)
@php $categoryList = explode(",",$portfolio->category); @endphp

<div class="row">
    <div class="col-lg-12">
        @include('backend.layouts.alert')

        <form action="{{ url('admin/portfolio'); }}/{{ $portfolio->id; }}" method="POST" autocomplete="off" enctype="multipart/form-data">
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
                        <div class="col-md-4 mb-4 col-8">
                            <label class="form-label" for="">Portfolio Image</label>
                            <input type="file" class="form-control" name="portfolio_image" onchange="readURL(this);" accept="image/webp" />
                            <small class="text-danger">(Upload only WEBP image format less than 150 KB)</small>
                        </div>
                        <div class="col-md-2 col-4">
                            <img alt="Portfolio Profile" src="{{ ($portfolio->image && $portfolio->image != "") ? asset($portfolio->image) : asset('uploads/default.jpg'); }}" class="img-responsive mt-2 rounded w-100" height="auto" id="img_preview" />
                        </div>
                        <div class="col-md-4 mb-3 col-8">
                            <label class="form-label" for="">Portfolio Logo</label>
                            <input type="file" class="form-control" name="logo" onchange="readURL2(this);" accept="image/*" />
                        </div>
                        <div class="col-md-2 col-4">
                            <img alt="Portfolio Profile" src="{{ ($portfolio->logo && $portfolio->logo != "") ? asset($portfolio->logo) : asset('uploads/default.jpg'); }}" class="img-responsive mt-2 rounded bg-secondary p-2 w-100" height="auto" id="img_preview2" />
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Portfolio Status</label>
                            <select class="form-control js-example-basic-single" name="portfolio_status">
                                <option value="" disabled>--------</option>
                                <option value="active" {{ $portfolio->portfolio_status == 'active' ? 'selected' : '' }}>Active</option>
                                <option value="inactive" {{ $portfolio->portfolio_status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Portfolio Ordering</label>
                            <input type="text" name="ordering" class="form-control" value="{{ $portfolio->ordering ?? $portfolio->id }}" placeholder="{{ $portfolio->ordering ?? $portfolio->id }}">
                        </div>

                        <div class="col-md-6 mt-3">
                            <div class="col-md-12 mb-3">
                                <label class="form-label" for="">Category</label>
                                <select class="form-control js-example-basic-multiple" multiple="multiple" name="category[]">
                                    <option value="" disabled> </option>
                                    @foreach($category as $c)
                                    <option value="{{ $c->id }}" {{ in_array($c->id, $categoryList) ? 'selected' : ''; }}>{{ $c->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
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
                            <textarea name="meta_description" class="form-control text-dark" rows="5" required>{{ @$seo_data->meta_description; }}</textarea>
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn web-btn w-50 mt-3" id="submit_btn">
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
