<!--===== FOOTER AREA STARTS =======-->
<div class="footer3-section-area">
    <img src="{{ asset('assets/img/elements/elements2.png') }}" alt="" class="elements2 sw" />
    <div class="container">
        <div class="row">
            <div class="col-lg col-md-6">
                <div class="footer-logo-area">
                   <!-- <img src="{{ asset('assets/img/logo/Crystal-Craft-Logo.svg') }}" alt="" class="elements2 sw" /> -->
                   <img src="{{ asset('assets/img/logo/Crystal-Craft-Logo.svg') }}" alt="" />
                    <p>We are dedicated to providing exceptional pool cleaning and maintenance services</p>
                    <div class="space24"></div>
                    <ul>
                        <li><a target="_blank" href="https://www.instagram.com/crystalcraftuae?igsh=MW40dm1jOXNnaTdqZA=="><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg col-md-6">
                <div class="footer-header pbleft">
                    <h3>Quick links</h3>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ route('services') }}">Service</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('projects') }}">Latest Projects</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg col-md-6">
                <div class="footer-header pbleft2">
                    <h3>Other Links</h3>
                    <ul>
            @foreach($ourServices as $service)
                <li>
                    <a  href="{{ route('service.show', $service->id) }}">
                        {{ $service->card_heading }}
                    </a>
                </li>
            @endforeach
        </ul>
                </div>
            </div>

            <div class="col-lg col-md-6">
                <div class="footer-header">
                    <h3>Newsletter</h3>
                    <p>Subscribe us & receive our latest news & articles</p>
                    <div class="space32"></div>
                    <form method="POST" action="{{ route('newsletter.subscribe') }}">
                        @csrf
                        <input type="email" name="email" placeholder="Email Address.." required />
                        <button type="submit" class="header-btn3">
                            <img src="{{ asset('assets/img/icons/logo-icon1.svg') }}" alt="" /> Subscribe Now
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="space48"></div>
        <div class="row">
            <div class="col-lg-12">
                <div class="copyright-area">
                    <p>Copyright {{ date('Y') }} Crystal Craft. All Rights Reserved</p>
                    <p>
                        <a href="#">Terms & Conditions</a> <span> | </span>
                        <a href="#">Privacy Policy</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== FOOTER AREA ENDS =======-->