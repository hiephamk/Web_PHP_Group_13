<?php
$servername = "localhost"; // Replace with your MySQL server hostname
$username = "root";     // Replace with your MySQL username
$password = "";     // Replace with your MySQL password
$dbname = "group_13";       // Replace with the name of your MySQL database

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo 'connect db ok';
}

