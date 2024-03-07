<div class="card mt-3">
    <div class="card-body">
        <h4 class="mb-0">{{ @$packageTypes->package_name." - ".Str::ucfirst($packages->name)." - ".Str::ucfirst($packagesKeyPoint->key_point); }}</h4>
    </div>
</div>

<div class="row">

    <div class="col-md-12">
        @include('backend.layouts.alert')
        <div class="card">
        
            <div class="card-body">
                <form action="{{ route('packages.sub-keypoints.store'); }}" method="POST">
                @csrf
                    <input type="hidden" value="{{ $packages->id; }}" name="package_id" />
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Select Key Point</label>
                                <input type="text" value="{{ $packagesKeyPoint->key_point; }}" class="form-control text-dark" disabled />

                                <input type="hidden" name="keypoint_id" id="keypoint_id" value="{{ $packagesKeyPoint->id; }}" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Enter Sub Key Point</label>
                                <input type="text" name="sub_keypoint" class="form-control" value="{{ old('sub_keypoint'); }}" />
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Includes</label>
                                <select class="form-control js-example-basic-single" required name="includes">
                                    <option value="">-- --</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 mt-3">
                            <button type="submit" class="btn btn-primary w-100 mt-1">Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    
    {{-- <div class="col-md-12">
        <h4 class="card py-2 text-center">List of Sub Key Points</h4>
    </div> --}}
<div class="row">
    <div class="col-md-12">
        <div class="row">
            @foreach($packageSubKeyPoint as $subkeyPoint)
                <div class="col-md-12">
                   <form action="{{ route('packages.sub-keypoints.update',$subkeyPoint->id); }}" method="post">
                    @csrf
                        <div class="card card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" value="{{ $packagesKeyPoint->key_point; }}" class="form-control text-dark" disabled />
        
                                        <input type="hidden" name="keypoint_id" id="keypoint_id" value="{{ $packagesKeyPoint->id; }}" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" name="sub_keypoint" class="form-control" value="{{ $subkeyPoint->sub_keypoint; }}" />
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <select class="form-control js-example-basic-single" required name="includes">
                                            <option value="">-- --</option>
                                            <option value="1" {{ ($subkeyPoint->includes == 1) ? 'selected' : ''; }}>Yes</option>
                                            <option value="0" {{ ($subkeyPoint->includes == 0) ? 'selected' : ''; }}>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                   <div class="row">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary w-100">Update</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <a class="btn btn-danger w-100 btn-delete" href="javascript:void(0);"  url={{ route('packages.sub-keypoints.delete',$subkeyPoint->id) }}  >Delete</a>
                                    </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                   </form>
                </div>
            @endforeach
        </div>
    </div>
</div>