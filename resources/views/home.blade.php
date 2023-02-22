@extends("layouts.master_home")


@section("home_content")
@include("layouts.body.slider") 


@php  
    $logo = App\Models\Logo::findOrFail(1);
   
@endphp
@section('title')
	Hyperbaric | Home 
@endsection

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
							
							<iframe src="{{ $logo->video_url }}" class="video-button popup-youtube"></iframe>
								<!-- <i class="flaticon-play-button"></i>
								<p>See the video</p> -->
							</a>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="who-we-are-content">
							<span class="top-title">WHO WE ARE</span>
							<!-- <h2>We are <span>conzio</span> one of the largest construction companies in the world</h2> -->

                            <h2>{{ $abouts->title }}</h2>
							<!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident quas dolor, quidem quo delectus molestias sint? Molestiae est, maxime vero ad ipsum quia labore repudiandae beatae reprehenderit illum alias libero! consectetur</p> -->
                            <p>{{ $abouts->long_description }}</p>
							<div class="row">
								<div class="col-lg-6 col-sm-6">
									<div class="single-who-we-are">
										<i class="flaticon-quality"></i>
										<h3>Quality assurance</h3>
										<p>We deal with the best international and well reputated underwater engineers. Our goal is to maintain the social responsibilty of the sole aim of Underwater welding began during World War 1.</p>
										
										<!-- <a href="about.html" class="read-more">
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
										
										<!-- <a href="about.html" class="read-more">
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
		
		<!-- Start Services Area -->
		<section class="services-area pt-100 pb-70">
			<div class="container">
				<div class="section-title">
					<span>OUR SERVICES</span>
					<h2>Providing quality services</h2>
				</div>

				<div class="row">
					@php 
						$i = 1
					@endphp
                    @foreach($services as  $service)
					<div class="col-lg-4 col-sm-6">
						<div class="single-services">
							<i class="flaticon-project-management"></i>
							<h3>{{  $service->title }}</h3>
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p> -->
                            <p>{!! Str::limit($service->long_description, 150) !!}</p>
							<a href="{{ route('service.detail', $service->id) }}" class="read-more">
								Read More
								<span class="flaticon-next"></span>
							</a>

							<span class="count">{{  $i++ }}</span>
						</div>
					</div>
                    @endforeach
					<!-- <div class="col-lg-4 col-sm-6">
						<div class="single-services">
							<i class="flaticon-home"></i>
							<h3>Architectural design</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>

							<a href="single-services.html" class="read-more">
								Read More
								<span class="flaticon-next"></span>
							</a>

							<span class="count">2</span>
						</div>
					</div>

					<div class="col-lg-4 col-sm-6">
						<div class="single-services">
							<i class="flaticon-project-management"></i>
							<h3>Construction management</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>

							<a href="single-services.html" class="read-more">
								Read More
								<span class="flaticon-next"></span>
							</a>

							<span class="count">3</span>
						</div>
					</div>

					<div class="col-lg-4 col-sm-6">
						<div class="single-services">
							<i class="flaticon-interior-design"></i>
							<h3>Interior design</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>

							<a href="single-services.html" class="read-more">
								Read More
								<span class="flaticon-next"></span>
							</a>

							<span class="count">4</span>
						</div>
					</div>

					<div class="col-lg-4 col-sm-6">
						<div class="single-services">
							<i class="flaticon-customer-support"></i>
							<h3>Custom solutions</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>

							<a href="single-services.html" class="read-more">
								Read More
								<span class="flaticon-next"></span>
							</a>

							<span class="count">5</span>
						</div>
					</div>

					<div class="col-lg-4 col-sm-6">
						<div class="single-services">
							<i class="flaticon-manufacturing"></i>
							<h3>Factory manufacture</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>

							<a href="single-services.html" class="read-more">
								Read More
								<span class="flaticon-next"></span>
							</a>

							<span class="count">6</span>
						</div>
					</div> -->
				</div>
			</div>
		</section>
		<!-- End Services Area -->

		<!-- Start Counter Area -->
		<section class="counter-area pb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="single-counter">
							<i class="flaticon-experience"></i>

							<h2>
								<span class="odometer" data-count="20">00</span>
								<span class="target">years</span>
							</h2>

							<h3>Years of experience</h3>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="single-counter">
							<i class="flaticon-customer-review"></i>

							<h2>
								<span class="odometer" data-count="1346">00</span> 
							</h2>

							<h3>Satisfied customers</h3>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="single-counter">
							<i class="flaticon-complete"></i>

							<h2>
								<span class="odometer" data-count="99">00</span> 
							</h2>

							<h3>Complete projects</h3>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="single-counter">
							<i class="flaticon-trophy"></i>

							<h2>
								<span class="odometer" data-count="13">00</span> 
							</h2>

							<h3>Award winning</h3>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Counter Area -->

		<!-- Start Featured Area -->
		<section class="featured-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 pr-0">
						<div class="featured-img">
							<img src="{{ asset('frontend/assets/img/diver.jpg') }}" alt="Image">
						</div>
					</div>

					<div class="col-lg-4 pl-0">
						<div class="featured-content">
							<span class="top-title">FEATURED PROJECTS</span>
							<h2>Being able to do the right things at the right time.</h2>
						</div>

						<div class="row">
							<div class="col-12 p-0">
								<div class="featured-img-2">
									<img src="{{ asset('frontend/assets/img/helmet.jpg') }}" alt="Image">
								</div>
							</div>
						</div>
					</div>

					<div class="col-12">
						<div class="featured-slider owl-carousel owl-theme">
							<div class="featured-item">
								<h3>Problem solving and innovation</h3>
								<p>Creative problem-solving helps overcome unforeseen challenges and find solutions to unconventional problems. Fueling innovation and growth: In addition to solutions, creative problem-solving can spark innovative ideas that drive company growth.</p>
								
								<a href="#" class="read-more">
									Read More
									<span class="flaticon-next"></span>
								</a>
							</div>

							<div class="featured-item">
								<h3>Solving and innovation</h3>
								<p>How do you solve innovation problems?
Innovative problem solving is a process that is part of innovating solution stage of social enterprising. The innovative problem solving process has five sub-stages: framing, diagnosis, generating solutions, making choices and taking action.</p>
								
								<a href="#" class="read-more">
									Read More
									<span class="flaticon-next"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<br>
		<br>
		<br>
		<!-- End Featured Area -->

		<!-- Start Our Skills Area -->
		<section class="our-skills-area pb-100">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="skills-content">
							<span class="top-title">OUR SKILLS </span>
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

		<!-- Start Partner Area -->
		<div class="partner-area ptb-100">
			<div class="container">
				<div class="partner-slider owl-theme owl-carousel">
					@foreach($brands as $brand)
					<div class="partner-item">
						
						<a href="#">
							<img src="{{ asset($brand->brand_image) }}" alt="Image">
						</a>
					</div>
					@endforeach

					 <div class="partner-item">
						<a href="#">
							<img src="{{ asset('frontend/assets/img/partner-logo/partner-logo-2.png') }}" alt="Image">
						</a>
					</div>

					<!--<div class="partner-item">
						<a href="#">
							<img src="{{ asset('frontend/assets/img/partner-logo/partner-logo-3.png') }}" alt="Image">
						</a>
					</div>

					<div class="partner-item">
						<a href="#">
							<img src="{{ asset('frontend/assets/img/partner-logo/partner-logo-4.png') }}" alt="Image">
						</a>
					</div>

					<div class="partner-item">
						<a href="#">
							<img src="{{ asset('frontend/assets/img/partner-logo/partner-logo-5.png') }}" alt="Image">
						</a>
					</div> -->
				</div>
			</div>
		</div>
		<!-- End Partner Area -->

		<!-- Start Testimonials Area -->
		<section class="testimonials-area ptb-100">
			<div class="container">
				<div class="section-title">
					<span>TESTIMONIALS</span>
					<h2>What our clients say</h2>
				</div>

				<div class="testimonials-all-content">
					<div class="testimonials-slider owl-theme owl-carousel">
						<div class="row align-items-center">
							<div class="col-lg-4">
								<img src="{{ asset('frontend/assets/img/testimonials-img/testimonials-img-1.jpg') }}" alt="Image">
							</div>
		
							<div class="col-lg-8">
								<div class="testimonials-content">
									<div class="testimonials-name">
										<i class="flaticon-quotation"></i>
										<h3>Donald freed</h3>
										<span>Client</span>
									</div>

									<p>“Wet welding relies on the release of gaseous bubbles around an electric arc to shield the weld and prevent any electricity being conducted through the water. This insulating layer of bubbles protects the diver but also obscures the welding area, making it harder to complete the weld correctly. The bubbles can also disturb the welding pool and the welded joint may cool too quickly due to heat dissipating through the surrounding water. This increases the risk of defects such as cracking.”</p>
								</div>
							</div>
						</div>

						<div class="row align-items-center">
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
									
									<p>“Been working with Hyperbaric company for the past 5years, engineer Jason Akira and Larry Hicks made sure the pipeline which we targeted, leaking and caused oil spillage was installed and fixed with the best metal. we now use the water for domestic needs, we haven't tested it yet for drinking. They really did a great job.”</p>
								</div>
							</div>
						</div>
					</div>

					<div class="testimonials-left-img">
						<img src="{{ asset('frontend/assets/img/testimonials-img/testimonials-left-img.jpg') }}" alt="Image">
					</div>
				</div>
			</div>
		</section>
		<!-- End Testimonials Area -->

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