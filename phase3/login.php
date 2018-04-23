<?php
 


$email = $_POST["email"];
$password  = $_POST["password"];


$dbhost = "localhost";
 
$dbuser = "root";

$dbpass = "database";
 
$db = "dCoders";

$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
if(mysqli_connect_error())
{
    die("connection failed:" . mysqli_connect_error());
}

$get_info = "SELECT rid, name, password, age, gender, annualincome FROM REGISTEREDUSER where email='$email';"; 
$is_correct = mysqli_query($connect, $get_info);

if(!$is_correct){
    echo mysqli_error($connect);
}
else{
	if(mysqli_num_rows($is_correct)<=0){
		echo "
			<!DOCTYPE html>
			<html lang=\"en\">
			<head>
   				<meta charset=\"UTF-8\">
    				<link rel=\"stylesheet\" type=\"text/css\" href=\"indexStyle.css\">
    				<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    				<!-- jQuery library -->
    				<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    				<!-- Latest compiled JavaScript -->
    				<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    				<title>Login Incorrect</title>
			</head>
			<div class=\"container\" style=\"padding: 30px 50px\">
			<div class=\"alert alert-danger\">
				Email or Password is incorrect, please try again!
			</div>
			</div>";
	}
	else{
            $get_row = mysqli_fetch_assoc($is_correct);
        }


	if($get_row["password"] == $password){
		header('loggedin.php?email='.$email.'&password='.$password);
		
		$in = 'user.html';
		echo "<a href='$in'>User Page</a>";
	}
	else{
		echo "
			<!DOCTYPE html>
			<html lang=\"en\">
			<head>
   				<meta charset=\"UTF-8\">
    				<link rel=\"stylesheet\" type=\"text/css\" href=\"indexStyle.css\">
    				<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    				<!-- jQuery library -->
    				<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    				<!-- Latest compiled JavaScript -->
    				<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    				<title>Login Incorrect</title>
			</head>
			<div class=\"container\" style=\"padding: 30px 50px\">
			<div class=\"alert alert-danger\">
				Email or Password is incorrect, please try again!
			</div>
			</div>";
}
  }


mysqli_close($connect);





?>





















