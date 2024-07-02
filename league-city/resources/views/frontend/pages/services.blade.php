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
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
            </div>
        </div>
    </div>
</nav>

@include('frontend.pages.innovative-services')

<section class="services-page bg-dark section-padding" id="software-engineering">
    <div class="container">
        <div class="row align-items-center service-heading-mb mt-0">
            <div class="col-lg-6">
                <h2 class="section-heading">Software Engineering</h2>
            </div>
            <div class="col-lg-6">
                <p>Empowering your digital transformation: Partner with us to build mobile apps, web, and software that are an extension of your vision.</p>
            </div>
        </div>
      
        <div class="row">
          
            @foreach($services as $p)
            @php $url = url('services')."/".$p->url_slug; @endphp
            <div class="col-lg-6">
                <div class="box">
                    <div class="image">
                        <img src="{{ asset($p->image); }}" alt="{{ $p->name; }}">
                    </div>
                    <div class="details">
                        <div class="heading"><span>{{$p->name}}</span> <a href="{{$url }}"><i class="fas fa-arrow-right"></i></a></div>
                        <?php echo $p->description ?>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
     
        <div id="digital-automation"></div>
        {{-- <div class="row align-items-center service-heading-mb">
            <div class="col-lg-6">
                <h2 class="section-heading">Digital Automation</h2>
            </div>
            <div class="col-lg-6">
                <p>We fuel organizational evolution with cutting-edge solutions, empowering you to dominate the digital landscape with streamlined workflows and intelligent decision-making.</p>
            </div>
        </div>
        <div class="row"></div> --}}
    </div>
</section>


@include('frontend.pages.query-form')