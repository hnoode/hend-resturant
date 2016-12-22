<?php
$name = $_POST["name"];
$email = $_POST["email"];


?>
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
                        <a class="" href="registration.html">Register</a>
                    </li>
                    <li style="float: left; margin-right: 32px;" class="hide_on_tablet">
                        <a class="" href="login.html">Login</a>
                    </li>
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
                <h1 class="page-header smallen"
                    style="font-weight: 500; font-family: 'open_sanslight', Verdana; margin-bottom:20px; color: white; text-align: center;">
                    Order food online
                </h1>
            </div>
        </div>
    </div>


    <section class='sub-content' style="padding: 100px;">
        <div class="container" style="padding: 10px; border:solid #b3ada9">
            <div class="row"
                 style="padding: 10px; padding-top: 25px; margin-bottom: 15px; margin-left: 0px; margin-right: 0px;">
                <h1 class="col-sm-12 gap-col-top"
                    style="color:#444444; text-align: center;text-shadow: 2px 2px 9px #AAAAAA;">your Information</h1>
            </div>
        </div>
        <h3> Name: <?php echo $_POST["name"]; ?><br>
            E-mail: <?php echo $_POST["email"]; ?>

        </h3>

        <h2>Thank you for your registration .. </h2>
    </section>
</div>


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