@extends('layouts.app')

@section('title', $project->meta_title ?? 'Projects - Crystal Craft')
@section('meta_description', $project->meta_description ?? '')
@section('body-class', 'homepage3-body')
@section('content')

<style>
.inner-header-section-area {
    background-image: url('{{ asset('storage/' . $project->banner) }}');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    padding: 280px 0 80px;
    overflow: hidden;
    position: relative;
}
</style>

<div class="inner-header-section-area">
    <div class="elements2">
        <img src="{{ asset('assets/img/elements/elements2.png') }}" alt="" />
    </div>
    <div class="elements4">
        <img src="{{ asset('assets/img/elements/elements4.png') }}" alt="" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="inner-page-header heading1 text-center">
                    <h1>{{ $project->heading ?? 'Crafting Pool Perfection' }}</h1>
                    <a href="{{ route('home') }}">Home <i class="fa-solid fa-angle-right"></i> <span>
                            {{ $project->heading ?? 'Crafting Pool Perfection' }}</span></a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="projects-single-area sp1">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="single-section-area heading2 padding-left">
                    {!! $project->description !!}
                </div>
            </div>
        </div>
    </div>
</div>



<div class="projects-section-area sp2 bg1">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 m-auto">
                <div class="heading2 text-center">
                    <h2 class="m-0">More Projects</h2>
                </div>
                <div class="space60 d-lg-block d-none"></div>
                <div class="space30 d-lg-none d-block"></div>
            </div>
        </div>
        <div class="row">
            @forelse($moreProjects as $index => $moreProject)
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="{{ 800 + ($index * 200) }}">
                <div class="gallery-boxarea {{ $loop->first ? 'active' : '' }}">
                    <div class="img1">
                        <img src="{{ $moreProject->card_image ? asset('storage/' . $moreProject->card_image) : asset('assets/img/all-images/gallery/gallery-img6.png') }}"
                            alt="{{ $moreProject->heading ?? 'Project Image' }}">
                    </div>
                    <div class="text-area">
                        <p>{{ $moreProject->service->name ?? 'Cleaning & Services' }}</p>
                        <a
                            href="{{ route('project.show', $moreProject->id) }}">{{ $moreProject->heading ?? 'Crafting Pool Perfection' }}</a>
                    </div>
                    <div class="arrow">
                        <a href="{{ route('project.show', $moreProject->id) }}"><i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center">
                <p>No more projects available.</p>
            </div>
            @endforelse
        </div>
    </div>
</div>




<div class="space100 d-lg-block d-none"></div>
<div class="space50 d-lg-none d-block"></div>
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
                                <a href="contact.html" class="header-btn1">
                                    <img src="{{ asset('assets/img/icons/logo-icon1.svg') }}" alt="">
                                    Schedule A Consulation</a>
                                <a href="contact.html" class="header-btn1 btn2"><img
                                        src="{{ asset('assets/img/icons/logo-icon1.svg') }}" alt=""> Contact Us</a>
                            </div>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-5">
                            <div class="images2">
                                <div class="img1 reveal">
                                    <img src="{{ asset('assets/img/all-images/cta/cta-img1.png') }}" alt="">
                                </div>
                                <div class="img2">
                                    <img src="{{ asset('assets/img/elements/elements5.png') }}" alt="keyframe5">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection