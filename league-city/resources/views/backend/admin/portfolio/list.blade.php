<div class="row">
    <div class="col-sm-12">
        @include('backend.layouts.alert')

        <div class="card member-statistics h-auto billing-table">
            <div class="card-header bg-white">
                <div class="d-flex align-items-center justify-content-between">
                    <h6 class="mb-1">Portfolio List</h6>
                    <div class="dropdown  filter-dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class='bx bx-menu-alt-right'></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <h6>Quick Actions</h6>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('portfolio.create'); }}">Add Portfolio</a></li>
                            <li><a class="dropdown-item" href="{{ route('portfolio-services'); }}">Add Portfolio Services</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <!-- <div class="table-responsive web-overflow">
                    <table class="table table-list-mobile">
                        <thead>
                            <tr>
                                <th class="table-id">ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Heading</th>
                                <th>Sub Heading</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php $a = 1; @endphp

                            @foreach($portfolio as $s)
                            <tr>
                                <td>{{ $a++; }}</td>
                                <td>
                                    <img src="{{ asset($s['image']); }}" alt="Image" width="100" height="auto" />
                                </td>
                                <td>{{ $s['name']; }}</td>
                                <td>{{ $s['heading']; }}</td>
                                <td class="table-list-detail">{{ $s['sub_heading']; }}</td>
                                <td class="text-end">
                                    <a href={{ url('/admin/portfolio/'.$s['id']) }} class="btn btn-warning btn-xs text-white">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href={{ url('/admin/portfolio-services?portfolio_id='.$s['id']); }} class="btn btn-primary btn-xs text-white">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                    <a href="javascript:void(0);" url={{ url('/admin/portfolio-delete/'.$s['id']) }} class="btn btn-danger btn-xs text-white btn-delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> -->
                <div class="table-responsive">
                <table id="" class="table dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="table-id">ID</th>
                            <th>Name</th>
                            <th>Heading</th>
                            <th>Image</th>
                            <th>Sub Heading</th>
                            <th>Order</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    {{-- <tbody>

                        @php $a = 1; @endphp

                        @foreach($portfolio as $s)
                        @php $deleteUrl = url('/admin/portfolio-delete/'.$s['id']); @endphp
                        <tr>
                            <td>{{ $a++; }}</td>
                            <td>{{ $s['name']; }}</td>
                            <td>{{ $s['heading']; }}</td>
                            <td>
                                <img src="{{ asset($s['image']); }}" alt="Image" width="100" height="auto" />
                            </td>
                            <td class="table-list-detail">{{ $s['sub_heading']; }}</td>
                            <td class="text-end">
                                <div class="table-action-btns">
                                    <a href={{ url('/admin/portfolio/'.$s['id']) }} class="btn btn-warning btn-xs text-white">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href={{ url('/admin/portfolio-services?portfolio_id='.$s['id']); }} class="btn btn-primary btn-xs text-white">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                    <a href="javascript:void(0);" onclick="deleteData('<?= $deleteUrl; ?>')" class="btn btn-danger btn-xs text-white btn-delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody> --}}


                    <tbody id="sortable">
                        @foreach($portfolio as $s)
                            @php $deleteUrl = url('/admin/portfolio-delete/'.$s['id']); @endphp
                            <tr data-id="{{ $s->id }}">
                                <td class="handle">{{ $loop->iteration }}</td>
                                <td>{{ $s['name'] }}</td>
                                <td>{{ $s['heading'] }}</td>
                                <td>
                                    <img src="{{ asset($s['image']) }}" alt="Image" width="100" height="auto" />
                                </td>
                                <td class="table-list-detail">{{ $s['sub_heading'] }}</td>
                                <td>
                                    <input type="number" class="position-input"
                                        style="width: 50px; text-align: center;" data-id="{{ $s->id }}"
                                        value="{{ $s->position }}" min="1">
                                </td>
                                <td class="text-end">
                                    <div class="table-action-btns">
                                        <a href="{{ url('/admin/portfolio/'.$s['id']) }}" class="btn btn-warning btn-xs text-white">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{ url('/admin/portfolio-services?portfolio_id='.$s['id']) }}" class="btn btn-primary btn-xs text-white">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <a href="javascript:void(0);" onclick="deleteData('{{ $deleteUrl }}')" class="btn btn-danger btn-xs text-white btn-delete">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>                    
                </table>
            </div>
            <div class="pagination mt-3">
                {{ $portfolio->links() }}
            </div>
            </div>
        </div>
    </div>
</div>


<!-- jQuery (latest version) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- jQuery UI (if needed) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function () {
        $(".position-input").on("change", function () {
            let order = [];
            let positions = new Set();
            let hasDuplicate = false;
            let previousValues = {}; // Store old values
    
            $(".position-input").each(function () {
                let id = $(this).data("id");
                let position = $(this).val();
    
                if (id && position) {
                    if (positions.has(position)) {
                        hasDuplicate = true;
                        $(this).val(previousValues[id]); // Restore old value
                    } else {
                        positions.add(position);
                        previousValues[id] = position;
                        order.push({
                            id: id,
                            position: parseInt(position)
                        });
                    }
                }
            });
    
            if (hasDuplicate) {
                Swal.fire("Error", "Duplicate Order are not allowed!", "error");
                return;
            }
    
            $.ajax({
                url: "{{ route('portfolio.sort') }}", // Portfolio sorting ka route
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                data: {
                    order: order
                },
                success: function (response) {
                    Swal.fire({
                        icon: "success",
                        title: "Success",
                        text: response.message,
                        timer: 1500,
                        showConfirmButton: false
                    });
    
                    setTimeout(function () {
                        location.reload(); // Auto refresh page
                    }, 1600);
                },
                error: function (xhr) {
                    Swal.fire("Error", xhr.responseJSON?.message || "Failed to update order!", "error");
                }
            });
        });
    });
    </script>
    