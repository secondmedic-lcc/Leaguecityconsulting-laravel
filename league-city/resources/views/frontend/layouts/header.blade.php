@php
use App\Models\PackageTypes;
$package_types = PackageTypes::where('status',1)->orderBy('package_name','asc')->get();
@endphp

<header>
    <section class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/'); }}">
                    <img src="{{ asset('includes-frontend'); }}/images/logo-white.webp" class="logo" alt="League City Consulting white company Logo">
                </a>
                <a class="btn web-btn d-inline-flex d-lg-none menu-btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                    <span class="navbar-toggler-icon"></span>
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    @include('frontend/layouts/header-menu')
                </div>
            </div>
        </nav>
    </section>

    <div class="offcanvas offcanvas-start header-sidebar" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <div class="sidebar-logo">
                <a href="{{ url('/'); }}">
                    <img src="{{ asset('includes-frontend'); }}/images/logo-white.webp" alt="League City Consulting white company Logo">
                </a>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            @include('frontend/layouts/header-menu')
            <ul class="social-icons">
                <li>
                    <a href="https://www.facebook.com/leaguecityconsulting" target="_blank"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/leaguecityconsulting/" target="_blank"><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/company/league-city-consulting" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </li>
            </ul>
        </div>
    </div>
</header>