@extends('layouts.app')

@section('title', $service->meta_title ?? 'Service Details - Crystal Craft')
@section('meta_description', $service->meta_description ?? '')
@section('body-class', 'homepage3-body')
@section('content')


<style>
.inner-header-section-area {
    background-image: url('{{ asset('storage/' . $service->page_banner) }}');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    padding: 280px 0 80px;
    overflow: hidden;
    position: relative;
}
.service-inner-section-area .service-boxarea .img1 img {
    width: 100% !important;
    height: auto !important;
    -o-object-fit: cover;
    object-fit: cover;
    border-radius: 8px;
    transition: all 0.4s;
}
.service-inner-section-area .service-boxarea .content-area .icons img {
  filter: brightness(0) invert(1);
  transition: all 0.4s;
  margin-top:12px
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
            <div class="col-lg-8 m-auto">
                <div class="inner-page-header heading1 text-center">
                    <h1>{{ $service->card_heading ?? 'Pool Cleaning & Skimming' }}</h1>
                    <a href="{{ route('home') }}">Home <i class="fa-solid fa-angle-right"></i> <span>
                            {{ $service->card_heading ?? 'Pool Cleaning & Skimming' }}</span></a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="service-single-area sp1">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="service-single-author">
                    <div class="serach-area">
                        <h3>Search</h3>
                        <div class="space24"></div>
                        <form>
                            <input type="text" placeholder="Search.." />
                            <button type="submit">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </form>
                    </div>
                    <div class="space40"></div>
                    <h3>Our Services</h3>
                    <div class="space4"></div>
                    <div class="service-list">
                        <ul>
                            @foreach($allServices as $relatedService)
                            <li>
                                <a href="{{ route('service.show', $relatedService->id) }}">
                                    <span>{{ $relatedService->card_heading }}</span>
                                    <span><i class="fa-solid fa-arrow-right"></i></span>
                                </a>
                            </li>
                            @endforeach


                        </ul>
                    </div>
                    <div class="space40"></div>
                    <div class="service-help">
                        <h3>If You Need Any Help Contact With Us</h3>
                        <div class="space24"></div>
                        <div class="btn-area1">
                            <a href="tel:+917052101786" class="header-btn1">
                                <img src="{{ asset('assets/img/icons/call-icon3.svg') }}" alt="">
                                +971569632293</a>
                        </div>
                    </div>
                    <div class="space40"></div>
                    <div class="contact-boxarea">
                        <h3>Get A Free Quote</h3>
                        <div class="space8"></div>

                        <form id="quoteForm2">
                            <input type="hidden" id="service_name_hidden"
                                value="{{ $service->card_heading ?? 'Service Quote' }}">
                            <div class="input-area">
                                <input type="text" id="quote_name" name="quote_name" placeholder="Your Name" required />
                            </div>
                            <div class="input-area">
                                <input type="email" id="quote_email" name="quote_email" placeholder="Email Address"
                                    required />
                            </div>
                            <div class="input-area">
                                <input type="number" id="quote_phone" name="quote_phone" placeholder="Phone Number"
                                    required />
                            </div>
                            <div class="input-area">
                                <textarea id="quote_message" name="quote_message" placeholder="Your Message"
                                    required></textarea>
                            </div>
                            <div class="space24"></div>
                            <div class="input-area">
                                <button class="header-btn1" type="submit" id="quoteSubmitBtn">
                                    <span id="quoteBtnText">
                                        <img src="{{ asset('assets/img/icons/logo-icon1.svg') }}" alt="">
                                        Submit Now
                                    </span>
                                    <span id="quoteBtnLoader" style="display:none;">Submitting...</span>
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="space40"></div>
                    <div class="social-area">
                        <h3>Follow Us</h3>
                        <div class="space24"></div>
                        <ul>
                            <li >
                                <a href="#" ><i class="fa-brands fa-facebook-f" ></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/crystalcraftuae?igsh=MW40dm1jOXNnaTdqZA=="><i class="fa-brands fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="single-section-area heading2 padding-right">
                    {!! $service->description !!}
                </div>
            </div>
        </div>
    </div>
</div>



@if($moreServices->count() > 0)
<div class="service-inner-section-area sp2 bg1">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 m-auto">
                <div class="heading2 text-center">
                    <h2 class="m-0">More Services</h2>
                </div>
                <div class="space60 d-lg-block d-none"></div>
                <div class="space30 d-lg-none d-block"></div>
            </div>
        </div>
        <div class="row">
            @foreach($moreServices as $relatedService)
            <div class="col-lg-4 col-md-6">
                <div class="service-boxarea">
                    <div class="img1 image-anime">
                        <img src="{{ $relatedService->card_banner ? asset('storage/' . $relatedService->card_banner) : 'https://html.vikinglab.agency/poolwash/assets/img/all-images/service/service-img4.png' }}"
                            alt="{{ $relatedService->card_heading }}">
                    </div>
                    <div class="content-area">
                        <div class="icons">
                            <img src="{{ $relatedService->card_icon ? asset('storage/' . $relatedService->card_icon) : asset('assets/img/icons/service-icon10.svg') }}" alt="">
                        </div>
                        <a href="{{ route('service.show', $relatedService->id) }}">{{ $relatedService->card_heading }}</a>
                        <div class="space16"></div>
                        <p>{{ Str::limit($relatedService->card_description ?? $relatedService->card_description, 100) }}</p>
                        <div class="space24"></div>
                        <a href="{{ route('service.show', $relatedService->id) }}" class="readmore">Read More <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif

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
                                <h2 class="text-anime-style-3">
                                    Make Your Pool Sparkle Reach Out Today
                                </h2>
                                <p>
                                    Ready to experience the best in pool care? Don’t wait! Get
                                    your free quote today and see how we can transform.
                                </p>
                                <a href="contact.html" class="header-btn1">
                                    <img src="{{ asset('assets/img/icons/logo-icon1.svg') }}" alt="" />

                                    Schedule A Consulation</a>
                                <a href="contact.html" class="header-btn1 btn2">

                                    <img src="{{ asset('assets/img/icons/logo-icon1.svg') }}" alt="" />

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
                                    <img src="{{ asset('assets/img/elements/elements5.png') }}" alt="keyframe5" />
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



<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('quoteForm2');
   
    form.addEventListener('submit', async function(e) {
        e.preventDefault();
        const btn = document.getElementById('quoteSubmitBtn');
        const text = document.getElementById('quoteBtnText');
        const loader = document.getElementById('quoteBtnLoader');

        text.style.display = 'none';
        loader.style.display = 'inline';
        btn.disabled = true;

        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        const formData = {
            service_name: document.getElementById('service_name_hidden').value,
            name: document.getElementById('quote_name').value,
            email: document.getElementById('quote_email').value,
            phone: document.getElementById('quote_phone').value,
            message: document.getElementById('quote_message').value,
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

            const data = await response.json();
            if (response.ok) {
                alert('Quote submitted successfully!');
                document.getElementById('quoteForm2').reset();
            } else {
                console.error(data);
                alert('Something went wrong');
            }

        } catch (error) {
            console.error(error);
            alert('Network error');
        }

        text.style.display = 'inline';
        loader.style.display = 'none';
        btn.disabled = false;
    })
});
</script>