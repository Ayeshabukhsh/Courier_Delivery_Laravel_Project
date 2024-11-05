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
        <h2>Services Details</h2>
        <ul>
          <li> <a href="{{url('index-2')}}">Home</a> </li>
          <li> <i class='ti-angle-right'></i> </li>
          <li>Services details</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End Page Title -->
  <!-- Start About Section -->
  <section class="service-details-section inner-content-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="service-list">
            <h5>Service Lists</h5>
            <a href="#">Standard Courier<span><i class="fa fa-long-arrow-right"></i></span></a> <a href="#">Door To Door<span><i class="fa fa-long-arrow-right"></i></span></a> <a class="active" href="#">Express Courier<span><i class="fa fa-long-arrow-right"></i></span></a> <a href="#">Pallet Courier<span><i class="fa fa-long-arrow-right"></i></span></a> <a href="#">Ware House<span><i class="fa fa-long-arrow-right"></i></span></a> </div>
          <div class="question-section">
            <h6>Have any Question?</h6>
            <form action="http://sbtechnosoft.com/transcrew/sendemail.php">
              <input type="text" name="name" id="name" required placeholder="Full Name">
              <input type="email" name="email" id="email" required placeholder="Your E-mail">
              <textarea name="message" id="message" cols="30" rows="10" required placeholder="How can help you?"></textarea>
              <button class="btn btn-primary" type="submit">Your Question</button>
            </form>
          </div>
          <div class="helpline-section">
            <div class="helpline-content text-center">
              <h4>Need Consultancy Help</h4>
              <p>Gatherin galso sprit moving shall flow</p>
              <a href="contact.html" class="btn btn-primary">Contact Us</a>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="single-service"> <img src="{{asset('Frontend/images/service-img-big.jpg')}}" alt="">
            <h2>Express Courier</h2>
            <p>Air Frieght is express courier lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga sunt necessitatibus,
              fugit, nesciunt adipisci, exercitationem accusamus possimus repellendus praesentium deleniti
              explicabo laborum. Voluptates ipsa dignissimos blanditiis quibusdam temporibus cupiditate
              tempore atque illum sed? Doloribus recusandae pariatur architecto quisquam magni ipsam
              sapiente adipisci iusto odio eaque, hic repellat quis expedita perferendis? A quick brwon fox jumps over the lazy dog.</p>
            <p>Great Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt molestias, dolores
              maiores est temporibus iste aut, vitae dolorem a nisi, autem eum totam neque quibusdam!</p>
            <hr>
            <h5>Transforming brands with creativity</h5>
            <p>Such a game Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia vero ipsam nemo
              natus, mollitia adipisci sit eveniet non? Nisi doloremque molestiae amet quaerat ipsa
              maiores dolor deleniti blanditiis pariatur necessitatibus sit nemo, unde nihil eligendi
              soluta id eum dicta quisquam? a quick brown fox jumps over the lazy dog.</p>
            <div class="row">
              <div class="col-lg-6">
                <div class="single-service-bg"> <img src="{{asset('Frontend/images/service-details-img1.jpg')}}" alt=""> </div>
              </div>
              <div class="col-lg-6">
                <div class="single-service-bg"> <img src="{{asset('Frontend/images/service-details-img2.jpg')}}" alt=""> </div>
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