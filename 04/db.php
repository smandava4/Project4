<?php
    // Shared script for interacting with database
    $servername = "localhost";
    $username = "smandava4"; // change to panther id if using codd
    $password = "smandava4"; // change to panther id if using codd
    $dbname = "smandava4"; // change to panther id if using codd
    // The above used four variables servername,username,password and dbname 
    // are according to my environment setting.

    // Create connection
    $conn =  mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("connection failed: " . $conn->connect_error);
    }
?>