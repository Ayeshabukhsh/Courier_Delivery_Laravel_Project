
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
        <h2>Blog Details</h2>
        <ul>
          <li> <a href="{{('index-2')}}">Home</a> </li>
          <li> <i class='ti-angle-right'></i> </li>
          <li>Blog details</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End Page Title -->
<!-- Start About Section -->
  <section class="blog-sec blog-single-section inner-content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
              <div class="blog-single-inner">
                <div class="blog-single-inner-img"> <img src="{{asset('Frontend/images/service-img-big.jpg')}}" alt=""></div>
                <h2 class="blog-single-title">WordPress Plugin Development From Scratch Part-1</h2>
                <div class="blog-meta"> <span><i class="far fa-user"></i>By Admin</span> <span><i class="far fa-clock"></i>April 10, 2018</span> </div>
                <p class="blog-inner-text"> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                <p class="blog-inner-text mb-0"> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. Various versions have evolved over the years, sometimes by accident. </p>
                <div class="blog-post-quote">
                  <blockquote>
                    <p> “It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.” <strong>- Mr.George William</strong> </p>
                  </blockquote>
                </div>
                <p class="blog-inner-text"> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. Various versions have evolved over the years, sometimes by accident. </p>
              </div>
              <div class="comment-block-mt">
                <h5 class="inner-header-title">Comments <span>(03)</span></h5>
                <div class="comments-wrap">
                  <div class="comments-item-wrap">
                    <div class="comments-item"> <img class="img-fluid" src="{{asset('Frontend/images/comment-img-1.png')}}" alt="">
                      <div class="media-body">
                        <div class="comment-header">
                          <h6>Eduardo Dutra</h6>
                          <a href="#" class="comments-reply-btn"><i class="fa fa-reply"></i>Reply</a> </div>
                        <p> It is a long established fact that a reader will be 
                          distracted by the readable content of a page when looking at its layout. </p>
                      </div>
                    </div>
                    <div class="comments-item sub-comment"> <img class="img-fluid" src="{{asset('Frontend/images/comment-img-2.png')}}" alt="">
                      <div class="comment-body">
                        <div class="comment-header">
                          <h6>Andrea Williams</h6>
                          <a href="#" class="comments-reply-btn"><i class="fa fa-reply"></i>Reply</a> </div>
                        <p> It is a long established fact that a reader will be 
                          distracted by the readable content of a page when looking at its layout. </p>
                      </div>
                    </div>
                  </div>
                  <div class="comments-item-wrap">
                    <div class="comments-item"> <img class="img-fluid" src="{{asset('Frontend/images/comment-img-3.png')}}" alt="">
                      <div class="media-body">
                        <div class="comment-header">
                          <h6>Robert Allias</h6>
                          <a href="#" class="comments-reply-btn"><i class="fa fa-reply"></i>Reply</a> </div>
                        <p> It is a long established fact that a reader will be 
                          distracted by the readable content of a page when looking at its layout. </p>
                      </div>
                    </div>
                  </div>
                  <div class="comments-item-wrap">
                    <div class="comments-item"> <img class="img-fluid" src="{{asset('Frontend/images/comment-img-1.png')}}" alt="">
                      <div class="media-body">
                        <div class="comment-header">
                          <h6>Patrick Fereira</h6>
                          <a href="#" class="comments-reply-btn"><i class="fa fa-reply"></i>Reply</a> </div>
                        <p> It is a long established fact that a reader will be 
                          distracted by the readable content of a page when looking at its layout. </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="leave-comment-wrapper comment-block-mt">
                <h5 class="inner-header-title">Leave A Comment</h5>
                <form action="http://sbtechnosoft.com/transcrew/portfolio-details.html" method="post">
                  <div class="row">
                    <div class="comment-form-group col-md-12">
                      <input type="text" class="comment-form-control" placeholder="Your Name *" required>
                    </div>
                    <div class="comment-form-group col-md-12">
                      <textarea class="comment-form-control text-area" name="message" cols="30" rows="5" placeholder="Your Comment *"></textarea>
                    </div>
                    <div class="comment-form-group mb-0 col-md-12">
                      <button type="submit" class="bttn">Send Message</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="blog-sidebar">
                <div class="blog-widgets">
                  <h5 class="inner-header-title">Search</h5>
                  <form action="http://sbtechnosoft.com/transcrew/index.html" method="post">
                    <div class="blog-search-bar position-relative">
                      <input type="text" required placeholder="Type Here *" class="search-form-control">
                      <button class="blog-search-btn"><span class="fa fa-search"></span></button>
                    </div>
                  </form>
                </div>
                <div class="blog-widgets">
                  <h5 class="inner-header-title">Category</h5>
                  <ul class="blog-category-list clearfix">
                    <li> <a href="#" class="active">WordPress<span class="category-count">(10)</span></a> </li>
                    <li> <a href="#">Php<span class="category-count">(18)</span></a> </li>
                    <li> <a href="#">Javascript<span class="category-count">(5)</span></a> </li>
                    <li> <a href="#">Python<span class="category-count">(22)</span></a> </li>
                    <li> <a href="#">JQuery<span class="category-count">(19)</span></a> </li>
                  </ul>
                </div>
                <div class="blog-widgets">
                  <h5 class="inner-header-title">Recent Post</h5>
                  <div class="recent-post-item clearfix">
                    <div class="recent-post-img mr-3"> <a href="#"> <img class="img-fluid" src="{{asset('Frontend/images/recent-blog1.jpg')}}" alt=""> </a> </div>
                    <div class="recent-post-body"> <a href="blog-single.html">
                      <h6 class="recent-post-title">Free Ui Design & Icon Packs.</h6>
                      </a>
                      <p class="recent-post-date"><i class="far fa-clock"></i>April 10, 2019</p>
                    </div>
                  </div>
                  <div class="recent-post-item clearfix">
                    <div class="recent-post-img mr-3"> <a href="#"> <img class="img-fluid" src="{{asset('Frontend/images/recent-blog2.jpg')}}" alt=""> </a> </div>
                    <div class="recent-post-body"> <a href="blog-single.html">
                      <h6 class="recent-post-title">Best JQuery Slider Plugins.</h6>
                      </a>
                      <p class="recent-post-date"><i class="far fa-clock"></i>June 10, 2019</p>
                    </div>
                  </div>
                  <div class="recent-post-item clearfix">
                    <div class="recent-post-img mr-3"> <a href="#"> <img class="img-fluid" src="{{asset('Frontend/images/recent-blog3.jpg')}}" alt=""> </a> </div>
                    <div class="recent-post-body"> <a href="blog-single.html">
                      <h6 class="recent-post-title">Program Bug Solutions.</h6>
                      </a> <span class="recent-post-date"><i class="far fa-clock"></i>March 10, 2019</span> </div>
                  </div>
                </div>
                <div class="blog-widgets tag-widgets">
                  <h5 class="inner-header-title">Tags</h5>
                  <ul class="blog-tags clearfix">
                    <li> <a href="javascript:void(0)" class="active">Express</a> </li>
                    <li> <a href="javascript:void(0)">Courier</a> </li>
                    <li> <a href="javascript:void(0)">Delivery</a> </li>
                    <li> <a href="javascript:void(0)">Mover</a> </li>
                    <li> <a href="javascript:void(0)">JQuery</a> </li>
                    <li> <a href="javascript:void(0)">Logistic</a> </li>
                    <li> <a href="javascript:void(0)">Packaging</a> </li>
                    <li> <a href="javascript:void(0)">Transport</a> </li>
                  </ul>
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