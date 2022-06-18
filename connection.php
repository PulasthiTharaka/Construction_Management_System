<?php
function connect()
{
    $link = mysqli_connect('localhost', 'yomal', '1234');
    if (!$link) {
        die('Could not connect: ' . mysqli_connect_error());
    }
    $dbQuery = "USE cms";
    if (mysqli_query($link, $dbQuery)) {
        return $link;
    } else {
        echo "ERROR: " . mysqli_error($link);
    }
}
?>