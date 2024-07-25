<section class="page-banner section-padding" style="background-image: url('{{ asset('includes-frontend'); }}/images/services-banner.webp');">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <span class="heading-top">Our Products</span>
                <h1 class="section-heading">Elevating Businesses<span class="light">with Our Premier Products</span></h1>
                <p>League City Consulting: Transforming Businesses with Strategic Solutions. Achieve Success, Together.</p>
            </div>
        </div>
    </div>
</section>

{{-- @foreach($product as $key => $p) @php $url = url('products')."/".$p->url_slug; @endphp
    @if($key % 2 == 0) --}}
        <section class="products-page section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-5 left-side">
                        <img src="" alt="">
                        {{-- {{ asset($p['product_image']); }}     ----->image tag{{ $p['name']; }}--}}
                    </div>
                    <div class="col-lg-7 offset-lg-1 col-md-7 right-side">
                        <h2 class="section-heading with-p">App Development</h2>
                        {{-- <!--{{ $p['name']; }}--> --}}
                        <p class="heading-info">
                            Welcome to Coupon Deal Now – where saving money is made simple! Dive into our extensive array of exclusive coupons, carefully selected to bring you incredible discounts on everything from electronics to fashion, travel, and beyond. With our constantly updated offers, staying on budget has never been easier. Join our community of savvy shoppers and unlock a world of unbeatable savings – start browsing now!</p>
                        {{-- <!--{{ $p['description']; }}--> --}}
                        <a href="#" target="_blank" class="btn web-btn">Explore More</a>
                        {{-- <!--{{ $p['product_url']; }}--> --}}
                    </div>
                </div>
            </div>
        </section>
    {{-- @else --}}
        <section class="products-page section-padding bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7 right-side">
                        <h2 class="section-heading with-p">PPC Packages</h2>
                        {{-- <!--{{ $p['name']; }}--> --}}
                        <p class="heading-info">
                            Introducing our Pharmacy Inventory Management System your ultimate solution for efficient inventory control in pharmacies, both for individual shops and large organizations. Streamline your inventory processes, optimize stock levels, and ensure smooth operations with our user-friendly platform. Experience seamless management and maximize productivity with our innovative system.
                        </p>
                        {{-- <!--{{ $p['description']; }}---> --}}
                        <a href="#" target="_blank" class="btn web-btn">Explore More</a>
                        {{-- <!--{{ $p['product_url']; }}--> --}}
                    </div>
                    <div class="col-lg-4 offset-lg-1 col-md-5 left-side">
                        <img src="" />
                        {{-- <!--{{ asset($p['product_image']); }}" alt="{{ $p['name']; }}--> --}}
                    </div>
                </div>
            </div>
        </section>
        <section class="products-page section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-5 left-side">
                        <img src="" alt="">
                        {{-- {{ asset($p['product_image']); }}     ----->image tag{{ $p['name']; }}--}}
                    </div>
                    <div class="col-lg-7 offset-lg-1 col-md-7 right-side">
                        <h2 class="section-heading with-p">SMO Packages</h2>
                        {{-- <!--{{ $p['name']; }}--> --}}
                        <p class="heading-info">
                            Welcome to Coupon Deal Now – where saving money is made simple! Dive into our extensive array of exclusive coupons, carefully selected to bring you incredible discounts on everything from electronics to fashion, travel, and beyond. With our constantly updated offers, staying on budget has never been easier. Join our community of savvy shoppers and unlock a world of unbeatable savings – start browsing now!</p>
                        {{-- <!--{{ $p['description']; }}--> --}}
                        <a href="#" target="_blank" class="btn web-btn">Explore More</a>
                        {{-- <!--{{ $p['product_url']; }}--> --}}
                    </div>
                </div>
            </div>
        </section>
        <section class="products-page section-padding bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7 right-side">
                        <h2 class="section-heading with-p">Website Maintenance</h2>
                        {{-- <!--{{ $p['name']; }}--> --}}
                        <p class="heading-info">
                            Introducing our Pharmacy Inventory Management System your ultimate solution for efficient inventory control in pharmacies, both for individual shops and large organizations. Streamline your inventory processes, optimize stock levels, and ensure smooth operations with our user-friendly platform. Experience seamless management and maximize productivity with our innovative system.
                        </p>
                        {{-- <!--{{ $p['description']; }}---> --}}
                        <a href="#" target="_blank" class="btn web-btn">Explore More</a>
                        {{-- <!--{{ $p['product_url']; }}--> --}}
                    </div>
                    <div class="col-lg-4 offset-lg-1 col-md-5 left-side">
                        <img src="" />
                        {{-- <!--{{ asset($p['product_image']); }}" alt="{{ $p['name']; }}--> --}}
                    </div>
                </div>
            </div>
        </section>
        <section class="products-page section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-5 left-side">
                        <img src="" alt="">
                        {{-- {{ asset($p['product_image']); }}     ----->image tag{{ $p['name']; }}--}}
                    </div>
                    <div class="col-lg-7 offset-lg-1 col-md-7 right-side">
                        <h2 class="section-heading with-p">SEO Packages</h2>
                        {{-- <!--{{ $p['name']; }}--> --}}
                        <p class="heading-info">
                            Welcome to Coupon Deal Now – where saving money is made simple! Dive into our extensive array of exclusive coupons, carefully selected to bring you incredible discounts on everything from electronics to fashion, travel, and beyond. With our constantly updated offers, staying on budget has never been easier. Join our community of savvy shoppers and unlock a world of unbeatable savings – start browsing now!</p>
                        {{-- <!--{{ $p['description']; }}--> --}}
                        <a href="#" target="_blank" class="btn web-btn">Explore More</a>
                        {{-- <!--{{ $p['product_url']; }}--> --}}
                    </div>
                </div>
            </div>
        </section>

        <section class="products-page section-padding bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7 right-side">
                        <h2 class="section-heading with-p">SMM Packages</h2>
                        {{-- <!--{{ $p['name']; }}--> --}}
                        <p class="heading-info">
                            Introducing our Pharmacy Inventory Management System your ultimate solution for efficient inventory control in pharmacies, both for individual shops and large organizations. Streamline your inventory processes, optimize stock levels, and ensure smooth operations with our user-friendly platform. Experience seamless management and maximize productivity with our innovative system.
                        </p>
                        {{-- <!--{{ $p['description']; }}---> --}}
                        <a href="#" target="_blank" class="btn web-btn">Explore More</a>
                        {{-- <!--{{ $p['product_url']; }}--> --}}
                    </div>
                    <div class="col-lg-4 offset-lg-1 col-md-5 left-side">
                        <img src="" />
                        {{-- <!--{{ asset($p['product_image']); }}" alt="{{ $p['name']; }}--> --}}
                    </div>
                </div>
            </div>
        </section>
        <section class="products-page section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-5 left-side">
                        <img src="" alt="">
                        {{-- {{ asset($p['product_image']); }}     ----->image tag{{ $p['name']; }}--}}
                    </div>
                    <div class="col-lg-7 offset-lg-1 col-md-7 right-side">
                        <h2 class="section-heading with-p">Website Packages</h2>
                        {{-- <!--{{ $p['name']; }}--> --}}
                        <p class="heading-info">
                            Welcome to Coupon Deal Now – where saving money is made simple! Dive into our extensive array of exclusive coupons, carefully selected to bring you incredible discounts on everything from electronics to fashion, travel, and beyond. With our constantly updated offers, staying on budget has never been easier. Join our community of savvy shoppers and unlock a world of unbeatable savings – start browsing now!</p>
                        {{-- <!--{{ $p['description']; }}--> --}}
                        <a href="#" target="_blank" class="btn web-btn">Explore More</a>
                        {{-- <!--{{ $p['product_url']; }}--> --}}
                    </div>
                </div>
            </div>
        </section>
    {{-- @endif
@endforeach --}}


@include('frontend.pages.query-form')
