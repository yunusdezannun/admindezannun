<?php
require 'connection.php';
$stmt = $con->query("SELECT * from data");
$row = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo '<table class="table table-border">'."\n";
echo "<td>id</td>";
echo "<td>Name</td>";
echo "<td>Location</td>";
echo "<td>Action</td>";
foreach ($row as $row) {
	echo "<tr><td>";
	echo ($row['id']);
	echo "</td><td>";
	echo ($row['name']);
	echo "</td><td>";	
	echo ($row['location']);
	echo "</td><td>";
	echo '<a href="insert.php?id='.$row['id'].'" class="btn btn-info">Edit</a>';
	echo "\t";
	echo '<a href="?id='.$row['id'].'" class="btn btn-danger">Delete</a>';
	echo "</td></tr>";
}

?>
</table>
</div>
</div>
</body>
</html>
