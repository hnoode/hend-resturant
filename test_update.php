<html>
<head>

</head>
<body>

<?php

if (isset($_POST['update'])) {
    $connect = mysqli_connect("localhost", "root", "") or die ("couldn't connect");
    mysqli_select_db($connect, "hend resturant") or die ("couldn't find db");


    $qry = "UPDATE menu SET `mail name`='" . $_POST['it_name'] . "', `mail price` ='" . $_POST['it_price'] . "',`mail describtion`='" . $_POST['it_d'] . "'
 WHERE `mail ID` =" . $_POST['id'];

    $result = mysqli_query($connect, $qry);
    mysqli_close($connect);
    header("location: admin_view_m.php");
    exit();
}
if (isset($_POST['delete'])) {
    $connect = mysqli_connect("localhost", "root", "") or die ("couldn't connect");
    mysqli_select_db($connect, "hend resturant") or die ("couldn't find db");
    $qry2 = "delete from menu where `mail ID`=" . $_POST['id'];
    $result2 = mysqli_query($connect, $qry2);
    header("location: admin_view_m.php");

}


?>
</body>
</html>
