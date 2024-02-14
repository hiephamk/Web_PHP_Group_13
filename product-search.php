<?php 
    $title = "Product Filter";
    $md = "Show Results for Product Filter";
?>
<?php include_once 'header.php'; ?>

<div class="d-flex flex-wrap container" style="box-sizing:border-box; margin:20px 0 20px 40px;">
<?php
include_once './Database/db.php';
// SQL query to retrieve data from the 'Product' table
$sql = "SELECT * FROM Product";

// Execute the SQL query and store the result
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()){
    echo '<div class="col-3 m-4" style="width:21%;">
    <a href="Products.php?#electric" class="text-box">
      <img class="img-fluid" src="'.$row['images'].'" alt="Product_1">
      <h3>'.$row['product_name'].'</h3>
      <h6>'.$row['energy_type'].'</h6>
      <p>'.$row['short_desc'].'</p>
    </a>
  </div>';
}

} else {
    // Display a message if no results are found
    echo "<h2>No results</h2><br>";
}
  // close the connection when done
  $conn->close();
?>
</div>

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
    .btn-add {
        background-color: #4CAF50;
        color: #ffffff;
        text-align: center;
        border: #333333;
        border-radius: 5px;
        margin-bottom: 3px;
    }
    .btn-add:hover {
        background-color: #4CAF50;
        color: #ffffff;
        filter: brightness(95%);
    }
    .btn-warning, .btn-danger {
        margin-bottom: 3px;
    }
    div > a {
    text-decoration: none;
    color: #333333;
    }
    h3 {
    color: #e74c3c;
    font-weight: 500;
    font-size: 18px;
    line-height: 25px;
    margin-top: 20px;
    }
</style>

<?php include_once 'footer.php'; ?>