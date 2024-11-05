@extends('frontend.frontlayout.main')
@section('main-content')
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
        <h2>Contact Us All View Details</h2>
        <ul>
          <li> <a href="url{{('index-2')}}">Home</a> </li>
          <li> <i class='ti-angle-right'></i> </li>
          <li>Contact us all view details</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End Page Title -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
        <div class="card">
                <div class="card-header">
                   <h3><center><b>Contact Details</b></center></h3>
                </div>
                <div class="card-body">
                <table class="table">
                    <tr>
                        <td>Id</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Subject</td>
                        <td>Message</td>
                    </tr>
                    @foreach($contact as $item)
         <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->subject}}</td>
            <td>{{$item->message}}</td>
           
</tr>
@endforeach
</table>            
</div>
</div>
</div>
</div>
</div>
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