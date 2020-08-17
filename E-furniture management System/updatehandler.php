<?php
	require 'connection.php';

	if (isset($_POST['update'])) {
	$fname=$_POST['ffname'];
    $lname=$_POST['llname'];
	  $address=$_POST['aadress'];
  	$email=$_POST['eemail'];
  	$phone=$_POST['pphone'];
  	$password=$_POST['ppass'];
  	$conform_pass=$_POST['ccpass'];
  	$id=$_GET['id'];

	$pdoQuery = "UPDATE cust SET fname=:ffname, lname=:llname, address=:aadress, email=:eemail, phone=:pphone, password=:ppass, conform_pass=:ccpass WHERE id = :id";
	$pdoQuery_run = $conn->prepare($pdoQuery);
	$pdoQuery_exec = $pdoQuery_run->execute(array('id'=>$id,'ffname'=>$fname, 'llname'=>$lname, 'aadress'=>$address, 'eemail'=>$email, 
	'pphone'=>$phone, 'ppass'=>$password, 'ccpass'=>$conform_pass));

if (pdoQuery_exec) {
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
		$pdoQuery_exec = $pdoQuery_run->execute(array(':id'=>$id));
		$res=$pdoQuery_exec->fetch(PDO::FETCH_ASSOC);
		$fname=$res['ffname'];
    $lname=$res['llname'];
	  $address=$res['aadress'];
  	$email=$res['eemail'];
  	$phone=$res['pphone'];
  	$password=$res['ppass'];
  	$conform_pass=$res['ccpass'];


	}
	?>
