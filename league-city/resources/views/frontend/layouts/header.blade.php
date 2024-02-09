<header>
    <section class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/'); }}">
                    <img src="{{ asset('includes-frontend'); }}/images/logo-white.png" class="logo" alt="League City Consulting white company Logo">
                </a>
                <a class="btn web-btn d-inline-flex d-lg-none menu-btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                    <span class="navbar-toggler-icon"></span>
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('about-us'); }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('services'); }}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('portfolio'); }}">Portfolio</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ url('products'); }}">Products</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('blogs'); }}">Blogs</a>
                        </li>
                    </ul>
                    <a href="{{ url('contact-us'); }}" class="btn web-btn">Let's Connect</a>
                </div>
            </div>
        </nav>
    </section>

    <div class="offcanvas offcanvas-start header-sidebar" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <div class="sidebar-logo">
                <a href="{{ url('/'); }}">
                    <img src="{{ asset('includes-frontend'); }}/images/logo-white.png" alt="League City Consulting white company Logo">
                </a>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="menus">
                <li>
                    <a class="nav-link" href="{{ url('about-us'); }}">About Us</a>
                </li>
                <li>
                    <a class="nav-link" href="{{ url('services'); }}">Services</a>
                </li>
                <li>
                    <a class="nav-link" href="{{ url('portfolio'); }}">Portfolio</a>
                </li>
                <li>
                    <a class="nav-link" href="{{ url('blogs'); }}">Blogs</a>
                </li>
            </ul>
            <a href="{{ url('contact-us'); }}" class="btn web-btn w-100">Let's Connect</a>
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