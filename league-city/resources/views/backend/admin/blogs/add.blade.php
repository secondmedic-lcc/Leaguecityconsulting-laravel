<div class="row">
    <div class="col-lg-12">
        @include('backend.layouts.alert')

        <form action="{{ route('blogs.store'); }}" method="POST" autocomplete="off" enctype="multipart/form-data" >
        @csrf
            <div class="card h-auto">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Blog Title</label>
                            <input type="text" class="form-control text-dark" name="blog_title" onkeypress="return /[A-Za-z ]/i.test(event.key)" required value="{{ old('blog_title') }}" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Blog Read Time</label>
                            <input type="text" class="form-control text-dark" name="read_time" onkeypress="return /[A-Za-z0-9 ]/i.test(event.key)" required value="{{ old('read_time') }}" />
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label" for="">Blog Small Detail</label>
                            <input type="text" class="form-control text-dark" name="blog_details" required value="{{ old('blog_details') }}" />
                        </div>
                        <div class="col-md-4 mb-2">
                            <label class="form-label" for="">Blog Image</label>
                            <input type="file" class="form-control" required name="blog_image" onchange="readURL(this);" accept="image/*" value="{{ old('blog_image') }}" />
                        </div>
                        <div class="col-md-2">
                            <img alt="Portfolio Profile" src="{{ asset('uploads/default.jpg')}}" class="img-responsive mt-2 rounded" width="100" height="auto" id="img_preview" />
                        </div>
                        <div class="col-md-4 mb-2">
                            <label class="form-label" for="">Blog Detail Image</label>
                            <input type="file" class="form-control" name="detail_image" onchange="readURL2(this);" accept="image/*" value="{{ old('detail_image') }}" />
                        </div>
                        <div class="col-md-2">
                            <img alt="Portfolio Profile" src="{{ asset('uploads/default.jpg')}}"  class="img-responsive mt-2 rounded" width="100" height="auto" id="img_preview2" />
                        </div>
                        <div class="col-m-md-12">
                            <label for="">Blog Description</label>
                            <textarea name="description" class="form-control"></textarea>
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn web-btn w-50 mt-3" id="submit_btn" >
                               Add Blog
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>