<?php


$connect = mysqli_connect("localhost", "root", "") or die ("couldn't connect");
mysqli_select_db($connect, "hend resturant") or die ("couldn't find db");


if (isset($_POST['submit'])) {

    $name = $_POST['name'];

    $password = $_POST['password'];

    $email = $_POST['email'];

    $update = "UPDATE customers SET name = '$name', email= '$email' , password='$password'

       WHERE name = '$name'";


    if (mysqli_query($connect, $update)) {

        $_SESSION['name'] = $name;

        $_SESSION['password'] = $password;

        $_SESSION['email'] = $email;

    }

}
?>


<!DOCTYPE html>

<html>
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
                    <li style="float: left; margin-right: 32px;" class="hide_on_tablet"><a href="https://www.e-junkie.com/ecom/fgb.php?c=cart&cl=1&ejc=2&
merchant_id=your_google_merchant_id&business=your_paypal_email" target="ej_ejc" class="ec_ejc_thkbx"
                                                                                           onClick="return EJEJC_lc(this);">View
                            cart</a></li>
                    <script language="javascript" type="text/javascript">
                        <!--
                        function EJEJC_lc(th) {
                            return false;
                        }
                        // -->
                    </script>
                    <script type="text/javascript"
                            src="https://www.e-junkie.com/ecom/box.js"></script>
                    <li class="hide-on-mobile" style="float: left; margin-right: 32px;" class="hide_on_tablet">
                        <a class="" href="menu.html">Menu</a>
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


                <!-- VIEW CART button code. -->

                <br>
                <h1 class="page-header smallen"
                    style="font-weight: 500; font-family: 'open_sanslight', Verdana; margin-bottom:20px; color: white; text-align: center;">
                    your profile
                </h1>
            </div>
        </div>
    </div>
    <section class='sub-content' style="padding: 100px;">
        <div class="container" style="padding: 10px;">
            <nav id="cuisine_shortcuts" style="padding: 15px;">

                <h1>Updeted Information</h1>
                <hr>

                <h2>Updated Sucessfully!</h2>

                <?php

                $connect = mysqli_connect("localhost", "root", "") or die ("couldn't connect");
                mysqli_select_db($connect, "hend resturant") or die ("couldn't find db");

                session_start();

                $name = $_POST['name'];

                $email = $_POST['email'];

                $password = $_POST['password'];

                echo "<table border='1'>

<tr><td>name:  </td><td>$name</td></tr>

<tr><td>Password:   </td><td>$password </td></tr>

<tr><td>email:   </td><td>$email </td></tr>

</table>"; ?>

                <br><br><br><b><a href="profile.php">Back </a></b>
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