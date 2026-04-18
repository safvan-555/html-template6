<!--===== MOBILE HEADER STARTS =======-->
<div class="mobile-header mobile-haeder3 d-block d-lg-none">
    <div class="container-fluid">
        <div class="col-12">
            <div class="mobile-header-elements">
                <div class="mobile-logo">
                    <a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo/Crystal-Craft-Logo.svg') }}" alt=""/></a>
                </div>
                <div class="mobile-nav-icon dots-menu">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mobile-sidebar mobile-sidebar3">
    <div class="logosicon-area">
        <div class="logos">
            <img src="{{ asset('assets/img/logo/Crystal-Craft-Logo.svg') }}" alt="" />
        </div>
        <div class="menu-close">
            <i class="fa-solid fa-xmark"></i>
        </div>
    </div>
    <div class="mobile-nav mobile-nav1">
        <ul class="mobile-nav-list nav-list1">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('services') }}">Services</a></li>
            <li><a href="{{ route('projects') }}">Projects</a></li>
            <li><a href="{{ route('contact') }}">Contact Us</a></li>
        </ul>

        <div class="allmobilesection">
            <a href="{{ route('quote') }}" class="header-btn1">
                <img src="{{ asset('assets/img/icons/logo-icon1.svg') }}" alt="" /> Get Started
                <span></span>
            </a>
            <div class="single-footer">
                <h3>Contact Info</h3>
                <div class="footer1-contact-info">
                    <div class="contact-info-single">
                        <div class="contact-info-icon">
                            <i class="fa-solid fa-phone-volume"></i>
                        </div>
                        <div class="contact-info-text">
                            <a href="tel:+971547007952">+971569632293</a>
                        </div>
                    </div>

                    <div class="contact-info-single">
                        <div class="contact-info-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="contact-info-text">
                            <a href="mailto:info@crystalcraftuae.com">info@crystalcraftuae.com</a>
                        </div>
                    </div>

                    <div class="single-footer">
                        <h3>Our Location</h3>
                        <div class="contact-info-single">
                            <div class="contact-info-icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="contact-info-text">
                                <a href="#">5Office 82, Oud Al Muteena 3, United Arab Emirates</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-footer">
                        <h3>Social Links</h3>
                        <div class="social-links-mobile-menu">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== MOBILE HEADER ENDS =======-->