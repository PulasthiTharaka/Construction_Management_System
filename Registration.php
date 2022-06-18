<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Registration</title>
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
        <h2 style="text-align: center;">REGISTRATION</h2>
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

        <form action="data.php" target="_self" method="post" onsubmit="return correctPassword()">
            <div>
                <img class="regimg" src="img/7.jpg">
            </div>


            <div class="colc">

                <div class="col">
                    <label>
                        <h3>Account Details</h3>
                    </label><br><br><br>

                    <label class="name">First Name:</label><br><br>
                    <input type="text" name="firstName" id="firstName" class="form" placeholder="Enter Your First Name" required><br><br><br>

                    <label class="name">Last Name:</label><br><br>
                    <input type="text" name="lastName" id="lastName" class="form" placeholder="Enter Your Last Name" required>|<br><br><br>

                    <label class="name">Mobile Number:</label><br><br>
                    <input type="phone" name="mobileNumber" id="Mobile_Number" class="form" pattern="[0-9]{10}" placeholder="1234567890" required><br><br><br>

                    <label class="name">NIC Number:</label><br><br>
                    <input type="text" name="nicNumber" id="nicNumber" class="form" pattern="[0-9]{9}\[v]" placeholder="912345678v" required><br><br><br>

                    <label class="name">Address:</label><br><br>
                    <textarea name="address" id="address" rows="10" cols="50" class="form" placeholder="Enter Your Address" required></textarea><br><br><br>

                    <label class="name">E-mail Address:</label><br><br>
                    <input type="email" name="email" id="email" class="form" placeholder="abc@gmail.com" pattern="[a-zA-Z0-9._+-%*!$&,]+@[a-z0-9]+\.[a-z]{2,3}" required><br><br><br>

                    <label class="name">Password:</label><br><br>
                    <input type="text" id="password" name="password" class="form" pattern="[a-zA-Z0-9]{5,10}" placeholder="Enter Your Password" required><br><br><br>

                    <label class="name">Re-enter password:</label><br><br>
                    <input type="password" id="cnfmpwd" name="cnfmpwd" class="form" placeholder="Re-enter Your Password" required><br><br><br>

                </div>

                <div class="col">

                    <label>
                        <h3>Project Details</h3>
                    </label><br><br><br>

                    <label class="name">Project Name:</label><br><br>
                    <input type="text" name="prName" id="prName" class="form" placeholder="Enter Your Project Name" required><br><br><br><br>


                    <label class="name">Type of the Project:</label><br><br>
                    <input type="text" name="prType" id="prType" class="form" placeholder="House, Apartments, Buildings, Others" required><br><br><br><br>



                    <label class="name">Location of the Project:</label><br><br>
                    <input type="text" name="location" id="location" class="form" placeholder="Enter Your Location" required><br><br><br><br>

                    <label class="name">Project details:</label><br><br>
                    <textarea name="prDetails" id="prDetails" rows="30" cols="50" class="form" placeholder="Enter Your Project Details" required></textarea><br><br><br>

                </div>

                <div class="col">
                    <label>
                        <h3>Privacy and Policy Details</h3>
                    </label><br><br><br><br>

                    <div class="container">
                        <h3 style="font-size: 30px; text-align: center;"><u>Licence Agreement</u></h3>
                        <p>THIS AGREEMENT is made and entered into this 17 th day of February, 2002, by the Evergreen Construction PVT (the "contractor").<br><br>

                            <strong> Owner and Contractor agree as follows:</strong><br><br>

                            01. Two copies of the Contract Documents shall be signed by the Owner and the
                            Contractor. If either the Owner or the Contractor do not sign the Drawings,
                            Specifications, or any of the other Contract Documents, the OR shall identify
                            them. By executing the Contract, the Contractor represents that he has visited
                            the site and familiarized himself with the local conditions under which the Work is
                            to be performed.<br><br>

                            02. The Contractor at all times shall keep the premises free from accumulation of
                            waste materials and debris caused by Contractor's operations. This provision is
                            imperative. At the completion of the Work, Contractor shall leave the Project site
                            in a neat and orderly condition. <br><br>

                            03. The Owner and Contractor waive all rights against each other for damages
                            caused by fire or other perils to the extent covered by insurance provided under
                            this paragraph. The Contractor shall require similar waivers by Subcontractors
                            and Sub-Subcontractors.<br><br>

                            04. The Contractor shall correct any Work that fails to conform to the requirements of
                            the Contract Documents where such failure to conform appears during the
                            progress of the Work, and shall remedy any defects due to faulty materials,
                            equipment or workmanship which appear within a period of one year from the
                            Date of Final Settlement of the Contract or within such longer period of time as
                            may be prescribed by law or by the terms of any applicable special guarantee
                            required by the Contract Documents. The provisions of this Article apply to Work
                            done by Subcontractors as well as to Work done by direct employees of the
                            Contractor, and are in addition to any other remedies or warranties provided by
                            law.<br><br>

                            05. The Owner without invalidating the Contract may order Changes in the Work
                            consisting of additions, deletions, or modifications with the Contract Sum and the
                            Contract Time being adjusted accordingly. <br><br><br>


                            <strong> PROGRESS PAYMENTS:</strong> <br><br>
                            06. Based upon Applications for Payment submitted to the OR by the Contractor and
                            Certificates for Payment issued by the OR to the Owner, the Owner shall make
                            progress payments to the Contractor as follows:
                            Monthly progress payment requests shall be remitted within thirty (30)
                            days of issuance of Certificates for Payment by the OR to the Owner.
                            Ten percent (10%) of each amount certified for payment shall be retained by the Owner
                            until final payment. <br><br>

                            07. All of the Work will be completed and ready for final payment by the date
                            specified in this Agreement.<br><br>

                            08. If the Contractor is delayed at any time in the progress of the Work by changes
                            ordered in the Work, by labor disputes, fire, unusual delay in transportation,
                            unavoidable casualties, causes beyond the Contractor's control, or by any cause
                            which the OR may determine justifies the delay, then the Contract Time shall be
                            extended by Change Order for such reasonable time as the OR may determine.<br><br>

                            09. If the client brenched the agreement he/she should pay a reasonable fine to the company<br><br><br><br>

                            By<br>
                            Samantha Samarasignhe <br>
                            (Chairman of Evergreen Constructions)<br><br>

                        </p>
                    </div><br><br><br><br>
                    <label class="name">Accept privacy and policy:</label>
                    <input type="checkbox" id="policy" name="policy" required onclick="tickButton()"><br><br><br><br><br><br>

                    <input type="submit" id="submit1" class="last" name="submit1" value="Register" disabled><br><br><br><br><br><br>
                    <img src="img/nav1.jpg" class="regimg1"><br><br>
                    <h3> EVER<font color="green">GREEN</font>
                        <font color=" #ff7c10"> CONSTRUCTIONS</font>
                    </h3><br><br>
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
                <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>


            </div>
        </div>
    </footer>
    <!--End of Footer Section-->

</body>

</html>