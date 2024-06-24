<style>
    .footer {
        margin-top: 0;
        padding-top: 60px;
    }
</style>

<section class="thankyou">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-5 col-9">
                <img src="{{ asset('includes-frontend') }}/images/thankyou-img.webp" alt="img" class="w-100 mb-4 mb-md-0">
            </div>
            <div class="col-md-1 d-none d-md-block">
                <div class="thankyou-divide"></div>
            </div>
            <div class="col-md-6">
                <div class="content">
                    <img src="{{ asset('includes-frontend') }}/images/check-animate.gif" alt="img">
                    <h4>Request Submitted Successfully</h4>
                    <p>Our Agent will contact you shortly about your requirements, <br> you can email us at <a href="mailto:info@leaguecityconsulting.com"><b>info@leaguecityconsulting.com</b></a>
                    @if(session('campaign_for') == 'India Campaign')
                    <br> or call us at <a href="tel:+917879782233"><b>+91-7879782233</b></a></p>
                    @else
                    <br> or call us at <a href="tel:+18323305432"><b>+1-832-330-5432</b></a></p>
                    @endif
                </div>
                <div class="thankyou-actions">
                    @if(session('campaign_for') == 'India Campaign')
                        <a href="{{ route('india.campaign'); }}" class="btn web-btn"><i class="fas fa-home"></i> Go To Home Page</a>
                    @else
                        <a href="{{ route('saas.campaign'); }}" class="btn web-btn"><i class="fas fa-home"></i> Go To Home Page</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>