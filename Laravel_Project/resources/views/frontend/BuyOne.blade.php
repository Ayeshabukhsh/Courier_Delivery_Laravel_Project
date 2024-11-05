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
        <h2>Courier Delivery Services</h2>
        <ul>
          <li> <a href="{{url('index-2')}}">Home</a> </li>
          <li> <i class='ti-angle-right'></i> </li>
          <li>Courier delivery details</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End Page Title -->
 
    </section>
    <section id="cod-services">
        <div class="container">
            <div class="row servicesmain">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <h1><center>Courier Delivery Service Details<center> </h1>
                        <!-- <h2 class="account-heading text-center">Courier Delivery Services</h2> -->
                        <p class="forrun-para text-center">Courier managment system provides the best courier services in Pakistan. With our highly efficient and fast services, we deliver your important packages to your specific destinations safely and on time. We cater to Pakistan’s top companies including the K-Electric, Sui Southern Gas Company, Karachi Stock Exchange as well as banks and other local and international businesses.  </p>
                    </div>

                    <div class="row servicesmain">
                        <div class="col-md-12">
                            <img src="{{asset('frontend/images/best-courier-service.jpg')}}" class="img-responsive service-sec-images">
                            <h2 class="account-heading text-center">Best Courier Service in Pakistan</h2>
                            <p class="forrun-para text-center">We are one of Pakistan’s lowest-rate courier services. We never take our customers for granted and do our best to deliver your products and packages to your required places well on time. We are one of the few courier companies in Pakistan that offers top-quality services in Karachi, Lahore, and Islamabad.</p>

                        </div>
                    </div>
                    <div class="row servicesmain">
                        <div class="col-md-12">
                            <img src="{{asset('frontend/images/Affordable-Parcel.jpg')}}" class="img-responsive service-sec-images">
                            <h2 class="account-heading text-center">Affordable Parcel Delivery in Pakistan</h2>
                            <p class="forrun-para text-center">Among a number of courier companies in Pakistan, Forrun is the only low-cost courier service around. You can trust our services for fast, secure, and timely delivery of your documents and packages. We assure you we will never let you down!
                                <br/><br/>
                                Sending and receiving your important documents and packages has never been this seamless and easy!
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{asset('frontend/images/same-day-delivery.jpg')}}" class="img-responsive cargo-serv-image wow flipInY  animated" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: flipInY;">
                            <h2 class="service-heading">Same Day Delivery Courier Services</h2>
                            <p class="service-cargo-para">Looking for a low-cost and fast courier service? Look no further as we provide ‘same day’ courier service within the same city without any hassle. So, rely on us and experience the difference!</p>
                        </div>
                        <div class="col-md-6">
                            <img src="{{asset('frontend/images/we-offer-fast.jpg')}}" class="img-responsive cargo-serv-image wow flipInY  animated" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: flipInY;">
                            <h2 class="service-heading">We offer Fast & Safe Courier Solutions</h2>
                            <p class="service-cargo-para">We are the only go-to courier company when it comes to delivering your documents and packages seamlessly and well on time.</p>
                        </div>
                    </div>

                   
                </div>
            </div>
        </div>

    </section>

    
  <!--Shipping section start-->
  <h2 class="account-heading text-center">More Than Shipping</h2>
    <p class="forrun-para text-center">We are not a run-of-the-mill shipment courier company. We are the first choice of customers for our diverse portfolio of transportation, e-commerce, and business solutions.</p>
             </div>
 </div>
 <div class="row">
        <div class="col-md-4">
         <a href="{{url('courier')}}" target="_blank">
             <img src="{{asset('frontend/images/cash-on-delivery.jpg')}}" alt="Cash on Delivery" class="img-responsive cargo-serv-image wow flipInY  animated" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: flipInY;">
                <h2 class="service-heading text-center">Cash On Delivery</h2>
                     </a>
                     <p class="service-cargo-para">We are committed to serving customers by providing On-Demand Services from pickup to delivery.</p>
                     </div>
                    <div class="col-md-4">
                                        <a href="courier-services.html" target="_blank">
                                            <img src="{{asset('frontend/images/courier.jpg')}}" alt="Courier Delivery Service" class="img-responsive cargo-serv-image wow flipInY  animated" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: flipInY;">
                                            <h2 class="service-heading text-center">Courier</h2>
                                        </a>
                                        <p class="service-cargo-para">No one delivers your important documents and packages as we do—guaranteed!</p>
                                    </div>
                               
                                    <div class="col-md-4">
                                        <a href="cargo-delivery-service.html" target="_blank">
                                            <img src="{{asset('frontend/images/cargo.jpg')}}" alt="Cargo Delivery Service" class="img-responsive cargo-serv-image wow flipInY  animated" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: flipInY;">
                                            <h2 class="service-heading text-center">Cargo</h2>
                                        </a>
                                        <p class="service-cargo-para">We offer highly professional and reliable cargo services that you can count on!</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection