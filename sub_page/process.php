<?php include_once 'header.php'; ?>

<?php
// Connect to the database
    include_once 'product-db.php';

// Check if the form is submitted with data
if(isset($_POST['submit'])){
    // Get the submitted form data
    $name = $_POST['name'];
    $image = $_POST['image'];
        // Check if the image URL is valid
        if(!filter_var($image, FILTER_VALIDATE_URL)){
            echo "<h2>Invalid image URL!<br>
                <a href='product-create.php'>Click here</a> to go back.</h2>";
            exit();
        }
    $category = $_POST['category'];
    $energy = $_POST['energy'];
    $short_desc = $_POST['short_desc'];
    $full_desc = $_POST['full_desc'];

    // Insert data into the Product table
    $sql = "INSERT INTO Product (product_name, images, category, energy_type, short_desc, full_desc) VALUES ('$name', '$image', '$category', '$energy', '$short_desc', '$full_desc')";
    if ($conn->query($sql) === TRUE) {
        echo "<h2>New product has been added successfully!<br>
            <a href='product-create.php'>Click here</a> to add new items.<br>
            <a href='product-manage.php'>Click here</a> to view product list.</h2>";
        // Close the database connection
        $conn->close();
        /* Redirect to the product insert page
        header('Location: product-create.php');
        exit();*/
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<style>
    h2 {
        margin-top: 20px;
        margin-left: 20px;
    }
</style>

<?php include_once 'footer.php'; ?>