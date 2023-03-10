
<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
        <a href="{{ route('dashboard') }}">
            <!-- <svg
            class="brand-icon"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="xMidYMid"
            width="30"
            height="33"
            viewBox="0 0 30 33"
            >
            <g fill="none" fill-rule="evenodd">
                <path
                class="logo-fill-blue"
                fill="#7DBCFF"
                d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
                />
                <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
            </g>
            </svg> -->
            <img class="brand-icon" width="20"
            height="23"
            viewBox="0 0 30 33" src="{{ asset('backend/assets/img/image1.png') }} " rel="shortcut icon" />
            <span class="brand-name">Hyperbaric </span>
        </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">

            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                
                <li  class="has-sub active expand" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Home</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse show"  id="dashboard" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            
                            <li  class="active" >
                                <a class="sidenav-item-link" href="{{ route('all.slider') }}">
                                    <span class="nav-text">Home Slider</span>
                                    
                                </a>
                            </li>

                            <li  class="active" >
                                <a class="sidenav-item-link" href="{{ route('all.brand') }}">
                                    <span class="nav-text">Home Brand</span>
                                    
                                </a>
                            </li>
                            <li  class="active" >
                                <a class="sidenav-item-link" href="{{ route('all.about') }}">
                                    <span class="nav-text">Home About</span>
                                    
                                </a>
                            </li>
                            <li  class="active" >
                                <a class="sidenav-item-link" href="{{ route('all.service') }}">
                                    <span class="nav-text">Home Service</span>
                                    
                                </a>
                            </li>
                            <li  class="active" >
                                <a class="sidenav-item-link" href="{{ route('all.category') }}">
                                    <span class="nav-text">Home Service Category</span>
                                    
                                </a>
                            </li>

                            <li  class="active" >
                                <a class="sidenav-item-link" href="{{ route('all.image') }}">
                                    <span class="nav-text">Home Multi Image</span>
                                    
                                </a>
                            </li>

                            <li  class="active" >
                                <a class="sidenav-item-link" href="{{ route('all.portfolio') }}">
                                    <span class="nav-text">Home Portfolio</span>
                                    
                                </a>
                            </li>

                            <li  class="active" >
                                <a class="sidenav-item-link" href="{{ route('all.team') }}">
                                    <span class="nav-text">Home Team</span>
                                    
                                </a>
                            </li>
                            <li  class="active" >
                                <a class="sidenav-item-link" href="{{ route('home.logo') }}">
                                    <span class="nav-text">Logo</span>
                                    
                                </a>
                            </li>

                        </div>
                    </ul>
                </li>
                
             
                <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages"
                    aria-expanded="false" aria-controls="pages">
                    <i class="mdi mdi-image-filter-none"></i>
                    <span class="nav-text">Contact Page</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="pages" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            
                            <li >
                                <a class="sidenav-item-link" href="{{ route('admin.contact') }}">
                                    <span class="nav-text">Contact Profile</span>
                                    
                                </a>
                            </li>

                            <li >
                                <a class="sidenav-item-link" href="{{ route('admin.message') }}">
                                    <span class="nav-text">Contact Message</span>
                                    
                                </a>
                            </li>
                            
                        </div>
                    </ul>
                </li>
                
                
                <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#documentation"
                    aria-expanded="false" aria-controls="documentation">
                    <i class="mdi mdi-book-open-page-variant"></i>
                    <span class="nav-text">Documentation</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="documentation"
                    data-parent="#sidebar-menu">
                    <div class="sub-menu">
                        
                        
                        
                            <li class="section-title">
                            Getting Started
                            </li>
                        
                        

                        
                        
                        
                            <li >
                            <a class="sidenav-item-link" href="introduction.html">
                                <span class="nav-text">Introduction</span>
                                
                            </a>
                            </li>
                        
                        

                        
                        
                        
                            <li >
                            <a class="sidenav-item-link" href="setup.html">
                                <span class="nav-text">Setup</span>
                                
                            </a>
                            </li>
                        
                        

                        
                        
                        
                            <li >
                            <a class="sidenav-item-link" href="customization.html">
                                <span class="nav-text">Customization</span>
                                
                            </a>
                            </li>
                        
                        

                        
                        
                        
                            <li class="section-title">
                            Layouts
                            </li>
                        
                        

                        
                        
                        <li  class="has-sub" >
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#headers"
                            aria-expanded="false" aria-controls="headers">
                            <span class="nav-text">Layout Headers</span> <b class="caret"></b>
                        </a>
                        <ul  class="collapse"  id="headers">
                            <div class="sub-menu">
                            
                            <li >
                                <a href="header-fixed.html">Header Fixed</a>
                            </li>
                            
                            <li >
                                <a href="header-static.html">Header Static</a>
                            </li>
                            
                            <li >
                                <a href="header-light.html">Header Light</a>
                            </li>
                            
                            <li >
                                <a href="header-dark.html">Header Dark</a>
                            </li>
                            
                            </div>
                        </ul>
                        </li>
                        

                        
                        
                        <li  class="has-sub" >
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#sidebar-navs"
                            aria-expanded="false" aria-controls="sidebar-navs">
                            <span class="nav-text">layout Sidebars</span> <b class="caret"></b>
                        </a>
                        <ul  class="collapse"  id="sidebar-navs">
                            <div class="sub-menu">
                            
                            <li >
                                <a href="sidebar-open.html">Sidebar Open</a>
                            </li>
                            
                            <li >
                                <a href="sidebar-minimized.html">Sidebar Minimized</a>
                            </li>
                            
                            <li >
                                <a href="sidebar-offcanvas.html">Sidebar Offcanvas</a>
                            </li>
                            
                            <li >
                                <a href="sidebar-with-footer.html">Sidebar With Footer</a>
                            </li>
                            
                            <li >
                                <a href="sidebar-without-footer.html">Sidebar Without Footer</a>
                            </li>
                            
                            <li >
                                <a href="right-sidebar.html">Right Sidebar</a>
                            </li>
                            
                            </div>
                        </ul>
                        </li>
                        

                        
                        
                        
                            <li >
                            <a class="sidenav-item-link" href="rtl.html">
                                <span class="nav-text">RTL Direction</span>
                                
                            </a>
                            </li>
                        
                        

                        
                    </div>
                    </ul>
                </li>
                
            </ul>

        </div>

    </div>
</aside>