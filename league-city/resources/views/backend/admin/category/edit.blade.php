@empty(!$category)

@php $imgUrl = ($category->category_img != "" && $category->category_img != null) ? $category->category_img : "uploads/default.jpg"; @endphp

<div class="row">
    <div class="col-lg-12">
        @include('backend.layouts.alert')

        <form action="{{ route('category.update', $category->id); }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card h-auto">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <label class="form-label" for="">Category Name</label>
                            <input type="text" class="form-control" name="category_name" onkeypress="return /[A-Za-z ]/i.test(event.key)" required value="{{ $category->category_name }}" />
                        </div>
                        <div class="col-md-4 mb-2 col-8">
                            <label class="form-label" for="">Category Image</label>
                            <input type="file" class="form-control" name="category_img" onchange="readURL(this);" />
                        </div>
                        <div class="col-md-2 mt-1 col-4">
                            <img alt="User Category" src="{{ asset($imgUrl);  }}" class="w-100 img-responsive rounded" width="100" height="auto" id="img_preview" />
                        </div>
                        <div class="col-md-12 text-left mt-3">
                            <button type="submit" class="btn web-btn w-50">
                                Update Category
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endempty