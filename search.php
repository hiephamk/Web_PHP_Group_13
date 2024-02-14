<?php $title = 'search';
include 'header.php';
session_start();
?>
<div class="container">
    <div>
        <h3 class="text-center">Result show here:!</h3>
    </div>


    <div class="d-flex flex-wrap">
        <?php

        if (isset($_POST['submit']) && ($_POST['submit'])) {
            include 'Database/db.php';
            $keyword = $_POST['keyword'];

            $sql = "SELECT * FROM Product WHERE product_name LIKE '%$keyword%'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo ' <div class="col-3 m-3 border border-1">
                        <img class="img-fluid border border-1" src="./img/' . $row['img'] . '" alt=""> .
                        <p>' . $row['product_name'] . '</p>
                        <p>' . $row['sort_description'] . '</p>
                        
                    </div>';
                }
                $conn->close();
            } else {
                echo "0 results";
            }
        }
        ?>
    </div>

</div>
<div>

</div>
<?php include 'footer.php'; ?>