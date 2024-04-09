<section class="page-banner section-padding" style="background-image: url('{{ asset('includes-frontend'); }}/images/services-banner.webp');">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <span class="heading-top">Products</span>
                <h1 class="section-heading">League City Consulting<span class="light">Products</span></h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et ex temporibus ullam maxime expedita modi excepturi nam molestias.</p>
            </div>
        </div>
    </div>
</section>

@foreach($product as $key => $p) @php $url = url('products')."/".$p->url_slug; @endphp
    @if($key % 2 == 0)
        <section class="products-page section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-5 left-side">
                        <img src="{{ asset($p['product_image']); }}" alt="{{ $p['name']; }}">
                    </div>
                    <div class="col-lg-7 offset-lg-1 col-md-7 right-side">
                        <h2 class="section-heading with-p">{{ $p['name']; }}</h2>
                        <p class="heading-info">{{ $p['description']; }}</p>
                        <a href="{{ $url; }}" class="btn web-btn">Explore More</a>
                    </div>
                </div>
            </div>
        </section>
    @else
        <section class="products-page section-padding bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7 right-side">
                        <h2 class="section-heading with-p">{{ $p['name']; }}</h2>
                        <p class="heading-info">{{ $p['description']; }}</p>
                        <a href="{{ $url; }}" class="btn web-btn">Explore More</a>
                    </div>
                    <div class="col-lg-4 offset-lg-1 col-md-5 left-side">
                        <img src="{{ asset($p['product_image']); }}" alt="{{ $p['name']; }}" />
                    </div>
                </div>
            </div>
        </section>
    @endif
@endforeach


@include('frontend.pages.query-form')