<?php
$servername = "web-dev-env-main-db-1"; // Replace with your MySQL server hostname
$username = "hiepdb";     // Replace with your MySQL username
$password = "Hiep1981@";     // Replace with your MySQL password
$dbname = "hiepdb";       // Replace with the name of your MySQL database

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

