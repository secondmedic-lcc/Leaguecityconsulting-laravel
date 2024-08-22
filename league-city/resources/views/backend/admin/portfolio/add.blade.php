<div class="row">
    <div class="col-lg-12">
        @include('backend.layouts.alert')

        <form action="{{ route('portfolio'); }}" method="POST" autocomplete="off" enctype="multipart/form-data">
            @csrf
            <div class="card h-auto">
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-4 mb-3">
                            <label class="form-label" for="">Banner Heading</label>
                            <input type="text" class="form-control" name="banner_heading"  value="{{ old('banner_heading') }}" />
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label" for="">Banner Sub Heading</label>
                            <input type="text" class="form-control" name="banner_sub_heading" required value="{{ old('banner_sub_heading') }}" />
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label" for="">Banner Details</label>
                            <input type="text" class="form-control" name="banner_details" required value="{{ old('banner_details') }}" />
                        </div>


                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Project Name</label>
                            <input type="text" class="form-control" name="name" onkeypress="return /[A-Za-z ]/i.test(event.key)" required value="{{ old('name') }}" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Project URL</label>
                            <input type="text" class="form-control" name="project_url" required value="{{ old('project_url') }}" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Project Heading</label>
                            <input type="text" class="form-control" name="heading" required value="{{ old('heading') }}" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Project Sub Heading</label>
                            <input type="text" class="form-control" name="sub_heading" required value="{{ old('sub_heading') }}" />
                        </div>
                        <div class="col-md-4 mb-4 col-8">
                            <label class="form-label" for="">Portfolio Image</label>
                            <input type="file" class="form-control" required name="portfolio_image" onchange="readURL(this);" accept="image/webp" />
                            <small class="text-danger">(Upload only WEBP image format less than 150 KB)</small>
                        </div>
                        <div class="col-md-2 col-4">
                            <img alt="Portfolio Profile" src="{{ asset('uploads/default.jpg')}}" class="w-100 img-responsive mt-2 mb-3 rounded" width="100" height="auto" id="img_preview" />
                        </div>
                        <div class="col-md-4 mb-3 col-8">
                            <label class="form-label" for="">Portfolio Logo</label>
                            <input type="file" class="form-control" name="logo" onchange="readURL2(this);" accept="image/*" />
                        </div>
                        <div class="col-md-2 col-4">
                            <img alt="Portfolio Profile" src="{{ asset('uploads/default.jpg')}}" class="w-100 img-responsive mt-2 mb-3 rounded bg-secondary p-2" width="100" height="auto" id="img_preview2" />
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12 mb-3">
                                <label class="form-label" for="">Category</label>
                                <select class="form-control js-example-basic-multiple" multiple="multiple" name="category[]">
                                    <option value="" disabled></option>
                                    @foreach($category as $c)
                                    <option value="{{ $c->id }}" {{ (old('category') == $c->id) ? 'selected' : ''; }}>{{ $c->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label" for="">Meta Title</label>
                                <textarea class="form-control text-dark" name="meta_title" rows="3" required value="{{ old('meta_title') }}"></textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label" for="">Meta Key</label>
                                <textarea class="form-control text-dark" name="meta_key" rows="3" required value="{{ old('meta_key') }}"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Meta Description</label>
                            <textarea name="meta_description" class="form-control text-dark" id="meta_description" rows="5" required>{{ old('meta_description') }}</textarea>
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn web-btn w-50 mt-3" id="submit_btn">
                                Add Portfolio
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
