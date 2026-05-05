@extends('admin.layouts.master')

@section('title', 'Services')

@section('header', 'Services')

@section('styles')
<style>
.stat-card {
    cursor: pointer;
}

.stat-card .card-body {
    position: relative;
    z-index: 1;
}

.stat-icon {
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 3rem;
    opacity: 0.2;
    z-index: 0;
}

.modal-lg {
    max-width: 800px;
}

.service-item-img {
    width: 60px;
    height: 60px;
    object-fit: cover;
    border-radius: 8px;
}

.service-icon-img {
    width: 40px;
    height: 40px;
    object-fit: contain;
}

.table img {
    max-width: 50px;
    max-height: 50px;
    object-fit: cover;
}

.draggable-row {
    cursor: move;
}
</style>
@endsection

@section('content')

<div class="container-fluid">
    <div class="card shadow-sm">
        <div class="card-header">
            <h5 class="mb-0">Edit Service Page</h5>
        </div>

        <div class="card-body">
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <form action="{{ url('admin/services') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <div class="col-md-12 mb-3">
                        <label>Heading</label>
                        <input type="text" name="heading" required class="form-control"
                            value="{{ $service->heading ?? '' }}">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label>Meta Title</label>
                        <input type="text" name="meta_title" required class="form-control"
                            value="{{ $service->meta_title ?? '' }}">
                    </div>


                    <div class="col-md-12 mb-3">
                        <label>Meta Description</label>
                        <textarea required name="meta_description" rows="4"
                            class="form-control">{{ $service->meta_description ?? '' }}</textarea>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Banner Image (width =1440px height= 438px)</label>
                        <input type="file" name="banner" class="form-control">
                    </div>

                    @if(!empty($service->banner))
                    <div class="col-md-6 mb-3">
                        <label>Current Banner</label><br>
                        <img src="{{ asset('storage/' . $service->banner) }}"
                            style="max-height:120px; border-radius:8px;">
                    </div>
                    @endif
                </div>

                <button class="btn btn-primary mt-3">Update Page Settings</button>
            </form>
        </div>
    </div>
</div>

<div class="container-fluid mt-5">
    <div class="card shadow-sm">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Service List</h5>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#serviceItemModal">
                <i class="fas fa-plus"></i> Add New Service
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-light">
                        <tr>
                            <th width="50">#</th>
                            <th width="80">Card Image</th>
                            <th width="80">Icon</th>
                            <th width="80">Heading</th>
                            <th>Description</th>
                            <th width="150">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="service-items-table">
                        @forelse($serviceItems as $index => $item)
                        <tr class="draggable-row" data-id="{{ $item->id }}">
                            <td class="drag-handle" style="cursor: move;">
                                <i class="fas fa-grip-vertical"></i> {{ $index + 1 }}
                            </td>
                            <td>
                                @if($item->card_banner)
                                <img src="{{ asset('storage/' . $item->card_banner) }}" class="service-item-img"
                                    alt="Banner">
                                @else
                                <span class="text-muted">No image</span>
                                @endif
                            </td>
                            <td>
                                @if($item->card_icon)
                                <img src="{{ asset('storage/' . $item->card_icon) }}" class="service-icon-img"
                                    alt="Icon">
                                @else
                                <span class="text-muted">No icon</span>
                                @endif
                            </td>
                            <td>{{ Str::limit($item->card_heading, 100) }}</td>
                            <td>{{ Str::limit($item->card_description, 100) }}</td>
                            <td>
                                <a href="{{ route('admin.services.item.edit', $item->id) }}"
                                    class="btn btn-sm btn-info edit-service" data-id="{{ $item->id }}">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <button class="btn btn-sm btn-danger delete-service" data-id="{{ $item->id }}">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center">No services added yet. Click "Add New Service" to create
                                one.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Add/Edit Service Item -->
<div class="modal fade" id="serviceItemModal" tabindex="-1" aria-labelledby="serviceItemModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="serviceItemModalLabel">Add New Service</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="serviceItemForm" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="item_id" id="item_id">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="card_banner" class="form-label">Card Banner (width=370px height=340px)</label>
                        <input type="file" class="form-control" id="card_banner" name="card_banner" accept="image/*">
                        <div id="current_banner_preview" class="mt-2" style="display: none;">
                            <label>Current Banner:</label><br>
                            <img id="current_banner_img" src="" style="max-height: 100px;">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="card_icon" class="form-label">Card Icon (Svg similar)</label>
                        <input type="file" class="form-control" id="card_icon" name="card_icon" accept="image/*">
                        <small class="text-muted">Upload an icon image for this service </small>
                        <div id="current_icon_preview" class="mt-2" style="display: none;">
                            <label>Current Icon:</label><br>
                            <img id="current_icon_img" src="" style="max-height: 60px;">
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label>Card Heading</label>
                        <input type="text" required name="card_heading" id="card_heading" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="card_description" class="form-label">Card Description</label>
                        <textarea class="form-control" id="card_description" name="card_description" rows="4"
                            required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save Service</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
<script>
$(document).ready(function() {
    // Initialize drag and drop sorting
    var tbody = document.getElementById('service-items-table');
    if (tbody) {
        new Sortable(tbody, {
            handle: '.drag-handle',
            animation: 150,
            onEnd: function() {
                updateOrder();
            }
        });
    }

    // Update order function
    function updateOrder() {
        var rows = document.querySelectorAll('#service-items-table tr');
        var orders = [];

        rows.forEach(function(row, index) {
            var id = row.getAttribute('data-id');
            if (id) {
                orders.push({
                    id: id,
                    order: index
                });
            }
        });
    }

    // Handle form submission for add/edit
    $('#serviceItemForm').on('submit', function(e) {
        e.preventDefault();

        var formData = new FormData(this);
        var itemId = $('#item_id').val();
        var url = itemId ? '/admin/services/item/' + itemId : '/admin/services/item';
        var method = itemId ? 'PUT' : 'POST';

        // Add method override for PUT request
        if (method === 'PUT') {
            formData.append('_method', 'PUT');
        }

        $.ajax({
            url: url,
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            success: function(response) {
                if (response.success) {
                    Swal.fire('Success!', response.message, 'success').then(() => {
                        location.reload();
                    });
                }
            },
            error: function(xhr) {
                var errors = xhr.responseJSON.errors;
                var errorMessage = '';
                if (errors) {
                    for (var key in errors) {
                        errorMessage += errors[key][0] + '\n';
                    }
                } else {
                    errorMessage = 'An error occurred. Please try again.';
                }
                Swal.fire('Error!', errorMessage, 'error');
            }
        });
    });

    // Handle delete
    $('.delete-service').on('click', function() {
        var id = $(this).data('id');

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '/admin/services/item/' + id, // Fixed URL - removed '/edit'
                    method: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            Swal.fire('Deleted!', response.message, 'success').then(
                                () => {
                                    location.reload();
                                });
                        }
                    },
                    error: function(xhr) {
                        let errorMessage = 'Failed to delete service item.';
                        if (xhr.responseJSON && xhr.responseJSON.message) {
                            errorMessage = xhr.responseJSON.message;
                        }
                        Swal.fire('Error!', errorMessage, 'error');
                    }
                });
            }
        });
    });



    // Reset modal when closed
    $('#serviceItemModal').on('hidden.bs.modal', function() {
        $('#serviceItemForm')[0].reset();
        $('#item_id').val('');
        $('#serviceItemModalLabel').text('Add New Service');
        $('#current_banner_preview').hide();
        $('#current_icon_preview').hide();
    });
});
</script>
@endsection