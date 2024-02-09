<?php 
    $title = "Insert Products Info";
    $md = "Product Information Form";
?>
<?php include_once '../header.php'; ?>

<head>
    <link rel="stylesheet" href="../styles/styles-header-footer.css">
</head>

<h2>Input Products Information Below</h2>
<form name="form1" method="post" action="product-process.php">
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="name">Product Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter product name" name="name" required>
            </div>
            <div class="col">
                <label for="image">Image</label>
                <input type="text" class="form-control" id="image" placeholder="Enter link of image" name="image" required>
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
                <label for="short-desc">Short Description</label>
                <input type="text" class="form-control" id="short-desc" placeholder="Enter short description of product" name="short-desc">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="full-desc">Full description</label>
                <input type="text" class="form-control" id="full-desc" placeholder="Enter full description of product" name="full-desc">
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary" id="submit" name="submit">Submit</button>
</form><br>

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
</style>

<?php include_once '../footer.php'; ?>