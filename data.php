<html>

<head>
    <meta charset="UTF-8">
    <title>Data</title>
    <link rel="stylesheet" href="css/Registration.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <script src="js/Registration.js"></script>
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
        <h2 style="text-align: center;">Customer-Data</h2>
    </div>
    <!--End of Banner Area-->

    <!--Content Area-->
    <!--Area 01-->
    <div class="content-area">

        <table style="background-color: Red; width:100%;  height:50px; ">
            <td>
                <h1 style="text-align: center;"></h1>
            </td>
        </table>


        <?php
        include("./connection.php");
        $mysqlConnection = connect();
        $firstName =  $_POST["firstName"];
        $lastName =  $_POST["lastName"];
        $mobileNumber =  $_POST["mobileNumber"];
        $nicNumber =  $_POST["nicNumber"];
        $email =  $_POST["email"];
        $address =  $_POST["address"];
        $password =  $_POST["password"];
        $prName =  $_POST["prName"];
        $prType =  $_POST["prType"];
        $location =  $_POST["location"];
        $prDetails =  $_POST["prDetails"];

        $query = "INSERT INTO coustomer (firstName, lastName, mobileNumber, nicNumber, email, address, password) VALUES ('{$firstName}','{$lastName}','{$mobileNumber}','{$nicNumber}','{$email}','{$address}','{$password}');";

        if (mysqli_query($mysqlConnection, $query)) {
            $customerId = $mysqlConnection->insert_id;
            $query1 = "INSERT INTO project (prName, prType, location, prDetails, cusId) VALUES ('{$prName}','{$prType}','{$location}','{$prDetails}','{$customerId}');";
            if (mysqli_query($mysqlConnection, $query1)) {
                echo "saved";
            }
            else{
                echo "ERROR: " . mysqli_error($mysqlConnection);
            }
        } else {
            echo "ERROR: " . mysqli_error($mysqlConnection);
        }
        mysqli_close($mysqlConnection);

        ?>



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