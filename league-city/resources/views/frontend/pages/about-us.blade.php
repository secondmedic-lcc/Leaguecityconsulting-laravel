<section class="page-banner section-padding" style="background-image: url({{ asset('includes-frontend'); }}/images/aboutus-banner.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <span class="heading-top">ABOUT US</span>
                <h1 class="section-heading">League City Consulting <span class="light">Where Software Meets Brilliance </span></h1>
                <p>Harnessing the power of technology with industry smarts, League City Consulting crafts elegant solutions for simple and complex business problems..</p>
                <a href="#" class="btn web-btn">Hire Our Developers</a>
            </div>
        </div>
    </div>
</section>

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

@include('frontend.pages.query-form')