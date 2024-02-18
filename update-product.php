<?php 
$title = 'update-product';
include'admin-header.php';

//get id from browser
include'Database/db.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $_SESSION['id']=$id;//create session to storage 'id' which will be used to update data later.
}
//get data which need to update from database
$select = mysqli_query($conn,"SELECT * FROM Product WHERE product_id = '$id' ");
$row= mysqli_fetch_array($select);

?>
<div class='container m-3'>
    <div>
        <h1>update product info</h1>
        <a href="admin.php">Back to admin</a>
    </div>
    <form class="d-flex-column" action="update-product.php" method="post">
        <input class="col-6" type="text" name="product_id" placeholder="product_id" required value="<?php echo $row['product_id']; ?>">
        <input class="col-6" type="text" name="product_name" placeholder="product name" required value="<?php echo $row['product_name']; ?>">
        <input class="col-6" type="text" name="short_desc" placeholder="short_desc" required value="<?php echo $row['short_desc']; ?>">
        <input class="col-6" type="text" name="full_desc" placeholder="full_desc" required value="<?php echo $row['full_desc']; ?>">
        <input class="col-6" type="text" name="images" placeholder="images" required value="<?php echo $row['images']; ?>">
        <input class="col-6" type="text" name="category" placeholder="category" required value="<?php echo $row['category']; ?>">
        <input class="col-6" type="text" name="energy_type" placeholder="enery_type" required value="<?php echo $row['energy_type']; ?>">
        <input class="col-6" type="submit" name="submit" value="Update">
    </form>
</div>


<div >
    <?php
    //create the procedure to update info into database
    include'Database/db.php';
    if (isset($_POST['submit'])) {


                    $id= $_SESSION['id'];
                    $product_name = $_POST['product_name'];
                    $short_desc = $_POST['short_desc'];
                    $full_desc = $_POST['full_desc'];
                    $images = $_POST['images'];
                    $category = $_POST['category'];
                    $energy_type = $_POST['energy_type'];


                    $sql = "UPDATE Product SET product_name='$product_name', short_desc='$short_desc', full_desc='$full_desc', 
                    images='$images', category='$category', energy_type = '$energy_type' WHERE product_id = '$id' ";
                    
                    if ($conn->query($sql) === TRUE) {
                       header("location: admin.php");
                        
                        $conn->close();
                        //echo "<p class = 'text-center'>Your information was updated successfully</p>";
                    } else {
                        echo "Error updating record: " . $conn->error;
                    }
    }
    ?>
</div>
<?php include 'footer.php'; ?>