<div class="row">
    <div class="col-lg-12">
        @include('backend.layouts.alert')

        <form action="{{ route('process_we_follow.update', $processWeFollow->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card h-auto">
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title"
                                value="{{ old('title', $processWeFollow->title) }}" required />
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="order">Order</label>
                            <input type="number" class="form-control" name="order" id="order"
                                value="{{ old('order', $processWeFollow->order) }}" min="1" required />
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="form-label" for="description">Description</label>
                            <textarea name="description" id="description" class="form-control" rows="4" required>{{ old('description', $processWeFollow->description) }}</textarea>
                        </div>

                        <div class="col-md-12 text-center mt-4">
                            <button type="submit" class="btn web-btn">
                                Update Process Step
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
