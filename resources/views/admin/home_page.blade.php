{{-- resources/views/admin/home_page/edit.blade.php --}}

@extends('admin.layouts.master')

@section('title', 'Edit Home Page')
@section('header', 'Edit Home Page')

@section('styles')
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
    width: 100px;
    height: 100px;
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

.image-preview {
    max-height: 120px;
    border-radius: 8px;
    margin-top: 10px;
}

.counter-row {
    background: white;
    padding: 15px;
    border-radius: 8px;
    margin-bottom: 15px;
    border: 1px solid #dee2e6;
}
</style>
@endsection

@section('content')
<div class="container-fluid">
    <div class="card shadow-sm">
        <div class="card-header">
            <h5 class="mb-0">Edit Home Page</h5>
        </div>

        <div class="card-body">
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <form action="{{ route('admin.home-page.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <ul class="nav nav-tabs mb-4" id="homePageTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="banner-tab" data-bs-toggle="tab" data-bs-target="#banner"
                            type="button" role="tab">Banner & Meta</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="whychoose-tab" data-bs-toggle="tab" data-bs-target="#whychoose"
                            type="button" role="tab">Why Choose Us</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="services-tab" data-bs-toggle="tab" data-bs-target="#services"
                            type="button" role="tab">Our Services</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="work-tab" data-bs-toggle="tab" data-bs-target="#work" type="button"
                            role="tab">Latest Work</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="counter-tab" data-bs-toggle="tab" data-bs-target="#counter"
                            type="button" role="tab">Counter Section</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="testimonial-tab" data-bs-toggle="tab" data-bs-target="#testimonial"
                            type="button" role="tab">Testimonials</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                            type="button" role="tab">Contact Section</button>
                    </li>
                </ul>

                <div class="tab-content" id="homePageTabsContent">

                    {{-- Banner & Meta Tab --}}
                    <div class="tab-pane fade show active" id="banner" role="tabpanel">
                        <div class="card-section">
                            <h6 class="mb-3">Meta Information</h6>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label>Meta Title</label>
                                    <input type="text" name="meta_title" class="form-control"
                                        value="{{ old('meta_title', $homePage->meta_title ?? '') }}">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label>Meta Description</label>
                                    <textarea name="meta_description" rows="3"
                                        class="form-control">{{ old('meta_description', $homePage->meta_description ?? '') }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="card-section">
                            <h6 class="mb-3">Banner Section</h6>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label>Chip/Badge Text</label>
                                    <input type="text" name="banner_chip" class="form-control"
                                        value="{{ old('banner_chip', $homePage->banner_chip ?? '') }}"
                                        placeholder="e.g., Welcome to Our Company">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label>Heading</label>
                                    <input type="text" name="banner_heading" class="form-control"
                                        value="{{ old('banner_heading', $homePage->banner_heading ?? '') }}">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label>Paragraph</label>
                                    <textarea name="banner_paragraph" rows="4"
                                        class="form-control">{{ old('banner_paragraph', $homePage->banner_paragraph ?? '') }}</textarea>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Banner Image</label>
                                    <input type="file" name="banner" class="form-control" accept="image/*">
                                    <small class="text-muted">Recommended size: 1920px x 800px</small>
                                </div>
                                @if(!empty($homePage->banner))
                                <div class="col-md-6 mb-3">
                                    <label>Current Banner</label><br>
                                    <img src="{{ asset('storage/' . $homePage->banner) }}" class="image-preview">
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
                                    <input type="text" name="whychoose_heading" class="form-control"
                                        value="{{ old('whychoose_heading', $homePage->whychoose_heading ?? '') }}">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label>Paragraph</label>
                                    <textarea name="whychoose_paragraph" rows="4"
                                        class="form-control">{{ old('whychoose_paragraph', $homePage->whychoose_paragraph ?? '') }}</textarea>
                                </div>
                            </div>

                            {{-- Card 1 --}}
                            <div class="counter-row">
                                <h6 class="mb-3">Card 1</h6>
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label>Card Image</label>
                                        <input type="file" name="whychoose_card1_image" class="form-control"
                                            accept="image/*">
                                        <small class="text-muted">Recommended size: 80x80px</small>
                                        @if(!empty($homePage->whychoose_card1_image))
                                        <div class="current-icon mt-2">
                                            <p>Current:</p>
                                            <div class="icon-preview">
                                                <img src="{{ asset('storage/' . $homePage->whychoose_card1_image) }}"
                                                    alt="Current icon">
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                 
                                </div>
                            </div>

                            

                            
                        </div>
                    </div>

                    {{-- Our Services Tab --}}
                    <div class="tab-pane fade" id="services" role="tabpanel">
                        <div class="card-section">
                            <h6 class="mb-3">Our Services Section</h6>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label>Heading</label>
                                    <input type="text" name="our_service_heading" class="form-control"
                                        value="{{ old('our_service_heading', $homePage->our_service_heading ?? '') }}">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label>Paragraph</label>
                                    <textarea name="our_service_paragraph" rows="4"
                                        class="form-control">{{ old('our_service_paragraph', $homePage->our_service_paragraph ?? '') }}</textarea>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Section Image</label>
                                    <input type="file" name="our_service_image" class="form-control" accept="image/*">
                                    <small class="text-muted">Recommended size: 600x400px</small>
                                </div>
                                @if(!empty($homePage->our_service_image))
                                <div class="col-md-6 mb-3">
                                    <label>Current Image</label><br>
                                    <img src="{{ asset('storage/' . $homePage->our_service_image) }}"
                                        class="image-preview">
                                </div>
                                @endif
                            </div>
                        </div>

                        {{-- Service Cards --}}
                        <div class="card-section">
                            <h6 class="mb-3">Service Cards</h6>

                            {{-- Service Card 1 --}}
                            <div class="counter-row">
                                <h6 class="mb-3">Service Card 1</h6>
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label>Card Image</label>
                                        <input type="file" name="our_service_card1_image" class="form-control"
                                            accept="image/*">
                                        <small class="text-muted">Recommended size: 80x80px</small>
                                        @if(!empty($homePage->our_service_card1_image))
                                        <div class="current-icon mt-2">
                                            <p>Current:</p>
                                            <div class="icon-preview">
                                                <img src="{{ asset('storage/' . $homePage->our_service_card1_image) }}"
                                                    alt="Current icon">
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="col-md-8 mb-3">
                                        <label>Heading</label>
                                        <input type="text" name="our_service_card1_heading" class="form-control"
                                            value="{{ old('our_service_card1_heading', $homePage->our_service_card1_heading ?? '') }}">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label>Paragraph</label>
                                        <textarea name="our_service_card1_paragraph" rows="3"
                                            class="form-control">{{ old('our_service_card1_paragraph', $homePage->our_service_card1_paragraph ?? '') }}</textarea>
                                    </div>
                                </div>
                            </div>

                            {{-- Service Card 2 --}}
                            <div class="counter-row">
                                <h6 class="mb-3">Service Card 2</h6>
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label>Card Image</label>
                                        <input type="file" name="our_service_card2_image" class="form-control"
                                            accept="image/*">
                                        <small class="text-muted">Recommended size: 80x80px</small>
                                        @if(!empty($homePage->our_service_card2_image))
                                        <div class="current-icon mt-2">
                                            <p>Current:</p>
                                            <div class="icon-preview">
                                                <img src="{{ asset('storage/' . $homePage->our_service_card2_image) }}"
                                                    alt="Current icon">
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="col-md-8 mb-3">
                                        <label>Heading</label>
                                        <input type="text" name="our_service_card2_heading" class="form-control"
                                            value="{{ old('our_service_card2_heading', $homePage->our_service_card2_heading ?? '') }}">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label>Paragraph</label>
                                        <textarea name="our_service_card2_paragraph" rows="3"
                                            class="form-control">{{ old('our_service_card2_paragraph', $homePage->our_service_card2_paragraph ?? '') }}</textarea>
                                    </div>
                                </div>
                            </div>

                            {{-- Service Card 3 --}}
                            <div class="counter-row">
                                <h6 class="mb-3">Service Card 3</h6>
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label>Card Image</label>
                                        <input type="file" name="our_service_card3_image" class="form-control"
                                            accept="image/*">
                                        <small class="text-muted">Recommended size: 80x80px</small>
                                        @if(!empty($homePage->our_service_card3_image))
                                        <div class="current-icon mt-2">
                                            <p>Current:</p>
                                            <div class="icon-preview">
                                                <img src="{{ asset('storage/' . $homePage->our_service_card3_image) }}"
                                                    alt="Current icon">
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="col-md-8 mb-3">
                                        <label>Heading</label>
                                        <input type="text" name="our_service_card3_heading" class="form-control"
                                            value="{{ old('our_service_card3_heading', $homePage->our_service_card3_heading ?? '') }}">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label>Paragraph</label>
                                        <textarea name="our_service_card3_paragraph" rows="3"
                                            class="form-control">{{ old('our_service_card3_paragraph', $homePage->our_service_card3_paragraph ?? '') }}</textarea>
                                    </div>
                                </div>
                            </div>

                            {{-- Service Card 4 --}}
                            <div class="counter-row">
                                <h6 class="mb-3">Service Card 4</h6>
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label>Card Image</label>
                                        <input type="file" name="our_service_card4_image" class="form-control"
                                            accept="image/*">
                                        <small class="text-muted">Recommended size: 80x80px</small>
                                        @if(!empty($homePage->our_service_card4_image))
                                        <div class="current-icon mt-2">
                                            <p>Current:</p>
                                            <div class="icon-preview">
                                                <img src="{{ asset('storage/' . $homePage->our_service_card4_image) }}"
                                                    alt="Current icon">
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="col-md-8 mb-3">
                                        <label>Heading</label>
                                        <input type="text" name="our_service_card4_heading" class="form-control"
                                            value="{{ old('our_service_card4_heading', $homePage->our_service_card4_heading ?? '') }}">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label>Paragraph</label>
                                        <textarea name="our_service_card4_paragraph" rows="3"
                                            class="form-control">{{ old('our_service_card4_paragraph', $homePage->our_service_card4_paragraph ?? '') }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Latest Work Tab --}}
                    <div class="tab-pane fade" id="work" role="tabpanel">
                        <div class="card-section">
                            <h6 class="mb-3">Latest Work Section</h6>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label>Heading</label>
                                    <input type="text" name="latest_work_heading" class="form-control"
                                        value="{{ old('latest_work_heading', $homePage->latest_work_heading ?? '') }}">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label>Paragraph</label>
                                    <textarea name="latest_work_paragraph" rows="4"
                                        class="form-control">{{ old('latest_work_paragraph', $homePage->latest_work_paragraph ?? '') }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Counter Section Tab --}}
                    <div class="tab-pane fade" id="counter" role="tabpanel">
                        <div class="card-section">
                            <h6 class="mb-3">Counter Banner</h6>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label>Background Image</label>
                                    <input type="file" name="counter_banner" class="form-control" accept="image/*">
                                    <small class="text-muted">Recommended size: 1920x400px</small>
                                </div>
                                @if(!empty($homePage->counter_banner))
                                <div class="col-md-6 mb-3">
                                    <label>Current Banner</label><br>
                                    <img src="{{ asset('storage/' . $homePage->counter_banner) }}"
                                        class="image-preview">
                                </div>
                                @endif
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <div class="counter-row">
                                        <label>Counter 1 Heading</label>
                                        <input type="text" name="counter1_heading" class="form-control mb-2"
                                            value="{{ old('counter1_heading', $homePage->counter1_heading ?? '') }}"
                                            placeholder="e.g., Happy Clients">
                                        <label>Counter 1 Value</label>
                                        <input type="text" name="counter1" class="form-control"
                                            value="{{ old('counter1', $homePage->counter1 ?? '') }}"
                                            placeholder="e.g., 500+">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="counter-row">
                                        <label>Counter 2 Heading</label>
                                        <input type="text" name="counter2_heading" class="form-control mb-2"
                                            value="{{ old('counter2_heading', $homePage->counter2_heading ?? '') }}"
                                            placeholder="e.g., Projects Done">
                                        <label>Counter 2 Value</label>
                                        <input type="text" name="counter2" class="form-control"
                                            value="{{ old('counter2', $homePage->counter2 ?? '') }}"
                                            placeholder="e.g., 1000+">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="counter-row">
                                        <label>Counter 3 Heading</label>
                                        <input type="text" name="counter3_heading" class="form-control mb-2"
                                            value="{{ old('counter3_heading', $homePage->counter3_heading ?? '') }}"
                                            placeholder="e.g., Years Experience">
                                        <label>Counter 3 Value</label>
                                        <input type="text" name="counter3" class="form-control"
                                            value="{{ old('counter3', $homePage->counter3 ?? '') }}"
                                            placeholder="e.g., 10+">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="counter-row">
                                        <label>Counter 4 Heading</label>
                                        <input type="text" name="counter4_heading" class="form-control mb-2"
                                            value="{{ old('counter4_heading', $homePage->counter4_heading ?? '') }}"
                                            placeholder="e.g., Awards Won">
                                        <label>Counter 4 Value</label>
                                        <input type="text" name="counter4" class="form-control"
                                            value="{{ old('counter4', $homePage->counter4 ?? '') }}"
                                            placeholder="e.g., 25+">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Testimonial Tab --}}
                    <div class="tab-pane fade" id="testimonial" role="tabpanel">
                        <div class="card-section">
                            <h6 class="mb-3">Testimonial Section</h6>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label>Heading</label>
                                    <input type="text" name="testimonial_heading" class="form-control"
                                        value="{{ old('testimonial_heading', $homePage->testimonial_heading ?? '') }}">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label>Paragraph</label>
                                    <textarea name="testimonial_paragraph" rows="4"
                                        class="form-control">{{ old('testimonial_paragraph', $homePage->testimonial_paragraph ?? '') }}</textarea>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Background Image</label>
                                    <input type="file" name="testimonial_banner" class="form-control" accept="image/*">
                                    <small class="text-muted">Recommended size: 1920x500px</small>
                                </div>
                                @if(!empty($homePage->testimonial_banner))
                                <div class="col-md-6 mb-3">
                                    <label>Current Banner</label><br>
                                    <img src="{{ asset('storage/' . $homePage->testimonial_banner) }}"
                                        class="image-preview">
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    {{-- Contact Section Tab --}}
                    <div class="tab-pane fade" id="contact" role="tabpanel">
                        <div class="card-section">
                            <h6 class="mb-3">Contact Section</h6>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label>Heading</label>
                                    <input type="text" name="contactus_heading" class="form-control"
                                        value="{{ old('contactus_heading', $homePage->contactus_heading ?? '') }}">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label>Paragraph</label>
                                    <textarea name="contactus_paragraph" rows="4"
                                        class="form-control">{{ old('contactus_paragraph', $homePage->contactus_paragraph ?? '') }}</textarea>
                                </div>
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

<script>
$(document).ready(function() {
    // Initialize Summernote for any textarea if needed
    $('.summernote').summernote({
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