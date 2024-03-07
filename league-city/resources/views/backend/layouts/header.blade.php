
<div id="wrapper" class="toggled">
    <!-- Sidebar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
        <button type="button" class="hamburger is-closed d-none d-sm-block" data-toggle="offcanvas">
            <i class="fa fa-angle-double-left"></i>
        </button>
        @if(@Auth::user()->user_type == 'admin')
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand d-none d-md-block">
                    <a href="{{ url('admin/dashboard') }}">
                        <span><img src="{{ asset('includes-backend/images/logo.png'); }}" alt="League City"></span>
                    </a>
                </li>
                <li class="mb-2 {{ ($current_page == 'dashboard') ? 'active' : ''; }}">
                    <a href="{{ url('admin/dashboard') }}">
                        <font><i class="bx bxs-dashboard"></i> <span>Dashboard</span></font>
                    </a>
                </li>
                
                <li class="mb-1 {{ ($current_page == 'leads') ? 'active' : ''; }}">
                    <a href="{{ url('admin/contact-request') }}">
                        <font><i class="bx bxs-user-pin"></i> <span>Contact Request</span></font>
                    </a>
                </li>

                <li class="mb-1 dropdown {{ ($current_page == 'portfolio') ? 'active' : ''; }}">
                    <a href="javascript:;" class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <font><i class="bx bxs-dashboard"></i> <span>Manage Portfolio</span></font>
                        <span class="bx bx-chevron-right"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="{{ route('portfolio.create'); }}">Add Portfolio</a></li>
                        <li><a class="dropdown-item" href="{{ route('portfolio'); }}">Portfolio List</a></li>
                    </ul>
                </li>

                <li class="mb-1 dropdown {{ ($current_page == 'blogs') ? 'active' : ''; }}">
                    <a href="javascript:;" class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <font><i class="bx bxs-image"></i> <span>Manage Blogs</span></font>
                        <span class="bx bx-chevron-right"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="{{ route('blogs.create'); }}">Add Blogs</a></li>
                        <li><a class="dropdown-item" href="{{ route('blogs'); }}">Blogs List</a></li>
                    </ul>
                </li>

                <li class="mb-1 dropdown {{ ($current_page == 'products') ? 'active' : ''; }}">
                    <a href="javascript:;" class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <font><i class="bx bxs-dashboard"></i> <span>Manage Products</span></font>
                        <span class="bx bx-chevron-right"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="{{ route('products.create'); }}">Add Products</a></li>
                        <li><a class="dropdown-item" href="{{ route('products'); }}">Products List</a></li>
                    </ul>
                </li>

                <li class="mb-1 dropdown {{ ($current_page == 'industry') ? 'active' : ''; }}">
                    <a href="javascript:;" class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <font><i class="bx bxs-dashboard"></i> <span>Manage Industry</span></font>
                        <span class="bx bx-chevron-right"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="{{ route('industry.create'); }}">Add Industry</a></li>
                        <li><a class="dropdown-item" href="{{ route('industry'); }}">Industry List</a></li>
                    </ul>
                </li>

                <li class="mb-1 dropdown {{ ($current_page == 'website-banner') ? 'active' : ''; }}">
                    <a href="javascript:;" class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <font><i class="bx bxs-dashboard"></i> <span>Manage Banner</span></font>
                        <span class="bx bx-chevron-right"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="{{ route('website-banner.create'); }}">Add Banner</a></li>
                        <li><a class="dropdown-item" href="{{ route('website-banner'); }}">Banner List</a></li>
                    </ul>
                </li>

                <li class="dropdown {{ $current_page == 'seo-data' ? 'active' : '' }}">
                    <a href="javascript:;" class="dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <font><i class="bx bxs-dashboard"></i> <span>Manage Seo Data</span></font>
                        <span class="bx bx-chevron-right"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="{{ url('/admin/seo-data/create') }}">Create SEO Data</a></li>
                        <li><a class="dropdown-item" href="{{ url('/admin/seo-data') }}">List of Seo Data</a></li>
                    </ul>
                </li>

                <li class="mb-1 dropdown {{ ($current_page == 'package-types' || $current_page == 'packages' || $current_page == 'sub-keypoints' || $current_page == 'package-includes') ? 'active' : ''; }}">
                    <a href="javascript:;" class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <font><i class="bx bxs-dashboard"></i> <span>Manage Package</span></font>
                        <span class="bx bx-chevron-right"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="{{ route('package.types'); }}">Package Type List</a></li>
                    </ul>
                </li>

                {{-- <li class="mb-1 dropdown {{ ($current_page == 'packages' || $current_page == 'sub-keypoints') ? 'active' : ''; }}">
                    <a href="javascript:;" class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <font><i class="bx bxs-dashboard"></i> <span>Manage Packages</span></font>
                        <span class="bx bx-chevron-right"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="{{ route('packages.create'); }}">Add Packages</a></li>
                        <li><a class="dropdown-item" href="{{ route('packages'); }}">Packages List</a></li>
                    </ul>
                </li> --}}

                {{-- <li class="mb-1 dropdown {{ ($current_page == 'package-includes') ? 'active' : ''; }}">
                    <a href="javascript:;" class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <font><i class="bx bxs-dashboard"></i> <span>Packages Includes</span></font>
                        <span class="bx bx-chevron-right"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="{{ route('package.includes.create'); }}">Add Includes</a></li>
                        <li><a class="dropdown-item" href="{{ route('package.includes'); }}">Includes List</a></li>
                    </ul>
                </li> --}}

                {{-- <li class="mb-1 dropdown {{ ($current_page == 'customers') ? 'active' : ''; }}">
                    <a href="javascript:;" class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <font><i class="bx bxs-user"></i> <span>Manage Customers</span></font>
                        <span class="bx bx-chevron-right"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="{{ url('/admin/customers'); }}">Add Customers</a></li>
                        <li><a class="dropdown-item" href="{{ url('/admin/customers-list'); }}">Customers List</a></li>
                    </ul>
                </li> --}}
            </ul>
        @endif
    </nav>
    
    
    
    <div class="rightside" id="page-content-wrapper">
        <header>
            <section class="header">
                <div class="row align-items-center">
                    <div class="col-sm-6 col-4">
                        <h5 class="mb-0 d-none d-md-block">{{ $page_title; }}</h5>
                        <div class="d-flex align-items-center d-block d-md-none">
                            <button type="button" class="hamburger is-open" data-toggle="offcanvas">
                                <i class="fa fa-angle-double-left"></i>
                            </button>
                            <h6 class="m-0 ms-2"><a href="{{ url('admin/dashboard') }}">Admin</a></h6>
                        </div>
                    </div>
                    <div class="col-sm-6 col-8">
                        <ul class="header-nav">

                            <li>
                                <a href="javascript:;" id="darkMode" rel="{{ asset('includes-backend/css/dark-mode.css') }}"><i class="bx bx-moon"></i></a>

                                <a href="javascript:;" id="defaultMode" rel="{{ asset('includes-backend/css/default.css') }}" style="display: none;"><i class="bx bx-sun"></i></a>
                            </li>

                            <li class="dropdown user">
                                <a class="dropdown-toggle d-none d-md-flex" href="javascript:;" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div>
                                        @if(@Auth::user())
                                            <h6>{{ Auth::user()->name; }}</h6>
                                        @else
                                            <h6>{{ Str::ucfirst(session('user_name')); }}</h6>
                                        @endif
                                        <p>{{ Str::ucfirst(Auth::user()->user_type); }}</p>
                                    </div>
                                    <img src="{{ asset('includes-backend/images/default-user.webp'); }}" alt="">
                                </a>

                                <a class="dropdown-toggle d-block d-md-none" href="javascript:;" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bx bx-user"></i>
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a href="{{ url('/logout') }}" class="dropdown-item"><i class="bx bx-log-out-circle"></i> Logout</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
            </section>
        </header>