<div class="row">
    <div class="col-lg-12">
        @include('backend.layouts.alert')

        <form action="{{ route('growthmetric.update', $growthmetric->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card h-auto">
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="title">Title (e.g. 20+)</label>
                            <input type="text" class="form-control" name="title" id="title" 
                                value="{{ old('title', $growthmetric->title) }}" required />
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="description">Description (e.g. Countries served)</label>
                            <input type="text" class="form-control" name="description" id="description" 
                                value="{{ old('description', $growthmetric->description) }}" required />
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="icon_class">Icon Class (e.g. fas fa-globe-americas)</label>
                            <input type="text" class="form-control" name="icon_class" id="icon_class" 
                                value="{{ old('icon_class', $growthmetric->icon_class) }}" required />
                            <small class="form-text text-muted">Use FontAwesome icon classes</small>
                        </div>

                        <div class="col-md-12 mt-4 text-left">
                            <button type="submit" class="btn web-btn">
                                Update Growth Metric
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

