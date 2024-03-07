<section class="page-banner section-padding" style="background-image: url('{{ asset('includes-frontend'); }}/images/package-banner.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <span class="heading-top">Packages</span>
                <h1 class="section-heading">Best Pricing for Seamless
                    <span class="light">IT Solutions
                    </span>
                </h1>
                <p>Elevate Your Business with League City Consulting: Competitive Pricing for Exceptional Results
                </p>
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
                    <li class="breadcrumb-item active" aria-current="page">Packages</li>
                </ol>
            </div>
        </div>
    </div>
</nav>

<section class="package-info section-padding pb-0">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="section-heading with-p">{{ @$details->main_heading }}</h2>
                <p class="heading-info mb-0">{{ @$details->sub_heading }}</p>
            </div>
        </div>
    </div>
</section>

<section class="package section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="section-heading text-center">{{ $package_types->package_name; }}</h2>
            </div>
        </div>
        <div class="row g-3 g-md-5 justify-content-center">
            @foreach($plans_list as $plan)
            <div class="col-lg-4 col-md-6">
                <div class="box">
                    <img src="{{ asset('includes-frontend'); }}/images/{{ $plan['package']->name; }}-business.webp" class="img" alt="">
                    <div class="box-body">
                        <h3 class="box-heading">{{ Str::ucfirst($plan['package']->name); }} Business</h3>
                        <p><b>{{ $plan['package']->monthly_inr; }} INR / {{ $plan['package']->monthly_usd; }} USD Monthly</b></p>
                        <p>Best for {{ Str::ucfirst($plan['package']->name); }} Business</p>
                        <a href="#pricing" class="btn web-btn">View Details</a>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-lg-12">
                <div class="box big-box" style="background-image: url('{{ asset('includes-frontend'); }}/images/enterprise.webp');">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="box-heading">{{ @$details->enterprise_title }}</h3>
                                <p>{{ @$details->enterprise_details }}</p>
                                <a href="" class="btn web-btn" data-bs-toggle="modal" data-bs-target="#pricingModalForm">Enquire Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="package-includes section-padding bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <h2 class="section-heading with-p">{{ @$details->includes_heading }}</h2>
                <p class="heading-info text-white">{{ @$details->includes_details }}</p>
            </div>
        </div>
        @foreach($property as $key => $p)
            <div class="box">
                <div class="row align-items-center">
                    @if($key % 2 == 0)
                        <div class="col-lg-6 order-1">
                            <img src="{{ asset($p->includes_image) }}" alt="">
                        </div>
                        <div class="col-lg-6 order-2">
                            <h3 class="box-h">{{ $p->title }}</h3>
                            <p class="mb-0">{{ $p->description }}</p>
                        </div>
                    @else
                        <div class="col-lg-6 order-2 order-lg-1">
                            <h3 class="box-h">{{ $p->title }}</h3>
                            <p class="mb-0">{{ $p->description }}</p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2">
                            <img src="{{ asset($p->includes_image) }}" alt="">
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</section>

<section class="pricing section-padding" id="pricing">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="section-heading text-center">{{ $package_types->package_name; }}</h2>
            </div>
        </div>
        <div class="row g-3 g-md-5 justify-content-center">

            @foreach($plans_list as $plan)
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <h3 class="box-heading">{{ Str::ucfirst($plan['package']->name) }} Size Business <br />
                            <small>{{ $package_types->package_name; }}</small>
                        </h3>
                        <p><b>{{ $plan['package']->monthly_inr; }} INR/{{ $plan['package']->monthly_usd; }} USD</b> Monthly</p>
                        <p>EXCLUSIVE OF ALL TAXES</p>
                        
                        @foreach($plan['keypoints'] as $keypoint)
                            <ul class="list">
                                <li>{{ $keypoint->key_point; }}</li>
                                @foreach($keypoint->sub_key as $subKey)
                                    <li>
                                        @if($subKey->includes == 1)
                                            <i class="fas fa-check-circle text-success"></i>
                                        @else
                                            <i class="fas fa-times-circle text-danger"></i>
                                        @endif
                                        {{ $subKey->sub_keypoint; }}
                                    </li>
                                @endforeach
                            </ul>
                        @endforeach
                        <p class="small-text">T&C Apply</p>
                        <a href="#" class="btn web-btn" data-bs-toggle="modal" data-bs-target="#pricingModalForm">Get Started Now</a>
                    </div>
                </div>
            @endforeach

            <div class="col-lg-4 col-md-6">
                <div class="box">
                    <h3 class="box-heading">Small Business <br />
                        <small>SEO Packages</small>
                    </h3>
                    <p><b>20,000 INR/250 USD</b> Monthly</p>
                    <p>EXCLUSIVE OF ALL TAXES</p>
                    <ul class="list">
                        <li>WEBSITE REVIEW & ANALYSIS</li>
                        <li><i class="fas fa-check-circle text-success"></i> Max 10 Keywords</li>
                        <li><i class="fas fa-check-circle text-success"></i> Website & Competitor Analysis</li>
                        <li><i class="fas fa-check-circle text-success"></i> Content Duplicity Check</li>
                        <li><i class="fas fa-check-circle text-success"></i> Initial Ranking Report</li>
                        <li><i class="fas fa-check-circle text-success"></i> Keywords Research</li>
                    </ul>
                    <ul class="list">
                        <li>ON PAGE SEO ANALYSIS</li>
                        <li><i class="fas fa-check-circle text-success"></i> Meta Tags Creation</li>
                        <li><i class="fas fa-check-circle text-success"></i> Canonicalization</li>
                        <li><i class="fas fa-check-circle text-success"></i> URL Structure</li>
                        <li><i class="fas fa-check-circle text-success"></i> Content Optimization</li>
                        <li><i class="fas fa-check-circle text-success"></i> Image Optimization</li>
                        <li><i class="fas fa-check-circle text-success"></i> Heading Tag Optimization</li>
                        <li><i class="fas fa-check-circle text-success"></i> Website Speed Optimization</li>
                        <li><i class="fas fa-check-circle text-success"></i> Robots.txt</li>
                        <li><i class="fas fa-check-circle text-success"></i> Sitemap Creation</li>
                        <li><i class="fas fa-check-circle text-success"></i> Google Analytics & Search Console Setup</li>
                        <li><i class="fas fa-times-circle text-danger"></i> Blog Optimization</li>
                    </ul>
                    <ul class="list">
                        <li>LOCAL SEO SETUP</li>
                        <li><i class="fas fa-check-circle text-success"></i> Google Map Integration on website</li>
                        <li><i class="fas fa-check-circle text-success"></i> Google My Business Page Setup and Optimization</li>
                        <li><i class="fas fa-check-circle text-success"></i> Local Citations – 5</li>
                        <li><i class="fas fa-check-circle text-success"></i> Local Classifieds – 2</li>
                    </ul>
                    <ul class="list">
                        <li>CONTENT MARKETING</li>
                        <li><i class="fas fa-check-circle text-success"></i> Blog Posting (500 – 700 words) – 1</li>
                        <li><i class="fas fa-check-circle text-success"></i> Article Writing(500 – 700 words) – 1</li>
                        <li><i class="fas fa-check-circle text-success"></i> Onsite Blog (1000 – 1500 words) – 1</li>
                    </ul>
                    <ul class="list">
                        <li>EMAIL OUTREACH</li>
                        <li><i class="fas fa-times-circle text-danger"></i> Guest Blogging</li>
                        <li><i class="fas fa-times-circle text-danger"></i> Broken Backlink Building</li>
                        <li><i class="fas fa-times-circle text-danger"></i> Resource Link Building</li>
                        <li><i class="fas fa-times-circle text-danger"></i> Alerts and Mention</li>
                        <li><i class="fas fa-times-circle text-danger"></i> Link Roundups</li>
                        <li><i class="fas fa-check-circle text-success"></i> Competitor Backlink Research</li>
                    </ul>
                    <ul class="list">
                        <li>OFF PAGE SEO</li>
                        <li><i class="fas fa-check-circle text-success"></i> Social Sharing – 30(Total)</li>
                        <li><i class="fas fa-check-circle text-success"></i> Blog Social Sharing</li>
                        <li><i class="fas fa-check-circle text-success"></i> Slide Submissions – 1</li>
                        <li><i class="fas fa-check-circle text-success"></i> Text Infographic Creation – 1</li>
                        <li><i class="fas fa-times-circle text-danger"></i> Video Creation</li>
                        <li><i class="fas fa-check-circle text-success"></i> Q & A – 1</li>
                    </ul>
                    <ul class="list">
                        <li>MONTHLY REPORTING</li>
                        <li><i class="fas fa-check-circle text-success"></i> Keyword Ranking Report</li>
                        <li><i class="fas fa-check-circle text-success"></i> Google Analytics Report</li>
                        <li><i class="fas fa-check-circle text-success"></i> Acquired Links Report</li>
                    </ul>
                    <ul class="list">
                        <li>CLIENT SUPPORT</li>
                        <li><i class="fas fa-check-circle text-success"></i> Email</li>
                        <li><i class="fas fa-check-circle text-success"></i> Chat</li>
                        <li><i class="fas fa-times-circle text-danger"></i> Call</li>
                    </ul>
                    <p class="small-text">T&C Apply</p>
                    <a href="#" class="btn web-btn" data-bs-toggle="modal" data-bs-target="#pricingModalForm">Get Started Now</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="box">
                    <h3 class="box-heading">Mid Size Business <br />
                        <small>SEO Packages</small>
                    </h3>
                    <p><b>30,000 INR/400 USD</b> Monthly</p>
                    <p>EXCLUSIVE OF ALL TAXES</p>
                    <ul class="list">
                        <li>WEBSITE REVIEW & ANALYSIS</li>
                        <li><i class="fas fa-check-circle text-success"></i> Max 15 Keywords</li>
                        <li><i class="fas fa-check-circle text-success"></i> Website & Competitor Analysis</li>
                        <li><i class="fas fa-check-circle text-success"></i> Content Duplicity Check</li>
                        <li><i class="fas fa-check-circle text-success"></i> Initial Ranking Report</li>
                        <li><i class="fas fa-check-circle text-success"></i> Keywords Research</li>
                    </ul>
                    <ul class="list">
                        <li>ON PAGE SEO ANALYSIS</li>
                        <li><i class="fas fa-check-circle text-success"></i> Meta Tags Creation</li>
                        <li><i class="fas fa-check-circle text-success"></i> Canonicalization</li>
                        <li><i class="fas fa-check-circle text-success"></i> URL Structure</li>
                        <li><i class="fas fa-check-circle text-success"></i> Content Optimization</li>
                        <li><i class="fas fa-check-circle text-success"></i> Image Optimization</li>
                        <li><i class="fas fa-check-circle text-success"></i> Heading Tag Optimization</li>
                        <li><i class="fas fa-check-circle text-success"></i> Website Speed Optimization</li>
                        <li><i class="fas fa-check-circle text-success"></i> Robots.txt</li>
                        <li><i class="fas fa-check-circle text-success"></i> Sitemap Creation</li>
                        <li><i class="fas fa-check-circle text-success"></i> Google Analytics & Search Console Setup</li>
                        <li><i class="fas fa-check-circle text-success"></i> Blog Optimization – 5 Posts</li>
                    </ul>
                    <ul class="list">
                        <li>LOCAL SEO SETUP</li>
                        <li><i class="fas fa-check-circle text-success"></i> Google Map Integration on website</li>
                        <li><i class="fas fa-check-circle text-success"></i> Google My Business Page Setup and Optimization</li>
                        <li><i class="fas fa-check-circle text-success"></i> Local Citations – 10</li>
                        <li><i class="fas fa-check-circle text-success"></i> Local Classifieds – 5</li>
                    </ul>
                    <ul class="list">
                        <li>CONTENT MARKETING</li>
                        <li><i class="fas fa-check-circle text-success"></i> Blog Posting (500 – 700 words) – 3</li>
                        <li><i class="fas fa-check-circle text-success"></i> Article Writing(500 – 700 words) – 3</li>
                        <li><i class="fas fa-check-circle text-success"></i> Onsite Blog (1000 – 1500 words) – 3</li>
                    </ul>
                    <ul class="list">
                        <li>EMAIL OUTREACH</li>
                        <li><i class="fas fa-check-circle text-success"></i> Guest Blogging</li>
                        <li><i class="fas fa-check-circle text-success"></i> Broken Backlink Building</li>
                        <li><i class="fas fa-times-circle text-danger"></i> Resource Link Building</li>
                        <li><i class="fas fa-check-circle text-success"></i> Alerts and Mention</li>
                        <li><i class="fas fa-times-circle text-danger"></i> Link Roundups</li>
                        <li><i class="fas fa-check-circle text-success"></i> Competitor Backlink Research</li>
                    </ul>
                    <ul class="list">
                        <li>OFF PAGE SEO</li>
                        <li><i class="fas fa-check-circle text-success"></i> Social Sharing – 40(Total)</li>
                        <li><i class="fas fa-check-circle text-success"></i> Blog Social Sharing</li>
                        <li><i class="fas fa-check-circle text-success"></i> Slide Submissions – 2</li>
                        <li><i class="fas fa-check-circle text-success"></i> Text Infographic Creation – 2</li>
                        <li><i class="fas fa-check-circle text-success"></i> Video Creation</li>
                        <li><i class="fas fa-check-circle text-success"></i> Q & A – 3</li>
                    </ul>
                    <ul class="list">
                        <li>MONTHLY REPORTING</li>
                        <li><i class="fas fa-check-circle text-success"></i> Keyword Ranking Report</li>
                        <li><i class="fas fa-check-circle text-success"></i> Google Analytics Report</li>
                        <li><i class="fas fa-check-circle text-success"></i> Acquired Links Report</li>
                    </ul>
                    <ul class="list">
                        <li>CLIENT SUPPORT</li>
                        <li><i class="fas fa-check-circle text-success"></i> Email</li>
                        <li><i class="fas fa-check-circle text-success"></i> Chat</li>
                        <li><i class="fas fa-check-circle text-success"></i> Call</li>
                    </ul>
                    <p class="small-text">T&C Apply</p>
                    <a href="#" class="btn web-btn" data-bs-toggle="modal" data-bs-target="#pricingModalForm">Get Started Now</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="box">
                    <h3 class="box-heading">Large Or Ecommerce <br />
                        <small>SEO Packages</small>
                    </h3>
                    <p><b>45, 000 INR/600 USD</b> Monthly</p>
                    <p>EXCLUSIVE OF ALL TAXES</p>
                    <ul class="list">
                        <li>WEBSITE REVIEW & ANALYSIS</li>
                        <li><i class="fas fa-check-circle text-success"></i> Max 40 Keywords</li>
                        <li><i class="fas fa-check-circle text-success"></i> Website & Competitor Analysis</li>
                        <li><i class="fas fa-check-circle text-success"></i> Content Duplicity Check</li>
                        <li><i class="fas fa-check-circle text-success"></i> Initial Ranking Report</li>
                        <li><i class="fas fa-check-circle text-success"></i> Keywords Research</li>
                    </ul>
                    <ul class="list">
                        <li>ON PAGE SEO ANALYSIS</li>
                        <li><i class="fas fa-check-circle text-success"></i> Meta Tags Creation</li>
                        <li><i class="fas fa-check-circle text-success"></i> Canonicalization</li>
                        <li><i class="fas fa-check-circle text-success"></i> URL Structure</li>
                        <li><i class="fas fa-check-circle text-success"></i> Content Optimization</li>
                        <li><i class="fas fa-check-circle text-success"></i> Image Optimization</li>
                        <li><i class="fas fa-check-circle text-success"></i> Heading Tag Optimization</li>
                        <li><i class="fas fa-check-circle text-success"></i> Website Speed Optimization</li>
                        <li><i class="fas fa-check-circle text-success"></i> Robots.txt</li>
                        <li><i class="fas fa-check-circle text-success"></i> Sitemap Creation</li>
                        <li><i class="fas fa-check-circle text-success"></i> Google Analytics & Search Console Setup</li>
                        <li><i class="fas fa-check-circle text-success"></i> Blog Optimization – 5 Posts</li>
                    </ul>
                    <ul class="list">
                        <li>LOCAL SEO SETUP</li>
                        <li><i class="fas fa-check-circle text-success"></i> Google Map Integration on website</li>
                        <li><i class="fas fa-check-circle text-success"></i> Google My Business Page Setup and Optimization</li>
                        <li><i class="fas fa-check-circle text-success"></i> Local Citations – 15</li>
                        <li><i class="fas fa-check-circle text-success"></i> Local Classifieds – 10</li>
                    </ul>
                    <ul class="list">
                        <li>CONTENT MARKETING</li>
                        <li><i class="fas fa-check-circle text-success"></i> Blog Posting (500 – 700 words) – 4</li>
                        <li><i class="fas fa-check-circle text-success"></i> Article Writing(500 – 700 words) – 4</li>
                        <li><i class="fas fa-check-circle text-success"></i> Onsite Blog (1000 – 1500 words) – 4</li>
                    </ul>
                    <ul class="list">
                        <li>EMAIL OUTREACH</li>
                        <li><i class="fas fa-check-circle text-success"></i> Guest Blogging</li>
                        <li><i class="fas fa-check-circle text-success"></i> Broken Backlink Building</li>
                        <li><i class="fas fa-check-circle text-success"></i> Resource Link Building</li>
                        <li><i class="fas fa-check-circle text-success"></i> Alerts and Mention</li>
                        <li><i class="fas fa-check-circle text-success"></i> Link Roundups</li>
                        <li><i class="fas fa-check-circle text-success"></i> Competitor Backlink Research</li>
                    </ul>
                    <ul class="list">
                        <li>OFF PAGE SEO</li>
                        <li><i class="fas fa-check-circle text-success"></i> Social Sharing – 50(Total)</li>
                        <li><i class="fas fa-check-circle text-success"></i> Blog Social Sharing</li>
                        <li><i class="fas fa-check-circle text-success"></i> Slide Submissions – 2</li>
                        <li><i class="fas fa-check-circle text-success"></i> Text Infographic Creation – 3</li>
                        <li><i class="fas fa-check-circle text-success"></i> Video-1 Minute (Product Based)</li>
                        <li><i class="fas fa-check-circle text-success"></i> Q & A – 5</li>
                    </ul>
                    <ul class="list">
                        <li>MONTHLY REPORTING</li>
                        <li><i class="fas fa-check-circle text-success"></i> Keyword Ranking Report</li>
                        <li><i class="fas fa-check-circle text-success"></i> Google Analytics Report</li>
                        <li><i class="fas fa-check-circle text-success"></i> Acquired Links Report</li>
                    </ul>
                    <ul class="list">
                        <li>CLIENT SUPPORT</li>
                        <li><i class="fas fa-check-circle text-success"></i> Email</li>
                        <li><i class="fas fa-check-circle text-success"></i> Chat</li>
                        <li><i class="fas fa-check-circle text-success"></i> Call</li>
                    </ul>
                    <p class="small-text">T&C Apply</p>
                    <a href="#" class="btn web-btn" data-bs-toggle="modal" data-bs-target="#pricingModalForm">Get Started Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade pricing-modal" id="pricingModalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="selected-package">
                    <div class="package-h">
                        <h3>Small Business</h3>
                        <p>SEO Packages</p>
                    </div>
                    <div class="price">
                        <p><b>20,000 INR/250 USD</b> Monthly</p>
                        <p>EXCLUSIVE OF ALL TAXES</p>
                    </div>
                </div>
            </div>
            <div class="line w-100 m-0"></div>
            <div class="modal-body">
                <form action="">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="">Full Name*</label>
                            <input class="form-control" name="" required />
                        </div>
                        <div class="col-md-6">
                            <label for="">Mobile Number*</label>
                            <input class="form-control" name="" required />
                        </div>
                        <div class="col-md-6">
                            <label for="">Email*</label>
                            <input type="email" class="form-control" name="" required />
                        </div>
                        <div class="col-md-6">
                            <label for="">Location*</label>
                            <input class="form-control" name="" required />
                        </div>
                        <div class="col-md-12">
                            <label for="">About Your Project</label>
                            <textarea class="form-control"></textarea>
                        </div>
                        <div class="col-md-12">
                            <div class="text-center">
                                <button type="submit" class="btn web-btn" name="form-btn">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('frontend.pages.query-form')