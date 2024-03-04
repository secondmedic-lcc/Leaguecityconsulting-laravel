<div class="row">
    <div class="col-lg-12">
        @include('backend.layouts.alert')

        <form action="{{ route('package.includes'); }}" method="POST" autocomplete="off" enctype="multipart/form-data" >
        @csrf
            <div class="card h-auto">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label" for="">Package For</label>
                            <select class="form-control js-example-basic-single" required name="package_for">
                                <option value="">-- Select Package For --</option>
                                <option value="seo-packages">SEO Packages</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label" for="">Title</label>
                            <input type="text" class="form-control" name="title" onkeypress="return /[A-Za-z ]/i.test(event.key)" required value="{{ old('title') }}" />
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="row">
                                <div class="col-md-7">
                                    <label class="form-label" for="">Image</label>
                                    <input type="file" class="form-control" required name="includes_image" onchange="readURL(this);" accept="image/*" />
                                </div>
                                <div class="col-md-5">
                                    <img alt="Image" src="{{ asset('uploads/default.jpg')}}" class="img-responsive mt-2 rounded" width="100" height="auto" id="img_preview" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label" for="">Description</label>
                            <textarea class="form-control text-dark" name="description" required value="{{ old('description') }}" rows="5" >{{ old('description') }}</textarea>
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn web-btn w-50 mt-3" id="submit_btn" >
                                Add Package Includes
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>