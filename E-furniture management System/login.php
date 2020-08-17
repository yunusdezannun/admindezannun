<?php include('lhendler.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="index.css"/>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-3.3.1.js"></script>

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

<body id="body" style="background-color: #F8F8FF;"> 
	<div class="container">

	 <div class="container-fluid" id="div" style="border: 1px solid violet; border-radius: 20px 20px 0px 0px; "> <!--ok-->
      <div class="role" style="float: right; border: 0px solid black; padding-top: 0px; margin-left: 5px; border-radius:5px; color:#7FF000  ">

      </div>
      <h1 class="title"><img src="img/home.jpg" width="100px" height="auto" style="border-radius: 40%" /> Online Furniture Ordering <sub>System</sub></h1>
    </div>
		<div class="row" class="col-md-6 col-sm-12" style="border: 1px solid darkcyan;  background-color: lightgray; margin-left: 1px; margin-right: 1px; ">
	<div class="col-md-3 col-sm-12"> </div>
<div class="col-md-6 col-sm-12 col-md-offset-3" id="login"> 
	<form onSubmit ="return validation()" action="lhendler.php" method="POST" id="formID">
		
		<div class="form-group">
			<p  style="text-align: center; "> <b id="login-name" >LOGIN HERE </b> </center></p>
			<label class="user" id="usernameID"> UserName  </label>
			<div class="input-group">
			<span class="input-group-addon" id="iconn"> <i class="glyphicon glyphicon-user"></i></span>
			<input type="text" class="form-control" id="text1" name="t1" placeholder="username" required="required">
			</div>
		</div>
		<div class="form-group">
			<label class="user" id="passwordID"> Password </label>
			<div class="input-group">
			<span class="input-group-addon" id="iconn1"> <i class="glyphicon glyphicon-lock"></i></span>
			<input type="Password" class="form-control" id="text2" name="t2" placeholder=" Enter Password" required="required">
			</div><br>
		</div>
		<div class="form-group">
			<input type="submit"  class="btn btn-success" value="login" name="save" +style="border-radius:0px;">
			<input type="reset" class="btn btn-danger" value="reset" name="reset" style="border-radius:0px;">
		</div><br><br><br><br>
		<div  style="color: blue;">
			<p><b> Not Yet a Member?........<a href="rfc.php" style="color: darkgreen;">Sign Up</a></b></p>
		</div>
	</form>
</div>
<div class="col-md-3 col-sm-12">   </div>
</div>
<div>
<?php include('footer.php')?>
</div>
 </div>
</body>
</html>