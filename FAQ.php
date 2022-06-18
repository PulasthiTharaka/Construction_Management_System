<?php 
    //including the database connection
    include_once("dbconnect.php");

    if(isset($_POST['submit'])) 
    { 
        $name = $_POST['name'];
        $email = $_POST['email'];
        $question = $_POST['question'];

        $result = mysqli_query($mysqli, "INSERT INTO faq(name,email,question) VALUES('$name','$email','$question')");

        header("Location: FAQ.php");
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>FAQ</title>
    <link rel="stylesheet" href="css/faq.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<script type="text/javascript" src="js/FAQ.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <script src="js/AboutUs.js"></script>
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
            <a href="FAQ.php">FAQ</a>

        </nav>

    </header>
    <!--End of Header Section with Navigation Bar-->

    <!--Banner Area-->
    <div class="banner-area">
        <h2 style="text-align: center;">FAQ</h2>
    </div>
    <!--End of Banner Area-->

    <!--Content Area-->
    <!--Area 01-->
    <div class="content-area">
        <table style="background-color: #2C3539; width:100%;  height:1000px; ">
		
            <td>
                <h1 style="text-align: center;"></h1>
            </td>
        </table>


        <div class="container">
            <div class="row">
                <div class="table">
                    <div class="cil">
                        <div >
                            <!--Left Side Bar-->
                            <div class="side-bar">
                                <div>
                                    <img src="img/f.jfif" alt="img" height="200" width="100%" style="padding: 20px;">
                                </div>

                                <div class="formDiv">
                                    <h3 style="margin-left: 20px;padding-top: 30px">FAQ</h3>
                                    <div class="div">
                                        <form id="form" method="post" action="FAQ.php" onsubmit="return submitFAQ()">
											<input name="name" id="name" type="text" placeholder="Name">
                                            <input name="email" id="email" type="email" placeholder="E-Mail">
                                            <input name="question" id="question" type="text" placeholder="Ask Your Question">
                                            <button name="submit" type="submit" class="btn" style="margin-bottom: 20px;">Submit</button>
                                        </form>
										<img src="img/2.jpg" alt="company" style="width:770px;height:535px;padding-right: 300px;">
                                    </div>
                                </div>
                            </div>

                            <!--Content-->
                            <div class="content">
                                <div class="inner-container">
                                    <h1 style="margin: 0px!important; color: green;">Frequently Asked Questions</h1>
                                    <table style="width:100%">

                                    <?php 
                                        $result = mysqli_query($mysqli,"SELECT * FROM faq WHERE view_status = 1 AND answer IS NOT NULL ORDER BY id DESC LIMIT 3");
                                        while($res = mysqli_fetch_array($result)) { 
                                    ?>
                                        <tr>
                                            <div class="box-effect">
                                                <td style="width: 60px;"> 
                                                    <img class="profile-image" src="img/img_avatar.jpg" alt="Avatar">
                                                </td>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            <td style="text-align: left;">Q:<?php echo $res['question'] ?></td>
                                                        </tr>
														
                                                        <tr>
                                                            <td style="text-align: left; color:red;">A: <?php echo $res['answer'] ?>
														  </td>
                                                        </tr>
                                                    </table>
                                                </td>                                       
                                            </div>
                                        </tr>
    
                                        <!--Seperator-->
                                        <tr>
                                            <td colspan="2">
                                                <div style="background-color: white;">
                                                    <br/>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php 
                                        }
                                    ?>
                                    </table>
									<br>
									<img src="img/12.jfif" alt="Harry" style="width:725px;height:545px;padding-left: -20px;">
                                </div>

                            </div>
                                                   </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br><br><br>
	

  


    <!--End of Content Area-->


    <!--Footer Section-->
    <footer class="footer-distributed">

        <div class="footer-left">
            <img src="img/nav1.jpg" style="width: 50px; height: 50px;"><br><br>
            <h3>EVERGREEN<span> CONSTRUCTION</span></h3>

            <p class="footer-links">
                <a href="Homepage.html">Home</a>
                |
                <a href="News&Media.html">News & Media</a>
                |
                <a href="AboutUs.html">About Us</a>
                |
                <a href="ContactUs.html">Contact Us</a>
                |
                <a href="Services.html">Services</a>

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