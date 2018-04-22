<?php
 


$nameerr,$emailerr,$passworderr,$repeatpswerr, $stateerr, $cityerr, $streeterr, $zipcodeerr,$phonenumbererr = "";

$name,$accountholder,$email,$password,$repeatpsw, $state, $city, $street, $zipcode,$phonenumber, $additionalpn,$gender, $age, $annual-income="";

if (isset($_POST["submit"])){
$additionalpn = test_input($_POST["additional-phonenumber"]);
$age = test_input($_POST["age"]);
$annual-income = test_input($_POST["annual-income"]);
$gender = test_input($_POST["gender"]);
$accountholder = test_input($_POST["accountholder"]);

  if (empty($_POST["name"])) {
    $nameerr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
	if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
  	$nameerr = "Only letters and white space allowed"; 
	}
  }


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
 if (empty($_POST["repeat-password"])) {
    $repeatpswerr = "Password is required";
  } else {
    $repeatpsw = test_input($_POST["repeat-password"]);
  }

 if (empty($_POST["State"])) {
    $stateerr = "State is required";
  } else {
    $state = test_input($_POST["State"]);
  }
 if (empty($_POST["city"])) {
    $cityerr = "city is required";
  } else {
    $city = test_input($_POST["city"]);
  }
 if (empty($_POST["street"])) {
    $streeterr = "street is required";
  } else {
    $street = test_input($_POST["street"]);
  }
 if (empty($_POST["zipcode"])) {
    $zipcodeerr = "zipcode is required";
  } else {
    $zipcode = test_input($_POST["zipcode"]);
  }
 if (empty($_POST["phonenumber"])) {
    $phonenumbererr = "Phone Number is required";
  } else {
    $phonenumber = test_input($_POST["phonenumber"]);
  }

	if($password != $repeatpsw){
 $passworderr = "Password does not match";
	}
}

$dbhost = "localhost";
 
$dbuser = "root";
 
$dbpass = “database”;
 
$db = “dCoders”;


include("connection.php");

mysql_select_db("dCoders", $con);
 
 
 




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


























