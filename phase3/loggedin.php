<?php
 


$dbhost = "localhost";
 
$dbuser = "root";

$dbpass = "database";
 
$db = "dCoders";

$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
if(mysqli_connect_error())
{
    die("connection failed:" . mysqli_connect_error());
}

$email = $_GET['email'];
$password = $_GET['password'];












?>