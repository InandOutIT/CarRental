<!doctype html>
<html lang="en">

    <head>

		<!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>Car Rental</title>

        <!-- CSS -->
        
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
     

		<link rel="stylesheet" href="{{asset('Carassets/css/style.css')}}">

   
    </head>

    <body>

 		<!-- ======= Header ======= -->
		 <header id="header" class="d-flex align-items-center ">
			<div class="container d-flex align-items-center justify-content-between">
		
			  
		
				<nav id="navbar" class="navbar order-last order-lg-0">
					<ul>
					  <li><a href="{{ route('home')}}" class="nav-link scrollto active" href="#hero">Home</a></li>
					   <li><a href="{{ route('home')}}" class="nav-link scrollto" href="#hero1">About</a></li> 
					{{--  <li><a class="nav-link scrollto" href="#subscribe">Our Pages</a></li> --}}
					  
					  {{-- <li><a class="nav-link scrollto" href="#team">Team</a></li> --}}
			
			
					  <li><a href="{{ route('home')}}" class="nav-link scrollto" href="#contact">Contact</a></li>
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
			  <div class="logo">
				<a href="{{ route('home')}}"><img src="Carassets/img/levant2.png" alt="" class="img-fluid"></a>
			  </div>
			</div>
		  </header><!-- End Header -->

		  <div style="height:80px;"></div>

		<!-- Wrapper -->
    	<div class="wrapper">

			<!-- Sidebar -->
			<nav class="sidebar">
				
				<!-- close sidebar menu -->
				<div class="dismiss">
					<i class="fas fa-arrow-left"></i>
				</div>
				
				<div class="logo">
					<h3><a href="index.html">Levant</a></h3>
				
				</div>
				
				<ul class="list-unstyled menu-elements">
					<li>
						<a href="#otherSections1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" role="button" aria-controls="otherSections">
							<i class="fas fa-stream"></i>Brand
						</a>
						<ul class="collapse list-unstyled" id="otherSections1">
							<li>
								<a class="scroll-link" href="#section-3">Audi </a>
							</li>
							<li>
								<a class="scroll-link" href="#section-4">Bmw.</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#otherSections2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" role="button" aria-controls="otherSections">
							<i class="fas fa-stream"></i>Category
						</a>
						<ul class="collapse list-unstyled" id="otherSections2">
							<li>
								<a class="scroll-link" href="#section-3">Our projects</a>
							</li>
							<li>
								<a class="scroll-link" href="#section-4">We think that...</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#otherSections" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" role="button" aria-controls="otherSections">
							<i class="fas fa-stream"></i>Gear
						</a>
						<ul class="collapse list-unstyled" id="otherSection1s">
							<li>
								<a class="scroll-link" href="#section-3">Our projects</a>
							</li>
							<li>
								<a class="scroll-link" href="#section-4">We think that...</a>
							</li>
						</ul>
					</li>
				
					</li>
					<li>
						<a href="#otherSections" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" role="button" aria-controls="otherSections">
							<i class="fas fa-stream"></i>Num door
						</a>
						<ul class="collapse list-unstyled" id="otherSection1s">
							<li>
								<a class="scroll-link" href="#section-3">Our projects</a>
							</li>
							<li>
								<a class="scroll-link" href="#section-4">We think that...</a>
							</li>
						</ul>
					</li>
				</ul>
				
				<div class="to-top">
					<a class="btn btn-primary btn-customized-3" href="#" role="button">
	                    <i class="fas fa-arrow-up"></i> Top
	                </a>
				</div>
				
			
			
			</nav>
			<!-- End sidebar -->
			
			<!-- Dark overlay -->
    		<div class="overlay"></div>

			<!-- Content -->
			<div class="content">

		
			
				<!-- open sidebar menu -->
				<a class="btn btn-primary btn-customized open-menu" href="#" role="button">
                    <i class="fas fa-align-left"></i> <span>Filtter</span>
                </a>
			
				{{-- <div class="filters d-flex flex-column flex-md-row justify-content-around">
        
					<div class="btn-group" role="group" data-filter-group="color" aria-label="Kind">
					  <button type="button" class="btn btn-sm btn-secondary btn-filter checked" data-filter="">All</button>
					  <button type="button" class="btn btn-sm btn-secondary btn-filter" data-filter=".yellow">Yellow</button>
					  <button type="button" class="btn btn-sm btn-secondary btn-filter" data-filter=".black">Black</button>
					  <button type="button" class="btn btn-sm btn-secondary btn-filter" data-filter=".red">Red</button>
					</div>
				
					<div class="btn-group" role="group" data-filter-group="size" aria-label="Size">
					  <button type="button" class="btn btn-sm btn-secondary btn-filter checked" data-filter="">All</button>
					  <button type="button" class="btn btn-sm btn-secondary btn-filter" data-filter=".small">Small</button>
					  <button type="button" class="btn btn-sm btn-secondary btn-filter" data-filter=".wide">Wide</button>
					  <button type="button" class="btn btn-sm btn-secondary btn-filter" data-filter=".big">Big</button>
					  <button type="button" class="btn btn-sm btn-secondary btn-filter" data-filter=".tall">Tall</button>
					</div>
				
					<div class="btn-group" role="group" data-filter-group="shape" aria-label="Shape">
					  <button type="" class="btn btn-sm btn-secondary btn-filter checked" data-filter="">All</button>
					  <button type="button" class="btn btn-sm btn-secondary btn-filter" data-filter=".round">Round</button>
					  <button type="button" class="btn btn-sm btn-secondary btn-filter" data-filter=".square">Square</button>
									
									
					  
					</div>
				  </div>
				
				    --}}
					
		
				  
			
				<div  class=" container ">
                  
                        
				
				
					<div class="row">
				
						
						@foreach ($cars as $car) 
						
						<div  class=" col-md-4 ">
							<div   class="  big square black"  >	
				 <hr>
					<a href="{{ route('car-detail', $car->id) }}">
					 <div class="profile-card-4 text-center" > 
						 <div class="img1"><img src="{{ asset('upload/car') }}/{{$car->car_image}}" class="rounded" alt="" class="img img-responsive"></div>
						<div class="profile-content">
							
							<div class="profile-description">{{$car->car_model->car_model_name}}</div>
						<div class="protofile-img" style>	<img   src='{{asset("upload/car-category/".$car->car_brand->car_image)}}' alt='{{$car->car_brand->car_brand_name}}' ></div>
							<div class="profile-description1">{{$car->car_price}} AED/DAY </div>
							<div class="profile-description2">More Information</div>
							
							
							
						</div>
					
					</div>
                   
				 </div>
					   </div>
					</a>
				 @endforeach
				 
		        
		        
			</div>   
        
        </div>



		
        <!-- End wrapper -->




		


		



        <!-- Javascript -->
		
		<script src="{{asset('Carassets/js/jquery-3.3.1.min.js')}}"></script>
		<script src="{{asset('Carassets/js/jquery-migrate-3.0.0.min.js')}}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="{{asset('Carassets/js/jquery.backstretch.min.js')}}"></script>
        <script src="{{asset('Carassets/js/wow.min.js')}}"></script>
        <script src="{{asset('Carassets/js/jquery.waypoints.min.j')}}s"></script>
        <script src="{{asset('Carassets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.2/isotope.pkgd.min.js"></script>
        <script src="{{asset('Carassets/js/scripts.js')}}"></script>
	
		 
		 

    </body>

</html>