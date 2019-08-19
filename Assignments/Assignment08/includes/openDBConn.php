<?php

    $servername="104.248.238.236";
    $username="ramakri7";
    $password="19fire98";
    $dbname="Assignment08";

    $conn = new mysqli($servername, $username, $password, $dbname);
    
        if ($conn->connect_error)
        {
            die("Connection failed:".$conn->connect_error);
        }

?>