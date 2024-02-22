<style>
    .footer {
        padding-top: 60px;
        margin-top: 0px;
    }

    @media (max-width: 767px) {
        .footer {
            padding-top: 20px;
            margin-top: 0px;
        }
    }
</style>

<nav aria-label="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/'); }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </div>
        </div>
    </div>
</nav>

<section class="contactus section-padding pb-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h1 class="section-heading with-p">Let's Collaborate And Bring Your Ideas To Life!</h1>
                    <p class="heading-info mb-0 ">Don't be shy, say hello! We're your one-stop solution for demos, support, and business solutions.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('frontend.pages.query-form')

<section class="branches section-padding bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="section-heading">Other World wide Branches</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-6">
                <div class="box">
                    <img src="{{ asset('includes-frontend'); }}/images/mumbai.svg" alt="Mumbai">
                    <h2>Mumbai</h2>
                    <p>U-128, Nr. Durga Mata Mandir Rd., Sec. 4, Airoli, Navi Mumbai, Maharashtra - 400708</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-6">
                <div class="box">
                    <img src="{{ asset('includes-frontend'); }}/images/mumbai.svg" alt="Mumbai">
                    <h2>US</h2>
                    <p>Station Houston Suite 2440, 1301 Fannin Street Houston, Texas 77002, USA</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-6">
                <div class="box">
                    <img src="{{ asset('includes-frontend'); }}/images/mumbai.svg" alt="Mumbai">
                    <h2>Singapore</h2>
                    <p>133 New Bridge Road Chinatown Point #10-03 Singapore 059413</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-6">
                <div class="box">
                    <img src="{{ asset('includes-frontend'); }}/images/mumbai.svg" alt="Mumbai">
                    <h2>Vashi</h2>
                    <p>320, Platinum Techno Park, Sec. 30A, Vashi, Navi Mumbai, Maharashtra, 400703</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-6">
                <div class="box">
                    <img src="{{ asset('includes-frontend'); }}/images/mumbai.svg" alt="Mumbai">
                    <h2>Bhopal</h2>
                    <p>SecondMedic, E-8/95, JSV Tower, Arera Colony, Bhopal, MP 462016</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-6">
                <div class="box">
                    <img src="{{ asset('includes-frontend'); }}/images/mumbai.svg" alt="Mumbai">
                    <h2>Lucknow</h2>
                    <p>Remote Healthcare Technologies Pvt. Ltd., 69, Khurshed Bagh, Ganesh Ganj, Lucknow - 226004</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-6">
                <div class="box">
                    <img src="{{ asset('includes-frontend'); }}/images/mumbai.svg" alt="Mumbai">
                    <h2>Ranchi</h2>
                    <p>Dr. Bhosale Gali, 191/A, Near Govind Tower, Harihar Singh Road, Bariyatu, Ranchi Jharkhand - 834009</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-6">
                <div class="box">
                    <img src="{{ asset('includes-frontend'); }}/images/mumbai.svg" alt="Mumbai">
                    <h2>Kuala Lumpur</h2>
                    <p>Lot 10-03C, 10th Floor Tower 1, Faber Towers</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="growth section-padding bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <h2 class="section-heading with-p">Know More About Us for Better Growth</h2>
                <p class="heading-info">Digital Solutions are the future of business in this tech-focused world. League City Consulting is dedicatedly serving diverse businesses specific demands with utter precisions and responsibly.</p>
            </div>
        </div>

        <div class="row g-3">
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="box">
                    <div class="icon">
                        <i class="fas fa-globe-americas"></i>
                    </div>
                    <div>
                        <h3>20+</h3>
                        <p>Countries served</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="box">
                    <div class="icon">
                        <i class="fas fa-suitcase"></i>
                    </div>
                    <div>
                        <h3>95%</h3>
                        <p>Repeat &amp; business referral</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="box">
                    <div class="icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div>
                        <h3>200%</h3>
                        <p>Growth</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="box">
                    <div class="icon">
                        <i class="far fa-file-alt"></i>
                    </div>
                    <div>
                        <h3>12+</h3>
                        <p>Years on the market</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="box">
                    <div class="icon">
                        <i class="fas fa-globe-americas"></i>
                    </div>
                    <div>
                        <h3>ISO 9001-2015</h3>
                        <p>ISO/IEC 27001:2013</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="box">
                    <div class="icon">
                        <i class="fas fa-suitcase"></i>
                    </div>
                    <div>
                        <h3>120+</h3>
                        <p>In-house engineers</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="box">
                    <div class="icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div>
                        <h3>96%</h3>
                        <p>Project success ratio</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="box">
                    <div class="icon">
                        <i class="far fa-file-alt"></i>
                    </div>
                    <div>
                        <h3>30+</h3>
                        <p>Millions of users touched</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="box">
                    <div class="icon">
                        <i class="fas fa-globe-americas"></i>
                    </div>
                    <div>
                        <h3>2021</h3>
                        <p>Establishment year</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="box">
                    <div class="icon">
                        <i class="fas fa-suitcase"></i>
                    </div>
                    <div>
                        <h3>1200+</h3>
                        <p>Successful projects</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="box">
                    <div class="icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div>
                        <h3>Achievement</h3>
                        <p>Award winning agency</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="box">
                    <div class="icon">
                        <i class="far fa-file-alt"></i>
                    </div>
                    <div>
                        <h3>Our process</h3>
                        <p>Unique &amp; well-defined</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>