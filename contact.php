<?php
$title = "Contact";
include "./layout/header.php";
?>

<!-- Body -->
<div class="full-container">
  <!-- Banner -->
  <div class="banner">
    <img src="img/contact-banner.jpg" alt="Banner">
  </div>
</div>
<!-- Main -->
<main class="container mt-5">
  <section class="contact-form">
    <h2>Send us your request</h2>
    <p>Qui sequam, voluptatum. Incidunt, quia aperiam quos cupiditate consectetur, illum doloremque nulla ratione, amet
      consequuntur voluptates natus neque modi animi nam quaerat consequatur!, a illo!</p>

    <form>
      <div class="mb-3">
        <label for="fullName" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="fullName" placeholder="e.g John Smith">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="username@gmail.com">
      </div>
      <div class="mb-3">
        <label for="phone" class="form-label">Phone number</label>
        <input type="tel" class="form-control" id="phone" placeholder="+358 1234 56789">
      </div>
      <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <input type="text" class="form-control" id="address" placeholder="123 Boulevard">
      </div>
      <div class="row">
        <div class="col">
          <label for="city" class="form-label">City</label>
          <select id="city" class="form-select">
            <option selected>Choose...</option>
            <!-- Options here -->
          </select>
        </div>
        <div class="col">
          <label for="zip" class="form-label">Zip</label>
          <input type="text" class="form-control" id="zip" placeholder="00000">
        </div>
      </div>
      <div class="mb-3">
        <label for="request" class="form-label">Request</label>
        <textarea class="form-control" id="request" rows="3"></textarea>
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="contact-agreement">
        <label class="form-check-label" for="contact-agreement">I agree to get contacted by email or message for this
          request.</label>
      </div>
      <button type="submit" class="btn btn-primary">Send</button>
    </form>
  </section>

  <!-- Contact info -->
  <div class="newcar-box">
    <div class="flex-item">
      <div class="newcar-text">
        <h3>QUESTIONS ABOUT DIGITAL SERVICES.</h3>
        <p>For example, Digital key, remote software upgrade, map functions or My T13 App.</p>
        <p><strong>Email:</strong> <a href="mailto:connecteddrive.fi@group-t13.fi">connecteddrive.fi@group-t13.fi</a>
        </p>
        <p><strong>Telephone number:</strong> +358 1234 56789</p>
        <p><strong>Opening hours</strong></p>
        <p>Monday to Friday from 8 am to 8 pm.</p>
      </div>
    </div>
    <div class="flex-item">
      <div class="newcar-img"><img src="./img/Contact-question.jpg" alt="digital-services">
      </div>
    </div>
  </div>
</main>

<?php
// Check if the 'send' button in the form was clicked
if (isset($_POST['submit'])) {
    // Retrieve data from the form and store it in variables
    $full_name = $_POST['full_name']; // Full name from the form
    $email = $_POST['email']; // Email from the form
    $phone = $_POST['phone']; // Phone number from the form
    $address = $_POST['address']; // Address from the form
    $city = $_POST['city']; // City from the form
    $zip = $_POST['zip']; // Zip code from the form
    $request = $_POST['request']; // Request details from the form

    // Include the database connection file
    include 'db.php'; // 'db.php' should contain your connection logic

    // Define an SQL query to insert data into the 'Requests' table
    $stmt = $conn->prepare("INSERT INTO Requests (full_name, email, phone, address, city, zip, request) VALUES (?, ?, ?, ?, ?, ?, ?)");
    
    // Bind parameters to the SQL query
    $stmt->bind_param("sssssss", $full_name, $email, $phone, $address, $city, $zip, $request);

    // Execute the SQL query using the database connection
    if ($stmt->execute()) {
        // If the query was successful, display a success message
        echo "New request added";
    } else {
        // If there was an error in the query, display an error message
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
    
    // Close the database connection
    $conn->close();
}
?>


<!--Footer-->
<?php include "./layout/footer.php"; ?>
