<div class="row">
    <div class="col-lg-12">
        @include('backend.layouts.alert')

        <form action="{{ isset($edit) ? route('explore.update', $edit->id) : route('explore.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($edit)) @method('PUT') @endif

            <div class="card h-auto">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="">Heading</label>
                            <input type="text" class="form-control" name="heading"
                                required value="{{ old('heading', $edit->heading ?? '') }}" />
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="">Position</label>
                            <select name="position" class="form-control" required>
                                <option value="left" {{ (old('position', $edit->position ?? '') == 'left') ? 'selected' : '' }}>Left</option>
                                <option value="right" {{ (old('position', $edit->position ?? '') == 'right') ? 'selected' : '' }}>Right</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="">Button Text</label>
                            <input type="text" class="form-control" name="button_text"
                                value="{{ old('button_text', $edit->button_text ?? '') }}" />
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="">Button URL</label>
                            <input type="text" class="form-control" name="button_url"
                                value="{{ old('button_url', $edit->button_url ?? '') }}" />
                        </div>

                        <div class="col-md-12 mb-2">
                            <label class="form-label" for="">Description</label>
                            <textarea name="description" class="form-control" rows="4">{{ old('description', $edit->description ?? '') }}</textarea>
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="">Status</label>
                            <select name="status" class="form-control">
                                <option value="1" {{ (old('status', $edit->status ?? 1) == 1) ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ (old('status', $edit->status ?? 1) == 0) ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>

                        <div class="col-md-12 text-center mt-4">
                            <button type="submit" class="btn web-btn">
                                {{ isset($edit) ? 'Update' : 'Create' }} Explore Section
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

