<section class="portfolio-page section-padding pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 text-center">
                <h1 class="section-heading with-p">Start your journey with our latest innovative industrys</h1>
                <p class="heading-info">We understand customer actions, emotions, and unspoken desires. Through design and technology, we create solutions that make a real difference.</p>
            </div>
        </div>
        <div class="row g-3">

            @foreach($product as $p)

            @php $url = url('industry')."/".$p->url_slug; @endphp

            <div class="col-lg-4 col-md-6">
                <div class="box">
                    <div class="image">
                        <img src="{{ asset($p['industry_image']); }}" alt="{{ $p['name']; }}" />
                    </div>
                    <div>
                        <h3><span class="light">{{ $p['name']; }}</span><br> {{ $p['heading']; }}</h3>
                        <p>{{ $p['sub_heading']; }}</p>
                    </div>
                    <a href="{{ $url; }}" class="btn web-btn">View Product Details</a>
                </div>
            </div>

            @endforeach

        </div>
    </div>
</section>
@include('frontend.pages.query-form')