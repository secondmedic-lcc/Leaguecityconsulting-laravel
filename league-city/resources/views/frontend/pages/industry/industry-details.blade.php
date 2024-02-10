@empty(!$product_details)
    
<section class="page-banner section-padding" style="background-image: url({{ asset('includes-frontend'); }}/images/services-banner.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <span class="heading-top">League City Consulting</span>
                <h1 class="section-heading">{{ $product_details['name'] }} <span class="light"> {{ $product_details['heading'] }}</span></h1>
                <p class="mb-0">{{ $product_details['sub_heading'] }}</p>
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
                    <li class="breadcrumb-item"><a href="{{ url('/industry'); }}">Industry</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $product_details['name'] }}</li>
                </ol>
            </div>
        </div>
    </div>
</nav>

<section class="aboutus section-padding pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="{{ asset($product_details['industry_image']); }}" class="w-100" alt="{{ $product_details['name']; }}">
            </div>
            <div class="col-lg-6">
                <?php echo $product_details['description']; ?>
            </div>
        </div>
    </div>
</section>

@include('frontend.pages.query-form')
@endempty