<div class="row">
    <div class="col-sm-12">
        @include('backend.layouts.alert')

        <div class="card member-statistics h-auto billing-table">
            <div class="card-header bg-white">
                <div class="d-flex align-items-center justify-content-between">
                    <h6 class="mt-2">Edit Terms & Conditions</h6>
                </div>
            </div>

            <div class="card-body">
                <form action="{{ route('terms.update') }}" method="POST">
                    @csrf

                    <div class="row align-items-center">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" id="title"
                                value="{{ $terms->title ?? '' }}"></input>
                        </div>

                        <div class=" col-md-12 mb-3">
                            <label class="form-label">Content</label>
                            <textarea name="content" class="form-control editor" id="description" rows="5" id="">{{ $terms->content ?? '' }}</textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn web-btn" id="submit_btn">
                                Update
                           </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
