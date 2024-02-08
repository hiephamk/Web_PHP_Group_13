<?php
ob_start();
session_start();

?>
<?php
include '../Database/db.php';
include "functions.php";

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
                header('Location: ../main_page/index.php');
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