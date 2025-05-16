<div class="row">
    <div class="col-lg-12">
        @include('backend.layouts.alert')

        <form action="{{ route('sector.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card h-auto">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}" required>
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="">Sub Title</label>
                            <input type="text" class="form-control" name="subtitle" value="{{ old('subtitle') }}">
                        </div>

                        <div class="col-md-12 mb-2">
                            <label class="form-label" for="">Description</label>
                            <textarea name="description" class="form-control" rows="5" required>{{ old('description') }}</textarea>
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="">Button Text</label>
                            <input type="text" class="form-control" name="button_text" value="{{ old('button_text') }}">
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="">Button Link</label>
                            <input type="url" class="form-control" name="button_link" value="{{ old('button_link') }}">
                        </div>

                        <div class="col-md-5 mb-md-2 mt-3 mt-md-0 col-8">
                            <label class="form-label" for="">Sector Image</label>
                            <input type="file" class="form-control" name="image" onchange="readURL(this);">
                        </div>

                        <div class="col-md-1 text-end col-4 mt-4 mt-md-0">
                            <img alt="Sector Image" src="{{ asset('uploads/default.jpg') }}" class="w-100 img-responsive rounded" width="100" height="auto" id="img_preview" />
                        </div>

                        <div class="col-md-12 text-center mt-4">
                            <button type="submit" class="btn web-btn">
                                Create Sector
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('img_preview').src = e.target.result;
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
