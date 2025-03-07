<div class="row">
    <div class="col-lg-12">
        @include('backend.layouts.alert')

        <form action="{{ route('about-us.updateOrCreate') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
            @csrf

            <div class="card h-auto">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control text-dark" name="title" required
                                value="{{ old('title', $pageDetails->title ?? '') }}" />
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control text-dark" id="description" required>{{ old('description', $pageDetails->description ?? '') }}</textarea>
                        </div>

                        <!-- Image Upload -->
                        <div class="col-md-4 mb-3 col-8">
                            <label class="form-label">About Us Image</label>
                            <input type="file" class="form-control" name="image" onchange="onPreview(this);" accept="image/webp" />
                            <small class="text-danger">(Upload only WEBP image format less than 150 KB)</small>
                        </div>
                        
                        <!-- Image Preview -->
                        <div class="col-md-2 col-4">
                            <img alt="About Us Preview" 
                                 src="{{ isset($pageDetails->image) ? asset($pageDetails->image) : asset('uploads/default.jpg') }}" 
                                 class="img-responsive mt-2 rounded" width="150px" height="150px" id="img_preview" />
                        </div>  

                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn web-btn w-50 mt-3">
                                Update About Us
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function onPreview(input) {
        if (input.files && input.files[0]) {
            let reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById('img_preview').src = e.target.result; // Replace current image
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
