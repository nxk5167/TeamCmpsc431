<?php

$user_input = $_POST["search"];
$dbhost = "localhost";
 
$dbuser = "root";
 
$dbpass = "";
 
$db = "dCoders";

mysqli_select_db($conn,"dCoders");
 
 
 


$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);

if(mysqli_connect_error())
{
  die("connection failed:" . mysqli_connect_error());
}


?>