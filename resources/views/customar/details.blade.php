<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details - Gp Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('Detailsassets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('Detailsassets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700&display=swap" rel="stylesheet">
	
  {{-- <link rel="stylesheet" href="css/ionicons.min.css">
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/style.css"> --}}

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="{{asset('Detailsassets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('Detailsassets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('Detailsassets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('Detailsassets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('Detailsassets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('Detailsassets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('Detailsassets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->

  <link rel="stylesheet" href="{{asset('Detailsassets/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('Detailsassets/css/flaticon.css')}}">
  <link href="{{asset('Detailsassets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp - v4.7.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Levant<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="Detailsassets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto active" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#about" class="get-started-btn scrollto">Get Started</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><strong>Car Details</strong> </h2>
          {{-- <div class="d-grid gap-2 col-3 mx-auto">
       
            <button class="btn btn-danger" type="button">Rent Now</button>
          </div> --}}
          @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif


      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/book-car" method="post" class="code-form">
          @csrf
          <div class="form-group d-flex">
            <input type="hidden" value="{{$cars->id}}" name="id" id="id" class="form-control form-control-lg">
    <input style="width: 280px;" type="text" name="datetimes" />

          </div>
          <label for="">From</label>
  <input type="date" name="start_book" id="start_book" class="form-control form-control-lg">
  
  <label for="">To</label>
  <input type="date" name="end_book" id="end_book" class="form-control form-control-lg">
</div>
<div class="form-group">
  <button type="submit" class="btn btn-success">Book</button> 
</div>
      
          <button type="submit" class="btn btn-danger d-block py-3">Rent Now</button> 
        </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
          
          
         




               
                 

                  {{-- <label for="">From</label>
                  <input type="date" name="start_book" id="start_book" class="form-control form-control-lg">
                  
                  <label for="">To</label>
                  <input type="date" name="end_book" id="end_book" class="form-control form-control-lg">
                </div>
              <div class="form-group">
                  <button type="submit" class="btn btn-success">Book</button> 
              </div>
            </form> --}}
    



          <ol> 
              
            <li><a href="index.html">Home</a></li>
            <li><strong>Car Details</strong> </li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
   
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

@foreach ($images as $image)
<div class="swiper-slide">
  <img src='{{asset("$image->url")}}' alt="">

</div>  
@endforeach

               


               

              </div>
              <div class="swiper-pagination"></div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Brand</strong>: <strong style="color: rgb(148, 13, 13)">{{$cars->car_brand->car_brand_name}}</strong></li>
                <li><strong>Category</strong>: <strong style="color: rgb(148, 13, 13)">{{$cars->car_category->car_cat_name}}</strong></li>
                <li><strong>Model</strong>: <strong style="color: rgb(148, 13, 13)">{{$cars->car_model->car_model_name}}</strong></li>
                <li><strong>Type Of Gear</strong>: <strong style="color: rgb(148, 13, 13)">{{$cars->type_gear}}</strong></li>
                <li><strong>Number Of Doors</strong>: <strong style="color: rgb(148, 13, 13)">{{$cars->num_door}}</strong></li>
                
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Car Description</h2>
              <p>
                {{$cars->car_desc}}
                          </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->
    
  </main><!-- End #main -->





  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>In & Out Group</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('Detailsassets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('Detailsassets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('Detailsassets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('Detailsassets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('Detailsassets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('Detailsassets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('Detailsassets/vendor/php-email-form/validate.js')}}"></script>
 

  <!-- Template Main JS File -->
  <script src="{{asset('Detailsassets/js/main.js')}}"></script>
  <script src="{{asset('Detailsassets/js/jquery.min.js')}}"></script>
  <script src="{{asset('Detailsassets/js/popper.js')}}"></script>
  <script src="{{asset('Detailsassets/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<script>
$(function() {
  $('input[name="datetimes"]').daterangepicker({
  timePicker: true,
  startDate: moment().startOf('hour'),
  endDate: moment().startOf('hour').add(32, 'hour'),
  locale: {
    format: 'M/DD hh:mm A'
  }
  });
});

</script>

<script>var mountNode = document.getElementById('container');</script>

</body>

</html>












	


		

		



