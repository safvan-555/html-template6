@extends('layouts.app')

@section('title', 'Contact Us - Crystal Craft')
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
                    <h1>Contacts Us</h1>
                    <a href="index.html">Home <i class="fa-solid fa-angle-right"></i> <span>Contacts Us</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== HERO AREA ENDS =======-->

<!--===== CONTACT AREA STARTS =======-->
<div class="contact-box-section sp1">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="contact-boxarea">
                    <div class="img1">

                        <img src="{{ asset('assets/img/icons/location-icon2.svg') }}" alt="">
                    </div>
                    <div class="space32"></div>
                    <h4>Our Address</h4>
                    <div class="space32"></div>
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <div class="space32"></div>
                    <a href="#">Office 82, Oud Al Muteena 3
                        <br class="d-lg-block d-none"> United Arab Emirates</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="contact-boxarea">
                    <div class="img1">
                        <img src="{{ asset('assets/img/icons/call-icon4.svg') }}" alt="">
                    </div>
                    <div class="space32"></div>
                    <h4>Contact Us</h4>
                    <div class="space32"></div>
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <div class="space32"></div>
                    <a href="tel:+971569632293">+971569632293
                        <br class="d-lg-block d-none"> +971547007952</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="contact-boxarea">
                    <div class="img1">
                        <img src="{{ asset('assets/img/icons/email-icon2.svg') }}" alt="">
                    </div>
                    <div class="space32"></div>
                    <h4>Email Us</h4>
                    <div class="space32"></div>
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <div class="space32"></div>
                    <a href="mailto:info@crystalcraftuae.com">info@crystalcraftuae.com
                        <!-- <br class="d-lg-block d-none"> drmtech99.com -->
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mapouter">
    <div class="gmap_canvas">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4506257.120552435!2d88.67021924228865!3d21.954385721237916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1704088968016!5m2!1sen!2sbd"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

<div class="contact-inner-box-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-boxarea heading2">
                    <h2 class="text-center">Send Us Message</h2>
                    <p class="text-center">Your email address will not be published. Required fields are marked *</p>
                    <div class="space28"></div>

                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-area">
                                    <input type="text" id="name1" name="name1" placeholder="Full Name" required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="input-area">
                                    <input type="number" id="phone1" name="phone1" placeholder="Phone Number" required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="input-area">
                                    <input type="email" id="email1" name="email1" placeholder="Email Address" required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="input-area">
                                    <input type="text" id="subject1" name="subject1" placeholder="Subjects">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="input-area">
                                    <textarea id="message1" name="message1" placeholder="Write Message"
                                        required></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12 mt-2">
                                <div class="input-area">
                                    <button type="submit" id="submitBtn" class="header-btn1">
                                        <span id="btnText">
                                            <img src="{{ asset('assets/img/icons/logo-icon1.svg') }}" alt="">
                                            Submit Now
                                        </span>
                                        <span id="btnLoader" style="display:none;">Submitting...</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="space100 d-lg-block d-none"></div>
<div class="space50 d-lg-none d-block"></div>
<!--===== CONTACT AREA ENDS =======-->

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
                                <a href="contact.html" class="header-btn1">\
                                    <img src="{{ asset('assets/img/icons/logo-icon1.svg') }}" alt="">
                                    Schedule A Consulation</a>
                                <a href="contact.html" class="header-btn1 btn2">
                                    <img src="{{ asset('assets/img/icons/logo-icon1.svg') }}" alt=""> Contact Us</a>
                            </div>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-5">
                            <div class="images2">
                                <div class="img1 reveal">
                                    <!-- <img src="{{ asset('assets/img/all-images/cta/cta-img1.png') }}" alt=""> -->
                                    <img src="https://html.vikinglab.agency/poolwash/assets/img/all-images/cta/cta-img1.png"
                                        alt="keyframe5">
                                </div>
                                <div class="img2">
                                    <img src="{{ asset('assets/img/elements/elements5.png') }}" alt="keyframe5">

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

<script>
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');

    if (contactForm) {
        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault();

            // Get form values INSIDE the submit event handler
            const name = document.getElementById('name1').value;
            const phone = document.getElementById('phone1').value;
            const email = document.getElementById('email1').value;
            const subject = document.getElementById('subject1').value;
            const message= document.getElementById('message1').value;

            const formData = {
                name: name,
                phone: phone,
                email: email,
                subject: subject,
                message: message
            };

            console.log('FORM DATA:', formData);
            console.log('Individual values:', {
                name,
                phone,
                email,
                subject,
                message
            });

            const btn = document.getElementById('submitBtn');
            const btnText = document.getElementById('btnText');
            const btnLoader = document.getElementById('btnLoader');

            btn.disabled = true;
            btnText.style.display = 'none';
            btnLoader.style.display = 'inline';

            try {
                const response = await fetch('/quote', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                            .getAttribute('content')
                    },
                    body: JSON.stringify(formData)
                });

                const data = await response.json();

                if (data.status) {
                    alert('Message sent successfully!');
                    document.getElementById('contactForm').reset();
                } else {
                    alert(data.message || 'Something went wrong');
                }

            } catch (error) {
                console.error(error);
                alert('Server error');
            } finally {
                btn.disabled = false;
                btnText.style.display = 'inline';
                btnLoader.style.display = 'none';
            }
        });
    }
});
</script>


@endsection