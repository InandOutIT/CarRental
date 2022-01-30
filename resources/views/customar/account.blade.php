<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="Accountassets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Accountassets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Accountassets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Accountassets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Accountassets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Accountassets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Accountassets/css/util.css">
	<link rel="stylesheet" type="text/css" href="Accountassets/css/main.css">
<!--===============================================================================================-->
</head>
<body>
    
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="Accountassets/images/img-01.png" alt="IMG">
				</div>

				<div class="login100-form validate-form">
					<span class="login100-form-title">
						My Account
					</span>

					<div class="wrap-input100 validate-input" >
						<a href="{{ route('update-profile') }}"style="color: aliceblue"  class="login100-form-btn">
							update My Profile
						</a>
						<span class="focus-input100"></span>
						
					</div>

					<div class="wrap-input100 validate-input"data-toggle="modal" data-target=".bd-example-modal-lg" >
						<a style="color: aliceblue" class="login100-form-btn">
							My Rent Car
						</a>
						<span class="focus-input100"></span>
						
					</div>

					<div class="wrap-input100 validate-input" >
						<a style="color: aliceblue" href="" class="login100-form-btn">
							Delete My Account
						</a>
						<span class="focus-input100"></span>
						
					</div>
					<div class="wrap-input100 validate-input" >
						<a href={{route('home')}} style="color: aliceblue"  class="login100-form-btn1">
							Return Home
                        </a>
						<span class="focus-input100"></span>
						
					</div>

					
					



  
  <!-- Modal -->
  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
           
              
              
      
               <div class='table-responsive'>
            <table class='table table-bordered'>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Car Name</th>
                        <th>Days</th>
                        <th>Price</th>
                        <th>Total</th>
                        <th>Confirm</th>
                        <th>Delete</th>
                    </tr>
                </thead>
               

            @foreach($bookCar as $car) 
               <tr>
                    <td>{{$car->id}}</td>
                    <td>{{$car->book_car->car_brand->car_brand_name}}</td>
                    <td>{{$car->days}}</td>
                    <td> {{$car->book_car->car_price}} AED</td>
                    <td> {{$car->days * $car->book_car->car_price}} AED</td>
                    <td>{{$car->book}}</td>
                    <td><button data-id='{{$car->id}}' id='delete-book-car' class='btn btn-danger'>Delete</button></td>
                </tr>
            

                
            @endforeach 
            
                </table>
            </div>

            
        
            
       
                  
                 
              
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
					

					
				</div>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="Accountassets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Accountassets/vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Accountassets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Accountassets/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="Accountassets/js/main.js"></script>

</body>
</html>