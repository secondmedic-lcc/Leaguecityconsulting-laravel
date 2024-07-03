@empty(!$services)
{{-- @php $categoryList = explode(",",$portfolio->category); @endphp --}}

<div class="row">
    <div class="col-lg-12">
        @include('backend.layouts.alert')

        <form action="{{ url('admin/services'); }}/{{ $services->id; }}" method="POST" autocomplete="off" enctype="multipart/form-data">
            @csrf
            <div class="card h-auto">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Services Name</label>
                            <input type="text" class="form-control" name="name" onkeypress="return /[A-Za-z ]/i.test(event.key)" required value="{{ $services->name }}" />
                        </div>
                    
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Services Heading</label>
                            <input type="text" class="form-control" name="heading" required value="{{ $services->heading; }}" />
                        </div>
                
                        <div class="col-md-6 mb-3">
                            <label for=""> Description</label>
                            <textarea name="description" class="form-control text-dark" rows="5" required>{{ @$services->description; }}</textarea>
                        </div>
                        <div class="col-md-4 mb-4 col-8">
                            <label class="form-label" for="">Services Image</label>
                            <input type="file" class="form-control" name="image" onchange="readURL(this);" accept="image/webp" />
                            <small class="text-danger">(Upload only WEBP image format less than 150 KB)</small>
                        </div>
                        <div class="col-md-2 col-4">
                            <img alt="Services Profile" src="{{ ($services->image && $services->image != "") ? asset($services->image) : asset('uploads/default.jpg'); }}" class="img-responsive mt-2 rounded w-100" height="auto" id="img_preview" />
                        </div>
                
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Meta Title</label>
                            <textarea class="form-control text-dark" name="meta_title" required value="{{ @$seo_data->meta_title; }}">{{ @$seo_data->meta_title; }}</textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Meta Key</label>
                            <textarea class="form-control text-dark" name="meta_key" required value="{{ @$seo_data->meta_key; }}">{{ @$seo_data->meta_key; }}</textarea>
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="">Meta Description</label>
                            <textarea name="meta_description" class="form-control text-dark" rows="5" required>{{ @$seo_data->meta_description; }}</textarea>
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn web-btn w-50 mt-3" id="submit_btn">
                                Update services
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endempty