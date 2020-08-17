<?php
  $conn = new PDO("mysql:host=localhost;port=3306;dbname=e-furniture", 'root', '');
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // var_dump($conn);
  // if($conn==true){

  // 		echo "connection successful";
  	
  // }else{
  // 	echo "this is wrong";
  // }
?>
