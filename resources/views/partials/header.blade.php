<!--=====HEADER START=======-->
<style>
    .whatsapp-float {
    position: fixed;
    bottom: 95px;
    right: 26px;
    width: 60px;
    height: 60px;
    background: #25D366;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 24px;
    z-index: 99998;
    box-shadow: 0 4px 15px rgba(37, 211, 102, 0.3);
}
</style>
<a href="https://wa.me/+971547007952?text=Hello%20I%20am%20interested%20in%20your%20services" class="whatsapp-float" target="_blank">
    <i class="fab fa-whatsapp whatsapp-icon"></i>
</a>
<header>
    <div class="header-area homepage3 header header-sticky d-none d-lg-block" id="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-elements">
                        <div class="site-logo">
                            <a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo/Crystal-Craft-Logo.svg') }}" alt="" /></a>
                        </div>
                        <div class="main-menu">
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About</a></li>
                                <li><a href="{{ route('services') }}">Services</a></li>
                                <li><a href="{{ route('projects') }}">Projects</a></li>
                                <li><a href="{{ route('blogs') }}">Contact Us</a></li>
                                <!-- <li><a href="{{ route('pages') }}">Pages</a></li> -->
                            </ul>
                        </div>
                        <div class="btn-area">
                            <a href="{{ route('quote') }}" class="header-btn3">
                                <img src="{{ asset('assets/img/icons/logo-icon2.svg') }}" alt="" /> Request A Quote
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--=====HEADER END =======-->