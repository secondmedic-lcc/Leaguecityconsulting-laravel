<style>
    header {
        display: none;
    }
</style>


<script type="text/javascript">
    (function(c, l, a, r, i, t, y) {
        c[a] = c[a] || function() {
            (c[a].q = c[a].q || []).push(arguments)
        };
        t = l.createElement(r);
        t.async = 1;
        t.src = "https://www.clarity.ms/tag/" + i;
        y = l.getElementsByTagName(r)[0];
        y.parentNode.insertBefore(t, y);
    })(window, document, "clarity", "script", "mtq6n04y2g");
</script>

<section class="campaign-banner" id="camp-form">
    <img src="{{ asset('includes-frontend') }}/images/campaign/saas-campaign-banner-img.webp" alt="img" class="banner-img">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <img src="{{ asset('includes-frontend') }}/images/logo-white.webp" alt="logo" class="logo">
                <h1>India’s #1 Mobile App Development Company</h1>
                <h5 class="web-clr">We Turn Your Great Ideas into Amazing Mobile Apps</h5>
                <ul>
                    <li>Accelerated Development Cycle</li>
                    <li>Fully Confidential, Strict NDA</li>
                    <li>Clients include Startups, SMEs & Enterprises</li>
                    <li>Flexible Engagement Options (Fixed Cost / Hourly / Monthly)</li>
                </ul>
            </div>
            <div class="col-lg-4 offset-lg-3 col-md-6">
                <div class="form-box">
                    <div class="box-heading">
                        <h4>Connect With Us</h4>
                        <!-- <p>Get No Obligation Free Quote!</p> -->
                    </div>
                    @if ($errors->any())
                    <div class="alert alert-danger pb-2">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{ route('campaign.store') }}" method="post" id="campaign-form" autocomplete="off">
                        @csrf
                        <input type="hidden" name="campaign_for" value="India Campaign" class="form-control" />
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Full Name" name="name" onkeypress="return /[A-Za-z ]/i.test(event.key)" minlength="3" onpaste="return false;" oncopy="return false;" />
                            <label for="floatingInput">Your Full Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput2" placeholder="email" name="email" onpaste="return false;" oncopy="return false;" />
                            <label for="floatingInput2">Email Address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput3" placeholder="number" onkeypress="return /[0-9]/i.test(event.key)" minlength="8" maxlength="12" onpaste="return false;" oncopy="return false;" pattern="[6-9]{1}[0-9]{9}" name="contact" />
                            <label for="floatingInput3">Phone Number</label>
                        </div>
                        <div class="form-floating mb-3">
                            {{-- <input type="text" class="form-control" id="floatingInput4" placeholder="country"> --}}
                            {{-- <label for="floatingInput4">Country</label> --}}
                            <select class="form-control" id="floatingInput4" name="country">
                                <option value="" selected disabled>Select State</option>
                                @foreach ($state as $c)
                                <option value="{{ $c->state_id }}">{{ $c->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="message" style="height: 70px"></textarea>
                            <label for="floatingTextarea2">Your Requirements</label>
                        </div>
                        <button class="web-btn btn w-100 mt-4" id="campaign-btn">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="services campaign-services section-padding pb-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-heading text-center">Our Services</h2>
                <div class="services-slider-height">
                    <div class="owl-carousel services-slider">

                        <div class="item">
                            <div class="box">
                                <div class="images">
                                    <img src="{{ asset('includes-frontend') }}/images/mobile-app-development.webp" alt="Mobile App Development image">
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
                                    <img src="{{ asset('includes-frontend') }}/images/web-development.webp" alt="Web Development image">
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
                                    <img src="{{ asset('includes-frontend') }}/images/custom-software-development.webp" alt="Custom Software Development image">
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
                                    <img src="{{ asset('includes-frontend') }}/images/ui-ux-development.webp" alt="UI/UX Development image">
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
                                    <img src="{{ asset('includes-frontend') }}/images/ecommerce-development.webp" alt="E-Commerce Development image">
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
                                    <img src="{{ asset('includes-frontend') }}/images/graphic-designing.webp" alt="Graphic Designing image">
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
                                    <img src="{{ asset('includes-frontend') }}/images/cyber-security.webp" alt="Cyber Security image">
                                </div>
                                <div class="content">
                                    <h3>Cyber <br>Security</h3>
                                    <p>See the unseen threats Stay vigilant, stay secure.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="btnrow text-center">
                    <p class="md:mt-5 mb-1 mt-3"><b>Ready to discuss?</b></p>
                    <a href="#campaign-form" class="btn web-btn">Contact Us Now</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="campaign-review section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-heading with-p text-center">What Clients Are Saying About Us</h2>
                <p class="heading-info text-center">We’ve served more than 2500 clients globally in the last 18 years
                    and retained 97% of them.</p>

                <div class="owl-carousel campaign-review-slider">
                    <div class="item">
                        <div class="content-box-outer">
                            <div class="quote-icon">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <div class="content-box">
                                <p>
                                    I cannot recommend LeagueCity Consulting enough. Their team of experts are top-notch and provide exceptional IT solutions and support to their clients.
                                </p>
                            </div>
                            <div class="cust-img-box">
                                <div class="profile">
                                    <img src="{{ asset('includes-frontend') }}/images/campaign/user-default.webp" alt="">
                                </div>
                                <div class="profile-text">
                                    <h5>Baldev Singh</h5>
                                    <h6>12/02/2024</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box-outer">
                            <div class="quote-icon">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <div class="content-box">
                                <p>
                                    What I appreciated most about LeagueCity Consulting was their personalized approach. They truly care about their clients and go above and beyond to ensure that you receive the best possible services.
                                </p>
                            </div>
                            <div class="cust-img-box">
                                <div class="profile">
                                    <img src="{{ asset('includes-frontend') }}/images/campaign/user-default.webp" alt="">
                                </div>
                                <div class="profile-text">
                                    <h5>Jaidev Das</h5>
                                    <h6>24/01/2024</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box-outer">
                            <div class="quote-icon">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <div class="content-box">
                                <p>
                                    The process was incredibly easy and straightforward. I was connected with a highly qualified IT Professional who took the time to review my requirements and provide me with best service.
                                </p>
                            </div>
                            <div class="cust-img-box">
                                <div class="profile">
                                    <img src="{{ asset('includes-frontend') }}/images/campaign/user-default.webp" alt="">
                                </div>
                                <div class="profile-text">
                                    <h5>Rishi Kumar</h5>
                                    <h6>20/03/2024</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box-outer">
                            <div class="quote-icon">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <div class="content-box">
                                <p>
                                    LeagueCity Consulting provided exceptional service, guiding us through a seamless transition to a more robust IT system. Their team is knowledgeable, responsive, and a pleasure to work with.
                                </p>
                            </div>
                            <div class="cust-img-box">
                                <div class="profile">
                                    <img src="{{ asset('includes-frontend') }}/images/campaign/user-default.webp" alt="">
                                </div>
                                <div class="profile-text">
                                    <h5>Aman Agrawal</h5>
                                    <h6>10/03/2024</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box-outer">
                            <div class="quote-icon">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <div class="content-box">
                                <p>
                                    Choosing LeagueCity Consulting was one of the best decisions for our company. Their innovative solutions and prompt support have greatly enhanced our productivity. We couldn't be happier!
                                </p>
                            </div>
                            <div class="cust-img-box">
                                <div class="profile">
                                    <img src="{{ asset('includes-frontend') }}/images/campaign/user-default.webp" alt="">
                                </div>
                                <div class="profile-text">
                                    <h5>Prashant Verma</h5>
                                    <h6>30/03/2024</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="content-box-outer">
                            <div class="quote-icon">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <div class="content-box">
                                <p>
                                    LeagueCity Consulting transformed our IT infrastructure. Their expertise and proactive approach have significantly improved our system's efficiency and security. Highly recommend!
                                </p>
                            </div>
                            <div class="cust-img-box">
                                <div class="profile">
                                    <img src="{{ asset('includes-frontend') }}/images/campaign/user-default.webp" alt="">
                                </div>
                                <div class="profile-text">
                                    <h5>Nidhi Mishra</h5>
                                    <h6>08/02/2024</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="campaign-why-choose section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <h2 class="section-heading text-center">Why Choose LeagueCity Consulting for Mobile App Development?
                </h2>
            </div>
            <div class="col-lg-6">
                <div class="why-choose-box">
                    <div class="choose-inner-div">
                        <img src="{{ asset('includes-frontend') }}/images/campaign/camp-why-choose-1.png" alt="">
                        <h6>Experienced Mobile App Developers</h6>
                    </div>
                    <div class="choose-inner-div">
                        <img src="{{ asset('includes-frontend') }}/images/campaign/camp-why-choose-2.png" alt="">
                        <h6>Complete Peace of Mind</h6>
                    </div>
                    <div class="choose-inner-div">
                        <img src="{{ asset('includes-frontend') }}/images/campaign/camp-why-choose-3.png" alt="">
                        <h6>Cost-Effective Services</h6>
                    </div>
                    <div class="choose-inner-div">
                        <img src="{{ asset('includes-frontend') }}/images/campaign/camp-why-choose-4.png" alt="">
                        <h6>Daily / Weekly / Monthly Reporting</h6>
                    </div>
                    <div class="choose-inner-div">
                        <img src="{{ asset('includes-frontend') }}/images/campaign/camp-why-choose-5.png" alt="">
                        <h6>24*7 Dedicated Support</h6>
                    </div>
                    <div class="choose-inner-div">
                        <img src="{{ asset('includes-frontend') }}/images/campaign/camp-why-choose-6.png" alt="">
                        <h6>Transparent & Smooth Communication</h6>
                    </div>
                    <div class="choose-inner-div">
                        <img src="{{ asset('includes-frontend') }}/images/campaign/camp-why-choose-7.png" alt="">
                        <h6>100% Quality Assurance</h6>
                    </div>
                    <div class="choose-inner-div">
                        <img src="{{ asset('includes-frontend') }}/images/campaign/camp-why-choose-8.png" alt="">
                        <h6>No Hidden Costs, 0 Overheads</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('includes-frontend') }}/images/campaign/camp-why-choose-img.webp" alt="" class="w-100">
            </div>
            <div class="col-lg-12 text-center">
                <div class="counter-box">
                    <div class="count-div">
                        <h2>18+</h2>
                        <p>Years In Business</p>
                    </div>
                    <div class="count-div">
                        <h2>650+</h2>
                        <p>Software Developers</p>
                    </div>
                    <div class="count-div">
                        <h2>2000+</h2>
                        <p>Man Years Experience</p>
                    </div>
                    <div class="count-div border-0">
                        <h2>2500+</h2>
                        <p>Satisfied Customers</p>
                    </div>
                </div>
                <p class="md:mt-5 mb-1 mt-3"><b>Talk to our consultants</b></p>
                <a href="#campaign-form" class="btn web-btn">Contact Us Now</a>
            </div>
        </div>
    </div>
</section>

<section class="technology section-padding pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 text-center">
                <h2 class="section-heading with-p">Transforming Industries with Next-Gen Innovation</h2>
                <p class="heading-info">Beyond automation, beyond disruption. We engineer human-centered innovation
                    with powerful simplicity. Unleash your unexpected tomorrow.</p>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-lg-12">
                <div class="left-side">
                    <div class="nav flex-column nav-pills web-overflow" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-mobileapp-tab" data-bs-toggle="pill" data-bs-target="#v-pills-mobileapp" type="button" role="tab" aria-controls="v-pills-mobileapp" aria-selected="true">
                            Mobile App Development
                        </button>

                        <button class="nav-link" id="v-pills-appdevelopment-tab" data-bs-toggle="pill" data-bs-target="#v-pills-appdevelopment" type="button" role="tab" aria-controls="v-pills-appdevelopment" aria-selected="false">
                            Application Development
                        </button>

                        <button class="nav-link" id="v-pills-ai-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ai" type="button" role="tab" aria-controls="v-pills-ai" aria-selected="false">

                            AI & Automation</button>

                        <button class="nav-link" id="v-pills-uiux-tab" data-bs-toggle="pill" data-bs-target="#v-pills-uiux" type="button" role="tab" aria-controls="v-pills-uiux" aria-selected="false">

                            UI/UX Services</button>

                        <button class="nav-link" id="v-pills-itconsulting-tab" data-bs-toggle="pill" data-bs-target="#v-pills-itconsulting" type="button" role="tab" aria-controls="v-pills-itconsulting" aria-selected="false">

                            IT Consulting</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="right-side bg-dark">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-mobileapp" role="tabpanel" aria-labelledby="v-pills-mobileapp-tab">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <img src="{{ asset('includes-frontend') }}/images/mobileapp.webp" alt="Mobile App Development">
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
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="v-pills-appdevelopment" role="tabpanel" aria-labelledby="v-pills-appdevelopment-tab">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <img src="{{ asset('includes-frontend') }}/images/application-development.webp" alt="Application Development">
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
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-ai" role="tabpanel" aria-labelledby="v-pills-ai-tab">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <img src="{{ asset('includes-frontend') }}/images/ai.webp" alt="AI & Automation">
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
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-uiux" role="tabpanel" aria-labelledby="v-pills-uiux-tab">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <img src="{{ asset('includes-frontend') }}/images/uiux.webp" alt="Mobile App Development">
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
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-itconsulting" role="tabpanel" aria-labelledby="v-pills-itconsulting-tab">

                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <img src="{{ asset('includes-frontend') }}/images/itconsulting.webp" alt="Mobile App Development">
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

<section class="recent-work section-padding campaign-recent-work pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 text-center">
                <h2 class="section-heading with-p">Start your journey with our latest innovative projects</h2>
                <p class="heading-info">We understand customer actions, emotions, and unspoken desires. Through design
                    and technology, we create solutions that make a real difference.</p>
            </div>
        </div>
    </div>
    <div class="work-slider-height">
        <div class="owl-carousel work-slider">
            <div class="item">
                <div class="box" style="background-image: url('{{ asset('includes-frontend') }}/images/secondmedic.jpg')">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <img src="{{ asset('includes-frontend') }}/images/secmed-white.png" class="logo" alt="SecondMedic app">
                            <h2><span class="light">SecondMedic</span><br> Online Healthcare App</h2>
                            <p>SecondMedic is an online healthcare platform designed to meet all your healthcare needs.
                            </p>
                            <button data-bs-toggle="modal" data-bs-target="#secondmedicModal" class="btn web-btn">Click Here</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="box" style="background-image: url('{{ asset('includes-frontend') }}/images/rrvm.jpg')">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <img src="{{ asset('includes-frontend') }}/images/rrvm.png" class="logo" alt="RRVM app">
                            <h2><span class="light">RRVM</span><br> School Management App</h2>
                            <p>RRVM is a school management app that simplifies academic and administrative tasks with ease.</p>
                            <button data-bs-toggle="modal" data-bs-target="#rrvmModal" class="btn web-btn">Click Here</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="box" style="background-image: url('{{ asset('includes-frontend') }}/images/vivavalet.jpg')">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <img src="{{ asset('includes-frontend') }}/images/vivavalet.png" class="logo" alt="VivaValet app">
                            <h2><span class="light">VivaValet</span><br> Online Eldercare App</h2>
                            <p>VivaValet offers trusted services for seniors, including transportation, home repairs, cleaning, and meal delivery.</p>
                            <button data-bs-toggle="modal" data-bs-target="#vivavaletModal" class="btn web-btn">Click Here</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="box" style="background-image: url('{{ asset('includes-frontend') }}/images/jkbajar.jpg')">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <img src="{{ asset('includes-frontend') }}/images/jkbajar.png" class="logo" alt="SecondMedic app">
                            <h2><span class="light">JK Bajar</span><br> Online Grocery App</h2>
                            <p>Revolutionizing grocery shopping, app ensures convenient and efficient doorstep delivery of a wide range of products.</p>
                            <button data-bs-toggle="modal" data-bs-target="#jkModal" class="btn web-btn">Click Here</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="box" style="background-image: url('{{ asset('includes-frontend') }}/images/uyp.jpg')">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <img src="{{ asset('includes-frontend') }}/images/uyp.png" class="logo" alt="UYP app">
                            <h2><span class="light">UYP</span><br> E-commerce App</h2>
                            <p>UYP is an online e-commerce fashion shop offering trendy, high-quality clothing for
                                men, women, and children.</p>
                            <button data-bs-toggle="modal" data-bs-target="#uypModal" class="btn web-btn">Click Here</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="box" style="background-image: url('{{ asset('includes-frontend') }}/images/fandora.jpg')">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <img src="{{ asset('includes-frontend') }}/images/fandora.png" class="logo" alt="Fandora app">
                            <h2><span class="light">Fandora</span><br> Content IP Investment App</h2>
                            <p>FANDORA lets you co-own and invest in your favorite films, music tracks, and more, central to the entertainment business.</p>
                            <button data-bs-toggle="modal" data-bs-target="#fandoraModal" class="btn web-btn">Click Here</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="box" style="background-image: url('{{ asset('includes-frontend') }}/images/cctv.jpg')">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <img src="{{ asset('includes-frontend') }}/images/cctv.png" class="logo" alt="CCTV app">
                            <h2><span class="light">CCTV VAALA</span><br> E-commerce App</h2>
                            <p>CCTV Vaala is an ecommerce platform specializing in the sale of premium security cameras.
                            </p>
                            <button data-bs-toggle="modal" data-bs-target="#cctvModal" class="btn web-btn">Click Here</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pricing section-padding pb-0" id="pricing">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading with-p">Choose From Our Hiring Models</h2>
                <p class="heading-info">With us, you can choose from multiple hiring models that best suit your needs.
                </p>
            </div>
        </div>
        <div class="row g-3 g-md-5 justify-content-center">

            <div class="col-lg-4 col-md-6">
                <div class="box">
                    <h3 class="box-heading">Small Size Business <br />
                        <small>App Development</small>
                    </h3>
                    <p><b>120000 INR/1448 USD</b> Monthly</p>
                    <p>EXCLUSIVE OF ALL TAXES</p>

                    <ul class="list">
                        <li>Main Points</li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            50% Upfront to get started with the work immediately
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            No. of Features Up to 7
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            Wireframing
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            Intuitive UI UX (Custom App Design)
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            Social Media Integration
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            App Testing
                        </li>
                        <li>
                            <i class="fas fa-times-circle text-danger"></i>
                            Ads Network Integration
                        </li>
                        <li>
                            <i class="fas fa-times-circle text-danger"></i>
                            Firebase Integration
                        </li>
                        <li>
                            <i class="fas fa-times-circle text-danger"></i>
                            In-App Purchase
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            Publishing on App Store
                        </li>
                        <li>
                            <i class="fas fa-times-circle text-danger"></i>
                            App Store Optimization
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            Paid bug support ($350/m)
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            Native iOS OR Android app
                        </li>
                        <li>
                            <i class="fas fa-times-circle text-danger"></i>
                            Cross-Platform (Hybrid)
                        </li>
                        <li>
                            <i class="fas fa-times-circle text-danger"></i>
                            Push Notifications
                        </li>
                        <li>
                            <i class="fas fa-times-circle text-danger"></i>
                            Messaging API Integration (Live Chat)
                        </li>
                        <li>
                            <i class="fas fa-times-circle text-danger"></i>
                            Regular App Updates
                        </li>
                        <li>
                            <i class="fas fa-times-circle text-danger"></i>
                            Google Maps Integration
                        </li>
                        <li>
                            <i class="fas fa-times-circle text-danger"></i>
                            Admin Panel
                        </li>
                        <li>
                            <i class="fas fa-times-circle text-danger"></i>
                            Data Import/Export
                        </li>
                        <li>
                            <i class="fas fa-times-circle text-danger"></i>
                            Web APIs and Online Database
                        </li>
                        <li>
                            <i class="fas fa-times-circle text-danger"></i>
                            Picture Gallery/ Product Display/ Showcase Services
                        </li>
                        <li>
                            <i class="fas fa-times-circle text-danger"></i>
                            Product Categories/Sub Categories
                        </li>
                        <li>
                            <i class="fas fa-times-circle text-danger"></i>
                            CrashAnalytics Integration
                        </li>
                        <li>
                            <i class="fas fa-times-circle text-danger"></i>
                            Audio/Video Streaming
                        </li>
                        <li>
                            <i class="fas fa-times-circle text-danger"></i>
                            Payment Gateways Integration
                        </li>
                        <li>
                            <i class="fas fa-times-circle text-danger"></i>
                            Shopping Cart
                        </li>
                        <li>
                            <i class="fas fa-times-circle text-danger"></i>
                            3rd Party APIs Integrations
                        </li>
                    </ul>
                    <p class="small-text"><a href="#campaign-form" target="_blank">T&C Apply</a></p>
                    <a href="#campaign-form" class="btn web-btn btn-form">Get Started Now</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="box">
                    <h3 class="box-heading">Mid Size Business <br />
                        <small>App Development</small>
                    </h3>
                    <p><b>250000 INR/3015 USD</b> Monthly</p>
                    <p>EXCLUSIVE OF ALL TAXES</p>

                    <ul class="list">
                        <li>Main Points</li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            50% Upfront to get started with the work immediately
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            No. of Features Up to 10
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            Wireframing
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            Intuitive UI UX (Custom App Design)
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            Social Media Integration
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            App Testing
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            Ads Network Integration
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            Firebase Integration
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            In-App Purchase
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            Publishing on App Store
                        </li>
                        <li>
                            <i class="fas fa-times-circle text-danger"></i>
                            App Store Optimization
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            1 Month free bug support
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            Native iOS OR Android app
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            Cross-Platform (Hybrid) On Demand
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            Push Notifications
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            Messaging API Integration (Live Chat)
                        </li>
                        <li>
                            <i class="fas fa-times-circle text-danger"></i>
                            Regular App Updates
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            Google Maps Integration
                        </li>
                        <li>
                            <i class="fas fa-times-circle text-danger"></i>
                            Admin Panel
                        </li>
                        <li>
                            <i class="fas fa-times-circle text-danger"></i>
                            Data Import/Export
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            Web APIs and Online Database
                        </li>
                        <li>
                            <i class="fas fa-times-circle text-danger"></i>
                            Picture Gallery/ Product Display/ Showcase Services
                        </li>
                        <li>
                            <i class="fas fa-times-circle text-danger"></i>
                            Product Categories/Sub Categories
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            CrashAnalytics Integration
                        </li>
                        <li>
                            <i class="fas fa-times-circle text-danger"></i>
                            Audio/Video Streaming
                        </li>
                        <li>
                            <i class="fas fa-times-circle text-danger"></i>
                            Payment Gateways Integration
                        </li>
                        <li>
                            <i class="fas fa-times-circle text-danger"></i>
                            Shopping Cart
                        </li>
                        <li>
                            <i class="fas fa-times-circle text-danger"></i>
                            3rd Party APIs Integrations
                        </li>
                    </ul>
                    <p class="small-text"><a href="#campaign-form" target="_blank">T&C Apply</a></p>
                    <a href="#campaign-form" class="btn web-btn btn-form">Get Started Now</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="box">
                    <h3 class="box-heading">Large Size Business <br />
                        <small>App Development</small>
                    </h3>
                    <p><b>380000 INR/4585 USD</b> Monthly</p>
                    <p>EXCLUSIVE OF ALL TAXES</p>

                    <ul class="list">
                        <li>Main Points</li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            25% Upfront to get started with the work immediately
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            No. of Features Up to 25
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            Wireframing
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            Intuitive UI UX (Custom App Design)
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            Social Media Integration
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            App Testing
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            Ads Network Integration
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            Firebase Integration
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            In-App Purchase
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            Publishing on App Store
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            App Store Optimization
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            3 Month free bug support
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            Native iOS OR Android app
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            Cross-Platform (Hybrid) On Demand
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            Push Notifications
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            Messaging API Integration (Live Chat)
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            Regular App Updates Yearly 1 Update
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            Google Maps Integration
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            Admin Panel
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            Data Import/Export
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            Web APIs and Online Database
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            Picture Gallery/ Product Display/ Showcase Services On Demand
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            Product Categories/Sub Categories
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            CrashAnalytics Integration
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            Audio/Video Streaming
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            Payment Gateways Integration
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            Shopping Cart
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success"></i>
                            3rd Party APIs Integrations
                        </li>
                    </ul>
                    <p class="small-text"><a href="#campaign-form" target="_blank">T&C Apply</a></p>
                    <a href="#campaign-form" class="btn web-btn btn-form">Get Started Now</a>
                </div>
            </div>

        </div>
    </div>
</section>
<a href="https://api.whatsapp.com/send/?phone=+919987577439&text=We’re here to assist with all your IT needs, Thank you for choosing LeagueCityConsulting" target="_blank" class="campaign-whatsapp">
    <img src="{{ asset('includes-frontend') }}/images/whatsapp.png" alt="Whatsapp">
</a>

<!-- SecondMedic Screenshot Modal -->
<div class="modal fade app-screenshot-modal" id="secondmedicModal" tabindex="-1" aria-labelledby="secondmedicModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header pb-0">
                <h1 class="modal-title" id="secondmedicModalLabel">SecondMedic</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="owl-carousel app-screenshot-slider">
                    <div class="item">
                        <img src="{{ asset('includes-frontend') }}/images/secondmedic/secmed1.webp" alt="Application">
                    </div>
                    <div class="item">
                        <img src="{{ asset('includes-frontend') }}/images/secondmedic/secmed2.webp" alt="Application">
                    </div>
                    <div class="item">
                        <img src="{{ asset('includes-frontend') }}/images/secondmedic/secmed3.webp" alt="Application">
                    </div>
                    <div class="item">
                        <img src="{{ asset('includes-frontend') }}/images/secondmedic/secmed4.webp" alt="Application">
                    </div>
                    <div class="item">
                        <img src="{{ asset('includes-frontend') }}/images/secondmedic/secmed5.webp" alt="Application">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Vivavalet Screenshot Modal -->
<div class="modal fade app-screenshot-modal" id="vivavaletModal" tabindex="-1" aria-labelledby="vivavaletModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header pb-0">
                <h1 class="modal-title" id="vivavaletModalLabel">VivaValet</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="owl-carousel app-screenshot-slider">
                    <div class="item">
                        <img src="{{ asset('includes-frontend') }}/images/vivavalet/vivavalet1.webp" alt="Application">
                    </div>
                    <div class="item">
                        <img src="{{ asset('includes-frontend') }}/images/vivavalet/vivavalet2.webp" alt="Application">
                    </div>
                    <div class="item">
                        <img src="{{ asset('includes-frontend') }}/images/vivavalet/vivavalet3.webp" alt="Application">
                    </div>
                    <div class="item">
                        <img src="{{ asset('includes-frontend') }}/images/vivavalet/vivavalet4.webp" alt="Application">
                    </div>
                    <div class="item">
                        <img src="{{ asset('includes-frontend') }}/images/vivavalet/vivavalet5.webp" alt="Application">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JKBajar Screenshot Modal -->
<div class="modal fade app-screenshot-modal" id="jkModal" tabindex="-1" aria-labelledby="jkModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header pb-0">
                <h1 class="modal-title" id="jkModalLabel">JK Bajar</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="owl-carousel app-screenshot-slider">
                    <div class="item">
                        <img src="{{ asset('includes-frontend') }}/images/jkbazar/jk1.webp" alt="Application">
                    </div>
                    <div class="item">
                        <img src="{{ asset('includes-frontend') }}/images/jkbazar/jk2.webp" alt="Application">
                    </div>
                    <div class="item">
                        <img src="{{ asset('includes-frontend') }}/images/jkbazar/jk3.webp" alt="Application">
                    </div>
                    <div class="item">
                        <img src="{{ asset('includes-frontend') }}/images/jkbazar/jk1.webp" alt="Application">
                    </div>
                    <div class="item">
                        <img src="{{ asset('includes-frontend') }}/images/jkbazar/jk2.webp" alt="Application">
                    </div>
                    <div class="item">
                        <img src="{{ asset('includes-frontend') }}/images/jkbazar/jk3.webp" alt="Application">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- UYP Screenshot Modal -->
<div class="modal fade app-screenshot-modal" id="uypModal" tabindex="-1" aria-labelledby="uypModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header pb-0">
                <h1 class="modal-title" id="uypModalLabel">UYP</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="owl-carousel app-screenshot-slider">
                    <div class="item">
                        <img src="{{ asset('includes-frontend') }}/images/uyp/uyp1.webp" alt="Application">
                    </div>
                    <div class="item">
                        <img src="{{ asset('includes-frontend') }}/images/uyp/uyp2.webp" alt="Application">
                    </div>
                    <div class="item">
                        <img src="{{ asset('includes-frontend') }}/images/uyp/uyp3.webp" alt="Application">
                    </div>
                    <div class="item">
                        <img src="{{ asset('includes-frontend') }}/images/uyp/uyp4.webp" alt="Application">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- RRVM Screenshot Modal -->
<div class="modal fade app-screenshot-modal" id="rrvmModal" tabindex="-1" aria-labelledby="rrvmModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header pb-0">
                <h1 class="modal-title" id="rrvmModalLabel">Ram Ratna Vidya Mandir</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="owl-carousel app-screenshot-slider">
                    <div class="item">
                        <img src="{{ asset('includes-frontend') }}/images/rrvm/rrvm1.webp" alt="Application">
                    </div>
                    <div class="item">
                        <img src="{{ asset('includes-frontend') }}/images/rrvm/rrvm2.webp" alt="Application">
                    </div>
                    <div class="item">
                        <img src="{{ asset('includes-frontend') }}/images/rrvm/rrvm3.webp" alt="Application">
                    </div>
                    <div class="item">
                        <img src="{{ asset('includes-frontend') }}/images/rrvm/rrvm1.webp" alt="Application">
                    </div>
                    <div class="item">
                        <img src="{{ asset('includes-frontend') }}/images/rrvm/rrvm2.webp" alt="Application">
                    </div>
                    <div class="item">
                        <img src="{{ asset('includes-frontend') }}/images/rrvm/rrvm3.webp" alt="Application">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- fandora Screenshot Modal -->
<div class="modal fade app-screenshot-modal" id="fandoraModal" tabindex="-1" aria-labelledby="fandoraModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header pb-0">
                <h1 class="modal-title" id="fandoraModalLabel">Fandora</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="owl-carousel app-screenshot-slider">
                    <div class="item">
                        <img src="{{ asset('includes-frontend') }}/images/fandora/fandora1.webp" alt="Application">
                    </div>
                    <div class="item">
                        <img src="{{ asset('includes-frontend') }}/images/fandora/fandora2.webp" alt="Application">
                    </div>
                    <div class="item">
                        <img src="{{ asset('includes-frontend') }}/images/fandora/fandora3.webp" alt="Application">
                    </div>
                    <div class="item">
                        <img src="{{ asset('includes-frontend') }}/images/fandora/fandora4.webp" alt="Application">
                    </div>
                    <div class="item">
                        <img src="{{ asset('includes-frontend') }}/images/fandora/fandora5.webp" alt="Application">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- cctvvaala Screenshot Modal -->
<div class="modal fade app-screenshot-modal" id="cctvModal" tabindex="-1" aria-labelledby="cctvModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header pb-0">
                <h1 class="modal-title" id="cctvModalLabel">CCTVVAALA</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="owl-carousel app-screenshot-slider">
                    <div class="item">
                        <img src="{{ asset('includes-frontend') }}/images/cctvvaala/cctv1.webp" alt="Application">
                    </div>
                    <div class="item">
                        <img src="{{ asset('includes-frontend') }}/images/cctvvaala/cctv2.webp" alt="Application">
                    </div>
                    <div class="item">
                        <img src="{{ asset('includes-frontend') }}/images/cctvvaala/cctv3.webp" alt="Application">
                    </div>
                    <div class="item">
                        <img src="{{ asset('includes-frontend') }}/images/cctvvaala/cctv1.webp" alt="Application">
                    </div>
                    <div class="item">
                        <img src="{{ asset('includes-frontend') }}/images/cctvvaala/cctv2.webp" alt="Application">
                    </div>
                    <div class="item">
                        <img src="{{ asset('includes-frontend') }}/images/cctvvaala/cctv3.webp" alt="Application">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="contactus section-padding saas-camp-contact">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            <h2 class="section-heading with-p mb-lg-2 mb-1">We're here to help</h2>
                            <p class="heading-info">Got a project on your mind! We're confidential listeners, eager to collaborate.</p>
                            <img src="{{ asset('includes-frontend') }}/images/campaign/saas-camp-footer.webp" alt="img" class="camp-footer-img">
                            <a href="#camp-form" class="btn web-btn camp-footer-btn">Book Now</a>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="right-side bg-blue">
                                <h3>Get In Touch</h3>
                                <p>Unleash the power of personalized assistance. Your questions, our expertise.</p>
                                <ul class="contact-list">
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="text">
                                            <span>Email</span>
                                            <a href="mailto:info@leaguecity.com">info@leaguecityconsulting.com</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-phone-alt"></i>
                                        </div>
                                        <div class="text">
                                            <span>Contact</span>
                                            <a href="tel:+917879782233">+91 78797 82233</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="text">
                                            <span>Address</span>
                                            <p>E-8/95, JSV Tower, Basant Kunj, Arera Colony, Bhopal, Madhya Pradesh 462016</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="social-icons colorful">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>