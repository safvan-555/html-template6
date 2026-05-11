@extends('layouts.app')

@section('title', $pageData->meta_title ?? 'Projects - Crystal Craft')
@section('meta_description', $pageData->meta_description ?? '')
@section('body-class', 'homepage3-body')
@section('content')

<style>
.inner-header-section-area {
    background-image: url('{{ asset('storage/' . $pageData->banner) }}');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    padding: 280px 0 80px;
    overflow: hidden;
    position: relative;
}

/* Image Modal Styles */
.image-modal {
    display: none;
    position: fixed;
    z-index: 9999;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.95);
    backdrop-filter: blur(10px);
    animation: modalFadeIn 0.3s ease;
}

@keyframes modalFadeIn {
    from {
        opacity: 0;
    }

    to {
        opacity: 1;
    }
}

.modal-content-wrapper {
    position: relative;
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.modal-close {
    position: absolute;
    top: 30px;
    right: 50px;
    color: white;
    font-size: 45px;
    font-weight: bold;
    cursor: pointer;
    transition: all 0.3s ease;
    z-index: 10000;
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.1);
}

.modal-close:hover {
    transform: rotate(90deg);
    background: rgba(255, 255, 255, 0.2);
}

.modal-image-container {
    max-width: 90%;
    max-height: 80vh;
    overflow: hidden;
    border-radius: 20px;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
    animation: modalZoomIn 0.4s ease;
}

@keyframes modalZoomIn {
    from {
        transform: scale(0.8);
        opacity: 0;
    }

    to {
        transform: scale(1);
        opacity: 1;
    }
}

#modalImage {
    max-width: 100%;
    max-height: 80vh;
    object-fit: contain;
    display: block;
}

.modal-caption {
    color: white;
    text-align: center;
    padding: 20px;
    font-size: 18px;
    margin-top: 20px;
    background: rgba(0, 0, 0, 0.7);
    border-radius: 50px;
    backdrop-filter: blur(5px);
}

.modal-nav {
    position: absolute;
    width: 100%;
    top: 50%;
    transform: translateY(-50%);
    display: flex;
    justify-content: space-between;
    padding: 0 50px;
    pointer-events: none;
}

.modal-prev,
.modal-next {
    pointer-events: auto;
    background: rgba(255, 255, 255, 0.2);
    border: none;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    color: white;
    font-size: 24px;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    backdrop-filter: blur(5px);
}

.modal-prev:hover,
.modal-next:hover {
    background: rgba(255, 255, 255, 0.4);
    transform: scale(1.1);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .modal-close {
        top: 20px;
        right: 20px;
        font-size: 35px;
        width: 40px;
        height: 40px;
    }

    .modal-nav {
        padding: 0 20px;
    }

    .modal-prev,
    .modal-next {
        width: 45px;
        height: 45px;
        font-size: 18px;
    }

    .modal-caption {
        font-size: 14px;
        padding: 12px 20px;
        margin: 15px 20px;
    }
}

/* Loading animation */
.modal-loading {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 50px;
    height: 50px;
    border: 3px solid rgba(255, 255, 255, 0.3);
    border-top: 3px solid white;
    border-radius: 50%;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% {
        transform: translate(-50%, -50%) rotate(0deg);
    }

    100% {
        transform: translate(-50%, -50%) rotate(360deg);
    }
}
</style>


<div class="inner-header-section-area">
    <div class="elements2">
        <img src="{{ asset('assets/img/elements/elements2.png') }}" alt="" class="elements15" />
    </div>
    <div class="elements4">
        <img src="{{ asset('assets/img/elements/elements4.png') }}" alt="" class="elements15" />
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="inner-page-header heading1 text-center">
                    <h1>{{ $pageData->heading ?? 'Latest Our Projects' }}</h1>
                    <a href="{{ route('home') }}">Home <i class="fa-solid fa-angle-right"></i> <span>
                            {{ $pageData->heading ?? 'Latest Our Projects' }}</span></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="projects-section-area sp1">
    <div class="container">
        <div class="row">
            @forelse($projects as $project)
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="{{ 800 + ($loop->index * 200) }}">
                <div class="gallery-boxarea {{ $loop->first ? 'active' : '' }}">
                    <div class="img1">
                        @if($project->card_image)
                        <img src="{{ asset('storage/' . $project->card_image) }}" alt="{{ $project->heading }}"
                            class="elements15" />
                        @else
                        <img src="https://html.vikinglab.agency/poolwash/assets/img/all-images/gallery/gallery-img6.png"
                            alt="{{ $project->heading }}" class="elements15" />
                        @endif
                    </div>
                    <div class="text-area">
                        <p>{{ $project->service->name ?? 'Cleaning & Services' }}</p>
                        <a href="{{ route('project.show', $project->id) }}"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <div class="arrow">
                        <a href="{{ route('project.show', $project->id) }}"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <div class="text-center">
                    <p>No projects found.</p>
                </div>
            </div>
            @endforelse

            <div class="space18"></div>
            <div class="col-lg-12">
                {{ $projects->links('pagination::custom') }}
            </div>

        </div>
    </div>
</div> -->

<div class="projects-section-area sp1">
    <div class="container">
        <div class="row">
            @forelse($projects as $project)
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="{{ 800 + ($loop->index * 200) }}">
                <div class="gallery-boxarea" data-project-index="{{ $loop->index }}">
                    <div class="img1">
                        @if($project->card_image)
                        <img src="{{ asset('storage/' . $project->card_image) }}" alt="{{ $project->heading }}"
                            class="elements15 project-card-image"
                            data-project-image="{{ asset('storage/' . $project->card_image) }}" />
                        @else
                        <img src="https://html.vikinglab.agency/poolwash/assets/img/all-images/gallery/gallery-img6.png"
                            alt="{{ $project->heading }}" class="elements15 project-card-image"
                            data-project-image="https://html.vikinglab.agency/poolwash/assets/img/all-images/gallery/gallery-img6.png" />
                        @endif
                    </div>
                    <div class="text-area">
                        <p>{{ $project->service->name ?? 'Cleaning & Services' }}</p>
                        <a href="#">{{ $project->heading }}</a>
                    </div>
                    <div class="arrow">
                        <a href="javascript:void(0);" class="open-image-modal"
                            data-image="{{ asset('storage/' . $project->card_image) }}"
                            data-caption="{{ $project->heading }}" data-project-id="{{ $project->id }}">
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            @empty
            @endforelse
        </div>

    </div>
</div>

<div class="cta1-section-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="cta-main-area">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="cta-header heading1">
                                <h2 class="text-anime-style-3">Make Your Pool Sparkle Reach Out Today</h2>
                                <p>Ready to experience the best in pool care? Don’t wait! Get your free quote today and
                                    see how we can transform.</p>
                                <a href="{{ route('contact') }}" class="header-btn1">
                                    <img src="{{ asset('assets/img/icons/logo-icon1.svg') }}" alt="" class="elements15">

                                    Schedule A Consulation</a>
                                <a href="{{ route('contact') }}" class="header-btn1 btn2"><img
                                        src="{{ asset('assets/img/icons/logo-icon1.svg') }}" alt="" class="elements15">
                                    Contact Us</a>
                            </div>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-5">
                            <div class="images2">
                                <div class="img1 reveal">
                                    <img src="{{ asset('assets/img/all-images/cta/cta-img1.png') }}" alt="">
                                </div>
                                <div class="img2">
                                    <img src="{{ asset('assets/img/elements/elements5.png') }}" alt=""
                                        class="elements15">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Image Modal -->
<div id="imageModal" class="image-modal">
    <div class="modal-content-wrapper">
        <span class="modal-close">&times;</span>
        <div class="modal-image-container">
            <img id="modalImage" src="" alt="Enlarged Project Image">
        </div>
        <div class="modal-caption" id="modalCaption"></div>
        <!-- <div class="modal-nav">
            <button class="modal-prev" id="modalPrevBtn">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button class="modal-next" id="modalNextBtn">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div> -->
    </div>
</div>



<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get all modal elements
    const modal = document.getElementById('imageModal');
    const modalImg = document.getElementById('modalImage');
    const modalCaption = document.getElementById('modalCaption');
    const closeBtn = document.querySelector('.modal-close');
    
    let currentImageSrc = '';
    let currentCaption = '';
    
    // Function to open modal with specific image
    function openModal(imageSrc, caption) {
        if (!imageSrc) return;
        
        currentImageSrc = imageSrc;
        currentCaption = caption;
        
        // Clear previous image and show loading
        modalImg.style.opacity = '0';
        modalImg.src = '';
        modalCaption.textContent = 'Loading...';
        
        // Display modal
        modal.style.display = 'block';
        document.body.style.overflow = 'hidden';
        
        // Load new image
        const tempImg = new Image();
        tempImg.onload = function() {
            modalImg.src = imageSrc;
            modalCaption.textContent = caption;
            modalImg.style.opacity = '1';
            
            // Remove loader if exists
            const loader = modal.querySelector('.modal-loading');
            if (loader) {
                loader.remove();
            }
        };
        
        tempImg.onerror = function() {
            modalCaption.textContent = 'Failed to load image';
            const loader = modal.querySelector('.modal-loading');
            if (loader) {
                loader.remove();
            }
        };
        
        tempImg.src = imageSrc;
        
        // Add loading animation
        if (!modal.querySelector('.modal-loading')) {
            const loader = document.createElement('div');
            loader.className = 'modal-loading';
            modal.querySelector('.modal-content-wrapper').appendChild(loader);
        }
    }
    
    // Close modal function
    function closeModal() {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto';
        modalImg.src = '';
        modalCaption.textContent = '';
        
        // Remove loader if exists
        const loader = modal.querySelector('.modal-loading');
        if (loader) {
            loader.remove();
        }
    }
    
    // Add click event listeners to all open buttons
    document.querySelectorAll('.open-image-modal').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const imageSrc = this.getAttribute('data-image');
            const caption = this.getAttribute('data-caption');
            openModal(imageSrc, caption);
        });
    });
    
    // Close modal when clicking close button
    if (closeBtn) {
        closeBtn.addEventListener('click', closeModal);
    }
    
    // Close modal when clicking outside the image
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            closeModal();
        }
    });
    
    // Close modal with Escape key
    document.addEventListener('keydown', function(e) {
        if (modal.style.display === 'block' && e.key === 'Escape') {
            closeModal();
        }
    });
});
</script>

@endsection