<?php
$title = "Update Profile";
include "header.php";
?>

<body>
    <div class="container">
        <?php
        include './Database/db.php';
        $id = $_SESSION['customer_id'];
        echo $id;

        $result = mysqli_query($conn, "SELECT * FROM customers WHERE customer_id = $id ");
        $row = mysqli_fetch_array($result);
        ?>
        <img src="./img/<?php echo $img; ?>" alt="">
        <h2 class="text-center m-3"> Update your information below: </h2>
        <form class="container" name="form1" method="post" action="update_profile.php" style="margin: 100px auto;padding:20px; border:1px #333 solid; width:50%">
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
            <h3 class="text-center m-3">Update your image</h3>
            <form method="POST" action="update_profile.php" enctype="multipart/form-data" style="margin: 100px auto;padding:20px; border:1px #333 solid; width:50%">
                <input type="hidden" name="size" value="1000000">
                <input type="file" name="image">
                <button type="submit" name="upload">up load</button>
                <?php require "process_upload.php" ?>
            </form>
        </div>
        <div>
            <?php
            if (isset($_POST['submit']) && isset($_POST['upload'])) {

                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $addr = $_POST['address'];
                $phone = $_POST['phone'];
                $sql = "UPDATE customers set fname='$fname', lname='$lname', address='$addr', phone='$phone'
                where customer_id = $id ";
                if ($conn->query($sql) === TRUE) {
                    header("location: update_profile.php?success=Your information was updated successfully");
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