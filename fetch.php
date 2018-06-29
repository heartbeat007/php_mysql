<!DOCTYPE html>
<html>
<head>
	<title>database connection</title>
</head>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<body>


<?php

$conn = mysqli_connect("127.0.0.1","root","","widget_corp");
$quary = "SELECT * FROM subjects";
$result=mysqli_query($conn,$quary);
//echo $result;

while ($row = mysqli_fetch_assoc($result)) {
	var_dump($row);
	echo "</br>";
}


?>
</body>
</html>