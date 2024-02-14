<?php 
  $title = "Product Update";
  $md = "Edit Product Information";
?>
<?php include_once 'header.php'; ?>

<?php
include './Database/db.php';
$a = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM Product WHERE product_id= '$a'");
$row= mysqli_fetch_array($result);
?>
<h2> Update Product Information </h2><br>
<form name= "form1" method="post" action="">
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="name">Product Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter product name" name="name"
                    value="<?php echo $row['product_name']; // Get the existing info?>" required>
            </div>
            <div class="col">
                <label for="image">Image</label>
                <input type="text" class="form-control" id="image" placeholder="Enter link of image" name="image"
                    value="<?php echo $row['images']; ?>" required>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="category">Product Category</label>
                <select class="form-control" id="category" name="category">
                    <option value="Electric Cars" <?php echo ($row['category'] == 'Electric Cars') ? 'selected' : ''; ?>>
                        Electric Cars</option>
                    <option value="SUV Cars" <?php echo ($row['category'] == 'SUV Cars') ? 'selected' : ''; ?>>
                        SUV Cars</option>
                    <option value="Sedan Cars" <?php echo ($row['category'] == 'Sedan Cars') ? 'selected' : ''; ?>>
                        Sedan Cars</option>
                    <option value="Assessories" <?php echo ($row['category'] == 'Accessories') ? 'selected' : ''; ?>>
                        Accessories</option>
                </select>
            </div>
            <div class="col">
                <label for="energy">Energy Type</label>
                <select class="form-control" id="energy" name="energy">
                    <option value="Electric" <?php echo ($row['energy_type'] == 'Electric') ? 'selected' : ''; ?>>
                        Electric</option>
                    <option value="Hybrid" <?php echo ($row['energy_type'] == 'Hybrid') ? 'selected' : ''; ?>>
                        Hybrid</option>
                    <option value="Petrol" <?php echo ($row['energy_type'] == 'Petrol') ? 'selected' : ''; ?>>
                        Petrol</option>
                    <option value="Diesel" <?php echo ($row['energy_type'] == 'Diesel') ? 'selected' : ''; ?>>
                        Diesel</option>
                </select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="short-desc">Short Description</label>
                <input type="text" class="form-control" id="short-desc" placeholder="Enter short description of product" name="short-desc"
                    value="<?php echo $row['short_desc']; ?>">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="full-desc">Full description</label>
                <input type="text" class="form-control" id="full-desc" placeholder="Enter full description of product" name="full-desc"
                    value="<?php echo $row['full_desc']; ?>">
            </div>
        </div>
    </div>
    <!-- Button -->
    <a class="btn btn-back" href="product-manage.php" role="button">Go back</a>
    <button type="submit" class="btn btn-primary" id="submit" name="submit">Update</button>
</form>

<?php 
/* 
The isset() function is used to check if a variable is set and not NULL.
 In this case, it's checking if the $_POST['submit'] 
value is set and not NULL. If the form has been submitted, the value of $_POST['submit'] will be set,
and the code inside the if block will be executed. If the form has not been submitted, 
the value of $_POST['submit'] will not be set, and the code inside the if block will not be executed.
*/
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $image = $_POST['image'];
        // Check if the image URL is valid
        if(!filter_var($image, FILTER_VALIDATE_URL)){
            echo "<br><h2>Invalid image URL! <br>
                <a href='product-create.php'>Click here</a> to go back.</h2>";
            exit();
        }
    $category = $_POST['category'];
    $energy = $_POST['energy'];
    $short_desc = $_POST['short-desc'];
    $full_desc = $_POST['full-desc'];
    
    // Update data into the Product table
    $query = mysqli_query($conn,"UPDATE Product
        set product_name='$name', images='$image', category='$category', energy_type='$energy', short_desc='$short_desc', full_desc='$full_desc'
        where product_id='$a'");
    if($query){
        echo "<h2>Product information is updated successfully!</h2><br>";
    }
    else { echo "<h2>Record has not been modified.</h2><br>";}
}
$conn->close();
?>

<style>
    h2 {
        margin-top: 20px;
        margin-left: 20px;
    }
    form {
        margin: 20px;
    }
    .form-group {
        margin-bottom: 20px;
    }
    .btn-back {
        color: #333333;
        text-align: center;
        margin-top: 10px;
        border: 1px solid #333333;
        border-radius: 5px;
        filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.35));
    }
    .btn-back:hover {
        background-color: #333333;
        color: #ffffff;
        font-weight: bold;
        filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
    }
</style>

<?php include_once 'footer.php'; ?>