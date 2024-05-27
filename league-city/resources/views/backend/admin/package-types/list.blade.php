<div class="row">

    <div class="col-md-12">
        <div class="card package-type-card">
            <div class="card-header bg-white py-2">
                <div class="card-title">
                    <h6 class="mb-0">Add Package Type</h6>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('package.types.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="package_name" name="package_name" placeholder="Enter Package Name" required>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control" id="package_slug" name="package_slug" placeholder="Enter Package Slug" required>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary w-100">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-white py-3">
                <h6 class="mb-0">List of Package Types</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive web-overflow">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Package Name</th>
                                <th>Package Slug</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $a = 1; @endphp
                            @foreach($packageTypes as $packageType)
                            <tr>
                                <td>{{ $a++; }}</td>
                                <td>{{ $packageType->package_name }}</td>
                                <td>{{ $packageType->package_slug }}</td>
                                <td>{{ $packageType->status == 1 ? 'Active' : 'Inactive' }}</td>
                                <td>
                                    <a href="{{ route('package.types.edit', $packageType->id) }}" class="btn btn-warning text-white my-2">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <a href="{{ url('admin/packages?package_id='.$packageType->id); }}" class="btn btn-primary my-2 text-white">
                                        <i class="fa fa-plus"></i>
                                    </a>

                                    <a href="javascript:void(0);" url={{ route('package.types.destroy', $packageType->id) }} class="btn btn-danger text-white btn-delete my-2">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>