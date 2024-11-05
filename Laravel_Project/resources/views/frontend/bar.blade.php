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
        <h2>Courier Bar Progress</h2>
        <ul>
          <li> <a href="{{url('index-2')}}">Home</a> </li>
          <li> <i class='ti-angle-right'></i> </li>
          <li>Courier bar progress</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End Page Title -->
  <!-- Start About Section -->
  <section class="progress-bar-sec inner-content-wrapper ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="box">
                  <div class="box-header with-border">
                    <h4 class="box-title">Progress Bars Different Sizes</h4>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <p><code>.progress</code></p>
                    <div class="progress">
                      <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                    </div>
                    <p>Class: <code>.sm</code></p>
                    <div class="progress progress-sm active">
                      <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
                    </div>
                    <p>Class: <code>.xs</code></p>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
                    </div>
                    <p>Class: <code>.xxs</code></p>
                    <div class="progress progress-xxs">
                      <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
                    </div>
                  </div>
                  <!-- /.box-body --> 
                </div>
                <!-- /.box --> 
              </div>    
              <div class="col-12">
                <div class="box">
                  <div class="box-header with-border">
                    <h4 class="box-title">Progress bars</h4>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <div class="progress">
                      <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (primary)</span> </div>
                    </div>
                    <div class="progress">
                      <div class="progress-bar progress-bar-default" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%"> <span class="sr-only">30% Complete (default)</span> </div>
                    </div>
                    <div class="progress">
                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                    </div>
                    <div class="progress">
                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
                    </div>
                    <div class="progress">
                      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
                    </div>
                    <div class="progress">
                      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete</span> </div>
                    </div>
                    <p></p>
                    <p>The striped gradient can also be animated. Add <code class="highlighter-rouge">.progress-bar-animated</code> to <code class="highlighter-rouge">.progress-bar</code> to animate the stripes right to left via CSS3 animations.</p>
                    <p></p>
                    <div class="progress">
                      <div class="progress-bar progress-bar-danger progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
                    </div>
                  </div>
                  <!-- /.box-body --> 
                </div>
                <!-- /.box --> 
              </div>                        
        </div>  
        <div class="row">
			<div class="col-12">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Vertical Progress Bars Different Sizes</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body text-center">
				  <p>By adding the class <code>.vertical</code> and <code>.progress-sm</code>, <code>.progress-xs</code> or
					<code>.progress-xxs</code> we achieve:</p>

				  <div class="progress vertical active">
					<div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="height: 40%">
					  <span class="sr-only">40%</span>
					</div>
				  </div>
				  <div class="progress vertical progress-sm">
					<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="height: 100%">
					  <span class="sr-only">100%</span>
					</div>
				  </div>
				  <div class="progress vertical progress-xs">
					<div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="height: 60%">
					  <span class="sr-only">60%</span>
					</div>
				  </div>
				  <div class="progress vertical progress-xxs">
					<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="height: 60%">
					  <span class="sr-only">60%</span>
					</div>
				  </div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col (left) -->
			<div class="col-12">
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">Vertical Progress bars</h4>
				</div>
				<!-- /.box-header -->
				<div class="box-body text-center">
				  <p>By adding the class <code>.vertical</code> we achieve:</p>

				  <div class="progress vertical">
					<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="height: 40%">
					  <span class="sr-only">40%</span>
					</div>
				  </div>
				  <div class="progress vertical">
					<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="height: 40%">
					  <span class="sr-only">40%</span>
					</div>
				  </div>
				  <div class="progress vertical">
					<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="height: 20%">
					  <span class="sr-only">20%</span>
					</div>
				  </div>
				  <div class="progress vertical">
					<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="height: 60%">
					  <span class="sr-only">60%</span>
					</div>
				  </div>
				  <div class="progress vertical">
					<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="height: 80%">
					  <span class="sr-only">80%</span>
					</div>
				  </div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col (right) -->
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