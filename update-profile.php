<?php

$title = "Update Profile";
include "header.php";
// session_start();
?>

<body>
    <div class="container">
        <?php
        include './Database/db.php';
        $email = $_SESSION['email'];
        $result = mysqli_query($conn, "SELECT * FROM customers WHERE email = '$email' ");
        $row = mysqli_fetch_array($result);
        ?>
        <h2 class="text-center m-3"> Update your information below: </h2>
        <form class="container" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" style="margin: 100px auto;padding:20px; border:1px #333 solid; width:50%">
            <div style="display: flex; justify-content:space-around; margin: 20px auto; width:100%;">
                <label style="width:150px" for="">First Name:</label>
                <input style="width:700px;" type="text" name="fname" required value="<?php echo $row['fname']; ?>">
            </div>
            <div style="display: flex;margin: 20px auto; width:100%;">
                <label style="width:150px" for="">Last Name:</label>
                <input style="width:700px;" type="text" name="lname" required value="<?php echo $row['lname']; ?>">
            </div>
            <div style="display: flex;margin: 20px auto; width:100%;">
                <label style="width:150px" for="">Address:</label>
                <input style="width:700px;" type="text" name="address" required value="<?php echo $row['address']; ?>">
            </div>
            <div style="display: flex;margin: 20px auto; width:100%;">
                <label style="width:150px" for="">Phone:</label>
                <input style="width:700px;" type="text" name="phone" required value="<?php echo $row['phone']; ?>">
            </div>

            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="submit" name="submit">Update your information</button>
            </div>
            <div class="text-center m-3 fst-italic fw-bold text-primary">
                <?php
                if (isset($_GET['success'])) {
                    echo $_GET['success'];
                }
                ?>
            </div>

        </form>
        <div>
            <?php
            if (isset($_POST['submit'])) {

                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $addr = $_POST['address'];
                $phone = $_POST['phone'];
                $sql = "UPDATE customers set fname='$fname', lname='$lname', address='$addr', phone='$phone'
                where email = '$email' ";
                if ($conn->query($sql) === TRUE) {
                    header("location: update-profile.php?success=Your information was updated successfully");
                    exit();
                    //echo "<p class = 'text-center'>Your information was updated successfully</p>";
                } else {
                    echo "Error updating record: " . $conn->error;
                }
            }
            $conn->close();
            ?>
        </div>
    </div>
</body>
<?php include 'footer.php'; ?>