<?php


$connect = mysqli_connect("localhost", "root", "") or die ("couldn't connect");
mysqli_select_db($connect, "hend resturant") or die ("couldn't find db");


if (isset($_POST['add'])) {
    $item = mysqli_real_escape_string($connect, $_POST['it_name']);
    $dec = mysqli_real_escape_string($connect, $_POST['it_d']);
    $price = mysqli_real_escape_string($connect, $_POST['it_price']);

    if (mysqli_query($connect, "INSERT INTO menu (`mail name`,`mail describtion`,`mail price`) VALUES('$item','$dec','$price')")) {
        ?>
        <script>alert('successfully adding ');</script>
        <?php

        header("location: admin_view_m.php");
    } else {
        ?>
        <script>alert('error while you add ...');</script>
        <?php
    }
}

?>


<html xmlns="http://www.w3.org/1999/html">

<head>
    <title>Online Food Ordering and Deliveries,Takeaways, Pickups, with Preorders</title>

    <meta charset="utf-8">
    <meta http-equiv="content-language" content="en">
    <meta name="classification" content="Online Food Delivery">
    <meta name="Subject" content="Online Food Delivery">
    <meta name="city" content="Riyadh">
    <meta name="country" content="Saudi Arabia">
    <meta name="resource-type" content="document">
    <meta name="description"
          content="It is an online food ordering website which allows customers to order food in the easiest and most effective way.">
    <link rel="stylesheet" type="text/css" href="bootstrap.css" media="all">
    <link rel="stylesheet" type="text/css" href="style.css" media="all">


</head>
<body>


<nav role="navigation" style="padding-top: 10px;background-color:#e74c3c">
    <div class="container" style="padding-right: 0px; padding-left: 0px;">
        <div class="container">
            <a style="float: none;color: white;text-decoration: none;font-size: 30px;"
               class="navbar-brand navbar-brand-top loadingText_mini" href="index.html">
                <img src="logo.png" style="max-height: 36px; margin-top: 2px;"/>
            </a>
            <nav style="float: right; display: block;" class="hp-topbar">
                <ul style="list-style: none; margin-top: 5px;">

                    <li style="float: left; margin-right: 32px;" class="hide_on_tablet">
                        <a class="" href="logout.php">Siqn out</a>
                    </li>


                    <li style="float: left; margin-right: 32px;" class="hide_on_tablet">
                        <a class="" href="admin_view.php">View customers</a>
                    </li>
                    <li style="float: left; margin-right: 32px;" class="hide_on_tablet">
                        <a class="" href="admin_view_m.php">View Item</a>
                    </li>
                    <li class="hide-on-mobile" style="float: left; margin-right: 32px;" class="hide_on_tablet">
                        <a class="" href="admin_menu.php">Menu</a>
                    </li>
                    <li class="hide-on-mobile" style="float: left; margin-right: 32px;">
                        <a class="" href="#">About Us</a>
                    </li>
                </ul>
            </nav>

            <div style="clear: both"></div>
        </div>
    </div>
</nav>
<div class="" style="padding: 0px;">
    <div class="main-content" style="background-color:#e74c3c">
        <div class="container">
            <div class="" style="padding-top: 50px;">

                <br><br>
                <h1 class="page-header smallen"
                    style="font-weight: 500; font-family: 'open_sanslight', Verdana; margin-bottom:20px; color: white; text-align: center;">
                    Order Drinks online
                </h1>

            </div>
        </div>
    </div>
    <section class='sub-content' style="padding: 100px;">
        <div class="container" style="padding: 10px;">
            <nav id="cuisine" style="padding: 15px;">


                <center>
                    <form method="post">


                        <h2 id='pp'> To add item</h2> <br>
                        <table id='table' id="usertable" border='1'>
                            <tr>
                                <td>write item name</td>
                                <td><input name="it_name"></td>
                            </tr>

                            <tr>
                                <td id='t1'>detailes</td>
                                <td id='t2'><input name="it_d"></td>
                            </tr>

                            <tr>
                                <td>price</td>
                                <td><input name="it_price"></td>
                            </tr>


                            <tr>
                                <td><input type="submit" name="add" value="add Item"></td>
                            </tr>
                        </table>
                    </form>
                </center>
                <br><br>
                <hr>
                <center>

                    <br>
                    <h2 id='pp'> To update item</h2> <br>
                </center>
                <div class="col-sm-6 gap-col-top">
                    <div>
                        <img src="Orange Juice.jpg" style="padding:20px;" alt="Drinks">
                    </div>
                </div>
                <br><br>
                <form method="post" action="test_update.php">

                    <?php
                    $connect = mysqli_connect("localhost", "root", "") or die ("couldn't connect");
                    mysqli_select_db($connect, "hend resturant") or die ("couldn't find db");
                    $query2 = "SELECT * FROM menu WHERE `mail ID` =4";
                    mysqli_error($connect);
                    $result2 = mysqli_query($connect, $query2);
                    while ($row = mysqli_fetch_assoc($result2)) {
                        $id = $row['mail ID'];
                        $mail_n = $row['mail name'];
                        $mail_p = $row['mail price'];
                        $mail_d = $row['mail describtion'];
                    }
                    mysqli_error($connect);
                    mysqli_close($connect);
                    ?>
                    <table border='1'>

                        <tr>
                        <tr>
                            <td>write item name</td>
                            <td><input type="text" name="it_name" value="<?php echo $mail_n; ?>"></td>
                        </tr>

                        <tr>
                            <td>detailes</td>
                            <td><input type="text" name="it_d" value="<?php echo $mail_d; ?>"></td>
                        </tr>

                        <tr>
                            <td>price</td>
                            <td><input type="text" name="it_price" value="<?php echo $mail_p; ?>"></td>
                        </tr>
                        <input type="hidden" name="id" size="5" value="<?php echo $id; ?>">

                        <td><input type="submit" name="update" value="Update Item"></td>
                        <td><input type="submit" name="delete" value="delete"></td>
                        </tr> </table>
                </form>

                <br><br><br><br>
                <div class="col-sm-6 gap-col-top">
                    <div>
                        <img src="Apple.jpg" style="padding:20px;" alt="Drinks">
                    </div>
                </div>
                <br><br><br>
                <form method="post" action="test_update.php">

                    <?php
                    $connect = mysqli_connect("localhost", "root", "") or die ("couldn't connect");
                    mysqli_select_db($connect, "hend resturant") or die ("couldn't find db");
                    $query2 = "SELECT * FROM menu WHERE `mail ID` =5";
                    mysqli_error($connect);
                    $result2 = mysqli_query($connect, $query2);
                    while ($row = mysqli_fetch_assoc($result2)) {
                        $id = $row['mail ID'];
                        $mail_n = $row['mail name'];
                        $mail_p = $row['mail price'];
                        $mail_d = $row['mail describtion'];
                    }
                    mysqli_error($connect);
                    mysqli_close($connect);
                    ?>
                    <table border='1'>

                        <tr>
                        <tr>
                            <td>write item name</td>
                            <td><input type="text" name="it_name" value="<?php echo $mail_n; ?>"></td>
                        </tr>

                        <tr>
                            <td>detailes</td>
                            <td><input type="text" name="it_d" value="<?php echo $mail_d; ?>"></td>
                        </tr>

                        <tr>
                            <td>price</td>
                            <td><input type="text" name="it_price" value="<?php echo $mail_p; ?>"></td>
                        </tr>
                        <input type="hidden" name="id" size="5" value="<?php echo $id; ?>">

                        <td><input type="submit" name="update" value="Update Item"></td>
                        <td><input type="submit" name="delete" value="delete"></td>
                        </tr> </table>
                </form>

                <br><br><br><br>
                <form method="post" action="test_update.php">
                    <div class="col-sm-6 gap-col-top">
                        <div>
                            <img src="coc.jpg" style="padding:20px;" alt="Drinks">
                        </div>
                    </div>
                    <br><br><br>
                    <?php
                    $connect = mysqli_connect("localhost", "root", "") or die ("couldn't connect");
                    mysqli_select_db($connect, "hend resturant") or die ("couldn't find db");
                    $query2 = "SELECT * FROM menu WHERE `mail ID` =6";
                    mysqli_error($connect);
                    $result2 = mysqli_query($connect, $query2);
                    while ($row = mysqli_fetch_assoc($result2)) {
                        $id = $row['mail ID'];
                        $mail_n = $row['mail name'];
                        $mail_p = $row['mail price'];
                        $mail_d = $row['mail describtion'];
                    }
                    mysqli_error($connect);
                    mysqli_close($connect);
                    ?>
                    <table border='1'>

                        <tr>
                        <tr>
                            <td>write item name</td>
                            <td><input type="text" name="it_name" value="<?php echo $mail_n; ?>"></td>
                        </tr>

                        <tr>
                            <td>detailes</td>
                            <td><input type="text" name="it_d" value="<?php echo $mail_d; ?>"></td>
                        </tr>

                        <tr>
                            <td>price</td>
                            <td><input type="text" name="it_price" value="<?php echo $mail_p; ?>"></td>
                        </tr>
                        <input type="hidden" name="id" size="5" value="<?php echo $id; ?>">

                        <td><input type="submit" name="update" value="Update Item"></td>
                        <td><input type="submit" name="delete" value="delete"></td>
                        </tr> </table>
                </form>

        </div>
</div>
</div>
</div>
</nav>
</div>
</section>
<div class="footer-html"></div>
<div class="bottom-listings" style="">
    <div class="" style="text-align: center;"></div>
</div>
</div>
<footer class>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <a class="footer-brand" href="index.html">
                      		<span style="float: left;">
                        		<img src="logo.png" style="max-height: 36px; margin-top: 8px;"/>
                      		</span>
                </a>
                <p style="margin-top: 17px;">We help you find and order food from wherever you are.</p>
            </div>
            <div class="col-lg-3 col-md-3"></div>
            <div class="col-lg-3 col-md-3">
                <h3>CONTACT</h3>
                <address>
                    <p style="margin-bottom: 5px;"><i class="fa fa-map-marker"></i>Localizer Mall<br>
                        <span style="padding-left: 11px;">2nd Floor B Block</span>
                        <br>
                        <span style="padding-left: 11px;">Thalia Street</span><br><span style="padding-left: 11px;">12222 Riyadh</span><br>
                    </p>
                    <i class="fa fa-phone"></i>
                    (+966) 800-120-1234
                    <br>
                    <i class="fa fa-envelope"></i>
                    info@riyadh.gov.sa
                </address>
            </div>
        </div>
    </div>
    <div class="footer-after">
        <div class="container">
            <div class="row">
                <p class="col-md-8" style="margin: 0;">&copy; 2016 All rights reserved.</p>
                <p class="col-md-4 legal linkset" style="margin: 0;">
                    <a style="margin-right: 25px;" href="#">FAQs</a>
                    <a style="margin-right: 25px;" href="#">Careers</a>
                    <a style="margin-right: 25px;" href="#" rel="nofollow">Privacy</a>
                    <a href="#" rel="nofollow">Terms of Use</a>
                </p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>


