@extends("layouts.master_home")

@section("home_content")

@section('title')
	Hyperbaric | Team
@endsection

@php 
    $abouts = App\Models\HomeAbout::first();
    $teams = App\Models\HomeTeam::latest()->get();
    $i = 1
@endphp

<!-- Start Page Title Area -->
<div class="page-title-area bg-2">
    <div class="container">
        <div class="page-title-content">
            <h2>Our team</h2>
            <ul>
                <li>
                    <a href="index.html">
                        Home 
                    </a>
                </li>
                
                <li class="active">Team</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Team Area -->
<section class="team-area ptb-100">
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

        </div>
    </div>
</section>
<!-- End Team Area -->

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


<!-- <div class="container mt-5">
<div class="card">
<div class="card-header">
Laravel Currency Exchange Rate Calculator
</div>
<div class="card-body">
<form id="currency-exchange-rate" action="#" method="POST" class="form-group">
<div class="row mb-3">
<div class="col-md-4">
<input type="text" name="amount" class="form-control" value="1">  
</div>
<div class="col-md-4">
<select name="from_currency" class="form-control"> 
<option value='AUD'>AUD</option>
<option value='BGN'>BGN</option>
<option value='BRL'>BRL</option>
<option value='CAD'>CAD</option>
<option value='CHF'>CHF</option>
<option value='CNY'>CNY</option>
<option value='CZK'>CZK</option>
<option value='DKK'>DKK</option>
<option value='EUR'>EUR</option>
<option value='GBP'>GBP</option>
<option value='HKD'>HKD</option>
<option value='HRK'>HRK</option>
<option value='HUF'>HUF</option>
<option value='IDR'>IDR</option>
<option value='ILS'>ILS</option>
<option value='INR'>INR</option>
<option value='ISK'>ISK</option>
<option value='JPY'>JPY</option>
<option value='KRW'>KRW</option>
<option value='MXN'>MXN</option>
<option value='MYR'>MYR</option>
<option value='NOK'>NOK</option>
<option value='NZD'>NZD</option>
<option value='PHP'>PHP</option>
<option value='PLN'>PLN</option>
<option value='RON'>RON</option>
<option value='RUB'>RUB</option>
<option value='SEK'>SEK</option>
<option value='SGD'>SGD</option>
<option value='THB'>THB</option>
<option value='TRY'>TRY</option>
<option value='USD'>USD</option>
<option value='ZAR'>ZAR</option>
</select>
</div>
<div class="col-md-4">
<select name="to_currency" class="form-control">
<option value='AUD'>AUD</option>
<option value='BGN'>BGN</option>
<option value='BRL'>BRL</option>
<option value='CAD'>CAD</option>
<option value='CHF'>CHF</option>
<option value='CNY'>CNY</option>
<option value='CZK'>CZK</option>
<option value='DKK'>DKK</option>
<option value='EUR'>EUR</option>
<option value='GBP'>GBP</option>
<option value='HKD'>HKD</option>
<option value='HRK'>HRK</option>
<option value='HUF'>HUF</option>
<option value='IDR'>IDR</option>
<option value='ILS'>ILS</option>
<option value='INR'>INR</option>
<option value='ISK'>ISK</option>
<option value='JPY'>JPY</option>
<option value='KRW'>KRW</option>
<option value='MXN'>MXN</option>
<option value='MYR'>MYR</option>
<option value='NOK'>NOK</option>
<option value='NZD'>NZD</option>
<option value='PHP'>PHP</option>
<option value='PLN'>PLN</option>
<option value='RON'>RON</option>
<option value='RUB'>RUB</option>
<option value='SEK'>SEK</option>
<option value='SGD'>SGD</option>
<option value='THB'>THB</option>
<option value='TRY'>TRY</option>
<option value='USD'>USD</option>
<option value='ZAR'>ZAR</option>
</select>
</div>
</div>  
<div class="row">
<div class="col-md-4">
<input type="submit" name="submit" id="btnSubmit" class="btn btn-primary " value="Click To Exchange Rate">
</div>
</div>
</form> 
</div>
<div class="card-footer">
<span id="output"></span>
</div>
</div>
</div>
<script>
$(document).ready(function () {
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
$("#btnSubmit").click(function (event) {
//stop submit the form, we will post it manually.
event.preventDefault();
// Get form
var form = $('#currency-exchange-rate')[0];
// Create an FormData object 
var data = new FormData(form);
// disabled the submit button
$("#btnSubmit").prop("disabled", true);
$.ajax({
type: "POST",
url: "{{ url('currency') }}",
data: data,
processData: false,
contentType: false,
cache: false,
timeout: 800000,
success: function (data) {
$("#output").php(team);
$("#btnSubmit").prop("disabled", false);
},
error: function (e) {
$("#output").html(e.responseText);
console.log("ERROR : ", e);
$("#btnSubmit").prop("disabled", false);
}
});
});
});
</script> -->


@endsection