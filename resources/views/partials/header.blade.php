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

.quote-modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6);
    backdrop-filter: blur(8px);
    z-index: 999999;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.quote-modal.active {
    display: flex;
    opacity: 1;
}

.modal-container {
    background: #ffffff;
    max-width: 500px;
    width: 90%;
    border-radius: 36px;
    box-shadow: 0 30px 50px rgba(0, 0, 0, 0.25), 0 0 0 1px rgba(0, 0, 0, 0.02);
    overflow: hidden;
    transform: scale(0.96);
    transition: transform 0.25s cubic-bezier(0.2, 0.9, 0.4, 1.1);
}

.quote-modal.active .modal-container {
    transform: scale(1);
}

.modal-header {
    background: #ffffff;
    padding: 24px 28px 12px 28px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #f0f2f5;
}

.modal-header h3 {
    font-family: 'Poppins', sans-serif;
    font-size: 1.7rem;
    font-weight: 700;
    background: linear-gradient(135deg, #0CC1E0, #013F7C);
    background-clip: text;
    -webkit-background-clip: text;
    color: transparent;
    letter-spacing: -0.3px;
}

.close-modal {
    background: #f1f5f9;
    border: none;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    font-size: 20px;
    cursor: pointer;
    transition: all 0.2s;
    color: #334155;
    display: flex;
    align-items: center;
    justify-content: center;
}

.close-modal:hover {
    background: #e2e8f0;
    color: #0f172a;
    transform: rotate(90deg);
}

.modal-body {
    padding: 28px 28px 36px;
}

.form-group {
    margin-bottom: 22px;
}

.form-group label {
    display: block;
    font-weight: 600;
    font-size: 0.85rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    color: #475569;
    margin-bottom: 8px;
}

.input-icon {
    position: relative;
    display: flex;
    align-items: center;
}

.input-icon i {
    position: absolute;
    left: 16px;
    color: #94a3b8;
    font-size: 1.1rem;
    pointer-events: none;
}

.input-icon input,
.input-icon textarea {
    width: 100%;
    padding: 8px 16px 8px 48px;
    border: 1.5px solid #e2e8f0;
    border-radius: 28px;
    font-size: 1rem;
    font-family: 'Inter', sans-serif;
    transition: all 0.2s;
    background: #fefefe;
    outline: none;
}

.input-icon textarea {
    padding: 14px 16px 14px 48px;
    resize: vertical;
    min-height: 100px;
}

.input-icon input:focus,
.input-icon textarea:focus {
    border-color: #c7a45b;
    box-shadow: 0 0 0 3px rgba(199, 164, 91, 0.2);
}

.submit-btn {
    background: #0CC1E0;
    color: white;
    border: none;
    width: 100%;
    padding: 14px;
    font-size: 1rem;
    font-weight: 700;
    border-radius: 40px;
    cursor: pointer;
    font-family: 'Poppins', sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    transition: all 0.25s;
    margin-top: 12px;
    letter-spacing: 0.3px;
}

.submit-btn i {
    font-size: 1.1rem;
}

.submit-btn:hover {
    background: #013F7C;
    transform: translateY(-2px);
    box-shadow: 0 12px 20px -12px rgba(199, 164, 91, 0.5);
}

/* success toast */
.toast-success {
    position: fixed;
    bottom: 30px;
    left: 50%;
    transform: translateX(-50%) scale(0.9);
    background: #1e293b;
    color: #fff;
    padding: 12px 28px;
    border-radius: 60px;
    font-weight: 500;
    font-size: 0.9rem;
    z-index: 9999999;
    backdrop-filter: blur(12px);
    background: rgba(30, 41, 59, 0.92);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    display: flex;
    align-items: center;
    gap: 12px;
    opacity: 0;
    transition: 0.2s;
    pointer-events: none;
}

.toast-success.show {
    opacity: 1;
    transform: translateX(-50%) scale(1);
}
</style>
<a href="https://wa.me/+971547007952?text=Hello%20I%20am%20interested%20in%20your%20services" class="whatsapp-float"
    target="_blank">
    <i class="fab fa-whatsapp whatsapp-icon"></i>
</a>
<header>
    <div class="header-area homepage3 header header-sticky d-none d-lg-block" id="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-elements">
                        <div class="site-logo">
                            <a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo/Crystal-Craft-Logo.svg') }}"
                                    alt="" /></a>
                        </div>
                        <div class="main-menu">
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About</a></li>
                                <li><a href="{{ route('services') }}">Services</a></li>
                                <li><a href="{{ route('projects') }}">Projects</a></li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                <!-- <li><a href="{{ route('pages') }}">Pages</a></li> -->
                            </ul>
                        </div>
                        <div class="btn-area">
                            <!-- <a href="{{ route('contact') }}" class="header-btn3">
                                <img src="{{ asset('assets/img/icons/logo-icon2.svg') }}" alt="" /> Request A Quote
                            </a> -->

                            <a href="javascript:void(0);" class="header-btn3" id="requestQuoteBtn">
                                <img src="{{ asset('assets/img/icons/logo-icon2.svg') }}" alt="icon" /> Request A Quote
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<div id="quoteModal" class="quote-modal">
    <div class="modal-container">
        <div class="modal-header">
            <h3><i class="fas fa-gem" style="font-size: 1.4rem; margin-right: 8px; color: #0CC1E0;"></i> Request a Quote
            </h3>
            <button class="close-modal" id="closeModalBtn"><i class="fas fa-times"></i></button>
        </div>
        <div class="modal-body">
            <form id="quoteForm">
                <div class="form-group">
                    <div class="input-icon">
                        <i class="fas fa-user"></i>
                        <input type="text" id="name" name="name" placeholder="John Carter" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-icon">
                        <i class="fas fa-phone-alt"></i>
                        <input type="tel" id="phone" name="phone" placeholder="+971 50 123 4567" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-icon">
                        <i class="fas fa-envelope"></i>
                        <input type="email" id="email" name="email" placeholder="hello@crystalcraft.com" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-icon">
                        <i class="fas fa-pen-fancy"></i>
                        <textarea id="message" name="message"
                            placeholder="Tell us about your vision, requirements or any special details..."></textarea>
                    </div>
                </div>
                <button type="submit" class="submit-btn"><i class="fas fa-paper-plane"></i> Send Quote Request</button>
            </form>
        </div>
    </div>
</div>

<div id="toastMsg" class="toast-success">
    <i class="fas fa-check-circle" style="font-size: 1.3rem;"></i> <span id="toastText">Quote request sent!</span>
</div>


<script>
const modal = document.getElementById('quoteModal');
const requestBtn = document.getElementById('requestQuoteBtn');
const closeBtn = document.getElementById('closeModalBtn');
const quoteForm = document.getElementById('quoteForm');
const toast = document.getElementById('toastMsg');
const toastTextSpan = document.getElementById('toastText');

function showToast(message, isError = false) {
    toastTextSpan.innerText = message;
    if (isError) {
        toast.style.background = "rgba(180, 70, 60, 0.92)";
        toast.querySelector('i').className = "fas fa-exclamation-circle";
    } else {
        toast.style.background = "rgba(30,41,59,0.92)";
        toast.querySelector('i').className = "fas fa-check-circle";
    }
    toast.classList.add('show');
    setTimeout(() => {
        toast.classList.remove('show');
        if (!isError) toast.querySelector('i').className = "fas fa-check-circle";
        else toast.querySelector('i').className = "fas fa-exclamation-circle";
    }, 3000);
}

function openModal() {
    modal.classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closeModal() {
    modal.classList.remove('active');
    document.body.style.overflow = '';
}

requestBtn.addEventListener('click', (e) => {
    e.preventDefault();
    openModal();
});

closeBtn.addEventListener('click', closeModal);

modal.addEventListener('click', (e) => {
    if (e.target === modal) {
        closeModal();
    }
});

document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && modal.classList.contains('active')) {
        closeModal();
    }
});

quoteForm.addEventListener('submit', async (e) => {
    e.preventDefault();

    const name = document.getElementById('name').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const email = document.getElementById('email').value.trim();
    const message = document.getElementById('message').value.trim();

    if (!name) {
        showToast('Please enter your full name', true);
        return;
    }
    if (!phone) {
        showToast('Phone number is required', true);
        return;
    }
    const phoneRegex = /^[\+\d\s\-\(\)]{5,20}$/;
    if (!phoneRegex.test(phone)) {
        showToast('Enter a valid phone number', true);
        return;
    }
    if (!email) {
        showToast('Email address is required', true);
        return;
    }
    const emailRegex = /^[^\s@]+@([^\s@.,]+\.)+[^\s@.,]{2,}$/;
    if (!emailRegex.test(email)) {
        showToast('Please enter a valid email address', true);
        return;
    }
    if (!message) {
        showToast('Please share a brief message about your project', true);
        return;
    }
    const formData = {
        name: name,
        phone: phone,
        email: email,
        message: message,
    };
    const response = await fetch('/quote', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify(formData)
    });
    const data = await response.json();

    if (data.status) {
        showToast(`✨ Thanks ${name.split(' ')[0]}! We'll get back shortly.`, false);
        quoteForm.reset();
        setTimeout(() => closeModal(), 800);
    } else {
        showToast('Something went wrong', true);
    }
});

const allInputs = document.querySelectorAll('.input-icon input, .input-icon textarea');
allInputs.forEach(input => {
    input.addEventListener('focus', () => {
        input.parentElement.style.transform = 'scale(1.01)';
    });
    input.addEventListener('blur', () => {
        input.parentElement.style.transform = 'scale(1)';
    });
});
</script>



<!--=====HEADER END =======-->