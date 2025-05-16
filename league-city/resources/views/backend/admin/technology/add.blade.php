<div class="row">
    <div class="col-lg-12">
        @include('backend.layouts.alert')

        <form action="{{ route('technology.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card h-auto">
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-6 mb-2">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title"
                                onkeypress="return /[A-Za-z ]/i.test(event.key)" required value="{{ old('title') }}" />
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label">Order</label>
                            <input type="number" class="form-control" name="order" value="{{ old('order', 0) }}" />
                        </div>

                        <div class="col-md-5 mb-md-2 mt-3 mt-md-0 col-8">
                            <label class="form-label">Technology Image</label>
                            <input type="file" class="form-control" name="image" onchange="readURL(this);"
                                required />
                        </div>

                        <div class="col-md-1 text-end col-4 mt-4 mt-md-0">
                            <img alt="Image" src="{{ asset('uploads/default.jpg') }}"
                                class="w-100 img-responsive rounded" width="100" height="auto" id="img_preview" />
                        </div>

                        <div class="col-md-12 mb-2 mt-3">
                            <label class="form-label">Features (Add Multiple)</label>
                            <div id="feature-wrapper">
                                <div class="feature-input-group d-flex mb-2">
                                    <input type="text" name="features[]" class="form-control mb-2"
                                        placeholder="Feature 1">
                                    <button type="button" class="btn btn-danger ms-2"
                                        onclick="removeFeature(this)">Delete</button>
                                </div>
                            </div>
                            <button type="button" onclick="addFeature()" class="btn btn-sm btn-secondary mt-1">+ Add
                                More</button>
                        </div>

                        <div class="col-md-12 text-center mt-4">
                            <button type="submit" class="btn web-btn">
                                Create Technology
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
</div>



<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            let reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('img_preview').src = e.target.result;
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    // function addFeature() {
    //     const wrapper = document.getElementById('feature-wrapper');
    //     const input = document.createElement('input');
    //     input.type = "text";
    //     input.name = "features[]";
    //     input.className = "form-control mb-2";
    //     input.placeholder = "New Feature";
    //     wrapper.appendChild(input);
    // }

    function addFeature() {
        const wrapper = document.getElementById('feature-wrapper');

        const div = document.createElement('div');
        div.className = 'feature-input-group d-flex mb-2';

        const input = document.createElement('input');
        input.type = 'text';
        input.name = 'features[]';
        input.className = 'form-control';
        input.placeholder = 'New Feature';

        const btn = document.createElement('button');
        btn.type = 'button';
        btn.className = 'btn btn-danger ms-2';
        btn.innerText = 'Delete';
        btn.onclick = function() {
            removeFeature(btn);
        };

        div.appendChild(input);
        div.appendChild(btn);
        wrapper.appendChild(div);
    }

    function removeFeature(button) {
        button.parentElement.remove();
    }
</script>
