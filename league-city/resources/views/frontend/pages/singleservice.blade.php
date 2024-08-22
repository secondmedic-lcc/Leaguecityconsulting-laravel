{{-- @php
    dd($services);
@endphp --}}

@empty(!$web_banner)

<section class="page-banner section-padding" style="background-image: url({{ asset($web_banner['banner_image']); }});">
    {{-- <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <span class="heading-top">{{ $web_banner['page_title']; }}</span>
                <h1 class="section-heading">{{ $web_banner['heading']; }}<span class="light">{{ $web_banner['sub_heading']; }}</span></h1>
                <p>{{ $web_banner['details']; }}</p>
            </div>
        </div>
    </div> --}}
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <span class="heading-top">{{ $web_banner['page_title']; }}</span>
                    <h1 class="section-heading">{{ $services['banner_heading']; }}<span class="light">{{ $services['banner_sub_heading']; }}</span></h1>
                    <h2>{{ $services['banner_details']; }}</h2>
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
                    <li class="breadcrumb-item"><a href="{{ url('/services'); }}">Services</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $services['name'] }}</li>
                </ol>
            </div>
        </div>
    </div>
</nav>

<section class="singleportfolio section-padding">
    <div class="container">
        <div class="row">
            <div class="row align-items-center portfolio-heading-mb">
                <div class="col-lg-6">
                    <h2 class="section-heading">{{$services['name'] }}</h2>
                    {{-- <h4>Lorem ipsum is a simply dummy text.</h4> --}}
                </div>
                <div class="col-lg-6">
                    <?php echo $services['sub_heading']; ?>
                </div>
            </div>
        </div>
        <div class="row g-3">

            @foreach($services['services_details'] as $p)
            <div class="col-md-6 col-lg-4">
                <div class="box">
                    <i class="{{ $p['service_icon'] }} icon"></i>
                    <i class="{{ $p['service_icon'] }} big-icon"></i>
                    <h3>{{ $p['service_title'] }}</h3>
                    <p>{{ $p['service_details'] }}</p>
                </div>
            </div>
            @endforeach
            {{-- <div class="col-md-6 col-lg-4 col-6">
                <div class="box">
                    <i class="fa fa-user icon"></i>
                    <i class="fa fa-user big-icon"></i>
                    <h3>Android App Development</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima est adipisci voluptatibus necessitatibus accusantium aperiam perspiciatis.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-6">
                <div class="box">
                    <i class="fa fa-user icon"></i>
                    <i class="fa fa-user big-icon"></i>
                    <h3>Flutter Development</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima est adipisci voluptatibus necessitatibus accusantium aperiam perspiciatis.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-6">
                <div class="box">
                    <i class="fa fa-user icon"></i>
                    <i class="fa fa-user big-icon"></i>
                    <h3>React Native App Development</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima est adipisci voluptatibus necessitatibus accusantium aperiam perspiciatis.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-6">
                <div class="box">
                    <i class="fa fa-user icon"></i>
                    <i class="fa fa-user big-icon"></i>
                    <h3>PWA Development</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima est adipisci voluptatibus necessitatibus accusantium aperiam perspiciatis.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-6">
                <div class="box">
                    <i class="fa fa-user icon"></i>
                    <i class="fa fa-user big-icon"></i>
                    <h3>Maintenance & Support Services</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima est adipisci voluptatibus necessitatibus accusantium aperiam perspiciatis.</p>
                </div>
            </div> --}}
        </div>
    </div>
</section>
@if(count($services['services_images']) > 0)
<section class="portfolio-standout section-padding">
    <div class="container">
        <div class="row align-items-center portfolio-heading-mb">
            <div class="col-lg-6">
                <h2 class="section-heading">{{ $services['section_heading'] }}</h2>
            </div>
            <div class="col-lg-6">
                <?php echo $services['desc_heading']; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="owl-carousel standout-slider">
                        @foreach($services['services_images'] as $p)
                        <div class="item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="content">
                                        {{-- <i class="far fa-play-circle"></i> --}}
                                        <h3>{{ $p['heading']; }}</h3>
                                        <p>{{ $p['description']; }}</p>
                                        @if($p['project_url']!= '')
                                        <a href="{{$p['project_url']}}" class="btn web-btn" target="_blank">Visit Website</a>
                                        @else
                                        <a href="" target="_blank"> </a>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <img src="{{ asset($p['image']); }}" alt="Group Conferencing">
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @foreach($services['services_images'] as $p)
                        <div class="item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="content">
                                        {{-- <i class="far fa-play-circle"></i> --}}
                                        <h3>{{ $p['heading']; }}</h3>
                                        <p>{{ $p['description']; }}</p>
                                        <a href="{{$p['project_url']}}" class="btn web-btn">Visit Website</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <img src="{{ asset($p['image']); }}" alt="Group Conferencing">
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
{{-- @if(count( $services['services_icons']) > 0) --}}
<section class="service-technologies section-padding bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 text-center">
                <h2 class="section-heading with-p">Tech and Tools : Shaping the future
                </h2>
                <p class="heading-info text-white">We are a dedicated team of developers who consistently strive to deliver innovative, robust, and interactive solutions using the most suitable tools and technologies, ensuring high scalability.</p>
            </div>
        </div>
        <div class="row g-3 g-lg-4">
            {{-- @php print_r( $services['services_icons'] ); exit; @endphp --}}
            @foreach( $services['services_icons'] as $p)
            <div class="col-lg-2 col-md-4 col-6">
                <div class="box">
                    <img src="{{ asset($p['icon']); }}" alt="PHP">
                    <p>{{$p->name }}</p>
                </div>
            </div>
            @endforeach
            {{-- <div class="col-lg-2 col-md-4 col-6">
                <div class="box">
                    <img src="{{ asset('includes-frontend'); }}/images/technologies/mysql.webp" alt="MySQL">
            <p>MySQL</p>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-6">
        <div class="box">
            <img src="{{ asset('includes-frontend'); }}/images/technologies/laravel.webp" alt="Laravel">
            <p>Laravel</p>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-6">
        <div class="box">
            <img src="{{ asset('includes-frontend'); }}/images/technologies/html.webp" alt="HTML5">
            <p>HTML5</p>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-6">
        <div class="box">
            <img src="{{ asset('includes-frontend'); }}/images/technologies/css.webp" alt="CSS">
            <p>CSS</p>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-6">
        <div class="box">
            <img src="{{ asset('includes-frontend'); }}/images/technologies/bootstrap.webp" alt="Bootstrap">
            <p>Bootstrap</p>
        </div>
    </div> --}}
    </div>
    </div>
</section>
{{-- @endif --}}

<section class="portfolio-whychoose section-padding">
    <div class="container">
        <div class="row align-items-center portfolio-heading-mb">
            <div class="col-lg-6">
                <h2 class="section-heading">{{ $services['section_heading1'] }}
                    {{-- Why Choose League City for Mobile App Development? --}}
                </h2>
            </div>
            <div class="col-lg-6">
                <?php echo $services['section_sub_heading1']; ?>
            </div>
        </div>
        <div class="row g-3">


            @foreach($services['services_sub_details'] as $p)
            <div class="col-lg-3 col-md-6 col-6">
                <div class="box">
                    <i class="{{ $p['service_icon'] }} icon"></i>
                    <h3>{{ $p['service_title'] }}</h3>
                    <p>{{ $p['service_details'] }}</p>
                </div>
            </div>
            @endforeach
            {{-- <div class="col-lg-3 col-md-6 col-6">
                <div class="box">
                    <i class="fas fa-percent"></i>
                    <h3>Client-centric Approach</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae vero eos magnam enim aut consectetur iste delectus debitis soluta.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <div class="box">
                    <i class="fas fa-percent"></i>
                    <h3>Best UX/UI Experts</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae vero eos magnam enim aut consectetur iste delectus debitis soluta.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <div class="box">
                    <i class="fas fa-percent"></i>
                    <h3>Dedicated Teams</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae vero eos magnam enim aut consectetur iste delectus debitis soluta.</p>
                </div>
            </div> --}}
        </div>
    </div>
</section>



<section class="service-portfolio-process portfolio-process section-padding bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 text-center">
                <h2 class="section-heading with-p">Process We Follow in League City Consulting</h2>
                <p class="heading-info text-white"> League City Consulting's Strategic Process Unveiled. Discover the Proven Steps to Achieving Your Business Goals</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                Discovery and Assessment
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Our journey begins with a collaborative discovery phase, where our team works closely with your stakeholders to grasp your business objectives, challenges, and vision. We conduct a thorough assessment of your current IT infrastructure, identifying opportunities for improvement and optimization.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                Customized Solution Design
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Building on insights from the discovery phase, our experts create tailor-made IT solutions aligned seamlessly with your business goals. Whether it's crafting bespoke software, integrating existing systems, or architecting scalable applications, our design process prioritizes efficiency, scalability, and user-centric experiences.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                Agile Development Methodology
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Embracing an agile development approach, we ensure flexibility and responsiveness throughout the project lifecycle. Our teams work in sprints, allowing for continuous feedback and iterative improvements. This methodology guarantees that the final product not only meets but exceeds your expectations.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                Quality Assurance and Testing
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Quality is central to our values. Rigorous testing processes are integrated into our development cycle to ensure the reliability, security, and performance of your software solutions. Our QA specialists use industry-leading tools and methodologies to identify and address potential issues before deployment.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                Seamless Integration
                            </button>
                        </h2>
                        <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Recognizing the importance of smooth integration with existing systems, our specialists work diligently to ensure new software seamlessly interacts with your current infrastructure. This minimizes disruptions and maximizes operational efficiency.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                Training and Support
                            </button>
                        </h2>
                        <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Successful IT solution implementation relies on a knowledgeable workforce. We provide comprehensive training programs to empower your teams with the skills needed to leverage the full potential of our software. Our dedicated support team is also available to address inquiries or issues, ensuring a seamless post-implementation experience.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                Continuous Improvement
                            </button>
                        </h2>
                        <div id="collapse7" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>In the ever-evolving IT landscape, League City Consulting is committed to staying ahead of the curve. We offer continuous improvement services, including regular updates, enhancements, and proactive monitoring, keeping your IT solutions aligned with industry trends and emerging technologies.

                                </p>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</section>

@include('frontend.pages.query-form')
