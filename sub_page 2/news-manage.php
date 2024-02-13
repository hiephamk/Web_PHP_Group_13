<?php 
    $title = "Product Management";
    $md = "Product View and Modification Displays as Table";
?>
<?php include '../header.php'; ?>

<head>
    <link rel="stylesheet" href="../styles/styles-header-footer.css">
</head>

<?php
include '../Database/db.php';
// SQL query to retrieve data from the 'Product' table
$sql = "SELECT * FROM News";

// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table class='table'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Create date</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>";

    // Loop through the result set and display data in rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['title']}</td>
                <td><img src='{$row['image']}' alt='News Image'
                    style='max-width: 150px; max-height: 150px;'>
                </td>
                <td>{$row['create_date']}</td>
                <td>{$row['news_desc']}</td>
                <td>{$row['category_name']}</td>
                <td>
                    <a href='product-edit.php?id={$row['id']}' class='btn btn-warning'>Edit</a>
                    <a href='product-delete.php?id={$row['id']}' class='btn btn-danger'>Delete</a>
                    <a href='news-create.php' class='btn btn-add'>Add new product</a>
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
    .btn-warning, .btn-danger {
        margin-bottom: 3px;
    }
</style>

<?php include '../footer.php'; ?>