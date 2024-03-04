<div class="row">
    <div class="col-lg-12">
        @include('backend.layouts.alert')

        <form action="{{ route('packages.store'); }}" method="POST" autocomplete="off" enctype="multipart/form-data" >
        @csrf
            <div class="card h-auto">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Package Name</label>
                            <input type="text" class="form-control" name="name" onkeypress="return /[A-Za-z ]/i.test(event.key)" required value="{{ old('name') }}" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Package Heading</label>
                            <input type="text" class="form-control" name="heading" required value="{{ old('heading') }}" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Package Type</label>
                            <select class="form-control js-example-basic-single" required name="package_for">
                                <option value="">-- Select Package Type --</option>
                                <option value="seo-packages">SEO Packages</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="">Package Show In Front</label>
                            <select class="form-control js-example-basic-single" required name="show_front">
                                <option value="">-- Show Package In Front --</option>
                                <option value="1" {{ (old('show_front') == 1) ? 'selected' : ''; }} >Yes</option>
                                <option value="0" {{ (old('show_front') == 0) ? 'selected' : ''; }} >No</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="form-label" for="">Monthly Inr</label>
                            <input type="text" class="form-control"  onkeypress="return /[0-9]/i.test(event.key)" minlength="2" maxlength="6" name="monthly_inr" required value="{{ old('monthly_inr') }}" />
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="form-label" for="">Monthly USD</label>
                            <input type="text" class="form-control"  onkeypress="return /[0-9]/i.test(event.key)" minlength="2" maxlength="6" name="monthly_usd" required value="{{ old('monthly_usd') }}" />
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="form-label" for="">Yearly Inr</label>
                            <input type="text" class="form-control"  onkeypress="return /[0-9]/i.test(event.key)" minlength="2" maxlength="6" name="yearly_inr" required value="{{ old('yearly_inr') }}" />
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="form-label" for="">Yearly USD</label>
                            <input type="text" class="form-control"  onkeypress="return /[0-9]/i.test(event.key)" minlength="2" maxlength="6" name="yearly_usd" required value="{{ old('yearly_usd') }}" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="">Package Description</label>
                            <textarea name="description" rows="5" class="form-control">{{ old('description') }}</textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="">Enter Key Points</label>
                            <div class="row">
                                <div class="col-md-10">
                                    <input type="text" name="key_point[]" class="form-control p-2 text-dark" />
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-success w-100"  onclick="addKeyPoints();">
                                        <i class="fa fa-plus"></i>
                                    </button> 
                                </div>
                            </div>
                            <div class="key_points"></div>
                        </div>
                        
                        <div class="col-md-4 mt-2">
                            <label class="form-label" for="">Meta Title</label>
                            <textarea name="meta_title" rows="3" class="form-control">{{ old('meta_title') }}</textarea>
                        </div>
                        <div class="col-md-4 mt-2">
                            <label class="form-label" for="">Meta Key</label>
                            <textarea name="meta_key" rows="3" class="form-control">{{ old('meta_key') }}</textarea>
                        </div>
                        <div class="col-md-4 mt-2">
                            <label class="form-label" for="">Meta Description</label>
                            <textarea name="meta_description" rows="3" class="form-control">{{ old('meta_description') }}</textarea>
                        </div>
                        <div class="col-md-12 text-center mt-5">
                            <button type="submit" class="btn web-btn w-50">
                                Add Package
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>