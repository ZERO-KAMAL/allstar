@extends('master')

@section('content')
    <div class="page-title-area item-bg3">
        <div class="container">
            <div class="page-title-content">
                <h2>Contact</h2>
                <ul>
                    <li><a href="/">Home</a><i class="fas fa-chevron-right"></i></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
        <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>

    <section class="contact-area ptb-110">
        <div class="container">
            <div class="section-title"><span>Message Us</span>
                <h2>Drop us Message for any Query</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.</p>
            </div>
            <div class="contact-form">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12">
                        <div class="contact-image"><img src="https://bariton-react.envytheme.com/images/contact.png" alt="image"></div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group"><input type="text" name="name" class="form-control"
                                            placeholder="Name" value="">
                                        <div class="invalid-feedback" style="display: block;"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group"><input type="text" name="email" class="form-control"
                                            placeholder="Email" value="">
                                        <div class="invalid-feedback" style="display: block;"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group"><input type="text" name="number" class="form-control"
                                            placeholder="Phone" value="">
                                        <div class="invalid-feedback" style="display: block;"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group"><input type="text" name="subject" class="form-control"
                                            placeholder="Subject" value="">
                                        <div class="invalid-feedback" style="display: block;"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group"><textarea name="text" class="form-control" cols="30"
                                            rows="5" placeholder="Your message"></textarea>
                                        <div class="invalid-feedback" style="display: block;"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12"><button type="submit" class="btn btn-primary">Send
                                        Message</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="contact-info">
                <div class="contact-info-content">
                    <h3>Contact us by Phone Number or Email Address</h3>
                    <h2><span class="number">+977-9818319337 ,9849764202</span><span class="or">OR</span><span
                            class="email">info@allstar.com.np</span></h2>
                    <ul class="social">
                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection
