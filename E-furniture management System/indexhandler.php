<?php
include 'connection.php';

if(isset($_POST['btnsub'])){
    $users=$_POST['user'];
    $passw=$_POST['pass'];
    $sql="SELECT * FROM registration WHERE (Username=:usr AND password=:psw)";
    $stmt=$conn->prepare($sql);
    $stmt->execute(array('usr'=>$users,'psw'=>$passw));
    if($stmt->rowCount()==1){
        session_start();
        //sessions
        header("location:home.php");
    }else{
        header("location:index.php");
    }
}else{
    header("location:index.php");
}
?>

