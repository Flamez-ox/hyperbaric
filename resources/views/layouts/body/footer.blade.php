@php 
    $contact = App\Models\Contact::first();
@endphp

<!-- Start Footer Top Area -->
<footer class="footer-top-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">
                    <a href="index.html">
                        <img src="{{ asset('frontend/assets/img/image0.png') }}" alt="Image">
                    </a>

                    <p>Hyperbaric welding is the process of welding at elevated pressures, normally underwater. Hyperbaric welding can either take place wet in the water itself or dry inside a specially constructed positive pressure enclosure and hence a dry environment.</p>

                    <ul class="social-icon">
                        <!-- <li>
                            <a href="#">
                                <i class="bx bxl-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="bx bxl-facebook"></i>
                            </a>
                        </li> -->
                        <li>
                            <a href="https://www.instagram.com/hyperbaric_underwater/">
                                <i class="bx bxl-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="http://linkedin.com/in/hyperbaric-management-b38447225">
                                <i class="bx bxl-linkedin-square"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">
                    <h3>Our services</h3>

                    <ul class="import-link">
                        <li>
                            <a href="#">Underwater installation</a>
                        </li>
                        <li>
                            <a href="#">Underwater welding</a>
                        </li>
                        <li>
                            <a href="#">Underwater oil spillage fixation</a>
                        </li>
                        <li>
                            <a href="#">Underwater inspection</a>
                        </li>
                        <li>
                            <a href="#">Social and environmental responsibility</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">
                    <h3>Contact us</h3>

                    <ul class="address">
                        <li class="location">
                            <i class="bx bxs-location-plus"></i>
                            {{ $contact->address }}
                        </li>
                        <li>
                            <i class="bx bxs-envelope"></i>
                            <a href="email:{{ $contact->email }}">{{ $contact->email }}</a>
                            <!-- <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#adc5c8c1c1c2edcec2c3d7c4c283cec2c0"><span class="__cf_email__" data-cfemail="58303d343437183b3736223137763b3735">[email&#160;protected]</span></a> -->
                            <!-- <a href="#">skype: Example</a> -->
                        </li>
                        <li>
                            <i class="bx bxs-phone-call"></i>
                            <a href="tel:{{ $contact->phone }}"> {{ $contact->phone }}</a>
                            <!-- <a href="tel:{{ $contact->phone }}"> {{ $contact->phone }}</a> -->
                            
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">
                    <h3>Business hours</h3>
                    <p>We support our clients 24 hours a day. Our office is open at times.</p>

                    <ul class="time">
                        <li>
                            Mon-Fri:
                            <span>9:00 AM - 5:30 PM</span>
                        </li>
                        <li>
                            Saturday:
                            <span>9:00 AM - 4:00 PM</span>
                        </li>
                        <li>
                            Sunday:
                            <span>Closed</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Top Area -->

<!-- Start Footer Bottom Area -->
<footer class="footer-bottom-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <p>
                    Copyright <i class="bx bx-copyright"></i>2021 Hyperbaric. Designed By 
                    <a href="" target="blank">Hyperbaric.com</a>
                </p>
            </div>

            <div class="col-lg-6">
                <ul class="footer-bottom-menu">
                    <li>
                        <a href="{{ route('privacy')}}">
                            Privacy policy 
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('privacy')}}">
                            Terms and conditions
                        </a>
                    </li>
                    <li>
                        <a href="{{route('contact')}}">
                            Contact us
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Bottom Area -->