<?php 
    $title = "Insert Products Info";
    $md = "Product Information Form";
?>
<?php include_once 'header.php'; ?>

<h2>Input Products Information Below</h2>
<form name="form1" method="post" action="product-process.php">
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="name">Product Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter product name" name="name" required minlength="3" maxlength="30">
                <span id="nameError" style="color: red;"></span>
            </div>
            <div class="col">
                <label for="image">Image</label>
                <input type="text" class="form-control" id="image" placeholder="Enter link of image" name="image" required>
                <span id="imageError" style="color: red;"></span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="category">Product Category</label>
                <select class="form-control" id="category" name="category">
                    <option value="Electric Cars">Electric Cars</option>
                    <option value="SUV Cars">SUV Cars</option>
                    <option value="Sedan Cars">Sedan Cars</option>
                    <option value="Assessories">Accessories</option>
                </select>
            </div>
            <div class="col">
                <label for="energy">Energy Type</label>
                <select class="form-control" id="energy" name="energy">
                    <option value="Electric">Electric</option>
                    <option value="Hybrid">Hybrid</option>
                    <option value="Petrol">Petrol</option>
                    <option value="Diesel">Diesel</option>
                </select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="short_desc">Short Description</label>
                <input type="text" class="form-control" id="short_desc" placeholder="Enter short description of product" name="short_desc" required>
                <span id="shortError" style="color: red;"></span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="full_desc">Full description</label>
                <textarea class="form-control" id="full_desc" placeholder="Enter full description of product" name="full_desc" required></textarea>
            </div>
        </div>
    </div>
    <a class="btn btn-back" href="product-manage.php" role="button">View product list</a>
    <button type="submit" class="btn btn-primary" id="submit" name="submit">Submit</button>
</form><br>

<script>
    // function to validate name
    function validateName() {
        const name = document.getElementById("name").value;
        const nameError = document.getElementById("nameError");
        if (name.length < 3 || name.length > 30) {
            nameError.innerHTML = "Name must be at least 3 characters and less than 30 characters";
            return false;
        }
        else {
            nameError.innerHTML = "";
            return true;
        }
    }

    // function to validate image URL
    function validateURL() {
        const image = document.getElementById("image").value;
        const imageError = document.getElementById("imageError");
        if (!(image.startsWith("http://") || image.startsWith("https://"))) {
            imageError.innerHTML = "Invalid image URL";
            return false;
        }
        else {
            imageError.innerHTML = "";
            return true;
        }
    }

    // function to validate short description
    function validateShort() {
        const short_desc = document.getElementById("short_desc").value;
        const shortError = document.getElementById("shortError");
        if (short_desc.length > 100) {
            shortError.innerHTML = "Short description must be less than 100 characters";
            return false;
        }
        else {
            shortError.innerHTML = "";
            return true;
        }
    }

    // event listener for real time validation
    document.getElementById("name").addEventListener("input", validateName);
    document.getElementById("short_desc").addEventListener("input", validateShort);
    document.getElementById("image").addEventListener("input", validateURL);
</script>

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
    .btn-back {
        color: #333333;
        text-align: center;
        margin-top: 10px;
        border: 1px solid #333333;
        border-radius: 5px;
        filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.35));
    }
    .btn-back:hover {
        background-color: #333333;
        color: #ffffff;
        font-weight: bold;
        filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
    }
</style>

<?php include_once 'footer.php'; ?>