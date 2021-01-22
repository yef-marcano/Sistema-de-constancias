<?php 

    // Enable us to use Headers
    ob_start();

    // Set sessions
    if(!isset($_SESSION)) {
        session_start();
    }

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bdconstancia";
    $connection = mysqli_connect($hostname, $username, $password, $dbname) or die("Database connection not established.");
    $connection->query("SET CHARACTER SET utf8");
   //or mysqli_set_charset($this->mysqli,"utf8");


   // mysql_query("SET NAMES 'utf8'");

    //mysqli_query($connection,"SET NAMES 'utf8'");

// Realizar una consulta MySQL



?>