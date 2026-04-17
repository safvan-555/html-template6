@extends('layouts.app')

@section('title', 'About Us - PoolWash')
@section('body-class', 'homepage3-body')

@section('content')
    <!--===== BREADCRUMB AREA STARTS =======-->
    <div class="breadcrumb-section-area" style="background: #f5f5f5; padding: 120px 0 60px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="text-anime-style-3" style="font-size: 48px; margin-bottom: 20px;">About Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center" style="background: transparent; padding: 0;">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}" style="color: #007bff;">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page" style="color: #6c757d;">About Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--===== BREADCRUMB AREA ENDS =======-->

    <!--===== ABOUT CONTENT STARTS =======-->
    <div class="about3-section-area sp1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="images reveal image-anime">
                        <img src="{{ asset('assets/img/all-images/about/about-img3.png') }}" alt="About PoolWash" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about3-header heading6">
                        <h5 data-aos="fade-left" data-aos-duration="800">
                            About Poolwash
                        </h5>
                        <h2 class="text-anime-style-3">
                            We Provide Premium Pool Cleaning Services
                        </h2>
                        <p data-aos="fade-left" data-aos-duration="1000">
                            From routine maintenance to complex repairs, we handle every aspect of pool care 
                            with precision and care. Choose us for your pool needs & experience the difference 
                            that comes with professional expertise.
                        </p>
                        <div class="space32"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="counter-box" data-aos="fade-up" data-aos-duration="800">
                                    <h2 class="counter" style="font-size: 36px; font-weight: 700; color: #007bff;">500+</h2>
                                    <p>Happy Clients</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="counter-box" data-aos="fade-up" data-aos-duration="900">
                                    <h2 class="counter" style="font-size: 36px; font-weight: 700; color: #007bff;">1000+</h2>
                                    <p>Projects Completed</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="counter-box" data-aos="fade-up" data-aos-duration="1000">
                                    <h2 class="counter" style="font-size: 36px; font-weight: 700; color: #007bff;">10+</h2>
                                    <p>Years Experience</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="counter-box" data-aos="fade-up" data-aos-duration="1100">
                                    <h2 class="counter" style="font-size: 36px; font-weight: 700; color: #007bff;">24/7</h2>
                                    <p>Support Available</p>
                                </div>
                            </div>
                        </div>
                        <div class="space32"></div>
                        <div data-aos="fade-left" data-aos-duration="1200">
                            <a href="{{ route('contact') }}" class="header-btn3">
                                <img src="{{ asset('assets/img/icons/logo-icon3.svg') }}" alt="" /> Contact Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== ABOUT CONTENT ENDS =======-->

    <!--===== WHY CHOOSE US STARTS =======-->
    <div class="service3-section-area sp1" style="background: #f9f9f9;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="heading6 text-center">
                        <h5>Why Choose Us</h5>
                        <h2 class="text-anime-style-3">What Makes Us Different</h2>
                        <p>We pride ourselves on delivering exceptional service and results</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="800">
                    <div class="service-boxarea">
                        <div class="icons">
                            <img src="{{ asset('assets/img/icons/service-icon3.svg') }}" alt="" />
                        </div>
                        <div class="space24"></div>
                        <div class="content-area">
                            <a href="#">Expert Technicians</a>
                            <div class="space16"></div>
                            <p>Our team is fully trained and certified in all aspects of pool maintenance and repair.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="900">
                    <div class="service-boxarea">
                        <div class="icons">
                            <img src="{{ asset('assets/img/icons/service-icon4.svg') }}" alt="" />
                        </div>
                        <div class="space24"></div>
                        <div class="content-area">
                            <a href="#">Quality Products</a>
                            <div class="space16"></div>
                            <p>We use only the highest quality chemicals and equipment for your pool.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="service-boxarea">
                        <div class="icons">
                            <img src="{{ asset('assets/img/icons/service-icon5.svg') }}" alt="" />
                        </div>
                        <div class="space24"></div>
                        <div class="content-area">
                            <a href="#">Affordable Pricing</a>
                            <div class="space16"></div>
                            <p>Competitive rates without compromising on quality of service.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== WHY CHOOSE US ENDS =======-->

    <!--===== TEAM AREA STARTS =======-->
    <div class="team-section-area sp1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="heading6 text-center">
                        <h5>Our Team</h5>
                        <h2 class="text-anime-style-3">Meet Our Expert Team</h2>
                        <p>Dedicated professionals committed to keeping your pool pristine</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="800">
                    <div class="team-box text-center">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/all-images/testimonial/testimonial-img7.png') }}" alt="Team Member" style="border-radius: 50%; width: 200px; height: 200px; object-fit: cover;">
                        </div>
                        <div class="space16"></div>
                        <h4>John Smith</h4>
                        <p>Founder & CEO</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="900">
                    <div class="team-box text-center">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/all-images/testimonial/testimonial-img11.png') }}" alt="Team Member" style="border-radius: 50%; width: 200px; height: 200px; object-fit: cover;">
                        </div>
                        <div class="space16"></div>
                        <h4>Sarah Johnson</h4>
                        <p>Operations Manager</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1000">
                    <div class="team-box text-center">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/all-images/testimonial/testimonial-img12.png') }}" alt="Team Member" style="border-radius: 50%; width: 200px; height: 200px; object-fit: cover;">
                        </div>
                        <div class="space16"></div>
                        <h4>Mike Williams</h4>
                        <p>Lead Technician</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1100">
                    <div class="team-box text-center">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/all-images/testimonial/testimonial-img8.png') }}" alt="Team Member" style="border-radius: 50%; width: 200px; height: 200px; object-fit: cover;">
                        </div>
                        <div class="space16"></div>
                        <h4>Emily Brown</h4>
                        <p>Customer Support</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== TEAM AREA ENDS =======-->
@endsection