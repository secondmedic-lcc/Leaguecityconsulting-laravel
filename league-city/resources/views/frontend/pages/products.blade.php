<section class="page-banner section-padding" style="background-image: url({{ asset('includes-frontend'); }}/images/aboutus-banner.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <span class="heading-top">Projects</span>
                <h1 class="section-heading">Need Content<span class="light">League City Consulting</span></h1>
                <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, corporis? Quidem sapiente voluptatibus eum unde soluta molestiae.</p>
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
                    <li class="breadcrumb-item active" aria-current="page">Projects</li>
                </ol>
            </div>
        </div>
    </div>
</nav>

<section class="portfolio-page section-padding pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 text-center">
                <h2 class="section-heading with-p">Explore Our Projects</h2>
                <p class="heading-info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis commodi at aperiam nemo, voluptates totam quas sapiente error repellat doloribus adipisci iusto illum dolore voluptatum a ullam. Optio, debitis tempore.</p>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-lg-4 col-md-6">
                <div class="box">
                    <img src="{{ asset('includes-frontend'); }}/images/secmed-white.png" class="logo" alt="SecondMedic">
                    <div class="image">
                        <img src="{{ asset('includes-frontend'); }}/images/secondmedic.jpg" alt="SecondMedic">
                    </div>
                    <div>
                        <h3><span class="light">Providing Healthcare</span><br> Solution Anywhere</h3>
                        <p>A Complete Health Care App for all your Health Care needs.</p>
                    </div>
                    <a href="https://www.secondmedic.com/" target="_blank" class="btn web-btn">Explore More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="box">
                    <img src="{{ asset('includes-frontend'); }}/images/showoffclicks.png" class="logo" alt="Show Off Clicks">
                    <div class="image">
                        <img src="{{ asset('includes-frontend'); }}/images/showoffclicks.jpg" alt="Show Off Clicks">
                    </div>
                    <div>
                        <h3><span class="light">Showoffclicks</span><br> For Women & Kids</h3>
                        <p>Be the next cover page model.</p>
                    </div>
                    <a href="https://showoffclicks.com/" target="_blank" class="btn web-btn">Explore More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="box">
                    <img src="{{ asset('includes-frontend'); }}/images/greensole.png" class="logo" alt="Greensole">
                    <div class="image">
                        <img src="{{ asset('includes-frontend'); }}/images/greensole.jpg" alt="Greensole">
                    </div>
                    <div>
                        <h3><span class="light">Greensole</span><br> A Footwear E-commerce Shop</h3>
                        <p>An E-commerce app for sustainable and vegan footwear.</p>
                    </div>
                    <a href="https://www.greensole.com/" target="_blank" class="btn web-btn">Explore More</a>
                </div>
            </div>
        </div>
    </div>
</section>
@include('frontend.pages.query-form')