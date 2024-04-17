<nav aria-label="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/'); }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<section class="portfolio-page section-padding pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 text-center">
                <h1 class="section-heading with-p">Start your journey with our latest innovative projects</h1>
                <p class="heading-info">We understand customer actions, emotions, and unspoken desires. Through design and technology, we create solutions that make a real difference.</p>
            </div>
            <div class="col-12">
                <div class="nav nav-pills web-overflow creative-tabs" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active" id="v-pills-all-tab" data-bs-toggle="pill" data-bs-target="#v-pills-all" type="button" role="tab" aria-controls="v-pills-all" aria-selected="false" data-aos="fade-up" data-aos-delay="100">All</button>
                    <button class="nav-link" id="v-pills-website-tab" data-bs-toggle="pill" data-bs-target="#v-pills-website" type="button" role="tab" aria-controls="v-pills-website" aria-selected="false" data-aos="fade-up" data-aos-delay="100">Website</button>
                    <button class="nav-link" id="v-pills-androidapp-tab" data-bs-toggle="pill" data-bs-target="#v-pills-androidapp" type="button" role="tab" aria-controls="v-pills-androidapp" aria-selected="false" data-aos="fade-up" data-aos-delay="200">Android App</button>
                    <button class="nav-link" id="v-pills-iosapp-tab" data-bs-toggle="pill" data-bs-target="#v-pills-iosapp" type="button" role="tab" aria-controls="v-pills-iosapp" aria-selected="false" data-aos="fade-up" data-aos-delay="300">IOS App</button>
                    <button class="nav-link" id="v-pills-figma-tab" data-bs-toggle="pill" data-bs-target="#v-pills-figma" type="button" role="tab" aria-controls="v-pills-figma" aria-selected="false" data-aos="fade-up" data-aos-delay="400">Figma Design</button>
                    <button class="nav-link" id="v-pills-logo-tab" data-bs-toggle="pill" data-bs-target="#v-pills-logo" type="button" role="tab" aria-controls="v-pills-logo" aria-selected="false" data-aos="fade-up" data-aos-delay="500">Logo Design</button>
                    <button class="nav-link" id="v-pills-graphic-tab" data-bs-toggle="pill" data-bs-target="#v-pills-graphic" type="button" role="tab" aria-controls="v-pills-graphic" aria-selected="false" data-aos="fade-up" data-aos-delay="600">Graphic Design</button>
                    <button class="nav-link" id="v-pills-seo-tab" data-bs-toggle="pill" data-bs-target="#v-pills-seo" type="button" role="tab" aria-controls="v-pills-seo" aria-selected="false" data-aos="fade-up" data-aos-delay="700">SEO</button>
                </div>
            </div>
        </div>
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                <div class="row g-3">
                    @foreach($portfolio as $p)
                    @php $url = url('portfolio')."/".$p->url_slug; @endphp
                    <div class="col-lg-4 col-md-6">
                        <div class="box">
                            @if($p['logo'] != null && $p['logo'] != "")
                            <img src="{{ asset($p['logo']); }}" class="logo" alt="{{ $p['name']; }}">
                            @endif
                            <div class="image">
                                <img src="{{ asset($p['image']); }}" alt="{{ $p['name']; }}" />
                            </div>
                            <div>
                                <h3><span class="light">{{ $p['name']; }}</span><br> {{ $p['heading']; }}</h3>
                                <p>{{ $p['sub_heading']; }}</p>
                            </div>
                            <a href="{{ $url; }}" target="_blank" class="btn web-btn">View Project Details</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-website" role="tabpanel" aria-labelledby="v-pills-website-tab">
            </div>
            <div class="tab-pane fade" id="v-pills-androidapp" role="tabpanel" aria-labelledby="v-pills-androidapp-tab">
            </div>
            <div class="tab-pane fade" id="v-pills-iosapp" role="tabpanel" aria-labelledby="v-pills-iosapp-tab">
            </div>
            <div class="tab-pane fade" id="v-pills-figma" role="tabpanel" aria-labelledby="v-pills-figma-tab">
            </div>
            <div class="tab-pane fade" id="v-pills-logo" role="tabpanel" aria-labelledby="v-pills-logo-tab">
            </div>
            <div class="tab-pane fade" id="v-pills-graphic" role="tabpanel" aria-labelledby="v-pills-graphic-tab">
            </div>
            <div class="tab-pane fade" id="v-pills-seo" role="tabpanel" aria-labelledby="v-pills-seo-tab">
            </div>
        </div>
    </div>
</section>
@include('frontend.pages.query-form')