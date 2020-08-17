
<!DOCTYPE html>
<html>
<head>
	<title>E-furniture Management System</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="index.css"/>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script type="text/javascript">
 	function validation(){
 		var formID = document.getElementById("formID");

 		var u = formID.username.value;
 		var p = formID.password.value;
 		if(u==""){
 			alert("Please you must fill the username");
 			return false;
 		}else if(p==""){
 			alert("Please you must fill the Password");
 			return false;
 		}else{
 		 if(u.length<4 || u.length>10){
 			alert("username invalid");
 			return false;
 		}else if(p.length>12 || p.length<8){
 			alert("password out of range");
 			return false;
 		}else{
 			if(u=='number'){
 			alert("Not enter number in username");
 			return false;
 		}else{
 			alert("OK");
 			return true;
 		}
 	}
 	}
 }
 </script>

</head>
<body id="body">

	<div class="container">
		<br><br><br>
		<center> <b id="login-name" > LOGIN </b> </center>
		<div class="row">
		<div class="col-md-6 col-md-offset-3" id="login">  
	<form  action="loginhandler.php" method="POST" class="login-form text-center"  >
		<div class="form-group">
			<label class="user"> UserName  </label>
			<div class="input-group">
			<span class="input-group-addon" id="iconn"> <i class="glyphicon glyphicon-user"></i></span>
			<input type="text" required="required" class="form-control" id="text1" name="user" placeholder="username">
			</div>
		</div>
		<div class="form-group">
			<label class="user"> Password </label>
			<div class="input-group">
			<span class="input-group-addon" id="iconn1"> <i class="glyphicon glyphicon-lock"></i></span>
			<input type="Password" required="required" class="form-control" id="text2" name="pass" placeholder=" Enter Password">
			</div>
		</div>
		<br>
		<div class="form-group">
			<input type="submit"  class="btn btn-success" value="login" name="save" style="border-radius:0px;">
			
		</div><br><br><br><br>
		<div  style="color: blue;">
			<p><b> Not Yet a Member?........<a href="signup.php" style="color: darkgreen;">Sign Up</a></b></p>
		</div>
	</form>
</div>
</div>
</div>
</body>
</html>