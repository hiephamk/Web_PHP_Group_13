<?php
$servername = "php24-db-1"; //should be shell.hamk.fi
$username = "crud_app";
$password = "123456";
$dbname = "crud_app";

// create database connection

$conn = new mysqli($servername,$username,$password,$dbname);

// check db connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
echo "Connection successfully!"."<br>";
?>