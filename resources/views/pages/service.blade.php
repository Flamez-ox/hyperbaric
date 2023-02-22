
@extends("layouts.master_home")

@section("home_content")

@section('title')
	Hyperbaric | Service
@endsection

<!-- Start Page Title Area -->
<div class="page-title-area bg-22">
    <div class="container">
        <div class="page-title-content">
            <h2>Services </h2>
            <ul>
                <li>
                    <a href="index.html">
                        Home 
                    </a>
                </li>
                
                <li class="active">Services </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Services Area -->
<section class="services-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span>OUR SERVICES</span>
            <h2>Providing quality services</h2>
        </div>

        <div class="row">
        <div class="row">
					@php 
                        $services = App\Models\HomeService::Latest()->get();
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
					
				</div>

            <div class="col-lg-12 col-md-12">
                <div class="pagination-area">
                    <a href="#" class="prev page-numbers">
                        <i class="bx bx-chevron-left"></i>
                    </a>

                    <span class="page-numbers current" aria-current="page">1</span>
                    <a href="#" class="page-numbers">2</a>
                    <a href="#" class="page-numbers">3</a>
                    <a href="#" class="page-numbers">4</a>
                    
                    <a href="#" class="next page-numbers">
                        <i class="bx bx-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services Area -->

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