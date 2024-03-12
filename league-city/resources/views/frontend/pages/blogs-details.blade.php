@empty(!$single_blog)

<nav aria-label="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/'); }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/blogs'); }}">Blogs</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $single_blog->blog_title }}</li>
                </ol>
            </div>
        </div>
    </div>
</nav>

<section class="singleblog section-padding pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <h1 class="section-heading">{{ $single_blog->blog_title }}</h1>

                <div class="grediant-vertical-line"></div>

                <ul class="blog-info-list">
                    <li>Punblished on : <span class="text-grey">{{ date('d M, Y', strtotime($single_blog->created_at)); }}</span></li>
                    <li>Read Time : <span class="text-grey">{{ $single_blog->read_time }}</span></li>
                </ul>
                <div class="image-box">
                    <img src="{{ ($single_blog->detail_image != '' && $single_blog->detail_image != null) ? asset($single_blog->detail_image) : asset('includes-frontend/images/aichatbots.webp'); }}" alt="{{ $single_blog->blog_title }} image">
                </div>
                <div class="content">
                    @php
                    echo $single_blog->description;
                    @endphp
                </div>
            </div>
            <div class="col-lg-3">
                <div class="right-side">
                    <div class="share-box">
                        <h3 class="heading">Share this article</h3>
                        <ul class="social-icons colorful">
                            <li class="facebook">
                                <a href="https://www.facebook.com/sharer.php?u={{ url()->current(); }}" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Facebook"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="instagram d-none">
                                <a href="https://www.instagram.com/share?url={{ url()->current(); }}" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Instagram"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="linkedin">
                                <a href="https://www.twitter.com/share?url={{ url()->current(); }}" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Twitter"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="whatsapp">
                                <a href="whatsapp://send?text={{ url()->current(); }}" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
                            </li>
                            <li class="copy">
                                <a href="javascript:void(0);" onClick="copyUrl();" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Copy Link"><i class="far fa-copy"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="form-box d-lg-block d-none">
                        <h3 class="heading">Let's talk about your project!</h3>
                        <form action="{{ url('contact-us'); }}" id="myForm" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Full Name*" name="name" required />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email*" name="email" required />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Mobile Number*" name="contact" required onkeypress="return /[0-9]/i.test(event.key)" minlength="10" maxlength="10" pattern="[6-9]{1}[0-9]{9}" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Budget*" name="budget" required onkeypress="return /[0-9]/i.test(event.key)" min="5000" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="About Project*" name="message" required />
                            </div>
                            <button type="submit" class="btn web-btn w-100" id="form-btn">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endempty

<section class="blog section-padding pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 text-center">
                <h2 class="section-heading with-p">Recent Blogs</h2>
                <p class="heading-info">Dive deep into our technical expertise with blog posts on AI, blockchain, Website & App Development and more.</p>
            </div>
        </div>
        <div class="row">
            <div class="owl-carousel blog-slider">

                @foreach($blog as $b)
                @php $url = url('blogs')."/".$b['url_slug']; @endphp
                <div class="item">
                    <div class="box">
                        <a href="{{ $url; }}">
                            <div class="image">
                                <img src="{{ ($b['blog_image'] != '' && $b['blog_image'] != null) ? asset($b['blog_image']) : asset('includes-frontend/images/aichatbots.webp'); }}" alt="{{ $b['blog_title'] }} image">
                            </div>
                        </a>
                        <div>
                            <h3><a href="{{ $url; }}">{{ $b['blog_title'] }}</a></h3>
                            <ul class="blog-info-list">
                                <li><span class="text-grey">27 January 2024</span></li>
                                <li>Read Time : <span class="text-grey">{{ $b['read_time'] }}</span></li>
                            </ul>
                            <p class="mb-0"><span>{{ $b['blog_details'] }}</span> <a href="{{ $url; }}" class="web-clr">Read More</a></p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>

@include('frontend.pages.query-form')