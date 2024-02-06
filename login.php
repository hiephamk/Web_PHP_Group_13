<?php
ob_start();
?>
<?php
$title = "Login";
include 'header.php';

?>
<div class="container w-25">
    <form action="process_login.php" method="post">
        <h3 class="text-center">LOGIN</h3>
        <div class="bg-warning text-danger">
            <?php
            if (isset($_GET['error'])) {
                echo $_GET['error'];
            }
            ?>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address:</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password:</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remember me.</label>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Login</button>
    </form>
</div>
<!--  -->