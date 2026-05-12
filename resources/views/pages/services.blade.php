@extends('layouts.app')

@section('title', $pageData->meta_title ?? 'Services - Crystal Craft')
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
        <img src="{{ asset('assets/img/elements/elements2.png') }}" alt="">
    </div>
    <div class="elements4">
        <img src="{{ asset('assets/img/elements/elements4.png') }}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 m-auto">
                <div class="inner-page-header heading1 text-center">
                    <h1>{{ $pageData->title ?? 'Our Services' }}</h1>
                    <a href="{{ route('home') }}">Home <i class="fa-solid fa-angle-right"></i> <span> Our Services
                        </span></a>
                </div>
            </div>
        </div>
    </div>
</div>



<!--===== SERVICE AREA STARTS =======-->
<div class="service-inner-section-area sp1">
    <div class="container">
        <div class="row">
            @foreach($services as $service)
            <div class="col-lg-4 col-md-6">
                <div class="service-boxarea">
                    <div class="img1 image-anime">
                        <img src="{{ $service->card_banner ? asset('storage/' . $service->card_banner) : 'https://html.vikinglab.agency/poolwash/assets/img/all-images/service/service-img4.png' }}"
                            alt="{{ $service->card_heading }}">
                    </div>
                    <div class="content-area">
                        <div class="icons">
                            <img src="{{ $service->card_icon ? asset('storage/' . $service->card_icon) : asset('assets/img/icons/service-icon10.svg') }}" alt="">
                        </div>
                        <a href="{{ route('service.show', $service->id) }}">{{ $service->card_heading }}</a>
                        <div class="space16"></div>
                        <p>{{ Str::limit($service->card_description ?? $service->card_description, 100) }}</p>
                        <div class="space24"></div>
                        <a href="{{ route('service.show', $service->id) }}" class="readmore">Read More <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        @if($services->hasPages())
        <div class="row">
            <div class="col-lg-12">
                {{ $services->links('pagination::custom') }}
            </div>
        </div>
        @endif
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
                                    <img src="{{ asset('assets/img/icons/logo-icon1.svg') }}" alt="">

                                    Schedule A Consulation</a>
                                <a href="{{ route('contact') }}" class="header-btn1 btn2">
                                    <img src="{{ asset('assets/img/icons/logo-icon1.svg') }}" alt="">
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
                                    <img src="{{ asset('assets/img/elements/elements5.png') }}" alt="">
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