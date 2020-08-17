<?php 

require 'connection.php';

if(isset($_POST['submit']))
{

    $username=$_POST['user'];
    $password=$_POST['pass'];
	  $role=$_POST['role'];
  	
  
$pdoQuery = "INSERT INTO registration (Usename,password,Role) VALUES (:user,:pass,:role)";
$pdoQuery_run = $conn->prepare($pdoQuery);
$pdoQuery_exec = $pdoQuery_run->execute(array(":user"=>$username, ":pass"=>$password, ":role"=>$role));

if (pdoQuery_exec) {
	 alert("Data Inserted in database") ;
	header('Location:form4add.php');
}
else {
	echo '<script> alert("Data Not Inserted in database") </script>';
}
}
 ?>