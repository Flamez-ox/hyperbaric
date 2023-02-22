@extends("layouts.master_home")

@section("home_content")

@section('title')
	Hyperbaric | Contact 
@endsection

@php 
    $contact = App\Models\Contact::first();
@endphp


  <!-- Start Page Title Area -->
  <div class="page-title-area bg-13">
    <div class="container">
      <div class="page-title-content">
        <h2>Contact us</h2>
        <ul>
          <li>
            <a href="index.html">
              Home 
            </a>
          </li>
          
          <li class="active">Contact</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End Page Title Area -->

  <!-- Start Contact Area -->
  <section class="main-contact-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="contact-wrap ptb-100">
            <div class="contact-form">
              <div class="contact-title">
                <h2>Write us</h2>
              </div>

              <div>
                @if(session("success"))

                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session("success") }}!</strong>
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                    </div>
                @endif
              </div>

              <form  method="POST" id="contactForm" >
                @csrf
                <div class="row">
                  <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
    
                  <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                      <label>Email Address</label>
                      <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
    
                  <div class="col-12">
                    <div class="form-group">
                      <label>Subject</label>
                      <input type="text" name="subject" id="subject" class="form-control" required data-error="Please enter your subject">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
    
                  <div class="col-12">
                    <div class="form-group">
                      <label>Message</label>
                      <textarea name="message" class="form-control" id="message" cols="30" rows="10" required data-error="Write your message"></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
    
                  <div class="col-lg-12 col-md-12">
                    <button type="submit" class="default-btn btn-two">
                      Send Message
                    </button>
                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="contact-info ptb-100">
            <h3>Our contact details</h3>
            <p>Philadelphia, Pennsylvania. USA</p>

            <ul class="address">
              <li class="location">
                <i class="bx bxs-location-plus"></i>
                <span>Address</span>
                {{ $contact->address }}
              </li>
              <li>
                <i class="bx bxs-phone-call"></i>
                <span>Phone</span>
                <a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a>
                <a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a>
              </li>
              <li>
                <i class="bx bxs-envelope"></i>
                <span>Email</span>
                <a href="{{ $contact->email }}">{{ $contact->email }}</span></a>
                <!-- <a href="#">skype: Example</a> -->
              </li>
            </ul>

            <div class="sidebar-follow-us">
              <h3>Follow us:</h3>
    
              <ul class="social-wrap">
                <li>
                  <a href="http://linkedin.com/in/hyperbaric-management-b38447225" target="_blank">
                    <i class="bx bxl-linkedin"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.instagram.com/hyperbaric_underwater/" target="_blank">
                    <i class="bx bxl-instagram"></i>
                  </a>
                </li>
                <!-- <li>
                  <a href="#" target="_blank">
                    <i class="bx bxl-facebook"></i>
                  </a>
                </li> -->
                <li>
                  <a href="https://youtu.be/-S1uVxpeCgo" target="_blank">
                    <i class="bx bxl-youtube"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Area -->

  <!-- Start Map Area -->
  <div class="map-area">
    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830869428!2d-74.119763973046!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1595487039539!5m2!1sen!2sbd"></iframe> -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d195601.045627698!2d-75.11802829999999!3d40.002497999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c6b7d8d4b54beb%3A0x89f514d88c3e58c1!2sPhiladelphia%2C%20PA%2C%20USA!5e0!3m2!1sen!2sng!4v1657289584399!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  </div>
  <!-- End Map Area -->

@endsection