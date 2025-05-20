@empty(!$web_banner)
    <section class="page-banner section-padding" style="background-image: url({{ asset($web_banner['banner_image']) }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <span class="heading-top">{{ $web_banner['page_title'] }}</span>
                    <h1 class="section-heading">{{ $web_banner['heading'] }}<span
                            class="light">{{ $web_banner['sub_heading'] }}</span></h1>
                    <p>{{ $web_banner['details'] }}</p>
                </div>
            </div>
        </div>
    </section>
@endempty
{{-- <section class="page-banner section-padding" style="background-image: url('{{ asset('includes-frontend'); }}/images/services-banner.webp');">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <span class="heading-top">Our Products</span>
                <h1 class="section-heading">Elevating Businesses<span class="light">with Our Premier Products</span></h1>
                <p>League City Consulting: Transforming Businesses with Strategic Solutions. Achieve Success, Together.</p>
            </div>
        </div>
    </div>
</section> --}}

@foreach ($product as $key => $p)
    @php $url = url('products')."/".$p->url_slug; @endphp
    @if ($key % 2 == 0)
        <section class="products-page section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-5 left-side">
                        <img src="{{ asset($p['product_image']) }}" alt="{{ $p['name'] }}">
                    </div>
                    <div class="col-lg-7 offset-lg-1 col-md-7 right-side">
                        <h2 class="section-heading with-p">{{ $p['name'] }}</h2>
                        <p class="heading-info">{{ $p['description'] }}</p>
                        <a href="{{ $p['product_url'] }}" target="_blank" class="btn web-btn">Explore More</a>
                    </div>
                </div>
            </div>
        </section>
    @else
        <section class="products-page section-padding bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7 right-side">
                        <h2 class="section-heading with-p">{{ $p['name'] }}</h2>
                        <p class="heading-info">{{ $p['description'] }}</p>
                        <a href="{{ $p['product_url'] }}" target="_blank" class="btn web-btn">Explore More</a>
                    </div>
                    <div class="col-lg-4 offset-lg-1 col-md-5 left-side">
                        <img src="{{ asset($p['product_image']) }}" alt="{{ $p['name'] }}" />
                    </div>
                </div>
            </div>
        </section>
    @endif
@endforeach


@include('frontend.pages.query-form')
