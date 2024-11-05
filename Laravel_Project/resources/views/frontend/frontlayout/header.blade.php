<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Courier Managment System</title>
<meta name="description" content="Transcrew | Courier & Delivery Service HTML Template" />
<meta name="keywords" content="cargo, courier, delivery, freight, logistics, mover, moving company, packaging, responsive, shipment, shipping, transport, warehouse" />
<!-- Plugins CSS -->
<link href="{{asset('frontend/css/plugins.css')}}" rel="stylesheet" >
<!-- Custom CSS -->
<link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/images/favicon.ico')}}">

</head>
<body>
<!-- Pre Loader -->
<div class="page-wrapper">
  <!-- Preloader -->
  <div id="dvLoading"></div>
  <header class="main-header"> 
    <!--Header Top-->
    <div class="header-top">
      <div class="auto-container">
        <div class="inner-container clearfix">
          <div class="top-left">
            <div class="text">Best Courier Services in the World </div>
          </div>
          <div class="top-right">
            <ul class="list clearfix">
            <!-- <li><a href="tel:+369-2900-4800"><span class="icon fa fa-phone-square"></span> (369) 2900 4800</a></li>
              <li><a href="mailto:test@test.com"><span class="icon fa fa-envelope"></span> test@test.com</a></li> -->
            <div class="col-md-2 col-sm-2 col-xs-12">
              
           <a href="{{url('login')}}" class="theme-btn btn-style-one"><span class="txt">UserLogin</span></a>
            </ul>
            <ul class="list clearfix">
            <div class="col-md-2 col-sm-2 col-xs-12">
           <a href="{{url('register')}}" class="theme-btn btn-style-one"><span class="txt">UserRegister</span></a>
            </ul>
             </ul>
            
            <ul class="social-icons">
              <li><a href="#"><span class="fab fa-twitter"></span></a></li>
              <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
              <li><a href="#"><span class="fab fa-instagram"></span></a></li>
              <li><a href="#"><span class="fab fa-youtube"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Header Top --> 
    <!-- Header Upper -->
    <div class="header-upper">
      <div class="auto-container">
        <div class="inner-container clearfix"> 
          <!--Info-->
          <div class="logo-outer">
            <div class="logo logo-1"> <a href="index-2.html"> <img src="{{asset('frontend/images/courier.png')}}"  height="60px"alt="">
              </a> </div>
          </div>
          <!--Nav Box-->
          <div class="nav-outer clearfix"> 
            <!--Mobile Navigation Toggler For Mobile-->
            <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
            <nav class="main-menu navbar-expand-md navbar-light">
              <div class="navbar-header"> 
                <!-- Togg le Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="icon flaticon-menu"></span> </button>
              </div>
              <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                <ul class="navigation clearfix">
                <li><a href="{{url('index')}}">Home</a></li>
                <li class="dropdown"><a href="javascript:void(0)">Elements</a>
                  <ul>
                    <li><a href="{{url('accourdions-tabs')}}">Courier Delivery Tabs</a></li>
                    <li><a href="{{url('typography')}}">Services Details</a></li>
                    <li><a href="{{url('forms')}}">Forms</a></li>
                    <li><a href="{{url('table')}}">Tables</a></li>
                    <li><a href="{{url('courier')}}">Courier Delivery Details</a></li>
                    <li><a href="{{url('bar')}}">Services Progress Bar</a></li>  </ul>
                </li>
                  <li class="dropdown"><a href="javascript:void(0)">Pages</a>
                    <ul>
                      <li><a href="{{url('about')}}">About Us</a></li>
                      <li><a href="{{url('our-team')}}">Our Team</a></li>
                      <li><a href="{{url('faq')}}">FAQs</a></li>
                      <li><a href="{{url('gallery')}}">Gallery</a></li>
                      <li><a href="{{url('')}}">Error Page</a></li>
                      <li><a href="{{url('coming-soon')}}">Coming Soon</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="javascript:void(0)">Services</a>
                    <ul>
                      <li><a href="{{url('service')}}">Services</a></li>
                      <li><a href="{{url('service_details')}}">Service Details</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="javascript:void(0)">Blog</a>
                    <ul>
                      <li><a href="{{url('blog')}}">Blog</a></li>
                      <li><a href="{{url('blog-detail')}}">Blog Detail</a></li>
                    </ul>
                  </li>
                  <li><a href="{{url('contactus')}}">Contact</a></li>
                  <li class="dropdown"><a href="javascript:void(0)">Acount</a>
                    <ul>
                      <li><a href="{{url('admin/login')}}">Admin Login</a></li>
                      <li><a href="{{url('admin/register')}}">Admin Register</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="javascript:void(0)">{{ Auth::user()->name ?? 'UserAcount'}}</a>
                    <ul>
                      <li> <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link></li>
                      <li>         <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form></li>
                    </ul>
                  </li>
                    
                  </li>
                </ul>
                
              </div>
            </nav>
            <!-- Main Menu End--> 
            <!-- Main Menu End-->
            <div class="outer-box clearfix"> 
              <!--Search Box-->
              <div class="search-box-outer">
                <div class="dropdown">
                  <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="ti ti-search"></span></button>
                  <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu1">
                    <li class="panel-outer">
                      <div class="form-container">
                        <form method="post" action="http://sbtechnosoft.com/transcrew/blog.html">
                          <div class="form-group">
                            <input type="search" name="field-name" value="" placeholder="Search Here" required>
                            <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                          </div>
                        </form>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- Button Box -->
              <div class="btn-box"> <a href="#quote-popup" class="theme-btn vendor-btn open-popup-link">Get Quotes</a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--End Header Upper--> 
    <!-- Mobile Menu  -->
    <div class="mobile-menu">
      <div class="menu-backdrop"></div>
      <div class="close-btn"><span class="icon far fa-window-close"></span></div>
      <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
      <nav class="menu-box">
        <div class="nav-logo"><a href="index-2.html"><img src="{{asset('frontend/images/logo.png')}}" alt="" title=""></a></div>
        <ul class="navigation clearfix">
          <!--Keep This Empty / Menu will come through Javascript-->
        </ul>
      </nav>
    </div>
    <!-- End Mobile Menu --> 
    <!-- Quote Section -->
  <div class="quote-part mfp-hide" id="quote-popup">
    <div class="container">
      <div class="section-title"> <span class="section-span">Get A Quote</span>
      </div>
      <div class="row">
        <div class="col-lg-12">
        <form method="post" id="contactForm" action="{{route('qoute.store')}}" enctype="multipart/form-data">
                              @csrf            <div class="row">
              <div class="col-md">
                <input type="text" name="name"class="form-control" placeholder="Name" required>
              </div>
              <div class="col-md">
                <input type="text" name="email"class="form-control" placeholder="Email" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md">
                <input type="text" name="subject" class="form-control" placeholder="Subject" required>
              </div>
              
              <div class="col-md">
                <select class="form-control" name="standard"id="courier-type-box">
                  <option>Standard</option>
                  <option>Express</option>
                  <option>International</option>
                  <option>Pallet</option>
                  <option>Ware Housing</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <textarea class="form-control"  name="message" placeholder="Message" rows="4" required></textarea>
            </div>
            <button type="submit" class="quote-contact-btn">SEND</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  </header>
  <!-- End Main Header --> 
</body>
</html>