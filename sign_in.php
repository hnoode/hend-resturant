<?php
session_start(); // Starting Session

// Define $username and $password
$email = $_POST['email'];
$password = $_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$conn_error = "could not connect";
$mysql_host = "localhost";
$mysql_user = "root";
$mysql_pass = "";
$mysql_db = "hend resturant";

$con = mysqli_connect($mysql_host, $mysql_user, $mysql_pass) or die ($conn_error);
mysqli_select_db($con, $mysql_db);


$query = mysqli_query($con, "select * from customers where email='email'");


$result = $query;
if (!$result) {
    die(mysqli_error($con));
}

$rows = mysqli_num_rows($result);
if ($rows == 1) {

    echo("ok"); // Redirecting To Other Page
} else {
    echo("email or Password is invalid");
}
mysqli_close($con); // Closing Connection


?>