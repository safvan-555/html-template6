@extends('layouts.app')

@section('title', 'Projects - Crystal Craft')
@section('body-class', 'homepage3-body')

@section('content')
<!--===== HERO AREA STARTS =======-->
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
                    <h1>Latest Our Projects</h1>
                    <a href="index.html">Home <i class="fa-solid fa-angle-right"></i> <span> Latest Our Projects
                        </span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== HERO AREA ENDS =======-->

<!--===== PROJECTS AREA STARTS =======-->
<div class="projects-section-area sp1">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="800">
                <div class="gallery-boxarea">
                    <div class="img1">
                        <!-- <img src="{{ asset('assets/img/all-images/gallery/gallery-img6.png') }}" alt=""
                            class="elements15" /> -->
                        <img src="https://html.vikinglab.agency/poolwash/assets/img/all-images/gallery/gallery-img6.png"
                            alt="" class="elements15" />
                    </div>
                    <div class="text-area">
                        <p>Cleaning & Services</p>
                        <a href="{{ route('project.show', 1) }}">Crafting Pool Perfection</a>
                    </div>
                    <div class="arrow">
                        
                        <a href="{{ route('project.show', 1) }}"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                <div class="gallery-boxarea active">
                    <div class="img1">
                        <!-- <img src="{{ asset('assets/img/all-images/gallery/gallery-img7.png') }}" alt=""
                            class="elements15" /> -->
                        <img src="https://html.vikinglab.agency/poolwash/assets/img/all-images/gallery/gallery-img7.png"
                            alt="" class="elements15" />
                    </div>
                    <div class="text-area">
                        <p>Cleaning & Services</p>
                        <a href="{{ route('project.show', 2) }}">Crafting Pool Perfection</a>
                    </div>
                    <div class="arrow">
                        <a href="{{ route('project.show', 2) }}"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1200">
                <div class="gallery-boxarea">
                    <div class="img1">
                        <!-- <img src="{{ asset('assets/img/all-images/gallery/gallery-img8.png') }}" alt=""
                            class="elements15" /> -->
                        <img src="https://html.vikinglab.agency/poolwash/assets/img/all-images/gallery/gallery-img8.png"
                            alt="" class="elements15" />
                    </div>
                    <div class="text-area">
                        <p>Cleaning & Services</p>
                        <a href="{{ route('project.show', 3) }}">Crafting Pool Perfection</a>
                    </div>
                    <div class="arrow">
                        <a href="{{ route('project.show', 3) }}"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800">
                <div class="gallery-boxarea">
                    <div class="img1">
                        <!-- <img src="{{ asset('assets/img/all-images/gallery/gallery-img9.png') }}" alt=""
                            class="elements15" /> -->
                        <img src="https://html.vikinglab.agency/poolwash/assets/img/all-images/gallery/gallery-img9.png"
                            alt="" class="elements15" />
                    </div>
                    <div class="text-area">
                        <p>Cleaning & Services</p>
                        <a href="{{ route('project.show', 4) }}">Crafting Pool Perfection</a>
                    </div>
                    <div class="arrow">
                        <a href="{{ route('project.show', 4) }}"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="gallery-boxarea">
                    <div class="img1">
                        <!-- <img src="{{ asset('assets/img/all-images/gallery/gallery-img10.png') }}" alt=""
                            class="elements15" /> -->

                        <img src="https://html.vikinglab.agency/poolwash/assets/img/all-images/gallery/gallery-img10.png"
                            alt="" class="elements15" />

                    </div>
                    <div class="text-area">
                        <p>Cleaning & Services</p>
                        <a href="{{ route('project.show', 5) }}">Crafting Pool Perfection</a>
                    </div>
                    <div class="arrow">
                        <a href="{{ route('project.show', 5) }}"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200">
                <div class="gallery-boxarea">
                    <div class="img1">
                        <!-- <img src="{{ asset('assets/img/all-images/gallery/gallery-img11.png') }}" alt=""
                            class="elements15" /> -->

                        <img src="https://html.vikinglab.agency/poolwash/assets/img/all-images/gallery/gallery-img11.png"
                            alt="" class="elements15" />

                    </div>
                    <div class="text-area">
                        <p>Cleaning & Services</p>
                        <a href="{{ route('project.show', 6) }}">Crafting Pool Perfection</a>
                    </div>
                    <div class="arrow">
                        <a href="{{ route('project.show', 6) }}"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200">
                <div class="gallery-boxarea">
                    <div class="img1">
                        <!-- <img src="{{ asset('assets/img/all-images/gallery/gallery-img12.png') }}" alt=""
                            class="elements15" /> -->

                        <img src="https://html.vikinglab.agency/poolwash/assets/img/all-images/gallery/gallery-img12.png"
                            alt="" class="elements15" />

                    </div>
                    <div class="text-area">
                        <p>Cleaning & Services</p>
                        <a href="{{ route('project.show', 7) }}">Crafting Pool Perfection</a>
                    </div>
                    <div class="arrow">
                        <a href="{{ route('project.show', 7) }}"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200">
                <div class="gallery-boxarea">
                    <div class="img1">
                        <!-- <img src="{{ asset('assets/img/all-images/gallery/gallery-img13.png') }}" alt=""
                            class="elements15" /> -->

                        <img src="https://html.vikinglab.agency/poolwash/assets/img/all-images/gallery/gallery-img13.png"
                            alt="" class="elements15" />


                    </div>
                    <div class="text-area">
                        <p>Cleaning & Services</p>
                        <a href="{{ route('project.show', 8) }}">Crafting Pool Perfection</a>
                    </div>
                    <div class="arrow">
                        <a href="{{ route('project.show', 8) }}"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200">
                <div class="gallery-boxarea">
                    <div class="img1">
                        <!-- <img src="{{ asset('assets/img/all-images/gallery/gallery-img14.png') }}" alt=""
                            class="elements15" /> -->

                        <img src="https://html.vikinglab.agency/poolwash/assets/img/all-images/gallery/gallery-img14.png"
                            alt="" class="elements15" />

                    </div>
                    <div class="text-area">
                        <p>Cleaning & Services</p>
                        <a href="{{ route('project.show', 9) }}">Crafting Pool Perfection</a>
                    </div>
                    <div class="arrow">
                        <a href="{{ route('project.show', 9) }}"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="space18"></div>
            <div class="col-lg-12">
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
            </div>
        </div>
    </div>
</div>
<!--===== PROJECTS AREA ENDS =======-->

<!--===== CTA AREA STARTS =======-->
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
                                    <!-- <img src="{{ asset('assets/img/all-images/cta/cta-img1.png') }}" alt=""
                                        class="elements15"> -->

                                       <img src="https://html.vikinglab.agency/poolwash/assets/img/all-images/cta/cta-img1.png" alt=""
                                        class="elements15"> 
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
<!--===== CTA AREA ENDS =======-->
@endsection