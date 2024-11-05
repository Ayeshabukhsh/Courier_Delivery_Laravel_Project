@extends('frontend.frontlayout.main')
@section('main-content')
   <!-- Quote Section -->
   <div class="quote-part mfp-hide" id="quote-popup">
      <div class="container">
        <div class="section-title"> <span class="section-span">Get A Quote</span> </div>
        <div class="row">
          <div class="col-lg-12">
            <form class="quote-form">
              <div class="row">
                <div class="col-md">
                  <input type="text" class="form-control" placeholder="Name" required>
                </div>
                <div class="col-md">
                  <input type="text" class="form-control" placeholder="Email" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md">
                  <input type="text" class="form-control" placeholder="Subject" required>
                </div>
                <div class="col-md">
                  <select class="form-control" id="courier-type-box">
                    <option>Standard</option>
                    <option>Express</option>
                    <option>International</option>
                    <option>Pallet</option>
                    <option>Ware Housing</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <textarea class="form-control" placeholder="Message" rows="4" required></textarea>
              </div>
              <button type="submit" class="quote-contact-btn">SEND</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End Main Header --> 
  <!-- Page Title -->
  <div class="page-title-area">
    <div class="container">
      <div class="page-title-content">
        <h2>Coming-Soon</h2>
        <ul>
          <li> <a href="{{url('index-2')}}">Home</a> </li>
          <li> <i class='ti-angle-right'></i> </li>
          <li>Coming soon</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End Page Title -->
<!-- Pre Loader -->
 <!-- Preloader -->
 <div id="dvLoading"></div>
<body class="coming-soon parallax">
    <div class="container">
      <div class="row no-gutters justify-content-center">
        <div class="col-lg-8">
          <div class="full-height coming-soon-text">
            <h1 class="text-custom-black">Coming Soon</h1>
            <div class="counter">
              <div class="counter-box">
                <div class="inner-box"><span class="text-custom-white" id="cvdays"></span> </div>
                <p class="text-custom-white">Days</p>
              </div>
              <div class="counter-box">
                <div class="inner-box"><span class="text-custom-white" id="cvhours"></span> </div>
                <p class="text-custom-white">Hours</p>
              </div>
              <div class="counter-box">
                <div class="inner-box"> <span class="text-custom-white" id="cvminutes"></span> </div>
                <p class="text-custom-white">Minutes</p>
              </div>
              <div class="counter-box">
                <div class="inner-box"> <span class="text-custom-white" id="cvseconds"></span> </div>
                <p class="text-custom-white">Seconds</p>
              </div>
            </div>
            <div class="coming-soon-contact">
              <ul class="custom-flex">
                <li>
                  <label class="text-light-dark fw-600 d-block">Phone:</label>
                  <a href="tel:" class="text-custom-black fw-600">(+123) 123 4567 890</a> </li>
                <li>
                  <label class="text-light-dark fw-600 d-block">Address:</label>
                  <a href="#" class="text-custom-black fw-600">102/B, Street, Yankee New York</a> </li>
                <li>
                  <label class="text-light-dark fw-600 d-block">Email Us:</label>
                  <a href="mailto:" class="text-custom-black fw-600">info@domain.com</a> </li>
              </ul>
            </div>
            <div class="newsletter-form">
              <div class="form-group">
                <div class="input-group group-form">
                  <input type="text" name="#" class="form-control form-control-custom" placeholder="Email Id">
                  <button class="input-group-append"> Send </button>
                </div>
              </div>
            </div>
            <div class="social-media">
              <ul class="custom-flex">
                <li> <a href="#" class="text-light-dark"> <i class="fa fa-facebook-f"></i> </a> </li>
                <li> <a href="#" class="text-light-dark"> <i class="fa fa-twitter"></i> </a> </li>
                <li> <a href="#" class="text-light-dark"> <i class="fa fa-instagram"></i> </a> </li>
                <li> <a href="#" class="text-light-dark"> <i class="fa fa-youtube"></i> </a> </li>
                <li> <a href="#" class="text-light-dark"> <i class="fa fa-vimeo"></i> </a> </li>
              </ul>
            </div>
            <a class="bttn mt-4" href="index-2.html">Go to Home</a>
          </div>
        </div>
      </div>
    </div>
    <!-- End Coming soon -->

    
@endsection