<div class="bg-dark">
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
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
                    <h2 class="section-heading">Revolutionary Software Solutions</h2>
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
                    <div class="btnrow text-center">
                        <a href="{{ url('services') }}" class="btn web-btn">View All Services</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="recent-work section-padding pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 text-center">
                    <h2 class="section-heading with-p">Start your journey with our latest innovative projects</h2>
                    <p class="heading-info text-white">We understand customer actions, emotions, and unspoken desires. Through design and technology, we create solutions that make a real difference.</p>
                </div>
            </div>
        </div>
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
        <div class="btnrow text-center">
            <a href="{{ url('portfolio'); }}" class="btn web-btn">See Our Portfolio</a>
        </div>
    </section>

    <section class="explore section-padding">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="box">
                        <h2>Speed, Agility, Innovation: Your keys to success</h2>
                        <p>Empower your business to evolve. Agile solutions, crafted for your unique transformation.</p>
                        <a href="{{ url('services') }}" class="btn white-btn">Explore</a>
                    </div>
                </div>
                <div class="col-lg-6">
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

<section class="industries" style="background-image: url({{ asset('includes-frontend'); }}/images/healthcarelifescience.webp)">
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
            <div class="col-lg-10 offset-lg-1 text-center">
                <h2 class="section-heading with-p">Transforming Industries with Next-Gen Innovation</h2>
                <p class="heading-info">Beyond automation, beyond disruption. We engineer human-centered innovation with powerful simplicity. Unleash your unexpected tomorrow..</p>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-lg-12">
                <div class="left-side">
                    <div class="nav flex-column nav-pills web-overflow" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-mobileapp-tab" data-bs-toggle="pill" data-bs-target="#v-pills-mobileapp" type="button" role="tab" aria-controls="v-pills-mobileapp" aria-selected="true">
                            <img src="{{ asset('includes-frontend'); }}/images/mobile-app-development.svg" alt="Mobile App Development image"> <br />
                            Mobile App Development
                        </button>

                        <button class="nav-link" id="v-pills-appdevelopment-tab" data-bs-toggle="pill" data-bs-target="#v-pills-appdevelopment" type="button" role="tab" aria-controls="v-pills-appdevelopment" aria-selected="false">
                            <img src="{{ asset('includes-frontend'); }}/images/app-development.svg" alt="App Development image"> <br />
                            Application Development
                        </button>

                        <button class="nav-link" id="v-pills-ai-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ai" type="button" role="tab" aria-controls="v-pills-ai" aria-selected="false">
                            <img src="{{ asset('includes-frontend'); }}/images/aiautomation.svg" alt="AI & Automation image"> <br />
                            AI & Automation</button>

                        <button class="nav-link" id="v-pills-uiux-tab" data-bs-toggle="pill" data-bs-target="#v-pills-uiux" type="button" role="tab" aria-controls="v-pills-uiux" aria-selected="false">
                            <img src="{{ asset('includes-frontend'); }}/images/uiux.svg" alt="UI/UX Services image"> <br />
                            UI/UX Services</button>

                        <button class="nav-link" id="v-pills-itconsulting-tab" data-bs-toggle="pill" data-bs-target="#v-pills-itconsulting" type="button" role="tab" aria-controls="v-pills-itconsulting" aria-selected="false">
                            <img src="{{ asset('includes-frontend'); }}/images/itconsulting.svg" alt="IT Consulting image"> <br />
                            IT Consulting</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="right-side bg-dark">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-mobileapp" role="tabpanel" aria-labelledby="v-pills-mobileapp-tab">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <div class="text-center">
                                        <h3>Mobile App Development</h3>
                                        <p>We're your end-to-end Mobile app development service provider excelling in crafting Native Android, iOS and Cross Platform Apps. Our team of experts delivers seamless functionality with stunning UI designs and top-notch performance- empowering your brand to thrive in the digital landscape.</p>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="#">iOS App Development </a>
                                        </li>
                                        <li>
                                            <a href="#">Android App Development </a>
                                        </li>
                                        <li>
                                            <a href="#">Flutter App Development </a>
                                        </li>
                                        <li>
                                            <a href="#">React Native App Development </a>
                                        </li>
                                        <li>
                                            <a href="#">Cross-Platform App Development</a>
                                        </li>
                                        <li>
                                            <a href="#">Hybrid App Development</a>
                                        </li>
                                        <li>
                                            <a href="#">MVP Development </a>
                                        </li>
                                        <li>
                                            <a href="#">Wearable App Development</a>
                                        </li>
                                        <li>
                                            <a href="#">Progressive Web App Development </a>
                                        </li>
                                        <li>
                                            <a href="#">Xamarin Development</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btnrow text-center">
                                <a href="{{ url('services') }}" class="btn web-btn">Explore More</a>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-appdevelopment" role="tabpanel" aria-labelledby="v-pills-appdevelopment-tab">

                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <div class="text-center">
                                        <h3>Application Development</h3>
                                        <p>We're your end-to-end Mobile app development service provider excelling in crafting Native Android, iOS and Cross Platform Apps. Our team of experts delivers seamless functionality with stunning UI designs and top-notch performance- empowering your brand to thrive in the digital landscape.</p>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="#">iOS App Development </a>
                                        </li>
                                        <li>
                                            <a href="#">Android App Development </a>
                                        </li>
                                        <li>
                                            <a href="#">Flutter App Development </a>
                                        </li>
                                        <li>
                                            <a href="#">React Native App Development </a>
                                        </li>
                                        <li>
                                            <a href="#">Cross-Platform App Development</a>
                                        </li>
                                        <li>
                                            <a href="#">Hybrid App Development</a>
                                        </li>
                                        <li>
                                            <a href="#">MVP Development </a>
                                        </li>
                                        <li>
                                            <a href="#">Wearable App Development</a>
                                        </li>
                                        <li>
                                            <a href="#">Progressive Web App Development </a>
                                        </li>
                                        <li>
                                            <a href="#">Xamarin Development</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btnrow text-center">
                                <a href="{{ url('services') }}" class="btn web-btn">Explore More</a>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-ai" role="tabpanel" aria-labelledby="v-pills-ai-tab">

                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <div class="text-center">
                                        <h3>AI & Automation</h3>
                                        <p>We're your end-to-end Mobile app development service provider excelling in crafting Native Android, iOS and Cross Platform Apps. Our team of experts delivers seamless functionality with stunning UI designs and top-notch performance- empowering your brand to thrive in the digital landscape.</p>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="#">iOS App Development </a>
                                        </li>
                                        <li>
                                            <a href="#">Android App Development </a>
                                        </li>
                                        <li>
                                            <a href="#">Flutter App Development </a>
                                        </li>
                                        <li>
                                            <a href="#">React Native App Development </a>
                                        </li>
                                        <li>
                                            <a href="#">Cross-Platform App Development</a>
                                        </li>
                                        <li>
                                            <a href="#">Hybrid App Development</a>
                                        </li>
                                        <li>
                                            <a href="#">MVP Development </a>
                                        </li>
                                        <li>
                                            <a href="#">Wearable App Development</a>
                                        </li>
                                        <li>
                                            <a href="#">Progressive Web App Development </a>
                                        </li>
                                        <li>
                                            <a href="#">Xamarin Development</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btnrow text-center">
                                <a href="{{ url('services') }}" class="btn web-btn">Explore More</a>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-uiux" role="tabpanel" aria-labelledby="v-pills-uiux-tab">

                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <div class="text-center">
                                        <h3>UI/UX Services</h3>
                                        <p>We're your end-to-end Mobile app development service provider excelling in crafting Native Android, iOS and Cross Platform Apps. Our team of experts delivers seamless functionality with stunning UI designs and top-notch performance- empowering your brand to thrive in the digital landscape.</p>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="#">iOS App Development </a>
                                        </li>
                                        <li>
                                            <a href="#">Android App Development </a>
                                        </li>
                                        <li>
                                            <a href="#">Flutter App Development </a>
                                        </li>
                                        <li>
                                            <a href="#">React Native App Development </a>
                                        </li>
                                        <li>
                                            <a href="#">Cross-Platform App Development</a>
                                        </li>
                                        <li>
                                            <a href="#">Hybrid App Development</a>
                                        </li>
                                        <li>
                                            <a href="#">MVP Development </a>
                                        </li>
                                        <li>
                                            <a href="#">Wearable App Development</a>
                                        </li>
                                        <li>
                                            <a href="#">Progressive Web App Development </a>
                                        </li>
                                        <li>
                                            <a href="#">Xamarin Development</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btnrow text-center">
                                <a href="{{ url('services') }}" class="btn web-btn">Explore More</a>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-itconsulting" role="tabpanel" aria-labelledby="v-pills-itconsulting-tab">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <div class="text-center">
                                        <h3>IT Consulting</h3>
                                        <p>We're your end-to-end Mobile app development service provider excelling in crafting Native Android, iOS and Cross Platform Apps. Our team of experts delivers seamless functionality with stunning UI designs and top-notch performance- empowering your brand to thrive in the digital landscape.</p>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="#">iOS App Development </a>
                                        </li>
                                        <li>
                                            <a href="#">Android App Development </a>
                                        </li>
                                        <li>
                                            <a href="#">Flutter App Development </a>
                                        </li>
                                        <li>
                                            <a href="#">React Native App Development </a>
                                        </li>
                                        <li>
                                            <a href="#">Cross-Platform App Development</a>
                                        </li>
                                        <li>
                                            <a href="#">Hybrid App Development</a>
                                        </li>
                                        <li>
                                            <a href="#">MVP Development </a>
                                        </li>
                                        <li>
                                            <a href="#">Wearable App Development</a>
                                        </li>
                                        <li>
                                            <a href="#">Progressive Web App Development </a>
                                        </li>
                                        <li>
                                            <a href="#">Xamarin Development</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btnrow text-center">
                                <a href="{{ url('services') }}" class="btn web-btn">Explore More</a>
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
            <div class="col-lg-10 offset-lg-1 text-center">
                <h2 class="section-heading with-p">What's New At LeagueCity?</h2>
                <p class="heading-info">Dive deep into our technical expertise with blog posts on AI, blockchain, Website & App Development and more.</p>
            </div>
        </div>
        <div class="row">
            <div class="owl-carousel blog-slider">
                @foreach($blog as $b)
                @php $url = url('blogs')."/".Str::slug($b['blog_title']."-".$b['id']);; @endphp
                <div class="item">
                    <div class="box">
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
    <div class="btnrow text-center">
        <a href="{{ url('blogs'); }}" class="btn web-btn">View All</a>
    </div>
</section>

@include('frontend.pages.query-form')