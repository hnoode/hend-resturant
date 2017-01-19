<?php

$conn_error = "could not connect";
$mysql_host = "localhost";
$mysql_user = "root";
$mysql_pass = "";
$mysql_db = "hend resturant";


$con = mysqli_connect($mysql_host, $mysql_user, $mysql_pass);
mysqli_select_db($con, $mysql_db) or die ($conn_error);

echo " connected ";
?>