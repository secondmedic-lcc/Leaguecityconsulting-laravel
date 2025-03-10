<div class="row">
    <div class="col-lg-12">
        @include('backend.layouts.alert')

        <form action="{{ route('testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card h-auto">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9 mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control text-dark" name="name" required value="{{ old('name', $testimonial->name) }}" />
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control" required>{{ old('description', $testimonial->description) }}</textarea>
                        </div>
                        {{-- <div class="col-md-4 mb-3 col-8">
                            <label class="form-label">Testimonial Image</label>
                            <input type="file" class="form-control" name="image" onchange="readURL(this);" accept="image/webp" />
                            <small class="text-danger">(Upload only WEBP image format less than 100 KB)</small>
                        </div>
                        <div class="col-md-2 col-4">
                            <img alt="Testimonial Image" src="{{ asset($testimonial->image ?? 'uploads/default.jpg') }}" class="w-100 img-responsive mt-2 rounded" width="100" height="auto" id="img_preview" />
                        </div> --}}
                        <div class="col-md-4 mb-3 col-8">
                            <label class="form-label" for="">Testimonial Image</label>
                            <input type="file" class="form-control" name="image" id="imageUpload" accept="image/webp" onchange="previewImage(event)" />
                            <small class="text-danger">(Upload only WEBP image format less than 100 KB)</small>
                        </div>
                        <div class="col-md-2 col-4">
                            <img alt="Testimonial Image" 
                                 src="{{ asset($testimonial->image ?? 'uploads/default.jpg') }}" 
                                 class="w-100 img-responsive mt-2 rounded" 
                                 width="100" height="auto" 
                                 id="img_preview" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Status</label>
                            <select class="form-control text-dark" name="status" required>
                                <option value="1" {{ old('status', $testimonial->status) == '1' ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ old('status', $testimonial->status) == '0' ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Show at Homepage</label>
                            <select class="form-control text-dark" name="show_at_homepage" required>
                                <option value="1" {{ old('show_at_homepage', $testimonial->show_at_homepage) == '1' ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ old('show_at_homepage', $testimonial->show_at_homepage) == '0' ? 'selected' : '' }}>No</option>
                            </select>
                        </div>
                        <div class="col-md-6 offset-md-3 text-center">
                            <button type="submit" class="btn web-btn w-50 mt-3">Update Testimonial</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    function previewImage(event) {
        var input = event.target;
        var reader = new FileReader();

        reader.onload = function() {
            var imgElement = document.getElementById("img_preview");
            imgElement.src = reader.result;
        };

        reader.readAsDataURL(input.files[0]);
    }
</script>
