<?php 
    //including the database connection
    include_once("dbconnect.php");

    if(isset($_GET['delete_id'])){
        //getting id of the data from url
        $id = $_GET['delete_id'];
        //deleting the row from table
        $result = mysqli_query($mysqli, "DELETE FROM faq WHERE id=$id");
        //redirecting to the display page (index.php in our case)
        header("Location:FAQ_Admin.php");
    }

    if(isset($_GET['edit_id'])){

        $id = $_GET['edit_id'];
        //selecting data associated with this particular id
        $result = mysqli_query($mysqli, "SELECT * FROM faq WHERE id=$id");
        
        while($res = mysqli_fetch_array($result))
        {
            $name = $res['name'];
            $email = $res['email'];
            $question = $res['question'];
            $answer = $res['answer'];
        }
    }

    if(isset($_POST['update']))
    {    
        $id = $_POST['id'];
        $answer=$_POST['answer'];    
         //updating the table
        $result = mysqli_query($mysqli, "UPDATE faq SET answer='$answer' WHERE id=$id");
    }

    if(isset($_GET['on_id']))
    {    
        $id = $_GET['on_id'];
         //updating the table
        $result = mysqli_query($mysqli, "UPDATE faq SET view_status=1 WHERE id=$id");
    }

    if(isset($_GET['off_id']))
    {    
        $id = $_GET['off_id'];
         //updating the table
        $result = mysqli_query($mysqli, "UPDATE faq SET view_status=0 WHERE id=$id");
    }
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>FAQ Admin</title>
    <link rel="stylesheet" href="css/faq_admin.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
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

        <div class="content-area center">
            <table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Question</th>
                    <th>Answer</th>
                    <th style="width:160px">Action</th>
                </tr>
                <?php 
                $result = mysqli_query($mysqli,"SELECT * FROM faq"); 
                while($res = mysqli_fetch_array($result)) {         
                    echo "<tr>";
                    echo "<td>".$res['id']."</td>";
                    echo "<td>".$res['name']."</td>";
                    echo "<td>".$res['email']."</td>";
                    echo "<td>".$res['question']."</td>";    
                    echo "<td>".$res['answer']."</td>"; 
                    ?>
                    <td> 
                    <?php if($res['answer'] != null){?>
                        <?php if($res['view_status'] == 0){?>
                            <a href="FAQ_Admin.php?on_id=<?php echo $res['id']?>"><button class='btn red' style='margin-bottom: 20px;'><i class='fa fa-toggle-off'></i></button></a> 
                        <?php } else {?>
                            <a href="FAQ_Admin.php?off_id=<?php echo $res['id']?>"><button class='btn green' style='margin-bottom: 20px;'><i class='fa fa-toggle-on'></i></button></a> 
                        <?php }
                    } ?>
                        <a href="FAQ_Admin.php?edit_id=<?php echo $res['id']?>"><button class='btn orange' style='margin-bottom: 20px;'><i class='fa fa-pencil'></i></button></a> 
                        <a href="FAQ_Admin.php?delete_id=<?php echo $res['id']?>" onClick="return confirm('Are you sure you want to delete?')"><button class='btn red' style='margin-bottom: 20px;'><i class='fa fa-times'></i></button></a>
                    </td>   
                <?php    
                }
                ?>
            </table><br>

            <?php 
                if(isset($_GET['edit_id'])){
                ?>
                <form id="form" method="post" action="FAQ_Admin.php">
                    <input type="hidden" name="id" value=<?php echo $_GET['edit_id'];?>>
                    <input name="name" id="name" type="text" value =<?php echo $name?> disabled>
                    <input name="email" id="email" type="email" value =<?php echo $email?>  disabled>
                    <textarea name="question" id="question" type="text" disabled> <?php echo $question?> </textarea>
                    <textarea name="answer" id="answer" type="text" placeholder="Enter Your Answer"> <?php echo $answer?>  </textarea>
                    <button name="update" type="submit" class="btn green" style="margin-bottom: 20px;">Update</button>
                </form>
            <?php } ?>
        </div>


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