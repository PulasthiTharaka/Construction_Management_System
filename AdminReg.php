<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminReg</title>
        <link rel="stylesheet" href="css/AdminReg.css">
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
                <h2 style="text-align: center;">ADMIN REGISTRATION</h2>
            </div>
            <!--End of Banner Area-->

            <!--Content Area-->
            <!--Area 01-->
            <div class="content-area">
        
                <table style="background-color: black; width:100%;  height:50px; "><td>
                <h1 style="text-align: center;"></h1>
                </td></table>

                <div class="div0">
                    <center>
                        <br><br>
                    <img src="img/nav1.jpg" class="regimg1"><br>
                                    <h1 style="font-size: 50px;"> <font color="white">EVER</font><font color="green"> GREEN</font> <font color=" #ff7c10">  CONSTRUCTIONS</font></h1><br>
                    </center>
                    </div>



            <form action="addata.php" target="_self" method="post" onsubmit="return correctPassword()">
                    <div class="div00">
                    
                    
                
                <div class="div1">
                    <div class="div2"> 
                        <br><br><br>

                        <h1 class="reg">Registration</h1> <br><br><br><br><br>

                        <label class="name"> Name</label><br><br>
                        <input type="text" name="adName" id="adName" class="form" placeholder="Enter Your Name" required><br><br><br><br><br><br>

                        <label class="name">E-mail Address</label><br><br>
                        <input type="email" name="email" id="email" class="form" placeholder="abc@gmail.com" pattern="[a-zA-Z0-9._+-%*!$&,]+@[a-z0-9]+\.[a-z]{2,3}" required><br><br><br><br><br><br>
                 
                        <label class="name">Password</label><br><br>
                        <input type="password" id="password"  name="password" class="form" pattern="[a-zA-Z0-9]{5,10}" placeholder="Enter Your Password" required><br><br><br><br><br><br>
    
                        <label class="name">Re-enter password</label><br><br>
                        <input type="password" id="cnfmpwd" name="cnfmpwd" class="form" placeholder="Re-enter Your Password" required><br><br><br><br><br><br>

                        <label class="name">Accept privacy and policy:</label>
                        <input type="checkbox" id="policy" class="policy1" name="policy" required onclick="tickButton()"><br><br><br>
                    
                        <input type="submit"  id="submit1" class="last" name="submit1" value="Register" disabled><br><br><br><br><br><br>

                     </div>

                    <div class="div3">

                        <div ><center>
                            <img class="Slide1" src="img/Road.jpg" >
                            <img class="Slide1" src="img/2.jfif">
                            <img class="Slide1" src="img/Road1.jpg" >
                            <img class="Slide1" src="img/4.jpg" >
                            <img class="Slide1" src="img/Road1.jpg" >
                            <img class="Slide1" src="img/6.jpg" >
                            <img class="Slide1" src="img/7.jpg" >
                            </center></div>


                            <div ><center>
                                <img class="Slide2" src="img/Road1.jpg" >
                                <img class="Slide2" src="img/2.jfif">
                                <img class="Slide2" src="img/Road.jpg" >
                                <img class="Slide2" src="img/4.jpg" >
                                <img class="Slide2" src="img/Road.jpg" >
                                <img class="Slide2" src="img/6.jpg" >
                                <img class="Slide2" src="img/7.jpg" >
                                </center></div>
    

                    </div>

                </div>
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
    <script src="js/AdminReg.js"></script>   
    </body>
</html>