@extends("layouts.master_home")

@section("home_content")

@section('title')
	Hyperbaric | About 
@endsection

@php 
    $abouts = App\Models\HomeAbout::first();
    $teams = App\Models\HomeTeam::latest()->get();
    $i = 1
@endphp

<!-- Start Page Title Area -->
<div class="page-title-area bg-1">
    <div class="container">
        <div class="page-title-content">
            <h2>About</h2>
            <ul>
                <li>
                    <a href="index.html">
                        Home 
                    </a>
                </li>
                
                <li class="active">About</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Who We Are Area -->
<section class="who-we-are-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="who-we-are-img">
                    <img src="{{ asset('frontend/assets/img/who-we-area-img/UNDERWATER-WELDER-TEST.jpeg') }}" alt="Image">

                    <div class="who-we-are-img-2">
                        <img src="{{ asset('frontend/assets/img/who-we-area-img/service21.jpg') }}" alt="Image">
                    </div>

                    <iframe src="https://www.youtube.com/embed/-S1uVxpeCgo" class="video-button popup-youtube"></iframe>
                        <!-- <i class="flaticon-play-button"></i>
                        <p>See the video</p> -->
                    </a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="who-we-are-content">
                    <span class="top-title">WHO WE ARE?</span>
                    <h2>We are <span>Hyperbaric</span> {{ $abouts->title }}</h2>
                    <p> {{ $abouts->long_description }} </p>

                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-who-we-are">
                                <i class="flaticon-quality"></i>
                                <h3>Quality assurance</h3>
                                <p>We deal with the best international and well reputated underwater engineers. Our goal is to maintain the social responsibilty of the sole aim of Underwater welding began during World War 1  </p>
                                
                                <!-- <a href="#" class="read-more">
                                    Read More
                                    <span class="flaticon-next"></span>
                                </a> -->
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="single-who-we-are">
                                <i class="flaticon-responsibility"></i>
                                <h3>Social responsibility</h3>
                                <p>These include repair of damage caused by corrosion, fatigue, and accidents of offshore structures such as oil platforms, repair & replacement of damaged subsea pipeline sections, repairing holes in ship’s hulls or collision damage to harbor facilities.</p>
                                
                                <!-- <a href="#" class="read-more">
                                    Read More
                                    <span class="flaticon-next"></span>
                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Who We Are Area -->

<!-- Start Features Area -->
<section class="feathers-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="single-feathers">
                    <i class="flaticon-planning"></i>
                    <h3>Total initial planning</h3>
                    <p>The underwater inspection also includes a visual and photographic examination of underwater structures and repairs, and Non-Destructive Examination such as Magnetic Test, Ultrasonic Test, and Radiographic Test.</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="single-feathers">
                    <i class="flaticon-stopwatch"></i>
                    <h3>First working process</h3>
                    <p>Underwater welding began during World War 1 when the British Navy used it to make temporary repairs on ships. Those repairs consisted of welding around leaking rivets of ship hulls. Underwater welding was also restricted to salvage operations and emergency repair works only.</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                <div class="single-feathers">
                    <i class="flaticon-cost"></i>
                    <h3>Affordable price</h3>
                    <p>hyperbaric chambers or habitats are extremely expensive. This is because it must be built for special applications such as repairing or making tie-ins on horizontally laid pipes. Recent improvements allowed GMAW (Gas Metal Arc Welding) process to be used in underwater welding with the use of special nozzles, domes or miniature chambers.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Features Area -->

<!-- Start Our Skills Area -->
<section class="our-skills-area pt-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="skills-content">
                    <span class="top-title">OUR SKILLS</span>
                    <h2>The efficiency of our company</h2>
                    <p>Efficiency and effectiveness are often considered synonyms, but they mean different things when applied 
                        to process management. Efficiency is doing things right, while effectiveness is doing the right things.
                         We have always done the both and more. We have been existing since 1996, this gives us the leverage 
                         with much experience than other underwater pipeline companies.</p>
                </div>

                <div class="all-skill-bar">
                    <div class="skill-bar" data-percentage="95%">
                        <h4 class="progress-title-holder">
                            <span class="progress-title">Underwater machinery</span>
                            <span class="progress-number-wrapper">
                                <span class="progress-number-mark">
                                    <span class="percent"></span>
                                    <span class="down-arrow"></span>
                                </span>
                            </span>
                        </h4>

                        <div class="progress-content-outter">
                            <div class="progress-content"></div>
                        </div>
                    </div>
                    <div class="skill-bar" data-percentage="85%">
                        <h4 class="progress-title-holder clearfix">
                            <span class="progress-title">Qualified welders/engineers</span>
                            <span class="progress-number-wrapper">
                                <span class="progress-number-mark">
                                    <span class="percent"></span>
                                    <span class="down-arrow"></span>
                                </span>
                            </span>
                        </h4>

                        <div class="progress-content-outter">
                            <div class="progress-content"></div>
                        </div>
                    </div>

                    <div class="skill-bar" data-percentage="100%">
                        <h4 class="progress-title-holder clearfix">
                            <span class="progress-title">Client satisfaction</span>
                            <span class="progress-number-wrapper">
                                <span class="progress-number-mark">
                                    <span class="percent"></span>
                                    <span class="down-arrow"></span>
                                </span>
                            </span>
                        </h4>

                        <div class="progress-content-outter">
                            <div class="progress-content"></div>
                        </div>
                    </div> 

                    <div class="skill-bar mb-0" data-percentage="90%">
                        <h4 class="progress-title-holder clearfix">
                            <span class="progress-title">pipeline installation</span>
                            <span class="progress-number-wrapper">
                                <span class="progress-number-mark">
                                    <span class="percent"></span>
                                    <span class="down-arrow"></span>
                                </span>
                            </span>
                        </h4>

                        <div class="progress-content-outter">
                            <div class="progress-content"></div>
                        </div>
                    </div> 
                </div> 
            </div>

            <div class="col-lg-6">
                <div class="skill-img">
                    <img src="{{ asset('frontend/assets/img/service2.jpg') }}" alt="Image">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Our Skills Area -->

<!-- Start Team Area -->
<section class="team-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span>PROFESSIONALS</span>
            <h2>Meet our skilled team</h2>
        </div>

        <div class="row">
            @foreach($teams as $team)

                <div class="col-lg-4 col-md-6">
                    <div class="single-team-member">
                        <img src="{{ !empty($team->team_image) ? asset($team->team_image) : ' https://via.placeholder.com/70x40.png' }}" alt="Image">

                        <div class="team-content">
                            <span>{{ $team->title }}</span>
                            <h3>{{ $team->name }}</h3>

                            <div class="team-social">
                                <a href="#" class="control">
                                    <i class="bx bx-share-alt"></i>
                                </a>

                                <ul>
                                    <li>
                                        <a href="{{ $team->twitter_url }}">
                                            <i class="bx bxl-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ $team->instagram_url }}">
                                            <i class="bx bxl-instagram"></i>
                                        </a> 
                                    </li>
                                    <li>
                                        <a href="{{ $team->facebook_url }}">
                                            <i class="bx bxl-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ $team->linkind_url }}">
                                            <i class="bx bxl-linkedin-square"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <!-- <div class="col-lg-4 col-md-6">
                <div class="single-team-member">
                    <img src="{{ asset('frontend/assets/img/team-img/team-img-2.jpg') }}" alt="Image">

                    <div class="team-content">
                        <span>INTERIOR DESIGNER</span>
                        <h3>Michele A. Murphy</h3>
                        
                        <div class="team-social">
                            <a href="#" class="control">
                                <i class="bx bx-share-alt"></i>
                            </a>

                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="bx bxl-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bxl-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bxl-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bxl-linkedin-square"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                <div class="single-team-member">
                    <img src="{{ asset('frontend/assets/img/team-img/team-img-3.jpg') }}" alt="Image">

                    <div class="team-content">
                        <span>ARCHITECT</span>
                        <h3>Margert Scott</h3>
                        
                        <div class="team-social">
                            <a href="#" class="control">
                                <i class="bx bx-share-alt"></i>
                            </a>

                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="bx bxl-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bxl-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bxl-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bxl-linkedin-square"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>
<!-- End Team Area -->

<!-- Start Testimonials Area -->
<section class="testimonials-area testimonials-area-style-two ptb-100">
    <div class="container">
        <div class="section-title white-title">
            <span>TESTIMONIALS</span>
            <h2>What our clients say</h2>
        </div>

        <div class="testimonials-all-content">
            <div class="testimonials-slider owl-theme owl-carousel">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="{{ asset('frontend/assets/img/testimonials-img/testimonials-img-2.jpg') }}" alt="Image">
                    </div>

                    <div class="col-lg-8">
                        <div class="testimonials-content">
                            <div class="testimonials-name">
                                <i class="flaticon-quotation"></i>
                                <h3>Juhon Sheetz</h3>
                                <span>Client</span>
                            </div>
                            
                            <p>“Wet welding relies on the release of gaseous bubbles around an electric arc to shield the weld and prevent any electricity being conducted through the water. This insulating layer of bubbles protects the diver but also obscures the welding area, making it harder to complete the weld correctly. The bubbles can also disturb the welding pool and the welded joint may cool too quickly due to heat dissipating through the surrounding water. This increases the risk of defects such as cracking.”</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <img src="{{ asset('frontend/assets/img/testimonials-img/testimonials-img-1.jpg') }}" alt="Image">
                    </div>

                    <div class="col-lg-8">
                        <div class="testimonials-content">
                            <div class="testimonials-name">
                                <i class="flaticon-quotation"></i>
                                <h3>Donald Sheetz</h3>
                                <span>Client</span>
                            </div>
                            
                            <p>“Been working with Hyperbaric company for the past 5years, engineer Jason Akira and Larry Hicks made sure the pipeline which we targeted, leaking and caused oil spillage was installed and fixed with the best metal. we now use the water for domestic needs, we haven't tested it yet for drinking. They really did a great job  ”</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="testimonials-shape">
        <img src="{{ asset('frontend/assets/img/testimonials-img/testimonials-shape.jpg') }}" alt="Image">
    </div>
</section>
<!-- End Testimonials Area -->

<!-- Start Subscribe Area -->
<section class="subscribe-area ptb-100 mt-100">
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