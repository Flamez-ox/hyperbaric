@php  
    $logo = App\Models\Logo::findOrFail(1);
    $contact = App\Models\Contact::first();
    $route = Route::current()->getName();
@endphp

<!-- Start Header Area -->
<header class="header-area">
    <!-- Start Top Header -->
    <div class="top-header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-8 pl-0">
                    <ul class="header-left-content">
                        <li>
                            <i class="flaticon-phone-ringing"></i>
                            <a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a>
                        </li>
                        <li>
                            <i class="flaticon-email"></i>
                            <a href="email:{{ $contact->email }}">{{ $contact->email }}</a>

                            <!-- <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#690a06071d080a1d290a0607130006470a0604"><span class="__cf_email__" data-cfemail="aac9c5c4decbc9deeac9c5c4d0c3c584c9c5c7">{{ $contact->email }}</span></a> -->
                        </li>
                    </ul>
                </div>

                <div class="col-lg-6 col-sm-4 pr-0">
                    <ul class="header-right-content">
                        <!-- <li>
                            <a href="#">
                                <i class="bx bxl-twitter"></i>
                            </a>
                        </li> -->
                        <li>
                            <a href="https://www.instagram.com/hyperbaric_underwater/">
                                <i class="bx bxl-instagram"></i>
                            </a>
                        </li>
                        <!-- <li>
                            <a href="#">
                                <i class="bx bxl-facebook"></i>
                            </a>
                        </li> -->
                        <li>
                            <a href="http://linkedin.com/in/hyperbaric-management-b38447225">
                                <i class="bx bxl-linkedin-square"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Top Header -->
    
    <!-- Start Nav Area -->
    <div class="navbar-area">
        <div class="mobile-nav">
            <div class="container-fluid">
                <a href="{{ url('/') }}" class="logo">
                    <img src="{{ asset($logo->logo_image) }}" alt="Logo">
                </a>
            </div>
        </div>

        <div class="main-nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md">
                    <a class="navbar-brand" href="index.html">
                        <img width="200px" src="{{ asset($logo->logo_image) }}" alt="Logo">
                    </a>
                    
                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href="{{ route('home') }}" class="nav-link {{ ($route == 'home')? 'active' : '' }}">
                                    Home
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('home.about') }}" class="nav-link {{ ($route == 'home.about')? 'active' : '' }}">
                                    About
                                    <i class="bx bx-chevron-down"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    
                                    <li class="nav-item">
                                        <a href="{{ route('home.about') }}" class="nav-link {{ ($route == 'home.about')? 'active' : '' }}">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('privacy') }}" class="nav-link {{ ($route == 'privacy')? 'active' : '' }}">Privacy Policy</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a href="terms-conditions.html" class="nav-link">Terms & Conditions</a>
                                    </li> -->
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('home.service') }}" class="nav-link {{ ($route == 'home.service')? 'active' : '' }}">
                                    Services
                                    <i class="bx bx-chevron-down"></i>
                                </a> 

                               
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('home.team') }}" class="nav-link {{ ($route == 'home.team')? 'active' : '' }}">
                                    Team
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('portfolio') }}" class="nav-link {{ ($route == 'portfolio')? 'active' : '' }}">
                                    Portfolio
                                    <i class="bx bx-chevron-down"></i>
                                </a>

                            </li>

                            <li class="nav-item">
                                <a href="{{ route('contact') }}" class="nav-link {{ ($route == 'contact')? 'active' : '' }}">Contact</a>
                            </li>

                            @if (Route::has('login'))
                            <li class="nav-item">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="nav-link">Employee</a>
                                @else
                                    <a href="{{ route('login') }}" class="nav-link">Log in</a>
                                    <!-- @if (Route::has('register'))
                                        <a href="{{ route('register') }}">Register</a>
                                    @endif -->
                                @endauth
                            </li>
                            @endif
                        </ul>
                        
                        <!-- <div class="others-option">
                            <div class="search-box">
                                <form class="search-form">
                                    <input class="form-control" name="search" placeholder="Search..." type="text">
                                    <button class="search-btn" type="submit">
                                        <i class="bx bx-search"></i>
                                    </button>
                                </form>
                            </div>

                            <div class="cart-icon">
                                <a href="cart.html">
                                    <i class="flaticon-shopping-cart"></i>
                                    <span>0</span>
                                </a>
                            </div>
                        </div> -->
                    </div>
                </nav>
            </div>
        </div>
        
        <!-- <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="option-inner">
                        <div class="others-option justify-content-center d-flex align-items-center">
                            <div class="search-box">
                                <form class="search-form">
                                    <input class="form-control" name="search" placeholder="Search..." type="text">
                                    <button class="search-btn" type="submit">
                                        <i class="bx bx-search"></i>
                                    </button>
                                </form>
                            </div>

                            <div class="cart-icon">
                                <a href="cart.html">
                                    <i class="flaticon-shopping-cart"></i>
                                    <span>0</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <!-- End Nav Area -->
</header>
<!-- End Header Area -->