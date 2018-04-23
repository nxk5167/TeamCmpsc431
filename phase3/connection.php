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

mysql_close($con);

?>
</body>
</html>