<?php

    $servername ="localhost";
    $username ="root";
    $password = "";
    $dbname ="job_portals";
   $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn)
    {
        die("Something went wrong;");
    }
    echo "success";
?>