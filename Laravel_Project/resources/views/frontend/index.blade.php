

@extends('frontend.frontlayout.main')
@section('main-content')


  <!--
     Main Slider -->
  <section class="main-slider">
    <div class="banner-carousel"> 
      <!-- Swiper -->
      <div class="swiper-wrapper">
        <div class="swiper-slide slide" style="background-image:url({{asset('frontend/images/slider-img1.jpg')}})">
          <div class="curve"></div>
          <div class="auto-container">
            <div class="content">
              <div class="title">Welcome To Courier Managment System</div>
              <h2>We Provide Best Courier & <br> 
                Parcel Services</h2>
              <div class="btn-box"> <a href="{{url('contactus')}}" class="theme-btn btn-style-one"><span class="txt">Contact Us</span></a> </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide slide" style="background-image:url({{asset('frontend/images/slider-img2.jpg')}})">
          <div class="curve"></div>
          <div class="auto-container">
            <div class="content">
              <div class="title">Welcome To Courier Managment System</div>
              <h2>We Provide Best Courier & <br> 
                Parcel Services</h2>
              <div class="btn-box"> <a href="{{url('contactus')}}" class="theme-btn btn-style-one"><span class="txt">Contact Us</span></a> </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide slide" style="background-image:url({{asset('frontend/images/slider-img3.jpg')}})">
          <div class="curve"></div>
          <div class="auto-container">
            <div class="content">
              <div class="title">Welcome To Courier Managment System</div>
              <h2>We Provide Best Courier & <br> 
                Parcel Services</h2>
              <div class="btn-box"> <a href="{{url('contactus')}}" class="theme-btn btn-style-one"><span class="txt">Contact Us</span></a> </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
      <!-- Add Arrows -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
    <div class="bottom-img"> <img src="{{asset('frontend/images/header-shape.png')}}" alt=""> </div>
  </section>
  <!-- End Main Slider -->
<!-- Start Feature Section -->
<section class="features-sec">
   <div class="container">
     <div class="row">
       <div class="col-lg-4 col-md-6">
         <!-- Start Single Feature Section -->
        <div class="single-features-sec">
          <div class="icon"><img src="{{asset('frontend/images/features-icon1.png')}}" alt=""></div>
          <h4>Apply Online</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua.</p>
            <a href="#">Read More <i class='bx bxs-right-arrow-alt bx-fade-left bx-flip-vertical' ></i></a> </div>        
       </div>
       <div class="col-lg-4 col-md-6">
        <!-- Start Single Feature Section -->
       <div class="single-features-sec">
         <div class="icon"><img src="{{asset('frontend/images/features-icon2.png')}}" alt=""></div>
         <h4>Submit Documents</h4>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
           et dolore magna aliqua.</p>
           <a href="#">Read More <i class='bx bxs-right-arrow-alt bx-fade-left bx-flip-vertical' ></i></a> </div>        
      </div>
      <div class="col-lg-4 col-md-6">
        <!-- Start Single Feature Section -->
       <div class="single-features-sec">
         <div class="icon"><img src="{{asset('frontend/images/features-icon3.png')}}" alt=""></div>
         <h4>Receive Goods</h4>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
           et dolore magna aliqua.</p>
         <a href="#">Read More <i class='bx bxs-right-arrow-alt bx-fade-left bx-flip-vertical' ></i></a> </div>        
      </div>
     </div>
   </div>
</section>
<!-- End Feature Section -->
<!-- Start About Section -->
<section class="about-sec">
  <div class="container">
    <div class="row align-items-center clearfix">
      <div class="col-lg-6 col-md-12 col-sm-12 image-column">
        <div id="image_block_1">
        <div class="image-box">
          <figure class="image"><img src="{{asset('frontend/images/about-1.jpg')}}" alt=""></figure>
          <div class="box">
            <div class="inner">
              <div class="icon-box">
                <div class="icon icon-1"></div>
                <div class="icon icon-2"></div>
              </div>
              <span>We Provide Best Courier Services</span>
              <h1>24</h1>
              <p>Years Of Experience</p>
            </div>
          </div>
        </div>  
      </div>         
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 content-column">
        <div id="content_block_1">
          <div class="content-box">
            <div class="section-title">
              <p>Who are Managment System</p>
              <h2>Best Courier & Parcel Services</h2>
              <div class="dotted-box"> <span class="dotted"></span> <span class="dotted"></span> <span class="dotted"></span> </div>
            </div>
            <div class="bold-text">
              <p>Business applications through revolutionary catalysts for procedures whereas processes.</p>
            </div>
            <div class="text">
              <p>Distinctively exploit optimal alignments for intuitive. Quickly coordinate business applications through revolutionary catalysts for chang the Seamlessly optimal testing procedures whereas processes. Synerg stically evolve 2.0 technologies rather than just in web & apps development optimal alignments for intuitive.</p>
            </div>
            <div class="btn-box"> <a href="{{('blog')}}" class="bttn1">Read More <i class="bx bxs-right-arrow-alt bx-fade-left bx-flip-vertical"></i></a> </div>
          </div>
        </div>        
      </div>
    </div>
  </div>
  <div class="bottom-img"> <img src="{{asset('frontend/images/features-sec-bottom-shape.svg')}}" alt=""> </div>
</section>
<!-- End About Section -->
<!-- Start Fun Facts Area -->
<section class="fun-facts-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="single-fun-fact">
          <p>Satisfied Clients</p>
          <h3> <span class="sign-icon dolor">$</span> <span class="odometer" data-count="500">00</span> <span class="sign-icon">M</span> </h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="single-fun-fact">
          <p>Offices Worldwide</p>
          <h3> <span class="odometer" data-count="458">00</span> <span class="sign-icon">+</span> </h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="single-fun-fact">
          <p>Countries Covered</p>
          <h3> <span class="odometer" data-count="45">00</span> <span class="sign-icon">+</span> </h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="single-fun-fact">
          <p>Reviews</p>
          <h3> <span class="odometer" data-count="20">00</span> <span class="sign-icon">K</span> </h3>
        </div>
      </div>
    </div>
  </div>
  <svg class="wave" width="1920px" height="150px" viewBox="0 0 1920 150">
    <path fill="#fff" stroke-miterlimit="10" d="M0,150V83c0,0,460-167.25,1244.844-23.672C1790.298,159.113,1920,40,1920,40v110H0z"></path>
  </svg>
</section>
<!-- End Fun Facts Area -->
<!-- Start Services Area -->
<section class="services-sec">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-8">
        <div class="sec-title">
      <h2><span>Our Services</span></h2>
      <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit</p>
    </div>
  </div>
  </div>
  <div class="row">
    <div class="col-lg-4 co-md-6">
      <!-- Single Services Sec -->
        <div class="single-service-item">
          <div class="icon-holder mb-3">
            <div class="service-item-icon-bg"> 01 </div>
          </div>
          <div class="service-item-text-holder">
            <h4>Standard Courier</h4>
            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod facer possim assum.</p>
            <a class="thm-btn" href="{{url('service_details')}}">Read More</a> </div>
        </div>        
    </div>
    <div class="col-lg-4 co-md-6">
      <!-- Single Services Sec -->
        <div class="single-service-item">
          <div class="icon-holder mb-3">
            <div class="service-item-icon-bg"> 02 </div>
          </div>
          <div class="service-item-text-holder">
            <h4>Door to Door</h4>
            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod facer possim assum.</p>
            <a class="thm-btn" href="{{url('service_details')}}">Read More</a> </div>
        </div>        
    </div>
    <div class="col-lg-4 co-md-6">
      <!-- Single Services Sec -->
        <div class="single-service-item">
          <div class="icon-holder mb-3">
            <div class="service-item-icon-bg"> 03 </div>
          </div>
          <div class="service-item-text-holder">
            <h4>Express Courier</h4>
            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod facer possim assum.</p>
            <a class="thm-btn" href="{{url('service_details')}}">Read More</a> </div>
        </div>        
    </div>
    <div class="col-lg-4 co-md-6">
      <!-- Single Services Sec -->
        <div class="single-service-item">
          <div class="icon-holder mb-3">
            <div class="service-item-icon-bg"> 04 </div>
          </div>
          <div class="service-item-text-holder">
            <h4>Ware House</h4>
            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod facer possim assum.</p>
            <a class="thm-btn" href="{{url('service_details')}}">Read More</a> </div>
        </div>        
    </div>
    <div class="col-lg-4 co-md-6">
      <!-- Single Services Sec -->
        <div class="single-service-item">
          <div class="icon-holder mb-3">
            <div class="service-item-icon-bg"> 05 </div>
          </div>
          <div class="service-item-text-holder">
            <h4>Pallet</h4>
            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod facer possim assum.</p>
            <a class="thm-btn" href="{{url('service_details')}}">Read More</a> </div>
        </div>        
    </div>
    <div class="col-lg-4 co-md-6">
      <!-- Single Services Sec -->
        <div class="single-service-item">
          <div class="icon-holder mb-3">
            <div class="service-item-icon-bg"> 06 </div>
          </div>
          <div class="service-item-text-holder">
            <h4>International Courier</h4>
            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod facer possim assum.</p>
            <a class="thm-btn" href="{{url('service_details')}}">Read More</a> </div>
        </div>        
    </div>
  </div>
  </div>
  </section>
<!-- End Services Area -->
<!-- Start CTA Area -->
<section class="cta-area">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-10">
    <div class="cta-content">
      <h3>Are you Looking for Professional Courier Services. Please Contact Us</h3>
      <a href="{{url('contactus')}}" class="theme-btn btn-style-one"><span class="txt">Contact Us</span></a>
  </div>
</div>
</div>
</div>
<div class="ripple_wrap">
  <div class="left_bottom_ripples">
    <div class="ripples"></div>
      </div>
      <div class="right_top_ripples">
    <div class="ripples"></div>
      </div>
</div>
<svg class="wave" width="1920px" height="150px" viewBox="0 0 1920 150">
  <path fill="#fff" stroke-miterlimit="10" d="M0,150V83c0,0,460-167.25,1244.844-23.672C1790.298,159.113,1920,40,1920,40v110H0z"></path>
</svg>
</section>
<!-- End CTA Area -->
<!-- Start Pricing Area -->
<section class="pricing-area">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-8">
        <div class="sec-title">
      <h2><span>Pricing Rate</span></h2>
      <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit</p>
    </div>
  </div>
  </div>
  <div class="row">
    <div class="col-lg-4 col-md-6">
      <!-- Start Single Pricing Area -->
      <div class="table-list">
        <div class="top-price-inner">
          <h4>Basic</h4>
          <div class="rates"> <span class="prices"><span class="dolar">$</span>15</span><span class="users">Per Month</span> </div>
        </div>
        <ol>
          <li class="check">Online System</li>
          <li class="check">Free apps</li>
          <li class="check cross">full access</li>
          <li class="check">live preview</li>
          <li class="check cross">Support unlimited</li>
        </ol>
        <div class="price-btn"> <a href="{{url('BuyOne')}}">Buy now</a> </div>
      </div>      
    </div>
    <div class="col-lg-4 col-md-6">
      <!-- Start Single Pricing Area -->
      <div class="table-list">
        <div class="top-price-inner">
          <h4>Standard</h4>
          <div class="rates"> <span class="prices"><span class="dolar">$</span>80</span><span class="users">Per Month</span> </div>
        </div>
        <ol>
          <li class="check">Online System</li>
          <li class="check">Free apps</li>
          <li class="check cross">full access</li>
          <li class="check">live preview</li>
          <li class="check cross">Support unlimited</li>
        </ol>
        <div class="price-btn"> <a href="{{url('BuyOne')}}">Buy now</a> </div>
      </div>      
    </div>
    <div class="col-lg-4 col-md-6">
      <!-- Start Single Pricing Area -->
      <div class="table-list">
        <div class="top-price-inner">
          <h4>Premium</h4>
          <div class="rates"> <span class="prices"><span class="dolar">$</span>99</span><span class="users">Per Month</span> </div>
        </div>
        <ol>
          <li class="check">Online System</li>
          <li class="check">Free apps</li>
          <li class="check cross">full access</li>
          <li class="check">live preview</li>
          <li class="check cross">Support unlimited</li>
        </ol>
        <div class="price-btn"> <a href="{{url('BuyOne')}}">Buy now</a> </div>
      </div>      
    </div>
  </div>
  </div>
</section>
<!-- Start Services Area -->
<!-- Start Testimonials Area -->
<section class="testimonials-sec">
   <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-8">
        <div class="sec-title">
      <h2><span>Client Testimonials</span></h2>
      <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit</p>
    </div>
  </div>
  </div>
  <div class="row">
    <div class="col-xl-8 col-lg-8 col-md-8 mx-auto col-sm-12">
      <div class="testimonial-wraper text-center owl-carousel owl-theme">
        <div class="single-testimonial"> <img src="{{asset('frontend/images/testi-1.jpg')}}" alt="">
          <p>dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when
            an unknown printer took a galley of type and</p>
          <h4>Daniel Wells</h4>
        </div>
        <div class="single-testimonial"> <img src="{{asset('frontend/images/testi-2.jpg')}}" alt="">
          <p>dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when
            an unknown printer took a galley of type and</p>
          <h4>Wells Mark</h4>
        </div>
        <div class="single-testimonial"> <img src="{{asset('frontend/images/testi-3.jpg')}}" alt="">
          <p>dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when
            an unknown printer took a galley of type and</p>
          <h4>Less Willams</h4>
        </div>
      </div>      
  </div>
   </div>
    </div>
    <div class="ripple_wrap">
      <div class="left_top_ripples">
        <div class="ripples"></div>
          </div>
          <div class="right_bottom_ripples">
        <div class="ripples"></div>
          </div>
    </div>
</section>
<!-- End Testimonials Area -->
<!-- Start Our Team Area -->
<section class="our-team-sec">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-8">
        <div class="sec-title">
      <h2><span>Our Team</span></h2>
      <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit</p>
    </div>
  </div>
  </div>
  <div class="row">
    <div class="col-lg-4 col-md-6">
      <!-- Single Our Team Area -->
      <div class="our-team"> <img src="{{asset('frontend/images/team-img1.jpg')}}" alt="">
        <h4><a href="#">Adam Gillwarms</a></h4>
        <span class="designation bg-theme">Courier Person</span>
        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
        <ul class="our-team-profile">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        </ul>
      </div>      
    </div>
    <div class="col-lg-4 col-md-6">
      <!-- Single Our Team Area -->
      <div class="our-team"> <img src="{{asset('frontend/images/team-img2.jpg')}}" alt="">
        <h4><a href="#">Dany Lizwani</a></h4>
        <span class="designation bg-theme">Courier Person</span>
        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
        <ul class="our-team-profile">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        </ul>
      </div>      
    </div>
    <div class="col-lg-4 col-md-6">
      <!-- Single Our Team Area -->
      <div class="our-team"> <img src="{{asset('frontend/images/team-img3.jpg')}}" alt="">
        <h4><a href="#">Adam Gillwarms</a></h4>
        <span class="designation bg-theme">Courier Person</span>
        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
        <ul class="our-team-profile">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        </ul>
      </div>      
    </div>
  </div>
  </div>
</section>
<!-- End Our Team Area -->
<!-- Start Quotation Area -->
<section class="quotation-sec">
   <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12 col-md-12">
        <div class="sec-title">
      <h2><span>Get Quotation</span></h2>
      <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit</p>
    </div>
  </div>
  </div>
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-9">
      <form method="post" id="contactForm" action="{{route('qoutation.store')}}" enctype="multipart/form-data">
                              @csrf            <div class="row">
              <div class="col-md">
                <input type="text" name="name"class="form-control" placeholder="Name" required>
              </div>
              <br><br>
              <div class="col-md">
                <input type="text" name="email"class="form-control" placeholder="Email" required>
              </div>
            </div>
            <br><br>
            <div class="row">
              <div class="col-md">
                <input type="text" name="phone" class="form-control" placeholder="phone" >
              </div>
              <br><br>
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
              <br><br>
              <textarea class="form-control"  name="message" placeholder="Message" rows="4" required></textarea>
            </div>
            <button class="bttn" type="submit">Send Message</button>          </form>       
       </div>
    </div>
   </div>
   <div class="shape_wrap">
    <div class="shape-top"> <img src="{{asset('frontend/images/wave-shape-top.png')}}" alt=""> </div>
    <div class="shape-bottom"> <img src="{{asset('frontend/images/wave-shape-bottom.png')}}" alt=""> </div>
  </div>  
</section>
<!-- End  Quotation Area -->
<!-- Start Blog Area -->
<section class="blog-area">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-8">
        <div class="sec-title">
      <h2><span>Our Blog</span></h2>
      <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit</p>
    </div>
  </div>
  </div>
  <div class="row">
    <div class="col-lg-4 col-md-6">
      <!-- Single Blog Area -->
      <div class="news-block">
        <div class="inner-box">
          <div class="image"> <a href="#"><img src="{{asset('frontend/images/blog-img1.jpg')}}" alt=""></a> </div>
          <div class="lower-content">
            <div class="content">
              <div class="date-outer">
                <div class="date">25</div>
                <div class="month">jan</div>
              </div>
              <h3><a href="service-details.html">What is Lorem Ipsum?</a></h3>
              <ul class="post-meta">
                <li><a href="#"><span class="icon ti-comments"></span>Comments 10</a></li>
                <li><a href="#"><span class="icon ti-lock"></span>Courier</a></li>
              </ul>
              <div class="text">Auisy nostrud exercitation ullamc laboris aliquip ex bea consequat duis autese dolore magna aliqua nim.</div>
              <a href="{{url('blog-detail')}}" class="btn btn-primary">Blog Details</a>
            </div>
          </div>
        </div>
      </div>      
    </div>
    <div class="col-lg-4 col-md-6">
      <!-- Single Blog Area -->
      <div class="news-block">
        <div class="inner-box">
          <div class="image"> <a href="#"><img src="{{asset('frontend/images/blog-img2.jpg')}}" alt=""></a> </div>
          <div class="lower-content">
            <div class="content">
              <div class="date-outer">
                <div class="date">25</div>
                <div class="month">jan</div>
              </div>
              <h3><a href="service-details.html">Why do we use it?</a></h3>
              <ul class="post-meta">
                <li><a href="#"><span class="icon ti-comments"></span>Comments 10</a></li>
                <li><a href="#"><span class="icon ti-lock"></span>Courier</a></li>
              </ul>
              <div class="text">Auisy nostrud exercitation ullamc laboris aliquip ex bea consequat duis autese dolore magna aliqua nim.</div>
              <a href="{{url('blog-detail')}}" class="btn btn-primary">Blog Details</a>
            </div>
          </div>
        </div>
      </div>      
    </div>
    <div class="col-lg-4 col-md-6">
      <!-- Single Blog Area -->
      <div class="news-block">
        <div class="inner-box">
          <div class="image"> <a href="#"><img src="{{asset('frontend/images/blog-img3.jpg')}}" alt=""></a> </div>
          <div class="lower-content">
            <div class="content">
              <div class="date-outer">
                <div class="date">25</div>
                <div class="month">jan</div>
              </div>
              <h3><a href="service-details.html">Where does it come from?</a></h3>
              <ul class="post-meta">
                <li><a href="#"><span class="icon ti-comments"></span>Comments 10</a></li>
                <li><a href="#"><span class="icon ti-lock"></span>Courier</a></li>
              </ul>
              <div class="text">Auisy nostrud exercitation ullamc laboris aliquip ex bea consequat duis autese dolore magna aliqua nim.</div>
              <a href="{{url('blog-detail')}}" class="btn btn-primary">Blog Details</a>
            </div>
          </div>
        </div>
      </div>      
    </div>
  </div>
  </div>
</section>
<!-- End  Blog Area -->

@endsection
