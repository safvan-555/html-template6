@extends('admin.layouts.master')

@section('title', 'Testimonials')
@section('header', 'Testimonials Management')

@section('content')
<div class="container-fluid">
    <div class="card shadow-sm">
        <div class="card-header bg-white">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0">All Testimonials</h5>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#testimonialModal" onclick="resetForm()">
                    <i class="fas fa-plus"></i> Add New Testimonial
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" id="testimonialsTable">
                    <thead>
                        <tr>
                            <th>Profile</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Rating</th>
                            <th>Testimonial</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($testimonials as $testimonial)
                        <tr>
                            <td>
                                @if($testimonial->profile)
                                    <img src="{{ asset('storage/' . $testimonial->profile) }}" 
                                         alt="{{ $testimonial->name }}" 
                                         class="rounded-circle"
                                         style="width: 50px; height: 50px; object-fit: cover;">
                                @else
                                    <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center"
                                         style="width: 50px; height: 50px;">
                                        <i class="fas fa-user text-white"></i>
                                    </div>
                                @endif
                            </td>
                            <td class="fw-bold">{{ $testimonial->name }}</td>
                            <td>{{ $testimonial->designation }}</td>
                            <td>
                                <div class="text-warning">
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <= $testimonial->rating)
                                            <i class="fas fa-star"></i>
                                        @else
                                            <i class="far fa-star"></i>
                                        @endif
                                    @endfor
                                </div>
                            </td>
                            <td style="max-width: 300px;">
                                <div class="text-truncate">{{ Str::limit($testimonial->paragraph, 100) }}</div>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-info" onclick="editTestimonial({{ $testimonial->id }})">
                                    <i class="fas fa-edit"></i> Edit
                                </button>
                                <button class="btn btn-sm btn-danger" onclick="deleteTestimonial({{ $testimonial->id }})">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Add/Edit Modal -->
<div class="modal fade" id="testimonialModal" tabindex="-1" aria-labelledby="testimonialModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="testimonialModalLabel">Add New Testimonial</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="testimonialForm" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" id="testimonial_id" name="testimonial_id">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="mb-3">
                        <label for="designation" class="form-label">Designation <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="designation" name="designation" required>
                    </div>

                    <div class="mb-3">
                        <label for="rating" class="form-label">Rating <span class="text-danger">*</span></label>
                        <select class="form-control" id="rating" name="rating" required>
                            <option value="">Select Rating</option>
                            <option value="1">1 Star</option>
                            <option value="2">2 Stars</option>
                            <option value="3">3 Stars</option>
                            <option value="4">4 Stars</option>
                            <option value="5">5 Stars</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="profile" class="form-label">Profile Image</label>
                        <input type="file" class="form-control" id="profile" name="profile" accept="image/*">
                        <div id="currentProfile" class="mt-2" style="display: none;">
                            <img id="currentProfileImg" src="" alt="Current Profile" style="width: 80px; height: 80px; object-fit: cover; border-radius: 50%;">
                            <p class="text-muted mt-1">Current image</p>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="paragraph" class="form-label">Testimonial <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="paragraph" name="paragraph" rows="5" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save Testimonial</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this testimonial?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    let deleteId = null;
    function resetForm() {
        $('#testimonialForm')[0].reset();
        $('#testimonial_id').val('');
        $('#currentProfile').hide();
        $('#testimonialModalLabel').text('Add New Testimonial');
        $('#profile').prop('required', false);
    }

    function editTestimonial(id) {
        $.ajax({
            url: `/admin/testimonials/${id}/edit`,
            type: 'GET',
            success: function(data) {
                $('#testimonial_id').val(data.id);
                $('#name').val(data.name);
                $('#designation').val(data.designation);
                $('#rating').val(data.rating);
                $('#paragraph').val(data.paragraph);
                
                if (data.profile) {
                    $('#currentProfileImg').attr('src', `/storage/${data.profile}`);
                    $('#currentProfile').show();
                } else {
                    $('#currentProfile').hide();
                }
                
                $('#testimonialModalLabel').text('Edit Testimonial');
                $('#testimonialModal').modal('show');
            },
            error: function(xhr) {
                alert('Error loading testimonial data');
            }
        });
    }

    function deleteTestimonial(id) {
        deleteId = id;
        $('#deleteModal').modal('show');
    }

    $('#confirmDeleteBtn').click(function() {
        if (deleteId) {
            $.ajax({
                url: `/admin/testimonials/${deleteId}`,
                type: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.success) {
                        location.reload();
                    } else {
                        alert('Error deleting testimonial');
                    }
                },
                error: function(xhr) {
                    alert('Error deleting testimonial');
                }
            });
        }
    });

    $('#testimonialForm').submit(function(e) {
        e.preventDefault();
        let formData = new FormData(this);
        let id = $('#testimonial_id').val();
        let url = id ? `/admin/testimonials/${id}` : '/admin/testimonials';
        
        formData.append('_token', '{{ csrf_token() }}');
        if (id) {
            formData.append('_method', 'PUT');
        }
        const submitBtn = $(this).find('button[type="submit"]');
        const originalText = submitBtn.text();
        submitBtn.text('Saving...').prop('disabled', true);
        
        $.ajax({
            url: url,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.success) {
                    location.reload();
                } else {
                    alert(response.message || 'Error saving testimonial');
                    submitBtn.text(originalText).prop('disabled', false);
                }
            },
            error: function(xhr) {
                submitBtn.text(originalText).prop('disabled', false);
                
                if (xhr.responseJSON && xhr.responseJSON.errors) {
                    let errors = xhr.responseJSON.errors;
                    let errorMsg = '';
                    for (let key in errors) {
                        errorMsg += errors[key][0] + '\n';
                    }
                    alert(errorMsg);
                } else if (xhr.responseJSON && xhr.responseJSON.message) {
                    alert(xhr.responseJSON.message);
                } else {
                    alert('Error saving testimonial. Please check the console for details.');
                    console.error(xhr);
                }
            }
        });
    });
    
    window.resetForm = resetForm;
    window.editTestimonial = editTestimonial;
    window.deleteTestimonial = deleteTestimonial;
});
</script>
@endsection