<?php 
    $title = "Insert News Info";
    $md = "News Information Form";
?>
<?php include_once '../header.php'; ?>

<head>
    <link rel="stylesheet" href="../styles/styles-header-footer.css">
</head>

<h2>Input Information Below</h2>
<!-- <form name="form1" method="post" action="news-process.php">
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="name">News tile</label>
                <input type="text" class="form-control" id="name" placeholder="Enter news title name" name="tile" required>
            </div>
            <div class="col">
                <!-- <label for="image">Image</label>
                <form method="post" enctype="multipart/form-data" action ="upload-script.php">
                    <input type="file" name ="file">
                    <input type="submit" name="submit1">
                <!-- </form>
        </div>
    </div> -->


        <form action = "./upload-script.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
        </form>    

    <!-- <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="category">News Category</label>
                <select class="form-control" id="category_name" name="category_name">
                    <option value="Travel">Travel</option>
                    <option value="Business">Business</option>
                    <option value="Techonogy">Techonogy</option>
                </select>
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
    </div> -->
    <!-- <button type="submit" class="btn btn-primary" id="submit" name="submit">Submit</button>
</form><br> -->

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
    } -->
</style>

<?php include_once '../footer.php'; ?>