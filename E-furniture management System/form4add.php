<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0 ">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title>form 4 add</title>
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">

<script type="text/javascript">
	function Delete(){
		return confirm ("Are you sure you want to delete this record");
	}

</script>

</head>
<body>



<!-- Modal -->
<div class="modal fade" id="custaddmodel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog"> 
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Customers Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body modal-large">
       	<form action="inserthandler.php" method="POST">
       	<div class="row">
       			<div class="col-sm-6">
  			<div class="form-group " >
   			 	<label class="">First Name</label>
   				<input type="name" name="ffname" class="form-control form-control-sm"  id="fname" required="required">
	  		</div>
	  	</div>
	  	<div class="col-sm-6">
	  		<div class="form-group">
	  			<label >Last Name</label>
   				<input type="name" name="llname" class="form-control" id="lname" required="required">
	  		</div>
	  	</div>
	  </div>

	  <div class="row">
	  	<div class="col-sm-6">
	  		<div class="form-group">
	  			<label > Address</label>
   				<input type="name" name="aadress" class="form-control" id="addrr" required="required" >
	  		</div>
	  	</div>
	  	<div class="col-sm-6">
	  		<div class="form-group">
	  			<label >Email </label>
   				<input type="email" name="eemail" class="form-control" id="email" required="required" >
	  		</div>
	  	</div>
</div>
	  		<div class="form-group">
	  		<label >Phone Number</label>
   				 <input type="name" name="pphone" class="form-control" id="phone"  required="required">
	  		</div>

	  		<div class="form-group">
	  	    <label for="InputPassword1">Password</label>
	    	<input type="password" name="ppass" class="form-control" id="InputPassword1"  required="required">
	 	   </div>

	 	   <div class="form-group">
	  	    <label for="InputPassword2">Conform Password</label>
	    	<input type="password" name="ccpass" class="form-control" id="InputPassword2"  required="required">
	 		</div>

			<div class="modal-footer">
	        <button type="button"  class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
	        <button type="submit" name="submit" class="btn btn-success">SAVE</button>
	        <button type="submit" name="update" class="btn btn-success">UPDATE</button>
	        </div>
	        </div>
		 	
       </form>
      </div>
    </div>
  </div>
</div>

<div class="container">
	<div class="jumbotron">
		
		<div class="card">
			<h2>Customers Registration</h2>

		</div>
		<div class="card">
			<div class="card-body">

				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#custaddmodel">
  					ADD 
				</button>
				

			</div>
		</div>

	</div>

	<div class="container">
		<div class="row">
<?php
require 'connection.php';
$stmt = $conn->query("SELECT * from cust");
$row = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo '<table class="table table-border">'."\n";
echo "<td>id</td>";
echo "<td>First Name</td>";
echo "<td>Last Name</td>";
echo "<td>Address</td>";
echo "<td>Email</td>";
echo "<td>Phone</td>";
echo "<td>Password</td>";
echo "<td>Conform Password</td>";

foreach ($row as $row) {
	echo "<tr><td>";
	echo ($row['id']);
	echo "</td><td>";
	echo ($row['fname']);
	echo "</td><td>";	
	echo ($row['lname']);
	echo "</td><td>";
	echo ($row['address']);
	echo "</td><td>";
	echo ($row['email']);
	echo "</td><td>";
	echo ($row['phone']);
	echo "</td><td>";
	echo ($row['password']);
	echo "</td><td>";
	echo ($row['conform_pass']);
	echo "</td><td>";

	echo '<a href="updateform.php? id='.$row['id'].'" class="btn btn-info" >Edit</a>';
	echo "\t";
	echo '<a href="deletehandler.php? id='.$row['id'].'" class="btn btn-danger" onclick="return Delete()" >Delete</a>';
	echo "</td></tr>";
}
?>
</table>
</div>
</div>
</div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js"></script>/s
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</body>
</html>