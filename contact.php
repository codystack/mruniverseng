<?php
require_once ('./components/header.php');
include ('./components/navbar.php');
?>
    <!-- hero section -->
    <div class="bg-shape bg-cover" style=" background-image:linear-gradient(180deg, rgba(30, 24, 53, 0.4) 0%, rgba(30, 24, 53, 0.4) 90.16%),
       url(assets/images/home-slide.jpg); ">
        <div class="container">
            <div class="row">
                <div class="offset-lg-2 col-lg-8 col-md-12 col-12">
                    <div class="text-center py-lg-16 py-12">
                        <h1 class="mb-3 display-4 text-white">Get Connect</h1>
                        <p class="lead text-light mb-4 mb-lg-0">
                            Our team gets hundreds of emails, notes, and requests for different opportunities every day. we do read every single email that comes through.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact form -->
    <div class="pb-10">
        <div class="container">
            <div class="row">
                <div class="offset-lg-2 col-lg-8 col-md-12 col-12">
                    <div class="card mt-n12 text-center mb-12">
                        <div class="card-body p-4 p-lg-8">
                            <div class="mb-5">
                                <h2 class="mb-3">We love Hearing From You</h2>
                                <p>
                                    If you are looking forward to discuss business or make inquiry,<br>please fill out this form. We will get in touch with you.
                                </p>
                            </div>
                            <div class="spinner-grow" style="width: 3rem; height: 3rem; display: none;" id="spinner" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <!--<div>
                            <i class="fa fa-spin fa-spinner fa-2x" style="display: none;" id="spinner"></i>
                            </div>-->
                            <div class="alert alert-danger" id="error-message" style="display: none;">
                                Error is sending message.
                            </div>
                            <div class="alert alert-success" id="success-message" style="display: none;">
                                Message sent successfully!
                            </div>
                            <form class="form-row" autocomplete="off" id="contact-form" onClick="return false;">
                                <div class="from-group col-md-6 col-12 mb-3">
                                    <label for="fname" class="sr-only">First Name</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="First Name" name="firstName" required />
                                </div>
                                <div class="from-group col-md-6 col-12 mb-3">
                                    <label for="lname" class="sr-only">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="Last Name" name="lastName" required />
                                </div>
                                <div class="from-group col-md-6 col-12 mb-3">
                                    <label for="phone" class="sr-only"> Phone Number</label>
                                    <input type="tel" class="form-control" id="phoneNum" placeholder="Phone No." name="phoneNum" required />
                                </div>
                                <div class="from-group col-md-6 col-12 mb-3">
                                    <label for="email" class="sr-only"> Email</label>
                                    <input type="email" class="form-control" pattern="/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" placeholder="Email" name="email" required />
                                </div>
                                <div class="form-group col-12 mb-3">
                                    <label for="purpose" class="sr-only">Purpose</label>
                                    <select class="custom-select" id="purpose" name="purpose">
                                    <option selected>Select Purpose</option>
                                    <option value="Partnership">Partnership</option>
                                    <option value="Sponsorship">Sponsorship</option>
                                    <option value="Enquiries">Enquiries</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <button name="register" id="register" class="btn btn-primary btn-block">
                                    Send Messages
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- contact info -->
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="text-center">
                                <h4 class="h5 mb-3">Speaking inquiries:</h4>
                                <p class="text-danger font-weight-bold">08133466916<br>07035217457</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="text-center">
                                <h4 class="h5 mb-3">Business inquiries:</h4>
                                <a href="#!" class="text-danger font-weight-bold">info@mruniversenigeria.org</a>
                                <a href="mailto:mruniversenigeriapageant@gmail.com" class="text-danger font-weight-bold">mruniversenigeriapageant@gmail.com</a>
                            </div>
                        </div>
                    </div>
                    <!-- social media -->
                    <div class="row">
                        <div class="offset-lg-3 col-lg-6 col-md-12 col-12">
                            <div class="text-center mt-10">
                                <h4 class="mb-4">Socialize with us</h4>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="https://www.facebook.com/Mruniversenigeria" target="_blank" class="social-btn sb-facebook sb-round btn-light "><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://twitter.com/MrUniverseNig" target="_blank" class="social-btn sb-twitter sb-round btn-light "><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://www.youtube.com/user/MRUNIVERSENIGERIA" target="_blank" class="social-btn sb-youtube sb-round btn-light "><i class="fab fa-youtube"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://www.instagram.com/mruniversenigeria" target="_blank" class="social-btn sb-instagram sb-round btn-light "><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include ('./components/footer.php'); ?>