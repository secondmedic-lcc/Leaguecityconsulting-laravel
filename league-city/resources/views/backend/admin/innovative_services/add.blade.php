<div class="row">
    <div class="col-lg-12">
        @include('backend.layouts.alert')

        <form action="{{ route('innovative_services.store') }}" method="POST">
            @csrf
            <div class="card h-auto">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" required
                                value="{{ old('title') }}" />
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label">Slug</label>
                            <input type="text" class="form-control" name="slug" required
                                value="{{ old('slug') }}" />
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label">Icon</label>
                            <input type="text" class="form-control" name="icon" required
                                placeholder="e.g. fas fa-cog" value="{{ old('icon') }}" />
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label">Link</label>
                            <input type="url" class="form-control" name="link" required
                                value="{{ old('link') }}" />
                        </div>

                        <div class="col-md-12 mb-2">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" name="description" rows="4" required>{{ old('description') }}</textarea>
                        </div>

                        <div class="col-md-12 text-center mt-4">
                            <button type="submit" class="btn web-btn">
                                Create Innovative Service
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    document.querySelector('input[name="title"]').addEventListener('input', function() {
        let slug = this.value.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)/g, '');
        document.querySelector('input[name="slug"]').value = slug;
    });
</script>
