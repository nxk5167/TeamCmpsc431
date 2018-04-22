<html>
<head>
</head>
<body>
<?php

$con = mysql_connect("localhost", "root", "database");

if(!$conn)
{
  die("connection failed:" . mysqli_connect_error());
}

if(mysql_query("CREATE DATABASE dCoders",$con))
{
	echo "dCoders Database created successfully";
} else echo "Error: " . mysql_error();





mysql_close($con);

?>
</body>
</html>