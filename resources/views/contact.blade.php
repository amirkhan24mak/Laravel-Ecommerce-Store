@extends('weblayout.webnavfoot')
@section('navandfoot')
    <!-- Breadcrumb Area Start Here -->
    <div class="breadcrumbs-area position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-content position-relative section-content">
                        <h3 class="title-3">Contact Us</h3>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End Here -->
    <!-- Contact Us Area Start Here -->
    <div class="contact-us-area mt-no-text">
        <div class="container custom-area">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-custom">
                    <div class="contact-info-item">
                        <div class="con-info-icon">
                            <i class="lnr lnr-map-marker"></i>
                        </div>
                        <div class="con-info-txt">
                            <h4>Our Location</h4>
                            <p>(800) 123 456 789 / (800) 123 456 789 info@example.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-custom">
                    <div class="contact-info-item">
                        <div class="con-info-icon">
                            <i class="lnr lnr-smartphone"></i>
                        </div>
                        <div class="con-info-txt">
                            <h4>Contact us Anytime</h4>
                            <p>Mobile: 012 345 678<br>Fax: 123 456 789</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-custom text-align-center">
                    <div class="contact-info-item">
                        <div class="con-info-icon">
                            <i class="lnr lnr-envelope"></i>
                        </div>
                        <div class="con-info-txt">
                            <h4>Support Overall</h4>
                            <p>Support24/7@example.com <br> info@example.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-custom">
                    <form action="{{ url('/contact/store') }}" method="POST" id="contact-form" class="contact-form">
                        @csrf
                        <div class="comment-box mt-5">
                            <h5 class="text-uppercase">Get in Touch</h5>
                            <div class="row mt-3">
                                <div class="col-md-6 col-custom">
                                    <div class="input-item mb-4">
                                        <input class="border-0 rounded-0 w-100 input-area name gray-bg" type="text"
                                            name="name" id="con_name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-custom">
                                    <div class="input-item mb-4">
                                        <input class="border-0 rounded-0 w-100 input-area email gray-bg" type="email"
                                            name="email" id="con_email" placeholder="Email">
                                    </div>
                                </div>

                                <div class="col-12 col-custom">
                                    <div class="input-item mb-4">
                                        <textarea cols="30" rows="5" class="border-0 rounded-0 w-100 custom-textarea input-area gray-bg"
                                            name="massages" id="con_message" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 col-custom mt-40" style="margin-bottom: 20px">
                                    <button type="submit" id="submit" name="submit"
                                        class="btn flosun-button secondary-btn theme-color rounded-0">Send A
                                        Message</button>
                                </div>
                                <p class="col-8 col-custom form-message mb-0"></p>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    @error('name')
        <span class="text-danger">Invalid name</span>
    @enderror
    @error('email')
        <span class="text-danger">Invalid email</span>
    @enderror
    @error('massages')
        <span class="text-danger">Invalid massage</span>
    @enderror
    <!-- Contact Us Area End Here -->
@endsection
