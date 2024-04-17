<div class="row">
    <div class="col-lg-12">
        @include('backend.layouts.alert')

        <form action="{{ route('category.store'); }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card h-auto">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <label class="form-label" for="">Category Name</label>
                            <input type="text" class="form-control" name="category_name"
                                onkeypress="return /[A-Za-z ]/i.test(event.key)" required value="{{ old('category_name') }}" />
                        </div>
                        <div class="col-md-4 mb-2">
                            <label class="form-label" for="">Category Image</label>
                            <input type="file" class="form-control" name="category_img" onchange="readURL(this);" />
                        </div>
                        <div class="col-md-2 mt-1">
							<img alt="User Category" src="{{ asset('uploads/default.jpg');  }}" class="img-responsive rounded" width="100" height="auto" id="img_preview" />
                        </div>
                        <div class="col-md-12 text-center mt-5">
                            <button type="submit" class="btn web-btn w-50">
                                Create Category
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
