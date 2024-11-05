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
        <h2>Courier Delivery Details</h2>
        <ul>
          <li> <a href="{{url('index-2')}}">Home</a> </li>
          <li> <i class='ti-angle-right'></i> </li>
          <li>Courier delivery details</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End Page Title -->
  <!-- Start About Section -->
  <section class="grid-sec inner-content-wrapper ">
    <div class="container-fullwidth grid-system-outline grid-demonstration">
        <h4 class="text-center"></h4>
        <div class="row row-no-gutter">
          <div class="col-12">
            <h4><b><center>Courier Delivery System</b></center></h4>
            <p>The first round of stock made available to the public by a startup is referred to as Series A preferred stock. This type of stock is generally offered for purchase during the seed stage of a new startup and can be converted into common stock in the event of an initial public offering or sale of the company.
            Parcel delivery is a transport service that moves parcels or goods from the sender to the recipient within a short period of time. It requires the carrier to make at least one stop at a platform for the goods to be sorted before being delivered..
            from the sParcel delivery is a transport service that moves parcels or goodsender to the recipient within a short period of time. It requires the carrier to make at least one stop at a platform for the goods to be sorted before being delivered. 
            The first round of stock made available to the public by a startup is referred to as Series A preferred stock. This type of stock is generally offered for purchase during the seed stage of a new startup and can be converted into common stock in the event of an initial public offering or sale of the company.
            Parcel delivery is a transport service that moves parcels or goods from the sender to the recipient within a short period of time. It requires the carrier to make at least one stop at a platform for the goods to be sorted before being delivered..
            from the sParcel delivery is a transport service that moves parcels or goodsender to the recipient within a short period of time. It requires the carrier to make at least one stop at a platform for the goods to be sorted before being delivered.</p>
          </div>
        </div>
        <div class="row row-no-gutter">
          <div class="col-6">
            <h3>Courier Tracking</h3>
            <p>In simple terms, tracking a package or courier involves the process of localizing packages and containers, and different parcels at the time of sorting and delivery. This helps to verify their movement and source, and have an estimate of the final delivery.
            Buy an envelope from the post office and inserting the letter inside the envelope, paste it and write 'speed post' at the top. Step 2: Mention the receiver's name, postal address and phone number on the left side of the envelope
            </p>
          </div>
          <div class="col-6">
            <h3>Deliver of Courier</h3>
            <p> Buy an envelope from the post office and inserting the letter inside the envelope, paste it and write 'speed post' at the top. Step 2: Mention the receiver's name, postal address and phone number on the left side of the envelope.
            In simple terms, tracking a package or courier involves the process of localizing packages and containers, and different parcels at the time of sorting and delivery. This helps to verify their movement and source, and have an estimate of the final delivery.
</p>
          </div>
        </div>
        
  </section>
  
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
            </div>
          </div>
        </div>
      </div>      
    </div>
  </div>
  </div>
</section>
<!-- End  Blog Area --> 
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
      <div class="shape-top"> <img src="{{asset('Frontend/images/wave-shape-top.png')}}" alt=""> </div>
      <div class="shape-bottom"> <img src="{{asset('Frontend/images/wave-shape-bottom.png')}}" alt=""> </div>
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
  <!-- Start Services Area --> 
  @endsection