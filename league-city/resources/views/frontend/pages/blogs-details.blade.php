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
                <h2 class="section-heading">{{ $single_blog->blog_title }}</h2>

                <div class="grediant-vertical-line"></div>

                <ul class="blog-info-list">
                    <li>Punblished on : <span class="text-grey">{{ date('d M, Y', strtotime($single_blog->created_at)); }}</span></li>
                    <li>Read Time : <span class="text-grey">{{ $single_blog->read_time }}</span></li>
                </ul>
                <div class="image-box">
                    <img src="{{ ($single_blog->detail_image != '' && $single_blog->detail_image != null) ? asset($single_blog->detail_image) : asset('includes-frontend/images/aichatbots.jpg'); }}" alt="SecondMedic">
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
                                <a href="#" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Facebook"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="instagram">
                                <a href="#" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Instagram"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="linkedin">
                                <a href="#" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li class="whatsapp">
                                <a href="#" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
                            </li>
                            <li class="copy">
                                <a href="#" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Copy Link"><i class="far fa-copy"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="form-box d-lg-block d-none">
                        <h3 class="heading">Let's talk about your project!</h3>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Full Name*">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email*">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Mobile Number*">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Budget*">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="About Project*">
                            </div>
                            <input type="submit" class="btn web-btn w-100" value="Submit">
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
                <p class="heading-info">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis mollitia eveniet corporis quia tempore repellendus.</p>
            </div>
        </div>
        <div class="row">
            <div class="owl-carousel blog-slider">
                <div class="item">
                    <div class="box">
                        <a href="#">
                            <div class="image">
                                <img src="{{ asset('includes-frontend'); }}/images/aichatbots.jpg" alt="AI Chatbots: Transforming Customer Experiences with Digital Companions">
                            </div>
                        </a>
                        <div>
                            <h3><a href="#">AI Chatbots: Transforming Customer Experiences with Digital Companions</a></h3>
                            <ul class="blog-info-list">
                                <li><span class="text-grey">27 January 2024</span></li>
                                <li>Read Time : <span class="text-grey">30 Minutes</span></li>
                            </ul>
                            <p class="mb-0"><span>In a world where assistance is as simple as chatting with a friend, AI chatbots emerge as the magical digital pals reshaping customer experiences. These virtual colleagues work tirelessly to make interactions smoother and more personalized, revolutionizing the way we seek help. Let's dive into the realm of AI chatbots, where technology meets friendliness to create an extraordinary digital experience</span> <a href="#" class="web-clr">Read More</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <a href="#">
                            <div class="image">
                                <img src="{{ asset('includes-frontend'); }}/images/generativeai.jpg" alt="What is Generative AI? A Guide to Its Magic">
                            </div>
                        </a>
                        <div>
                            <h3><a href="#">What is Generative AI? A Guide to Its Magic</a></h3>
                            <ul class="blog-info-list">
                                <li><span class="text-grey">27 January 2024</span></li>
                                <li>Read Time : <span class="text-grey">30 Minutes</span></li>
                            </ul>
                            <p class="mb-0"><span>Generative AI is a fascinating technology that acts like a smart artist on a computer, creating new things such as pictures or text by learning from examples. In simple terms, it's like having a computer that can be creative and generate content independently.</span> <a href="#" class="web-clr">Read More</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <a href="#">
                            <div class="image">
                                <img src="{{ asset('includes-frontend'); }}/images/powerofai.jpg" alt="The Power of AI Chatbots: Simplifying Your Digital Experience">
                            </div>
                        </a>
                        <div>
                            <h3><a href="#">The Power of AI Chatbots: Simplifying Your Digital Experience</a></h3>
                            <ul class="blog-info-list">
                                <li><span class="text-grey">27 January 2024</span></li>
                                <li>Read Time : <span class="text-grey">30 Minutes</span></li>
                            </ul>
                            <p class="mb-0"><span>In a world where help is just a chat away, imagine having a virtual friend at your service—no more waiting on hold or drowning in a sea of emails. That's the magic of AI chatbots! These digital pals act as your virtual colleagues, enhancing customer experiences and making things smoother and more personal.</span> <a href="#" class="web-clr">Read More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('frontend.pages.query-form')
