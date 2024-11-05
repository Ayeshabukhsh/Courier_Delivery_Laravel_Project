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
        <h2>Services Typography</h2>
        <ul>
          <li> <a href="{{url('index-2')}}">Home</a> </li>
          <li> <i class='ti-angle-right'></i> </li>
          <li>Services typography</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End Page Title -->
  <!-- Start About Section -->
  <section class="typography-sec inner-content-wrapper ">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-9 col-xl-8">
          <ul class="list-xl">
            <li>
              <h3>Stock Services</h3>
              <p>The first round of stock made available to the public by a startup is referred to as Series A preferred stock. This type of stock is generally offered for purchase during the seed stage of a new startup and can be converted into common stock in the event of an initial public offering or sale of the company.</p>
            </li>
            <li>
              <h3>Parcel Services. </h3>
              <p>Parcel delivery is a transport service that moves parcels or goods from the sender to the recipient within a short period of time. It requires the carrier to make at least one stop at a platform for the goods to be sorted before being delivered..</p>
            </li>
            <li>
              <h3>Same-day Services</h3>
              <p>Typically, a delivery driver would give the customer their goods the same day the order was placed. But that's not always possible. To get same-day delivery, customers must place their order before the cutoff time for that service, so the business has time to process, fulfill, and deliver</p>
            </li>
            <li>
              <h3>Express Service.</h3>
              <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
            </li>
            <li>
              <h3>On-demand Services</h3>
              <p> from the sParcel delivery is a transport service that moves parcels or goodsender to the recipient within a short period of time. It requires the carrier to make at least one stop at a platform for the goods to be sorted before being delivered.</p>
            </li>
            <li>
              <h3>Standard Service</h3>
              <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container">
      <h4><center><b><u>Courier Managment System</u></b></center></h4>
      <p class="text-block">
        <mark>This is a highlighted text</mark>
        <span class="text-strike">Courier management is the process of organizing last-mile delivery operations. Courier management involves scheduling order deliveries and assigning them to couriers, overseeing operations, planning and optimizing routes, overseeing vehicles, managing fuel, and handling courier expense approval</span><span class="text-underline">In simple terms, tracking a package or courier involves the process of localizing packages and containers, and different parcels at the time of sorting and delivery. This helps to verify their movement and source, and have an estimate of the final delivery.</span></p>
    </div>

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
            <a class="thm-btn" href="#">Read More</a> </div>
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
            <a class="thm-btn" href="#">Read More</a> </div>
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
            <a class="thm-btn" href="#">Read More</a> </div>
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
            <a class="thm-btn" href="#">Read More</a> </div>
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
            <a class="thm-btn" href="#">Read More</a> </div>
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
            <a class="thm-btn" href="#">Read More</a> </div>
        </div>        
    </div>
  </div>
  </div>
  </section>
<!-- End Services Area -->
<
  
  @endsection