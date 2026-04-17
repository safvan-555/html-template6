@extends('layouts.app')

@section('title', 'PoolWash - Pool Cleaning & Services')
@section('body-class', 'homepage3-body')

@section('content')
    <!--===== HERO AREA STARTS =======-->
    <div class="hero3-section-area">
        <img src="{{ asset('assets/img/elements/elements15.png') }}" alt="" class="elements15" />
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="hero4-header heading5">
                        <h5 data-aos="fade-up" data-aos-duration="800">
                            #01. Pool Cleaning & Services
                        </h5>
                        <h1 class="text-anime-style-3">
                            Pool Maintenance For Crystal Clear Enjoyment!
                        </h1>
                        <div class="space16"></div>
                        <p data-aos="fade-up" data-aos-duration="1000">
                            Trust us to handle the details so you can focus on what matters
                            most enjoying your pool to the fullest. Experience the ultimate
                            in pool cleanliness and care with Poolwash.
                        </p>
                        <div class="btn-area2" data-aos="fade-up" data-aos-duration="1200">
                            <a href="{{ route('quote') }}" class="header-btn3">
                                <img src="{{ asset('assets/img/icons/logo-icon3.svg') }}" alt="" /> Schedule A Service
                            </a>
                            <a href="{{ route('about') }}" class="header-btn3 btn2">
                                <img src="{{ asset('assets/img/icons/logo-icon3.svg') }}" alt="" /> Discover More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="auhtor-area">
            <div class="img1">
                <img src="{{ asset('assets/img/all-images/others/author-img2.png') }}" alt="" />
            </div>
            <div class="content">
                <p>Our Team Is Always Ready</p>
                <ul>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li>5.0</li>
                </ul>
            </div>
        </div>
    </div>
    <!--===== HERO AREA ENDS =======-->

    <!--===== ABOUT AREA STARTS =======-->
    <div class="about3-section-area sp1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="images reveal image-anime">
                        <img src="{{ asset('assets/img/all-images/about/about-img3.png') }}" alt="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about3-header heading6">
                        <h5 data-aos="fade-left" data-aos-duration="800">
                            Why Choose Us Poolwash
                        </h5>
                        <h2 class="text-anime-style-3">
                            Choosing Quality Why We're Your Top Pick
                        </h2>
                        <p data-aos="fade-left" data-aos-duration="1000">
                            From routine maintenance to complex repairs, we handle every
                            aspect of pool care with precision and care. Choose us for your
                            pool needs & experience the difference that comes.
                        </p>
                        <div class="space32"></div>
                        <div data-aos="fade-left" data-aos-duration="1200">
                            <a href="{{ route('about') }}" class="header-btn3">
                                <img src="{{ asset('assets/img/icons/logo-icon3.svg') }}" alt="" /> About Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== ABOUT AREA ENDS =======-->

    <!--===== SERVICE AREA STARTS =======-->
    <div class="service3-section-area sp1">
        <img src="{{ asset('assets/img/elements/elements16.png') }}" alt="" class="elements16" />
        <img src="{{ asset('assets/img/elements/elements17.png') }}" alt="" class="elements17" />
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="service-boxes-area">
                        <div class="row">
                            @php
                                $services = [
                                    ['icon' => 'service-icon3.svg', 'title' => 'Seasonal Pool Prep', 'desc' => 'Experience the ultimate in pool cleanliness with our Crystal Clear Pool Cleaning.'],
                                    ['icon' => 'service-icon4.svg', 'title' => 'Ultimate Pool Refresh', 'desc' => 'Ensuring sparkling clear water. Trust us to maintain a pristine environment.'],
                                    ['icon' => 'service-icon5.svg', 'title' => 'Precision Pool Repairs', 'desc' => 'Keep your pool safe and inviting with our Perfect Chemical Balancing.'],
                                    ['icon' => 'service-icon6.svg', 'title' => 'Algae-Free Assurance', 'desc' => 'Ensure your pool operates smoothly with our Expert Equipment Maintenance.']
                                ];
                            @endphp
                            @foreach($services as $index => $service)
                                <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-duration="{{ 800 + ($index * 100) }}">
                                    <div class="service-boxarea">
                                        <div class="icons">
                                            <img src="{{ asset('assets/img/icons/' . $service['icon']) }}" alt="" />
                                        </div>
                                        <div class="space24"></div>
                                        <div class="content-area">
                                            <a href="{{ route('services') }}">{{ $service['title'] }}</a>
                                            <div class="space16"></div>
                                            <p>{{ $service['desc'] }}</p>
                                            <div class="space24"></div>
                                            <a href="{{ route('services') }}" class="readmore">
                                                Read More <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    @if(!$loop->last && $loop->index < 1)
                                        <div class="space24"></div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="service3-header heading6">
                        <h5 data-aos="fade-left" data-aos-duration="800">
                            Our Service Us Poolwash
                        </h5>
                        <h2 class="text-anime-style-3">
                            Comprehensive Pool Care Luxury Pool Detailing
                        </h2>
                        <p data-aos="fade-left" data-aos-duration="1000">
                            Indulge in the ultimate pool pampering with our Luxury Pool Detailing service. 
                            We offer meticulous cleaning, polishing, & aesthetic enhancements to make your pool a stunning.
                        </p>
                        <div class="space40"></div>
                        <div class="images reveal image-anime">
                            <img src="{{ asset('assets/img/all-images/service/service-img3.png') }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== SERVICE AREA ENDS =======-->

    <!--===== PRICING AREA STARTS =======-->
    <div class="pricing-plan-section-area sp2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="pricing-header heading6 text-center">
                        <h5 data-aos="fade-left" data-aos-duration="800">
                            Pricing Plan Poolwash
                        </h5>
                        <h2 class="text-anime-style-3">Affordable Pool Care Packages</h2>
                        <p data-aos="fade-left" data-aos-duration="1000">
                            Explore our options & choose the plan that’s right for you.
                            Enjoy the peace of mind that comes with professional, reliable service at competitive rates.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <div class="plan-toggle-wrap">
                        <div class="toggle-inner">
                            <input id="ce-toggle" checked="" type="checkbox" />
                            <span class="custom-toggle"></span>
                            <div class="t-month">
                                <h4>Monthly</h4>
                            </div>
                            <div class="t-year">
                                <h4>Annual</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="tab-content">
                        <div id="monthly">
                            <div class="row">
                                @php
                                    $pricing = [
                                        ['name' => 'Starter', 'price' => '$59', 'desc' => 'Discover our flexible and affordable pricing plans tailored to meet.'],
                                        ['name' => 'Premium', 'price' => '$73', 'desc' => 'we understand that every pool is unique, which is why we offer.', 'active' => true],
                                        ['name' => 'Standard', 'price' => '$60', 'desc' => 'Packages designed fit any budget & requirement comprehensive care.']
                                    ];
                                @endphp
                                @foreach($pricing as $plan)
                                    <div class="col-lg-4 col-md-6" data-aos="flip-right" data-aos-duration="800">
                                        <div class="single-pricing-area {{ isset($plan['active']) && $plan['active'] ? 'active' : '' }}">
                                            <div class="pricing-box">
                                                <h3>{{ $plan['name'] }}</h3>
                                                <div class="space16"></div>
                                                <p>{{ $plan['desc'] }}</p>
                                                <div class="space32"></div>
                                                <h2>{{ $plan['price'] }} <span>/ Monthly </span></h2>
                                            </div>
                                            <div class="space32"></div>
                                            <ul>
                                                <li><img src="{{ asset('assets/img/icons/check-icon1.svg') }}" alt="" /> Installation of new device</li>
                                                <li><img src="{{ asset('assets/img/icons/check-icon1.svg') }}" alt="" /> Repairs for all pool</li>
                                                <li><img src="{{ asset('assets/img/icons/check-icon1.svg') }}" alt="" /> Water Quality Guarantee</li>
                                            </ul>
                                            <div class="space12"></div>
                                            <div class="btn-area1">
                                                <a href="{{ route('quote') }}" class="header-btn3">
                                                    <img src="{{ asset('assets/img/icons/logo-icon3.svg') }}" alt="" /> Get Started
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div id="yearly" style="display: none">
                            <div class="row">
                                @php
                                    $yearlyPricing = [
                                        ['name' => 'Starter', 'price' => '$99'],
                                        ['name' => 'Premium', 'price' => '$179', 'active' => true],
                                        ['name' => 'Standard', 'price' => '$159']
                                    ];
                                @endphp
                                @foreach($yearlyPricing as $plan)
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-pricing-area {{ isset($plan['active']) && $plan['active'] ? 'active' : '' }}">
                                            <div class="pricing-box">
                                                <h3>{{ $plan['name'] }}</h3>
                                                <div class="space16"></div>
                                                <p>Discover our flexible and affordable pricing plans tailored to meet.</p>
                                                <div class="space32"></div>
                                                <h2>{{ $plan['price'] }} <span>/ Monthly </span></h2>
                                            </div>
                                            <div class="space32"></div>
                                            <ul>
                                                <li><img src="{{ asset('assets/img/icons/check-icon1.svg') }}" alt="" /> Installation of new device</li>
                                                <li><img src="{{ asset('assets/img/icons/check-icon1.svg') }}" alt="" /> Repairs for all pool</li>
                                                <li><img src="{{ asset('assets/img/icons/check-icon1.svg') }}" alt="" /> Water Quality Guarantee</li>
                                            </ul>
                                            <div class="space12"></div>
                                            <div class="btn-area1">
                                                <a href="{{ route('quote') }}" class="header-btn3">
                                                    <img src="{{ asset('assets/img/icons/logo-icon3.svg') }}" alt="" /> Get Started
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== PRICING AREA ENDS =======-->

    <!--===== BRANDS AREA STARTS =======-->
    <div class="others3-section-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="heading6 text-center">
                        <h3 class="text-anime-style-3">
                            Join 4,000+ companies already growing
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-slider-area owl-carousel">
                        @for($i = 1; $i <= 7; $i++)
                            <div class="img1">
                                <img src="{{ asset('assets/img/elements/brand' . $i . '.png') }}" alt="" />
                            </div>
                        @endfor
                    </div>
                    <div class="space32"></div>
                    <div class="brand-slider-area1 owl-carousel">
                        @for($i = 8; $i <= 10; $i++)
                            <div class="img1">
                                <img src="{{ asset('assets/img/elements/brand' . $i . '.png') }}" alt="" />
                            </div>
                        @endfor
                        <div class="img1">
                            <img src="{{ asset('assets/img/elements/brand7.png') }}" alt="" />
                        </div>
                        <div class="img1">
                            <img src="{{ asset('assets/img/elements/brand3.png') }}" alt="" />
                        </div>
                        <div class="img1">
                            <img src="{{ asset('assets/img/elements/brand6.png') }}" alt="" />
                        </div>
                        <div class="img1">
                            <img src="{{ asset('assets/img/elements/brand1.png') }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="video-images-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="images-area">
                        <div class="image-anime reveal">
                            <img src="{{ asset('assets/img/all-images/others/others-img1.png') }}" alt="" />
                        </div>
                        <div class="play-btn">
                            <a href="https://www.youtube.com/watch?v=Y8XpQpW5OVY" class="popup-youtube">
                                <i class="fa-solid fa-play fa-fw"></i>
                            </a>
                        </div>
                        <div class="text">
                            <a href="https://www.youtube.com/watch?v=Y8XpQpW5OVY" class="popup-youtube">
                                Watch Our Working Video
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== BRANDS AREA ENDS =======-->

    <!--=====TESTIMONIAL START=======-->
    <div class="tes2 sp1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="heading6 text-center">
                        <h5 data-aos="fade-right" data-aos-duration="800">
                            Testimonial Poolwash
                        </h5>
                        <h2 class="text-anime-style-3">
                            Customer Reviews Words Of Praise
                        </h2>
                        <p data-aos="fade-right" data-aos-duration="1100">
                            These testimonials reflect our commitment to excellence & our dedication to making
                            every pool a pristine and enjoyable retreat. Experience the difference
                        </p>
                    </div>
                </div>
            </div>

            <div class="space60"></div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tes2-solider-parent" data-aos="fade-up" data-aos-duration="700">
                        @php
                            $testimonials = [
                                ['name' => 'Matthew C. Lansberry', 'role' => 'Pool Owner', 'img' => 'testimonial-img7.png'],
                                ['name' => 'Heinrich Kaasen', 'role' => 'Amazing Pool Owner', 'img' => 'testimonial-img11.png'],
                                ['name' => 'Keshav Maharaj', 'role' => 'Green Pool Owner', 'img' => 'testimonial-img12.png']
                            ];
                        @endphp
                        @foreach($testimonials as $testimonial)
                            <div class="tes2-parent-slider">
                                <div class="row align-items-center">
                                    <div class="col-lg-5">
                                        <div class="big-img">
                                            <div class="tes2-big-image img100 image-anime reveal">
                                                <img src="{{ asset('assets/img/all-images/testimonial/' . $testimonial['img']) }}" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="haddings">
                                            <div class="quito">
                                                <img src="{{ asset('assets/img/icons/quito3.svg') }}" alt="" />
                                            </div>
                                            <div class="hadding">
                                                <div class="star">
                                                    <ul>
                                                        @for($i = 0; $i < 5; $i++)
                                                            <li><i class="fa-solid fa-star"></i></li>
                                                        @endfor
                                                    </ul>
                                                </div>
                                                <div class="space32"></div>
                                                <p>
                                                    "I should be incapable of drawing a single stroke at the present moment; 
                                                    and yet I feel that I never was a greater artist than now. The lovely valley 
                                                    teems with vapour around me, and the meridian sun strikes the upper surface 
                                                    and but a few stray into the inner sanctuary, Although we are maritime lawyers."
                                                </p>
                                                <div class="space32"></div>
                                                <div class="tes-hadding">
                                                    <h4><a href="#">{{ $testimonial['name'] }}</a></h4>
                                                    <div class="space6"></div>
                                                    <p>{{ $testimonial['role'] }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="space80"></div>
            <div class="row">
                <div class="tes2-slider-bottom">
                    @foreach($testimonials as $index => $testimonial)
                        <div class="tes2-bottom">
                            <div class="img50 img">
                                <img src="{{ asset('assets/img/all-images/testimonial/testimonial-img' . (8 + $index) . '.png') }}" alt="" />
                            </div>
                            <div class="bottom-hadding">
                                <h4><a href="#">{{ $testimonial['name'] }}</a></h4>
                                <div class="space5"></div>
                                <p>{{ $testimonial['role'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!--=====TESTIMONIAL END=======-->

    <!--===== CONTACT AREA STARTS =======-->
    <div class="contact3-section-area sp1">
        <img src="{{ asset('assets/img/elements/elements16.png') }}" alt="" class="elements16" />
        <img src="{{ asset('assets/img/elements/elements16.png') }}" alt="" class="elements17" />
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="contact-heading heading6 text-center">
                        <h5>Contact Us Poolwash</h5>
                        <h2>Have Questions Reach Out Experts</h2>
                        <p>
                            We're here to assist you with all your pool care needs. Whether you have a question
                            about our services, need expert advice on maintaining your pool,
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-auhtor-boxarea">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="contact-form-area">
                                    <h3>Send Us A Message</h3>
                                    <p>Our response time is within 30 minutes during business hours</p>
                                    <form method="POST" action="{{ route('contact.submit') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="input-area">
                                                    <input type="text" name="first_name" placeholder="First Name" required />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="input-area">
                                                    <input type="text" name="last_name" placeholder="Last Name" required />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="input-area">
                                                    <input type="tel" name="phone" placeholder="Phone Number" required />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="input-area">
                                                    <input type="email" name="email" placeholder="Email Address" required />
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="input-area">
                                                    <input type="text" name="service_type" placeholder="Service Type" />
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="input-area">
                                                    <textarea name="message" placeholder="Message" required></textarea>
                                                </div>
                                            </div>
                                            <div class="space30"></div>
                                            <div class="col-lg-12">
                                                <div class="input-area">
                                                    <button type="submit" class="header-btn3">
                                                        <img src="{{ asset('assets/img/icons/logo-icon3.svg') }}" alt="" /> Submit Now
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-boxarea" data-aos="fade-left" data-aos-duration="800">
                                    <div class="icons">
                                        <img src="{{ asset('assets/img/icons/contact-icon1.svg') }}" alt="" />
                                    </div>
                                    <div class="textarea">
                                        <h4>Contact Us</h4>
                                        <p>8708 Technology Forest Pl Suite 125 -G, The Woodlands, TX 77381</p>
                                    </div>
                                </div>
                                <div class="space20"></div>
                                <div class="contact-boxarea" data-aos="fade-left" data-aos-duration="1000">
                                    <div class="icons">
                                        <img src="{{ asset('assets/img/icons/contact-icon2.svg') }}" alt="" />
                                    </div>
                                    <div class="textarea m-0">
                                        <h4>Call or text</h4>
                                        <a href="tel:123-456-7890">123-456-7890</a>
                                    </div>
                                </div>
                                <div class="space20"></div>
                                <div class="contact-boxarea" data-aos="fade-left" data-aos-duration="1200">
                                    <div class="icons">
                                        <img src="{{ asset('assets/img/icons/contact-icon3.svg') }}" alt="" />
                                    </div>
                                    <div class="textarea m-0">
                                        <h4>Email us today</h4>
                                        <a href="mailto:info@taxvice.com">info@taxvice.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== CONTACT AREA ENDS =======-->

    <!--===== BLOG AREA STARTS =======-->
    <div class="blog3-section-area sp2">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="blog-header">
                        <div class="heading6">
                            <h5 data-aos="fade-right" data-aos-duration="800">
                                Our Blog Poolwash
                            </h5>
                            <h2 class="text-anime-style-3">
                                The Benefits Of Regular Pool Cleaning
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-5">
                    <div class="heading6">
                        <p>
                            Welcome to 'The Ultimate Guide to Pool Maintenance', your comprehensive resource for keeping your pool in pristine condition all year round.
                        </p>
                        <div class="space24"></div>
                        <div class="btn-area2">
                            <a href="{{ route('blogs') }}" class="header-btn3">
                                <img src="{{ asset('assets/img/icons/logo-icon3.svg') }}" alt="" /> Read More Blog
                            </a>
                        </div>
                    </div>
                    <div class="space60 d-lg-none d-block"></div>
                </div>
            </div>
            <div class="row">
                @php
                    $blogs = [
                        ['title' => 'Pool Safety 101: Essential Tips for a Safe Swimming Environment', 'desc' => 'Closing your pool properly for the winter is crucial to protecting it from damage.', 'img' => 'blog-img1.png'],
                        ['title' => 'Revamp Your Backyard Oasis: Stunning Pool Renovation Ideas', 'desc' => 'Discover the latest trends in pool design and renovation, from innovative lighting', 'img' => 'blog-img2.png'],
                        ['title' => 'Professional Pool Maintenance: What\'s Right for You?', 'desc' => 'Helping you understand how to balance pH, chlorine, and other essential elements', 'img' => 'blog-img3.png']
                    ];
                @endphp
                @foreach($blogs as $index => $blog)
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="{{ 800 + ($index * 200) }}">
                        <div class="blog-boxarea">
                            <div class="img1 image-anime">
                                <img src="{{ asset('assets/img/all-images/blog/' . $blog['img']) }}" alt="" />
                            </div>
                            <div class="date">
                                <a href="#">20 <br /> Jun</a>
                            </div>
                            <div class="content-area">
                                <ul>
                                    <li><a href="#" class="tag"># Pool Cleaning</a></li>
                                </ul>
                                <div class="space16"></div>
                                <a href="{{ route('blog.show', $index + 1) }}">{{ $blog['title'] }}</a>
                                <div class="space16"></div>
                                <p>{{ $blog['desc'] }}</p>
                                <div class="space24"></div>
                                <a href="{{ route('blog.show', $index + 1) }}" class="readmore">
                                    Read More <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--===== BLOG AREA ENDS =======-->

    <!--===== CTA AREA STARTS =======-->
    <div class="cta3-section-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="cta-main-area">
                        <img src="{{ asset('assets/img/all-images/cta/cta-img2.png') }}" alt="" class="cta-img2" />
                        <img src="{{ asset('assets/img/all-images/cta/cta-img3.png') }}" alt="" class="cta-img3" />
                        <img src="{{ asset('assets/img/all-images/cta/cta-img4.png') }}" alt="" class="cta-img4" />
                        <img src="{{ asset('assets/img/all-images/cta/cta-img5.png') }}" alt="" class="cta-img5" />
                        <div class="row">
                            <div class="col-lg-5 m-auto">
                                <div class="cta-header heading5 text-center">
                                    <h2 class="text-anime-style-3">
                                        Make Your Pool Sparkle Reach Out Today
                                    </h2>
                                    <p class="pera" data-aos="fade-up" data-aos-duration="1000">
                                        Ready to experience the best in pool care? Don't wait! Get your free quote today and see how we can transform.
                                    </p>
                                    <div class="btn-area2" data-aos="fade-up" data-aos-duration="1200">
                                        <a href="{{ route('quote') }}" class="header-btn3">
                                            <img src="{{ asset('assets/img/icons/logo-icon3.svg') }}" alt="" /> Book A Consultation
                                        </a>
                                        <a href="{{ route('contact') }}" class="header-btn3 btn2">
                                            <img src="{{ asset('assets/img/icons/logo-icon3.svg') }}" alt="" /> Contact Us
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== CTA AREA ENDS =======-->
@endsection

@push('scripts')
<script>
    // Pricing toggle functionality
    document.addEventListener('DOMContentLoaded', function() {
        const toggle = document.getElementById('ce-toggle');
        const monthlyDiv = document.getElementById('monthly');
        const yearlyDiv = document.getElementById('yearly');
        
        if (toggle) {
            toggle.addEventListener('change', function() {
                if (this.checked) {
                    monthlyDiv.style.display = 'block';
                    yearlyDiv.style.display = 'none';
                } else {
                    monthlyDiv.style.display = 'none';
                    yearlyDiv.style.display = 'block';
                }
            });
        }
    });
</script>
@endpush