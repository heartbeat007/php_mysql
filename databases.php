
<!DOCTYPE html>
<html>
<head>
	<title>database connection</title>
</head>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<body>


<?php

// php mysql page we will create a connection 
//with the php and the mysql
//database name is the widget_corp
//lets create a database connection with the following command
//with the mysqli_connect() method
//----------------------------------------------------------
//the error method willl be the mysqli_connect_errno() method
// its the new metghod
//1. create connection with mysqli_connect(host,user,password,database_name)
//error will be checked by the mysql_connect_errno() method
// the connection will be closed by the mysqli_close() method
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "widget_corp";
$conn = mysql_connect($dbhost,$dbhost,$dbpass,$dbname);

if (mysqli_connect_errno()) {
	die("connection failed ".mysqli_connnect_errno());
}
else{
	echo "<center><h1> connection established </h1></center>";
}


mysqli_close($conn);
?>




</body>
</html>
