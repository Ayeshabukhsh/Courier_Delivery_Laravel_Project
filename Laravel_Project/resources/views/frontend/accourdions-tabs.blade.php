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
        <h2>Courier Delivery Tabs</h2>
        <ul>
          <li> <a href="url{{('index-2')}}">Home</a> </li>
          <li> <i class='ti-angle-right'></i> </li>
          <li>Courier delivery tabs</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End Page Title -->

  <!-- Start  Section -->
  <section class="tabs-sec inner-content-wrapper text-center">
    <div class="container">
     <div class="row justify-content-center">
      <div class="col-xl-10">
    <h4 class="mb-4">Courier Delivery </h4>
    <!-- Bootstrap tabs-->
    <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1"> 
      <!-- Nav tabs-->
      <ul class="nav nav-tabs">
        <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1" data-toggle="tab"><span>Cargo Services</span></a></li>
        <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2" data-toggle="tab"><span>Cash On Delivery</span></a></li>
        <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3" data-toggle="tab"><span>Courier Services</span></a></li>
      </ul>
      <!-- Tab panes-->
      <div class="tab-content">
        <div class="tab-pane fade show active" id="tabs-1-1">
          <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page. It will tell you lots of interesting things about our company, its products and services, highly professional staff and happy customers. Our site design and navigation has been thoroughly thought out. The layout is aesthetically appealing, contains concise texts in order not to take your precious time. Text styling allows scanning the pages quickly.</p>
          <p>Site navigation is extremely intuitive and user-friendly. You will always know where you are now and will be able to skip from one page to another with a single mouse click. We use only trusted, verified content, so you can believe every word we are saying. We are always happy to greet the new visitors on our site.</p>
        </div>
        <div class="tab-pane fade" id="tabs-1-2">
          <p>The layout is aesthetically appealing, contains concise texts in order not to take your precious time. Text styling allows scanning the pages quickly. Site navigation is extremely intuitive and user-friendly. You will always know where you are now and will be able to skip from one page to another with a single mouse click.</p>
          <p>We use only trusted, verified content, so you can believe every word we are saying. We are always happy to greet the new visitors on our site. Our blog and social media accounts are available to encourage communication and connection between clients and personnel and tell you more about us in the informal environments where we can have a dialogue instead of just a narrative like that.  With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page. It will tell you lots of interesting things about our company, its products and services, highly professional staff and happy customers.</p>
        </div>
        <div class="tab-pane fade" id="tabs-1-3">
          <p>We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page. It will tell you lots of interesting things about our company, its products and services, highly professional staff and happy customers.</p>
          <p>Our site design and navigation has been thoroughly thought out. The layout is aesthetically appealing, contains concise texts in order not to take your precious time. Text styling allows scanning the pages quickly. Site navigation is extremely intuitive and user-friendly. You will always know where you are now and will be able to skip from one page to another with a single mouse click. We use only trusted, verified content, so you can believe every word we are saying. We are always happy to greet the new visitors on our site. Our blog and social media accounts are available to encourage communication and connection between clients and personnel and tell you more about us.</p>
        </div>
        <div class="tab-pane fade" id="tabs-1-4">
          <p>Our site design and navigation has been thoroughly thought out. The layout is aesthetically appealing, contains concise texts in order not to take your precious time. Text styling allows scanning the pages quickly. Site navigation is extremely intuitive and user-friendly.</p>
          <p>You will always know where you are now and will be able to skip from one page to another with a single mouse click. We use only trusted, verified content, so you can believe every word we are saying. We are always happy to greet the new visitors on our site. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page. It will tell you lots of interesting things about our company, its products and services, highly professional staff and happy customers. You will always know where you are now and will be able to skip from one page to another with a single mouse click. We use only trusted, verified content, so you can believe every word we are saying. We are always happy to greet the new visitors on our site.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row justify-content-center mt-5">
      <div class="col-xl-11">
        <h4 class="mb-4">HOW TO AVOID RTO?</h4>
          <!-- Bootstrap tabs-->
  <div class="tabs-custom tabs-vertical tabs-line" id="tabs-2"> 
    <!-- Nav tabs-->
    <ul class="nav nav-tabs">
      <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-2-1" data-toggle="tab"><span>1. Customer Feedback</span></a></li>
      <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-2-2" data-toggle="tab"><span>2. Monitor Product Quality</span></a></li>
      <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-2-3" data-toggle="tab"><span>3. Avoid Shipping Damage</span></a></li>
      <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-2-4" data-toggle="tab"><span>4. No Bad Packaging</span></a></li>
    </ul>
    <!-- Tab panes-->
    <div class="tab-content">
      <div class="tab-pane fade show active" id="tabs-2-1">
        <p>Keep up with customers’ feedback to understand the problems they face. It is important to understand your shortcomings and your customers’ expectations of you. Customer satisfaction is the most essential part of the business that helps you seal the deal, so you must make it your first priority..Many times, the package is returned because it is delivered in bad shape. No matter how excellent the quality of your product is, if there is shipping damage, it will be returned. That’s why you must expand your means to avoid this issue.</p>
        <p>Your product has to make a good first impression, so presentation counts a lot in this regard. Poor packaging makes a very bad impact on your customers. So, make your products presentable to meet your customers’ expectations.</p>
      </div>
      <div class="tab-pane fade" id="tabs-2-2">
        <p>One of the main factors of products return is a bad quality that does not meet their expectations. Therefore, your main focus should be the improvement of your quality especially if you are forwarding the returned package to another customer. You can do this by making the list of products with the highest RTOs and looking into the problems and customer feedback on them..Many times, the package is returned because it is delivered in bad shape. No matter how excellent the quality of your product is, if there is shipping damage, it will be returned. That’s why you must expand your means to avoid this issue.</p>
        <p>Your product has to make a good first impression, so presentation counts a lot in this regard. Poor packaging makes a very bad impact on your customers. So, make your products presentable to meet your customers’ expectations.</p>
      </div>
      <div class="tab-pane fade" id="tabs-2-3">
        <p>We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page. It will tell you lots of interesting things about our company, its products and services, highly professional staff and happy customers.Many times, the package is returned because it is delivered in bad shape. No matter how excellent the quality of your product is, if there is shipping damage, it will be returned. That’s why you must expand your means to avoid this issue.</p>
        <p>Your product has to make a good first impression, so presentation counts a lot in this regard. Poor packaging makes a very bad impact on your customers. So, make your products presentable to meet your customers’ expectations.</p>
      </div>
      <div class="tab-pane fade" id="tabs-2-4">
        <p>Many times, the package is returned because it is delivered in bad shape. No matter how excellent the quality of your product is, if there is shipping damage, it will be returned. That’s why you must expand your means to avoid this issue.Many times, the package is returned because it is delivered in bad shape. No matter how excellent the quality of your product is, if there is shipping damage, it will be returned. That’s why you must expand your means to avoid this issue.</p>
      <p>Your product has to make a good first impression, so presentation counts a lot in this regard. Poor packaging makes a very bad impact on your customers. So, make your products presentable to meet your customers’ expectations.</p>      </div>
      
    </div>
  </div>
      </div>
</div>
  <div class="row justify-content-center mt-5">
  <div class="col-lg-9 col-xl-8">
    <h4 class="mb-4">Classic Services System</h4>
    <!-- Bootstrap Collapse-->
<div class="card-group-custom card-group-classic" id="accordion1" role="tablist" aria-multiselectable="false"> 
  <!-- Bootstrap card-->
  <article class="card card-custom card-classic">
    <div class="card-header" id="accordion1-heading-1" role="tab">
      <div class="card-title"><a class="card-link" role="button" data-toggle="collapse" href="#accordion1-collapse-1" aria-controls="accordion1-collapse-1" aria-expanded="true">What are the advantages of RTO?
        <div class="card-arrow"></div>
        </a></div>
    </div>
    <div class="collapse show" id="accordion1-collapse-1" role="tabpanel" aria-labelledby="accordion1-heading-1" data-parent="#accordion1">
      <div class="card-body">
        <p>The major advantage is Real-time operating systems (RTOS) are used in environments where a large number of events, mostly external to the computer system, must be accepted and processed in a short time or within certain deadlines. such applications are industrial control, telephone switching equipment, flight control, and real-time simulations.</p>
      </div>
    </div>
  </article>
  <!-- Bootstrap card-->
  <article class="card card-custom card-classic">
    <div class="card-header" id="accordion1-heading-2" role="tab">
      <div class="card-title"><a class="card-link collapsed" role="button" data-toggle="collapse" href="#accordion1-collapse-2" aria-controls="accordion1-collapse-2" aria-expanded="false">How would you handle a delivery where the client is not available and you require a signature to deliver the package?
        <div class="card-arrow"></div>
        </a></div>
    </div>
    <div class="collapse" id="accordion1-collapse-2" role="tabpanel" aria-labelledby="accordion1-heading-2" data-parent="#accordion1">
      <div class="card-body">
        <p>The candidate’s response to this question tells you how much they care about following procedure. Though the driver may not be aware of your exact rules for this situation yet, you definitely do not want someone who would just deliver the package anyway. How the driver answers can also let you know if they are patient or if they plan to leave if no one answers the door immediately.</p>
      </div>
    </div>
  </article>
  <!-- Bootstrap card-->
  <article class="card card-custom card-classic">
    <div class="card-header" id="accordion1-heading-3" role="tab">
      <div class="card-title"><a class="card-link collapsed" role="button" data-toggle="collapse" href="#accordion1-collapse-3" aria-controls="accordion1-collapse-3" aria-expanded="false">Can you give me an example of when you have needed to use time-management skills to complete a delivery?
        <div class="card-arrow"></div>
        </a></div>
    </div>
    <div class="collapse" id="accordion1-collapse-3" role="tabpanel" aria-labelledby="accordion1-heading-3" data-parent="#accordion1">
      <div class="card-body">
        <p>Any delivery driver needs excellent time-management skills, and this question should help you to see how they actually strategize on the job. Getting them to describe a situation where they had to properly budget their time and get tasks done within a certain time limit lets you see if the driver could handle the pressures that may come due to traffic, late deliveries or other issues.
</p>
      </div>
    </div>
  </article>
  <!-- Bootstrap card-->
  <article class="card card-custom card-classic">
    <div class="card-header" id="accordion1-heading-4" role="tab">
      <div class="card-title"><a class="card-link collapsed" role="button" data-toggle="collapse" href="#accordion1-collapse-4" aria-controls="accordion1-collapse-4" aria-expanded="false">ow do you ensure scheduled deliveries arrive on time?
        <div class="card-arrow"></div>
        </a></div>
    </div>
    <div class="collapse" id="accordion1-collapse-4" role="tabpanel" aria-labelledby="accordion1-heading-4" data-parent="#accordion1">
      <div class="card-body">
        <p>Delivery drivers may have to deal with deliveries as they come in while also planning for deliveries that a customer scheduled ahead of time. Good delivery drivers know how to organize their day and anticipate challenges to complete all deliveries according to the agreed upon schedule. Interviewers can use this question to assess how a delivery driver candidate prioritizes their tasks, communicates with their team and stays organized when managing a high volume of deliveries.</p>
      </div>
    </div>
  </article>
  <!-- Bootstrap card-->
  <article class="card card-custom card-classic">
    <div class="card-header" id="accordion1-heading-5" role="tab">
      <div class="card-title"><a class="card-link collapsed" role="button" data-toggle="collapse" href="#accordion1-collapse-5" aria-controls="accordion1-collapse-5" aria-expanded="false">Why do you want to work for our organization as a delivery driver?
        <div class="card-arrow"></div>
        </a></div>
    </div>
    <div class="collapse" id="accordion1-collapse-5" role="tabpanel" aria-labelledby="accordion1-heading-5" data-parent="#accordion1">
      <div class="card-body">
        <p>This standard interview question tells you a lot about the driver’s priorities and focus. They should have researched your company enough to get some reasons for why they chose you over other companies. How the driver decides to answer this question lets you know whether they can phrase things discreetly, so it can help you see how they would react in a tricky customer service situation where they need to be polite.</p>
      </div>
    </div>
  </article>
    <!-- Bootstrap card-->
    <article class="card card-custom card-classic">
    <div class="card-header" id="accordion1-heading-7" role="tab">
      <div class="card-title"><a class="card-link collapsed" role="button" data-toggle="collapse" href="#accordion1-collapse-7" aria-controls="accordion1-collapse-7" aria-expanded="false">How can I pay for my order?
        <div class="card-arrow"></div>
        </a></div>
    </div>
    <div class="collapse" id="accordion1-collapse-7" role="tabpanel" aria-labelledby="accordion1-heading-7" data-parent="#accordion1">
      <div class="card-body">
        <p>We accept Visa, MasterCard, and American Express credit and debit cards for your convenience.</p>
      </div>
    </div>
  </article>
  <!-- Bootstrap card-->
  <article class="card card-custom card-classic">
    <div class="card-header" id="accordion1-heading-6" role="tab">
      <div class="card-title"><a class="card-link collapsed" role="button" data-toggle="collapse" href="#accordion1-collapse-6" aria-controls="accordion1-collapse-6" aria-expanded="false">Why do you want to work for our organization as a delivery driver?
        <div class="card-arrow"></div>
        </a></div>
    </div>
    <div class="collapse" id="accordion1-collapse-6" role="tabpanel" aria-labelledby="accordion1-heading-6" data-parent="#accordion1">
      <div class="card-body">
        <p>This standard interview question tells you a lot about the driver’s priorities and focus. They should have researched your company enough to get some reasons for why they chose you over other companies. How the driver decides to answer this question lets you know whether they can phrase things discreetly, so it can help you see how they would react in a tricky customer service situation where they need to be polite.</p>
      </div>
    </div>
  </article>

</div>
  </div>
    </div>
  </div>
  </section>
  <!-- End  Section --> 

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
@endsection