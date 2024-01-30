<section class="page-banner section-padding" style="background-image: url({{ asset('includes-frontend'); }}/images/services-banner.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <span class="heading-top">Our Blogs</span>
                <h1 class="section-heading">What's New <span class="light">At LeagueCity?</span></h1>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias repellat necessitatibus earum sed officiis?</p>
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
                    <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                </ol>
            </div>
        </div>
    </div>
</nav>

<section class="blog section-padding pb-0">
    <div class="container">
        <div class="row g-3">
            <?php for ($i = 1; $i <= 6; $i++) { ?>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <a href="{{ url('/singleblog'); }}">
                            <div class="image">
                                <img src="{{ asset('includes-frontend'); }}/images/ecommercesolutions.webp" alt="SecondMedic">
                            </div>
                        </a>
                        <div>
                            <h3><a href="{{ url('/singleblog'); }}">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></h3>
                            <ul class="blog-info-list">
                                <li><span class="text-grey">27 January 2024</span></li>
                                <li>Read Time : <span class="text-grey">30 Minutes</span></li>
                            </ul>
                            <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit officia a odit eaque enim recusandae impedit vel... <a href="#" class="web-clr">Read More</a></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>


@include('frontend.pages.query-form')