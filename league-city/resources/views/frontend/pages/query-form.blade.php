<section class="contactus section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            <h2 class="section-heading with-p mb-lg-2 mb-1">We're here to help</h2>
                            <p class="heading-info">Got a project on your mind! We're confidential listeners, eager to collaborate.</p>
                            <form action="{{ url('contact-us'); }}" id="contact-form" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Full Name*</label>
                                            <input class="form-control" name="name" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Email*</label>
                                            <input type="email" class="form-control" name="email" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Mobile Number*</label>
                                            <input class="form-control" name="contact" required onkeypress="return /[0-9]/i.test(event.key)" minlength="8" maxlength="12" pattern="[6-9]{1}[0-9]{9}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Budget*</label>
                                            <input class="form-control" name="budget" required onkeypress="return /[0-9]/i.test(event.key)" min="5000" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">About Project*</label>
                                            <input class="form-control" name="message" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>
                                            <p><input type="checkbox" required /> By submitting this form I agree to the Condiant's <a href="privacy-policy" class="web-clr">Privacy Policy</a></p>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="btnrow">
                                            <button type="submit" class="btn web-btn" name="form-btn" value="submit" id="contact-btn">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="right-side bg-blue">
                                <h3>Get In Touch</h3>
                                <p>Unleash the power of personalized assistance. Your questions, our expertise.</p>
                                <ul class="contact-list">
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="text">
                                            <span>Email</span>
                                            <a href="mailto:info@leaguecity.com">info@leaguecityconsulting.com</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-phone-alt"></i>
                                        </div>
                                        <div class="text">
                                            <span>Contact</span>
                                            <a href="tel:+18323305432">+1-832-330-5432</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="text">
                                            <span>Address</span>
                                            <p>Station Houston Suite 2440, 1301 Fannin Street Houston, Texas 77002, USA</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="social-icons colorful">
                                    <li class="facebook">
                                        <a href="https://www.facebook.com/leaguecityconsulting" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="instagram">
                                        <a href="https://www.instagram.com/leaguecityconsulting/" target="_blank"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="https://www.linkedin.com/company/league-city-consulting" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>