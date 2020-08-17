<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
//MYSQLI
// $mysqli = new mysqli("localhost","root","","yunus");
// if($mysqli->error){
// 	echo "error";
// };
// $result = $mysqli->query("SELECT 'Hello, dear MySQL user!' AS _message FROM DUAL");
// $row = $result->fetch_assoc();
// echo htmlentities($row['_message']);


$pdo = new PDO ('mysql:host=localhost;dbname=yunus','root','');
$statement = $pdo->query("SELECT * FROM users");
$row = $statement-> fetchAll(PDO::FETCH_ASSOC);
echo '<table border="1">'."\n";
foreach ( $row as $row ) {
echo "<tr><td>";
echo($row['user_id']);
echo("</td><td>");
echo($row['firstname']);
echo("</td><td>");
echo($row['lastname']);
echo("</td><td>");
echo($row['email']);
echo("</td><td>");
echo($row['phoneNumber']);
echo("</td></tr>\n");
}
echo "</table>\n";
  ?>
</body>
</html>