<?php
// Check if the 'submit' button in the form was clicked
if (isset($_POST['submit'])) {
    // Retrieve data from the form and store it in variables
    $fname = $_POST['fname'];     // First name
    $lname = $_POST['lname'];     // Last name
    $address = $_POST['address'];       // City
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Include the database connection file
    include './Database/db.php';

    // Define an SQL query to insert data into the 'studentsinfo' table
    $sql = "INSERT INTO customers (fname, lname, phone,address,email,password)
            VALUES ('$fname', '$lname', '$phone', '$address','$email','$password')";

    // Execute the SQL query using the database connection
    if ($conn->query($sql) === TRUE) {
        // If the query was successful, display a success message
        echo "New record added";
    } else {
        // If there was an error in the query, display an error message
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>