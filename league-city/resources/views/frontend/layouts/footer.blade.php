<footer>
    <section class="footer section-padding bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="footer-info">
                        <div class="logo">
                            <a href="{{ url('/'); }}">
                                <img src="{{ asset('includes-frontend'); }}/images/logo-white.webp" alt="League City Consulting">
                            </a>
                        </div>
                        <p>League City Consulting crafts elegant solutions for simple and complex business problems.</p>
                    </div>
                    <!-- <div class="form-group mt-lg-4 mt-3 mb-0">
                        <input type="text" class="form-control" placeholder="Your Email Address">
                        <button class="btn web-btn">Subscribe Now</button>
                    </div> -->
                    <ul class="social-icons colorful d-none d-lg-flex">
                        <li class="facebook">
                            <a href="https://www.facebook.com/leaguecityconsulting" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="instagram">
                            <a href="https://www.instagram.com/leaguecityconsulting/" target="_blank"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li class="linkedin">
                            <a href="https://www.linkedin.com/company/league-city-consulting" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 offset-lg-1 col-sm-6 col-6">
                    <h2 class="footer-h">Software Engineering</h2>
                    <ul class="list">
                        @php   use App\Models\Services; 
                                $services = Services::where(array('status' => 1))->limit(4)->get();
                                $services2 = Services::where(array('status' => 1))->skip(4)->limit(4)->get();  @endphp

                        @foreach($services as $p)
                        @php $url = url('services')."/".$p->url_slug; @endphp
                            <li><a href="{{ $url }}">{{$p->name}}</a></li>
                        @endforeach
                      
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6 col-6">
                    <h2 class="footer-h">Digital Automation</h2>
                    <ul class="list">
                        @foreach($services2 as $p)
                        @php $url = url('services')."/".$p->url_slug; @endphp
                            <li><a href="{{ $url }}">{{$p->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-6 col-6">
                    <h2 class="footer-h">Quick Links</h2>
                    <ul class="list">
                        <li><a href="{{ url('about-us') }}">About Us</a></li>
                        <li><a href="{{ url('services') }}">Services</a></li>
                        <li><a href="{{ url('portfolio') }}">Portfolio</a></li>
                        <li><a href="{{ url('contact-us') }}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <p>&copy; 2024 League City Consulting. All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="links">
                        <a href="{{ url('terms-and-conditions') }}">Terms of Use</a>
                        <a href="{{ url('privacy-policy') }}">Privacy</a>
                        <a href="{{ url('sitemap.xml') }}">Sitemap</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>