<section class="page-banner section-padding" style="background-image: url({{ asset('includes-frontend'); }}/images/services-banner.webp);">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <span class="heading-top">Single Portfolio</span>
                <h1 class="section-heading">Providing Healthcare <span class="light">Solution Anywhere</span></h1>
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
                    <li class="breadcrumb-item"><a href="{{ url('/portfolio'); }}">Portfolio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Single Portfolio</li>
                </ol>
            </div>
        </div>
    </div>
</nav>

<section class="singleportfolio section-padding pb-0">
    <div class="container">
        <div class="row">
            <div class="row align-items-center portfolio-heading-mb">
                <div class="col-lg-6">
                    <h2 class="section-heading">Providing Healthcare <br>Solution Anywhere</h2>
                </div>
                <div class="col-lg-6">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae ullam quas quibusdam odit sapiente nemo tempore laborum error neque ducimus? Ab sapiente nam illum quae adipisci delectus? Sint, impedit sequi!</p>
                </div>
            </div>
        </div>
        <div class="row g-3">
            <?php for ($i = 1; $i <= 6; $i++) { ?>
                <div class="col-md-6 col-lg-4">
                    <div class="box">
                        <i class="fas fa-stethoscope icon"></i>
                        <i class="fas fa-stethoscope big-icon"></i>
                        <h3>Telemedicine App Development</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam repellat praesentium expedita laboriosam qui in asperiores vitae ex quia sed quibusdam.</p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<section class="portfolio-standout section-padding">
    <div class="container">
        <div class="row align-items-center portfolio-heading-mb">
            <div class="col-lg-6">
                <h2 class="section-heading">Exclusive features that make us stand out.</h2>
            </div>
            <div class="col-lg-6">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae ullam quas quibusdam odit sapiente nemo tempore laborum error neque ducimus? Ab sapiente nam illum quae adipisci delectus? Sint, impedit sequi!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="owl-carousel standout-slider">
                        <?php for ($i = 1; $i <= 6; $i++) { ?>
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="content">
                                            <i class="fas fa-desktop"></i>
                                            <h3>SecondMedic</h3>
                                            <p>Website connects users with diverse health services, facilitating convenient access to medical resources and information.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <img src="" alt="LeagueCity">
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="portfolio-process section-padding bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 text-center">
                <h2 class="section-heading with-p">Telemedicine App Development Process We Follow</h2>
                <p class="heading-info text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique magni veniam maxime magnam dignissimos, explicabo facilis obcaecati fuga deserunt.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                Accordion Item #1
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab architecto provident, doloremque assumenda officiis est.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                Accordion Item #2
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab architecto provident, doloremque assumenda officiis est.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                Accordion Item #3
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab architecto provident, doloremque assumenda officiis est.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                Accordion Item #4
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab architecto provident, doloremque assumenda officiis est.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                Accordion Item #5
                            </button>
                        </h2>
                        <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab architecto provident, doloremque assumenda officiis est.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="portfolio-whychoose section-padding pb-0">
    <div class="container">
        <div class="row align-items-center portfolio-heading-mb">
            <div class="col-lg-6">
                <h2 class="section-heading">Why Choose League City for Telemedicine App Development?</h2>
            </div>
            <div class="col-lg-6">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae ullam quas quibusdam odit sapiente nemo tempore laborum error neque ducimus? Ab sapiente nam illum quae adipisci delectus? Sint, impedit sequi!</p>
            </div>
        </div>
        <div class="row g-3">
            <?php for ($i = 1; $i <= 4; $i++) { ?>
                <div class="col-lg-3 col-md-6">
                    <div class="box">
                        <i class="fas fa-percent"></i>
                        <h3>Customized Service Offerings</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae vero eos magnam enim aut consectetur iste delectus debitis soluta.</p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

@include('frontend.pages.query-form')