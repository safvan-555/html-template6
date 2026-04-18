@extends('layouts.app')

@section('title', 'Services - Crystal Craft')
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
            <div class="col-lg-4 m-auto">
                <div class="inner-page-header heading1 text-center">
                    <h1>Our Services</h1>
                    <a href="index.html">Home <i class="fa-solid fa-angle-right"></i> <span> Our Services </span></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--===== SERVICE AREA STARTS =======-->
<div class="service-inner-section-area sp1">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="service-boxarea">
                    <div class="img1 image-anime">
                        <img src="https://html.vikinglab.agency/poolwash/assets/img/all-images/service/service-img4.png"
                            alt="">
                        <!-- <img src="{{ asset('assets/img/all-images/service/service-img4.png') }}" alt=""> -->
                    </div>
                    <div class="content-area">
                        <div class="icons">
                            <img src="{{ asset('assets/img/icons/service-icon10.svg') }}" alt="">
                        </div>
                        <a href="{{ route('service.show', 1) }}">Swimming Pool</a>
                        <div class="space16"></div>
                        <p>Proper chemical balancing crucial for a safe and enjoyable swimming experience and other
                            essential</p>
                        <div class="space24"></div>
                        <a href="{{ route('service.show', 1) }}" class="readmore">Read More <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-boxarea">
                    <div class="img1 image-anime">
                        <img src="https://html.vikinglab.agency/poolwash/assets/img/all-images/service/service-img5.png"
                            alt="">
                        <!-- <img src="{{ asset('assets/img/all-images/service/service-img5.png') }}" alt=""> -->
                    </div>
                    <div class="content-area">
                        <div class="icons">
                            <img src="assets/img/icons/service-icon11.svg" alt="">
                        </div>
                        <a href="{{ route('service.show', 2) }}">Design & Build</a>
                        <div class="space16"></div>
                        <p>Our thorough pool cleaning and skimming service removes debris, leaves, and dirt from the
                            water.</p>
                        <div class="space24"></div>

                        <a href="{{ route('service.show', 2) }}" class="readmore">Read More <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-boxarea">
                    <div class="img1 image-anime">
                        <img src="https://html.vikinglab.agency/poolwash/assets/img/all-images/service/service-img6.png"
                            alt="">
                        <!-- <img src="{{ asset('assets/img/all-images/service/service-img6.png') }}" alt=""> -->
                    </div>
                    <div class="content-area">
                        <div class="icons">
                            <img src="{{ asset('assets/img/icons/service-icon12.svg') }}" alt="">
                        </div>
                        <a href="{{ route('service.show', 3) }}">Land Scaping</a>
                        <div class="space16"></div>
                        <p>Filters are the heart of your pool's circulation system. Our filter best cleaning &
                            replacement service</p>
                        <div class="space24"></div>
                        <a href="{{ route('service.show', 3) }}" class="readmore">Read More <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-boxarea">
                    <div class="img1 image-anime">
                        <img src="https://html.vikinglab.agency/poolwash/assets/img/all-images/service/service-img7.png"
                            alt="">
                        <!-- <img src="{{ asset('assets/img/all-images/service/service-img7.png') }}" alt=""> -->
                    </div>
                    <div class="content-area">
                        <div class="icons">
                            <img src="{{ asset('ssets/img/icons/service-icon13.svg') }}" alt="">
                        </div>
                        <a href="{{ route('service.show', 4) }}">OutDoor Living</a>
                        <div class="space16"></div>
                        <p>Ensure your pool remains in top condition year-round with our comprehensive pool service</p>
                        <div class="space24"></div>

                        <a href="{{ route('service.show', 4) }}" class="readmore">Read More <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-boxarea">
                    <div class="img1 image-anime">
                        <img src="https://html.vikinglab.agency/poolwash/assets/img/all-images/service/service-img8.png"
                            alt="">
                        <!-- <img src="{{ asset('assets/img/all-images/service/service-img8.png') }}" alt=""> -->
                    </div>
                    <div class="content-area">
                        <div class="icons">
                            <img src="{{ asset('assets/img/icons/service-icon14.svg') }}" alt="">
                        </div>
                        <a href="{{ route('service.show', 5) }}">Interior Design</a>
                        <div class="space16"></div>
                        <p>Our expert technicians handle everything from routine cleaning and chemical balancing
                            repairs.</p>
                        <div class="space24"></div>

                        <a href="{{ route('service.show', 5) }}" class="readmore">Read More <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- <div class="col-lg-4 col-md-6">
                <div class="service-boxarea">
                    <div class="img1 image-anime">
                        <img src="https://html.vikinglab.agency/poolwash/assets/img/all-images/service/service-img9.png"
                            alt="">
                    </div>
                    <div class="content-area">
                        <div class="icons">
                            <img src="{{ asset('assets/img/icons/service-icon15.svg') }}" alt="">
                        </div>
                        <a href="{{ route('service.show', 6) }}">Pool Inspection & Assessment</a>
                        <div class="space16"></div>
                        <p>With regular maintenance, you can enjoy a pristine pool without the hassle, knowing that
                            every detail</p>
                        <div class="space24"></div>
                        <a href="{{ route('service.show', 6) }}" class="readmore">Read More <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-boxarea">
                    <div class="img1 image-anime">
                        <img src="https://html.vikinglab.agency/poolwash/assets/img/all-images/service/service-img10.png"
                            alt="">
                    </div>
                    <div class="content-area">
                        <div class="icons">
                            <img src="{{ asset('assets/img/icons/service-icon16.svg') }}" alt="">
                        </div>
                        <a href="{{ route('service.show', 7) }}">Pressure Washing Pool Decks</a>
                        <div class="space16"></div>
                        <p>We help prevent algae growth, protect your pool equipment, & ensure clear, sparkling</p>
                        <div class="space24"></div>

                        <a href="{{ route('service.show', 7) }}" class="readmore">Read More <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-boxarea">
                    <div class="img1 image-anime">
                        <img src="https://html.vikinglab.agency/poolwash/assets/img/all-images/service/service-img11.png"
                            alt="">
                    </div>
                    <div class="content-area">
                        <div class="icons">
                            <img src="{{ asset('assets/img/icons/service-icon17.svg') }}" alt="">
                        </div>
                        <a href="{{ route('service.show', 8) }}">Drain and Acid Wash Service</a>
                        <div class="space16"></div>
                        <p>Our precise chemical balancing service involves thorough testing of your pool water to
                            determine</p>
                        <div class="space24"></div>
                        <a href="{{ route('service.show', 8) }}" class="readmore">Read More <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-boxarea">
                    <div class="img1 image-anime">
                        <img src="https://html.vikinglab.agency/poolwash/assets/img/all-images/service/service-img12.png"
                            alt="">
                    </div>
                    <div class="content-area">
                        <div class="icons">
                            <img src="{{ asset('assets/img/icons/service-icon18.svg') }}" alt="">
                        </div>
                        <a href="{{ route('service.show', 9) }}">Pool Renovation & Remodeling</a>
                        <div class="space16"></div>
                        <p>Achieving the perfect chemical balance is essential for a safe and enjoyable swimming
                            experience.</p>
                        <div class="space24"></div>

                        <a href="{{ route('service.show', 9) }}" class="readmore">Read More <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div> -->


            <!-- <div class="space18"></div> -->
            <!-- <div class="col-lg-12">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <i class="fa-solid fa-angle-left"></i>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link active" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">....</a></li>
                        <li class="page-item"><a class="page-link" href="#">12</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <i class="fa-solid fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div> -->
        </div>
    </div>
</div>
<!--===== SERVICE AREA ENDS =======-->


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
                                <a href="contact.html" class="header-btn1 btn2">
                                    <img src="{{ asset('assets/img/icons/logo-icon1.svg') }}" alt="">
                                    Contact Us</a>
                            </div>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-5">
                            <div class="images2">
                                <div class="img1 reveal">
                                    <!-- <img src="{{ asset('assets/img/all-images/cta/cta-img1.png') }}" alt=""> -->
                                    <img src="https://html.vikinglab.agency/poolwash/assets/img/all-images/cta/cta-img1.png"
                                        alt="">
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