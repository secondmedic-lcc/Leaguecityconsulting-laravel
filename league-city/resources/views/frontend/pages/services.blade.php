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
          
            @foreach($services as $p)
            @php $url = url('services')."/".$p->url_slug; @endphp
            <div class="col-lg-6">
                <div class="box">
                    <div class="image">
                        <img src="{{ asset($p->image); }}" alt="Mobile App Development by app developer">

                    </div>
                    <div class="details">
                        <div class="heading"><span>{{$p->name}}</span> <a href="{{$url }}"><i class="fas fa-arrow-right"></i></a></div>
                        <?php echo $p->description ?>
                        {{-- <ul>
                            <li>iOS App Development</li>
                            <li>Android App Development</li>
                            <li>Flutter Development</li>
                            <li>React Native App Development</li>
                            <li>PWA Development</li>
                            <li>Mobile App Maintenance & Support Services</li>
                        </ul> --}}
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="col-lg-6">
                <div class="box">
                    <div class="image">
                        <img src="{{ asset('includes-frontend'); }}/images/web-development.webp" alt="complete Web Development">
                    </div>
                    <div class="details">
                        <div class="heading"><span>Web Development</span> <i class="fas fa-arrow-right"></i></div>
                        <ul>
                            <li>Front End Development</li>
                            <li>Back End Development</li>
                            <li>Full Stack Development</li>
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
                        <div class="heading"><span>Custom Software Development</span> <i class="fas fa-arrow-right"></i></div>
                        <ul>
                            <li>Innovation ignited</li>
                            <li>Top-notch expertise</li>
                            <li>Agile approach</li>
                            <li>Top-Notch Quality Every Time</li>
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
                        <div class="heading"><span>UI/UX Developemet</span> <i class="fas fa-arrow-right"></i></div>
                        <ul>
                            <li>Branding Services</li>
                            <li>Photoshop</li>
                            <li>Illustrator</li>
                            <li>Coreldraw</li>
                        </ul>
                    </div>
                </div>
            </div> --}}

            <!-- <div class="col-lg-6">
                <div class="box">
                    <div class="image">
                        <img src="{{ asset('includes-frontend'); }}/images/graphic-designing.webp" alt="Graphic Designing">
                    </div>
                    <div class="details">
                        <div class="heading"><span>Graphic Designing</span> <i class="fas fa-arrow-right"></i></div>
                        <ul>
                            <li>Photoshop</li>
                            <li>Illustrator</li>
                            <li>Coreldraw</li>
                        </ul>
                    </div>
                </div>
            </div> -->
        </div>
     
        <div id="digital-automation">
        </div>
        {{-- <div class="row align-items-center service-heading-mb">
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
                        <div class="heading"><span>E-Commerce Development</span> <i class="fas fa-arrow-right"></i></div>
                        <ul>
                            <li>WordPress Development</li>
                            <li>Magento Development</li>
                            <li>OpenCart Development</li>
                            <li>Shopify Development</li>
                            <li>WooCommerce Development</li>
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
                        <div class="heading"><span>Cyber Security</span> <i class="fas fa-arrow-right"></i></div>
                        <ul>
                            <li>Penetration Testing</li>
                            <li>Threat Intelligence & Monitoring</li>
                            <li>Network Security & Firewall Solutions</li>
                            <li>Access Control & Identity Management</li>
                            <li>Data Encryption & Backups</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</section>


@include('frontend.pages.query-form')