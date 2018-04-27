<?php
session_start();

$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$cardtype = filter_input(INPUT_POST, 'cardtype');
$cardnumber = filter_input(INPUT_POST, 'cardnumber');
$month = filter_input(INPUT_POST, 'month');
$year = filter_input(INPUT_POST, 'year');

$cvv = filter_input(INPUT_POST, 'cvv');
$state = filter_input(INPUT_POST, 'state');
$city = filter_input(INPUT_POST, 'city');
$street = filter_input(INPUT_POST, 'street');
$zipcode = filter_input(INPUT_POST, 'zipcode');

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "dCoders";



$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);

mysqli_select_db($conn ,"dCoders");


if(!$conn)
{
  die("connection failed:" . mysqli_connect_error());
}

$cardinfo =  "INSERT INTO Payment(ccn, type,cvv,month,year,firstname, lastname, state, city, street, zipcode)
VALUES ('$cardnumber', '$cardtype', '$cvv', '$month', '$year','$firstname', '$lastname', '$state', '$city', '$street','$zipcode');";

if (mysqli_query($conn, $cardinfo)) {
  echo "Congratulations, your order is completed!";
} else {
  echo "Error: " .$cardinfo ."<br>" .mysqli_error($conn);
}

mysqli_close($conn);

?>
