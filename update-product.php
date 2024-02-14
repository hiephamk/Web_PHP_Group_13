<?php

$title = "Update Product";
include "admin-header.php";

?>

<div class="container">
    <a href="admin.php">Back to admin</a>
    <?php
    include 'Database/db.php';
    if (isset($_GET['id'])) {
        $a = $_GET['id'];
        echo $a;
        $result = mysqli_query($conn, "SELECT * FROM Product WHERE product_id= '$a'");
        $row = mysqli_fetch_array($result);
    }
    ?>
    <h2> Update your information below: </h2>
    <form name="form1" method="post" action="update-product.php">
        <div class="row0-6">
            <div class="col">
                <input type="text" class="form-control" placeholder="<?php echo $row['product_id']; ?>" name="product_id" required value="<?php echo $row['product_id']; ?>">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="<?php echo $row['product_name']; ?>" name="product_name" required value="<?php echo $row['product_name']; ?>">
            </div>
            <div class="col-6">
                <input type="text" class="form-control" placeholder="<?php echo $row['short_desc']; ?>" name="short_desc" required value="<?php echo $row['short_desc']; ?>">
            </div>
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="<?php echo $row['images']; ?>" name="images" required value="<?php echo $row['images']; ?>">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="<?php echo $row['category']; ?>" name="category" required value="<?php echo $row['category']; ?>">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="<?php echo $row['energy_type']; ?>" name="energy_type" required value="<?php echo $row['energy_type']; ?>">
        </div>
        <br>
        <div class="col">
            <div class="col"><button type="submit" class="btn btn-primary" name="update">Update Product
                    Information</button></div>
            <div>
                <?php
                if (isset($_GET['success'])) {
                    echo $_GET['success'];
                    exit();
                } else if (isset($_GET['error'])) {
                    echo $_GET['error'];
                    exit();
                }

                ?>
            </div>
            <div class="col"><button type="submit" class="btn btn-primary" name="delete">Delete Product
                    Information</button></div>
        </div>
    </form>
    <?php

    if (isset($_POST['submit'])) {

        $product_id = $_POST['product_id'];
        $product_name = $_POST['product_name'];
        $short_desc = $_POST['short_desc'];
        $img    =  $_POST['images'];
        $category   =  $_POST['category'];
        $energy_type   =  $_POST['energy_type'];

        $sql = "UPDATE Product SET product_name ='$product_name', short_desc ='$short_desc', images='$img', category='$category', energy_type='$energy_type' WHERE product_id = '$a' ";
        if ($conn->query($sql) === TRUE) {
            header("location: admin.php");
            exit();
            //echo "<p class = 'text-center'>Your information was updated successfully</p>";
        } else {
            header("location: update-product.php?error=" . $conn->error);
            exit();
        }
    }

    if (isset($_POST['delete'])) {
        $query = mysqli_query($conn, "DELETE FROM Product WHERE product_id='$a'");
        if ($query) {
            echo "Record Deleted with id:" . $a . " <br>";
            $conn->close();
            // if you want to redirect to update page after updating
            //header("location: update.php");
        } else {
            echo "Record Not Deleted";
        }
    }
    ?>
</div>
<?php include 'footer.php'; ?>