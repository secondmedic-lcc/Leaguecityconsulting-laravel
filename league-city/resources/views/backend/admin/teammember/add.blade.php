{{-- <div class="row">
    <div class="col-lg-12">
        @include('backend.layouts.alert')

        <form action="{{ route('blogs.store'); }}" method="POST" autocomplete="off" enctype="multipart/form-data" >
        @csrf
            <div class="card h-auto">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9 mb-3">
                            <label class="form-label" for="">Blog Title</label>
                            <input type="text" class="form-control text-dark" name="blog_title" onkeypress="return /[A-Za-z ]/i.test(event.key)" required value="{{ old('blog_title') }}" />
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="form-label" for="">Blog Read Time</label>
                            <input type="text" class="form-control text-dark" name="read_time" onkeypress="return /[A-Za-z0-9 ]/i.test(event.key)" required value="{{ old('read_time') }}" />
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label" for="">Blog Small Detail</label>
                            <input type="text" class="form-control text-dark" name="blog_details" required value="{{ old('blog_details') }}" />
                        </div>
                        <div class="col-md-4 mb-3 col-8">
                            <label class="form-label" for="">Blog Image</label>
                            <input type="file" class="form-control" required name="blog_image" onchange="readURL(this);" accept="image/webp" value="{{ old('blog_image') }}" />
                            <small class="text-danger">(Upload only WEBP image format less than 100 KB)</small>
                        </div>
                        <div class="col-md-2 col-4">
                            <img alt="Portfolio Profile" src="{{ asset('uploads/default.jpg')}}" class="w-100 img-responsive mt-2 rounded" width="100" height="auto" id="img_preview" />
                        </div>
                        <div class="col-md-4 mb-3 col-8">
                            <label class="form-label" for="">Blog Detail Image</label>
                            <input type="file" class="form-control" name="detail_image" onchange="readURL2(this);" accept="image/webp" value="{{ old('detail_image') }}" />
                            <small class="text-danger">(Upload only WEBP image format less than 150 KB)</small>
                        </div>
                        <div class="col-md-2 mb-2 col-4">
                            <img alt="Portfolio Profile" src="{{ asset('uploads/default.jpg')}}"  class="w-100 img-responsive mt-2 rounded" width="100" height="auto" id="img_preview2" />
                        </div>
                        <div class="col-m-md-12 mb-4">
                            <label for="" class="form-label">Blog Description</label>
                            <textarea name="description" class="form-control" id="description"></textarea>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12 mb-3">
                                <label class="form-label" for="">Meta Title</label>
                                <textarea class="form-control text-dark" name="meta_title" required value="{{ old('meta_title') }}" ></textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label" for="">Meta Key</label>
                                <textarea class="form-control text-dark" name="meta_key" required value="{{ old('meta_key') }}" ></textarea>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <label for="" class="form-label">Meta Description</label>
                            <textarea name="meta_description" id="meta_description" class="form-control text-dark" rows="5" required>{{ old('meta_description') }}</textarea>
                        </div>
                        <div class="col-md-6 offset-md-3 text-center">
                            <button type="submit" class="btn web-btn w-50 mt-3" id="submit_btn" >
                               Add Blog
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div> --}}



<div class="row">
    <div class="col-lg-12">
        @include('backend.layouts.alert')

        <form action="{{ route('team-members.store') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
        @csrf
            <div class="card h-auto">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control text-dark" name="name" required value="{{ old('name') }}" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control text-dark" name="username" required value="{{ old('username') }}" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Designation</label>
                            <input type="text" class="form-control text-dark" name="designation" required value="{{ old('designation') }}" />
                        </div>
                        {{-- <div class="col-md-6 mb-3">
                            <label class="form-label">Profile Image</label>
                            <input type="file" class="form-control" required name="image" onchange="readURL(this);" accept="image/webp" />
                            <small class="text-danger">(Upload only WEBP image format less than 100 KB)</small>
                        </div> --}}
                       
                        <div class="col-md-4 mb-3 col-8">
                            <label class="form-label">Profile Image</label>
                            <input type="file" class="form-control" name="image" onchange="onpreview(this);" accept="image/webp" />
                            <small class="text-danger">(Upload only WEBP image format less than 100 KB)</small>
                        </div>
                        <!-- Image Preview (Replaces Current Image) -->
                        <div class="col-md-2 col-4">
                            <img alt="Profile Preview" src="{{('uploads/default.jpg')}}" class="img-responsive mt-2 rounded" width="150px" height="150px" id="img_preview" />
                        </div>
                        
                        <div class="col-md-6 offset-md-3 text-center">
                            <button type="submit" class="btn web-btn w-50 mt-3">
                               Add Team Member
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function onpreview(input) {
        if (input.files && input.files[0]) {
            let reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById('img_preview').src = e.target.result; // Replace current image
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    </script>
