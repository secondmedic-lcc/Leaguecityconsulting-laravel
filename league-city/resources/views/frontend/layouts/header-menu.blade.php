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
    <li class="nav-item">
        <a class="nav-link" href="{{ url('products'); }}">Products</a>
    </li>
    {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ url('packages'); }}">Packages</a>
    </li> --}}
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Packages
        </a>
        <ul class="dropdown-menu">
            @foreach($package_types as $p)
            <li>
                <a class="dropdown-item" href="{{ url('packages/'.$p->package_slug); }}">{{ $p->package_name; }}</a>
            </li>
            @endforeach
        </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('blogs'); }}">Blogs</a>
    </li>
</ul>
<a href="{{ url('contact-us'); }}" class="btn web-btn">Let's Connect</a>