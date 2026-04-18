@extends('layouts.app')

@section('title', 'Service Details - Crystal Craft')
@section('body-class', 'homepage3-body')

@section('content')
<!--===== HERO AREA STARTS =======-->
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
                    <h1>Pool Cleaning & Skimming</h1>
                    <a href="index.html">Home <i class="fa-solid fa-angle-right"></i> Our Services
                        <i class="fa-solid fa-angle-right"></i>
                        <span> Pool Cleaning & Skimming </span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== HERO AREA ENDS =======-->

<!--===== SERVICE AREA STARTS =======-->
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
                            <li>
                                <a href="#"><span>Pool Cleaning and Skimming</span>
                                    <span><i class="fa-solid fa-arrow-right"></i></span></a>
                            </li>
                            <li>
                                <a href="#"><span>AquaSparkle Pool Services</span>
                                    <span><i class="fa-solid fa-arrow-right"></i></span></a>
                            </li>
                            <li>
                                <a href="#"><span>Pure Water Pool Cleaning</span>
                                    <span><i class="fa-solid fa-arrow-right"></i></span></a>
                            </li>
                            <li>
                                <a href="#"><span>Parkling Waters Pool Care</span>
                                    <span><i class="fa-solid fa-arrow-right"></i></span></a>
                            </li>
                            <li>
                                <a href="#"><span>Perfect Pools Maintenance</span>
                                    <span><i class="fa-solid fa-arrow-right"></i></span></a>
                            </li>
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
                        <div class="input-area">
                            <input type="text" placeholder="Your Name" />
                        </div>
                        <div class="input-area">
                            <input type="email" placeholder="Email Address" />
                        </div>
                        <div class="input-area">
                            <input type="number" placeholder="Phone Number" />
                        </div>
                        <div class="input-area">
                            <textarea placeholder="Your Message"></textarea>
                        </div>
                        <div class="space24"></div>
                        <div class="input-area">
                            <button class="header-btn1" type="submit">
                                <img src="{{ asset('assets/img/icons/logo-icon1.svg') }}" alt="">
                                Submit Now
                            </button>
                        </div>
                    </div>

                    <div class="space40"></div>
                    <div class="social-area">
                        <h3>Follow Us</h3>
                        <div class="space24"></div>
                        <ul>
                            <li>
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
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
                    <div class="img1 image-anime reveal">
                        <img src="https://html.vikinglab.agency/poolwash/assets/img/all-images/service/service-img13.png"
                            alt="" />
                        <!-- <img src="{{ asset('assets/img/all-images/service/service-img13.png') }}" alt=""> -->
                    </div>
                    <div class="space42"></div>
                    <h3>Radiant Reflections Pool Care</h3>
                    <div class="space16"></div>
                    <p>
                        We provide routine maintenance, including weekly,weekly, &
                        monthly cleaning schedules, where we skim debris, brush walls
                        and floors, vacuum, and clean tiles. Our chemical testing and
                        balancing services ensure your pool's pH levels, alkalinity,
                    </p>
                    <div class="space16"></div>
                    <p>
                        We also specialize in equipment maintenance and repair, covering
                        pumps, filters, heaters, and pool lights, along with automation
                        system upkeep. For seasonal needs, we offer pool opening and
                        closing services, green pool cleanups, leak detection, and
                        repair. Additionally,
                    </p>
                    <div class="space42"></div>
                    <div class="icons-list">
                        <div class="icons">
                            <img src="{{ asset('assets/img/icons/check-icon2.svg') }}" alt="">
                        </div>
                        <div class="text">
                            <h3>Tranquil Tides Pool Services</h3>
                            <p>
                                Additionally, we provide renovations and upgrades such as
                                resurfacing, installing energy-efficient pumps, & enhancing
                                pool aesthetics with new water features
                            </p>
                        </div>
                    </div>
                    <div class="space20"></div>
                    <div class="icons-list">
                        <div class="icons">
                            <img src="{{ asset('assets/img/icons/check-icon2.svg') }}" alt="">
                        </div>
                        <div class="text">
                            <h3>AquaGlow Pool Maintenance;</h3>
                            <p>
                                Our pool service business is dedicated to providing
                                comprehensive and expert care for your pool, ensuring it
                                remains a source of enjoyment and relaxation year-round.
                            </p>
                        </div>
                    </div>
                    <div class="space20"></div>
                    <div class="icons-list">
                        <div class="icons">
                            <img src="{{ asset('assets/img/icons/check-icon2.svg') }}" alt="">
                        </div>
                        <div class="text">
                            <h3>Harbor View Pool Services;</h3>
                            <p>
                                Our routine maintenance packages include regular cleaning
                                sessions where we meticulously skim debris, brush walls and
                                floors, vacuum, & maintain tile cleanliness.
                            </p>
                        </div>
                    </div>
                    <div class="space20"></div>
                    <div class="icons-list">
                        <div class="icons">
                            <img src="{{ asset('assets/img/icons/check-icon2.svg') }}" alt="">
                        </div>
                        <div class="text">
                            <h3>Titanium Pool Solutions;</h3>
                            <p>
                                We pride ourselves on precise chemical testing and balancing
                                to optimize pH levels, alkalinity, chlorine, and calcium
                                hardness, maintaining water quality at its best.
                            </p>
                        </div>
                    </div>
                    <div class="space20"></div>
                    <div class="icons-list">
                        <div class="icons">
                            <img src="{{ asset('assets/img/icons/check-icon2.svg') }}" alt="">
                        </div>
                        <div class="text">
                            <h3>Aqua Glow Pool Maintenance;</h3>
                            <p>
                                Our expertise extends to handling seasonal needs such as
                                pool opening and closing, green pool cleanups, and efficient
                                leak detection and repair services.
                            </p>
                        </div>
                    </div>
                    <div class="space42"></div>
                    <div class="icons-list1">
                        <div class="icons1">
                            <img src="{{ asset('assets/img/icons/list1.svg') }}" alt="">
                        </div>
                        <div class="text">
                            <h3>Aquatic Oasis Pool Services</h3>
                            <p>
                                Our team is committed to excellence, combining technical
                                proficiency with a passion for customer satisfaction.
                                Whether you're looking for routine upkeep or a major
                                renovation, we strive to ensure your pool
                            </p>
                        </div>
                    </div>
                    <div class="space40"></div>
                    <div class="service-others-area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="img1 image-anime reveal">
                                    <!-- <img src="{{ asset('assets/img/all-images/service/service-img14.png') }}" alt=""> -->
                                    <img src="https://html.vikinglab.agency/poolwash/assets/img/all-images/service/service-img14.png" alt="">

                                </div>
                                <div class="space30 d-lg-none d-block"></div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="img1 image-anime reveal">
                                    <!-- <img src="{{ asset('assets/img/all-images/service/service-img15.png') }}" alt=""> -->
                                    <img src="https://html.vikinglab.agency/poolwash/assets/img/all-images/service/service-img15.png" alt="">
                                </div>
                                <div class="space8"></div>
                                <ul>
                                    <li>
                                        <img src="{{ asset('assets/img/icons/check-icon2.svg') }}" alt="" />
                                        Harmony Pool Services
                                    </li>
                                    <li>
                                        <img src="{{ asset('assets/img/icons/check-icon2.svg') }}" alt="" />
                                        Serene Waters Pool Care
                                    </li>
                                    <li>
                                        <img src="{{ asset('assets/img/icons/check-icon2.svg') }}" alt="" />
                                        Lagoon Pool Specialists
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="space32"></div>
                    <h3>Cascade Pool Maintenance:</h3>
                    <div class="space16"></div>
                    <p>
                        For those looking to enhance their pool's appeal, we offer
                        renovation & upgrade services including resurfacing,
                        installation of energy-efficient equipment, and aesthetic
                        improvements like water features and upgraded lighting.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== SERVICE AREA ENDS =======-->

<!--===== SERVICE AREA STARTS =======-->
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
            <div class="col-lg-4 col-md-6">
                <div class="service-boxarea box1">
                    <div class="img1 image-anime">
                        <!-- <img src="{{ asset('assets/img/all-images/service/service-img4.png') }}" alt="" /> -->
                        <img src="https://html.vikinglab.agency/poolwash/assets/img/all-images/service/service-img4.png" alt="" />
                    </div>
                    <div class="content-area">
                        <div class="icons">
                            <img src="{{ asset('assets/img/icons/service-icon10.svg') }}" alt="" />
                        </div>
                        <a href="service-single.html">Algae Treatment and Removal</a>
                        <div class="space16"></div>
                        <p>
                            Proper chemical balancing crucial for a safe and enjoyable
                            swimming experience and other essential
                        </p>
                        <div class="space24"></div>
                        <a href="service-single.html" class="readmore">Read More <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-boxarea box1">
                    <div class="img1 image-anime">
                        <img src="https://html.vikinglab.agency/poolwash/assets/img/all-images/service/service-img5.png" alt="" />
                        <!-- <img src="{{ asset('assets/img/all-images/service/service-img5.png') }}" alt="" /> -->
                    </div>
                    <div class="content-area">
                        <div class="icons">
                            <img src="{{ asset('assets/img/icons/service-icon11.svg') }}" alt="" />
                        </div>
                        <a href="service-single.html">Pool Cleaning and Skimming</a>
                        <div class="space16"></div>
                        <p>
                            Our thorough pool cleaning and skimming service removes
                            debris, leaves, and dirt from the water.
                        </p>
                        <div class="space24"></div>
                        <a href="service-single.html" class="readmore">Read More <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-boxarea box1">
                    <div class="img1 image-anime">
                        <!-- <img src="{{ asset('assets/img/all-images/service/service-img6.png') }}" alt="" /> -->
                        <img src="https://html.vikinglab.agency/poolwash/assets/img/all-images/service/service-img6.png" alt="" />
                    </div>
                    <div class="content-area">
                        <div class="icons">
                            <img src="{{ asset('assets/img/icons/service-icon12.svg') }}" alt="" />
                        </div>
                        <a href="service-single.html">Filter Cleaning & Replacement</a>
                        <div class="space16"></div>
                        <p>
                            Filters are the heart of your pool's circulation system. Our
                            filter best cleaning & replacement service
                        </p>
                        <div class="space24"></div>
                        <a href="service-single.html" class="readmore">Read More <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== SERVICE AREA ENDS =======-->
<div class="space100 d-lg-block d-none"></div>
<div class="space50 d-lg-none d-block"></div>
<!--===== CTA AREA STARTS =======-->
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
                                    <!-- <img src="{{ asset('assets/img/all-images/cta/cta-img1.png') }}" alt="" /> -->
                                    <img src="https://html.vikinglab.agency/poolwash/assets/img/all-images/cta/cta-img1.png" alt="" />

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
<!--===== CTA AREA ENDS =======-->


@endsection