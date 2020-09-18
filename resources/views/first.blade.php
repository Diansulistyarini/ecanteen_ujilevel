<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Vegefoods - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset ('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset ('css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset ('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset ('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset ('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset ('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset ('css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset ('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset ('css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{asset ('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset ('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset ('css/style.cs')}}s">
  </head>

    <!-- Carousel Content -->
    @include('user.carousel')
	<!-- END CC -->

    <!-- Welcome -->
	<section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/D-EpUo3lGIs" frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen></iframe>
                </div>
                <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
          <div class="heading-section-bold mb-4 mt-md-5">
              <div class="ml-md-0">
                <h2 class="mb-4">Welcome to Starbhak Canteen </h2>
            </div>
          </div>
          <div class="pb-md-5">
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        <p>But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
                        <p><a href="{{url('/login')}}" class="btn btn-primary">Login</a> <a href="{{url('/regis')}}" class="btn btn-primary">Register</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End-->


    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row no-gutters ftco-services">
      <div class="col-lg-3 text-center d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services mb-md-0 mb-4">
          <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                <span class="flaticon-shipped"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Free Shipping</h3>
            <span>On order over $100</span>
          </div>
        </div>      
      </div>
      <div class="col-lg-3 text-center d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services mb-md-0 mb-4">
          <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
                <span class="flaticon-diet"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Always Fresh</h3>
            <span>Product well package</span>
          </div>
        </div>    
      </div>
      <div class="col-lg-3 text-center d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services mb-md-0 mb-4">
          <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                <span class="flaticon-award"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Superior Quality</h3>
            <span>Quality Products</span>
          </div>
        </div>      
      </div>
      <div class="col-lg-3 text-center d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services mb-md-0 mb-4">
          <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                <span class="flaticon-customer-service"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Support</h3>
            <span>24/7 Support</span>
          </div>
        </div>      
      </div>
    </div>
        </div>
    </section>

  <script src="{{ asset ('js/jquery.min.js') }}"></script>
  <script src="{{ asset ('js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{ asset ('js/popper.min.js')}}"></script>
  <script src="{{ asset ('js/bootstrap.min.js')}}"></script>
  <script src="{{ asset ('js/jquery.easing.1.3.js')}}"></script>
  <script src="{{ asset ('js/jquery.waypoints.min.js')}}"></script>
  <script src="{{ asset ('js/jquery.stellar.min.js')}}"></script>
  <script src="{{ asset ('js/owl.carousel.min.js')}}"></script>
  <script src="{{ asset ('js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{ asset ('js/aos.js')}}"></script>
  <script src="{{ asset ('js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{ asset ('js/bootstrap-datepicker.js')}}"></script>
  <script src="{{ asset ('js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset ("js/google-map.js")}}"></script>
  <script src="{{ asset ('js/main.js')}}"></script>

   <!-- Footer -->
	@include('user.footer')
    <!-- End Footer loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" 
        stroke="#F96D00"/></svg></div>

  </body>
</html>

