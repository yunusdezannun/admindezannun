<?php 

require 'connection.php';

if(isset($_POST['peleka']))
{

    $furn_name=$_POST['funame'];
    $furn_type=$_POST['futype'];
	$date_manufac=$_POST['dtmanuf'];
  	$place_manufact=$_POST['plmanuf'];
  	$materials=$_POST['mtr'];
  	
  
$pdoQuery = "INSERT INTO furn_manag (furniture_name,furniture_type,date_manufact,place_manufact,materials) VALUES(:funame,:futype,:dtmanuf,:plmanuf,:mtr)";
$pdoQuery_run = $conn->prepare($pdoQuery);
$pdoQuery_exec = $pdoQuery_run->execute(array(":funame"=>$furn_name, ":futype"=>$furn_type, ":dtmanuf"=>$date_manufac, 
  ":plmanuf"=>$place_manufact, ":mtr"=>$materials));

if (pdoQuery_exec) {
	echo '<script> alert("Data Inserted in database") </script>';
	header('Location:addfurn.php.php');
}
else {
	echo '<script> alert("Data Not Inserted in database") </script>';
}
}
 ?>