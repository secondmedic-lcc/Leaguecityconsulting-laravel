<div class="card mt-3">
    <div class="card-body">
        <h4 class="mb-0">{{ @$packageTypes->package_name." - ".Str::ucfirst($package->name); }}</h4>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        @include('backend.layouts.alert')

        <form action="{{ url('/admin/packages/store/'.@$_GET['package_id'].'/'.@$_GET['business_type']); }}" method="POST" autocomplete="off" enctype="multipart/form-data" >
        @csrf
        <input type="hidden" value="{{ @$_GET['package_id'] }}" name="package_for" />
            <div class="card h-auto">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label class="form-label" for="">Monthly Inr</label>
                            <input type="text" class="form-control"  onkeypress="return /[0-9]/i.test(event.key)" minlength="2" maxlength="6" name="monthly_inr" required value="{{ @$package->monthly_inr; }}" />
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="form-label" for="">Monthly USD</label>
                            <input type="text" class="form-control"  onkeypress="return /[0-9]/i.test(event.key)" minlength="2" maxlength="6" name="monthly_usd" required value="{{ @$package->monthly_usd; }}" />
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="form-label" for="">Yearly Inr</label>
                            <input type="text" class="form-control"  onkeypress="return /[0-9]/i.test(event.key)" minlength="2" maxlength="6" name="yearly_inr" required value="{{ @$package->yearly_inr; }}" />
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="form-label" for="">Yearly USD</label>
                            <input type="text" class="form-control"  onkeypress="return /[0-9]/i.test(event.key)" minlength="2" maxlength="6" name="yearly_usd" required value="{{ @$package->yearly_usd; }}" />
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



    
<div class="col-md-12">

    <div class="row">
        @foreach($packagesKeyPoint as $keyPoint)
            <div class="col-md-4">
               <form action="{{ route('packages.update.keypoint',$keyPoint->id); }}" method="post">
                @csrf
                    <div class="card card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="key_point" value="{{ $keyPoint->key_point; }}" />
                            </div>
                            <div class="col-sm-6 mt-3">
                                <div class="d-flex justify-content-between">
                                    <button type="submit" class="btn mx-2 btn-primary">Update</button>
                                    
                                    <a href="{{ url('admin/packages-sub-keypoints/'.@$package->id.'/'.$keyPoint->id); }}" class="btn mx-2 btn-warning px-4 text-white" target="_blank" >
                                        <i class="fa fa-plus"></i>
                                    </a>
                                    
                                    <a class="btn mx-2 btn-danger btn-delete" href="javascript:void(0);"  url={{ route('packages.delete.keypoint',$keyPoint->id) }}  >Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
               </form>
            </div>
        @endforeach
    </div>

</div>