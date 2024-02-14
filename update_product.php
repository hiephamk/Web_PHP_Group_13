<?php

$title = "Update Product";
include "admin_header.php";
?>

<div class="container">
    <a href="admin.php">Back to admin</a>
    <?php
    include 'Database/db.php';
    $a = $_GET['id'];
    echo $a;
    $result = mysqli_query($conn, "SELECT * FROM products WHERE id= '$a'");
    $row = mysqli_fetch_array($result);
    ?>
    <h2> Update your information below: </h2>
    <form name="form1" method="post" action="update_product.php">
        <div class="row0-6">
            <div class="col">
                <input type="text" class="form-control" placeholder="<?php echo $row['product_name']; ?>" name="product_name" required value="<?php echo $row['product_name']; ?>">
            </div>
            <div class="col-6">
                <input type="text" class="form-control" placeholder="<?php echo $row['short_description']; ?>" name="short_description" required value="<?php echo $row['short_description']; ?>">
            </div>
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="<?php echo $row['img']; ?>" name="img" required value="<?php echo $row['img']; ?>">
        </div>

        <div class="col">
            <input type="text" class="form-control" placeholder="<?php echo $row['product_year']; ?>" name="product_year" required value="<?php echo $row['product_year']; ?>">
        </div>
        <br>
        <div class="col">
            <div class="col"><button type="submit" class="btn btn-primary" name="submit">Update your
                    Information</button>
            </div>
            <div class="col"><button type="submit" class="btn btn-primary" name="delete">Delete your
                    Information</button>
            </div>
        </div>
    </form>
    <?php

    if (isset($_POST['submit'])) {

        $name = $_POST['product_name'];
        $descriptions = $_POST['short_description'];
        $img    =  $_POST['img'];
        $year    =  $_POST['product_year'];
        echo $descriptions;

        $sql = "UPDATE products set customer_name ='$name', short_description ='$descriptions', img='$img', product_year='$year'
        where id = '$a' ";
        if ($conn->query($sql) === TRUE) {
            header("location: update_product.php?success=Your information was updated successfully");
            exit();
            //echo "<p class = 'text-center'>Your information was updated successfully</p>";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }

    if (isset($_POST['delete'])) {
        $query = mysqli_query($conn, "DELETE FROM products where id='$a'");
        if ($query) {
            echo "Record Deleted with id: $a <br>";
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