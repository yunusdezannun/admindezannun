<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0 ">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title>form 4 add</title>
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">

</head>
<body>

<div class="container">
	<div class="jumbotron">
		
		<div class="card">
			<h2>Furnitures Managements</h2>

		</div>
		<div class="card">
			<div class="card-body">

				
			</div>
		</div>
	</div>

<div class="container">
<form action="addfurn.php" method="POST">
       	<div class="row">
       			<div class="col-sm-4">
  			<div class="form-group " >
   			 	<label class="">Furniture Name</label>
   				<input type="name" name="funame" class="form-control form-control-sm"  id="fname" >
	  		</div>
	  	</div>
	<div class="col-sm-4">
	  		<div class="form-group">
	  			<label >Furniture Type</label>
   				<input type="name" name="futype" class="form-control" id="lname" >
	  		</div>
	  	</div>

	  	<div class="col-sm-4">
	  		<div class="form-group">
	  			<label > Date of manufactured</label>
   				<input type="name" name="dtmanuf" class="form-control" id="addrr" >
	  		</div>
	  	</div>
	  </div>

<div class="row">
	  <div class="col-sm-4">
	  		<div class="form-group">
	  			<label > Place of Manufactured</label>
   				<input type="name" name="plmanuf" class="form-control" id="email" >
	  		</div>
	  	</div>
	
	<div class="col-sm-4">
	  		<div class="form-group">
	  		<label >Materials</label>
   				 <input type="name" name="mtr" class="form-control" id="phone" >
	  		</div>
	</div>
	
</div>

<div class="row">
			<div class="modal-footer">
	        <button type="button"  class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
	        <button type="submit" name="peleka" class="btn btn-success">SAVE</button>
	        <button type="submit" name="update" class="btn btn-success">UPDATE</button>
	        </div>
		 	
		 	</div>
       </form>
     </div>


<div class="container">
		<div class="row">
<?php
require 'connection.php';
$stmt = $conn->query("SELECT * from furn_manag");
$row = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo '<table class="table table-border">'."\n";
echo "<td>id</td>";
echo "<td>furniture_name</td>";
echo "<td>furniture_type</td>";
echo "<td>date_manufact</td>";
echo "<td>place_manufact</td>";
echo "<td>materials</td>";
echo "<td>Actions</td>";

foreach ($row as $row) {
	echo "<tr><td>";
	echo ($row['id']);
	echo "</td><td>";
	echo ($row['furniture_name']);
	echo "</td><td>";	
	echo ($row['furniture_type']);
	echo "</td><td>";
	echo ($row['date_manufact']);
	echo "</td><td>";
	echo ($row['place_manufact']);
	echo "</td><td>";
	echo ($row['materials']);
	echo "</td><td>";
	

	echo '<a href="updateform.php? id='.$row['id'].'" class="btn btn-info">Edit</a>';
	echo "\t";
	echo '<a href="deletehandler.php? id='.$row['id'].'" class="btn btn-danger">Delete</a>';
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
