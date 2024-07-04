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
                    <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                </ol>
            </div>
        </div>
    </div>
</nav>

<section class="blog section-padding pb-0">
    <div class="container">
        <div class="row g-3">

            @foreach($blog as $b)
            @php $url = url('blogs')."/".$b['url_slug']; @endphp
            <div class="col-lg-4 col-md-6">
                <div class="box">
                    <a href="{{ $url; }}">
                        <div class="image">
                            <img src="{{ ($b['blog_image'] != '' && $b['blog_image'] != null) ? asset($b['blog_image']) : asset('includes-frontend/images/aichatbots.webp'); }}" alt="{{ $b['blog_title']; }}">
                        </div>
                    </a>
                    <div>
                        <h3><a href="{{ $url; }}">{{ $b['blog_title'] }}</a></h3>
                        <ul class="blog-info-list">
                            <li><span class="text-grey">{{ date('d M, Y', strtotime($b->created_at)); }}</span></li>
                            <li>Read Time : <span class="text-grey">{{ $b['read_time'] }}</span></li>
                        </ul>
                        <p class="mb-0"><span>{{ $b['blog_details'] }}</span> <a href="{{ $url; }}" class="web-clr">Read More</a></p>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="pagination-all mt-3">
                {{ $blog->links() }}
            </div>

        </div>
    </div>
</section>


@include('frontend.pages.query-form')