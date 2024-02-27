@empty(!$web_banner)

<section class="page-banner section-padding" style="background-image: url({{ asset($web_banner['banner_image']); }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
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
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </div>
        </div>
    </div>
</nav>

<section class="aboutus section-padding pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="{{ asset('includes-frontend'); }}/images/aboutus.webp" class="w-100" alt="About Us">
            </div>
            <div class="col-lg-6">
                <h2 class="section-heading with-p">About Us</h2>
                <p class="heading-info mb-0">At League City Consulting, we're not just software developers - we're architects of your digital dreams. We're a passionate team of innovators, builders, and problem solvers, fueled by the thrill of transforming ideas into powerful software solutions. We believe in the transformative power of technology, and we're dedicated to crafting intuitive, efficient, and scalable software that empowers businesses to thrive.
                    <br />
                    At League City Consulting, we're more than just a team of code-slingers. We're passionate about exceeding expectations, delivering results that not only meet your needs but ignite your potential. So, come, let's break down the digital walls and build the future, together.
                </p>
            </div>
        </div>
    </div>
</section>

@include('frontend.pages.innovative-services')

<section class="ceo-section section-padding bg-dark">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="ceo-img">
                    <div class="main-img" style="background-image:url('{{ asset('includes-frontend'); }}/images/rajneeshdiwedi.png');">
                    </div>
                    <div class="shape-img" style="mask-image: url('{{ asset('includes-frontend'); }}/images/shape.svg')">
                        <div class="shape" style="background-image:url('{{ asset('includes-frontend'); }}/images/rajneeshdiwedi.png');">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="section-heading with-p mb-2">Rajneesh Diwedi</h2>
                <div class="line"></div>
                <p class="heading-info text-white">Chief Executive Officer</p>
                <p class="mb-0">As CEO, I'm excited to introduce League City Consulting, a company specializing in creating top-quality websites, custom software, and keeping your IT systems running smoothly, all tailored specifically to your needs. Our team of experts, from developers and designers to IT whizzes, are here to listen to what you want and make it happen. We pride ourselves on delivering projects on time and exceeding your expectations.So, if you're looking for amazing results and a way to shine in the digital world, look no further than League City Consulting! We appreciate you considering us.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="team-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="section-heading with-p">Our Team</h2>
                <p class="heading-info">Meet our talented team of professionals dedicated to your success.</p>
            </div>
            <div class="col-12">
                <div class="owl-carousel team-slider">
                    <div class="item">
                        <div class="box">
                            <div class="main-img" style="background-image:url('{{ asset('includes-frontend'); }}/images/raviprakash.png');">
                            </div>
                            <div class="shape-img" style="mask-image: url('{{ asset('includes-frontend'); }}/images/shape.svg')">
                                <div class="shape" style="background-image:url('{{ asset('includes-frontend'); }}/images/raviprakash.png');">
                                </div>
                            </div>
                            <h3>Ravi Prakash</h3>
                            <p>Chief Technology Officer</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="main-img" style="background-image:url('{{ asset('includes-frontend'); }}/images/jeelthakkar.png');">
                            </div>
                            <div class="shape-img" style="mask-image: url('{{ asset('includes-frontend'); }}/images/shape.svg')">
                                <div class="shape" style="background-image:url('{{ asset('includes-frontend'); }}/images/jeelthakkar.png');">
                                </div>
                            </div>
                            <h3>Jeel Thakkar</h3>
                            <p>Social Media Manager</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="main-img" style="background-image:url('{{ asset('includes-frontend'); }}/images/aniketnamdeo.png');">
                            </div>
                            <div class="shape-img" style="mask-image: url('{{ asset('includes-frontend'); }}/images/shape.svg')">
                                <div class="shape" style="background-image:url('{{ asset('includes-frontend'); }}/images/aniketnamdeo.png');">
                                </div>
                            </div>
                            <h3>Aniket Namdeo</h3>
                            <p>Manager</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="main-img" style="background-image:url('{{ asset('includes-frontend'); }}/images/sanjayadtani.png');">
                            </div>
                            <div class="shape-img" style="mask-image: url('{{ asset('includes-frontend'); }}/images/shape.svg')">
                                <div class="shape" style="background-image:url('{{ asset('includes-frontend'); }}/images/sanjayadtani.png');">
                                </div>
                            </div>
                            <h3>Sanjay Adtani</h3>
                            <p>Team Leader</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="main-img" style="background-image:url('{{ asset('includes-frontend'); }}/images/jiteshvishwakarma.png');">
                            </div>
                            <div class="shape-img" style="mask-image: url('{{ asset('includes-frontend'); }}/images/shape.svg')">
                                <div class="shape" style="background-image:url('{{ asset('includes-frontend'); }}/images/jiteshvishwakarma.png');">
                                </div>
                            </div>
                            <h3>Jitesh Vishwakarma</h3>
                            <p>Motion Graphics Designer</p>
                        </div>
                    </div>
                    <!-- <div class="item">
                        <div class="box">
                            <div class="main-img" style="background-image:url('{{ asset('includes-frontend'); }}/images/shubhamshinde.png');">
                            </div>
                            <div class="shape-img" style="mask-image: url('{{ asset('includes-frontend'); }}/images/shape.svg')">
                                <div class="shape" style="background-image:url('{{ asset('includes-frontend'); }}/images/shubhamshinde.png');">
                                </div>
                            </div>
                            <h3>Shubham Shinde</h3>
                            <p>Social Media Ads Manager</p>
                        </div>
                    </div> -->
                    <div class="item">
                        <div class="box">
                            <div class="main-img" style="background-image:url('{{ asset('includes-frontend'); }}/images/swapnilgawde.png');">
                            </div>
                            <div class="shape-img" style="mask-image: url('{{ asset('includes-frontend'); }}/images/shape.svg')">
                                <div class="shape" style="background-image:url('{{ asset('includes-frontend'); }}/images/swapnilgawde.png');">
                                </div>
                            </div>
                            <h3>Swapnil Gawde</h3>
                            <p>Social Media Ads Manager</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="main-img" style="background-image:url('{{ asset('includes-frontend'); }}/images/rohitrajput.png');">
                            </div>
                            <div class="shape-img" style="mask-image: url('{{ asset('includes-frontend'); }}/images/shape.svg')">
                                <div class="shape" style="background-image:url('{{ asset('includes-frontend'); }}/images/rohitrajput.png');">
                                </div>
                            </div>
                            <h3>Rohit Rajput</h3>
                            <p>SEO and PPC Manager</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="main-img" style="background-image:url('{{ asset('includes-frontend'); }}/images/rahulchatterjee.png');">
                            </div>
                            <div class="shape-img" style="mask-image: url('{{ asset('includes-frontend'); }}/images/shape.svg')">
                                <div class="shape" style="background-image:url('{{ asset('includes-frontend'); }}/images/rahulchatterjee.png');">
                                </div>
                            </div>
                            <h3>Rahul Chatterjee</h3>
                            <p>Senior Software Developer</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="main-img" style="background-image:url('{{ asset('includes-frontend'); }}/images/rahulshah.png');">
                            </div>
                            <div class="shape-img" style="mask-image: url('{{ asset('includes-frontend'); }}/images/shape.svg')">
                                <div class="shape" style="background-image:url('{{ asset('includes-frontend'); }}/images/rahulshah.png');">
                                </div>
                            </div>
                            <h3>Rahul Shah</h3>
                            <p>Software Developer</p>
                        </div>
                    </div>
                    <!-- <div class="item">
                        <div class="box">
                            <div class="main-img" style="background-image:url('{{ asset('includes-frontend'); }}/images/himanshudevgade.png');">
                            </div>
                            <div class="shape-img" style="mask-image: url('{{ asset('includes-frontend'); }}/images/shape.svg')">
                                <div class="shape" style="background-image:url('{{ asset('includes-frontend'); }}/images/himanshudevgade.png');">
                                </div>
                            </div>
                            <h3>Himanshu Devgade</h3>
                            <p>Software Developer</p>
                        </div>
                    </div> -->
                    <!-- <div class="item">
                        <div class="box">
                            <div class="main-img" style="background-image:url('{{ asset('includes-frontend'); }}/images/jitendrapratapsingh.png');">
                            </div>
                            <div class="shape-img" style="mask-image: url('{{ asset('includes-frontend'); }}/images/shape.svg')">
                                <div class="shape" style="background-image:url('{{ asset('includes-frontend'); }}/images/jitendrapratapsingh.png');">
                                </div>
                            </div>
                            <h3>Jitendra Pratap Singh</h3>
                            <p>PHP Developer</p>
                        </div>
                    </div> -->
                    <div class="item">
                        <div class="box">
                            <div class="main-img" style="background-image:url('{{ asset('includes-frontend'); }}/images/rahuladtani.png');">
                            </div>
                            <div class="shape-img" style="mask-image: url('{{ asset('includes-frontend'); }}/images/shape.svg')">
                                <div class="shape" style="background-image:url('{{ asset('includes-frontend'); }}/images/rahuladtani.png');">
                                </div>
                            </div>
                            <h3>Rahul Adtani</h3>
                            <p>Designer Team Lead</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="main-img" style="background-image:url('{{ asset('includes-frontend'); }}/images/nitish.png');">
                            </div>
                            <div class="shape-img" style="mask-image: url('{{ asset('includes-frontend'); }}/images/shape.svg')">
                                <div class="shape" style="background-image:url('{{ asset('includes-frontend'); }}/images/nitish.png');">
                                </div>
                            </div>
                            <h3>Nitish</h3>
                            <p>Front-end Developer</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="main-img" style="background-image:url('{{ asset('includes-frontend'); }}/images/prateekchouhan.png');">
                            </div>
                            <div class="shape-img" style="mask-image: url('{{ asset('includes-frontend'); }}/images/shape.svg')">
                                <div class="shape" style="background-image:url('{{ asset('includes-frontend'); }}/images/prateekchouhan.png');">
                                </div>
                            </div>
                            <h3>Prateek Chouhan</h3>
                            <p>SEO Analyst</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('frontend.pages.query-form')