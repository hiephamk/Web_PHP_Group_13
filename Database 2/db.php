<?php
$servername = "php24-db-1"; // Replace with your MySQL server hostname
$username = "group13";     // Replace with your MySQL username
$password = "123456";     // Replace with your MySQL password
$dbname = "group13";       // Replace with the name of your MySQL database

$conn = new mysqli($servername,$username,$password,$dbname);

// check db connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
echo "Connection successfully!"."<br>";
?>