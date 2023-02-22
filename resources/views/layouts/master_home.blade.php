<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('frontend/assets/img/image1.png') }}">
  <!-- Title -->
  <title>@yield("title")</title>

  <!-- Bootstrap Min CSS --> 
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
  <!-- Owl Theme Default Min CSS --> 
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.theme.default.min.css') }}">
  <!-- Owl Carousel Min CSS --> 
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
  <!-- Owl Magnific Min CSS --> 
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.min.css') }}">
  <!-- Animate Min CSS --> 
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
  <!-- Boxicons Min CSS --> 
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/boxicons.min.css') }}"> 
  <!-- Flaticon CSS --> 
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/flaticon.css') }}">
  <!-- Meanmenu Min CSS -->
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.min.css') }}">
  <!-- Nice Select Min CSS -->
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.min.css') }}">
  <!-- Odometer Min CSS-->
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/odometer.min.css') }}">
  <!-- Style CSS -->
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
  <!-- Responsive CSS -->
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
  


</head>

<body>

  <!-- Start Preloader Area -->
  <div class="loader-wrapper">
    <div class="loader">
      <div class="dot-wrap">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      </div>
    </div>
  </div>
  <!-- End Preloader Area -->

  <!-- ======= Header ======= -->
  
    @include("layouts.body.header")

  <!-- ======= Hero Section ======= -->
   

    @yield("home_content")

  <!-- ======= Footer ======= -->
  @include("layouts.body.footer")



  <!-- Start Go Top Area -->
  <div class="go-top">
			<i class="bx bx-chevrons-up"></i>
			<i class="bx bx-chevrons-up"></i>
		</div>
		<!-- End Go Top Area -->
		

    <!-- Jquery Min JS -->
    <!-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"> -->
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    </script><script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
    <!-- Bootstrap Bundle Min JS -->
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Meanmenu Min JS -->
		<script src="{{ asset('frontend/assets/js/meanmenu.min.js') }}"></script>
    <!-- Wow Min JS -->
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <!-- Owl Carousel Min JS -->
		<script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <!-- Owl Magnific Min JS -->
		<script src="{{ asset('frontend/assets/js/magnific-popup.min.js') }}"></script>
    <!-- Nice Select Min JS -->
		<script src="{{ asset('frontend/assets/js/nice-select.min.js') }}"></script>
		<!-- Jarallax Min JS --> 
		<script src="{{ asset('frontend/assets/js/jarallax.min.js') }}"></script>
		<!-- Mixitup Min JS --> 
		<script src="{{ asset('frontend/assets/js/mixitup.min.js') }}"></script>
		<!-- Appear Min JS --> 
    <script src="{{ asset('frontend/assets/js/appear.min.js') }}"></script>
		<!-- Odometer Min JS --> 
		<script src="{{ asset('frontend/assets/js/odometer.min.js') }}"></script>
		<!-- Form Validator Min JS -->
		<script src="{{ asset('frontend/assets/js/form-validator.min.js') }}"></script>
		<!-- Contact JS -->
		<script src="{{ asset('frontend/assets/js/contact-form-script.js') }}"></script>
		<!-- Ajaxchimp Min JS -->
		<script src="{{ asset('frontend/assets/js/ajaxchimp.min.js') }}"></script>
    <!-- Custom JS -->
		<script src="{{ asset('frontend/assets/js/custom.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script> 

</body>

</html>