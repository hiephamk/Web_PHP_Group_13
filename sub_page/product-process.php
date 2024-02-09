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
            echo "Invalid image URL! <a href='product-create.php'>Click here</a> to go back.";
            exit();
        }
    $category = $_POST['category'];
    $energy = $_POST['energy'];
    $short_desc = $_POST['short-desc'];
    $full_desc = $_POST['full-desc'];

    // Insert data into the Product table
    $sql = "INSERT INTO Product (product_name, images, category, energy_type, short_desc, full_desc) VALUES ('$name', '$image', '$category', '$energy', '$short_desc', '$full_desc')";
    if ($conn->query($sql) === TRUE) {
        echo "New product has been added successfully! <a href='product-create.php'>Click here</a> to add new ones.";
        // Close the database connection
        $conn->close();
        // Redirect to the product insert pageheader('Location: product-create.php');exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>