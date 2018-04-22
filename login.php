<?php
 



$dbhost = "localhost";
 
$dbuser = "root";
 
$dbpass = “database”;
 
$db = “dCoders”;


include("connection.php");

mysql_select_db("dCoders", $con);
 
 
 

$emailerr,$passworderr = "";

$email,$password="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["email"])) {
    $emailerr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  	$emailerr = "Invalid email format"; 
	}
  }
 if (empty($_POST["password"])) {
    $passworderr = "Password is required";
  } else {
    $password  = test_input($_POST["password"]);
  }
 
}

$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);

if(!$conn)
{
  die("connection failed:" . mysqli_connect_error());
}

$userInfo =  "INSERT INTO RegisteredUser (name, email, password, age, gender, annualincome)
VALUES ($name, $email, $password, $age, $gender, $annual-income)";

$userPHONE =  "INSERT INTO PhoneNumber (number)
VALUES ($phonenumber)";

if (empty($_POST["additional-phonenumber"])) {
  } else {
    $userADDPHONE =  "INSERT INTO PhoneNumber(number)
	VALUES ($additionalpn)";
  }


$userAddress =  "INSERT INTO Address (zip, state, street, city)
VALUES ($zipcode, $state, $street, $city)";


mysqli_close($con);
?>


























