<?php
ob_start();
$title = "Login";
include 'header.php';

?>
<div class="container w-25 bg-warning">
    <form action="login.php" method="post" style="align-items: center; justify-items: center;">
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
        <button type="submit" class="btn-primary btn" style="margin:0 0 20px 150px" name="submit">Login</button>
    </form>
</div>
<div>
    <?php
    include './Database/db.php';
    include "./sub_page/functions.php";
    check_data($data);

    if (isset($_POST['email']) && isset($_POST['password'])) {

        $email = check_data($_POST['email']);
        $pass = check_data($_POST['password']);

        if (empty($email)) {
            header("Location: login.php?error=Enter your email");
            exit();
        } else if (empty($pass)) {
            header("Location: login.php?error=Enter your password");
            exit();
        } else {
            $sql_login = "SELECT * FROM customers WHERE email='$email' AND password = '$pass'";
            $result = mysqli_query($conn, $sql_login);
            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                if ($row['email'] === $email && $row['password'] === $pass) {
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['customer_id'] = $row['customer_id'];
                    $_SESSION['fname'] = $row['fname'];
                    $_SESSION['lname'] = $row['lname'];
                    header('Location: index.php');
                } else {
                    header("Location: login.php?error=Incorrect email or password. Please try again!");
                    exit();
                }
            } else {
                header("Location: login.php?error=Incorrect email or password. Please try again!");
                exit();
            }
        }
    }
    ?>
</div>
<!--  -->
<?php include "footer.php"; ?>