<?php
$title = "Register";
include "header.php";
?>
<div class="container w-50">
    <form class="row g-3" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">First Name</label>
            <input type="text" class="form-control" id="inputEmail4" name="fname">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="inputPassword4" name="lname">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4" name="email">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" class="form-control" id="inputPassword4" name="password">
        </div>
        <div class="col-6">
            <label for="inputAddress" class="form-label">Phone Number</label>
            <input type="text" class="form-control" name="phone" id="inputAddress" placeholder="phone number">
        </div>
        <div class="col-6">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" class="form-control" name="address" id="inputAddress" placeholder="Street, Building...">
        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    By checking this box, you are agreeing to our terms of service.
                </label>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary" name="submit">Register</button>
        </div>
    </form>
</div>

<div class="container text-center">
    <?php
    // Check if the 'submit' button in the form was clicked
    if (isset($_POST['submit'])) {
        // Retrieve data from the form and store it in variables
        $fname = $_POST['fname'];     // First name
        $lname = $_POST['lname'];     // Last name
        $address = $_POST['address'];       // City
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $customer_password = $_POST['password'];

        // Include the database connection file
        include 'db.php';

        // Define an SQL query to insert data into the 'studentsinfo' table
        $sql = "INSERT INTO customers (fname, lname, phone,address,email,password)
                VALUES ('$fname', '$lname', '$phone', '$address','$email','$customer_password')";

        // Execute the SQL query using the database connection
    
        if ($conn->query($sql) === TRUE) {
            // If the query was successful, display a success message
            echo "<h4>You have successfully registered</h4>";
        } else {
            // If there was an error in the query, display an error message
            echo "<p>Error! The email or phone number have already existed. Please try an another! ";
        }


        // Close the database connection
        $conn->close();
    }
    ?>
</div>