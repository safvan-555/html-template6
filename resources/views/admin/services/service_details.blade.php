@extends('admin.layouts.master')

@section('title', 'Edit Service')
@section('header', 'Edit Service')

@section('styles')
<style>
    .preview-image {
        max-width: 200px;
        max-height: 200px;
        margin-top: 10px;
        border-radius: 8px;
        border: 1px solid #ddd;
        padding: 5px;
    }
    
    .current-files {
        background-color: #f8f9fa;
        padding: 15px;
        border-radius: 8px;
        margin-bottom: 20px;
    }
    
    .current-files h6 {
        margin-bottom: 10px;
        font-weight: 600;
    }
    
    .file-preview {
        display: inline-block;
        margin-right: 20px;
        text-align: center;
    }
    
    .file-preview img {
        max-width: 100px;
        max-height: 100px;
        border-radius: 8px;
        margin-bottom: 5px;
    }
    
    .note-editor {
        border-radius: 8px;
    }
    
    .note-toolbar {
        border-radius: 8px 8px 0 0;
    }
</style>
@endsection

@section('content')
<div class="container-fluid">
    <div class="card shadow-sm">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Edit Service Details</h5>
            <a href="{{ route('admin.services') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to Services
            </a>
        </div>
        
        <div class="card-body">
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('admin.services.item.update', $item->id) }}" 
                  method="POST" 
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <!-- Current Files Section -->
                    <div class="col-md-12 mb-4">
                        <div class="current-files">
                            <h6>Current Files</h6>
                            <div class="d-flex">

                                @if($item->page_banner)
                                <div class="file-preview">
                                    <img src="{{ asset('storage/' . $item->page_banner) }}" alt="Current Icon">
                                    <div>
                                        <small class="text-muted">Page Banner</small>
                                    </div>
                                </div>
                                @endif

                                @if($item->card_banner)
                                <div class="file-preview">
                                    <img src="{{ asset('storage/' . $item->card_banner) }}" alt="Current Banner">
                                    <div>
                                        <small class="text-muted">Current Banner</small>
                                    </div>
                                </div>
                                @endif
                                
                                @if($item->card_icon)
                                <div class="file-preview">
                                    <img src="{{ asset('storage/' . $item->card_icon) }}" alt="Current Icon">
                                    <div>
                                        <small class="text-muted">Current Icon</small>
                                    </div>
                                </div>
                                @endif
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="page_banner" class="form-label">Page Banner (width =1440px height= 438px)</label>
                        <input type="file" class="form-control" id="page_banner" name="page_banner" accept="image/*">
                        <small class="text-muted">Leave empty to keep current banner. Recommended size: (width =1440px height= 438px)</small>
                        <div id="page_banner_preview" style="display: none;">
                            <img id="page_banner_preview_img" class="preview-image" alt="Banner Preview">
                        </div>
                    </div>

                    <!-- Card Banner Upload -->
                    <div class="col-md-6 mb-3">
                        <label for="card_banner" class="form-label">Card Banner Image (width=370px height=340px)</label>
                        <input type="file" class="form-control" id="card_banner" name="card_banner" accept="image/*">
                        <small class="text-muted">Leave empty to keep current banner. Recommended size: 370px*340px</small>
                        <div id="banner_preview" style="display: none;">
                            <img id="banner_preview_img" class="preview-image" alt="Banner Preview">
                        </div>
                    </div>

                    <!-- Card Icon Upload -->
                    <div class="col-md-6 mb-3">
                        <label for="card_icon" class="form-label">Card Icon Image</label>
                        <input type="file" class="form-control" id="card_icon" name="card_icon" accept="image/*">
                        <small class="text-muted">Leave empty to keep current icon(SVG)</small>
                        <div id="icon_preview" style="display: none;">
                            <img id="icon_preview_img" class="preview-image" alt="Icon Preview">
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label>Card Heading</label>
                        <input type="text" required name="card_heading" class="form-control" value="{{ old('card_heading', $item->card_heading) }}">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="card_description" class="form-label">Card Description <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="card_description" name="card_description" rows="6" required>{{ old('card_description', $item->card_description) }}</textarea>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="description" class="form-label">Description <span class="text-danger"></span></label>
                        <textarea class="form-control summernote" id="description" name="description" required>{{ old('description', $item->description) }}</textarea>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label>Meta Title</label>
                        <input type="text" required name="meta_title" class="form-control" value="{{ old('meta_title', $item->meta_title) }}">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="meta_description" class="form-label">Meta Description</label>
                        <textarea class="form-control" id="meta_description" name="meta_description" rows="6" required>{{ old('meta_description', $item->meta_description) }}</textarea>
                    </div>
                </div>

                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Update Service
                    </button>
                    <a href="{{ route('admin.services') }}" class="btn btn-secondary">
                        <i class="fas fa-times"></i> Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')

<script>
$(document).ready(function() {
    // Initialize Summernote for description
    $('#description').summernote({
        height: 250,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'strikethrough', 'clear']],
            ['fontsize', ['fontsize']],  // Font size selector
            ['fontname', ['fontname']],   // Font family selector
            ['color', ['color']],         // Text & background color
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],       // Line height
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ],
        fontSizes: ['8', '9', '10', '11', '12', '14', '16', '18', '20', '22', '24', '28', '30', '36', '48', '72'],
        fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Helvetica', 'Impact', 'Tahoma', 'Times New Roman', 'Verdana'],
        colors: [
            ['#000000', '#424242', '#636363', '#9C9C9C', '#CECECE', '#EFEFEF', '#FCFCFC'],
            ['#980000', '#FF0000', '#FF9900', '#FFFF00', '#00FF00', '#00FFFF', '#4A86E8', '#0000FF'],
            ['#9900FF', '#FF00FF', '#E6B8AF', '#D5A6BD', '#B4A7D6', '#9FC5E8', '#B6D7A8', '#FFE599']
        ]
    });

    // Banner image preview
    $('#card_banner').on('change', function() {
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

    // Icon image preview
    $('#card_icon').on('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                $('#icon_preview_img').attr('src', e.target.result);
                $('#icon_preview').show();
            }
            reader.readAsDataURL(file);
        } else {
            $('#icon_preview').hide();
        }
    });

    $('#page_banner').on('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                $('#page_banner_preview_img').attr('src', e.target.result);
                $('#page_banner_preview').show();
            }
            reader.readAsDataURL(file);
        } else {
            $('#page_banner_preview').hide();
        }
    });

    
});
</script>
@endsection