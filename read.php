
<!-- Body -->
        <h2 class="text-center m-5">UPDATE INFORMATION</h2>
        <?php
            include 'db.php';
            // SQL query to retrieve data from the 'Requests' table
            $sql = "SELECT * FROM Requests";
            // Execute the SQL query and store the result
            $result = $conn->query($sql);
            // Check if there are any results
            if ($result->num_rows > 0) {
                echo "<table class='table'>
                        <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Phone number</th>
                                <th>Address</th>
                                <th>Country</th>
                                <th>City</th>
                                <th>Zip</th>
                                <th>Request</th>
                            
                            </tr>
                        </thead>
                        <tbody>";
                // Loop through the result set and display data in rows
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                    <td>{$row['full_name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['phone']}</td>
                    <td>{$row['addr']}</td>
                    <td>{$row['city']}</td>
                    <td>{$row['country']}</td>
                    <td>{$row['zip']}</td>
                    <td>{$row['request']}</td>
                    
                </tr>";
            }
            
            } else {
                // Display a message if no results are found
                echo "No results";
            }
            // close the connection when done
            $conn->close();
            ?>

