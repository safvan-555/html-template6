@extends('admin.layouts.master')

@section('title', 'Projects')

@section('header', 'Projects')

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

.project-item-img {
    width: 60px;
    height: 60px;
    object-fit: cover;
    border-radius: 8px;
}

.table img {
    max-width: 60px;
    max-height: 60px;
    object-fit: cover;
}

.draggable-row {
    cursor: move;
}

.badge-service {
    background-color: #e9ecef;
    color: #495057;
    padding: 4px 8px;
    border-radius: 4px;
    font-size: 12px;
}
</style>
@endsection

@section('content')

<div class="container-fluid">
    <div class="card shadow-sm">
        <div class="card-header">
            <h5 class="mb-0">Edit Project Page</h5>
        </div>

        <div class="card-body">
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <form action="{{ url('admin/projects') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label>Heading</label>
                        <input type="text" name="heading" class="form-control"
                            value="{{ $projectPage->heading ?? '' }}">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label>Meta Title</label>
                        <input type="text" name="meta_title" class="form-control"
                            value="{{ $projectPage->meta_title ?? '' }}">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label>Meta Description</label>
                        <textarea name="meta_description" rows="4"
                            class="form-control">{{ $projectPage->meta_description ?? '' }}</textarea>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Banner Image</label>
                        <input type="file" name="banner" class="form-control">
                        <small class="text-muted">Recommended size: (width =1440px height= 438px)</small>
                    </div>

                    @if(!empty($projectPage->banner))
                    <div class="col-md-6 mb-3">
                        <label>Current Banner</label><br>
                        <img src="{{ asset('storage/' . $projectPage->banner) }}"
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
            <h5 class="mb-0">Projects List</h5>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#projectItemModal">
                <i class="fas fa-plus"></i> Add New Project
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-light">
                        <tr>
                            <th width="50">#</th>
                            <th width="80">Image</th>
                            <th width="200">Heading</th>
                            <!-- <th>Sub Heading</th> -->
                            <th width="120">Service</th>
                            <th width="150">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="project-items-table">
                        @forelse($projectItems as $index => $item)
                        <tr class="draggable-row" data-id="{{ $item->id }}">
                            <td class="drag-handle" style="cursor: move;">
                                <i class="fas fa-grip-vertical"></i> {{ $index + 1 }}
                            </td>
                            <td>
                                @if($item->card_image)
                                <img src="{{ asset('storage/' . $item->card_image) }}" class="project-item-img"
                                    alt="card_image">
                                @else
                                <span class="text-muted">No image</span>
                                @endif
                            </td>
                            <td>{{ Str::limit($item->heading, 50) }}</td>
                            <!-- <td>{{ Str::limit($item->sub_heading, 60) }}</td> -->
                            <td>
                                @if($item->service)
                                <span class="badge-service">{{ $item->service->card_heading }}</span>
                                @else
                                <span class="text-muted">Not assigned</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ url('admin/projects/item/' . $item->id . '/edit') }}"
                                    class="btn btn-sm btn-info">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <button class="btn btn-sm btn-danger delete-project" data-id="{{ $item->id }}">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">No projects added yet. Click "Add New Project" to create
                                one.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Add Project -->
<div class="modal fade" id="projectItemModal" tabindex="-1" aria-labelledby="projectItemModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="projectItemModalLabel">Add New Project</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="projectItemForm" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="banner" class="form-label">Card image</label>
                        <input type="file" class="form-control" id="banner" name="banner" accept="image/*">
                        <small class="text-muted">Recommended size: (width= 370px height = 420px)</small>
                        <div id="banner_preview" class="mt-2" style="display: none;">
                            <img id="banner_preview_img" src="" style="max-height: 100px;">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="heading" class="form-label">Heading <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="heading" name="heading" required>
                    </div>

                    <div class="mb-3">
                        <label for="sub_heading" class="form-label">Sub Heading</label>
                        <input type="text" class="form-control" id="sub_heading" name="sub_heading">
                    </div>

                    <!-- <div class="mb-3">
                        <label for="service_id" class="form-label">Associated Service (Optional)</label>
                        <select class="form-control" id="service_id" name="service_id">
                            <option value="">-- None --</option>
                            @foreach($services as $service)
                            <option value="{{ $service->id }}">{{ $service->card_heading }}</option>
                            @endforeach
                        </select>
                    </div> -->

                    <!-- <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="meta_title" class="form-label">Meta Title</label>
                        <input type="text" class="form-control" id="meta_title" name="meta_title">
                    </div>

                    <div class="mb-3">
                        <label for="meta_description" class="form-label">Meta Description</label>
                        <textarea class="form-control" id="meta_description" name="meta_description"
                            rows="3"></textarea>
                    </div> -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save Project</button>
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
    var tbody = document.getElementById('project-items-table');
    if (tbody) {
        new Sortable(tbody, {
            handle: '.drag-handle',
            animation: 150,
            onEnd: function() {
                updateOrder();
            }
        });
    }

    function updateOrder() {
        var rows = document.querySelectorAll('#project-items-table tr');
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

        $.ajax({
            url: '{{ url("admin/projects/update-order") }}',
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                orders: orders
            },
            success: function(response) {
                console.log('Order updated');
            }
        });
    }

    // Banner preview
    $('#banner').on('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                $('#banner_preview_img').attr('src', e.target.result);
                $('#banner_preview').show();
            }
            reader.readAsDataURL(file);
        } else {
            $('#banner_preview').hide();
        }
    });

    // Handle form submission
    $('#projectItemForm').on('submit', function(e) {
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            url: '{{ url("admin/projects/item") }}',
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
    $('.delete-project').on('click', function() {
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
                    url: '/admin/projects/item/' + id,
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
                        Swal.fire('Error!', 'Failed to delete project.', 'error');
                    }
                });
            }
        });
    });

    // Reset modal when closed
    $('#projectItemModal').on('hidden.bs.modal', function() {
        $('#projectItemForm')[0].reset();
        $('#banner_preview').hide();
    });
});
</script>
@endsection