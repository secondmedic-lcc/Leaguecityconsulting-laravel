<section class="page-banner section-padding" style="background-image: url({{ asset('includes-frontend'); }}/images/services-banner.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <span class="heading-top">Our Blogs</span>
                <h1 class="section-heading">What's New <span class="light">At LeagueCity?</span></h1>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias repellat necessitatibus earum sed officiis?</p>
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
                    <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                </ol>
            </div>
        </div>
    </div>
</nav>

<section class="blog section-padding pb-0">
    <div class="container">
        <div class="row g-3">
            <div class="col-lg-4 col-md-6">
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
            <div class="col-lg-4 col-md-6">
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
            <div class="col-lg-4 col-md-6">
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
</section>


@include('frontend.pages.query-form')