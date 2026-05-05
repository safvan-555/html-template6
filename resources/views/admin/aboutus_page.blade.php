{{-- resources/views/admin/about_us_page/edit.blade.php --}}

@extends('admin.layouts.master')

@section('title', 'Edit About Us Page')
@section('header', 'Edit About Us Page')

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<style>
    .nav-tabs .nav-link {
        color: #495057;
        font-weight: 500;
    }
    .nav-tabs .nav-link.active {
        color: #0d6efd;
        font-weight: 600;
    }
    .card-section {
        background: #f8f9fa;
        padding: 20px;
        border-radius: 8px;
        margin-bottom: 20px;
    }
    .icon-preview {
        width: 80px;
        height: 80px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #e9ecef;
        border-radius: 8px;
        margin-top: 8px;
        overflow: hidden;
    }
    .icon-preview img {
        max-width: 100%;
        max-height: 100%;
        object-fit: cover;
    }
    .current-icon {
        margin-top: 10px;
    }
    .current-icon p {
        margin-bottom: 5px;
        font-size: 0.85rem;
        color: #6c757d;
    }
    .note-editor.note-frame {
        border-radius: 8px;
    }
</style>
@endsection

@section('content')
<div class="container-fluid">
    <div class="card shadow-sm">
        <div class="card-header">
            <h5 class="mb-0">Edit About Us Page</h5>
        </div>

        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form action="{{ url('admin/about-us') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <ul class="nav nav-tabs mb-4" id="aboutUsTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="basic-tab" data-bs-toggle="tab" data-bs-target="#basic" type="button" role="tab">Basic Info</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="whychoose-tab" data-bs-toggle="tab" data-bs-target="#whychoose" type="button" role="tab">Why Choose Us</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="aboutus-tab" data-bs-toggle="tab" data-bs-target="#aboutus" type="button" role="tab">About Us Section</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="services-tab" data-bs-toggle="tab" data-bs-target="#services" type="button" role="tab">Services & Work</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="mission-tab" data-bs-toggle="tab" data-bs-target="#mission" type="button" role="tab">Mission</button>
                    </li>
                </ul>

                <div class="tab-content" id="aboutUsTabsContent">
                    {{-- Basic Info Tab --}}
                    <div class="tab-pane fade show active" id="basic" role="tabpanel">
                        <div class="card-section">
                            <h6 class="mb-3">Basic Information</h6>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label>Heading</label>
                                    <input type="text" name="heading" class="form-control" value="{{ old('heading', $aboutUsPage->heading ?? '') }}">
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label>Meta Title</label>
                                    <input type="text" name="meta_title" class="form-control" value="{{ old('meta_title', $aboutUsPage->meta_title ?? '') }}">
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label>Meta Description</label>
                                    <textarea name="meta_description" rows="4" class="form-control">{{ old('meta_description', $aboutUsPage->meta_description ?? '') }}</textarea>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label>Banner Image</label>
                                    <input type="file" name="banner" class="form-control" accept="image/*">
                                    <small class="text-muted">Recommended size: 1440px x 438px</small>
                                </div>

                                @if(!empty($aboutUsPage->banner))
                                    <div class="col-md-6 mb-3">
                                        <label>Current Banner</label><br>
                                        <img src="{{ asset('storage/' . $aboutUsPage->banner) }}" style="max-height:120px; border-radius:8px;">
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    {{-- Why Choose Us Tab --}}
                    <div class="tab-pane fade" id="whychoose" role="tabpanel">
                        <div class="card-section">
                            <h6 class="mb-3">Why Choose Us Section</h6>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label>Heading</label>
                                    <input type="text" name="whychoose_heading" class="form-control" value="{{ old('whychoose_heading', $aboutUsPage->whychoose_heading ?? '') }}">
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label>Subheading</label>
                                    <input type="text" name="whychoose_subheading" class="form-control" value="{{ old('whychoose_subheading', $aboutUsPage->whychoose_subheading ?? '') }}">
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label>Paragraph</label>
                                    <textarea name="whychoose_paragraph" rows="4" class="form-control">{{ old('whychoose_paragraph', $aboutUsPage->whychoose_paragraph ?? '') }}</textarea>
                                </div>

                                {{-- Card 1 --}}
                                <div class="col-md-6 mb-3">
                                    <label>Card 1 - Icon Image</label>
                                    <input type="file" name="whychoose_card1_icon" class="form-control" accept="image/*">
                                    <small class="text-muted">Recommended size: 64x64px</small>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Card 1 - Heading</label>
                                    <input type="text" name="whychoose_card1_heading" class="form-control" value="{{ old('whychoose_card1_heading', $aboutUsPage->whychoose_card1_heading ?? '') }}">
                                </div>
                                @if(!empty($aboutUsPage->whychoose_card1_icon) && file_exists(storage_path('app/public/' . $aboutUsPage->whychoose_card1_icon)))
                                <div class="col-md-12 mb-3">
                                    <div class="current-icon">
                                        <p>Current Icon:</p>
                                        <div class="icon-preview">
                                            <img src="{{ asset('storage/' . $aboutUsPage->whychoose_card1_icon) }}" alt="Current icon">
                                        </div>
                                    </div>
                                </div>
                                @endif

                                {{-- Card 2 --}}
                                <div class="col-md-6 mb-3">
                                    <label>Card 2 - Icon Image</label>
                                    <input type="file" name="whychoose_card2_icon" class="form-control" accept="image/*">
                                    <small class="text-muted">Recommended size: 64x64px</small>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Card 2 - Heading</label>
                                    <input type="text" name="whychoose_card2_heading" class="form-control" value="{{ old('whychoose_card2_heading', $aboutUsPage->whychoose_card2_heading ?? '') }}">
                                </div>
                                @if(!empty($aboutUsPage->whychoose_card2_icon) && file_exists(storage_path('app/public/' . $aboutUsPage->whychoose_card2_icon)))
                                <div class="col-md-12 mb-3">
                                    <div class="current-icon">
                                        <p>Current Icon:</p>
                                        <div class="icon-preview">
                                            <img src="{{ asset('storage/' . $aboutUsPage->whychoose_card2_icon) }}" alt="Current icon">
                                        </div>
                                    </div>
                                </div>
                                @endif

                                {{-- Card 3 --}}
                                <div class="col-md-6 mb-3">
                                    <label>Card 3 - Icon Image</label>
                                    <input type="file" name="whychoose_card3_icon" class="form-control" accept="image/*">
                                    <small class="text-muted">Recommended size: 64x64px</small>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Card 3 - Heading</label>
                                    <input type="text" name="whychoose_card3_heading" class="form-control" value="{{ old('whychoose_card3_heading', $aboutUsPage->whychoose_card3_heading ?? '') }}">
                                </div>
                                @if(!empty($aboutUsPage->whychoose_card3_icon) && file_exists(storage_path('app/public/' . $aboutUsPage->whychoose_card3_icon)))
                                <div class="col-md-12 mb-3">
                                    <div class="current-icon">
                                        <p>Current Icon:</p>
                                        <div class="icon-preview">
                                            <img src="{{ asset('storage/' . $aboutUsPage->whychoose_card3_icon) }}" alt="Current icon">
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    {{-- About Us Section Tab --}}
                    <div class="tab-pane fade" id="aboutus" role="tabpanel">
                        <div class="card-section">
                            <h6 class="mb-3">About Us Section</h6>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label>Heading</label>
                                    <input type="text" name="aboutus_heading" class="form-control" value="{{ old('aboutus_heading', $aboutUsPage->aboutus_heading ?? '') }}">
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label>Paragraph</label>
                                    <textarea name="aboutus_paragraph" rows="4" class="form-control">{{ old('aboutus_paragraph', $aboutUsPage->aboutus_paragraph ?? '') }}</textarea>
                                </div>

                                {{-- Card 1 --}}
                                <div class="col-md-4 mb-3">
                                    <label>Card 1 - Icon Image</label>
                                    <input type="file" name="aboutus_card1_icon" class="form-control" accept="image/*">
                                    <small class="text-muted">Recommended size: 64x64px</small>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>Card 1 - Heading</label>
                                    <input type="text" name="aboutus_card1_heading" class="form-control" value="{{ old('aboutus_card1_heading', $aboutUsPage->aboutus_card1_heading ?? '') }}">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>Card 1 - Paragraph</label>
                                    <textarea name="aboutus_card1_paragraph" rows="3" class="form-control">{{ old('aboutus_card1_paragraph', $aboutUsPage->aboutus_card1_paragraph ?? '') }}</textarea>
                                </div>
                                @if(!empty($aboutUsPage->aboutus_card1_icon) && file_exists(storage_path('app/public/' . $aboutUsPage->aboutus_card1_icon)))
                                <div class="col-md-12 mb-3">
                                    <div class="current-icon">
                                        <p>Current Icon:</p>
                                        <div class="icon-preview">
                                            <img src="{{ asset('storage/' . $aboutUsPage->aboutus_card1_icon) }}" alt="Current icon">
                                        </div>
                                    </div>
                                </div>
                                @endif

                                {{-- Card 2 --}}
                                <div class="col-md-4 mb-3">
                                    <label>Card 2 - Icon Image</label>
                                    <input type="file" name="aboutus_card2_icon" class="form-control" accept="image/*">
                                    <small class="text-muted">Recommended size: 64x64px</small>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>Card 2 - Heading</label>
                                    <input type="text" name="aboutus_card2_heading" class="form-control" value="{{ old('aboutus_card2_heading', $aboutUsPage->aboutus_card2_heading ?? '') }}">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>Card 2 - Paragraph</label>
                                    <textarea name="aboutus_card2_paragraph" rows="3" class="form-control">{{ old('aboutus_card2_paragraph', $aboutUsPage->aboutus_card2_paragraph ?? '') }}</textarea>
                                </div>
                                @if(!empty($aboutUsPage->aboutus_card2_icon) && file_exists(storage_path('app/public/' . $aboutUsPage->aboutus_card2_icon)))
                                <div class="col-md-12 mb-3">
                                    <div class="current-icon">
                                        <p>Current Icon:</p>
                                        <div class="icon-preview">
                                            <img src="{{ asset('storage/' . $aboutUsPage->aboutus_card2_icon) }}" alt="Current icon">
                                        </div>
                                    </div>
                                </div>
                                @endif

                                {{-- Card 3 --}}
                                <div class="col-md-4 mb-3">
                                    <label>Card 3 - Icon Image</label>
                                    <input type="file" name="aboutus_card3_icon" class="form-control" accept="image/*">
                                    <small class="text-muted">Recommended size: 64x64px</small>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>Card 3 - Heading</label>
                                    <input type="text" name="aboutus_card3_heading" class="form-control" value="{{ old('aboutus_card3_heading', $aboutUsPage->aboutus_card3_heading ?? '') }}">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>Card 3 - Paragraph</label>
                                    <textarea name="aboutus_card3_paragraph" rows="3" class="form-control">{{ old('aboutus_card3_paragraph', $aboutUsPage->aboutus_card3_paragraph ?? '') }}</textarea>
                                </div>
                                @if(!empty($aboutUsPage->aboutus_card3_icon) && file_exists(storage_path('app/public/' . $aboutUsPage->aboutus_card3_icon)))
                                <div class="col-md-12 mb-3">
                                    <div class="current-icon">
                                        <p>Current Icon:</p>
                                        <div class="icon-preview">
                                            <img src="{{ asset('storage/' . $aboutUsPage->aboutus_card3_icon) }}" alt="Current icon">
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    {{-- Services & Work Tab --}}
                    <div class="tab-pane fade" id="services" role="tabpanel">
                        <div class="card-section">
                            <h6 class="mb-3">Our Services Section</h6>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label>Heading</label>
                                    <input type="text" name="ourservice_heading" class="form-control" value="{{ old('ourservice_heading', $aboutUsPage->ourservice_heading ?? '') }}">
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label>Paragraph</label>
                                    <textarea name="ourservice_paragraph" rows="4" class="form-control">{{ old('ourservice_paragraph', $aboutUsPage->ourservice_paragraph ?? '') }}</textarea>
                                </div>
                            </div>

                            <h6 class="mb-3 mt-4">Our Work Section</h6>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label>Heading</label>
                                    <input type="text" name="ourwork_heading" class="form-control" value="{{ old('ourwork_heading', $aboutUsPage->ourwork_heading ?? '') }}">
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label>Paragraph</label>
                                    <textarea name="ourwork_paragraph" rows="4" class="form-control">{{ old('ourwork_paragraph', $aboutUsPage->ourwork_paragraph ?? '') }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Mission Tab --}}
                    <div class="tab-pane fade" id="mission" role="tabpanel">
                        <div class="card-section">
                            <h6 class="mb-3">Our Mission Section</h6>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label>Heading</label>
                                    <input type="text" name="ourmission_heading" class="form-control" value="{{ old('ourmission_heading', $aboutUsPage->ourmission_heading ?? '') }}">
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label>Paragraph</label>
                                    <textarea id="summernote" name="ourmission_paragraph" rows="6" class="form-control">{{ old('ourmission_paragraph', $aboutUsPage->ourmission_paragraph ?? '') }}</textarea>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label>Our Mission Image 1</label>
                                    <input type="file" name="our_mission_img1" class="form-control" accept="image/*">
                                    <small class="text-muted">Recommended size (width=270px, height:300px)</small>
                                </div>

                                @if(!empty($aboutUsPage->our_mission_img1))
                                    <div class="col-md-12 mb-3">
                                        <label>Our Mission Image 1</label><br>
                                        <img src="{{ asset('storage/' . $aboutUsPage->our_mission_img1) }}" style="max-height:120px; border-radius:8px;">
                                    </div>
                                @endif

                                <div class="col-md-12 mb-3">
                                    <label>Our Mission Image 2</label>
                                    <input type="file" name="our_mission_img2" class="form-control" accept="image/*">
                                    <small class="text-muted">Recommended size (width=270px, height:300px)</small>
                                </div>

                                @if(!empty($aboutUsPage->our_mission_img2))
                                    <div class="col-md-6 mb-3">
                                        <label>Our Mission Image 2</label><br>
                                        <img src="{{ asset('storage/' . $aboutUsPage->our_mission_img2) }}" style="max-height:120px; border-radius:8px;">
                                    </div>
                                @endif

                                <div class="col-md-12 mb-3">
                                    <label>Our Mission Image 3</label>
                                    <input type="file" name="our_mission_img3" class="form-control" accept="image/*">
                                    <small class="text-muted">Recommended size (width=570px, height:312px)</small>
                                </div>

                                @if(!empty($aboutUsPage->our_mission_img3))
                                    <div class="col-md-6 mb-3">
                                        <label>Our Mission Image 3</label><br>
                                        <img src="{{ asset('storage/' . $aboutUsPage->our_mission_img3) }}" style="max-height:120px; border-radius:8px;">
                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Update All Settings</button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 300,
            placeholder: 'Write your mission content here...',
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['picture']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
            callbacks: {
                onImageUpload: function(files) {
                    for (let i = 0; i < files.length; i++) {
                        console.log('Image uploaded:', files[i]);
                    }
                }
            }
        });
    });
    @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session("success") }}',
            timer: 3000,
            showConfirmButton: false
        });
    @endif
</script>
@endsection