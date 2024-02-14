<?php
$title = "Product Management";
$md = "Product View and Modification Displays as Table";
?>
<?php include_once 'header.php'; ?>

<?php
include_once 'Database/db.php';
// SQL query to retrieve data from the 'Product' table
$sql = "SELECT * FROM Product";

// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table class='table'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Energy Type</th>
                    <th>Short Description</th>
                    <th>Full Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>";

    // Loop through the result set and display data in rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['product_id']}</td>
                <td>{$row['product_name']}</td>
                <td><img src='{$row['images']}' alt='Product Image'
                    style='max-width: 150px; max-height: 150px;'>
                </td>
                <td>{$row['category']}</td>
                <td>{$row['energy_type']}</td>
                <td>{$row['short_desc']}</td>
                <td>{$row['full_desc']}</td>
                <td>
                    <a href='product-edit.php?id={$row['product_id']}' class='btn btn-warning'>Edit</a>
                    <a href='product-delete.php?id={$row['product_id']}' class='btn btn-danger'>Delete</a>
                    <a href='product-create.php' class='btn btn-add'>Add new product</a>
              </tr>";
    }
    echo "</tbody></table>";
} else {
    // Display a message if no results are found
    echo "<h2>No results</h2><br>";
}
// close the connection when done
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

    .btn-warning,
    .btn-danger {
        margin-bottom: 3px;
    }
</style>

<?php include_once 'footer.php'; ?>