<div class="row">
    <div class="col-lg-12">
        @include('backend.layouts.alert')

        <form action="{{ route('products'); }}" method="POST" autocomplete="off" enctype="multipart/form-data" >
        @csrf
            <div class="card h-auto">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <label class="form-label" for="">Product Image</label>
                            <input type="file" class="form-control" required name="product_image" onchange="readURL(this);"  value="{{ old('product_image') }}"  accept="image/webp" />
                            <small class="text-danger">(Upload only WEBP image format less than 150 KB)</small>
                        </div>
                        <div class="col-md-2">
                            <img alt="Portfolio Profile" src="{{ asset('uploads/default.jpg')}}" class="img-responsive mt-2 rounded" width="100" height="auto" id="img_preview" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Product Name</label>
                            <input type="text" class="form-control" name="name" onkeypress="return /[A-Za-z ]/i.test(event.key)" required value="{{ old('name') }}" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="col-md-12 mb-3">
                                <label class="form-label" for="">Product URL</label>
                                <input type="text" class="form-control" name="product_url" required value="{{ old('product_url') }}" />
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label" for="">Product Description</label>
                                <textarea name="description" class="form-control"></textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label" for="">Meta Title</label>
                                <textarea class="form-control text-dark" name="meta_title" required value="{{ old('meta_title') }}" ></textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label" for="">Meta Key</label>
                                <textarea class="form-control text-dark" name="meta_key" required value="{{ old('meta_key') }}" ></textarea>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="">Meta Description</label>
                            <textarea name="meta_description" class="form-control text-dark" rows="5" required>{{ old('meta_description') }}</textarea>
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn web-btn w-50 mt-3" id="submit_btn" >
                                Add Product
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>