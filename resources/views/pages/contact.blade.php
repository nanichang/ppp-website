@extends('layout.master')
@section('content')
    <section class="contact-us-promo pt-100" style="margin-top:100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                        <div class="card-body py-5">
                            <div class="pb-2">
                                <span class="ti-mobile icon-sm color-secondary"></span>
                            </div>
                            <div><h5 class="mb-0">Call Us</h5>
                                <p class="text-muted mb-0">+234 816 445 9977</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                        <div class="card-body py-5">
                            <div class="pb-2">
                                <span class="ti-location-pin icon-sm color-secondary"></span>
                            </div>
                            <div><h5 class="mb-0">Visit Us</h5>
                                <p class="text-muted mb-0">New Government House</p></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                        <div class="card-body py-5">
                            <div class="pb-2">
                                <span class="ti-email icon-sm color-secondary"></span>
                            </div>
                            <div><h5 class="mb-0">Mail Us</h5>
                                <p class="text-muted mb-0">dg@ppp.plateaustate.gov.ng</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-us-section ptb-100">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-6">
                    <div class="contact-us-form gray-light-bg rounded p-5">
                        <h4>Ready to get started?</h4>
                        <form action="#" method="POST" id="contactForm1" class="contact-us-form" novalidate="novalidate">
                            <div class="form-row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Enter name" required="required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Enter email" required="required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control" rows="7" cols="25" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12 d-grid gap-2 mt-3">
                                    <button type="submit" class="btn btn-outline-success" id="btnContactUs">
                                        Send Message
                                    </button>
                                    <!-- <button type="button" class="btn btn-outline-success">Success</button> -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="contact-us-content" style="padding-top:40px;">
                        <h2>Looking for a our office?</h2>
                        <hr class="my-5">

                        <!-- <h5>Our Headquarters</h5> -->
                        <address>
                            New Government House <br>
                            Little Rayfield Jos, Plateau State
                        </address>
                        <br>
                        <span>Phone: +234 816 445 9977</span><br>
                        <span>
                            Email: 
                            <a href="mailto:dg@ppp.plateaustate.gov.ng" style="color:#000;">
                                dg@ppp.plateaustate.gov.ng
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3931.00341513272!2d8.89036256479294!3d9.850079192954041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10537442bf6658a9%3A0xf3fe15d9f41f7505!2sPlateau%20State%20Government%20House%2C%20930103%2C%20Jos!5e0!3m2!1sen!2sng!4v1646895504671!5m2!1sen!2sng" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
@endsection