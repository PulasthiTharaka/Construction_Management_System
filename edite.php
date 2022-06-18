<?php
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "cms");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <link rel="stylesheet" href="css/Update.css">
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
                <h2 style="text-align: center;"><font color="white">EVER</font><font color="green"> GREEN</font> <font color=" orangered">  CONSTRUCTIONS</font></h2><br>
                <img src="img/nav1.jpg" class="regimg1"><br>
            </div>
            <!--End of Banner Area-->

            <!--Content Area-->
            <!--Area 01-->
            <div class="content-area">
        
                <table style="background-color: black; width:100%;  height:50px; "><td>
                <h1 style="text-align: center;"></h1>
                </td></table>

                

            <form action="#" target="_self" method="post" onsubmit="return correctPassword()">
                    <div class="div00">
                    
                        <div ><center>
                            <img class="Slide1" src="img/Road.jpg" >
                            <img class="Slide1" src="img/Road1.jpg">
                            <img class="Slide1" src="img/Road2.jpg" >
                            <img class="Slide1" src="img/Road3.jpg" >
                            <img class="Slide1" src="img/Road4.jpg" >
                            <img class="Slide1" src="img/Road5.jpeg" >
                            
                            </center></div>

                        <h1 class="h1">UPDATE YOUR PROFILE</h1>
                
                <div class="div1">
                    <div class="div2"> 
                        <br><br><br>

                        <h1 class="reg1">OLD DETAILS</h1> <br><br><br><br><br>

                        <label class="name">Old First Name</label><br><br>
                        <input type="text" name="t1" id="FirstName" class="form" placeholder="Enter Your Old First Name" required><br><br><br><br><br><br>
                        
                        <label class="name" >Old Last Name</label><br><br>
                        <input type="text" name="t3" id="Lastname" class="form"  placeholder="Enter Your  Old Last Name" required>|<br><br><br><br><br><br>

                        <label class="name">Old E-mail Address</label><br><br>
                        <input type="email" name="t9" id="email" class="form" placeholder="Enter Your  Old Email" pattern="[a-zA-Z0-9._+-%*!$&,]+@[a-z0-9]+\.[a-z]{2,3}" required><br><br><br><br><br><br>
                 
                        <label class="name">Old Mobile Number:</label><br><br>
                        <input type="phone" name="t5" id="mobile" class="form" pattern="[0-9]{10}" placeholder="Enter Your Old Mobile Number" required><br><br><br><br><br><br>
    
                        <label class="name">Old Address:</label><br><br>
                            <textarea name="t11" id="address" rows="10" cols="50" class="form" placeholder="Enter Your Old Address" required></textarea><br><br><br>

                     </div>

                    <div class="div3">

                        <h1 class="reg2">NEW DETAILS</h1> <br><br><br><br><br><br><br><br>

                        <label class="name">New First Name</label><br><br>
                        <input type="text" name="t2" id="FirstName" class="form" placeholder="Enter Your New First Name" required><br><br><br><br><br><br>
                        
                        <label class="name" > New Last Name</label><br><br>
                        <input type="text" name="t4" id="Lastname" class="form"  placeholder="Enter Your New Last Name" required>|<br><br><br><br><br><br>

                        <label class="name">New E-mail Address</label><br><br>
                        <input type="email" name="t10" id="email" class="form" placeholder="Enter Your  Old Email" pattern="[a-zA-Z0-9._+-%*!$&,]+@[a-z0-9]+\.[a-z]{2,3}" required><br><br><br><br><br><br>
                 
                        <label class="name">New Mobile Number:</label><br><br>
                        <input type="phone" name="t6" id="mobile" class="form" pattern="[0-9]{10}" placeholder="Enter Your New Mobile Number" required><br><br><br><br><br><br>
    
                        <label class="name">New Address:</label><br><br>
                            <textarea name="t12" id="address" rows="10" cols="50" class="form" placeholder="Enter Your New Address" required></textarea><br><br><br>



                    </div>

                </div>
                <input type="submit"  id="submit1" class="last" name="submit1" value="update" ><br><br><br><br><br><br>

            </div>
                    </form>
                </div>
            </div>
            <!--End of Content Area-->


	
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
                <a href="https://www.facebook.com/"><i class="fa fa-facebook" ></i></a>
                <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
               
                
            </div>
        </div>
    </footer>
    <!--End of Footer Section-->        
    <script src="js/Update.js"></script> 

    <?php

    if (isset($_POST["submit1"])) {
        mysqli_query($link, "update coustomer set firstName='$_POST[t2]' where firstName='$_POST[t1]'");
    }
    if (isset($_POST["submit1"])) {
        mysqli_query($link, "update coustomer set lastName='$_POST[t4]' where lastName='$_POST[t3]'");
    }
    if (isset($_POST["submit1"])) {
        mysqli_query($link, "update coustomer set mobileNumber='$_POST[t6]' where mobileNumber='$_POST[t5]'");
    }
    if (isset($_POST["submit1"])) {
        mysqli_query($link, "update coustomer set email='$_POST[t10]' where email='$_POST[t9]'");
    }
    if (isset($_POST["submit1"])) {
        mysqli_query($link, "update coustomer set address='$_POST[t12]' where address='$_POST[t11]'");
    }
   

    ?>
    </body>
</html>