<?php
$title = "Contact";
include "header.php";
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
    <p>Ready to Assist: Please Provide Your Request Details</p>
    
    <form method="post" action="">
      <div class="mb-3">
        <label for="fullName" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="fullName" name="fullName" placeholder="e.g John Smith">
        <span id="fnameError" style="color: red;"></span>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="username@gmail.com">
        <span id="emailError" style="color: red;"></span>
      </div>
      <div class="mb-3">
        <label for="phone" class="form-label">Phone number</label>
        <!-- <input type="tel" class="form-control" id="phoneNumber" name="phone" placeholder="+358 1234 56789"> -->
        <input type="tel" class="form-control" id="phone" name="phone" placeholder="+358 1234 56789" onchange="validatePhoneNumber()">
        <span id="phoneValidationMsg" style="color: red;"></span>
      </div>
      <div class="mb-3">
        <label for="addr" class="form-label">Address</label>
        <input type="text" class="form-control" id="addr" name="addr" placeholder="123 Boulevard">
      </div>
      <div class="mb-3">
        <label for="Country" class="form-label">Country</label>
        <input type="text" class="form-control" id="country" name="country" placeholder="Finland">
      </div>
      <div class="row">
        <div class="col">
          <label for="city" class="form-label">City</label>
          <input type="text" class="form-control" id="city" name="city" placeholder="Hameenlinna">
          <!-- Options here -->
          </select>
        </div>
        <div class="col">
          <label for="zip" class="form-label">Zip</label>
          <input type="text" class="form-control" id="zip" name="zip" placeholder="13100">
        </div>
      </div>
      <div class="mb-3">
        <label for="request" class="form-label">Request</label>
        <textarea class="form-control" id="request" name="request" rows="3"></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Send</button>
    </form>
  </section>

  <!-- JavaScript Validation  -->
  <script>
    // function to validate first name
    function validatefullName() {
      const fname = document.getElementById("fullName").value;
      const fnameError = document.getElementById("fnameError");

      if (fname.length < 3 || fname.length > 20) {
        fnameError.innerHTML = "Full name must be between 3 and 20 characters!";
        return false;
      } else {
        fnameError.innerHTML = "";
        return true;
      }
    }


    // function to validate last name
    function validatePhoneNumber() {
      // Get and trim phone number input
      const phoneNumber = document.getElementById('phone').value.trim();

      // Regex pattern for 10-digit phone number
      const pattern = /^\d{10}$/;

      // Validate phone number and update message
      const isValid = pattern.test(phoneNumber);
      document.getElementById('phoneValidationMsg').textContent = isValid ? '' :
        'Please enter a valid 10-digit phone number.';

      // Return validation status
      return isValid;
    }
    // function to validate last name
    function validateEmail() {
      const email = document.getElementById("email").value;
      const emailError = document.getElementById("emailError");

      if (email === "" || !email.includes("@")) {
        emailError.innerHTML = "Email must be in valid format! Example: abc@abc.com";
        return false;
      } else {
        emailError.innerHTML = "";
        return true;
      }
    }


    // event listeners for real time validation

    document.getElementById("fullName").addEventListener("input", validatefullName);
    document.getElementById("email").addEventListener("input", validateEmail);
    // document.getElementById("lname").addEventListener("input", validatelName);
  </script>






  <?php

  // Check if the 'submit' button in the form was clicked
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get data from POST and filter them to prevent SQL injection
    $fullName = filter_input(INPUT_POST, 'fullName', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $addr = filter_input(INPUT_POST, 'addr', FILTER_SANITIZE_STRING);
    $city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_STRING);
    $country = filter_input(INPUT_POST, 'country', FILTER_SANITIZE_STRING);
    $zip = filter_input(INPUT_POST, 'zip', FILTER_SANITIZE_STRING);
    $request = filter_input(INPUT_POST, 'request', FILTER_SANITIZE_STRING);

    // Include the database connection file
    include './sub_page/contact-db.php';

    // Define SQL query
    $sql = "INSERT INTO Requests (full_name, email, phone, addr, city, country, zip, request) 
            VALUES ('$fullName', '$email', '$phone', '$addr', '$city', '$country', '$zip', '$request')";

 
    if ($conn->query($sql) === TRUE) {
      echo "<H2 style='color:blue ; text-align:center'>Request updated successfully! </H2>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
    $conn = null;
  }

  ?>

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

<!--Footer-->
<?php include "footer.php"; ?>