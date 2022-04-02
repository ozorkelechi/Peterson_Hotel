<?php
    $server = "localhost";
    $username = "root";
    $pass = "";
    $dbname = "peterson_hotels";
    
    $connectDB = mysqli_connect($server,$username,$pass,$dbname);

    if (!$connectDB) {
      die("Error in connection".mysqli_connect_error());
    }