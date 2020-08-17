
<?php
require 'connection.php';

if (isset($_GET['id'])) 
{
	$id = $_GET['id'];
	$pdoQuery="DELETE FROM cust WHERE id=:id";
	$pdoQuery_run = $conn->prepare($pdoQuery);
    $pdoQuery_exec = $pdoQuery_run->execute(array(':id' => $_GET['id']));

}
header('location:form4add.php');
?>
