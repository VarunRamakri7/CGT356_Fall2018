<?php

    $servername="localhost";
    $username="ramakri7";
    $password="19fire98";
    $dbname="Project1";

    $conn= new mysqli($servername, $username, $password, $dbname);
    
        if ($conn->connect_error)
        {
            die("Connection failed:".$conn->connect_error);
        }

?>