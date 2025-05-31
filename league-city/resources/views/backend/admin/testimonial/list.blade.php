<div class="row">
    <div class="col-sm-12">
        @include('backend.layouts.alert')

        <div class="card member-statistics h-auto billing-table">
            <div class="card-header bg-white">
                <div class="d-flex align-items-center justify-content-between">
                    <h6 class="mb-1">Testimonials List</h6>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive web-overflow">
                    <table id="" class="table dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="table-id">ID</th>
                                <th>Name</th>
                                <th>Company Logo</th>
                                <th>Description</th>
                                <th>Show at Homepage</th>
                                <th>Order</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        {{-- <tbody>
                            @php
                                $i = 1;    
                            @endphp
                            @foreach ($testimonials as $testimonial)
                                @php $deleteUrl = route('testimonials.destroy',$testimonial['id']); @endphp
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $testimonial->name }}</td>
                                    <td><img src="{{ asset($testimonial->image) }}" width="50"
                                            alt="{{ $testimonial->name }}"></td>
                                    <td>{{ $testimonial->description }}</td>
                                    <td>
                                        {{ $testimonial->show_at_homepage ? 'Yes' : 'No' }}
                                    </td>
                                    <td class="text-end">
                                        <div class="table-action-btns">
                                            <a href="{{ route('testimonials.edit', $testimonial->id) }}"
                                                class="btn btn-warning btn-xs text-white">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="javascript:void(0);" onclick="deleteData('<?= $deleteUrl ?>')"
                                                class="btn btn-danger btn-xs text-white btn-delete">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody> --}}
                        {{-- <tbody id="sortable">
                            @foreach ($testimonials as $testimonial)
                                <tr data-id="{{ $testimonial->id }}">
                                    <td class="handle">{{ $loop->iteration }}</td>
                                    <td>{{ $testimonial->name }}</td>
                                    <td><img src="{{ asset($testimonial->image) }}" width="50"
                                            alt="{{ $testimonial->name }}"></td>
                                    <td>{{ $testimonial->description }}</td>
                                    <td>{{ $testimonial->show_at_homepage ? 'Yes' : 'No' }}</td>
                                    <td>
                                        <input type="number" class="position-input"
                                            style="width: 50px; text-align: center;" data-id="{{ $testimonial->id }}"
                                            value="{{ $testimonial->position }}" min="1">
                                    </td>
                                    <td class="text-end">
                                        <div class="table-action-btns">
                                            <a href="{{ route('testimonials.edit', $testimonial->id) }}"
                                                class="btn btn-warning btn-xs text-white">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="javascript:void(0);"
                                                onclick="deleteData('{{ route('testimonials.destroy', $testimonial->id) }}')"
                                                class="btn btn-danger btn-xs text-white btn-delete">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody> --}}



                        <tbody id="sortable">
                            @foreach ($testimonials as $testimonial)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $testimonial->name }}</td>
                                    <td>
                                        <img src="{{ asset($testimonial->image) }}" width="50"
                                            alt="{{ $testimonial->name }}">
                                    </td>
                                    {{-- <td>{{ $testimonial->description }}</td> --}}
                                    <td>
                                        <a href="javascript:void(0);" data-bs-toggle="modal"
                                            data-bs-target="#descModal{{ $testimonial->id }}" class="text-primary">
                                            View Description
                                        </a>
                                    </td>
                                    <td>{{ $testimonial->show_at_homepage ? 'Yes' : 'No' }}</td>
                                    <td>
                                        <input type="number" class="position-input"
                                            style="width: 50px; text-align: center;" data-id="{{ $testimonial->id }}"
                                            value="{{ $testimonial->position }}" min="1">
                                    </td>
                                    <td class="text-end">
                                        <div class="table-action-btns">
                                            <a href="{{ route('testimonials.edit', $testimonial->id) }}"
                                                class="btn btn-warning btn-xs text-white">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="javascript:void(0);"
                                                onclick="deleteData('{{ route('testimonials.destroy', $testimonial->id) }}')"
                                                class="btn btn-danger btn-xs text-white btn-delete">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <div class="modal fade" id="descModal{{ $testimonial->id }}" tabindex="-1"
                                    aria-labelledby="descModalLabel{{ $testimonial->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Testimonial Description</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                {!! $testimonial->description !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>

                    </table>
                </div>
                <div class="pagination mt-3">
                    {{ $testimonials->links() }}
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


{{-- no duplicate position allowed --}}
<script>
    $(document).ready(function() {
        $(".position-input").on("change", function() {
            let order = [];
            let positions = new Set();
            let hasDuplicate = false;
            let previousValues = {}; // Store old values

            $(".position-input").each(function() {
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
                url: "{{ route('testimonials.sort') }}",
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                data: {
                    order: order
                },
                success: function(response) {
                    Swal.fire({
                        icon: "success",
                        title: "Success",
                        text: response.message,
                        timer: 1500,
                        showConfirmButton: false
                    });

                    setTimeout(function() {
                        location.reload(); // Auto refresh page
                    }, 1600);
                },
                error: function(xhr) {
                    Swal.fire("Error", xhr.responseJSON?.message ||
                        "Failed to update order!", "error");
                }
            });
        });
    });
</script>
