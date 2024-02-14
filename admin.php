<?php
$title = "admin";
//session_start();
include "admin-header.php"; ?>

<body>
    <div class="container">
        <h3 class="text-center">Welcome! <?php echo  $_SESSION['lname']; ?></h3>


        <?php

        include './Database/db.php';
        $admin = $_SESSION['email'];
        if ($admin === 'admin@admin.com') {
            echo '<a href="admin.php"> Back to admin </a>';
        }

        $sql = "SELECT * FROM Product";

        // Execute the SQL query and store the result
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {
                echo "
        <table class='table table-success text-left w-50' style='margin: 30px auto;'>
            <tbody>
                <tr>
                    <td style='border: 1px #333 solid;'>Id</td>
                    <td style='border: 1px #333 solid;'> <a href='update-product.php?id=$row[product_id]'>$row[product_id]</a> </td>
                    <td style='border: 1px #333 solid;'> <a href='update-product.php?id=$row[product_id]'> Update</a> </td>
                </tr>
                <tr>
                    <td style='border: 1px #333 solid;'>Product Name</td>
                    <td style='border: 1px #333 solid;'> " . $row['product_name'] . " </td>
                </tr>
                <tr>
                    <td style='border: 1px #333 solid;'>Short Description</td>
                    <td style='border: 1px #333 solid;'> " . $row['short_desc'] . " </td>

                </tr>
                <tr>
                    <td style='border: 1px #333 solid;'>Image</td>
                    <td style='border: 1px #333 solid;'> " . $row['images'] . " </td>

                </tr>
                <tr>
                    <td style='border: 1px #333 solid;'>Category</td>
                    <td style='border: 1px #333 solid;'> " . $row['category'] . " </td>

                </tr>
                <tr>
                    <td style='border: 1px #333 solid;'>Energy type</td>
                    <td style='border: 1px #333 solid;'> " . $row['energy_type'] . " </td>
                </tr>
            </tbody>
        </table>
        ";
            }
        } else {
            // Display a message if no results are found
            echo "No results";
        }
        // close the connection when done
        $conn->close();
        ?>
    </div>
</body>
<?php include 'footer.php' ?>