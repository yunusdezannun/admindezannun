<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>E-Furniture Manageemnt System</title>

	<link rel="stylesheet" type="text/css" href="style.css">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>


<body>
<div class="login-container d-flex align-items-center justify-content-center">
	<form  action="indexhandler.php" method="post" class="login-form text-center"  >
		
		<h1 class="mb-5 font-weight-light text-uppercase">Login</h1>
		<div class="form-group">
			<input type="text" class="form-control rounded-pill form-control-lg" placeholder="Username" name="user" id="user" >
		</div>

		<div class="form-group">
			<input type="text" class="form-control  rounded-pill form-control-lg" placeholder="Password" name="pass" id="pass"  >
		</div>
		<div class="forgot-link d-flex align-items-center justify-content-between">
			
			<div class="form-check">
				<input type="checkbox" class="form-check-input" id="remember">
				<label for="remember">Remember Password</label>
							</div>
							<a href="#">Forgot Password?</a>
		</div>
		<button type="submit" name="btnsub" class="btn mt-5 btn-custom btn-primary btn-block text-uppercase rounded-pill btn-lg">Login</button>
		<p class="mt-3 font-weight-normal">Don't have an account <a href="#"><strong>Register Now</strong></a></p>
	</div>




</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>


</body>
</html>