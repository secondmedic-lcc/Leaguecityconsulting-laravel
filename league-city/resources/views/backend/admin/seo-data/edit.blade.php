@empty(!$seo_data)
    
    <div class="row">
        <div class="col-lg-12">
            @include('backend.layouts.alert')

            <form action="{{ url()->current() }}" method="POST" autocomplete="off" enctype="multipart/form-data" >
                @csrf
                <div class="card h-auto">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 row">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="">Page Name</label>
                                    <select class="form-control js-example-basic-single" name="page_name" required>
                                        <option value="" >- Select Service Provider</option>
                                        @foreach ($seo_listing as $sm)
                                            <option value="{{ $sm->page_name }}" {{ ($sm->page_name == $seo_data->page_name) ? 'selected':''; }} >
                                                {{ $sm->page_link }} - {{ $sm->page_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="">Page Link</label>
                                    <input type="text" class="form-control text-dark" name="page_link" required value="{{ $seo_data->page_link; }}" />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="">Canonical URL</label>
                                    <input type="text" class="form-control text-dark" name="canonical" value="{{ $seo_data->canonical; }}" />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="">Meta Title</label>
                                    <textarea class="form-control text-dark" name="meta_title" required value="{{ old('meta_title') }}" >{{ $seo_data->meta_title; }}</textarea>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="">Meta Key</label>
                                    <input type="text" class="form-control text-dark" name="meta_key" required value="{{ $seo_data->meta_key; }}" />
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label class="form-label" for="">Meta Image</label>
                                    <input type="file" class="form-control" name="meta_image" onchange="readURL(this);" accept="image/*" />
                                </div>
                                <div class="col-md-2 mt-3">
                                    <img alt="Meta Image" src="{{ ($seo_data->meta_image != null && $seo_data->meta_image != "") ? asset($seo_data->meta_image) : asset('uploads/default.jpg')}}" class="img-responsive mt-2 rounded" width="100%" height="auto" id="img_preview" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="col-md-12 mb-3">
                                    <label for="">Meta Description</label>
                                    <textarea name="meta_description" class="form-control text-dark" rows="5" required>{{ $seo_data->meta_description; }}</textarea>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Seo Schema</label>
                                    <textarea name="meta_schema" class="form-control text-dark" rows="5">{{ $seo_data->meta_schema }}</textarea>
                                </div>
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn web-btn w-10 mt-3" id="submit_btn">
                                    Update Seo Data
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endempty