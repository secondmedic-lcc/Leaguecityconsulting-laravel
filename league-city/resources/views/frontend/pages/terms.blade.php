@empty(!$web_banner)
    <section class="page-banner section-padding" style="background-image: url({{ asset($web_banner['banner_image']) }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <span class="heading-top">{{ $web_banner['page_title'] }}</span>
                    <h1 class="section-heading">{{ $web_banner['heading'] }}</h1>
                    <p>{{ $web_banner['details'] }}</p>
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
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Terms & Conditions</li>
                </ol>
            </div>
        </div>
    </div>
</nav>

<section class="terms section-padding pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="content">

                    {!! @$terms_conditions->content ?? '' !!}
                    {{-- <h2 class="mt-0">Welcome to League City Consulting</h2>
                    <p>By using this website, you agree to be bound by these Terms of Use. We reserve the right to
                        change these Terms of Use at any time, so please check back regularly for updates.</p>
                    <h2>Your Use of the Website</h2>
                    <p>We grant you a non-transferable, non-exclusive license to use the website and the content
                        provided on it, in accordance with these Terms of Use. You may not use the website or its
                        content for any commercial purpose without our express written permission.</p>
                    <h2>User Conduct</h2>
                    <p>You agree to use the website in a respectful and responsible manner. You agree not to:</p>
                    <ul>
                        <li>Upload or post any content that is harmful, obscene, defamatory, or otherwise objectionable.
                        </li>
                        <li>Violate any applicable laws or regulations.</li>
                        <li>Infringe on the intellectual property rights of others.</li>
                        <li>Use the website for any unauthorized purpose.</li>
                    </ul>
                    <h2>Content Ownership</h2>
                    <p>The content on the website, including text, images, and videos, is protected by copyright and
                        other intellectual property laws. You may not copy, reproduce, modify, or distribute any content
                        without our express written permission.</p>
                    <h2>Disclaimer of Warranties</h2>
                    <p>We make no warranties or representations about the accuracy, completeness, or reliability of the
                        content on the website. The website is provided "as is" and without warranties of any kind,
                        express or implied.</p>
                    <h2>Limitation of Liability</h2>
                    <p>We will not be liable for any damages arising out of or in connection with your use of the
                        website.</p>
                    <h2>Dispute Resolution</h2>
                    <p>Any disputes arising out of or in connection with these Terms of Use will be resolved by
                        arbitration in accordance with the rules of the American Arbitration Association.</p> --}}
                </div>
            </div>
        </div>
    </div>
</section>

@include('frontend.pages.query-form')
