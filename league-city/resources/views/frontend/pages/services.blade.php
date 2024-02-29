@empty(!$web_banner)

<section class="page-banner section-padding" style="background-image: url({{ asset($web_banner['banner_image']); }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <span class="heading-top">{{ $web_banner['page_title']; }}</span>
                <h1 class="section-heading">{{ $web_banner['heading']; }}<span class="light">{{ $web_banner['sub_heading']; }}</span></h1>
                <p>{{ $web_banner['details']; }}</p>
            </div>
        </div>
    </div>
</section>

@endempty

<nav aria-label="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/'); }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
            </div>
        </div>
    </div>
</nav>

@include('frontend.pages.innovative-services')

<section class="services-page bg-dark section-padding" id="software-engineering">
    <div class="container">
        <div class="row align-items-center service-heading-mb mt-0">
            <div class="col-lg-6">
                <h2 class="section-heading">Software Engineering</h2>
            </div>
            <div class="col-lg-6">
                <p>Empowering your digital transformation: Partner with us to build mobile apps, web, and software that are an extension of your vision.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="box">
                    <div class="image">
                        <img src="{{ asset('includes-frontend'); }}/images/mobile-app-development.jpg" alt="Mobile App Development by app developer">
                    </div>
                    <div class="details">
                        <a href="#" class="heading"><span>Mobile App Development</span> <i class="fas fa-arrow-right"></i></a>
                        <ul>
                            <li><a href="#">iOS App Development</a></li>
                            <li><a href="#">Android App Development</a></li>
                            <li><a href="#">Flutter Development</a></li>
                            <li><a href="#">React Native App Development</a></li>
                            <li><a href="#">PWA Development</a></li>
                            <li><a href="#">Mobile App Maintenance & Support Services</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="box">
                    <div class="image">
                        <img src="{{ asset('includes-frontend'); }}/images/web-development.webp" alt="complete Web Development">
                    </div>
                    <div class="details">
                        <a href="#" class="heading"><span>Web Development</span> <i class="fas fa-arrow-right"></i></a>
                        <ul>
                            <li><a href="#">Front End Development</a></li>
                            <li><a href="#">Back End Development</a></li>
                            <li><a href="#">Full Stack Development</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="box">
                    <div class="image">
                        <img src="{{ asset('includes-frontend'); }}/images/custom-software-development.webp" alt="Custom Software Development by expert developers">
                    </div>
                    <div class="details">
                        <a href="#" class="heading"><span>Custom Software Development</span> <i class="fas fa-arrow-right"></i></a>
                        <ul>
                            <li><a href="#">Innovation ignited</a></li>
                            <li><a href="#">Top-notch expertise</a></li>
                            <li><a href="#">Agile approach</a></li>
                            <li><a href="#">Top-Notch Quality Every Time</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="box">
                    <div class="image">
                        <img src="{{ asset('includes-frontend'); }}/images/ui-ux-development.webp" alt="UI/UX Developemet by expert designers">
                    </div>
                    <div class="details">
                        <a href="#" class="heading"><span>UI/UX Developemet</span> <i class="fas fa-arrow-right"></i></a>
                        <ul>
                            <li><a href="#">Branding Services</a></li>
                            <li><a href="#">Photoshop</a></li>
                            <li><a href="#">Illustrator</a></li>
                            <li><a href="#">Coreldraw</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- <div class="col-lg-6">
                <div class="box">
                    <div class="image">
                        <img src="{{ asset('includes-frontend'); }}/images/graphic-designing.webp" alt="Graphic Designing">
                    </div>
                    <div class="details">
                        <a href="#" class="heading"><span>Graphic Designing</span> <i class="fas fa-arrow-right"></i></a>
                        <ul>
                            <li><a href="#">Photoshop</a></li>
                            <li><a href="#">Illustrator</a></li>
                            <li><a href="#">Coreldraw</a></li>
                        </ul>
                    </div>
                </div>
            </div> -->
        </div>
        <div id="digital-automation">
        </div>
        <div class="row align-items-center service-heading-mb">
            <div class="col-lg-6">
                <h2 class="section-heading">Digital Automation</h2>
            </div>
            <div class="col-lg-6">
                <p>We fuel organizational evolution with cutting-edge solutions, empowering you to dominate the digital landscape with streamlined workflows and intelligent decision-making.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="box">
                    <div class="image">
                        <img src="{{ asset('includes-frontend'); }}/images/ecommerce-development.webp" alt="E-Commerce Development leaguecityconsulting">
                    </div>
                    <div class="details">
                        <a href="#" class="heading"><span>E-Commerce Development</span> <i class="fas fa-arrow-right"></i></a>
                        <ul>
                            <li><a href="#">WordPress Development</a></li>
                            <li><a href="#">Magento Development</a></li>
                            <li><a href="#">OpenCart Development</a></li>
                            <li><a href="#">Shopify Development</a></li>
                            <li><a href="#">WooCommerce Development</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="box">
                    <div class="image">
                        <img src="{{ asset('includes-frontend'); }}/images/cyber-security.webp" alt="Cyber Security experts">
                    </div>
                    <div class="details">
                        <a href="#" class="heading"><span>Cyber Security</span> <i class="fas fa-arrow-right"></i></a>
                        <ul>
                            <li><a href="#">Penetration Testing</a></li>
                            <li><a href="#">Threat Intelligence & Monitoring</a></li>
                            <li><a href="#">Network Security & Firewall Solutions</a></li>
                            <li><a href="#">Access Control & Identity Management</a></li>
                            <li><a href="#">Data Encryption & Backups</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@include('frontend.pages.query-form')