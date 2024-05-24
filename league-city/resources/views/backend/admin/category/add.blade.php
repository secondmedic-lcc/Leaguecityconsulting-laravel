<div class="row">
    <div class="col-lg-12">
        @include('backend.layouts.alert')

        <form action="{{ route('category.store'); }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card h-auto">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="">Category Name</label>
                            <input type="text" class="form-control" name="category_name" onkeypress="return /[A-Za-z ]/i.test(event.key)" required value="{{ old('category_name') }}" />
                        </div>
                        <div class="col-md-5 mb-md-2 mt-3 mt-md-0 col-8">
                            <label class="form-label" for="">Category Image</label>
                            <input type="file" class="form-control" name="category_img" onchange="readURL(this);" />
                        </div>
                        <div class="col-md-1 text-end col-4 mt-4 mt-md-0">
                            <img alt="User Category" src="{{ asset('uploads/default.jpg');  }}" class="w-100 img-responsive rounded" width="100" height="auto" id="img_preview" />
                        </div>
                        <div class="col-md-12 text-left mt-4">
                            <button type="submit" class="btn web-btn">
                                Create Category
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>