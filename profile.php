<?php
$title = "Profile";
// session_start();
include "header.php"; ?>

<body>
    <div class="container">
        <h3 class="text-center">Welcome! <?php echo  $_SESSION['lname']; ?></h3>


        <p class="text-center">Press <a href="update-profile.php?email=$_SESSION['customer_id']">change my info</a> if
            you
            want to
            update your information!!</p>
        <?php
        include './Database/db.php';
        $email = $_SESSION['email'];
        $sql = "SELECT * FROM customers WHERE email = '$email' ";

        // Execute the SQL query and store the result
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {
                echo "
                <table class='table table-success text-left w-50' style='margin: 30px auto;'>
                    <tbody>
                        <tr>
                            <td style='border: 1px #333 solid;' >First Name</td>
                            <td style='border: 1px #333 solid;' > " . $row['fname'] . " </td>
                            <td style='border: 1px #333 solid;' > <a href='update-profile.php'> Change </a> </td>
                        </tr>
                        <tr>
                            <td style='border: 1px #333 solid;' >Last Name</td>
                            <td style='border: 1px #333 solid;'> " . $row['lname'] . " </td>
                            <td style='border: 1px #333 solid;'> <a href='update-profile.php'> Change </a> </td>
                        </tr>
                        <tr>
                            <td style='border: 1px #333 solid;'>Phone</td>
                            <td style='border: 1px #333 solid;'> " . $row['phone'] . " </td>
                            <td style='border: 1px #333 solid;'> <a href='update-profile.php'> Change </a> </td>
                        </tr>
                        <tr>
                            <td style='border: 1px #333 solid;'>Address</td>
                            <td style='border: 1px #333 solid;'> " . $row['addr'] . " </td>
                            <td style='border: 1px #333 solid;'> <a href='update-profile.php'> Change </a> </td>
                        </tr>
                        <tr>
                            <td style='border: 1px #333 solid;'>Email</td>
                            <td style='border: 1px #333 solid;'> " . $row['email'] . " </td>
                            <td style='border: 1px #333 solid;'> <a href='update-profile.php'> Change </a> </td>
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