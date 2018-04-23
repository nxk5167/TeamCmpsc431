<html>
<head>
</head>
<body>
<?php

include("connection.php");

mysql_select_db("dCoders", $con);

$sql1 = "CREATE TABLE RegisteredUser (
rid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
password VARCHAR(30) NOT NULL,age INT(2),
gender VARCHAR(30) NOT NULL,annualincome INT(30)
)";
mysql_query($sql1, $con);

$sql2 = "CREATE TABLE PhoneNumber(
number INT(10) UNSIGNED PRIMARY KEY,
FOREIGN KEY (rid) REFRENCES RegisteredUser(rid)
)";

$sql3 = "CREATE TABLE Address(
rid INT(6) UNSIGNED PRIMARY KEY,
zip INT(5) UNSIGNED, 
state VARCHAR(15) NOT NULL,
street VARCHAR(50) NOT NULL,
city VARCHAR(50) NOT NULL,
)";

$sql4 = "CREATE TABLE Person(
pid INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
FOREIGN KEY (rid) REFRENCES RegisteredUser(rid)
)";

$sql5 = "CREATE TABLE Company(
cid INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
FOREIGN KEY (rid) REFRENCES RegisteredUser(rid)
)";

$sql6 = "CREATE TABLE Buyer(
buid INT(4) UNSIGNED PRIMARY KEY,
FOREIGN KEY (rid) REFRENCES RegisteredUser(rid)
)";

$sql7 = "CREATE TABLE Seller(
sid INT(5) UNSIGNED PRIMARY KEY,
FOREIGN KEY (rid) REFRENCES RegisteredUser(rid)
)";

$sql8 = "CREATE TABLE Payment(
ccn INT(16) UNSIGNED PRIMARY KEY,
exp INT(8) UNSIGNED,
type VARCHAR(10) NOT NULL,
FOREIGN KEY (rid) REFRENCES RegisteredUser(rid)
)";

mysql_query($sql1, $con);
mysql_query($sql2, $con);
mysql_query($sql3, $con);
mysql_query($sql4, $con);
mysql_query($sql5, $con);
mysql_query($sql6, $con);
mysql_query($sql7, $con);
mysql_query($sql8, $con);


mysql_close($con);

?>
</body>
</html>