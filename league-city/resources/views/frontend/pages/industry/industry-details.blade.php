@empty(!$product_details)
    
@empty(!$web_banner)
    
<section class="page-banner section-padding" style="background-image: url({{ asset($web_banner['banner_image']); }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <span class="heading-top">{{ $web_banner['page_title']; }}</span>
                <h1 class="section-heading">{{ $web_banner['heading']; }}<span class="light">{{ $web_banner['sub_heading']; }}</span></h1>
                <p>{{ $web_banner['details']; }}</p>
            </div>
        </div>
    </div>
</section>

@endempty


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