<?php
require 'connection.php';

session_start();

if (isset($_POST["save"])){
    $username=$_POST["user"];
    $password=$_POST["pass"];
    $pdoQuery="SELECT * FROM registration WHERE Username= :user AND password= :pass";
    $pdoQuery_run=$conn->prepare($pdoQuery);
    $pdoQuery_run->execute(array("user"=>$username,"pass"=>$password));
    
    if ($pdoQuery_run->rowCount()==1) {

   $data = $pdoQuery_run->fetch();

   $_SESSION["Role"]=$data["Role"];

   if ($_SESSION["Role"]==="student"){
    header("location:home.php");

   }else if($_SESSION["Role"]==="admin"){
    header("location:admin.php");
   }

    }else{
        header("location:logini.php");
    }   
}
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['user1']);
    header('location:index.php');
}
?>
