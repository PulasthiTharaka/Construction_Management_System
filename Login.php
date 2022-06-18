<?php
include("./connection.php");
$mysqlConnection = connect();
$email =  $_POST["email"] ?? null;
$password =  $_POST["password"] ?? null;
if ($email !== null && $password !== null) {
    $query = "SELECT * FROM coustomer WHERE email='{$email}' AND password='{$password}';";
    $response = mysqli_query($mysqlConnection, $query);
    if ($response) {
        if ($response->num_rows > 0) {
            $row = $response->fetch_row();
            header("Location:client.php?cusId=" . $row[0]["cusId"]);
        } else {
            echo "Login Faild:";
        }
    } else {
        echo "ERROR: " . mysqli_error($mysqlConnection);
    }
    mysqli_close($mysqlConnection);
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/Login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <!--Header Section with Navigation Bar-->


    <header>
        <div class="logo">
            <img class="logo1" src="img/nav1.jpg">
            <label>EverGreen Constructions<label>
        </div>

        <nav>
            <a href="Homepage.html">Home</a>
            <a href="Services.html">Services</a>
            <a href="Awards.html">Awards</a>
            <a href="News&Media.html">News & Media</a>
            <a href="Offers.html">Offers</a>
            <a href="AboutUs.html">About Us</a>
            <a href="ContactUs.html">Contact Us</a>
            <a href="FAQ.html">FAQ</a>

        </nav>

    </header>
    <!--End of Header Section with Navigation Bar-->

    <!--Banner Area-->
    <div class="banner-area">
        <h2 style="text-align: center;">WELCOME TO LOGIN</h2>
    </div>
    <!--End of Banner Area-->

    <!--Content Area-->
    <!--Area 01-->
    <div class="content-area">

        <table style="background-color: black; width:100%;  height:50px; ">
            <td>
                <h1 style="text-align: center;"></h1>
            </td>
        </table>

        <div class="contain">
            <form action="" method="post" id="login-form" target="_bkank">

                <div style="text-align: center;">
                    <div class="heading">
                        <h1>
                            <font color="white"> EVER</font>
                            <font color="green"> GREEN</font>
                            <font color=" #ff7c10"> CONSTRUCTIONS</font>
                        </h1><br><br>
                        <center><img src="img/nav1.jpg" class="regimg1"><br><br></center>
                    </div>

                    <div class="up">
                        <label class="label">Email</label> <br><br>
                        <input class="txtbox" type="email" name="email" id="email" placeholder="abc@mail.com" pattern="[a-zA-Z0-9._+-%*!$&,]+@[a-z0-9]+\.[a-z]{2,3}"> <br><br><br>

                        <label class="label">Password</label> <br><br>
                        <input class="txtbox" type="password" name="password" id="pass" placeholder="password" pattern="[a-zA-Z0-9]{5,10}"> <br><br><br>


                        <button class="submit" type="submit">Login</button><br><br>
                    </div>


                    <div class="down">

                        <div class="connect">Connect with:</div>
                        <br><br>
                        <a href="http://facebook.com/" class="facebook">
                            <i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>

                        <a href="http://twitter.com/" class="twitter">
                            <i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>

                        <a href="http://google-plus.com/" class="google-plus">
                            <i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a>
                    </div>
                </div>
            </form>
        </div>


    </div>
    <!--End of Content Area-->



    <!--Footer Section-->
    <footer class="footer-distributed">

        <div class="footer-left">
            <img src="img/nav1.jpg" style="width: 50px; height: 50px;"><br><br>
            <h3>EVERGREEN<span> CONSTRUCTION</span></h3>

            <p class="footer-links">
                <a href="Homepage.html">Home</a>
                |
                <a href="News&media.html">News & Media</a>
                |
                <a href="AboutUs.html">About Us</a>
                |
                <a href="ContactUs.html">Contact Us</a>
                |
                <a href="services.html">Services</a>

            </p>

            <p class="footer-company-name">Copyright &copy 2020. All rights reserved</p>
        </div>

        <div class="footer-center">
            <div>
                <br><br><br><br>
                <i class="fa fa-map-marker"></i>
                <p><span>
                        No 603,
                        New Kandy Rd,
                    </span>
                    Malabe </p>
            </div>
            <br>
            <div>
                <i class="fa fa-phone"></i>
                <p>011 649 2835</p>
            </div>
            <br>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="">eg-constructions@gmail.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <br><br><br><br>
                <span>About the company</span>
                We Provide The Best Services As Your Choice</p>
            <div class="footer-icons">
                <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>


            </div>
        </div>
    </footer>

    <!--End of Footer Section-->

</body>

</html>