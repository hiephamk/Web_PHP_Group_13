<?php ob_start(); ?>
<?php
$title = "action_login";
include "header.php";
?>


<body>

</body>

</html>
<?php
include 'db.php';
if (isset($_POST['email']) && isset($_POST['password'])) {
    function check_data($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $email = check_data($_POST['email']);
    $pass = check_data($_POST['password']);

    if (empty($email)) {
        echo "pls input email";
        exit();
    } elseif (empty($pass)) {
        echo "pls enter password";
        exit();
    } else {
        $sql_login = "SELECT * FROM customers WHERE email='$email' AND password = '$pass'";
        $result = mysqli_query($conn, $sql_login);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $pass) {
                $_SESSION['email'] = $row['email'];
                $_SESSION['customer_id'] = $row['customer_id'];
                $_SESSION['lname'] = $row['lname'];
                header('Location: index.php');
            } else {
                header("Location: login.php?error = Incorrect email or password");
                exit();
            }

        } else {
            header("Location: login.php?error = Incorrect email or password");
            exit();
        }
    }
}
?>