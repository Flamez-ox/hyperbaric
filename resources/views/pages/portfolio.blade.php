@extends("layouts.master_home")

@section("home_content")

@section('title')
	Hyperbaric | Portfolio 
@endsection

@php
  $multiImages = App\Models\MultiImage::latest()->paginate(6);
@endphp

  <!-- Start Page Title Area -->
  <div class="page-title-area bg-4">
    <div class="container">
      <div class="page-title-content">
        <h2>Projects</h2>
        <ul>
          <li>
            <a href="index.html">
              Home 
            </a>
          </li>
          
          <li class="active">Portfolio</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End Page Title Area -->

  <!-- Start Projects Area -->
  <section class="projects-area ptb-100">
    <div class="container">
      <div class="section-title">
        <!-- <span>FEATURED PROJECTS</span> -->
        <h2>Being able to do the right things at the right time.</h2>
      </div>

      <div class="shorting-menu">
        <button class="filter" data-filter="all">
          All projects
        </button>

        <!-- <button class="filter" data-filter=".a">
          Commercial
        </button>

        <button class="filter" data-filter=".b">
          Industrial
        </button>

        <button class="filter" data-filter=".c">
          Architecture
        </button>  

        <button class="filter" data-filter=".d">
          Plumbing
        </button>    

        <button class="filter" data-filter=".e">
          Interior
        </button>            -->
      </div>

      <div class="shorting">
        <div class="row">
        @foreach($multiImages as $multiImage)
          <div class="col-lg-4 col-sm-6 a c d mix">
            <div class="projects">
              <img src="{{ $multiImage->img_name }}" alt="Image">

              <!-- <a href="single-project.html" class="view-projects">
                View projects
              </a> -->
            </div>
          </div>
          @endforeach
          <!-- <div class="col-12 text-center">
            <a href="#" class="default-btn">
              Load More
            </a>
          </div> -->
        </div>
      </div>
    </div>
  </section>
  <!-- End Projects Area -->

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