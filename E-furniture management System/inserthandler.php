<?php 

require 'connection.php';

if(isset($_POST['submit']))
{

    $fname=$_POST['ffname'];
    $lname=$_POST['llname'];
	$address=$_POST['aadress'];
  	$email=$_POST['eemail'];
  	$phone=$_POST['pphone'];
  	$password=$_POST['ppass'];
  	$conform_pass=$_POST['ccpass'];
  
$pdoQuery = "INSERT INTO cust (fname,lname,address,email,phone,password,conform_pass) VALUES (:ffname,:llname,:aadress,:eemail,:pphone, :ppass, :ccpass)";
$pdoQuery_run = $conn->prepare($pdoQuery);
$pdoQuery_exec = $pdoQuery_run->execute(array(":ffname"=>$fname, ":llname"=>$lname, ":aadress"=>$address, ":eemail"=>$email, ":pphone"=>$phone, ":ppass"=>$password, ":ccpass"=>$conform_pass));

if (pdoQuery_exec) {
	echo '<script> alert("Data Inserted in database") </script>';
	header('Location:form4add.php');
}
else {
	echo '<script> alert("Data Not Inserted in database") </script>';
}
}
 ?>