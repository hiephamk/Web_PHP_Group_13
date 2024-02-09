<?php 
  $title = "Product Delete";
  $md = "Delete A Product From The Database";
?>
<?php include_once '../header.php'; ?>

<head>
    <link rel="stylesheet" href="../styles/styles-header-footer.css">
</head>

<?php
include 'product-db.php';
$a = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM Product WHERE product_id= '$a'");
$row= mysqli_fetch_array($result);
?>
<h2> Delete Your Product </h2><br>
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
    <button type="submit" class="btn btn-primary" id="submit" name="delete">Delete</button>
</form><br>

<?php
if (isset($_POST['delete'])){
    $query = mysqli_query($conn,"DELETE FROM Product where product_id='$a'");
    if($query){
        echo "<h2>Product has been deleted with id: $a. <a href='product-manage.php'>Click here</a> to go back.</h2><br>";
    }
    else { echo "<h2>Product has not been deleted yet!</h2><br>";}
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
</style>

<?php include_once '../footer.php'; ?>