@extends('layouts.app')

@section('title', $homeData->meta_title ?? 'Crystal Craft')
@section('meta_description', $homeData->meta_description ?? '')
@section('body-class', 'homepage3-body')
@section('content')
<style>
.testim {
    background-image: url('{{ asset('storage/' . $homeData->testimonial_banner) }}') !important;
}

.section-area1 {
    background-image: url('{{ asset('assets/img/bg/footer-bg2.png') }}') !important;
}

.hero3-section-area {
    position: relative;
    z-index: 1;
    background-image: url('{{ asset('storage/' . $homeData->banner) }}');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    padding: 230px 0 130px;
}
</style>
<div class="hero3-section-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="hero4-header heading5">
                    <h5 data-aos="fade-up" data-aos-duration="800">
                        {{ $homeData->banner_chip ?? 'Crystal Craft & Services' }}
                    </h5>
                    <h1 class="text-anime-style-3">
                        {{ $homeData->banner_heading ?? 'Pool Maintenance For Crystal Clear Enjoyment!' }}
                    </h1>
                    <div class="space16"></div>
                    <p data-aos="fade-up" data-aos-duration="1000">
                        {{ $homeData->banner_paragraph ?? '' }}
                    </p>
                    <div class="btn-area2" data-aos="fade-up" data-aos-duration="1200">
                        <a href="{{ route('contact') }}" class="header-btn3">
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
</div>

<div class="about3-section-area sp1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="images reveal image-anime">
                    <img src="{{ asset('storage/' . $homeData->whychoose_card1_image) }}"
                        alt="{{ $homeData->whychoose_heading }}">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about3-header heading6">
                    <h5 data-aos="fade-left" data-aos-duration="800">
                        Why Choose Us Crystal Craft
                    </h5>
                    <h2 class="text-anime-style-3">
                        {{ $homeData->whychoose_heading ?? '' }}
                    </h2>
                    <p data-aos="fade-left" data-aos-duration="1000">
                        {{ $homeData->whychoose_paragraph ?? '' }}
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


<div class="service3-section-area sp1">
    <img src="assets/img/elements/elements16.png" alt="" class="elements16">
    <img src="assets/img/elements/elements17.png" alt="" class="elements17">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="service-boxes-area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-duration="800">
                            <div class="service-boxarea">
                                <div class="icons">
                                    <img src="{{ asset('storage/' . $homeData->our_service_card1_image) }}"
                                        alt="{{ $homeData->our_service_card1_heading }}">
                                </div>
                                <div class="space24"></div>
                                <div class="content-area">
                                    <a href="#">{{ $homeData->our_service_card1_heading ?? '' }}</a>
                                    <div class="space16"></div>
                                    <p>{{ $homeData->our_service_card1_paragraph ?? '' }}</p>
                                    <div class="space24"></div>
                                    <!-- <a href="#" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a> -->
                                </div>
                            </div>
                            <div class="space24"></div>
                        </div>

                        <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-duration="900">
                            <div class="service-boxarea">
                                <div class="icons">
                                    <img src="{{ asset('storage/' . $homeData->our_service_card2_image) }}"
                                        alt="{{ $homeData->our_service_card2_heading }}">
                                </div>
                                <div class="space24"></div>
                                <div class="content-area">
                                    <a href="#">{{ $homeData->our_service_card2_heading ?? '' }}</a>
                                    <div class="space16"></div>
                                    <p>{{ $homeData->our_service_card1_paragraph ?? '' }}</p>
                                    <div class="space24"></div>
                                    <!-- <a href="#" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a> -->
                                </div>
                            </div>
                            <div class="space24"></div>
                        </div>

                        <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-duration="1100">
                            <div class="service-boxarea">
                                <div class="icons">
                                    <img src="{{ asset('storage/' . $homeData->our_service_card3_image) }}"
                                        alt="{{ $homeData->our_service_card3_heading }}">
                                </div>
                                <div class="space24"></div>
                                <div class="content-area">
                                    <a href="#">{{ $homeData->our_service_card3_heading ?? '' }}</a>
                                    <div class="space16"></div>
                                    <p>{{ $homeData->our_service_card3_paragraph ?? '' }}</p>
                                    <div class="space24"></div>
                                    <!-- <a href="#" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a> -->
                                </div>
                            </div>
                            <div class="space24 d-md-none d-block"></div>
                        </div>

                        <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-duration="1200">
                            <div class="service-boxarea">
                                <div class="icons">
                                    <img src="{{ asset('storage/' . $homeData->our_service_card4_image) }}"
                                        alt="{{ $homeData->our_service_card4_heading }}">
                                </div>
                                <div class="space24"></div>
                                <div class="content-area">
                                    <a href="#">{{ $homeData->our_service_card4_heading ?? '' }}</a>
                                    <div class="space16"></div>
                                    <p>{{ $homeData->our_service_card4_paragraph ?? '' }}</p>
                                    <div class="space24"></div>
                                    <!-- <a href="#" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="service3-header heading6">
                    <h5 data-aos="fade-left" data-aos-duration="800">Our Service Us Poolwash</h5>
                    <h2 class="text-anime-style-3"> {{ $homeData->our_service_heading ?? '' }}</h2>
                    <p data-aos="fade-left" data-aos-duration="1000">{{ $homeData->our_service_paragraph ?? '' }}</p>
                    <div class="space40"></div>
                    <div class="images reveal image-anime">
                        <img src="{{ asset('storage/' . $homeData->our_service_image) }}"
                            alt="{{ $homeData->our_service_heading }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="work1-section-area sp1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="work-header heading2">
                    <h5 data-aos="fade-right" data-aos-duration="800">Latest Work Poolwash</h5>
                    <h2 class="text-anime-style-3"> {{ $homeData->latest_work_heading ?? '' }}</h2>
                    <p data-aos="fade-right" data-aos-duration="1000">{{ $homeData->latest_work_paragraph ?? '' }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="work-slider-area owl-carousel">


                    @foreach($moreProjects as $project)
                    <div class="work-boxarea">
                        <div class="img1 image-anime reveal">
                            <img src="{{ asset('storage/' . $project->card_image) }}" alt="{{ $project->heading }}">
                        </div>
                        <div class="content-area">
                            <div class="icons">
                                <a href="#"><img src="assets/img/icons/arrow1.svg" alt=""></a>
                            </div>
                            <div class="space24"></div>
                            <p>{{ $project->service->name ?? 'Cleaning & Services' }}</p>
                            <div class="space16"></div>
                            <a href="#">{{ $project->heading }}</a>
                            <div class="img2">
                                <img src="assets/img/elements/elements9.png" alt="">
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>




<div class="counter-section-area sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-6" data-aos="fade-up" data-aos-duration="800">
                <div class="counter-box">
                    <div class="icons">
                        <img src="assets/img/icons/counter-icon1.svg" alt="">
                    </div>

                    <div class="space32"></div>
                    <div class="text heading7">
                        <h2><span class="counter">{{ $homeData->counter1 ?? '' }}</span>+</h2>
                        <p>{{ $homeData->counter1_heading ?? '' }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 d-lg-block d-none"></div>
            <div class="col-lg-3 col-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="counter-box">
                    <div class="icons">
                        <img src="assets/img/icons/counter-icon2.svg" alt="">
                    </div>
                    <div class="space32"></div>
                    <div class="text heading7">
                        <h2><span class="counter">{{ $homeData->counter2 ?? '' }}</span>+</h2>
                        <p>{{ $homeData->counter2_heading ?? '' }}</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-6" data-aos="fade-up" data-aos-duration="1200">
                <div class="counter-box">
                    <div class="icons">
                        <img src="assets/img/icons/counter-icon3.svg" alt="">
                    </div>
                    <div class="space32"></div>
                    <div class="text heading7">
                        <h2><span class="counter">{{ $homeData->counter3 ?? '' }}</span>+</h2>
                        <p>{{ $homeData->counter3_heading ?? '' }}</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-6" data-aos="fade-up" data-aos-duration="1400">
                <div class="counter-box">
                    <div class="icons">
                        <img src="assets/img/icons/counter-icon4.svg" alt="">
                    </div>
                    <div class="space32"></div>
                    <div class="text heading7">
                        <h2><span class="counter">{{ $homeData->counter4 ?? '' }}</span>+</h2>
                        <p>{{ $homeData->counter4_heading ?? '' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="testimonial2-section-area sp1 testim">
    <img src="assets/img/elements/elements13.png" alt="" class="elements13">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="testimonial-header heading4">
                    <h5>Testimonial Poolwash</h5>
                    <h2>{{ $homeData->testimonial_heading ?? '' }}</h2>
                    <p>{{ $homeData->testimonial_paragraph ?? '' }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonial2-slider-area owl-carousel">

                    @foreach($moreTestimonials as $testim)
                    <div class="testimonial-boxarea">
                        <div class="author-imges">
                            <div class="img1">
                                <img src="{{ asset('storage/' . $testim->profile) }}" alt="{{ $testim->name }}">
                            </div>
                            <div class="content">
                                <a href="#">{{ $testim->name ?? '' }}</a>
                                <p>{{ $testim->designation ?? '' }}</p>
                            </div>
                        </div>
                        <div class="space48"></div>
                        <div class="main-content-area heading4">
                            <ul>
                                @for ($i = 1; $i <= 5; $i++) <li>
                                    <i class="fa-solid fa-star{{ $i <= ($testim->rating ?? 0) ? '' : '-o' }}"></i>
                                    </li>
                                    @endfor
                            </ul>
                            <div class="space16"></div>
                            <p>
                            <p>{{ $testim->paragraph ?? '' }}</p>
                            </p>
                        </div>
                        <div class="quito">
                            <img src="assets/img/icons/quito2.svg" alt="">
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>


<div class="contact3-section-area sp1">
    <img src="{{ asset('assets/img/elements/elements16.png') }}" alt="" class="elements16" />
    <img src="{{ asset('assets/img/elements/elements16.png') }}" alt="" class="elements17" />
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="contact-heading heading6 text-center">
                    <h5>Contact Us Crystal Craft</h5>
                    <h2>{{ $homeData->contactus_heading ?? '' }}</h2>
                    <p>
                        {{ $homeData->contactus_paragraph ?? '' }}
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
                                <form id="quoteForm5">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="input-area">
                                                <input type="text" name="name" id="name" placeholder="Name" required />
                                            </div>
                                        </div>
                                        <!-- <div class="col-lg-6">
                                            <div class="input-area">
                                                <input type="text" name="last_name" placeholder="Last Name" required />
                                            </div>
                                        </div> -->
                                        <div class="col-lg-6">
                                            <div class="input-area">
                                                <input type="tel" name="phone" id="phone" placeholder="Phone Number"
                                                    required />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="input-area">
                                                <input type="email" name="email" id="email" placeholder="Email Address"
                                                    required />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="input-area">
                                                {{-- Dynamic Service Dropdown --}}
                                                <select name="service_type" id="service_type" class="select" required>
                                                    <option value="">Select a Service</option>
                                                    @foreach($moreServices as $service)
                                                    <option value="{{ $service->card_heading }}">
                                                        {{ $service->card_heading }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="input-area">
                                                <textarea name="message" name="message" placeholder="Message"
                                                    required></textarea>
                                            </div>
                                        </div>
                                        <div class="space30"></div>
                                        <div class="col-lg-12">
                                            <div class="input-area">
                                                <button type="submit" id="submitBtn" class="header-btn3">
                                                    <img src="{{ asset('assets/img/icons/logo-icon3.svg') }}" alt="" />
                                                    Submit Now
                                                </button>
                                            </div>
                                        </div>
                                        <div id="formMessage" class="col-lg-12" style="display:none; margin-top:15px;">
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
                                    <p>Office 82, Oud Al Muteena 3, United Arab Emirates</p>
                                </div>
                            </div>
                            <div class="space20"></div>
                            <div class="contact-boxarea" data-aos="fade-left" data-aos-duration="1000">
                                <div class="icons">
                                    <img src="{{ asset('assets/img/icons/contact-icon2.svg') }}" alt="" />
                                </div>
                                <div class="textarea m-0">
                                    <h4>Call or text</h4>
                                    <div class="d-flex gap-3">
                                        <a href="tel:971569632293">+971569632293</a>
                                        <a href="tel:971547007952">+971547007952</a>
                                    </div>
                                </div>
                            </div>
                            <div class="space20"></div>
                            <div class="contact-boxarea" data-aos="fade-left" data-aos-duration="1200">
                                <div class="icons">
                                    <img src="{{ asset('assets/img/icons/contact-icon3.svg') }}" alt="" />
                                </div>
                                <div class="textarea m-0">
                                    <h4>Email us today</h4>
                                    <a href="mailto:info@crystalcraftuae.com">info@crystalcraftuae.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="cta3-section-area section-area1">
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
                                <h2 class="text-anime-style-3" style="color:#fff">
                                    Make Your Pool Sparkle Reach Out Today
                                </h2>
                                <p data-aos="fade-up" data-aos-duration="1000" style="color:#fff">
                                    Ready to experience the best in pool care? Don't wait! Get your free quote today and
                                    see how we can transform.
                                </p>
                                <div class="btn-area2" data-aos="fade-up" data-aos-duration="1200">
                                    <a href="{{ route('contact') }}" class="header-btn3">
                                        <img src="{{ asset('assets/img/icons/logo-icon3.svg') }}" alt="" /> Book A
                                        Consultation
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
@endsection

@push('scripts')
<script>
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    const quoteForm5 = document.getElementById('quoteForm5');
    const submitBtn = document.getElementById('submitBtn');
    const formMessage = document.getElementById('formMessage');
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    if (quoteForm5) {
        quoteForm5.addEventListener('submit', async function(e) {
            e.preventDefault();
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<img src="{{ asset('
            assets / img / icons / logo - icon3.svg ') }}" alt="" /> Submitting...';
            formMessage.style.display = 'none';
            formMessage.innerHTML = '';

            const formData = {
                name: quoteForm5.querySelector('input[name="name"]').value,
                phone: quoteForm5.querySelector('input[name="phone"]').value,
                email: quoteForm5.querySelector('input[name="email"]').value,
                service_name: quoteForm5.querySelector('select[name="service_type"]').value,
                message: quoteForm5.querySelector('textarea[name="message"]').value,
            };

            try {
                const response = await fetch('/quote', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken,
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify(formData)
                });

                const result = await response.json();

                if (response.ok) {
                    formMessage.style.display = 'block';
                    formMessage.innerHTML = '<div class="alert alert-success">' + (result.message ||
                        'Form submitted successfully!') + '</div>';
                    quoteForm5.reset();
                } else {
                    formMessage.style.display = 'block';
                    let errorMsg = result.message || 'Something went wrong. Please try again.';
                    if (result.errors) {
                        errorMsg = Object.values(result.errors).flat().join('<br>');
                    }
                    formMessage.innerHTML = '<div class="alert alert-danger">' + errorMsg +
                        '</div>';
                }
            } catch (error) {
                console.error('Error:', error);
                formMessage.style.display = 'block';
                formMessage.innerHTML =
                    '<div class="alert alert-danger">Network error. Please check your connection and try again.</div>';
            } finally {
                submitBtn.disabled = false;
                // Fixed the string concatenation for the asset URL
                submitBtn.innerHTML = '<img src="{{ asset('
                assets / img / icons / logo - icon3.svg ') }}" alt="" /> Submit Now';
            }
        });
    }
});
</script>

@endpush