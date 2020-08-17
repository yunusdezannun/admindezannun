<?php
	require 'connection.php';

	if (isset($_POST['update'])) {
	$fname=$_POST['ffname'];
	//echo $fname;
    $lname=$_POST['llname'];
	$address=$_POST['aadress'];
  	$email=$_POST['eemail'];
  	$phone=$_POST['pphone'];
  	$password=$_POST['ppass'];
  	$conform_pass=$_POST['ccpass'];
  	$idno=$_POST['id'];

	$pdoQuery = "UPDATE cust SET fname=:ffname, lname=:llname, address=:aadress, email=:eemail, phone=:pphone, password=:ppass, conform_pass=:ccpass WHERE id = :id";
	$pdoQuery_run = $conn->prepare($pdoQuery);
	$pdoQuery_exec = $pdoQuery_run->execute(array('id'=>$idno,'ffname'=>$fname, 'llname'=>$lname, 'aadress'=>$address, 'eemail'=>$email, 
	'pphone'=>$phone, 'ppass'=>$password, 'ccpass'=>$conform_pass));

if ($pdoQuery_exec) {
	echo '<script> alert("Data Updated in database") </script>';
	header('Location:form4add.php');
}
else {
	echo '<script> alert("Data Not Inserted in database") </script>';
}
}

	if(isset($_GET['id'])){
		$id=$_GET['id'];

		$pdoQuery= "SELECT * FROM cust WHERE id =:id";
		 $pdoQuery_run = $conn->prepare($pdoQuery);
		$pdoQuery_run->execute(array(":id"=>$id));
	
	$res = $pdoQuery_run->fetch();
		$fname=$res['fname'];
    $lname=$res['lname'];
	  $address=$res['address'];
  	$email=$res['email'];
  	$phone=$res['phone'];
  	$password=$res['password'];
  	$conform_pass=$res['conform_pass'];


	}
	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0 ">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title>form 4 add</title>
	<link rel="stylesheet" type="text/css" href="kuunga.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">

</head>
<body>


<!-- !-- Modal -->
<!-- <div class="modal fade" id="custaddmodel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog"> 
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Customers Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> --> 


<div class="container">
	<div class="jumbotron">
		
		<div class="card">
			<h2>Customers Updation</h2>
		</div>

		<div class="modal-body modal-large">
       	<form action="" method="POST">
       		<div class="row">
  			<div class="form-group " >
   			 	<label class="">First Name</label>
   				<input type="name"  name="ffname" class="form-control form-control-sm"  id="fname" value="<?php echo $fname?>">
	  		</div>
	  		<div class="form-group">
	  			<label >Last Name</label>
   				<input type="name" name="llname" class="form-control" id="lname" value="<?php echo $lname?>">
	  		</div>
	  		<div class="form-group">
	  			<label > Address</label>
   				<input type="name" name="aadress" class="form-control" id="addrr" value="<?php echo $address?>">
	  		</div>
	  		<div class="form-group">
	  			<label >Email </label>
   				<input type="email" name="eemail" class="form-control" id="email" value="<?php echo $email?>">
	  		</div>

	  		<div class="form-group">
	  		<label >Phone Number</label>
   				 <input type="number" name="pphone" class="form-control" id="phone" value="<?php echo $phone?>">
	  		</div>

	  		<div class="form-group">
	  	    <label for="InputPassword1">Password</label>
	    	<input type="password" name="ppass" class="form-control" id="InputPassword1" value="<?php echo $password?>">
	 	   </div>

	 	   <div class="form-group">
	  	    <label for="InputPassword2">Conform Password</label>
	    	<input type="password" name="ccpass" class="form-control" id="InputPassword2" value="<?php echo $conform_pass?>">
	    	<input type="hidden" name="id" class="form-control"  value="<?php echo $_GET['id']?>">

	 		</div>

	        </div>
		 	
		 	<div class="form-group">
	        <button type="button"  class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
	        <!-- <button type="submit" name="submit" class="btn btn-success">SAVE</button> -->
	        <button type="submit" name="update" class="btn btn-success">UPDATE</button>
	        </div>

       </form>
      </div>
    </div>
  </div>
  </body>
  </html>
