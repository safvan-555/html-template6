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

<div class="projects-section-area sp1">
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
                        <!-- <a href="{{ route('project.show', $project->id) }}"><i class="fa-solid fa-arrow-right"></i></a> -->
                        <a href="#">{{ $project->heading }}</a>
                    </div>
                    <div class="arrow">
                        <!-- <a href="{{ route('project.show', $project->id) }}"><i class="fa-solid fa-arrow-right"></i></a> -->
                        <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
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
                                <a href="contact.html" class="header-btn1">
                                    <img src="{{ asset('assets/img/icons/logo-icon1.svg') }}" alt="" class="elements15">

                                    Schedule A Consulation</a>
                                <a href="contact.html" class="header-btn1 btn2"><img
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


@endsection