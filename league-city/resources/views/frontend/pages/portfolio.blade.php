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

                    <button class="nav-link portfolio-filter active" id="category-all" category="all">All</button>

                    @foreach($category as $c)
                    <button class="nav-link portfolio-filter" id="category-{{ $c['id']; }}" category="{{ $c['id']; }}">{{ $c['category_name']; }}</button>
                    @endforeach

                </div>
            </div>
        </div>

        <div class="row g-3">
            @foreach($portfolio as $p)
            @php $url = url('portfolio')."/".$p->url_slug;
            $categoryList = explode(",",@$p->category);
            $catData = "";
            foreach ($categoryList as $c) {
            $catData .= " portfolio-view-".$c;
            } @endphp
            <div class="col-lg-4 col-md-6 {{ $catData; }} portfolio-view">
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
    </div>
</section>
@include('frontend.pages.query-form')