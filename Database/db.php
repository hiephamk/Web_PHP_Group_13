<?php
$servername = "web_group-24-db-1"; // Replace with your MySQL server hostname
$username = "group_13";     // Replace with your MySQL username
$password = "group13";     // Replace with your MySQL password
$dbname = "group_13";       // Replace with the name of your MySQL database

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->close();
