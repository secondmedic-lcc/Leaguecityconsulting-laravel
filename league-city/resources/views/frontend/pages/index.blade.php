<div class="bg-dark">
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                    <h1 class="section-heading">
                        <span class="light">Leading</span> Web Development <br><span class="light">&</span> IT Solution <span class="light">Company</span>
                    </h1>
                    <div class="content">
                        <p>
                            League City Consulting is a top-rated
                            <b>Web Design & Web Development</b> Company based in USA. Get
                            in touch to boost your business online.
                        </p>
                    </div>
                    <a href="{{ url('contact-us') }}" class="btn web-btn">Let's Connect</a>
                </div>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-heading" data-aos="fade-up" data-aos-delay="100">Revolutionary Software Solutions</h2>
                    <div class="services-slider-height" data-aos="zoom-in" data-aos-delay="200">
                        <div class="owl-carousel services-slider">

                            <div class="item">
                                <div class="box">
                                    <div class="images">
                                        <img src="{{ asset('includes-frontend'); }}/images/mobile-app-development.jpg" alt="Mobile App Development image">
                                    </div>
                                    <div class="content">
                                        <h3>Mobile App Development</h3>
                                        <p>We design and build captivating apps that drive results.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="box">
                                    <div class="images">
                                        <img src="{{ asset('includes-frontend'); }}/images/web-development.webp" alt="Web Development image">
                                    </div>
                                    <div class="content">
                                        <h3>Web <br>Development</h3>
                                        <p>We craft stunning websites and web apps that drive results</p>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="box">
                                    <div class="images">
                                        <img src="{{ asset('includes-frontend'); }}/images/custom-software-development.webp" alt="Custom Software Development image">
                                    </div>
                                    <div class="content">
                                        <h3>Custom Software Development
                                        </h3>
                                        <p>We nurture your concept to life as a powerful digital solution.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="box">
                                    <div class="images">
                                        <img src="{{ asset('includes-frontend'); }}/images/ui-ux-development.webp" alt="UI/UX Development image">
                                    </div>
                                    <div class="content">
                                        <h3>UI/UX Development
                                        </h3>
                                        <p>Beyond pixels and code, we build your digital dreams</p>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="box">
                                    <div class="images">
                                        <img src="{{ asset('includes-frontend'); }}/images/ecommerce-development.webp" alt="E-Commerce Development image">
                                    </div>
                                    <div class="content">
                                        <h3>E-Commerce Development</h3>
                                        <p>We build a loyal online community with your high-performance store.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="box">
                                    <div class="images">
                                        <img src="{{ asset('includes-frontend'); }}/images/graphic-designing.webp" alt="Graphic Designing image">
                                    </div>
                                    <div class="content">
                                        <h3>Graphic <br>Designing</h3>
                                        <p>Beyond beauty, beyond function Design's boundless realm.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="box">
                                    <div class="images">
                                        <img src="{{ asset('includes-frontend'); }}/images/cyber-security.webp" alt="Cyber Security image">
                                    </div>
                                    <div class="content">
                                        <h3>Cyber <br>Security</h3>
                                        <p>See the unseen threats Stay vigilant, stay secure.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="btnrow text-center" data-aos="zoom-in">
                        <a href="{{ url('services') }}" class="btn web-btn">View All Services</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="recent-work section-padding pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 text-center" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="section-heading with-p">Start your journey with our latest innovative projects</h2>
                    <p class="heading-info text-white">We understand customer actions, emotions, and unspoken desires. Through design and technology, we create solutions that make a real difference.</p>
                </div>
            </div>
        </div>
        <div class="work-slider-height" data-aos="zoom-in" data-aos-delay="200">
            <div class="owl-carousel work-slider">
                @foreach($portfolio as $p)
                <div class="item">
                    <div class="box" style="background-image: url({{ asset($p['image']); }})">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <img src="{{ asset($p['logo']); }}" class="logo" alt="SecondMedic app">
                                <h2><span class="light">{{ $p['name'] }}</span><br> {{ $p['heading'] }}</h2>
                                <p>{{ $p['sub_heading'] }}</p>
                                <!-- <a href="{{ url('singleportfolio'); }}" target="_blank" class="btn web-btn">View Project Details</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="btnrow text-center" data-aos="zoom-in">
            <a href="{{ url('portfolio'); }}" class="btn web-btn">See Our Portfolio</a>
        </div>
    </section>

    <section class="explore section-padding">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6" data-aos="zoom-in-right" data-aos-delay="100">
                    <div class="box">
                        <h2>Speed, Agility, Innovation: Your keys to success</h2>
                        <p>Empower your business to evolve. Agile solutions, crafted for your unique transformation.</p>
                        <a href="{{ url('services') }}" class="btn white-btn">Explore</a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="zoom-in-left" data-aos-delay="200">
                    <div class="box left-border">
                        <h2>Unlocking Industry Potential Through Digital Innovation</h2>
                        <p>Beyond trends, beyond limits. Explore the uncharted territories of your business.Unleash new possibilities in Business.</p>
                        <a href="{{ url('services') }}" class="btn white-btn">Explore</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="industries" style="background-image: url({{ asset('includes-frontend'); }}/images/healthcarelifescience.webp)" data-aos="zoom-in" data-aos-delay="100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-heading">Sectors We Cover</h2>
            </div>
        </div>
    </div>

    <div class="owl-carousel industry-slider">
        <div class="item">
            <div class="box active" id="healthcarelifescience">
                <h2>Healthcare & Lifescience</h2>
                <div class="hide">
                    <p>Connecting Patients and Providers Through Powerful Healthcare Software</p>
                    <a href="{{ url('services') }}" class="btn web-btn">Know More</a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="box" id="ecommercesolutions">
                <h2>E-Commerce Solutions</h2>
                <div class="hide">
                    <p>Supercharge Your Sales: Drive Revenue & Order Value with Expert E-Commerce Solutions</p>
                    <a href="{{ url('services') }}" class="btn web-btn">Know More</a>
                </div>
            </div>
        </div>

        <div class="item">
            <div class="box" id="gasandoil">
                <h2>Gas and <br>oil</h2>
                <div class="hide">
                    <p>Sustainable Solutions for Diverse and Dynamic Energy Landscape</p>
                    <a href="{{ url('services') }}" class="btn web-btn">Know More</a>
                </div>
            </div>
        </div>

        <div class="item">
            <div class="box" id="educationandelearning">
                <h2>Education and E-learning</h2>
                <div class="hide">
                    <p>Immersive, Interactive, and Personalized Training Solutions</p>
                    <a href="{{ url('services') }}" class="btn web-btn">Know More</a>
                </div>
            </div>
        </div>

        <div class="item">
            <div class="box" id="mediaandentertainment">
                <h2>Media and Entertainment</h2>
                <div class="hide">
                    <p>Elevate Your M&E Content and Captivate Audiences</p>
                    <a href="{{ url('services') }}" class="btn web-btn">Know More</a>
                </div>
            </div>
        </div>

        <div class="item">
            <div class="box" id="ondemanddelivery">
                <h2>On Demand <br>Delivery</h2>
                <div class="hide">
                    <p>Let us handle the logistics, you focus on what matters</p>
                    <a href="{{ url('services') }}" class="btn web-btn">Know More</a>
                </div>
            </div>
        </div>

        <div class="item">
            <div class="box" id="travelandhospitality">
                <h2>Travel and <br>Hospitality</h2>
                <div class="hide">
                    <p>Software for Seamless Journeys & Thriving Guests</p>
                    <a href="{{ url('services') }}" class="btn web-btn">Know More</a>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="technology section-padding pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 text-center" data-aos="fade-up" data-aos-delay="100">
                <h2 class="section-heading with-p">Transforming Industries with Next-Gen Innovation</h2>
                <p class="heading-info">Beyond automation, beyond disruption. We engineer human-centered innovation with powerful simplicity. Unleash your unexpected tomorrow..</p>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-lg-12">
                <div class="left-side">
                    <div class="nav flex-column nav-pills web-overflow" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-mobileapp-tab" data-bs-toggle="pill" data-bs-target="#v-pills-mobileapp" type="button" role="tab" aria-controls="v-pills-mobileapp" aria-selected="true" data-aos="fade-up" data-aos-delay="100">
                            Mobile App Development
                        </button>

                        <button class="nav-link" id="v-pills-appdevelopment-tab" data-bs-toggle="pill" data-bs-target="#v-pills-appdevelopment" type="button" role="tab" aria-controls="v-pills-appdevelopment" aria-selected="false" data-aos="fade-up" data-aos-delay="200">
                            Application Development
                        </button>

                        <button class="nav-link" id="v-pills-ai-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ai" type="button" role="tab" aria-controls="v-pills-ai" aria-selected="false" data-aos="fade-up" data-aos-delay="300">

                            AI & Automation</button>

                        <button class="nav-link" id="v-pills-uiux-tab" data-bs-toggle="pill" data-bs-target="#v-pills-uiux" type="button" role="tab" aria-controls="v-pills-uiux" aria-selected="false" data-aos="fade-up" data-aos-delay="400">

                            UI/UX Services</button>

                        <button class="nav-link" id="v-pills-itconsulting-tab" data-bs-toggle="pill" data-bs-target="#v-pills-itconsulting" type="button" role="tab" aria-controls="v-pills-itconsulting" aria-selected="false" data-aos="fade-up" data-aos-delay="500">

                            IT Consulting</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="right-side bg-dark" data-aos="flip-left">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-mobileapp" role="tabpanel" aria-labelledby="v-pills-mobileapp-tab">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <img src="{{ asset('includes-frontend'); }}/images/mobileapp.webp" alt="Mobile App Development">
                                </div>
                                <div class="col-lg-8">
                                    <div class="content">
                                        <h3>Mobile App Development</h3>
                                        <div class="line"></div>
                                        <ul>
                                            <li>
                                                Crafting Solutions for iOS Ecosystem
                                            </li>
                                            <li>
                                                Tailored Solutions for Android Platforms
                                            </li>
                                            <li>
                                                Innovative Apps with Flutter Framework
                                            </li>
                                            <li>
                                                Cross-Platform Excellence with React Native
                                            </li>
                                            <li>
                                                Unifying Platforms with Cross-Platform Development
                                            </li>
                                            <li>
                                                Blending Technologies in Hybrid App Development
                                            </li>
                                            <li>
                                                Prototyping with MVP Development
                                            </li>
                                            <li>
                                                Engaging Experience with Progressive Web Apps
                                            </li>
                                        </ul>
                                        <div class="text-end">
                                            <a href="{{ url('services') }}" class="btn web-btn">Explore More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="v-pills-appdevelopment" role="tabpanel" aria-labelledby="v-pills-appdevelopment-tab">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <img src="{{ asset('includes-frontend'); }}/images/application-development.webp" alt="Application Development">
                                </div>
                                <div class="col-lg-8">
                                    <div class="content">
                                        <h3>Application Development</h3>
                                        <div class="line"></div>
                                        <ul>
                                            <li>
                                                Crafting Web Applications for Unique Needs
                                            </li>
                                            <li>
                                                Building Robust E-Commerce Solutions
                                            </li>
                                            <li>
                                                Customised Solutions for Mobile Platforms
                                            </li>
                                            <li>
                                                Streamlining Enterprise Content Management
                                            </li>
                                            <li>
                                                Designing and Developing SaaS Applications
                                            </li>

                                            <li>
                                                Innovating with Internet of Things Applications
                                            </li>
                                            <li>
                                                Harnessing the Power of the Platform for Custom Apps
                                            </li>
                                            <li>
                                                Revitalizing and Upgrading Applications
                                            </li>
                                        </ul>
                                        <div class="text-end">
                                            <a href="{{ url('services') }}" class="btn web-btn">Explore More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-ai" role="tabpanel" aria-labelledby="v-pills-ai-tab">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <img src="{{ asset('includes-frontend'); }}/images/ai.webp" alt="AI & Automation">
                                </div>
                                <div class="col-lg-8">
                                    <div class="content">
                                        <h3>AI & Automation</h3>
                                        <div class="line"></div>
                                        <ul>
                                            <li>
                                                Chatbots & predictive analytics
                                            </li>
                                            <li>
                                                Smart Automation Solutions
                                            </li>
                                            <li>
                                                Creative AI Generation
                                            </li>
                                            <li>
                                                Integrating Machine Learning Operations
                                            </li>
                                            <li>
                                                Intelligent Cognitive Services
                                            </li>

                                            <li>
                                                Facial Identification Technology
                                            </li>

                                            <li>
                                                Linguistic Understanding Technology
                                            </li>

                                            <li>Independent AI Decision Agents</li>
                                        </ul>
                                        <div class="text-end">
                                            <a href="{{ url('services') }}" class="btn web-btn">Explore More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-uiux" role="tabpanel" aria-labelledby="v-pills-uiux-tab">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <img src="{{ asset('includes-frontend'); }}/images/uiux.webp" alt="Mobile App Development">
                                </div>
                                <div class="col-lg-8">
                                    <div class="content">
                                        <h3>UI/UX Services</h3>
                                        <div class="line"></div>
                                        <ul>
                                            <li>
                                                Intuitive UI/UX Design
                                            </li>
                                            <li>
                                                Visual & Interaction Design
                                            </li>
                                            <li>
                                                Rigorous UI Testing
                                            </li>
                                            <li>
                                                Enterprise UX
                                            </li>

                                            <li>
                                                Responsive Web Design
                                            </li>
                                            <li>
                                                Prototyping & MVP Development
                                            </li>
                                            <li>
                                                Comprehensive Branding
                                            </li>
                                            <li>
                                                Website Redesign
                                            </li>
                                        </ul>
                                        <div class="text-end">
                                            <a href="{{ url('services') }}" class="btn web-btn">Explore More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-itconsulting" role="tabpanel" aria-labelledby="v-pills-itconsulting-tab">

                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <img src="{{ asset('includes-frontend'); }}/images/itconsulting.webp" alt="Mobile App Development">
                                </div>
                                <div class="col-lg-8">
                                    <div class="content">
                                        <h3>IT Consulting</h3>
                                        <div class="line"></div>
                                        <ul>
                                            <li>
                                                Digital Transformation & Engineering
                                            </li>
                                            <li>
                                                Enterprise Mobility & Custom Software
                                            </li>
                                            <li>
                                                Strategic IT Planning & DevOps
                                            </li>
                                            <li>
                                                Microservices & Salesforce Expertise
                                            </li>
                                            <li>
                                                Custom Web and Mobile Apps
                                            </li>
                                            <li>
                                                Security Risk Assessments
                                            </li>
                                            <li>
                                                Cloud and Data Migration
                                            </li>
                                            <li>Salesforce Expertise
                                            </li>
                                        </ul>
                                        <div class="text-end">
                                            <a href="{{ url('services') }}" class="btn web-btn">Explore More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog section-padding pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 text-center" data-aos="fade-up" data-aos-delay="100">
                <h2 class="section-heading with-p">What's New At LeagueCity?</h2>
                <p class="heading-info">Dive deep into our technical expertise with blog posts on AI, blockchain, Website & App Development and more.</p>
            </div>
        </div>
        <div class="row">
            <div class="owl-carousel blog-slider">
                @php $i=2; @endphp
                @foreach($blog as $b)
                @php $url = url('blogs')."/".$b['url_slug']; @endphp
                <div class="item">
                    <div class="box" data-aos="fade-up" data-aos-delay="{{ $i++ }}00">
                        <a href="{{ $url; }}">
                            <div class="image">
                                <img src="{{ ($b['blog_image'] != '' && $b['blog_image'] != null) ? asset($b['blog_image']) : asset('includes-frontend/images/aichatbots.jpg'); }}" alt="{{ $b['blog_title'] }}">
                            </div>
                        </a>
                        <div>
                            <h3><a href="{{ $url; }}">{{ $b['blog_title'] }}</a></h3>
                            <ul class="blog-info-list">
                                <li><span class="text-grey">27 January 2024</span></li>
                                <li>Read Time : <span class="text-grey">{{ $b['read_time'] }}</span></li>
                            </ul>
                            <p class="mb-0"><span>{{ $b['blog_details'] }}</span> <a href="{{ $url; }}" class="web-clr">Read More</a></p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="btnrow text-center" data-aos="zoom-in">
        <a href="{{ url('blogs'); }}" class="btn web-btn">View All</a>
    </div>
</section>

@include('frontend.pages.query-form')