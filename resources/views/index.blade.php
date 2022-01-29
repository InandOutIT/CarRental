<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Levant</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Favicons -->
  <link href="index/assets/img/logo.png" rel="icon">
  <link href="index/assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="index/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="index/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="index/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="index/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="index/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="index/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
    
  <link rel="stylesheet" href="index/css/classic.css">
  <link rel="stylesheet" href="index/css/classic.date.css">

  


  <!-- Template Main CSS File -->
  <link href="index/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Imperial - v5.7.0
  * Template URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
   <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Levant<span>.</span></a></h1>
      
      {{-- <a href="index.html" class="logo me-auto me-lg-0"><img src="index/assets/img/car1.png" alt="" class="img-fluid"></a> --}}

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#hero1">About</a></li>
          <li><a class="nav-link scrollto" href="#subscribe">Our Pages</a></li>
          
          {{-- <li><a class="nav-link scrollto" href="#team">Team</a></li> --}}


          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            @if (session()->has("loggedUser"))
            <li> <a href="/get-Account" class="{{Request::routeIs("get-Account") ?'activess' : ""}}">Account</a></li>
            <li> <a href="{{ route('logouts')}}" class="{{Request::routeIs("loggouts") ?'activess' : ""}}">Logout</a></li>
            @else
            <li>  <a href="{{ route('signup')}}" class="{{Request::routeIs("signup") ?'activess' : ""}}">Register</a></li>
            <li> <a href="{{ route('signin') }}" class="{{Request::routeIs("signin") ?'activess' : ""}}">Login</a></li>
            @endif

       
         
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

       <a   href="{{ route('cars') }}" class="get-started-btn scrollto">Choose Your Car Now</a> 

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div data-aos="fade-in">
        <div class="hero-logo">
          <img class="" src="index/assets/img/car.png" alt="Imperial">
   

        <h1>Welcome to Levant WebSite</h1>
        <h3>The Best Way To Rent Your Car</h3>
        <h2>We Have <span class="typed" data-typed-items="BMW, AUDI, KIA, FORD"></span></h2>
        <div class="actions">
          <a href="{{ route('cars') }}" class="btn-get-started">Choose Your Car Now</a>
          {{-- <a href="#services" class="btn-services">Our Services</a> --}}
        </div> 
        <!-- <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
          <div class="col-xl-2 col-md-4">
            <div class="icon-box">
              <i class="ri-store-line"></i>
              <h3><a href="">Our Car In Dubai</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-4">
            <div class="icon-box">
              <i class="ri-bar-chart-box-line"></i>
              <h3><a href="">Our Car In Abu Dhabi</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-4">
            <div class="icon-box">
              <i class="ri-calendar-todo-line"></i>
              <h3><a href="">Our Car In Al Ain</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-4">
            <div class="icon-box">
              <i class="ri-paint-brush-line"></i>
              <h3><a href="">Our Car In Al Shargh</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-4">
            <div class="icon-box">
              <i class="ri-database-2-line"></i>
              <h3><a href="">Our Car In Ajman</a></h3>
            </div>
          </div>
          
        </div> -->
        
            
    
          <div class="container contact-form">
            <!-- <div class="contact-image">
              <img src="index/assets/img/classic-car-silhouette-vintage-side-view-flat-vector-165396543.jpg" alt="rocket_contact"/>
            </div> -->
            <!-- <form method="post">
              <h3>Select Time You Need</h3>
               <div class="row">
                <div class="col-md-6">
                  
                  <div class="form-group">
                    <input type="datetime-local" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
                  </div>
                  <div class="form-group">
                    <input type="submit" name="btnSubmit" class="btn-get-started" value="Select Time" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="datetime-local" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                  </div>
                </div>
              </div>
            </form>
               -->
          </div>
                
        

          
          
        
      </div>
        
        
      </div>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients">
    <div class="container" data-aos="zoom-in">

      

      <div class="clients-slider swiper">
        <div class="swiper-wrapper align-items-center">
          @foreach ($brand as $bra)
          <a class="swiper-slide" href="{{ route('category-post', [$bra->id]) }}">
            <img src="{{asset("upload/car-category")}}/{{$bra->car_image}} " class="img-fluid" alt="">
        
        </a>

          @endforeach
         
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section> 
  <!-- End Clients Section -->

  <!-- ======= Hero1 Section ======= -->
  <section id="hero1" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Rent Your Car With Levant</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">We are team of car lovers in the UAE and we work to help people get thier cars</h2>
          <div data-aos="fade-up" data-aos-delay="800">
            <a href="{{ route('cars') }}" class="btn-get-started scrollto">Choose your car now</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero1-img" data-aos="fade-left" data-aos-delay="200">
          <img src="index/assets/img/Daco_5771533.png" class="img-fluid animated" alt="">
        </div>
      </div>
      
    </div>


    

  </section><!-- End Hero1 -->


  
  
  
  <main id="main">

    



    <!-- ======= Services Section ======= -->
    <!-- <section id="services">
      <div class="container">
        <div class="row" data-aos="fade-up">
          <div class="col-md-12">
            <h3 class="section-title">Our Services</h3>
            <div class="section-title-divider"></div>
            <p class="section-description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
          </div>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-4 col-md-6 service-item">
            <div class="service-icon"><i class="bi bi-briefcase"></i></div>
            <h4 class="service-title"><a href="">Lorem Ipsum</a></h4>
            <p class="service-description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
          <div class="col-lg-4 col-md-6 service-item">
            <div class="service-icon"><i class="bi bi-card-checklist"></i></div>
            <h4 class="service-title"><a href="">Dolor Sitema</a></h4>
            <p class="service-description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-lg-4 col-md-6 service-item">
            <div class="service-icon"><i class="bi bi-bar-chart"></i></div>
            <h4 class="service-title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="service-description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
          <div class="col-lg-4 col-md-6 service-item">
            <div class="service-icon"><i class="bi bi-binoculars"></i></div>
            <h4 class="service-title"><a href="">Magni Dolores</a></h4>
            <p class="service-description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
          <div class="col-lg-4 col-md-6 service-item">
            <div class="service-icon"><i class="bi bi-brightness-high"></i></div>
            <h4 class="service-title"><a href="">Nemo Enim</a></h4>
            <p class="service-description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 service-item">
            <div class="service-icon"><i class="bi bi-calendar4-week"></i></div>
            <h4 class="service-title"><a href="">Eiusmod Tempor</a></h4>
            <p class="service-description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>
        </div>
      </div>
    </section>End Services Section -->

    <!-- ======= Subscrbe Section ======= -->
    <section id="subscribe">
      <div class="container" data-aos="fade-up">
        <div class="row">
          
          <div class="col-md-8">
            <h3 class="subscribe-title">Subscribe OUR Pages</h3>
            <p class="subscribe-text">Join our 1000+ subscribers </p>
          </div>
          <div class="col-md-4 subscribe-btn-container">
            <div class="social-links">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section><!-- End Subscrbe Section -->

    <!-- ======= Portfolio Section ======= -->
    <!-- <section id="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">Our Cars</h3>
            <div class="section-title-divider"></div>
            <p class="section-description">This Is Our Cars In All UAE</p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-economy">Economy</li>
              <li data-filter=".filter-suv">suv</li>
              <li data-filter=".filter-Vip">Vip</li>
            </ul>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio1-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-ss">ss</li>
              <li data-filter=".filter-cc">cc</li>
              <li data-filter=".filter-dd">dd</li>
            </ul>
          </div>
        </div>


        

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-economy filter-dd">
            <img src="index/assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>economy 1</h4>
              <p>economy</p>
              <a href="index/assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="economy 1"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Vip filter-ss">
            <img src="index/assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Vip 3</h4>
              <p>Vip</p>
              <a href="index/assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Vip 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-economy filter-dd">
            <img src="index/assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>economy 2</h4>
              <p>economy</p>
              <a href="index/assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="economy 2"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-suv filter-cc">
            <img src="index/assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>suv 2</h4>
              <p>suv</p>
              <a href="index/assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="suv 2"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Vip filter-dd">
            <img src="index/assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Vip 2</h4>
              <p>Vip</p>
              <a href="index/assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Vip 2"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-economy filter-ss">
            <img src="index/assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>economy 3</h4>
              <p>economy</p>
              <a href="index/assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="economy 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-suv filter-dd">
            <img src="index/assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>suv 1</h4>
              <p>suv</p>
              <a href="index/assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="suv 1"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-suv">
            <img src="index/assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>suv 3</h4>
              <p>suv</p>
              <a href="index/assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="suv 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Vip">
            <img src="index/assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Vip 3</h4>
              <p>Vip</p>
              <a href="index/assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Vip 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- <section id="testimonials">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">Testimonials</h3>
            <div class="section-title-divider"></div>
            <p class="section-description">Erdo lide, nora porodo filece, salvam esse se, quod concedimus ses haec dicturum fuisse</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            <div class="profile">
              <div class="pic"><img src="index/assets/img/client-1.jpg" alt=""></div>
              <h4>Saul Goodman</h4>
              <span>Lawless Inc</span>
            </div>
          </div>
          <div class="col-md-9">
            <div class="quote">
              <b><img src="index/assets/img/quote_sign_left.png" alt=""></b> Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper. <small><img src="index/assets/img/quote_sign_right.png" alt=""></small>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-9">
            <div class="quote">
              <b><img src="index/assets/img/quote_sign_left.png" alt=""></b> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis architecto beatae. <small><img src="index/assets/img/quote_sign_right.png" alt=""></small>
            </div>
          </div>
          <div class="col-md-3">
            <div class="profile">
              <div class="pic"><img src="index/assets/img/client-2.jpg" alt=""></div>
              <h4>Sara Wilsson</h4>
              <span>Odeo Inc</span>
            </div>
          </div>
        </div>

      </div>
    </section>End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <!-- <section id="team">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">Our Team</h3>
            <div class="section-title-divider"></div>
            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            <div class="member">
              <div class="pic"><img src="index/assets/img/team/team-1.jpg" alt=""></div>
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="member">
              <div class="pic"><img src="index/assets/img/team/team-2.jpg" alt=""></div>
              <h4>Sarah Jhinson</h4>
              <span>Product Manager</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="member">
              <div class="pic"><img src="index/assets/img/team/team-3.jpg" alt=""></div>
              <h4>William Anderson</h4>
              <span>CTO</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="member">
              <div class="pic"><img src="index/assets/img/team/team-4.jpg" alt=""></div>
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>
      </div> -->
    <!-- </section>End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">Contact Us</h3>
            <div class="section-title-divider"></div>
            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div>
                <i class="bi bi-geo-alt"></i>
                <p>A108 Adam Street<br>New York, NY 535022</p>
              </div>

              <div>
                <i class="bi bi-envelope"></i>
                <p>info@example.com</p>
              </div>

              <div>
                <i class="bi bi-phone"></i>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group mt-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright <strong>In & Out Group</strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Imperial
          -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->


  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="index/assets/vendor/aos/aos.js"></script>
  <script src="index/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="index/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="index/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="index/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="index/assets/vendor/typed.js/typed.min.js"></script>
  <script src="index/assets/vendor/php-email-form/validate.js"></script>
   
  <!-- Template Main JS File -->
  <script src="index/assets/js/main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="index/js/popper.min.js"></script>
  <script src="index/js/bootstrap.min.js"></script>
  <script src="index/js/picker.js"></script>
  <script src="index/js/picker.date.js"></script>

  <script src="index/js/main.js"></script>

</body>

</html>