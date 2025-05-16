<div class="row">
    <div class="col-lg-12">
        @include('backend.layouts.alert')

        <form action="{{ route('branch.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card h-auto">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="">Branch Name</label>
                            <input type="text" class="form-control" name="branch_name"
                                onkeypress="return /[A-Za-z ]/i.test(event.key)" required
                                value="{{ old('branch_name') }}" />
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="">Branch Address</label>
                            <textarea name="branch_address" class="form-control" required>{{ old('branch_address') }}</textarea>
                        </div>

                        <div class="col-md-5 mb-md-2 mt-3 mt-md-0 col-8">
                            <label class="form-label" for="">Branch Image</label>
                            <input type="file" class="form-control" name="branch_image" onchange="readURL(this);" />
                        </div>

                        <div class="col-md-1 text-end col-4 mt-4 mt-md-0">
                            <img alt="Branch Image" src="{{ asset('uploads/default.jpg') }}"
                                class="w-100 img-responsive rounded" width="100" height="auto" id="img_preview" />
                        </div>

                        <div class="col-md-12 text-center mt-4">
                            <button type="submit" class="btn web-btn">
                                Create Branch
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
