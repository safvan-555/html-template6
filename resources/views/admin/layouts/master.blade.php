<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Portal - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
    :root {
        --primary-color: #4e73df;
        --secondary-color: #858796;
        --success-color: #1cc88a;
        --info-color: #36b9cc;
        --warning-color: #f6c23e;
        --danger-color: #e74a3b;
    }

    body {
        font-family: 'Nunito', 'Segoe UI', sans-serif;
        background-color: #f8f9fc;
    }

    .sidebar {
        background: linear-gradient(180deg, var(--primary-color) 0%, #224abe 100%);
        min-height: 100vh;
        box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
    }

    .sidebar .nav-link {
        color: rgba(255, 255, 255, 0.8);
        padding: 1rem;
        transition: all 0.3s;
    }

    .sidebar .nav-link:hover {
        color: white;
        background: rgba(255, 255, 255, 0.1);
    }

    .sidebar .nav-link.active {
        color: white;
        background: rgba(255, 255, 255, 0.2);
    }

    .sidebar .nav-link i {
        margin-right: 0.5rem;
        width: 1.5rem;
    }

    .topbar {
        background: white;
        box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.1);
    }

    .card {
        border: none;
        border-radius: 0.5rem;
        box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.1);
        transition: transform 0.3s;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .card-stats {
        border-left: 0.25rem solid;
    }

    .card-stats.primary {
        border-left-color: var(--primary-color);
    }

    .card-stats.success {
        border-left-color: var(--success-color);
    }

    .card-stats.info {
        border-left-color: var(--info-color);
    }

    .card-stats.warning {
        border-left-color: var(--warning-color);
    }

    .btn-primary {
        background: var(--primary-color);
        border: none;
    }

    .btn-primary:hover {
        background: #2e59d9;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .fade-in {
        animation: fadeIn 0.5s ease-out;
    }
    </style>
    @yield('styles')
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-lg-2 px-0 sidebar">
                <div class="text-center py-4">
                    <h4 class="text-white mb-0">Admin Portal</h4>
                    <small class="text-white-50">Dashboard</small>
                </div>
                <nav class="nav flex-column">

                    <a class="nav-link {{ request()->routeIs('admin.services') ? 'active' : '' }}"
                        href="{{ route('admin.services') }}">
                        <i class="fas fa-tachometer-alt"></i> Services
                    </a>
                    <a class="nav-link {{ request()->routeIs('admin.projects') ? 'active' : '' }}"
                        href="{{ route('admin.projects') }}">
                        <i class="fas fa-tachometer-alt"></i> Projects
                    </a>
                    <a class="nav-link {{ request()->routeIs('admin.aboutus_page') ? 'active' : '' }}"
                        href="{{ route('admin.aboutus_page') }}">
                        <i class="fas fa-tachometer-alt"></i> About Us Page
                    </a>
                    <a class="nav-link {{ request()->routeIs('admin.testimonials') ? 'active' : '' }}"
                        href="{{ route('admin.testimonials') }}">
                        <i class="fas fa-tachometer-alt"></i> Testimonials
                    </a>
                    <a class="nav-link {{ request()->routeIs('admin.home_page') ? 'active' : '' }}"
                        href="{{ route('admin.home-page') }}">
                        <i class="fas fa-tachometer-alt"></i> Home Page
                    </a>
                    <!-- <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" 
                       href="{{ route('admin.dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a> -->
                    <a class="nav-link" href="{{ route('admin.logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </nav>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 px-0">
                <!-- Topbar -->
                <div class="topbar p-3 d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">@yield('header', 'Dashboard')</h5>
                    <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            <i class="fas fa-user-circle"></i> {{ Auth::user()->name ?? 'Admin' }}
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-user"></i> Profile</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-lock"></i> Change Password</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('admin.logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="p-4 fade-in">
                    <!-- @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif -->

                    @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    @endif

                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    @yield('scripts')
</body>

</html>