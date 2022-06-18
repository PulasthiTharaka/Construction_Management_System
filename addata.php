<?php
        include("./connection.php");
        $mysqlConnection = connect();
        $Name =  $_POST["adName"];
        $email =  $_POST["email"];
        $password =  $_POST["password"];
      

        $query = "INSERT INTO admin (adName, email, password) VALUES ('{$Name}','{$email}','{$password}');";

        if (mysqli_query($mysqlConnection, $query)) {
            echo "Saved";
        } else {
            echo "ERROR: " . mysqli_error($mysqlConnection);
        }
        mysqli_close($mysqlConnection);

        ?>