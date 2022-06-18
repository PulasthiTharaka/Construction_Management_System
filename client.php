<?php
include("./connection.php");
$mysqlConnection = connect();
$cusId =  $_GET["cusId"] ?? null;
$customer = null;
if ($cusId !== null) {
    $query = "SELECT * FROM coustomer WHERE cusId='{$cusId}';";
    $response = mysqli_query($mysqlConnection, $query);
    if ($response) {
        if ($response->num_rows > 0) {
            $row = $response->fetch_row();
            	$customer = $row;
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
    <title>Client</title>
    <link rel="stylesheet" href="css/client.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">

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
            <a href="services.html">Services</a>
            <a href="Awards.html">Awards</a>
            <a href="News&media.html">News & Media</a>
            <a href="offers.html">Offers</a>
            <a href="AboutUs.html">About Us</a>
            <a href="ContactUs.html">Contact Us</a>
            <a href="FAQ.html">FAQ</a>

        </nav>

    </header>
    <!--End of Header Section with Navigation Bar-->

    <!--Banner Area-->
    <div class="banner-area">
        <h2 style="text-align: center;">client profile</h2>
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


        <div class="card">
            <img src="img/avatar.jpg" style="width:100%">
            <h1><?php echo $customer[1] ?></h1>
            <br>
            <p class="title"><?php echo $customer[2] ?></p><br><br>
            <p><?php echo $customer[3] ?>
                <br>
                <?php echo $customer[5] ?>
            </p>
            <br>

            <a class="buttn2" href="Admin.php"><button class="buttn1" type="button" id="admin">PROJECT</button></a>
            <a href="edite.php?GetID=<?php echo $cusId ?>"><button class="buttn1" type="button" id="admin">EDIT</button></a>
        </div>
        <!--Footer Section-->
        <footer class="footer-distributed">

            <div class="footer-left">
                <img src="img/nav1.jpg" style="width: 50px; height: 50px; border-radius: 50%;"><br><br>
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

                <div>
                    <i class="fa fa-phone"></i>
                    <p>011 649 2835</p>
                </div>
                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="">eg-constructions@gmail.com</a></p>
                </div>
            </div>
            <div class="footer-right">
                <p class="footer-company-about">
                    <br><br><br><br>
                    <span>About the company</span>
                    We Provide The Best Services As Your Choice
                </p>
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