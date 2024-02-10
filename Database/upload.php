<?php
$title = "upload_img";
?>

<body>
    <div id="content" class="container w-50 ml-5 mt-5">
        <form method="POST" action="upload.php" enctype="multipart/form-data">
            <input type="hidden" name="size" value="1000000">
            <input type="file" name="image">
            <button type="submit" name="upload">POST</button>
            <?php require "process_upload.php" ?>
        </form>
    </div>
</body>