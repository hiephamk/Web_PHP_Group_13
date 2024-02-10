<?php
ob_start();
$title = "Login";
include 'header.php';
?>

<body>
    <div class="container w-50">
        <h3 class="text-center fw-3">LOGIN</h3>
        <form class="bg-warning p-5 m-5 rounded-3" action="login.php" method="post"
            style="align-items: center; justify-items: center;">

            <div class="bg-warning text-danger">
                <?php
                if (isset($_GET['error'])) {
                    echo $_GET['error'];
                }
                ?>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address:</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
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
            <button type="submit" class=" btn-primary btn fs-4"
                style="margin:20px 0 20px 29%; width:300px; height:50px;border-radius:7px;box-shadow:2px 2px #234;"
                name="submit">Login</button>
        </form>
    </div>
    <div>
        <?php
        include './Database/db.php';
        include "./sub_page/functions.php";


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
                        $_SESSION['image'] = $row['image'];
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
</body>
<!--  -->
<?php include "footer.php"; ?>