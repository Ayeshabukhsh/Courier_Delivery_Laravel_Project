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
        <h2>FAQs</h2>
        <ul>
          <li> <a href="{{url('index-2')}}">Home</a> </li>
          <li> <i class='ti-angle-right'></i> </li>
          <li>Faqs</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End Page Title -->
  <!-- Start About Section -->
  <section class="faq-sec inner-content-wrapper">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <div id="accordion">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0"> <a href="#" class="btn btn-link" data-toggle="collapse"
                                                          data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> How to you recruit your Virtaual Assistants ? <i class="fa fa-plus"></i> </a> </h5>
              </div>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                                  data-parent="#accordion">
                <div class="card-body"> We cover multiple areas mainly involving Family Law, Child Law, Emergency
                  Emergency Law and Business
                  Law.The complete list of all the practice areas can be found on this website. </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0"> <a href="#" class="btn btn-link collapsed" data-toggle="collaps data-target="#collapseTwo" aria-expanded="false"
                 aria-controls="collapseTwo"> How can we track progress? <i class="fa fa-plus"></i> </a> </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body"> We cover multiple areas mainly involving Family Law, Child Law, Emergency
                  Emergency Law and Business
                  Law.The complete list of all the practice areas can be found on this website. </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0"> <a href="#" class="btn btn-link collapsed" data-toggle="collapse"  data-target="#collapseThree" aria-expanded="false"
               aria-controls="collapseThree"> Do you offer any progress reports? <i class="fa fa-plus"></i> </a> </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree"  data-parent="#accordion">
                <div class="card-body"> We cover multiple areas mainly involving Family Law, Child Law, Emergency
                  Emergency Law and Business
                  Law.The complete list of all the practice areas can be found on this website. </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingFour">
                <h5 class="mb-0"> <a href="#" class="btn btn-link collapsed" data-toggle="collapse"  data-target="#collapseFour" aria-expanded="false"
            aria-controls="collapseFour"> Who should be contact in case of any complains? <i class="fa fa-plus"></i> </a> </h5>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                <div class="card-body"> We cover multiple areas mainly involving Family Law, Child Law, Emergency
                  Emergency Law and Business
                  Law.The complete list of all the practice areas can be found on this website. </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingFive">
                <h5 class="mb-0"> <a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false"
             aria-controls="collapseFive"> What are you refend policy? <i class="fa fa-plus"></i> </a> </h5>
              </div>
              <div id="collapseFive" class="collapse" aria-labelledby="headingFive"data-parent="#accordion">
                <div class="card-body"> We cover multiple areas mainly involving Family Law, Child Law, Emergency
                  Emergency Law and Business
                  Law.The complete list of all the practice areas can be found on this website. </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingSix">
                <h5 class="mb-0"> <a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false"
                aria-controls="collapseSix"> Do you have dedicated support staff? <i class="fa fa-plus"></i> </a> </h5>
              </div>
              <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                <div class="card-body"> We cover multiple areas mainly involving Family Law, Child Law, Emergency
                  Emergency Law and Business
                  Law.The complete list of all the practice areas can be found on this website. </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingSeven">
                <h5 class="mb-0"> <a href="#" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false"
              aria-controls="collapseSeven"> I am small business. Do i need a VA? <i class="fa fa-plus"></i> </a> </h5>
              </div>
              <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                <div class="card-body"> We cover multiple areas mainly involving Family Law, Child Law, Emergency
                  Emergency Law and Business
                  Law.The complete list of all the practice areas can be found on this website. </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingEight">
                <h5 class="mb-0"> <a href="#" class="btn btn-link collapsed" data-toggle="collapse"  data-target="#collapseEight" aria-expanded="false"
               aria-controls="collapseEight"> Do you have custom packages available? <i class="fa fa-plus"></i> </a> </h5>
              </div>
              <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                <div class="card-body"> We cover multiple areas mainly involving Family Law, Child Law, Emergency
                  Emergency Law and Business
                  Law.The complete list of all the practice areas can be found on this website. </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingNine">
                <h5 class="mb-0"> <a href="#" class="btn btn-link collapsed" data-toggle="collapse"  data-target="#collapseNine" aria-expanded="false"
             aria-controls="collapseNine"> Which payment methods to you accept? <i class="fa fa-plus"></i> </a> </h5>
              </div>
              <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                <div class="card-body"> We cover multiple areas mainly involving Family Law, Child Law, Emergency
                  Emergency Law and Business
                  Law.The complete list of all the practice areas can be found on this website. </div>
              </div>
            </div>
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