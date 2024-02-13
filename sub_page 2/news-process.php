<?php
// Connect to the database
    include_once '../Database/db.php';

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
    $category = $_POST['category_name'];
    $news_desc = $_POST['news-desc'];
    $create_date = intlcal_get_now();


    // Insert data into the Product table
    $sql = "INSERT INTO News (title, image, $category_name,news_desc, create_date) VALUES ('$title', '$image', '$category_name', '$news_desc', '$create_date')";
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