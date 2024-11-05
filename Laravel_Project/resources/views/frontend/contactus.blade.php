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
                  <input type="text" name="name" class="form-control" placeholder="Name" required>
                </div>
                <div class="col-md">
                  <input type="text" name="email" class="form-control" placeholder="Email" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md">
                  <input type="text" name="subject" class="form-control" placeholder="Subject" required>
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
                <textarea class="form-control" name="message" placeholder="Message" rows="4" required></textarea>
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
        <h2>Contact</h2>
        <ul>
          <li> <a href="{{url('index-2')}}">Home</a> </li>
          <li> <i class='ti-angle-right'></i> </li>
          <li>Contact</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End Page Title -->
  <!-- Start About Section -->
  <section class="contact-sec inner-content-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="contact-icon-box">
            <div class="contact-icon"> <i class="fa fa-phone"></i> </div>
            <div class="contact-body">
              <h5>Call Us</h5>
              <p>+012 4567-0125</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="contact-icon-box">
            <div class="contact-icon"> <i class="fa fa-envelope"></i> </div>
            <div class="contact-body">
              <h5>Email</h5>
              <p>test@test.com</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="contact-icon-box">
            <div class="contact-icon"> <i class="fa fa-phone"></i> </div>
            <div class="contact-body">
              <h5>Address</h5>
              <p>102/B, Street City, Yankee, New York, USA</p>
            </div>
          </div>
        </div>
      </div>  
      <div class="contact-form-wrap">
        <div class="row">
          <div class="col-md-12 col-lg-6 contact-image"> <img src="{{asset('frontend/images/contact-image.png')}}" alt="" class="img-fluid"> </div>
          <div class="col-md-12 col-lg-6">
          <form method="post" id="contactForm" action="{{route('contact.store')}}" enctype="multipart/form-data">
                              @csrf
              <div class="row">
                <div class="col-lg-6">
                  <div class="contact-form-group">
                    <input type="text" class="form-input" name="name" id="contactName" placeholder="Your Name *" autocomplete="off">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="contact-form-group">
                    <input type="text" class="form-input" name="email" id="contactEmail" placeholder="Your Email *" autocomplete="off">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="contact-form-group">
                    <input type="text" class="form-input" name="subject" id="contactSubject" placeholder="Subject *" autocomplete="off">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="contact-form-group">
                    <textarea name="message" id="contactMessage" class="form-input" placeholder="Your Message *"></textarea>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="contact-btn-left custom-form">
                    <button type="submit" id="contactBtn" class="bttn">Send Message</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>          
    </div>
  </section>
  <!-- End About Section --> 
  <!-- Start Quotation Area -->
  <section class="quotation-sec">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-8">
          <div class="sec-title">
            <h2><span>Get Quotation</span></h2>
            <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-9">
          <form id="contact-form">
            <div class="row clearfix">
              <div class="col-md-6 column">
                <div class="form-group">
                  <input type="text" name="form_name" class="form-control" value="" placeholder="Name" required>
                </div>
              </div>
              <div class="col-md-6 column">
                <div class="form-group">
                  <input type="email" name="form_email" class="form-control required email" value="" placeholder="Email" required>
                </div>
              </div>
              <div class="col-md-6 column">
                <div class="form-group">
                  <input type="text" name="form_phone" class="form-control" value="" placeholder="Phone">
                </div>
              </div>
              <div class="col-md-6 column">
                <div class="form-group">
                  <select class="form-control" id="courier-type-box">
                    <option>Standard</option>
                    <option>Express</option>
                    <option>International</option>
                    <option>Pallet</option>
                    <option>Ware Housing</option>
                  </select>
                </div>
              </div>
              <div class="col-md-12 column">
                <div class="form-group">
                  <textarea name="form_message" class="form-control textarea required" placeholder="Message..."></textarea>
                </div>
              </div>
            </div>
            <div class="contact-section-btn">
              <div class="form-group style-two mb-0">
                <button class="bttn" type="submit" data-loading-text="Please wait...">Send Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="shape_wrap">
      <div class="shape-top"> <img src="{{asset('frontend/images/wave-shape-top.png')}}" alt=""> </div>
      <div class="shape-bottom"> <img src="{{asset('frontend/images/wave-shape-bottom.png')}}" alt=""> </div>
    </div>
  </section>
  <!-- End Quotation Area --> 
  <!-- Start Pricing Area -->
  <section class="pricing-area pt-5">
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
            <div class="price-btn"> <a href="order-from.html">Buy now</a> </div>
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
            <div class="price-btn"> <a href="order-from.html">Buy now</a> </div>
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
            <div class="price-btn"> <a href="order-from.html">Buy now</a> </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection