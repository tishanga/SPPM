<?php

//$conn = mysqli_connect('localhost','root','','user_db');

// Replace the placeholder values with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "glossydb";

//  database connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}





?>