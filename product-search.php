<?php
$title = "Product Filter";
$md = "Show Results for Product Filter";
?>
<?php include_once 'header.php'; ?>
<div class="container">
    <div>
        <h1 class="text-center bg-body-secondary w-100">The result of search will be shown here:</h1>

    </div>

    <h5></h5>

    <?php
    include_once 'Database/db.php';
    if (isset($_POST['submit']) && ($_POST['submit'])) {
        include 'Database/db.php';
        $keyword = $_POST['keyword'];

        $sql = "SELECT * FROM Product WHERE (
            product_name like '%$keyword%' or
            energy_type like '%$keyword%' or
            category like '%$keyword%'
            )";
        // SQL query to retrieve data from the 'Product' table

        // Execute the SQL query and store the result
        $result = $conn->query($sql);
        $rowcount = mysqli_num_rows($result);
        echo '<h5 class="fw-bold fst-italic text-primary">There are ' . $rowcount . ' results:</h5>';
    ?>
    <div class="d-flex flex-wrap container" style="box-sizing:border-box; margin:20px 0 20px auto;">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

                echo '<div class="col-3 m-2 p-3 flex-fill" style="width:23%;max-width:25%;border:1px #3333 solid;margin:auto;">
        <a href="Products.php?#' . $row['category'] . ' "class="text-box text-decoration-none" target="#">
          <img class="img-fluid" src="' . $row['images'] . '" alt="Product_1">
          <h4 class=" text-center border-top text-danger">' . $row['product_name'] . '</h4>
          <h6 class="text-center text-dark">Energy type: ' . $row['energy_type'] . '</h6>
          <h6 class="text-center text-dark">Category: ' . $row['category'] . '</h6>
          <p class="text-justify text-dark">Description: ' . $row['short_desc'] . '</p>
        </a>
      </div>';
            }
        } else {
            // Display a message if no results are found
            echo "<h2>No results</h2><br>";
        }
        $conn->close();
    }  // close the connection when done

        ?>
    </div>
</div>
<?php include_once 'footer.php'; ?>