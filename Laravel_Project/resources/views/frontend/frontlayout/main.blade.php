
@include('frontend.frontlayout.header')
 @yield('main-content')
 <meta name="description" content="Transcrew | Courier & Delivery Service HTML Template" />
<meta name="keywords" content="cargo, courier, delivery, freight, logistics, mover, moving company, packaging, responsive, shipment, shipping, transport, warehouse" />
<!-- Plugins CSS -->
<link href="{{asset('frontend/css/plugins.css')}}" rel="stylesheet" >
<!-- Custom CSS -->
<link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/images/favicon.ico')}}">


@include('frontend.frontlayout.footer')

