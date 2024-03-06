
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-white py-2">
                <div class="card-title">
                    <h5 class="mb-0">Edit Package Type</h5>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('package.types.update', $packageType->id) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label for="package_name">Package Name</label>
                            <input type="text" class="form-control" id="package_name" name="package_name" value="{{ $packageType->package_name }}" required>
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="package_slug">Package Slug</label>
                            <input type="text" class="form-control" id="package_slug" name="package_slug" value="{{ $packageType->package_slug }}" required>
                        </div>
                        <div class="col-md-4 form-group mt-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('package.types') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label class="form-label" for="">Meta Title</label>
                            <textarea class="form-control text-dark" name="meta_title" required value="{{ @$seo_data->meta_title; }}" >{{ @$seo_data->meta_title; }}</textarea>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label class="form-label" for="">Meta Key</label>
                            <textarea class="form-control text-dark" name="meta_key" required value="{{ @$seo_data->meta_key; }}" >{{ @$seo_data->meta_key; }}</textarea>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label class="form-label" for="">Meta Description</label>
                            <textarea name="meta_description" class="form-control text-dark"  required>{{ @$seo_data->meta_description; }}</textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
