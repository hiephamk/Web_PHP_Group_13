<?php
$servername = "web-development-db-1"; // Replace with your MySQL server hostname
$username = "team13";     // Replace with your MySQL username
$password = "Katie@0224";     // Replace with your MySQL password
$dbname = "team13";       // Replace with the name of your MySQL database

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
?>