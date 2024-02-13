<?php
$title = "Register";
include_once "header.php";
?>

<div class="container w-50 align-middle">
    <h3 style="color: rgb(27, 3, 241);text-align: center;"> SIGN UP FOR FREE </h3> <br>
    <p><span class="error">* Required field</span></p>
    <form class="row g-3 bg-warning" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">First Name</label>
            <input type="text" class="form-control" id="fname" name="fname">
            <span id="fnameError" style="color: red;"></span>
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lname" name="lname">
            <span id="lnameError" style="color: red;"></span>
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <span class="error">*</span>
            <input type="email" class="form-control" id="inputEmail4" name="email">

        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Password</label>
            <span class="error">*</span>
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
                <input class="form-check-input" type="checkbox" id="gridCheck" name="term_agree">
                <label class="form-check-label" for="gridCheck">
                    By checking this box, you are agreeing to our terms of service.
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Email me with news and updates (Option)
                </label>
            </div>
        </div>
        <div class="col-12" align-middle>
            <input type="submit" class="btn-primary btn fs-4" style="margin:20px 0 20px 29%; width:300px; height:50px;border-radius:7px;box-shadow:2px 2px #234;" name="submit" value="Sign Up">
        </div>
    </form>
</div>

<!-- JavaScript Validation  -->
<script>
    // function to validate first name
    function validatefName()
    {
        const fname = document.getElementById("fname").value;
        const fnameError = document.getElementById("fnameError");

        if(fname.length < 3 || fname.length > 20)
        {
            fnameError.innerHTML = "First name must be between 3 and 20 characters!";
            return false;
        }
        else
        {
            fnameError.innerHTML = "";
            return true;
        }
    } 

    // function to validate last name
    function validatelName()
    {
        const lname = document.getElementById("lname").value;
        const lnameError = document.getElementById("lnameError");

        if(lname.length < 3 || lname.length > 20)
        {
            lnameError.innerHTML = "Last name must be between 3 and 20 characters!";
            return false;
        }
        else
        {
            lnameError.innerHTML = "";
            return true;
        }
    }
    // event listeners for real time validation
    document.getElementById("fname").addEventListener("input",validatefName);
    document.getElementById("lname").addEventListener("input",validatelName);
</script>



<div class="container text-center">`
    <?php
    // Check if the 'submit' button in the form was clicked
    if (isset($_POST['submit'])) {
        // Retrieve data from the form and store it in variables
        $fname = $_POST['fname'];     // First name
        $lname = $_POST['lname'];     // Last name
        $addr = $_POST['address'];       // City
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $pass = $_POST['password'];

        // Include the database connection file
        include './Database/db.php';
        if (isset($_POST['term_agree'])) {
            $check = "select * from customers where email = '$email'";
            if ($result = mysqli_query($conn, $check)) {
                $rowcount = mysqli_num_rows($result);
                if ($rowcount >= 1) {
                    echo "<p class='text-danger'>The email has already existed</p>";
                } else {
                    $sql = "insert into customers(fname,lname,address,phone,email,password) values('$fname','$lname','$address','$phone','$email','$pass')";
                    if ($conn->query($sql) === TRUE) {
                        echo "<p>You have successfully registered. Now you can <a href='login.php'>log in</a> or back to <a href='../main_page/index.php'>Home</a> </p>";
                    }
                }
            } else {
                // If there was an error in the query, display an error message
                echo "<p>Error! The email or phone number have already existed. Please try an another! ";
            }
        } else {
            echo "<p class='text-danger' >Warning: You need to agree with our terms of service!</p>";
        }
    }
    $conn->close();
    ?>
</div>
<?php include "footer.php"; ?>