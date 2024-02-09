<?php 
    $title = "Product Information Table";
    $md = "Display Product Information as Table";
?>
<?php include_once '../header.php'; ?>

<head>
    <link rel="stylesheet" href="../styles/styles-header-footer.css">
</head>

<?php
include_once 'product-db.php';
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
              </tr>";
    }
    echo "</tbody></table>";
} else {
    // Display a message if no results are found
    echo "No results";
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
</style>

<?php include_once '../footer.php'; ?>