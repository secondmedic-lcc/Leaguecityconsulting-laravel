<section class="page-banner section-padding" style="background-image: url('{{ asset('includes-frontend'); }}/images/package-banner.webp');">
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
                    <li class="breadcrumb-item"><a href="#">Packages</a></li>
                    {{-- <li class="breadcrumb-item"><a href="{{ url('/packages'); }}">Packages</a></li> --}}
                    <li class="breadcrumb-item active" aria-current="page">{{ $package_types->package_name }}</li>
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
                <h2 class="section-heading text-center">{{ @$package_types->package_name; }}</h2>
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
                                <a href="javascript:void(0)" class="btn web-btn btn-form" data-bs-toggle="modal" data-bs-target="#pricingModalForm" packageName="{{ @$details->enterprise_title; }}" packageType="{{ $package_types->package_name; }}" packageInr="" packageUsd="">Enquire Now</a>
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
                    <p class="small-text"><a href="{{ url('terms-and-conditions'); }}" target="_blank">T&C Apply</a></p>
                    <a href="javascript:void(0);" class="btn web-btn btn-form" data-bs-toggle="modal" data-bs-target="#pricingModalForm" packageName="{{ $plan['package']->name; }}" packageType="{{ $package_types->package_name; }}" packageInr="{{ $plan['package']->monthly_inr; }}" packageUsd="{{ $plan['package']->monthly_usd; }}">Get Started Now</a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>


<div class="modal fade pricing-modal" id="pricingModalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="selected-package">
                    <div class="package-h">
                        <h3><label id="packageName"></label> Business</h3>
                        <p id="packageType">SEO Packages</p>
                    </div>
                    <div class="price">
                        <p><b><span id="packageInr"></span> INR/ <span id="packageUsd"></span> USD</b> Monthly</p>
                        <p>EXCLUSIVE OF ALL TAXES</p>
                    </div>
                </div>
            </div>
            <div class="line w-100 m-0"></div>
            <div class="modal-body">
                <form id="myPlanForm" action="{{ route('packages-request'); }}" method="POST" autocomplete="off">
                    @csrf
                    <input type="hidden" name="package_type" id="package_type">
                    <input type="hidden" name="plan_name" id="plan_name">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="">Full Name*</label>
                            <input class="form-control" name="name" required onkeypress="return /[A-Za-z ]/i.test(event.key)" />
                        </div>
                        <div class="col-md-6">
                            <label for="">Mobile Number*</label>
                            <input class="form-control" name="contact" required onkeypress="return /[0-9]/i.test(event.key)" minlength="8" maxlength="12" pattern="[6-9]{1}[0-9]{9}" />
                        </div>
                        <div class="col-md-6">
                            <label for="">Email*</label>
                            <input type="email" class="form-control" name="email" required />
                        </div>
                        <div class="col-md-6">
                            <label for="">Location*</label>
                            <input class="form-control" name="location" required onkeypress="return /[A-Za-z ]/i.test(event.key)" />
                        </div>
                        <div class="col-md-12">
                            <label for="">About Your Project</label>
                            <textarea class="form-control" name="about"></textarea>
                        </div>
                        <div class="col-md-12">
                            <div class="text-center">
                                <button type="submit" class="btn web-btn" id="plan-form-btn" name="form-btn">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('frontend.pages.query-form')