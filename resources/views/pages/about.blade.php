@extends('layouts.app')

@section('title', $aboutData->meta_title ?? 'About Us - Crystal Craft')
@section('meta_description', $aboutData->meta_description ?? '')
@section('body-class', 'homepage3-body')
@section('content')

banner
<style>
.inner-header-section-area {
    background-image: url('{{ asset('storage/' . $aboutData->banner) }}');
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
                    <h1>{{ $aboutData->heading ?? 'About Us' }}</h1>
                    <a href="{{ route('home') }}">Home <i class="fa-solid fa-angle-right"></i> <span>
                            {{ $aboutData->heading ?? 'About Us' }}</span></a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="about1-section-area sp1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-auhtor-images">
                    <div class="img1">
                        <img src="{{ asset('assets/img/elements/elements6.png') }}" alt="">
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="row">
                                <div class="col-lg-12 col-md-6" data-aos="zoom-in" data-aos-duration="800">
                                    <div class="about-boxarea">
                                        <div class="icons">
                                            <img src="{{ asset('storage/' . $aboutData->whychoose_card1_icon) }}"
                                                alt="{{ $aboutData->whychoose_card1_heading }}">
                                        </div>
                                        <div class="space32"></div>
                                        <div class="text-area">
                                            <a href="#">{{ $aboutData->whychoose_card1_heading }}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="space30"></div>
                                <div class="col-lg-12 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                                    <div class="about-boxarea">
                                        <div class="icons">
                                            <img src="{{ asset('storage/' . $aboutData->whychoose_card2_icon) }}"
                                                alt="{{ $aboutData->whychoose_card2_heading }}">
                                        </div>
                                        <div class="space32"></div>
                                        <div class="text-area">
                                            <a href="#">{{ $aboutData->whychoose_card2_heading }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="row">
                                <div class="col-lg-12 col-md-6" data-aos="zoom-in" data-aos-duration="1200">
                                    <div class="about-boxarea box2">
                                        <div class="icons">
                                            <img src="{{ asset('storage/' . $aboutData->whychoose_card3_icon) }}"
                                                alt="{{ $aboutData->whychoose_card3_heading }}">
                                        </div>
                                        <div class="space32"></div>
                                        <div class="text-area">
                                            <a href="#">{{ $aboutData->whychoose_card3_heading }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-header-area heading2">
                    <h5 data-aos="fade-right" data-aos-duration="800">{{ $aboutData->whychoose_heading }}</h5>
                    <h2 class="text-anime-style-3">{{ $aboutData->whychoose_subheading }}</h2>
                    <p data-aos="fade-right" data-aos-duration="1000"> {{ $aboutData->whychoose_paragraph }}</p>
                    <!-- <div class="btn-area1" data-aos="fade-right" data-aos-duration="1200">
                        <a href="#" class="header-btn1">
                            <img src="{{ asset('assets/img/icons/logo-icon1.svg') }}" alt="">
                            About Us</a>
                        <a href="https://www.youtube.com/watch?v=Y8XpQpW5OVY" class="play popup-youtube">
                            <span class="icon"><i class="fa-solid fa-play"></i></span>
                            <span class="text">How We Work</span>
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>



<div class="about-inner-section-area sp2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-inner-header heading2">
                    <h5>About Us Crystal Craft</h5>
                    <h2>{{ $aboutData->aboutus_heading }}</h2>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <div class="heading2 text">
                    <p>{{ $aboutData->aboutus_paragraph }}</p>
                    <div class="space24"></div>
                    <!-- <div class="btn-area1">
                        <a href="#" class="header-btn1">
                            <img src="{{ asset('assets/img/icons/logo-icon1.svg') }}" alt="">
                            About Us</a>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="about-boxarea">
                    <div class="icons">
                        <img src="{{ asset('storage/' . $aboutData->aboutus_card1_icon) }}"
                            alt="{{ $aboutData->aboutus_card1_icon }}">
                    </div>
                    <div class="space24"></div>
                    <a href="#">{{ $aboutData->aboutus_card1_heading }}</a>
                    <div class="space16"></div>
                    <p> {{ $aboutData->aboutus_card1_paragraph }}</p>
                    <div class="space24"></div>
                    <a href="#" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="about-boxarea">
                    <div class="icons">
                        <img src="{{ asset('storage/' . $aboutData->aboutus_card2_icon) }}"
                            alt="{{ $aboutData->aboutus_card2_icon }}">
                    </div>
                    <div class="space24"></div>
                    <a href="#">{{ $aboutData->aboutus_card2_heading }}</a>
                    <div class="space16"></div>
                    <p> {{ $aboutData->aboutus_card2_paragraph }}</p>
                    <div class="space24"></div>
                    <a href="#" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="about-boxarea">
                    <div class="icons">
                        <img src="{{ asset('storage/' . $aboutData->aboutus_card3_icon) }}"
                            alt="{{ $aboutData->aboutus_card3_icon }}">
                    </div>
                    <div class="space24"></div>
                    <a href="#">{{ $aboutData->aboutus_card3_heading }}</a>
                    <div class="space16"></div>
                    <p> {{ $aboutData->aboutus_card2_paragraph }}</p>
                    <div class="space24"></div>
                    <a href="#" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="service-inner-section-area sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="service-header text-center heading2">
                    <h5 data-aos="fade-left" data-aos-duration="800">Our Service Crystal Craft</h5>
                    <h2 class="text-anime-style-3">{{ $aboutData->ourservice_heading }}</h2>
                    <p data-aos="fade-left" data-aos-duration="1000">{{ $aboutData->ourservice_paragraph }}</p>
                </div>
            </div>
        </div>

        <div class="row">

            @foreach($moreServices as $service)
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="800">
                <div class="service-boxarea">
                    <div class="img1 image-anime">

                        <img src="{{ $service->card_banner ? asset('storage/' . $service->card_banner) : 'https://html.vikinglab.agency/poolwash/assets/img/all-images/service/service-img4.png' }}"
                            alt="{{ $service->card_heading }}">
                    </div>
                    <div class="content-area">
                        <div class="icons">
                            <img src="{{ $service->card_icon ? asset('storage/' . $service->card_icon) : asset('assets/img/icons/service-icon10.svg') }}"
                                alt="">
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
    </div>
</div>



<div class="work-inner-section-area sp1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="work-header heading2">
                    <h5 data-aos="fade-right" data-aos-duration="800">Latest Work Crystal Craft</h5>
                    <h2 class="text-anime-style-3">{{ $aboutData->ourwork_heading }}</h2>
                    <p data-aos="fade-right" data-aos-duration="1000">{{ $aboutData->ourwork_paragraph }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="work-slider-area owl-carousel">

                    @foreach($moreProjects as $project)
                    <div class="work-boxarea">
                        <div class="img1 image-anime reveal">
                            <img src="{{ $project->card_image ? asset('storage/' . $project->card_image) : asset('assets/img/icons/service-icon10.svg') }}"
                                alt="">
                        </div>
                        <div class="content-area">
                            <div class="icons">
                                <a href="{{ route('project.show', $project->id) }}">
                                    <img src="{{ asset('assets/img/icons/arrow1.svg') }}" alt="">
                                </a>
                            </div>
                            <div class="space24"></div>
                            <p>{{ $project->service->name ?? 'Cleaning & Services' }}</p>
                            <div class="space16"></div>
                            <a href="{{ route('project.show', $project->id) }}">{{ $project->heading }}</a>
                            <div class="img2">
                                <img src="{{ asset('assets/img/elements/elements9.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>




<div class="abut-mission-area sp1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="img1 reveal image-anime">
                            <img src="{{ asset('storage/' . $aboutData->our_mission_img1) }}"
                                alt="{{ $aboutData->our_mission_img1 }}">
                        </div>
                        <div class="space30"></div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="img1 reveal image-anime">
                            <img src="{{ asset('storage/' . $aboutData->our_mission_img2) }}"
                                alt="{{ $aboutData->our_mission_img2 }}">
                        </div>
                        <div class="space30"></div>
                    </div>
                </div>
                <div class="img1 reveal image-anime">
                    <img src="{{ asset('storage/' . $aboutData->our_mission_img3) }}"
                        alt="{{ $aboutData->our_mission_img3 }}">
                </div>
                <div class="space30 d-lg-none d-block"></div>
            </div>

            <div class="col-lg-6">
                <div class="about-mission-header heading2">
                    <h5>Our Mision Crystal Craft</h5>
                    <h2>{{ $aboutData->ourmission_heading }} </h2>
                    <div class="space32"></div>
                    {!! $aboutData->ourmission_paragraph !!}
                    <div class="space32"></div>
                    <!-- <div class="btn-area1">
                        <a href="#" class="header-btn1">
                            <img src="{{ asset('assets/img/icons/logo-icon1.svg') }}" alt="">
                            Our Mission</a>
                    </div> -->
                </div>
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