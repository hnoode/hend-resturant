<?php
session_start(); // Starting Session
// Variable To Store Error Message
$email = $_POST['email'];
$password = $_POST['password'];


$connect = mysqli_connect("localhost", "root", "") or die ("couldn't connect");
mysqli_select_db($connect, "hend resturant") or die ("couldn't find db");

$qry = "select name,email,password from customers where password = '$password' and email = '$email'";
$result = mysqli_query($connect, $qry);
$numrows = mysqli_num_rows($result);

$qry2 = "select name,email,password from admin where password = '$password' and email = '$email'";
$result2 = mysqli_query($connect, $qry2);
$numrows2 = mysqli_num_rows($result2);

if ($numrows != 0) {


    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;

    header("location: profile.php");


} else ?>
    <script>alert('incorrect email or password');</script>


    <?php

if ($numrows2 != 0) {


    $_SESSION['email'] = $email;
    header("location: admin.php");


} else ?>
    <script>alert('incorrect email or password');</script>
    <?php

?>







