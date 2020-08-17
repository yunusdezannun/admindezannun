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


<<!-- !-- Modal -->
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
       	<form action="updatehandler.php" method="POST">
       		<div class="row">
  			<div class="form-group " >
   			 	<label class="">Username</label>
   				<input type="name"  name="user" class="form-control form-control-sm"  id="fname"  >
	  		</div>
	 
	  		<div class="form-group">
	  	    <label for="InputPassword1">Password</label>
	    	<input type="password" name="pass" class="form-control" id="InputPassword1" >
	 	   </div>

	 	   <div class="form-group">
	  	    <label for="InputPassword2">Role</label>
	    	<input type="name" name="role" class="form-control" id="InputPassword2" >
	 		</div>

	        </div>
		 	
		 	<div class="form-group">
	        <button type="button"  class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
	        <button type="submit" name="submit" class="btn btn-success">SAVE</button>
	       
	        </div>

       </form>
      </div>
    </div>
  </div>
</div>
	</div>
</div>

      


  </body>
  </html>
