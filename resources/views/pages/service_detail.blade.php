@extends("layouts.master_home")

@section("home_content")

@php  
    $categories = App\Models\Category::latest()->get();
@endphp

<!-- Start Page Title Area -->
<div class="page-title-area bg-25">
    <div class="container">
        <div class="page-title-content">
            <h2>Single services</h2>
            <ul>
                <li>
                    <a href="index.html">
                        Home 
                    </a>
                </li>
                
                <li class="active">Single Services</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Services Details Area -->
<section class="services-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="details-img">
                    <img width="800" src="{{ asset($service->service_image) }}" alt="Image">
                </div>

                <div class="content-one">
                    <h3>{{ $service->title }}</h3>
                    <p> {!! $service->long_description !!} </p>
                </div>

                <div class="content-two">
                    <!-- <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-30">
                                <h3>Initial planning</h3>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren, kasd magna no rebum. sanctus sea sed takimata ut vero voluptua. est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed takimata ut vero voluptua ipsum no rebum. sanctus sea sed takimata rebum. sanctus</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="services-details-img mb-30">
                                <img src="{{ asset('frontend/assets/img/services-details-img/services-single-img-1.jpg') }}" alt="Image">
                            </div>
                        </div>
                    </div> -->

                    <div class="content-two mt-0">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <div class="services-details-img mb-30">
                                    <img src="{{ asset('frontend/assets/img/services-details-img/partner-bd.jpg') }}" alt="Image">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="mb-30">
                                    <h3>Initial planning</h3>
                                    <p>The underwater inspection also includes a visual and photographic examination of underwater structures and repairs, and Non-Destructive Examination such as Magnetic Test, Ultrasonic Test, and Radiographic Test. These include repair of damage caused by corrosion, fatigue, and accidents of offshore structures such as oil platforms, repair & replacement of damaged subsea pipeline sections, repairing holes in ship’s hulls or collision damage to harbor facilities.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="content-three mt-0">
                    <div class="services-faq-title">
                        <h2>Frequently asked  questions</h2>
                    </div>
    
                    <div class="faq-accordion">
                        <ul class="accordion">
                            <li class="accordion-item">
                                <a class="accordion-title active" href="javascript:void(0)">
                                    <i class="bx bx-plus"></i>
                                    How many years have you been in business?
                                </a>
    
                                <div class="accordion-content show">
                                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. Conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat amet conse ctetur adipisicing elit, sed do aliqua. Ut enim ad minim.</p>
                                </div>
                            </li>
    
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="bx bx-plus"></i>
                                    Does your company have in house architects and engineers?
                                </a>
    
                                <div class="accordion-content">
                                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. Conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat amet conse ctetur adipisicing elit, sed do aliqua. Ut enim ad minim.</p>
                                </div>
                            </li>
    
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="bx bx-plus"></i>
                                    How do I get the most from my construction project?
                                </a>
    
                                <div class="accordion-content">
                                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. Conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat amet conse ctetur adipisicing elit, sed do aliqua. Ut enim ad minim.</p>
                                </div>
                            </li>
    
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="bx bx-plus"></i>
                                    How can I pay for my purchases?
                                </a>
    
                                <div class="accordion-content">
                                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. Conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat amet conse ctetur adipisicing elit, sed do aliqua. Ut enim ad minim.</p>
                                </div>
                            </li>
    
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class="bx bx-plus"></i>
                                    How much time I will spend on planning?
                                </a>
    
                                <div class="accordion-content">
                                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. Conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat amet conse ctetur adipisicing elit, sed do aliqua. Ut enim ad minim.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div> -->
            </div>

            <div class="col-lg-4">
                <div class="widget-sidebar">
                    <div class="sidebar-widget search">
                        <form class="search-form">
                            <input class="form-control" name="search" placeholder="Search here" type="text">
                            <button class="search-button" type="submit">
                                <i class="bx bx-search"></i>
                            </button>
                        </form>	
                    </div>

                    <div class="sidebar-widget categories">
                        <h3>Categories</h3>

                        <ul>
                            @foreach($categories as $category)
                            <li>
                                <a href="{{ route('service.detail', $category->id) }}">{{ $category->category_name }}</a>
                            </li>

                            @endforeach
                        </ul>
                    </div>

                    <div class="sidebar-widget categories">
                        <h3>Opening hours</h3>

                        <ul>
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
    </div>
</section>
<!-- End Services Details Area -->

<!-- Start Subscribe Area -->
<section class="subscribe-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="subscribe-content">
                    <span>SUBSCRIBE TO OUR</span>
                    <h2>Newsletter</h2>
                </div>
            </div>

            <div class="col-lg-9">
                <form class="newsletter-form" data-toggle="validator">
                    <input type="email" class="form-control" placeholder="Enter email address" name="EMAIL" required autocomplete="off">

                    <button class="default-btn" type="submit">
                        Subscribe Now
                    </button>

                    <div id="validator-newsletter" class="form-result"></div>
                </form>	
            </div>
        </div>
    </div>
</section>
<!-- End Subscribe Area -->


@endsection